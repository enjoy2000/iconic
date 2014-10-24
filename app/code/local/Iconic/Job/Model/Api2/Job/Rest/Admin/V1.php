<?php

class Iconic_Job_Model_Api2_Job_Rest_Admin_V1 extends Mage_Api2_Model_Resource{

    protected function _retrieveCollection(){
        $collection = Mage::getModel('job/job')->getCollection();
        $collection = $collection->toArray();

        return $collection;
    }
}