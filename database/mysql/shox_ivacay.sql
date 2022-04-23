-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 04:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shox_ivacay`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(4, 'AF', 'Afghanistan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(5, 'AL', 'Albania', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(6, 'DZ', 'Algeria', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(7, 'DS', 'American Samoa', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(8, 'AD', 'Andorra', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(9, 'AO', 'Angola', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(10, 'AI', 'Anguilla', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(11, 'AQ', 'Antarctica', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(12, 'AG', 'Antigua and Barbuda', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(13, 'AR', 'Argentina', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(14, 'AM', 'Armenia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(15, 'AW', 'Aruba', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(16, 'AU', 'Australia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(17, 'AT', 'Austria', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(18, 'AZ', 'Azerbaijan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(19, 'BS', 'Bahamas', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(20, 'BH', 'Bahrain', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(21, 'BD', 'Bangladesh', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(22, 'BB', 'Barbados', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(23, 'BY', 'Belarus', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(24, 'BE', 'Belgium', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(25, 'BZ', 'Belize', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(26, 'BJ', 'Benin', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(27, 'BM', 'Bermuda', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(28, 'BT', 'Bhutan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(29, 'BO', 'Bolivia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(30, 'BA', 'Bosnia and Herzegovina', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(31, 'BW', 'Botswana', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(32, 'BV', 'Bouvet Island', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(33, 'BR', 'Brazil', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(34, 'IO', 'British Indian Ocean Territory', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(35, 'BN', 'Brunei Darussalam', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(36, 'BG', 'Bulgaria', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(37, 'BF', 'Burkina Faso', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(38, 'BI', 'Burundi', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(39, 'KH', 'Cambodia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(40, 'CM', 'Cameroon', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(41, 'CA', 'Canada', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(42, 'CV', 'Cape Verde', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(43, 'KY', 'Cayman Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(44, 'CF', 'Central African Republic', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(45, 'TD', 'Chad', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(46, 'CL', 'Chile', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(47, 'CN', 'China', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(48, 'CX', 'Christmas Island', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(49, 'CC', 'Cocos (Keeling) Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(50, 'CO', 'Colombia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(51, 'KM', 'Comoros', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(52, 'CG', 'Congo', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(53, 'CK', 'Cook Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(54, 'CR', 'Costa Rica', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(55, 'HR', 'Croatia (Hrvatska)', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(56, 'CU', 'Cuba', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(57, 'CY', 'Cyprus', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(58, 'CZ', 'Czech Republic', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(59, 'DK', 'Denmark', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(60, 'DJ', 'Djibouti', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(61, 'DM', 'Dominica', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(62, 'DO', 'Dominican Republic', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(63, 'TP', 'East Timor', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(64, 'EC', 'Ecuador', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(65, 'EG', 'Egypt', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(66, 'SV', 'El Salvador', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(67, 'GQ', 'Equatorial Guinea', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(68, 'ER', 'Eritrea', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(69, 'EE', 'Estonia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(70, 'ET', 'Ethiopia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(71, 'FK', 'Falkland Islands (Malvinas)', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(72, 'FO', 'Faroe Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(73, 'FJ', 'Fiji', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(74, 'FI', 'Finland', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(75, 'FR', 'France', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(76, 'FX', 'France, Metropolitan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(77, 'GF', 'French Guiana', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(78, 'PF', 'French Polynesia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(79, 'TF', 'French Southern Territories', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(80, 'GA', 'Gabon', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(81, 'GM', 'Gambia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(82, 'GE', 'Georgia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(83, 'DE', 'Germany', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(84, 'GH', 'Ghana', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(85, 'GI', 'Gibraltar', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(86, 'GK', 'Guernsey', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(87, 'GR', 'Greece', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(88, 'GL', 'Greenland', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(89, 'GD', 'Grenada', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(90, 'GP', 'Guadeloupe', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(91, 'GU', 'Guam', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(92, 'GT', 'Guatemala', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(93, 'GN', 'Guinea', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(94, 'GW', 'Guinea-Bissau', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(95, 'GY', 'Guyana', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(96, 'HT', 'Haiti', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(97, 'HM', 'Heard and Mc Donald Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(98, 'HN', 'Honduras', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(99, 'HK', 'Hong Kong', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(100, 'HU', 'Hungary', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(101, 'IS', 'Iceland', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(102, 'IN', 'India', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(103, 'IM', 'Isle of Man', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(104, 'ID', 'Indonesia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(105, 'IR', 'Iran (Islamic Republic of)', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(106, 'IQ', 'Iraq', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(107, 'IE', 'Ireland', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(108, 'IL', 'Israel', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(109, 'IT', 'Italy', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(110, 'CI', 'Ivory Coast', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(111, 'JE', 'Jersey', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(112, 'JM', 'Jamaica', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(113, 'JP', 'Japan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(114, 'JO', 'Jordan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(115, 'KZ', 'Kazakhstan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(116, 'KE', 'Kenya', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(117, 'KI', 'Kiribati', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(118, 'KP', 'Korea, Democratic People\'s Republic of', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(119, 'KR', 'Korea, Republic of', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(120, 'XK', 'Kosovo', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(121, 'KW', 'Kuwait', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(122, 'KG', 'Kyrgyzstan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(123, 'LA', 'Lao People\'s Democratic Republic', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(124, 'LV', 'Latvia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(125, 'LB', 'Lebanon', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(126, 'LS', 'Lesotho', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(127, 'LR', 'Liberia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(128, 'LY', 'Libyan Arab Jamahiriya', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(129, 'LI', 'Liechtenstein', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(130, 'LT', 'Lithuania', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(131, 'LU', 'Luxembourg', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(132, 'MO', 'Macau', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(133, 'MK', 'Macedonia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(134, 'MG', 'Madagascar', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(135, 'MW', 'Malawi', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(136, 'MY', 'Malaysia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(137, 'MV', 'Maldives', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(138, 'ML', 'Mali', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(139, 'MT', 'Malta', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(140, 'MH', 'Marshall Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(141, 'MQ', 'Martinique', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(142, 'MR', 'Mauritania', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(143, 'MU', 'Mauritius', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(144, 'TY', 'Mayotte', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(145, 'MX', 'Mexico', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(146, 'FM', 'Micronesia, Federated States of', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(147, 'MD', 'Moldova, Republic of', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(148, 'MC', 'Monaco', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(149, 'MN', 'Mongolia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(150, 'ME', 'Montenegro', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(151, 'MS', 'Montserrat', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(152, 'MA', 'Morocco', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(153, 'MZ', 'Mozambique', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(154, 'MM', 'Myanmar', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(155, 'NA', 'Namibia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(156, 'NR', 'Nauru', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(157, 'NP', 'Nepal', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(158, 'NL', 'Netherlands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(159, 'AN', 'Netherlands Antilles', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(160, 'NC', 'New Caledonia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(161, 'NZ', 'New Zealand', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(162, 'NI', 'Nicaragua', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(163, 'NE', 'Niger', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(164, 'NG', 'Nigeria', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(165, 'NU', 'Niue', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(166, 'NF', 'Norfolk Island', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(167, 'MP', 'Northern Mariana Islands', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(168, 'NO', 'Norway', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(169, 'OM', 'Oman', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(170, 'PK', 'Pakistan', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(171, 'PW', 'Palau', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(172, 'PS', 'Palestine', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(173, 'PA', 'Panama', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(174, 'PG', 'Papua New Guinea', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(175, 'PY', 'Paraguay', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(176, 'PE', 'Peru', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(177, 'PH', 'Philippines', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(178, 'PN', 'Pitcairn', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(179, 'PL', 'Poland', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(180, 'PT', 'Portugal', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(181, 'PR', 'Puerto Rico', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(182, 'QA', 'Qatar', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(183, 'RE', 'Reunion', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(184, 'RO', 'Romania', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(185, 'RU', 'Russian Federation', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(186, 'RW', 'Rwanda', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(187, 'KN', 'Saint Kitts and Nevis', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(188, 'LC', 'Saint Lucia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(189, 'VC', 'Saint Vincent and the Grenadines', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(190, 'WS', 'Samoa', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(191, 'SM', 'San Marino', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(192, 'ST', 'Sao Tome and Principe', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(193, 'SA', 'Saudi Arabia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(194, 'SN', 'Senegal', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(195, 'RS', 'Serbia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(196, 'SC', 'Seychelles', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(197, 'SL', 'Sierra Leone', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(198, 'SG', 'Singapore', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(199, 'SK', 'Slovakia', '2022-03-22 22:22:34', '2022-03-22 22:22:34'),
(200, 'SI', 'Slovenia', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(201, 'SB', 'Solomon Islands', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(202, 'SO', 'Somalia', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(203, 'ZA', 'South Africa', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(204, 'GS', 'South Georgia South Sandwich Islands', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(205, 'ES', 'Spain', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(206, 'LK', 'Sri Lanka', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(207, 'SH', 'St. Helena', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(208, 'PM', 'St. Pierre and Miquelon', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(209, 'SD', 'Sudan', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(210, 'SR', 'Suriname', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(211, 'SJ', 'Svalbard and Jan Mayen Islands', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(212, 'SZ', 'Swaziland', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(213, 'SE', 'Sweden', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(214, 'CH', 'Switzerland', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(215, 'SY', 'Syrian Arab Republic', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(216, 'TW', 'Taiwan', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(217, 'TJ', 'Tajikistan', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(218, 'TZ', 'Tanzania, United Republic of', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(219, 'TH', 'Thailand', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(220, 'TG', 'Togo', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(221, 'TK', 'Tokelau', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(222, 'TO', 'Tonga', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(223, 'TT', 'Trinidad and Tobago', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(224, 'TN', 'Tunisia', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(225, 'TR', 'Turkey', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(226, 'TM', 'Turkmenistan', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(227, 'TC', 'Turks and Caicos Islands', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(228, 'TV', 'Tuvalu', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(229, 'UG', 'Uganda', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(230, 'UA', 'Ukraine', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(231, 'AE', 'United Arab Emirates', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(232, 'GB', 'United Kingdom', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(233, 'US', 'United States', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(234, 'UM', 'United States minor outlying islands', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(235, 'UY', 'Uruguay', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(236, 'UZ', 'Uzbekistan', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(237, 'VU', 'Vanuatu', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(238, 'VA', 'Vatican City State', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(239, 'VE', 'Venezuela', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(240, 'VN', 'Vietnam', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(241, 'VG', 'Virgin Islands (British)', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(242, 'VI', 'Virgin Islands (U.S.)', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(243, 'WF', 'Wallis and Futuna Islands', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(244, 'EH', 'Western Sahara', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(245, 'YE', 'Yemen', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(246, 'ZR', 'Zaire', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(247, 'ZM', 'Zambia', '2022-03-22 22:22:35', '2022-03-22 22:22:35'),
(248, 'ZW', 'Zimbabwe', '2022-03-22 22:22:35', '2022-03-22 22:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `pakage_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `pakage_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '16486868630.jpg', '2022-03-30 19:34:23', '2022-03-30 19:34:23'),
(2, 1, '16486868631.jpg', '2022-03-30 19:34:23', '2022-03-30 19:34:23'),
(3, 2, '16486868900.jpg', '2022-03-30 19:34:50', '2022-03-30 19:34:50'),
(4, 3, '16486869230.jpg', '2022-03-30 19:35:23', '2022-03-30 19:35:23'),
(5, 3, '16486869241.jpg', '2022-03-30 19:35:24', '2022-03-30 19:35:24'),
(6, 3, '16486869242.jpg', '2022-03-30 19:35:24', '2022-03-30 19:35:24'),
(7, 4, '16486869540.jpg', '2022-03-30 19:35:54', '2022-03-30 19:35:54'),
(8, 4, '16486869541.jpg', '2022-03-30 19:35:54', '2022-03-30 19:35:54'),
(9, 4, '16486869542.jpg', '2022-03-30 19:35:54', '2022-03-30 19:35:54'),
(10, 4, '16486869543.jpg', '2022-03-30 19:35:54', '2022-03-30 19:35:54'),
(11, 4, '16486869544.jpg', '2022-03-30 19:35:54', '2022-03-30 19:35:54'),
(12, 5, '16486871520.jpg', '2022-03-30 19:39:12', '2022-03-30 19:39:12'),
(13, 6, '16486875970.jpg', '2022-03-30 19:46:37', '2022-03-30 19:46:37'),
(14, 6, '16486875971.jpg', '2022-03-30 19:46:37', '2022-03-30 19:46:37'),
(15, 6, '16486875972.jpg', '2022-03-30 19:46:37', '2022-03-30 19:46:37'),
(16, 7, '16486876440.jpg', '2022-03-30 19:47:24', '2022-03-30 19:47:24'),
(18, 13, '16491077630.jpg', '2022-04-04 16:29:23', '2022-04-04 16:29:23'),
(19, 13, '16491077631.jpg', '2022-04-04 16:29:23', '2022-04-04 16:29:23'),
(20, 13, '16491077632.jpg', '2022-04-04 16:29:23', '2022-04-04 16:29:23'),
(21, 13, '16491077633.jpg', '2022-04-04 16:29:23', '2022-04-04 16:29:23'),
(22, 12, '16491078580.jpg', '2022-04-04 16:30:58', '2022-04-04 16:30:58'),
(23, 12, '16491078581.jpg', '2022-04-04 16:30:58', '2022-04-04 16:30:58'),
(24, 12, '16491078582.jpg', '2022-04-04 16:30:58', '2022-04-04 16:30:58'),
(25, 12, '16491078583.jpg', '2022-04-04 16:30:58', '2022-04-04 16:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `images`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Aut ipsum minima omn', 'Dicta tempor id corr', '1649297143.jpg', '2022-04-09', '2022-04-30', 1, '2022-04-06 21:05:43', '2022-04-06 21:05:43'),
(3, 'Numquam ut quia arch', 'Quam est suscipit si', '1649361080.jpg', '2022-04-08', '2022-04-30', 1, '2022-04-07 14:51:20', '2022-04-07 14:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_applied`
--

