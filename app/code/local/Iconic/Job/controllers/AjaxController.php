<?php
class Iconic_Job_AjaxController extends Mage_Core_Controller_Front_Action{
	
	public function indexAction(){		
        $this->loadLayout();  
		$this->renderLayout();
	}
	
	public function confirmAction(){
		$this->loadLayout();  
		$this->renderLayout();
	}

    public function testAction(){
        $callbackUrl = "http://iconic.local/oauth_admin.php";
        $temporaryCredentialsRequestUrl = "http://iconic.local/oauth/initiate?oauth_callback=" . urlencode($callbackUrl);
        $adminAuthorizationUrl = 'http://iconic.local/admin/oauth_authorize';
        $accessTokenRequestUrl = 'http://iconic.local/oauth/token';
        $apiUrl = 'http://iconic.local/api/rest';
        $consumerKey = '6f61f3d02302c0f0126f443bfbb6dad0';
        $consumerSecret = '75b497350e2b33dc2fdffbbd506f9272';

        session_start();

        if (!isset($_GET['oauth_token']) && isset($_SESSION['state']) && $_SESSION['state'] == 1) {
            $_SESSION['state'] = 0;
        }

        $authType = ($_SESSION['state'] == 2) ? OAUTH_AUTH_TYPE_AUTHORIZATION : OAUTH_AUTH_TYPE_URI;
        $oauthClient = new OAuth($consumerKey, $consumerSecret, OAUTH_SIG_METHOD_HMACSHA1, $authType);
        $oauthClient->enableDebug();

        if (!isset($_GET['oauth_token']) && !isset($_SESSION['state'])) {
            $requestToken = $oauthClient->getRequestToken($temporaryCredentialsRequestUrl);
            $_SESSION['secret'] = $requestToken['oauth_token_secret'];
            $_SESSION['state'] = 1;
            header('Location: ' . $adminAuthorizationUrl . '?oauth_token=' . $requestToken['oauth_token']);
            exit;
        } else if (isset($_SESSION['state']) && $_SESSION['state'] == 1) {
            $oauthClient->setToken($_GET['oauth_token'], $_SESSION['secret']);
            $accessToken = $oauthClient->getAccessToken($accessTokenRequestUrl);
            $_SESSION['state'] = 2;
            $_SESSION['token'] = $accessToken['oauth_token'];
            $_SESSION['secret'] = $accessToken['oauth_token_secret'];
            header('Location: ' . $callbackUrl);
            exit;
        }
        print_r($_SESSION);//get this by next page
    }
}
