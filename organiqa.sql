-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 05:11 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organiqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Admin', '1237894560', 'admin@gmail.com', 'a3175a452c7a8fea80c62a198a40f6c9');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `time`) VALUES
(1, '37977Banner 1.png', '2020-05-21 15:50:28'),
(2, '34605Banner 2.png', '2020-05-21 15:55:46'),
(3, '36897banner3.jpg', '2020-05-13 07:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `S.no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quan` int(100) NOT NULL,
  `pro_cost` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`S.no`, `user_id`, `product_id`, `quan`, `pro_cost`, `time`) VALUES
(268, 15, 1, 1, 170, '2020-05-18 10:46:42'),
(287, 18, 10, 2, 420, '2020-05-24 18:56:29'),
(290, 2, 2, 1, 599, '2020-05-24 18:56:46'),
(291, 2, 10, 2, 420, '2020-05-24 18:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `discount_price` int(11) NOT NULL,
  `original_price` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timer` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`id`, `name`, `image`, `discount_price`, `original_price`, `time`, `timer`) VALUES
(1, 'O She Wash', '5938092256pro11.png', 125, 170, '2020-05-14 08:19:11', '2020-05-16 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `detail_of` text NOT NULL,
  `content` text NOT NULL,
  `heading` text NOT NULL,
  `image` text NOT NULL,
  `video_link` text NOT NULL,
  `more_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `detail_of`, `content`, `heading`, `image`, `video_link`, `more_content`) VALUES