CREATE TABLE `jobs_applied` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = pending, 1 = completed, 2 = cancelled',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_applied`
--

INSERT INTO `jobs_applied` (`id`, `user_id`, `job_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 0, '2022-04-06 21:07:56', '2022-04-07 15:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `journies`
--

CREATE TABLE `journies` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_url` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = Process,\r\n1 = Completed<\r\n2 = Rejected',
  `member_ship_id` int(11) DEFAULT NULL,
  `total_price` decimal(14,2) DEFAULT NULL,
  `is_paid` int(11) DEFAULT NULL COMMENT '0 = unsuccessfully payment,\r\n1 = successfully payment',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journies`
--

INSERT INTO `journies` (`id`, `invoice_number`, `user_id`, `package_id`, `payment_id`, `payment_url`, `status`, `member_ship_id`, `total_price`, `is_paid`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 2, 'ch_3KjUZ7FF6yglEvQF07uTcEcJ', 'https://pay.stripe.com/receipts/acct_1KEflEFF6yglEvQF/ch_3KjUZ7FF6yglEvQF07uTcEcJ/rcpt_LQLFMWJ57YrYEPIGNI9A3eufKjwhQ2P', NULL, NULL, '73.00', NULL, '2022-03-31 15:25:58', '2022-03-31 15:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `membership_plans`
--

CREATE TABLE `membership_plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `plan_type` varchar(255) DEFAULT NULL,
  `no_of_packages` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_plans`
--

INSERT INTO `membership_plans` (`id`, `title`, `price`, `plan_type`, `no_of_packages`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'Free', '0.00', NULL, 1, 3, '2022-03-24 19:42:47', '2022-04-20 18:14:23'),
(2, 'Deluxe', '19.99', NULL, 5, 30, '2022-03-24 19:42:47', '2022-04-20 18:36:01'),
(3, 'Premium', '29.99', NULL, 2147483647, 30, '2022-03-24 19:42:51', '2022-03-24 19:42:51'),
(4, 'Monthly ', '19.99', 'Alternative', 2147483647, 30, '2022-03-24 19:42:51', '2022-03-24 19:42:51'),
(5, 'Quarterly', '55.00', 'Alternative', 2147483647, 90, '2022-03-24 19:46:18', '2022-03-24 19:46:18'),
(6, 'Half-Yearly', '100.00', 'Alternative', 2147483647, 180, '2022-03-24 19:46:18', '2022-03-24 19:46:18'),
(7, 'Yearly', '199.00', 'Alternative', 2147483647, 365, '2022-03-24 19:46:18', '2022-03-24 19:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `member_ships`
--

CREATE TABLE `member_ships` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `receipt_url` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(14,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `no_of_packages` int(11) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_ships`
--

INSERT INTO `member_ships` (`id`, `user_id`, `membership_id`, `payment_id`, `receipt_url`, `title`, `price`, `description`, `no_of_packages`, `duration`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'ch_3KjBxXFF6yglEvQF0OWe0IJD', 'https://pay.stripe.com/receipts/acct_1KEflEFF6yglEvQF/ch_3KjBxXFF6yglEvQF0OWe0IJD/rcpt_LQ219QgIWoAzk6l9LceEckgWrao0JVv', 'Deluxe', '19.99', NULL, 5, 30, '2022-03-30 19:33:55', '2022-03-30 19:33:55'),
(3, 4, 2, 'ch_3KjXDVFF6yglEvQF1BTVHfGR', 'https://pay.stripe.com/receipts/acct_1KEflEFF6yglEvQF/ch_3KjXDVFF6yglEvQF1BTVHfGR/rcpt_LQNzOz7lpE4QxjqZd4FVBZfe5GISXy3', 'Deluxe', '19.99', NULL, 5, 30, '2022-03-31 18:15:49', '2022-03-31 18:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `from_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_taken` int(11) DEFAULT NULL COMMENT '0 = unavailable,\r\n1 = available',
  `country_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 = active, 1 = inactive, 2 = deleted',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `user_id`, `title`, `description`, `price`, `from_date`, `end_date`, `is_taken`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Repudiandae enim lab', 'Natus aliquid aute d', 553, '2022-03-25', '2022-04-01', NULL, 233, 0, '2022-03-30 19:34:23', '2022-03-30 19:36:54'),
(2, 1, 'Ut maiores obcaecati', 'Elit ea itaque recu', 73, '2022-03-25', '2022-04-01', NULL, 233, 0, '2022-03-30 19:34:50', '2022-03-30 19:36:43'),
(3, 1, 'Asperiores ex ration', 'Iste est sed ex quis', 615, '2022-03-25', '2022-04-01', NULL, 233, 0, '2022-03-30 19:35:23', '2022-03-30 19:35:23'),
(4, 1, 'Consequuntur quos di', 'Aut iste eiusmod qui', 421, '2022-03-25', '2022-04-01', NULL, 233, 0, '2022-03-30 19:35:54', '2022-03-30 19:46:02'),
(5, 1, 'Voluptatem Enim eli', 'Labore elit vitae v', 329, '2022-03-25', '2022-04-01', NULL, 233, 1, '2022-03-30 19:39:12', '2022-03-30 19:39:12'),
(6, 1, 'Ratione omnis et vol', 'Incididunt voluptas', 698, '2022-03-25', '2022-04-01', NULL, 233, 0, '2022-03-30 19:46:37', '2022-03-30 19:46:37'),
(7, 1, 'Ad quia illum qui c', 'Voluptatem inventore', 520, '1973-06-30', '1996-09-27', NULL, 177, 1, '2022-03-30 19:47:24', '2022-03-30 19:47:24'),
(8, 1, 'Ut qui iste temporib', 'Est dignissimos esse', 631, '2022-04-05', '2022-04-05', NULL, 137, 1, '2022-04-04 15:15:09', '2022-04-04 15:15:09'),
(9, 1, 'Aut sint vero natus', 'Dolore voluptate ver', 22, '2022-04-05', '2022-04-05', NULL, 63, 1, '2022-04-04 15:20:41', '2022-04-04 15:20:41'),
(10, 1, 'Culpa voluptas adip', 'Magni qui laudantium', 879, '2022-04-05', '2022-04-05', NULL, 108, 1, '2022-04-04 15:21:09', '2022-04-04 15:21:09'),
(11, 1, 'Sed eos delectus do', 'Sunt adipisci dolor', 383, '2022-04-05', '2022-04-05', NULL, 217, 1, '2022-04-04 15:21:37', '2022-04-04 15:21:37'),
(12, 1, 'Nam anim praesentium', 'Dolore nihil nobis m', 967, '2022-04-05', '2022-04-15', NULL, 190, 1, '2022-04-04 16:28:58', '2022-04-04 16:30:27'),
(13, 1, 'In corrupti dolor d', 'Libero ea aliquam ar', 613, '2022-04-05', '2022-04-15', NULL, 193, 1, '2022-04-04 16:29:23', '2022-04-04 16:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `package_requests`
--

CREATE TABLE `package_requests` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `no_of_person` int(11) NOT NULL,
  `starting_point` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_requests`
--

INSERT INTO `package_requests` (`id`, `username`, `email`, `user_id`, `country_id`, `start_date`, `end_date`, `no_of_person`, `starting_point`, `destination`, `comment`, `status`, `updated_at`, `created_at`) VALUES
(1, '', '', NULL, 25, '1975-12-28', '2017-06-30', 0, '', '', '', 0, '2022-04-12 21:00:36', '2022-04-12 21:00:36'),
(2, '', '', NULL, 25, '1975-12-28', '2017-06-30', 0, '', '', '', 0, '2022-04-12 21:01:09', '2022-04-12 21:01:09'),
(3, 'vidypy', 'myko@mailinator.com', NULL, 104, '1977-06-27', '2013-02-05', 0, '01-May-1988', '10-May-1984', 'foxedegy', 0, '2022-04-13 20:53:36', '2022-04-13 20:53:36'),
(4, 'dfh', 'guide@gmail.com', NULL, 4, '2022-04-08', '2022-04-23', 0, 'fghd', 'dfh', 'fdh', 0, '2022-04-13 20:55:37', '2022-04-13 20:55:37'),
(5, 'dyvym', 'botuwyk@mailinator.com', NULL, 149, '2022-04-25', '2022-04-28', 64, '11-Jun-2020', '17-Sep-1984', 'culox', 0, '2022-04-22 20:45:53', '2022-04-22 20:45:53'),
(6, 'xakofimy', 'hicydizy@mailinator.com', 5, 117, '2022-04-26', '2022-04-30', 90, '15-Oct-2014', '09-Jan-1983', 'pajorax', 0, '2022-04-22 20:49:29', '2022-04-22 20:49:29'),
(7, 'sdf', 'hicydizy@mailinator.com', NULL, 4, '2022-04-24', '2022-04-29', 4, 'dg', 'dsg', 'sdg', 0, '2022-04-22 20:49:54', '2022-04-22 20:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `account_title` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `full_name`, `phone`, `address`, `zip_code`, `country_id`, `country`, `account_title`, `account_number`, `created_at`, `updated_at`) VALUES
(1, 3, 'tourist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 19:52:03', '2022-03-30 19:52:03'),
(2, 4, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 18:15:07', '2022-03-31 18:15:07'),
(3, 1, 'Jacob', NULL, NULL, NULL, 233, NULL, NULL, NULL, '2022-04-04 16:39:14', '2022-04-04 16:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(555) DEFAULT NULL,
  `user_role` int(11) NOT NULL COMMENT '0 = tourist,\r\n1 = guider,\r\n2 = admin',
  `status` int(11) DEFAULT 0 COMMENT '1 = active , 0 = inactive ',
  `profile_status` int(11) NOT NULL DEFAULT 0 COMMENT '\r\n0 = Profile unlocked, 1 = profile locked',
  `is_reset` int(11) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0 COMMENT '0 = not Approved,\r\n1 = Approved',
  `facebook_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `provider_id`, `avatar`, `password`, `user_role`, `status`, `profile_status`, `is_reset`, `is_approved`, `facebook_id`, `created_at`, `updated_at`) VALUES
(1, 'guider', 'guider@gmail.com', NULL, NULL, '$2y$10$Bhrk3QGuAe3VvnXkqRoqxuwj/X56jkm14PNN63XfjsUv/1Mt1FK9y', 1, 1, 0, 0, 0, NULL, '2022-03-30 19:15:19', '2022-04-22 18:59:07'),
(2, 'dev', 'dev.haris55@gmail.com', NULL, NULL, '$2y$10$iDCLYb5Kd0aaD2lbRLjKsO1tza758dMdLrB47PSbrxcm.K4bBqI9C', 1, 0, 0, 0, 0, NULL, '2022-03-30 19:18:50', '2022-03-30 19:18:50'),
(3, 'tourist', 'tourist@gmail.com', NULL, NULL, '$2y$10$TcoeERgnCFf065oKoY2DweVWjcSmY.d9Bn9nBcQ.5ei3IO51OgPVa', 0, 1, 0, 0, 0, NULL, '2022-03-30 19:52:02', '2022-03-30 19:52:02'),
(4, 'a', 'a@gmail.com', NULL, NULL, '$2y$10$/6vcJ/TyqOzXhvCrjF573OrYjK67QMju7K4pOcL.OApNHj1VKuBgq', 1, 1, 0, 0, 0, NULL, '2022-03-31 18:15:07', '2022-03-31 18:15:07'),
(5, 'admin', 'admin@mail.com', NULL, NULL, '$2y$10$eBzm3cEsbRSf2djUAs1P2eyT.yQlWP3XJQb737CalCQoTsdTbRvja', 2, 1, 0, 0, 0, NULL, '2022-04-05 21:23:33', '2022-04-05 21:23:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journies`
--
ALTER TABLE `journies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pakacge_id` (`package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `membership_plans`
--
ALTER TABLE `membership_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_ships`
--
ALTER TABLE `member_ships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usr_id` (`user_id`),
  ADD KEY `memship_id` (`membership_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`user_id`),
  ADD KEY `countrys_id` (`country_id`);

--
-- Indexes for table `package_requests`
--
ALTER TABLE `package_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `p_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journies`
--
ALTER TABLE `journies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_plans`
--
ALTER TABLE `membership_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member_ships`
--
ALTER TABLE `member_ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package_requests`
--
ALTER TABLE `package_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `journies`
--
ALTER TABLE `journies`
  ADD CONSTRAINT `pakacge_id` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member_ships`
--
ALTER TABLE `member_ships`
  ADD CONSTRAINT `memship_id` FOREIGN KEY (`membership_id`) REFERENCES `membership_plans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usr_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `countrys_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `p_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
