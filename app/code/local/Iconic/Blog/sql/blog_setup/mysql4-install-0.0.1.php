<?php

$installer = $this;
$installer->startSetup();

$installer->run("

CREATE TABLE {$this->getTable('blog/blog')} (
   `blog_id` int(11) AUTO_INCREMENT NOT NULL
  ,`title` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`category_id` varchar(255) NOT NULL
  ,`author_id` int(3) NOT NULL
  ,`short_content` text NULL  DEFAULT NULL
  ,`full_content` text NOT NULL
  ,`image` varchar(255) NOT NULL
  ,`meta_keywords` text NOT NULL
  ,`meta_description` text NOT NULL
  ,`create_time` datetime NOT NULL
  ,`time` datetime NULL  DEFAULT NULL
  ,`update_time` datetime NULL  DEFAULT NULL
  ,`views` int(11) NOT NULL  DEFAULT 0
  ,`facebook` int(11) NOT NULL  DEFAULT 0
  ,`twitter` int(11) NOT NULL  DEFAULT 0
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_tblog PRIMARY KEY (blog_id)
);

CREATE TABLE {$this->getTable('blog/author')} (
   `author_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`image` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mblogauthor PRIMARY KEY (author_id)
);

CREATE TABLE {$this->getTable('blog/category')} (
   `category_id` int(11) AUTO_INCREMENT NOT NULL
  ,`parentcategory_id` int(11) NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mblogcategory PRIMARY KEY (category_id)
);

CREATE TABLE {$this->getTable('blog/parentcategory')} (
   `parentcategory_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mblogparentcategory PRIMARY KEY (parentcategory_id)
);

CREATE TABLE {$this->getTable('blog/pingserver')} (
   `server_id` int(11) AUTO_INCREMENT NOT NULL
  ,`url` varchar(255) NOT NULL
  ,CONSTRAINT PK_tblogpingserver PRIMARY KEY (server_id)
);

");


$trans = Mage::helper('job');

$setup = Mage::getModel('customer/entity_setup');
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