(1, 'About Us', '<p>&nbsp;OrganiQa Enterprises is a company that stemmed out of passion &ndash; the desire to incorporate health in the life of Indians through&nbsp;</p>\r\n<p>products that are accessible and we use on a regular basis. From that passion, a vision was born; and the vision birthed reality.</p>\r\n<p>We stand here today to cater to the growing needs of personal health care products in India.</p>', 'WE ARE LEADING IN THE INDIAN START UP MARKET OF PERSONAL SANITARY PRODUCT.', '3105492256pro11.png', 'https://vimeo.com/415124482', 'Our journey began in 2019 with our flagship product O\' She Anion Sanitary Napkins, which is the best anion sanitary pad available in the retail market today. Now, weâ€™re introducing another innovative product O\' She intimate wash, So Sure. Both products not only boast quality that Indian woman can afford, but itâ€™s also all about comfort and convenience like no other.\r\n\r\nA company driven by passion, confirmed by a vision, and geared for implementation, we aim to give Indians top-rated quality that is specifically designed to give value to the users, their health, and their lifestyle.Each journey begins with a single step. From these two products, weâ€™ll certainly take each step forward until the vision of offering revolutionary products in the Indian health care market is realized.From us to you, we would like to invite you to discover our world of difference, and witness innovation being born.'),
(2, 'Privacy Policy', '<p>privacy policy will come here regarding organiqa bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>', '', '', '', ''),
(3, 'Terms and Condition', '<p>Do Not Purchase. Webiste is On testing. TERMINATION: This agreement will terminate immediately without notice from us if in our sole discretion you fail to comply with any term or provision of this Agreement. Upon termination, you must destroy all materials obtained from this Site and all copies thereof, whether made under the terms of this Agreement or otherwise. In the event of termination, the disclaimers of warranties and limitations of liabilities, damages and remedies set forth in this Agreement shall survive. DELIVERY/SHIPPING: Purchases are shipped from our warehouse in Chennai by reputed courier agencies.</p>\r\n<p>&bull; Plush will deliver products only in India and not International. All domestic orders are processed within 1 business day. You can expect delivery of the order within 3-7 business day. For locations which are in the interiors or in difficult coverage area, this may take between 10-12 working days.</p>\r\n<p>&bull; Goods will need to be signed for upon delivery. If you cannot be there to sign for your delivery please suggest an alternative i.e. a family member, colleague, neighbour, etc. However Plush takes no responsibility for goods signed by an alternative person.</p>\r\n<p>&bull; Plush is not responsible for any kind of damage after delivery.</p>\r\n<p>&bull; For any complaints with regards to your order please write to us to care@uessentials.com within 7 business days of your order delivery for resolution</p>\r\n<p>&bull; Plush has free shipping for orders below Rs 100. For orders below Rs 100, we charge a minimum Rs 20.</p>', '', '', '', ''),
(4, 'FAQ', 'Product\r\n\r\nQuestion	:	How  does Oâ€™She by OrganiQa anion sanitary pad and Intimate Wash work ?\r\nAnswer	:	All your Plush products have a combination of heavy flow and light flow pads to give you the optimal comfort levels.\r\n\r\nQuestion	:	Is there any difference in the length of pads and quantity of intimate wash ?\r\nAnswer	:	Yes ! Oâ€™ She  the appropriate size requirements are met for all. Our heavy flow pads at 280mm and intimate wash is 100ml.\r\n\r\nQuestion	:	How often should I change the pads ?\r\nAnswer	:	Gynecologists recommend changing your pad every 4-6 hours, though really you can change it as often as you need to.\r\n\r\nQuestion	:	Why use cotton ?\r\nAnswer	:	Cotton is a naturally derived compostable and biodegradable crop with 100% natural cellulose fibre. Our team has taken much 				effort in picking the right grade of cotton to deliver the right amount of comfort and softness to your skin. Traditional pads are made up of 100% polyethylene which makes the skin prone to rashes and redness. With Plush youâ€™re guaranteed a rash-free cycle while contributing positively to climate change.\r\n\r\nQuestion	:	What is your packaging made of ?\r\nAnswer	:	Unlike brands that use low-micron plastic to package pads, we use FSC certified paper. Forest Stewardship CouncilÂ® 				certification means we source materials that meet strict standards to protect forests, and the animals and people who depend on them.\r\n\r\nQuestion	:	Where are Plush products manufactured ?\r\nAnswer	:	Weâ€™re proud of the responsible approach we take to manufacturing our products. Our cotton is sourced from US from the finest 				crops until it is shipped to an FDA approved plant in China where it is converted into a finished product.\r\n\r\nQuestion	:	Are Oâ€™She pads made of organic cotton ?\r\nAnswer	:	Hereâ€™s the deal â€“ cotton can be grown organically, but by the time it reaches your hands, the final product is most likely not 				organic. Dime a dozen companies use the term â€˜organicâ€™ without necessary certifications despite harsh chemicals used in the 	process. At OrganiQa what you see is what you get. In our effort to provide unmatched comfort, we iterated multiple times and choose US Cotton â€“ one of the most resource efficient and functionally superior product. All our cotton is accredited by Cotton Incorporated and US Cotton â€“ a 49 year old non-profit organization\r\n\r\nRETURN AND CANCELLATION POLICY\r\n\r\nQuestion	:	What is your return policy ?\r\nAnswewr	:	Weâ€™d be sad if Oâ€™She by OrganiQa did not manage to put a spring in your step! Owing to the kind of products we sell, we donâ€™t 				accept returns or exchanges. Having said that, pass on your reason for want of return onto care@organiqa.com and weâ€™ll make sure our team looks into this.\r\n\r\nQuestion	:	What if the item I receive is damaged or defective ?\r\n Answer	:	Weâ€™re extremely sorry about the unpleasant experience you had to go through. In case this happens or has happened, do 				reach out to our team on care@organiqa.com and weâ€™ll replace the product right away with no extra cost.\r\n\r\nQuestion	:	What is your order cancellation policy ?\r\nAnswer	:	Cancellation is permitted only if the order has not been shipped. To do so please reach out to us at care@organiqa.com\r\n\r\nQuestion	:	What if you miss the package during delivery?\r\nAnswer	:	Worry not, our team has you covered. Reach out to us at care@organiqa.com.\r\n\r\nSHIPPING\r\n\r\nQuestion	:	How long does it take for Plush to ship ?\r\nAnswer	:	We typically give orders 2-5 business days to ship. Should you have an immediate need, please reach out to 				care@organiqa.in and our team will see how we can help.\r\n\r\nQuestion	:	How much does shipping and handling cost ?\r\nAnswer	:	We offer free shipping for ordered above Rs. 499. For orders below that amount, we charge Rs. 50 for shipping.\r\n\r\nQuestion	:	Do you offer cash on delivery ?\r\nAnswer	:	Yes, we do :-)', '', '', '', ''),
(5, 'payment gateway image', '', '', '24514logo.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_details`
--

CREATE TABLE `home_page_details` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page_details`
--

INSERT INTO `home_page_details` (`id`, `address`, `phone`, `email`) VALUES
(1, 'RZ D-90, Mahaveer Enclave. Dwarka Extension New Delhi -110045', '9667778189', 'info@organiqa.in');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` text NOT NULL,
  `payment_status` text NOT NULL,
  `payment_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `time`, `status`, `payment_status`, `payment_id`) VALUES
(23, 2, 170, '2020-05-15 10:17:53.119789', '', '', '0'),
(24, 2, 320, '2020-05-15 10:18:42.569015', '', '', '0'),
(33, 2, 150, '2020-05-15 11:50:16.299662', '', '', '0'),
(35, 3, 490, '2020-05-15 13:29:15.499903', 'cancled', '', '0'),
(54, 2, 170, '2020-05-18 08:04:18.320877', '', 'd2e64166b9305b6e97795048d9a2bb4a04703124c857b276da747fb20d4eb578', 'pay_ErkP51pCXf8xBm'),
(55, 2, 680, '2020-05-18 08:04:52.584615', '', '9af172c009d00be6a53e185ed5b890f8eb54d5c5d1b7df4cf5ff845c2b536cb7', 'pay_ErkPg6JuVyE4K9'),
(73, 2, 150, '2020-05-18 10:27:06.590518', 'cancled', 'success', 'pay_ErmlSob1ppnAoa'),
(74, 2, 620, '2020-05-18 10:28:08.068168', '', 'success', 'pay_Ermqzw035CBhOV'),
(75, 15, 320, '2020-05-18 10:30:37.464008', '', 'success', 'pay_Ermtcian1k5M0n'),
(76, 16, 320, '2020-05-18 10:58:25.222277', '', 'success', 'pay_ErnMxktM6EtEfI'),
(77, 16, 170, '2020-05-18 14:31:58.466476', '', 'success', 'pay_Erqzb0mrhqdJJ8');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `user_id`, `order_id`, `product_id`, `quantity`) VALUES
(27, 2, 23, 1, 1),
(28, 2, 24, 1, 1),
(29, 2, 24, 2, 1),
(39, 2, 33, 2, 1),
(42, 3, 35, 1, 2),
(43, 3, 35, 2, 1),
(66, 2, 54, 1, 1),
(67, 2, 55, 1, 4),
(71, 2, 73, 2, 1),
(72, 2, 74, 2, 3),
(73, 2, 74, 1, 1),
(74, 15, 75, 1, 1),
(75, 15, 75, 2, 1),
(76, 16, 76, 1, 1),
(77, 16, 76, 2, 1),
(78, 16, 77, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `signature_hash` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `user_id`, `payment_id`, `order_id`, `signature_hash`, `created_at`) VALUES
(20, 2, 'pay_ErkPg6JuVyE4K9', 'order_ErkPbLoR66XFr6', '9af172c009d00be6a53e185ed5b890f8eb54d5c5d1b7df4cf5ff845c2b536cb7', '2020-05-18 08:04:52'),
(21, 2, 'pay_ErkQut0FIcchGi', 'order_ErkQoAdg5g7q8y', '20b88e08ee5d0c3701ccc34faaaf18fa25439628b2e330423f3642b3939be28c', '2020-05-18 08:06:02'),
(22, 2, 'pay_ErkUdmRgys77KC', 'order_ErkUXdNK0rvqCJ', 'a1c96f8ec3bb03b598d4b097052dd28eccf7424d2979044383b16a20acfae121', '2020-05-18 08:09:34'),
(108, 2, 'pay_ErmlSob1ppnAoa', 'order_ErmlKS2iTMbHAa', 'da8fc495c72c335566aa86db4a000d917be9a3ecff9cf0d264dbd8f5f3b2def6', '2020-05-18 10:26:52'),
(109, 2, 'pay_Ermqzw035CBhOV', 'order_ErmqtGZ1E66Iqn', 'e1c4ca07c4f06dcc60f3e80e5dbf08e3be8f0171ce5c1204b7c1758be7104cb9', '2020-05-18 10:28:08'),
(110, 15, 'pay_Ermtcian1k5M0n', 'order_ErmtXHpPc0qaWo', '9e0b34627218895812253ecf2fad9354f67ddd993d5a7e0720b80e8ba6ac7c28', '2020-05-18 10:30:37'),
(111, 16, 'pay_ErnMxktM6EtEfI', 'order_ErnMn8IA5DBGoh', '54d584c6763001eede54a89bbf22e66738a536362f004284dc7a4f36c04726f4', '2020-05-18 10:58:25'),
(112, 16, 'pay_Erqzb0mrhqdJJ8', 'order_ErqvBK2ValwXcg', '1567e45b0cc135690b87576b61d03ae16676795522809b1a238ca3aada341479', '2020-05-18 14:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_display`
--

CREATE TABLE `product_display` (
  `id` int(11) NOT NULL,
  `Product_name` text NOT NULL,
  `Product_code` varchar(255) NOT NULL,
  `Product_cost` varchar(255) NOT NULL,
  `Product_price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_display`
--

INSERT INTO `product_display` (`id`, `Product_name`, `Product_code`, `Product_cost`, `Product_price`, `discount`, `heading`, `description`) VALUES
(2, 'O\' She Anion Chip Sanitary Pads', '0001', '50', '599', '249', 'O\' She Anion Chip Sanitary Pads', 'Each O\' She by OrganiQa Anion Sanitary Napkin has a special anion chip that brings a lot of advantages, and most notably of which are: helps prevent bacteria during menstruation, helps reduce feminine discomfort, and helps eliminate unwanted odors. -  Beneficial Ions Upon getting in contact with moisture, the Anion chip in a O\' She pad releases negative ions that letâ€™s you experience the benefits anions bring. - Quick Absorption The top layer is made of a special non-woven material that is so soft to the touch. It has quick-absorbing properties that sip away moisture and wetness in an instant, leaving you feeling fresh and dry all the time. -  Boost of Softness Inner layers are made from dirt-free and sterilized virgin pulp material that gives a O\' She pad an additional boost of softness. -  Superior Liquid Retention Each pad contains super absorbent polymer that gives superior liquid retention. No leaks for you, even on your heaviest days! - Breathable Freshness The bottom layer is breathable, giving you more freshness. It takes away that icky, wet, and humid feeling as air flows through freely.'),
(10, 'O\' She Natural Intimate Wash', '0002', '50', '210', '0', 'O\' She Natural Intimate Wash', 'Designed with the goodness of proven Ayurvedic herbs, Ayurvedic Natural Intimate Hygiene Wash is the worldâ€™s first intimate wash formulated using the expertise of Aloe Barbadensis  and  Pongamia Gllabra the rich secrets of ancient Australia and Pacific Island  Ayurveda. Gynaecologically and dermatologically tested to ensure that the delicate vaginal skin gets the gentlest of care, this safe and effective personal hygiene formulation is enriched with soothing and emollient substances like Orange Oil, Rosemary, Neem, Aloe Vera, Lime, Sage, Thyme, Vetiver and Bisabolol. It also keeps you fresh and fragrant while reducing itching, irritation and other infections by preserving your bodyâ€™s natural pH balance. It is also free from paraben, SLES and excess soap.'),
(15, 'sdsd', '1', '1', '1', '1', '1', '1'),
(16, 'gh', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`) VALUES
(3, 2, '94240Product.jpg'),
(4, 2, '94240Product.jpg'),
(7, 10, '50798Product3.jpg'),
(8, 10, '50798Product3.jpg'),
(50, 15, '79190118437.jpg'),
(51, 15, '53152118437.jpg'),
(52, 15, '52903118437.jpg'),
(53, 15, '64163118437.jpg'),
(54, 15, '85245118437.jpg'),
(55, 15, '87686Layer 0.png'),
(56, 15, '17892118437.jpg'),
(57, 15, '98205orange.jpg'),
(58, 15, '1078094240Product1.jpg'),
(59, 15, '40558118437.jpg'),
(60, 15, '13140118437.jpg'),
(61, 15, '13775118437.jpg'),
(62, 15, '65119118437.jpg'),
(63, 15, '96458118437.jpg'),
(64, 15, '79311118437.jpg'),
(65, 15, '14901118437.jpg'),
(66, 15, '84651118437.jpg'),
(67, 15, '41619118437.jpg'),
(68, 15, '68712118437.jpg'),
(69, 15, '65603118437.jpg'),
(81, 16, '13513118437.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `phone`, `subject`, `detail`) VALUES
(1, 'name', 'email@gmail.com', 2147483647, 'Subject', 'Detail'),
(2, 'Jayant kumar', 'j@gmail.com', 2147483647, 'Trying the query field', 'ok'),
(3, 'man', 'final@g.com', 1232421232, 'Trying the query field', 'yes trying tke 2'),
(4, 'MikeRor', 'no-reply@hilkom-digital.de', 2147483647, 'cheap monthly SEO plans', 'hi there \r\nI have just checked organiqa.in for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(5, 'Melvinscoob', 'atrixxtrix@gmail.com', 2147483647, 'Human body thermal camera high accuracy and medical supplies', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply medical products: \r\n \r\nMedical masks \r\n3M 1860, 9502, 9501 \r\n3ply medical, KN95 FFP2, FFP3, N95 masks \r\nFace shield \r\nDisposable nitrile/latex gloves \r\nIsolation/surgical gown \r\nProtective PPE/Overalls \r\nIR non-contact thermometers \r\nCrystal tomato \r\n \r\nHuman body thermal cameras \r\nfor Body Temperature Measurement up to accuracy of Â±0.1?C \r\n \r\nWhatsapp: +65 87695655 \r\nTelegram: cctv_hub \r\nSkype: cctvhub \r\nEmail: sales@thecctvhub.com \r\nW: http://www.thecctvhub.com/ \r\n \r\nIf you do not wish to receive email from us again, please let us know by replying. \r\n \r\nregards, \r\nCCTV HUB'),
(6, 'JoshuaKah', 'no-replySi@gmail.com', 2147483647, 'A new way of advertising.', 'HÐµllÐ¾!  organiqa.in \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd rÐµquÐµst ÑÐ¾mplÐµtÐµly lÐµgÐ°l? \r\nWÐµ suggÐµst Ð° nÐµw lÐµgÐ°l wÐ°y Ð¾f sÐµnding ÑÐ¾mmÐµrÑiÐ°l Ð¾ffÐµr thrÐ¾ugh fÐµÐµdbÐ°Ñk fÐ¾rms. SuÑh fÐ¾rms Ð°rÐµ lÐ¾ÑÐ°tÐµd Ð¾n mÐ°ny sitÐµs. \r\nWhÐµn suÑh lÐµttÐµrs Ð°rÐµ sÐµnt, nÐ¾ pÐµrsÐ¾nÐ°l dÐ°tÐ° is usÐµd, Ð°nd mÐµssÐ°gÐµs Ð°rÐµ sÐµnt tÐ¾ fÐ¾rms spÐµÑifiÑÐ°lly dÐµsignÐµd tÐ¾ rÐµÑÐµivÐµ mÐµssÐ°gÐµs Ð°nd Ð°ppÐµÐ°ls. \r\nÐ°lsÐ¾, mÐµssÐ°gÐµs sÐµnt thrÐ¾ugh ÑÐ¾ntÐ°Ñt FÐ¾rms dÐ¾ nÐ¾t gÐµt intÐ¾ spÐ°m bÐµÑÐ°usÐµ suÑh mÐµssÐ°gÐµs Ð°rÐµ ÑÐ¾nsidÐµrÐµd impÐ¾rtÐ°nt. \r\nWÐµ Ð¾ffÐµr yÐ¾u tÐ¾ tÐµst Ð¾ur sÐµrviÑÐµ fÐ¾r frÐµÐµ. WÐµ will sÐµnd up tÐ¾ 50,000 mÐµssÐ°gÐµs fÐ¾r yÐ¾u. \r\nThÐµ ÑÐ¾st Ð¾f sÐµnding Ð¾nÐµ milliÐ¾n mÐµssÐ°gÐµs is 49 USD. \r\n \r\nThis Ð¾ffÐµr is ÑrÐµÐ°tÐµd Ð°utÐ¾mÐ°tiÑÐ°lly. PlÐµÐ°sÐµ usÐµ thÐµ ÑÐ¾ntÐ°Ñt dÐµtÐ°ils bÐµlÐ¾w tÐ¾ ÑÐ¾ntÐ°Ñt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +375259112693 \r\nEmail feedbackform@make-success.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `isactive` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `address`, `state`, `city`, `pin`, `isactive`) VALUES
(2, 'Jayant', 'kumar', '9784803026', 'j@gmail.com', '1234', '18,nand bhawan, main chouraha\r\njai singh pura khor,jaipur', 'RAJASTHAN', 'JAIPUR', '302027', '1'),
(3, 'Pragya', 'Choraria', '1234567890', 'p@gmail.com', '1234', 'ok', 'something', 'ok', '1234', '1'),
(4, 'aman', 'kumar', '1231231231', 'a@gmail.com', '1234', '', '', '', '', '0'),
(5, 'asd', 'qw', '12', 'ad@gmail.com', '12', 'ok', '0k', 'ok', '123456', '1'),
(6, 'Uttam', 'Kumar', '9441143040', 'u@gmail.com', '1234', '', '', '', '', '0'),
(7, 'Kanaka', 'Devi', '9999999999', 'k@gmail.com', '0000', '', '', '', '', '1'),
(9, 'try', 'ing', '1010101010', 'trying@gmail.com', '1234', '', '', '', '', '1'),
(10, 'Jayant', 'kumar', '97848030268', 'jaya@gmail.com', '12345678', '', '', '', '', '1'),
(11, 'uttam', 'kumar', '123456765432', 'uttam12@gmail.com', '123456789', '', '', '', '', '1'),
(12, 'Pragya', 'Choraria', '123456787', 'pragya@gmail.com', '1234567890', '', '', '', '', '1'),
(13, 'Pranjal', 'Surana', '090909090909', 'pranjal@gmail.com', '12345678', '', '', '', '', '1'),
(14, 'Aman', 'mathur', '8500971060', 'aman@gmail.com', 'abcdefgh', '18,nand bhawan, main chouraha\r\njai singh pura khor,jaipur', 'RAJASTHAN', 'JAIPUR', '302027', '1'),
(15, 'Neha', 'Kabra', '0987654321', 'nehaa@gmail.com', '12345678', 'visakhapatnam', 'Andhra', 'visakhapatnam', '530020', '1'),
(16, 'final', 'man', '1232421232', 'final@g.com', '12345678', 'final address', 'address', 'final', '320000', '1'),
(17, 'admin', 'admin', '1122334455', 'admin@gmail.com', 'organiqa', '', '', '', '', '1'),
(18, 'Deepika', 'Narsinghani', '9560293522', 'vd0519@yahoo.com', '05@Vikas', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `detail` text NOT NULL,
  `isactive` enum('1','0') NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `detail`, `isactive`, `image`) VALUES
(6, 'Jayant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1', '45750person_1.jpg'),
(7, 'Mark Rafullo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1', '70291person_4.jpg'),
(11, 'How to deal with hunger before your period', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '1', '57426Animation.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `time`) VALUES
(4, 2, 2, '2020-05-24 18:47:29.356328');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_details`
--
ALTER TABLE `home_page_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product_display`
--
ALTER TABLE `product_display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_page_details`
--
ALTER TABLE `home_page_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `product_display`
--
ALTER TABLE `product_display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
