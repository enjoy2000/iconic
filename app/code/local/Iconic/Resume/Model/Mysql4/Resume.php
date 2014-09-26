<?php
 
class Iconic_Resume_Model_Mysql4_Resume extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('resume/resume');
    }
}