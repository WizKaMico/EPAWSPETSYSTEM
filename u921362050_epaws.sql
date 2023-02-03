-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2023 at 07:51 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u921362050_epaws`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pcode` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `parent` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `pet` varchar(250) NOT NULL,
  `breed_dog` varchar(250) NOT NULL,
  `breed_cat` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `date_appointment` date NOT NULL,
  `time` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_created` date NOT NULL,
  `arc` int(1) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `arc_initiator` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pcode`, `fullname`, `parent`, `email`, `phone`, `state`, `pet`, `breed_dog`, `breed_cat`, `gender`, `weight`, `date_appointment`, `time`, `status`, `date_created`, `arc`, `pet_id`, `arc_initiator`) VALUES
(1, 'EPAWS-9353', 'Tofi', '', 'axcelalcan25@gmail.com', '09054293265', 'PET GROOMING', 'CAT', '', '', '', '', '2022-12-13', '14:00', 'CANCEL', '2022-12-08', 0, 0, 0),
(2, 'EPAWS-9133', 'Tofi', '', 'tricore012@gmail.com', '09166513189', 'PET GROOMING', 'CAT', '', '', '', '', '2022-12-12', '10:00', 'NO SHOW', '2022-12-08', 0, 2, 0),
(3, 'EPAWS-8000', 'chiquie', '', 'francescalouisse.bautista.l@bulsu.edu.ph', '09260512809', 'PET APPOINTMENT', 'DOG', '', '', '', '', '2022-03-15', '08:00', 'ACTIVE', '2022-12-10', 0, 4, 0),
(4, 'EPAWS-9111', 'Gerald Mico Mico devcore', '', 'tricore012@gmail.com', '09166513189', 'PET GROOMING', 'CAT', '', '', '', '', '2022-12-11', '15:00', 'ACTIVE', '2022-12-11', 0, 0, 0),
(5, 'EPAWS-9692', 'Gerald Mico Mico devcore', '', 'tricore012@gmail.com', '09166513189', 'PET APPOINTMENT', 'CAT', '', '', '', '', '2022-12-11', '15:00', 'ACTIVE', '2022-12-11', 0, 0, 0),
(6, 'EPAWS-9332', 'Tofi', '', 'axcelalcan25@gmail.com', '09054293265', 'PET GROOMING', 'CAT', '', '', '', '', '2022-12-12', '11:00', 'CANCEL', '2022-12-12', 0, 0, 0),
(7, 'EPAWS-9339', 'Tofi', '', 'axcelalcan25@gmail.com', '09054293265', 'PET GROOMING', 'CAT', '', '', '', '', '2022-12-12', '11:00', 'ACTIVE', '2022-12-12', 0, 0, 0),
(8, 'EPAWS-6819', 'Potchie', '', 'axcelalcan25@gmail.com', '09054293265', 'PET APPOINTMENT', 'DOG', '', '', '', '', '2022-12-20', '10:00', 'CANCEL', '2022-12-12', 0, 0, 0),
(9, 'EPAWS-8079', 'axcel', '', 'axcelalcan25@gmail.com', '09054293265', 'PET TREATMENT', 'CAT', '', '', '', '', '2022-12-21', '11:00', 'ACTIVE', '2022-12-12', 1, 6, 1),
(10, 'EPAWS-8733', 'Jake', '', 'sample@gmail.com', '09342343437', 'PET APPOINTMENT', 'DOG', '', '', '', '', '2022-12-12', '10:00', 'ACTIVE', '2022-12-12', 0, 0, 0),
(11, 'EPAWS-7681', 'Miming', '', 'jakeatillo05@gmail.com', '09998769529', 'PET GROOMING', 'CAT', '', '', '', '', '2022-11-15', '08:00', 'CANCEL', '2022-12-15', 0, 0, 0),
(15, 'EPAWS-8527', 'Gerald Mico Mico devcore', 'Gerald Mico Mico devcore', 'tricore012@gmail.com', '09166513189', 'PET TREATMENT', 'DOG', '', '', 'MALE', '20', '2022-12-22', '08:00', 'ACTIVE', '2022-12-20', 0, 0, 0),
(16, 'EPAWS-9532', 'Toffey', 'Gerald Mico Mico devcore', 'tricore012@gmail.com', '09166513189', 'PET APPOINTMENT', 'DOG', 'Afghan Hound', 'NA', 'FEMALE', '20', '2022-12-21', '09:00', 'ACTIVE', '2022-12-20', 0, 0, 0),
(17, 'EPAWS-6776', 'Cat', 'Gerald Mico Mico devcore', 'tricore012@gmail.com', '09166513189', 'PET APPOINTMENT', 'CAT', 'NA', '', 'FEMALE', '20', '2022-12-20', '09:00', 'ACTIVE', '2022-12-20', 0, 0, 0),
(18, 'EPAWS-8393', 'tricerytops', 'Gerald Mico Mico devcore', 'tricore012@gmail.com', '09166513189', 'PET APPOINTMENT', 'CAT', 'NA', '', 'FEMALE', '20', '2022-12-22', '11:00', 'ACTIVE', '2022-12-21', 0, 0, 0),
(19, 'EPAWS-8635', 'Potchie', '', 'axcelalcan25@gmail.com', '09054293265', 'PET GROOMING', 'DOG', '', '', '', '', '2022-12-22', '08:00', 'ACTIVE', '2022-12-21', 0, 5, 0),
(20, 'EPAWS-9366', 'axcel', 'axcel', 'axcel.alcantara.25@gmail.com', '09054293265', 'PET GROOMING', 'DOG', 'Affenpinscher', 'NA', 'MALE', '81', '2023-01-18', '13:00', 'ACTIVE', '2023-01-16', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `auto_mail_history`
--

CREATE TABLE `auto_mail_history` (
  `id` int(11) NOT NULL,
  `state` varchar(250) NOT NULL,
  `pcode` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto_mail_history`
--

INSERT INTO `auto_mail_history` (`id`, `state`, `pcode`, `status`, `date_time`) VALUES
(1, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:14:46'),
(2, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:17:06'),
(3, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:17:06'),
(4, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:19:23'),
(5, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:19:23'),
(6, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:20:25'),
(7, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:20:25'),
(8, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:27:46'),
(9, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:27:46'),
(10, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:28:52'),
(11, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:28:52'),
(12, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:29:23'),
(13, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:29:23'),
(14, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:35:41'),
(15, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:35:41'),
(16, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:36:37'),
(17, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:36:37'),
(18, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:42:59'),
(19, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:42:59'),
(20, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:44:57'),
(21, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:44:57'),
(22, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 11:57:46'),
(23, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 11:57:46'),
(24, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:00:34'),
(25, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:00:34'),
(26, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:01:14'),
(27, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:01:14'),
(28, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:02:42'),
(29, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:02:42'),
(30, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:03:42'),
(31, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:03:42'),
(32, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:04:31'),
(33, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:04:31'),
(34, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:05:24'),
(35, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:05:24'),
(36, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:06:08'),
(37, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:06:08'),
(38, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:06:21'),
(39, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:06:21'),
(40, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:06:38'),
(41, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:06:38'),
(42, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:06:55'),
(43, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:06:55'),
(44, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:07:23'),
(45, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:07:23'),
(46, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:08:01'),
(47, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:08:01'),
(48, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:08:39'),
(49, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:08:39'),
(50, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:09:10'),
(51, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:09:10'),
(52, 'PET GROOMING', 'EPAWS-9628', 'ACTIVE', '2022-12-08 12:10:02'),
(53, 'PET GROOMING', 'EPAWS-9133', 'ACTIVE', '2022-12-08 12:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `batch_product`
--

CREATE TABLE `batch_product` (
  `bid` int(11) NOT NULL,
  `product` int(50) NOT NULL,
  `batch` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(50) NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch_product`
--

INSERT INTO `batch_product` (`bid`, `product`, `batch`, `quantity`, `expiration_date`) VALUES
(1, 25, 'BATCH 1', 20, '2022-12-24'),
(2, 5, 'BATCH 1', 250, '2022-12-24'),
(3, 1, 'BATCH 1', 5, '2022-12-30'),
(4, 1, 'BATCH 1', 10, '2022-12-28'),
(5, 4, 'BATCH 1', 20, '2022-12-30'),
(6, 26, 'BATCH 1', 200, '2022-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(1, 'DOG'),
(2, 'CAT');

-- --------------------------------------------------------

--
-- Table structure for table `cat_breed`
--

CREATE TABLE `cat_breed` (
  `cat_id` int(11) NOT NULL,
  `cat_breed` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_breed`
--

INSERT INTO `cat_breed` (`cat_id`, `cat_breed`) VALUES
(1, 'Abyssinian'),
(2, 'American Bobtail'),
(3, 'American Curl'),
(4, 'American Shorthair'),
(5, 'American Wirehair'),
(6, 'Balinese-Javanese'),
(7, 'Bengal'),
(8, 'Birman'),
(9, 'Bombay'),
(10, 'British Shorthair'),
(11, 'Burmese'),
(12, 'Chartreux'),
(13, 'Cornish Rex'),
(14, 'Devon Rex'),
(15, 'Egyptian Mau'),
(16, 'European Burmese'),
(17, 'Exotic Shorthair'),
(18, 'Havana Brown'),
(19, 'Himalayan'),
(20, 'Japanese Bobtail'),
(21, 'Korat'),
(22, 'LaPerm'),
(23, 'Maine Coon'),
(24, 'Manx'),
(25, 'Munchkin'),
(26, 'Norwegian Forest'),
(27, 'Ocicat'),
(28, 'Oriental'),
(29, 'Persian'),
(30, 'Peterbald'),
(31, 'Pixiebob'),
(32, 'Ragamuffin'),
(33, 'Ragdoll'),
(34, 'Russian Blue'),
(35, 'Savannah'),
(36, 'Scottish Fold'),
(37, 'Selkirk Rex'),
(38, 'Siamese'),
(39, 'Siberian'),
(40, 'Singapura'),
(41, 'Somali'),
(42, 'Sphynx'),
(43, 'Tonkinese'),
(44, 'Toyger'),
(45, 'Turkish Angora'),
(46, 'Turkish Van');

-- --------------------------------------------------------

--
-- Table structure for table `date_disabler`
--

CREATE TABLE `date_disabler` (
  `id` int(11) NOT NULL,
  `date_disable` date NOT NULL,
  `created_by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dog_breed`
--

CREATE TABLE `dog_breed` (
  `dog_id` int(11) NOT NULL,
  `dog_breed` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dog_breed`
--

INSERT INTO `dog_breed` (`dog_id`, `dog_breed`) VALUES
(1, 'Affenpinscher'),
(2, 'Afghan Hound'),
(3, 'Airedale Terrier'),
(4, 'Akita'),
(5, 'Alaskan Malamute'),
(6, 'American Staffordshire Terrier'),
(7, 'Australian Cattle Dog'),
(8, 'Australian Kelpie'),
(9, 'Australian Shepherd'),
(10, 'Australian Silky Terrier'),
(11, 'Australian Stumpy Tail Cattle Dog'),
(12, 'Australian Terrier'),
(13, 'Basenji'),
(14, 'Basset Fauve De Bretagne'),
(15, 'Basset Hound'),
(16, 'Beagle'),
(17, 'Bearded Collie'),
(18, 'Bedlington Terrier'),
(19, 'Belgian Shepherd Dog'),
(20, 'Bernese Mountain Dog'),
(21, 'Bichon Frise'),
(22, 'Bloodhound'),
(23, 'Border Collie'),
(24, 'Border Terrier'),
(25, 'Borzoi'),
(26, 'Boston Terrier'),
(27, 'Bouvier Des Flandres'),
(28, 'Boxer'),
(29, 'Briard'),
(30, 'British Bulldog'),
(31, 'Brittany'),
(32, 'Bull Terrier'),
(33, 'Bullmastiff'),
(34, 'Cairn Terrier'),
(35, 'Cavalier King Charles Spaniel'),
(36, 'Chesapeake Bay Retriever'),
(37, 'Chihuahua'),
(38, 'Chinese Crested Dog'),
(39, 'Chow Chow'),
(40, 'Clumber Spaniel'),
(41, 'Cocker Spaniel'),
(42, 'Cocker Spaniel - American'),
(43, 'Collie'),
(44, 'Curly Coated Retriever'),
(45, 'Dachshund'),
(46, 'Dalmatian'),
(47, 'Dandie Dinmont Terrier'),
(48, 'Deerhound'),
(49, 'Dobermann'),
(50, 'Dogue De Bordeaux'),
(51, 'English Setter'),
(52, 'English Springer Spaniel'),
(53, 'English Toy Terrier'),
(54, 'Field Spaniel'),
(55, 'Finnish Spitz'),
(56, 'Flat Coated Retriever'),
(57, 'Fox Terrier'),
(58, 'Foxhound'),
(59, 'French Bulldog'),
(60, 'German Shepherd Dog'),
(61, 'German Shorthaired Pointer'),
(62, 'German Wirehaired Pointer'),
(63, 'Golden Retriever'),
(64, 'Gordon Setter'),
(65, 'Great Dane'),
(66, 'Greyhound'),
(67, 'Griffon Bruxellois'),
(68, 'Hungarian Vizsla'),
(69, 'Irish Setter'),
(70, 'Irish Terrier'),
(71, 'Irish Water Spaniel'),
(72, 'Irish Wolfhound'),
(73, 'Italian Greyhound'),
(74, 'Jack Russell Terrier'),
(75, 'Japanese Chin'),
(76, 'Japanese Spitz'),
(77, 'Keeshond'),
(78, 'King Charles Spaniel'),
(79, 'Labrador Retriever'),
(80, 'Lakeland Terrier'),
(81, 'Large Munsterlander'),
(82, 'Lhasa Apso'),
(83, 'Lowchen'),
(84, 'Maltese'),
(85, 'Maremma Sheepdog'),
(86, 'Mastiff'),
(87, 'Miniature Pinscher'),
(88, 'Newfoundland'),
(89, 'Norfolk Terrier'),
(90, 'Norwich Terrier'),
(91, 'Nova Scotia Duck Tolling Retriever'),
(92, 'Old English Sheep Dog'),
(93, 'Papillon'),
(94, 'Pekingese'),
(95, 'Petit Basset Griffon Vendéen'),
(96, 'Pharaoh Hound'),
(97, 'Pointer'),
(98, 'Pomeranian'),
(99, 'Poodle'),
(100, 'Portuguese Water Dog'),
(101, 'Pug'),
(102, 'Puli'),
(103, 'Pyrenean Mountain Dog'),
(104, 'Rhodesian Ridgeback'),
(105, 'Rottweiler'),
(106, 'Saluki'),
(107, 'Samoyed'),
(108, 'Schipperke'),
(109, 'Schnauzer'),
(110, 'Scottish Terrier'),
(111, 'Sealyham Terrier'),
(112, 'Shar Pei'),
(113, 'Shetland Sheepdog'),
(114, 'Shih Tzu'),
(115, 'Siberian Husky'),
(116, 'Skye Terrier'),
(117, 'Soft Coated Wheaten Terrier'),
(118, 'St. Bernard'),
(119, 'Staffordshire Bull Terrier'),
(120, 'Sussex Spaniel'),
(121, 'Swedish Vallhund'),
(122, 'Tenterfield Terrier'),
(123, 'Tibetan Spaniel'),
(124, 'Tibetan Terrier'),
(125, 'Weimaraner'),
(126, 'Welsh Corgi'),
(127, 'Welsh Springer Spaniel'),
(128, 'West Highland White Terrier'),
(129, 'Whippet');

-- --------------------------------------------------------

--
-- Table structure for table `notepad`
--

CREATE TABLE `notepad` (
  `id` int(11) NOT NULL,
  `pid` int(250) NOT NULL,
  `pcode` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office_hours`
--

CREATE TABLE `office_hours` (
  `id` int(11) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_hours`
--

INSERT INTO `office_hours` (`id`, `time`) VALUES
(1, '08:00'),
(2, '09:00'),
(3, '10:00'),
(4, '11:00'),
(5, '13:00'),
(6, '14:00'),
(7, '15:00'),
(8, '16:00');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pid` int(11) NOT NULL,
  `owned_by` int(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `petname` varchar(250) NOT NULL,
  `pet_age` date NOT NULL,
  `pet` varchar(250) NOT NULL,
  `breed_dog` varchar(250) NOT NULL,
  `breed_cat` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `date_created` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pid`, `owned_by`, `email`, `petname`, `pet_age`, `pet`, `breed_dog`, `breed_cat`, `gender`, `weight`, `date_created`, `status`) VALUES
(1, 13, 'axcelalcan25@gmail.com', 'Tofi', '2022-12-08', 'CAT', '', '', '', '', '2022-12-08', 0),
(2, 14, 'tricore012@gmail.com', 'Tofi', '2016-10-02', 'CAT', '', '', '', '', '2022-12-08', 0),
(3, 15, 'jakeatillo05@gmail.com', 'Miming', '2019-04-10', 'CAT', '', '', '', '', '2022-12-08', 0),
(4, 16, 'francescalouisse.bautista.l@bulsu.edu.ph', 'chiquie', '2007-01-26', 'DOG', '', '', '', '', '2022-12-10', 0),
(5, 13, 'axcelalcan25@gmail.com', 'Potchie', '2022-11-28', 'DOG', '', '', '', '', '2022-12-12', 0),
(6, 13, 'axcelalcan25@gmail.com', 'axcel', '2022-11-28', 'CAT', '', '', '', '', '2022-12-12', 1),
(7, 38, 'tricore012@gmail.com', 'Tofi', '2019-06-04', 'DOG', 'Affenpinscher', 'NA', 'MALE', '20', '2022-12-21', 0),
(8, 39, 'tricore012@gmail.com', 'Tofi', '2019-06-04', 'DOG', 'Akita', 'NA', 'FEMALE', '20', '2022-12-21', 0),
(9, 47, 'nemersonsoriano02@gmail.com', 'ernue', '2022-11-15', 'DOG', 'Irish Setter', 'NA', 'MALE', '7kg', '2022-12-22', 0),
(10, 34, 'johnernie.angeles.e@bulsu.edu.ph', 'akosidogie', '2021-06-25', 'DOG', 'Dobermann', 'NA', 'MALE', '30', '2023-01-19', 0),
(11, 34, 'johnernie.angeles.e@bulsu.edu.ph', 'chikoy', '2021-10-13', 'DOG', 'Bull Terrier', 'NA', 'MALE', '20kg', '2023-01-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_faq`
--

CREATE TABLE `site_faq` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_faq`
--

INSERT INTO `site_faq` (`id`, `title`, `body`, `date_created`) VALUES
(1, 'Is my pet allergic to any foods?', 'People frequently assume a food allergy is to blame when a pet acts itchier than usual, chews on their feet, scratches their underarms or face, or develops hot spots. Although diet can contribute to a skin problems of a pet, a true food allergy is improbable.', '2022-12-03'),
(2, 'Why does the breath of my pet smell so bad?', 'Dental disease is the most frequent cause of a bad breath of pets. 70% of cats and 80% of dogs have dental problems by the age of three.', '2022-12-03'),
(3, 'How often should I take my dog for walks?', 'Dogs need different amounts of exercise at various stages of their lives depending on their age. Over-exertion should be avoided while puppies are growing. A decent guideline is to exercise for 5 minutes, twice daily, for each month of age. When they are adults, dogs can walk for substantially longer periods of timeâ€”often up to an hour.', '2022-12-03'),
(4, 'Test', 'Test', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `site_services`
--

CREATE TABLE `site_services` (
  `ID` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_services`
--

INSERT INTO `site_services` (`ID`, `title`, `body`, `date_created`) VALUES
(1, 'DOG-PROOF YOUR HOME', 'Adopting a new dog, especially a puppy, is not like bringing home a baby â€” itâ€™s like having a curious toddler who is itching to sniff, claw, and nibble their way into every nook and cranny of your home.', '2022-11-17'),
(2, 'VET YOUR PET', 'Take your pet to the veterinarian once or twice a year. Pets age 7 years for every 1 human year. Taking your pet to the vet for an exam and bloodwork once a year is like you visiting the doctor every 7 years!', '2022-11-17'),
(5, 'Nurture Behavior', 'This is not only for your benefit but for your dogâ€™s happiness too. Most of the time, bad behavior is the result of unwell living conditions. That is right, your first task is to make sure that your dog is fed well, groomed well and has a comfortable shelter.', '2022-11-28'),
(8, 'Defense', 'The Day of the Defense!', '2022-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `id` int(11) NOT NULL,
  `batch_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`id`, `batch_name`) VALUES
(1, 'BATCH 1'),
(2, 'BATCH 2'),
(3, 'BATCH 3'),
(4, 'Batch 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `member_id`) VALUES
(12, 11, 2, 33),
(13, 1, 1, 33),
(30, 1, 1, 0),
(31, 9, 1, 0),
(32, 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`) VALUES
(1, 'HYGIENIC'),
(2, 'MEDICINE'),
(3, 'TREATMENT'),
(4, 'VITAMINS_AND_SUPPLEMENTS'),
(5, 'SAMPLE'),
(6, 'FOOD'),
(7, 'CAT_MALONE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, '12:00:00 am-EPAWS-9353', '2022-12-13 00:00:00', '2022-12-13 00:00:00'),
(2, '10:00:00 am-EPAWS-9133', '2022-12-12 00:00:00', '2022-12-12 00:00:00'),
(3, '08:00:00 am-EPAWS-8000', '2022-03-15 00:00:00', '2022-03-15 00:00:00'),
(4, '03:00:00 pm-EPAWS-9111', '2022-12-11 00:00:00', '2022-12-11 00:00:00'),
(5, '03:00:00 pm-EPAWS-9692', '2022-12-11 00:00:00', '2022-12-11 00:00:00'),
(6, '12:00:00 am-EPAWS-9332', '2022-12-12 00:00:00', '2022-12-12 00:00:00'),
(7, '11:00:00 am-EPAWS-9339', '2022-12-12 00:00:00', '2022-12-12 00:00:00'),
(8, '10:00:00 am-EPAWS-6819', '2022-12-20 00:00:00', '2022-12-20 00:00:00'),
(9, '11:00:00 am-EPAWS-8079', '2022-12-21 00:00:00', '2022-12-21 00:00:00'),
(10, '10:00:00 am-EPAWS-8733', '2022-12-12 00:00:00', '2022-12-12 00:00:00'),
(11, '08:00:00 am-EPAWS-7681', '2022-11-15 00:00:00', '2022-11-15 00:00:00'),
(12, '08:00:00 am-EPAWS-7275', '2022-12-20 00:00:00', '2022-12-20 00:00:00'),
(13, '09:00:00 am-EPAWS-9809', '2022-12-20 00:00:00', '2022-12-20 00:00:00'),
(14, '08:00:00 am-EPAWS-8527', '2022-12-22 00:00:00', '2022-12-22 00:00:00'),
(15, '10:00:00 am-EPAWS-9532', '2022-12-21 00:00:00', '2022-12-21 00:00:00'),
(16, '09:00:00 am-EPAWS-6776', '2022-12-20 00:00:00', '2022-12-20 00:00:00'),
(17, '11:00:00 am-EPAWS-8393', '2022-12-22 00:00:00', '2022-12-22 00:00:00'),
(18, '08:00:00 am-EPAWS-8635', '2022-12-22 00:00:00', '2022-12-22 00:00:00'),
(19, '01:00:00 pm-EPAWS-9366', '2023-01-18 00:00:00', '2023-01-18 00:00:00'),
(20, 'HOLIDAY-Chinese New Year', '2023-01-22 00:00:00', '2023-01-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `amount`, `name`, `payment_type`, `order_status`, `order_at`) VALUES
(1, 13, 1680, 'Axcel Jay Alcantara', 'PICKUP', 'COMPLETE', '2022-12-12 04:18:05'),
(2, 38, 2100, 'Gerald Mico Mico devcore', 'PICKUP', 'COMPLETE', '2022-12-21 04:16:46'),
(3, 2, 12260, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-12-21 04:22:20'),
(4, 2, 420, 'Bootleg Wiz1', 'PICKUP', 'PENDING', '2022-12-21 04:30:54'),
(5, 2, 1750, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-12-21 04:37:20'),
(6, 39, 2070, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-12-21 04:53:32'),
(7, 34, 420, 'John Ernie Angeles', 'PICKUP', 'PENDING', '2023-01-19 07:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `order_id`, `product_id`, `item_price`, `quantity`) VALUES
(1, 1, 4, 420, 4),
(2, 2, 2, 350, 6),
(3, 3, 5, 450, 22),
(4, 3, 8, 65, 4),
(5, 3, 2, 350, 6),
(6, 4, 4, 420, 1),
(7, 5, 9, 250, 7),
(8, 6, 4, 420, 4),
(9, 6, 8, 65, 6),
(10, 7, 4, 420, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `item_quantity` int(10) NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category`, `code`, `description`, `image`, `price`, `item_quantity`, `expiration_date`) VALUES
(1, 'Prazinate', 'MEDICINE', 'EPAWS-8941', 'For the control of tapeworms and hookworms in dogs and cats', 'upload/1670087245.jpg', 200.00, 1, '2022-12-28'),
(2, 'Petsmed (Ear Care) 60ml', 'TREATMENT', 'EPAWS-8938', 'it removes waxy, odoriferous and exudates.\r\nit helps during treatment of fungal, bacterial infection and otodectic mange', 'upload/1670087340.jpg', 350.00, 10, '0000-00-00'),
(4, 'Nepro 60ml', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-7044', 'It prevents unirary tract infections\r\nIt reduces kidney inflammation and urinary bladder infection', 'upload/1670088116.jpg', 420.00, 20, '2022-12-22'),
(5, 'Petsmed (Eye Care) 60ml', 'TREATMENT', 'EPAWS-7610', 'Liver cirrhosis\r\nhepatitis\r\nleptospirosis\r\nhepatomegaly\r\nidiosyncratic hepatic disease\r\nfaster rejuvenation of hepatic cells\r\nliver detoxification\r\nprevents liver cirrhosis\r\nnegative withdrawal stress', 'upload/1670088326.jpg', 450.00, 10, '0000-00-00'),
(6, 'Petsmed (LIver Care) 100ml', 'TREATMENT', 'EPAWS-8926', 'Liver cirrhosis\r\nhepatitis\r\nleptospirosis\r\nhepatomegaly\r\nidiosyncratic hepatic disease\r\nfaster rejuvenation of hepatic cells\r\nliver detoxification\r\nprevents liver cirrhosis\r\nnegative withdrawal stress', 'upload/1670088754.jpg', 450.00, 10, '0000-00-00'),
(7, 'Frenzy Shampoo (for him) 250ml', 'HYGIENIC', 'EPAWS-9538', 'Mild shampoo with conditioner for dogs & cats ideal for daily use that provides smoother and glossier coat. It also leaves the fur clean and the animal smelling fresh.', 'upload/1670088799.jpg', 250.00, 15, '0000-00-00'),
(8, 'Dermovet 90g', 'HYGIENIC', 'EPAWS-7685', 'For the control of fleas, ticks and lice in dogs.', 'upload/1670088866.jpg', 65.00, 20, '0000-00-00'),
(9, 'Frenzy Shampoo (for her )', 'HYGIENIC', 'EPAWS-8361', 'Mild shampoo with conditioner for dogs & cats ideal for daily use that provides smoother and glossier coat. It also leaves the fur clean and the animal smelling fresh.', 'upload/1670088901.jpg', 250.00, 15, '0000-00-00'),
(10, 'Amitraz Uni Shampoo I ', 'HYGIENIC', 'EPAWS-8368', 'Uni Shampoo is used to treat dogs with dermatitis and mange.', 'upload/1670088930.jpg', 400.00, 10, '0000-00-00'),
(11, 'Ferrovet 60ml', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-6898', 'Ferrous Sulfate should not be given to animals receiving a repeated blood transfusion or to patients with anemias not produced by iron deficiency present. Care should be taken when given to animals with iron storage or iron ', 'upload/1670088990.jpg', 200.00, 10, '0000-00-00'),
(12, 'Scourvet 60ml', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-8601', 'For the control of bacterial diarrhea and coccidiosis in cats and dogs.', 'upload/1670089077.jpg', 250.00, 10, '0000-00-00'),
(13, 'Madre De Cacao', 'HYGIENIC', 'EPAWS-9306', 'hand crafted dog bar soap', 'upload/1670089127.jpg', 100.00, 10, '0000-00-00'),
(14, 'Vetnoderm', 'HYGIENIC', 'EPAWS-8860', 'Highly effective against ticks and fleas\r\nContains extracted medicinal herbs mixed with virgin coconut oil.\r\nEnhances fast recovery from any skin problem and blemished caused by external parasites in our pets.\r\nFormulated against scabies, demodicosis, tick and fungal skin infection', 'upload/1670089160.jpg', 130.00, 10, '0000-00-00'),
(15, 'Thrombo Care', 'HYGIENIC', 'EPAWS-6994', 'Boosts platelets and RB production.\r\nRegulates liver functions.\r\nIncreases immune system.\r\nSupportive treatment during tick born and viral infections.', 'upload/1670089198.jpg', 500.00, 7, '0000-00-00'),
(16, 'Pulmoquin 60ml', 'TREATMENT', 'EPAWS-8854', 'Aids in the treatment of catarrhal inflammation of the bronchi and the upper', 'upload/1670089266.jpg', 100.00, 10, '0000-00-00'),
(17, 'UniBooster 120ml', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-7408', 'Increase resistance against stress and during disease condition\r\nPromotes proper development and stronger body for growing puppies\r\nPrevents and treats Vitamin deficiences', 'upload/1670089297.jpg', 300.00, 10, '0000-00-00'),
(18, 'Petsmed (Bio Care) 60ml', 'TREATMENT', 'EPAWS-7708', 'For urinary, respiratory and intestinal infections. PRECAUTION: Do not administer to lactating and pregnant pets especially those with liver disease. DOSAGE AND ADMINISTRATION: Dog and Cat: 5-10mg per Kg body weight daily. (1-2 mL per 10Kg bodyweight)', 'upload/1670089352.jpg', 330.00, 10, '0000-00-00'),
(19, 'Imunno Pro', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-8741', 'Microbuster Immuno Pro Probiotics Forte is especially formulated for pets and birds.\r\nFortified with amino acid, vitamins, minerals and electrolytes.\r\nAppetite Stimulant, Antibiotic Resistance, Malabsorption Syndrome, Increase Immune System, Stunted Growth, Reduce Ammonia, Vitamin & Mineral Deficiency, Horomal & Nutritional Imbalance, Enhance reproductive performance, Promote red blood cell formation, and Prevent severe hemorrhage.', 'upload/1670089452.jpg', 400.00, 10, '0000-00-00'),
(20, 'Petpyrin 60ml', 'TREATMENT', 'EPAWS-9291', 'It helps to subside any inflammatory conditions.\r\nIt has antipyretic effect.', 'upload/1670089500.jpg', 300.00, 10, '0000-00-00'),
(21, 'Coatshine', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-7278', 'It contains Omega fatty acids, vitamins & minerals. It is a dietary supplement known to improve coat condition.', 'upload/1670089623.jpg', 250.00, 10, '0000-00-00'),
(22, 'Doggy Doggy Syrup', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-9860', '(Multivitamins + Minerals + Taurine + Lysine HCL + CGF) -\r\nPromotes Growth, Vigor and Vitality. Increases Appetite and Helps Build, Maintain and Protect Healthy Immune System.\r\nIt also Prevents Heart Disease and Osteoporosis in Cats and Dogs \r\nDosage and Administration : Puppies & Kittens: 0.5ml per head Growing Dogs: 2ml per head ', 'upload/1670089729.jpg', 280.00, 10, '0000-00-00'),
(23, 'Sorvit 120ml', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-9006', 'Enhance Appetite,  Promote Growth and Vigor of Dogs, Cats,  Rabbits, Hamster', 'upload/1670089800.jpg', 280.00, 10, '0000-00-00'),
(24, 'Himalaya', 'MEDICINE', 'EPAWS-7447', 'Prevention and management of recurrent urinary tract infections.\r\nNon-specific uretheritis (inflammation of the urethra) and cystitis (inflammation of the bladder).\r\nSupportive therapy in kidney dysfunction.', 'upload/1670089841.jpg', 400.00, 10, '0000-00-00'),
(25, 'TEST', 'HYGIENIC', 'EPAWS-8537', 'TEST', 'upload/1671514198.png', 250.00, 0, '2022-12-21'),
(26, 'TEST ME TODAY 12222022', 'VITAMINS_AND_SUPPLEMENTS', 'EPAWS-8686', 'TEST TEST', 'upload/1671669065.png', 250.00, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `email`, `phone`, `code`, `status`, `designation`) VALUES
(4, 'users', 'users', 'users', '', '', 0, '', 'VET'),
(8, 'tester', 'tester', 'TESTING', '', '', 0, '', 'VET'),
(9, 'axcel.ph', '2019', 'Axcel', 'axcelidontknow@gmail.com', '09166513189', 6862, '', 'VET'),
(10, 'Axcel', 'axcel', 'Axcel Alcantara', '', '', 0, '', 'VET'),
(11, 'clerk', 'admin', 'Clerk', '', '', 0, '', 'CLERK'),
(12, 'kellyclerkson', 'kellyclerkson', 'kellyclerkson', '', '', 0, '', 'CLERK'),
(13, 'axcelalcan25@gmail.com', '2019114964', 'Axcel Jay Alcantara', 'axcelalcan25@gmail.com', '09054293265', 9313, '', 'USER'),
(15, 'jakeatillo05@gmail.com', 'jake05050167', 'Jake Atillo', 'jakeatillo05@gmail.com', '09998769529', 9806, '', 'USER'),
(16, 'francescalouisse.bautista.l@bulsu.edu.ph', '022501louisse', 'Francesca Louisse L. Bautista', 'francescalouisse.bautista.l@bulsu.edu.ph', '09260512809', 7726, '', 'USER'),
(33, 'laspinasallizza@gmail.com', '123456789', 'Allizza', 'laspinasallizza@gmail.com', '09666545393', 9403, '', 'USER'),
(34, 'johnernie.angeles.e@bulsu.edu.ph', '2019117086', 'John Ernie Angeles', 'johnernie.angeles.e@bulsu.edu.ph', '09611539474', 7145, '', 'USER'),
(44, 'tricore012@gmail.com', 'admin', 'Toggle MiniMap Minimap', 'hellodevcore@gmail.com', '09983032537', 89873, 'VALID', 'USER'),
(46, 'atillo.jake.b.5300@gmail.com', 'jake05050167', 'Jake Atillo', 'atillo.jake.b.5300@gmail.com', '09998769529', 99583, 'VALID', 'USER'),
(47, 'nemersonsoriano02@gmail.com', 'john', 'nemerson', 'nemersonsoriano02@gmail.com', '09655236932', 76147, 'VALID', 'USER'),
(48, 'allizza.laspinas.s@bulsu.edu.ph', 'LASPINAS', 'Allizza', 'allizza.laspinas.s@bulsu.edu.ph', '09666545393', 99445, 'INVALID', 'USER'),
(65, 'gmfacistol@outlook.com', 'admin', 'gmfacistol@outlook.com', 'gmfacistol@outlook.com', '09983032537', 87115, 'VALID', 'USER'),
(66, 'juanworld012@gmail.com', 'users', 'Toggle MiniMap Minimap', 'juanworld012@gmail.com', '09983032537', 74720, 'INVALID', 'USER'),
(71, 'jake.atillp.b@bulsu.edu.ph', 'jake05050167', 'Jake Atillo', 'jake.atillp.b@bulsu.edu.ph', '09998769529', 99452, 'INVALID', 'USER'),
(72, 'salasgrace9370@gmail.com', 'jake05050167', 'Jake Atillo', 'salasgrace9370@gmail.com', '09998769529', 90736, 'INVALID', 'USER'),
(73, 'kenshinbatousai020@gmail.com', 'qwerty', 'Lester De Guzman', 'kenshinbatousai020@gmail.com', '09205141536', 91399, 'INVALID', 'USER'),
(74, 'lstr.ldg19@gmail.com', 'LESTER', 'Lester De Guzman', 'lstr.ldg19@gmail.com', '09205141536', 98129, 'INVALID', 'USER'),
(75, 'juanpedromoto311@gmail.com', '2019117086', 'Juan Pedro', 'juanpedromoto311@gmail.com', '09611539474', 94189, 'INVALID', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_mail_history`
--
ALTER TABLE `auto_mail_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_product`
--
ALTER TABLE `batch_product`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `cat_breed`
--
ALTER TABLE `cat_breed`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `date_disabler`
--
ALTER TABLE `date_disabler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog_breed`
--
ALTER TABLE `dog_breed`
  ADD PRIMARY KEY (`dog_id`);

--
-- Indexes for table `notepad`
--
ALTER TABLE `notepad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_hours`
--
ALTER TABLE `office_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `site_faq`
--
ALTER TABLE `site_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_services`
--
ALTER TABLE `site_services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `auto_mail_history`
--
ALTER TABLE `auto_mail_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `batch_product`
--
ALTER TABLE `batch_product`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat_breed`
--
ALTER TABLE `cat_breed`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `date_disabler`
--
ALTER TABLE `date_disabler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dog_breed`
--
ALTER TABLE `dog_breed`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `notepad`
--
ALTER TABLE `notepad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_hours`
--
ALTER TABLE `office_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `site_faq`
--
ALTER TABLE `site_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_services`
--
ALTER TABLE `site_services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
