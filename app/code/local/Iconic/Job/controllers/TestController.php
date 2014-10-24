<?php
/**
 * Created by PhpStorm.
 * User: hat.dao
 * Date: 10/7/2014
 * Time: 3:37 PM
 */
class Iconic_Job_TestController extends Mage_Core_Controller_Front_Action
{
    protected $hostname = 'http://iconic.local/';
    protected $config = array();

    public function indexAction()
    {
        $consumerKey = '6f61f3d02302c0f0126f443bfbb6dad0';
        $consumerSecret = '75b497350e2b33dc2fdffbbd506f9272';
        $callbackUrl = 'http://iconic.local/';
        $this->config = array(
            'callbackUrl' => $callbackUrl,
            'requestTokenUrl' => $this->hostname . '/oauth/initiate',
            'siteUrl' => $this->hostname . '/oauth',
            'consumerKey' => $consumerKey,
            'consumerSecret' => $consumerSecret,
            'authorizeUrl' => $this->hostname . '/admin/oauth_authorize',
            // 'authorizeUrl' => $this->hostname . '/oauth/authorize',
            'accessTokenUrl' => $this->hostname . '/oauth/token'
        );
        var_dump(Mage::getSingleton('core/session'));die;
        $accesssession = new Zend_Session_Namespace('AccessToken');
        if (isset($accesssession->accessToken)) {
            $token = unserialize($accesssession->accessToken);
            // $client = $token->getHttpClient($this->config);
            $client = new Zend_Http_Client();
            $adapter = new Zend_Http_Client_Adapter_Curl();
            $client->setAdapter($adapter);
            $adapter->setConfig(array(
                'adapter'   => 'Zend_Http_Client_Adapter_Curl',
                'curloptions' => array(CURLOPT_FOLLOWLOCATION => true),
            ));
            $client->setUri($this->hostname . '/api/rest/products');
            $client->setParameterGet('oauth_token', $token->getToken());
            $client->setParameterGet('oauth_token_secret', $token->getTokenSecret());
            $response = $client->request('GET');
            $products = Zend_Json::decode($response->getBody());
        } else {
            $consumer = new Zend_Oauth_Consumer($this->config);
            $token = $consumer->getRequestToken();
            $requestsession = new Zend_Session_Namespace('RequestToken');
            $requestsession->requestToken = serialize($token);
            $consumer->redirect();
        }
        $this->view->products = $products;
    }

    public function callbackAction()
    {
        $requestsession = new Zend_Session_Namespace('RequestToken');
        if (!empty($_GET) && isset($requestsession->requestToken)) {
            $accesssession = new Zend_Session_Namespace('AccessToken');
            $consumer = new Zend_Oauth_Consumer($this->config);
            $token = $consumer->getAccessToken(
                $_GET,
                unserialize($requestsession->requestToken)
            );
            $accesssession->accessToken = serialize($token);
            // Now that we have an Access Token, we can discard the Request Token
            unset($requestsession->requestToken);
            // $this->_redirect();
            $this->redirect('*/*/index');die;
        } else {
            // Mistaken request? Some malfeasant trying something?
            throw new Exception('Invalid callback request. Oops. Sorry.');
        }
    }

    public function callbackrejectedAction()
    {
        // rejected
    }
}
