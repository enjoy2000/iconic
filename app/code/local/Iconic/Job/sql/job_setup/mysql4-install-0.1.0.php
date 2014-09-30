<?php

$installer = $this;

$installer->startSetup();
$installer->run("

CREATE TABLE {$this->getTable('job/country')} (
   `country_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(55) NOT NULL
  ,`code` varchar(3) NOT NULL
  ,`job_flag` tinyint NOT NULL  DEFAULT 0
  ,`url_key` varchar(50) NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjoblistcountry PRIMARY KEY (country_id)
);

CREATE TABLE {$this->getTable('job/location')} (
   `location_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(55) NOT NULL
  ,`country_id` int(11) NOT NULL
  ,`url_key` varchar(55) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjoblistlocation PRIMARY KEY (location_id)
);

CREATE TABLE {$this->getTable('job/job')} (
   `job_id` int(11) AUTO_INCREMENT NOT NULL
  ,`customer_id` int(11) NULL  DEFAULT NULL
  ,`title` varchar(255) NOT NULL
  ,`requirement` text NOT NULL
  ,`info` text NOT NULL
  ,`status` int(3) NOT NULL  DEFAULT 1
  ,`created_time` datetime NULL  DEFAULT NULL
  ,`category_id` int(11) NOT NULL
  ,`location_id` varchar(100) NOT NULL
  ,`job_level` int(11) NOT NULL
  ,`job_salary` int(11) NOT NULL  DEFAULT 0
  ,`job_type` int(11) NOT NULL
  ,`update_time` datetime NULL  DEFAULT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`job_salary_to` int(11) NULL  DEFAULT 0
  ,`job_salary_currency` int(3) NOT NULL
  ,`function_category_id` int(11) NOT NULL
  ,`job_salary_type` int(3) NOT NULL
  ,`id_job_id` varchar(11) NOT NULL
  ,`language_id` varchar(255) NULL  DEFAULT NULL
  ,`amount` int(11) NULL  DEFAULT NULL
  ,`feature_id` varchar(255) NULL  DEFAULT NULL
  ,`created_user` int(11) NOT NULL
  ,`modified_time` datetime NULL
  ,`modified_user` int(11) NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_tjob PRIMARY KEY (job_id)
);

CREATE TABLE {$this->getTable('job/status')} (
   `status_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjobstatus PRIMARY KEY (status_id)
);

CREATE TABLE {$this->getTable('job/category')} (
   `category_id` int(11) AUTO_INCREMENT NOT NULL
  ,`parentcategory_id` int(11) NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjobcategory PRIMARY KEY (category_id)
);

CREATE TABLE {$this->getTable('job/feature')} (
   `feature_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjobfeature PRIMARY KEY (feature_id)
);

CREATE TABLE {$this->getTable('job/langlevel')} (
   `langlevel_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjoblanglevel PRIMARY KEY (langlevel_id)
);

CREATE TABLE {$this->getTable('job/language')} (
   `language_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NULL
  ,`flag` varchar(255) NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjoblanguage PRIMARY KEY (language_id)
);

CREATE TABLE {$this->getTable('job/level')} (
   `level_id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjoblevel PRIMARY KEY (level_id)
);

CREATE TABLE {$this->getTable('job/parentcategory')} (
   `parentcategory_id` int NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`url_key` varchar(255) NOT NULL
  ,`group_category` varchar(25) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjobparentcategory PRIMARY KEY (parentcategory_id)
);

CREATE TABLE {$this->getTable('job/type')} (
   `type_id` int AUTO_INCREMENT NOT NULL
  ,`name` varchar(255) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mjobtype PRIMARY KEY (type_id)
);

CREATE TABLE {$this->getTable('job/salaryCurrency')} (
   `id` int(11) AUTO_INCREMENT NOT NULL
  ,`short_name` varchar(5) NOT NULL
  ,`name` varchar(50) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_msalarycurrency PRIMARY KEY (id)
);

CREATE TABLE {$this->getTable('job/salaryType')} (
   `id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(10) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_msalarytype PRIMARY KEY (id)
);

");

$installer->endSetup();