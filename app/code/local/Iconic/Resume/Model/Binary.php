<?php
 
class Iconic_Resume_Model_Resume_Binary extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('resume/binary');
    }
}