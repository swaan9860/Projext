create database test;

use test;

  CREATE TABLE `registered` (
    `id` int(11) NOT NULL auto_increment,
    `firstname` varchar(100) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `age` int(3) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `username` varchar(100) NOT NULL,

    PRIMARY KEY  (`id`)
  );