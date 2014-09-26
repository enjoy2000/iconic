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


$installer->endSetup();
