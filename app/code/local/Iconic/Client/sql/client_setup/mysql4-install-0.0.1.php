<?php
 
$installer = $this;
 
$installer->startSetup();
 
$trans = Mage::helper('job'); 

$setup = Mage::getModel('customer/entity_setup');
$installer->addAttribute('customer', 'company_logo', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => $trans->__('Company Logo'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
        'source' => 'job/entity_company_logo',
));
$installer->addAttribute('customer', 'company_name', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => $trans->__('Company Name'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
        'source' => 'job/entity_company_name',
));
$installer->addAttribute('customer', 'company_address', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => $trans->__('Company Adress'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
        'source' => 'job/entity_company_address',
));
$installer->addAttribute('customer', 'company_size', array(
    'type' => 'int',
    'input' => 'text',
    'label' => $trans->__('Company Size'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
        'source' => 'job/entity_company_size',
));
$installer->addAttribute('customer', 'company_website', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => $trans->__('Company Website'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
        'source' => 'job/entity_company_website',
));
$installer->addAttribute('customer', 'company_detail', array(
    'type' => 'text',
    'input' => 'textarea',
    'label' => $trans->__('Company Detail'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
        'source' => 'job/entity_company_detail',
));

$installer->addAttribute('customer', 'sex', array(
    'type' => 'varchar',
    'input' => 'select',
    'label' => $trans->__('Giới tính'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
    'source' => 'job/entity_sex',
));

$installer->addAttribute('customer', 'location', array(
    'type' => 'int',
    'input' => 'select',
    'label' => $trans->__('Địa chỉ'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
    'source' => 'job/entity_location',
));

$installer->addAttribute('customer', 'birth_year', array(
    'type' => 'int',
    'input' => 'select',
    'label' => $trans->__('Năm sinh'),
    'global' => 1,
    'visible' => 1,
    'required' => 1,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
    'source' => 'job/entity_birth_year',
));

$installer->addAttribute('customer', 'upload_cv', array(
    'type' => 'varchar',
    'input' => 'input',
    'label' => $trans->__('CV'),
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
    'source' => 'job/entity_upload_cv',
));

$installer->addAttribute('customer', 'pic', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => $trans->__('PIC'),
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
    'source' => 'job/entity_pic',
));

$installer->addAttribute('customer', 'phone', array(
    'type' => 'int',
    'input' => 'text',
    'label' => $trans->__('Phone'),
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
    'source' => 'job/entity_phone',
));

 
$installer->endSetup();