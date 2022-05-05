-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: scandiwebtest
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

--
-- Current Database: `scandiwebtest`
--

CREATE TABLE `product` (
  `sku` varchar(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `price` int(22) NOT NULL,
  `productType` varchar(22) NOT NULL,
  `size` varchar(22) DEFAULT NULL,
  `weight` varchar(22) DEFAULT NULL,
  `height` varchar(22) DEFAULT NULL,
  `width` varchar(22) DEFAULT NULL,
  `length` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump completed on 2022-05-04 15:41:52
