<?php
 
class Iconic_Resume_Model_Resume_Change extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('resume/change');
    }
}