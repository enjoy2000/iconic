<?php
 
class Iconic_Resume_Model_Mysql4_Resume_Binary_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('resume/binary');
    }
}