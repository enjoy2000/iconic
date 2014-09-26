<?php

$installer = $this;

$installer->startSetup();

$installer->run("

CREATE TABLE {$this->getTable('resume/resume')} (
   `resume_id` int(11) AUTO_INCREMENT NOT NULL
  ,`customer_id` int(11) NOT NULL
  ,`name` varchar(50) NOT NULL
  ,`birth_day` datetime NOT NULL
  ,`gender` tinyint NOT NULL
  ,`nation_id` int(11) NOT NULL
  ,`address` varchar(255) NULL  DEFAULT NULL
  ,`provincy_id` int(11) NOT NULL
  ,`country_id` int(11) NOT NULL
  ,`mobile` int(11) NOT NULL
  ,`email` varchar(50) NOT NULL
  ,`current_salary` int(11) NULL  DEFAULT NULL
  ,`current_salary_currency` int(3) NULL  DEFAULT NULL
  ,`current_salary_type` int(3) NULL  DEFAULT NULL
  ,`expected_salary` int(11) NOT NULL
  ,`expected_salary_currency` int(3) NOT NULL
  ,`expected_salary_type` int(3) NOT NULL
  ,`expected_industry` int(11) NOT NULL
  ,`expected_function` int(11) NOT NULL
  ,`expected_country` int(11) NOT NULL
  ,`expected_job_level` int(11) NOT NULL
  ,`school_vn` varchar(50) NULL  DEFAULT NULL
  ,`school_oversea` varchar(50) NULL  DEFAULT NULL
  ,`faculty` varchar(50) NULL  DEFAULT NULL
  ,`degree` int(5) NULL  DEFAULT NULL
  ,`graduated_year` int(4) NULL  DEFAULT NULL
  ,`exp_industry` int(11) NULL  DEFAULT NULL
  ,`exp_function` int(11) NULL  DEFAULT NULL
  ,`exp_job_level` int(11) NULL  DEFAULT NULL
  ,`exp_year` int(3) NULL  DEFAULT NULL
  ,`exp_details` text NULL  DEFAULT NULL
  ,`language_japanese` int(3) NULL  DEFAULT NULL
  ,`language_english` int(3) NULL  DEFAULT NULL
  ,`language_vietnamese` int(3) NULL  DEFAULT NULL
  ,`other_language` varchar(255) NULL  DEFAULT NULL
  ,`skill` varchar(255) NULL  DEFAULT NULL
  ,`change_job_type` int(3) NOT NULL
  ,`created_time` datetime NOT NULL
  ,`created_user` int(11) NOT NULL
  ,`modified_time` datetime NULL
  ,`modified_user` int(11) NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_tjobresume PRIMARY KEY (resume_id)
);

CREATE TABLE {$this->getTable('resume/binary')} (
   `id` int(11) AUTO_INCREMENT NOT NULL
  ,`customer_id` int(11) NOT NULL
  ,`name` varchar(50) NOT NULL
  ,`type` varchar(30) NOT NULL
  ,`size` int NOT NULL
  ,`content` MEDIUMBLOB NOT NULL
  ,`content_text` text NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_tresumebinary PRIMARY KEY (id)
);

CREATE TABLE {$this->getTable('resume/degree')} (
   `id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(200) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mresumedegree PRIMARY KEY (id)
);

CREATE TABLE {$this->getTable('resume/change')} (
   `id` int(11) AUTO_INCREMENT NOT NULL
  ,`name` varchar(200) NOT NULL
  ,`delete_flag` tinyint NOT NULL  DEFAULT 0
  ,CONSTRAINT PK_mresumechange PRIMARY KEY (id)
);

");

$installer->endSetup();