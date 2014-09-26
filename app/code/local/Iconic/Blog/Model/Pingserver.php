<?php
 
class Iconic_Blog_Model_Pingserver extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('blog/pingserver');
    }
}