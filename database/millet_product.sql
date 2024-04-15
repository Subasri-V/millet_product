-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2024 at 12:47 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `millet_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `pr_admin`
--

CREATE TABLE `pr_admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_admin`
--

INSERT INTO `pr_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pr_blockchain`
--

CREATE TABLE `pr_blockchain` (
  `id` int(11) NOT NULL default '0',
  `block_id` int(11) NOT NULL,
  `pre_hash` varchar(200) NOT NULL,
  `hash_value` varchar(200) NOT NULL,
  `sdata` varchar(200) NOT NULL,
  `ptype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_blockchain`
--


-- --------------------------------------------------------

--
-- Table structure for table `pr_category`
--

CREATE TABLE `pr_category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_category`
--

INSERT INTO `pr_category` (`id`, `category`) VALUES
(1, 'Millet');

-- --------------------------------------------------------

--
-- Table structure for table `pr_complaint`
--

CREATE TABLE `pr_complaint` (
  `id` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `pcode` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL,
  `rdate` varchar(20) NOT NULL,
  `product` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_complaint`
--


-- --------------------------------------------------------

--
-- Table structure for table `pr_manufacture`
--

CREATE TABLE `pr_manufacture` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_manufacture`
--

INSERT INTO `pr_manufacture` (`id`, `name`, `mobile`, `email`, `address`, `uname`, `pass`, `status`) VALUES
(1, 'AKS', 9877894878, 'aks@gmail.com', 'Thanjavur', 'aks', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pr_online_sale`
--

