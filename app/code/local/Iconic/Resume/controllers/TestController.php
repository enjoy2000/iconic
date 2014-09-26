<?php
/**
 * Created by PhpStorm.
 * User: hat.dao
 * Date: 9/26/2014
 * Time: 3:27 PM
 */
class Iconic_Resume_TestController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        $jobs = Mage::getModel('job/job')->getCollection();
        
        foreach($jobs as $job){
            if($job->get){}
        }
        echo 'OK';
    }

    public function confirmAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
}
