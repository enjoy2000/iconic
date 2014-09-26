<?php
 
class Iconic_Resume_Model_Mysql4_Level_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('resume/resume');
    }
}