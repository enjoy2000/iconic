<?php
 
class Iconic_Job_Model_SalaryCurrency extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('job/salary_currency');
    }
}