CREATE TABLE `pr_online_sale` (
  `id` int(11) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `web_url` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `rdate` varchar(20) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_online_sale`
--

INSERT INTO `pr_online_sale` (`id`, `shop`, `web_url`, `status`, `rdate`, `supplier`, `company`) VALUES
(1, 'rt1', 'http://iotcloud.co.in/shopping', 2, '16-03-2024', 'bks', 'aks');

-- --------------------------------------------------------

--
-- Table structure for table `pr_product`
--

CREATE TABLE `pr_product` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `product` varchar(40) NOT NULL,
  `company` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `mdate` varchar(15) NOT NULL,
  `edate` varchar(15) NOT NULL,
  `pcode` varchar(20) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `ttype` varchar(20) NOT NULL,
  `transport` varchar(50) NOT NULL,
  `tlocation` varchar(30) NOT NULL,
  `tdate` varchar(15) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `retailer` varchar(20) NOT NULL,
  `slocation` varchar(50) NOT NULL,
  `sdate` varchar(15) NOT NULL,
  `exp_st` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `num_piece` int(11) NOT NULL,
  `code1` varchar(30) NOT NULL,
  `code2` varchar(30) NOT NULL,
  `distribute` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_product`
--

INSERT INTO `pr_product` (`id`, `category`, `product`, `company`, `price`, `description`, `location`, `mdate`, `edate`, `pcode`, `rdate`, `ttype`, `transport`, `tlocation`, `tdate`, `supplier`, `retailer`, `slocation`, `sdate`, `exp_st`, `status`, `num_piece`, `code1`, `code2`, `distribute`, `balance`) VALUES
(1, 'Millet', 'Foxtail Millet', 'aks', 200, '2 kg in each pack', 'Salem', '2024-02-15', '2024-03-15', 'K0001', '16-03-2024', '', '', '', '2024-03-15', '', '', '', '', 0, 0, 20, 'K0001P01', 'K0001P20', 20, 0),
(2, 'Millet', 'Pearl Millet', 'aks', 100, 'each pack 3 kg', 'Salem', '2024-03-10', '2024-04-10', 'K0002', '16-03-2024', '', '', '', '2024-04-10', '', '', '', '', 0, 0, 10, 'K0002P01', 'K0002P10', 5, 5),
(3, 'Millet', 'Finger Millet', 'aks', 50, '2kg per pack', 'Thanjavur', '2023-12-20', '2024-01-20', 'K0003', '16-03-2024', '', '', '', '2024-01-20', '', '', '', '', 0, 0, 5, 'K0003P1', 'K0003P5', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_product1`
--

CREATE TABLE `pr_product1` (
  `id` int(11) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `product` varchar(50) NOT NULL,
  `pcode` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_product1`
--

INSERT INTO `pr_product1` (`id`, `shop`, `product`, `pcode`, `price`, `img1`, `img2`) VALUES
(1, 'rt1', 'Foxtail Millet', 'K6102760', 100, 'F1pr1.jpg', 'B1pr11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pr_productcode`
--

CREATE TABLE `pr_productcode` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `pcount` int(11) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `sale` int(11) NOT NULL,
  `sale_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_productcode`
--

INSERT INTO `pr_productcode` (`id`, `pid`, `company`, `product_code`, `pcount`, `supplier`, `shop`, `sale`, `sale_date`) VALUES
(1, 1, 'aks', 'K7101548', 1, 'bks', 'rt1', 1, ''),
(2, 1, 'aks', 'K6102760', 2, 'bks', 'rt1', 0, ''),
(3, 1, 'aks', 'K9103239', 3, 'bks', 'rt1', 0, ''),
(4, 1, 'aks', 'K1104817', 4, 'bks', 'rt1', 0, ''),
(5, 1, 'aks', 'K3105806', 5, 'bks', 'rt1', 0, ''),
(6, 1, 'aks', 'K2106504', 6, 'bks', '', 0, ''),
(7, 1, 'aks', 'K3107605', 7, 'bks', '', 0, ''),
(8, 1, 'aks', 'K5108246', 8, 'bks', '', 0, ''),
(9, 1, 'aks', 'K2109511', 9, 'bks', '', 0, ''),
(10, 1, 'aks', 'K91010544', 10, 'bks', '', 0, ''),
(11, 1, 'aks', 'K41011850', 11, 'cks', 'rt2', 0, ''),
(12, 1, 'aks', 'K31012350', 12, 'cks', 'rt2', 0, ''),
(13, 1, 'aks', 'K71013329', 13, 'cks', 'rt2', 0, ''),
(14, 1, 'aks', 'K61014781', 14, 'cks', 'rt2', 0, ''),
(15, 1, 'aks', 'K91015851', 15, 'cks', 'rt2', 0, ''),
(16, 1, 'aks', 'K61016539', 16, 'cks', 'rt2', 0, ''),
(17, 1, 'aks', 'K41017344', 17, 'cks', '', 0, ''),
(18, 1, 'aks', 'K61018307', 18, 'cks', '', 0, ''),
(19, 1, 'aks', 'K91019589', 19, 'cks', '', 0, ''),
(20, 1, 'aks', 'K31020938', 20, 'cks', '', 0, ''),
(21, 2, 'aks', 'K42021506', 1, 'bks', '', 0, ''),
(22, 2, 'aks', 'K22022771', 2, 'bks', '', 0, ''),
(23, 2, 'aks', 'K82023534', 3, 'bks', '', 0, ''),
(24, 2, 'aks', 'K82024176', 4, 'bks', '', 0, ''),
(25, 2, 'aks', 'K62025270', 5, 'bks', '', 0, ''),
(26, 2, 'aks', 'K72026734', 6, '', '', 0, ''),
(27, 2, 'aks', 'K92027698', 7, '', '', 0, ''),
(28, 2, 'aks', 'K82028298', 8, '', '', 0, ''),
(29, 2, 'aks', 'K42029891', 9, '', '', 0, ''),
(30, 2, 'aks', 'K12030518', 10, '', '', 0, ''),
(31, 3, 'aks', 'K93031395', 1, '', '', 0, ''),
(32, 3, 'aks', 'K83032984', 2, '', '', 0, ''),
(33, 3, 'aks', 'K13033975', 3, '', '', 0, ''),
(34, 3, 'aks', 'K53034713', 4, '', '', 0, ''),
(35, 3, 'aks', 'K93035609', 5, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pr_request`
--

CREATE TABLE `pr_request` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `num_prd` int(11) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_request`
--


-- --------------------------------------------------------

--
-- Table structure for table `pr_request2`
--

CREATE TABLE `pr_request2` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `num_prd` int(11) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_request2`
--


-- --------------------------------------------------------

--
-- Table structure for table `pr_sale`
--

CREATE TABLE `pr_sale` (
  `id` int(11) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `kid` int(11) NOT NULL,
  `pcode` varchar(30) NOT NULL,
  `rdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_sale`
--

INSERT INTO `pr_sale` (`id`, `shop`, `pid`, `rid`, `kid`, `pcode`, `rdate`) VALUES
(1, 'rt1', 1, 1, 1, 'K7101548', '16-03-2024'),
(2, 'rt1', 1, 1, 2, 'K6102760', '16-03-2024'),
(3, 'rt1', 1, 1, 3, 'K9103239', '16-03-2024'),
(4, 'rt1', 1, 1, 1, 'K7101548', '16-03-2024');

-- --------------------------------------------------------

--
-- Table structure for table `pr_send`
--

CREATE TABLE `pr_send` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `num_prd` int(11) NOT NULL,
  `prd_from` varchar(30) NOT NULL,
  `prd_to` varchar(30) NOT NULL,
  `prd1` int(11) NOT NULL,
  `prd2` int(11) NOT NULL,
  `company` varchar(20) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `distribute` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_send`
--

INSERT INTO `pr_send` (`id`, `pid`, `num_prd`, `prd_from`, `prd_to`, `prd1`, `prd2`, `company`, `supplier`, `rdate`, `distribute`, `balance`) VALUES
(1, 1, 10, 'K0001P01', 'K0001P10', 1, 10, 'aks', 'bks', '16-03-2024', 5, 5),
(2, 1, 10, 'K0001P11', 'K0001P20', 11, 20, 'aks', 'cks', '16-03-2024', 6, 4),
(3, 2, 5, 'K0002P01', 'K0002P05', 1, 5, 'aks', 'bks', '16-03-2024', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pr_send2`
--

CREATE TABLE `pr_send2` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `num_prd` int(11) NOT NULL,
  `prd_from` varchar(30) NOT NULL,
  `prd_to` varchar(30) NOT NULL,
  `prd1` int(11) NOT NULL,
  `prd2` int(11) NOT NULL,
  `company` varchar(20) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `distribute` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `shop` varchar(20) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_send2`
--

INSERT INTO `pr_send2` (`id`, `pid`, `num_prd`, `prd_from`, `prd_to`, `prd1`, `prd2`, `company`, `supplier`, `rdate`, `distribute`, `balance`, `shop`, `rid`) VALUES
(1, 1, 5, 'K0001P01', 'K0001P05', 1, 5, 'aks', 'bks', '16-03-2024', 0, 0, 'rt1', 1),
(2, 1, 5, 'K0001P11', 'K0001P15', 11, 15, 'aks', 'cks', '16-03-2024', 0, 0, 'rt2', 2),
(3, 1, 1, 'K0001P16', 'K0001P16', 16, 16, 'aks', 'cks', '16-03-2024', 0, 0, 'rt2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pr_shop`
--

CREATE TABLE `pr_shop` (
  `id` int(11) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `distributor` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_shop`
--

INSERT INTO `pr_shop` (`id`, `owner`, `distributor`, `name`, `mobile`, `email`, `city`, `uname`, `pass`, `status`, `name2`) VALUES
(1, 'aks', 'bks', 'RT1', 8895677415, 'ram@gmail.com', 'Karur', 'rt1', '123456', 1, 'Ram'),
(2, 'aks', 'cks', 'RT2', 7785962478, 'salvam@gmail.com', 'Namakkal', 'rt2', '123456', 1, 'Selvam');

-- --------------------------------------------------------

--
-- Table structure for table `pr_supplier`
--

CREATE TABLE `pr_supplier` (
  `id` int(11) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rdate` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `gst_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_supplier`
--

INSERT INTO `pr_supplier` (`id`, `owner`, `name`, `mobile`, `email`, `city`, `uname`, `pass`, `rdate`, `status`, `name2`, `gst_number`) VALUES
(1, 'aks', 'BKS', 8975894685, 'rajan@gmail.com', 'Madurai', 'bks', '123456', '16-03-2024', 0, 'Rajan', '114-523-478'),
(2, 'aks', 'CKS', 9875695454, 'bgeduscanner@gmail.com', 'Salem', 'cks', '123456', '16-03-2024', 0, 'Kamal', '5897-421-632');
