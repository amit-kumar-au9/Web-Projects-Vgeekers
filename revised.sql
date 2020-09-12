-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 05:12 PM
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
-- Database: `revised`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `banner` text NOT NULL,
  `privacy_policy` text NOT NULL,
  `terms_and_condition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `about`, `banner`, `privacy_policy`, `terms_and_condition`) VALUES
(1, '<h2>Thinking of Online, let’s think offline as well!</h2>\r\n                    <p>In this era of online learning and teaching, we are missing the core of face to face interactions. In online live classes it is possible but not possible for recorded classes. </p>\r\n\r\n                    <p>Our vision at RevisEdu is to help both of the sections of learners (offline and Online learners) by providing them an overall solution where they can learn offline in classroom and they can also choose online classes so that they can learn at their convenience. We will introduce best coaching centres and great coaching seeking students so that they can help each other in their goals.</p>\r\n                    <p>This combination of Online & Offline teaching & learning with superior technology will create an extra ordinary \r\n                    Learning experience for students and helps them achieve greater improvement.</p>\r\n                    <h2>Who are we?</h2>\r\n                    <p>RevisEdu is India\'s first leading tutoring company which enables students to learn LIVE with some of India\'s best-curated teachers if students want to learn online and help them finding best coaching institute with great faculty if students want to learn offline in classroom. RevisEdu is committed to help both of the communities of students and coaching institutes in achieving their desired goals. Currently morethan 100 coaching institutes and morethan 1000 students are connected to RevisEdu and getting benefited.</p>\r\n                    <p>Our technology enables teachers to provide study notes, assignments and take attendance through our App. It enables students to complete assignments, give online tests. It also helps parents in having a detailed view of class taken, subjects learnt and assignments evaluation.</p>\r\n', 'banner2.png', '<h2>Privacy Policy</h2>\r\n			<blockquote>\r\n				<p>We value your trust. In order to honour that trust, RevisED adheres to ethical standards in gathering,\r\n				using, and safeguarding any information you provide.</p>\r\n				<p>Revised Learning Technologies Private Limited is a leading edtech company, incorporated in India,\r\n				for imparting learning.</p>\r\n				<p>This privacy policy governs your use of the application \'RevisED – The Learning Platform\'\r\n				(\'Application\'), www.revised.co.in (\'Website\') and the other associated applications, products,\r\n				websites and services managed by the Company.</p>\r\n				<p>Please read this privacy policy (\'Policy\') carefully before using the Application, Website, our services\r\n				and products, along with the Terms of Use (\'ToU\') provided on the Application and the Website. Your\r\n				use of the Website, Application, or services in connection with the Application, Website or\r\n				products (\'Services\'), or registrations with us through any modes or usage of any products including\r\n				through SD cards, tablets or other storage/transmitting device shall signify your acceptance of this\r\n				Policy and your agreement to be legally bound by the same.</p>\r\n				<p>If you do not agree with the terms of this Policy, do not use the Website, Application our products or\r\n				avail any of our Services.</p>\r\n			</blockquote>\r\n		<h2>User Provided Information</h2>\r\n			<blockquote>\r\n				<p>The Application/Website/Services/products obtains the information you provide when you\r\n				download and register for the Application or Services or products. When you register with us, you\r\n				generally provide (a) your name, age, email address, location, phone number, password and your\r\n				ward\'s educational interests; (b) transaction-related information, such as when you make purchases,\r\n				respond to any offers, or download or use applications from us; (c) information you provide us when\r\n				you contact us for help; (d) information you enter into our system when using the\r\n				Application/Services/products, such as while asking doubts, participating in discussions and taking\r\n				tests. The said information collected from the users could be categorized as “Personal Information”,\r\n				“Sensitive Personal Information” and “Associated Information”. Personal Information, Sensitive\r\n				Personal Information and Associated Information (each as individually defined under this\r\n				Information Technology (Reasonable security practices and procedures and sensitive personal data\r\n				or information) Rules, 2011 (the “Data Protection Rules”)) shall collectively be referred to as\r\n				\'Information\' in this Policy.</p>\r\n				<p>We may use the Information to contact you from time to time, to provide you with the Services,\r\n				important information, required notices and marketing promotions. We will ask you when we need\r\n				more information that personally identifies you (personal information) or allows us to contact you.\r\n				We will not differentiate between who is using the device to access the Application, Website or\r\n				Services or products, so long as the log in/access credentials match with yours. In order to make the\r\n				best use of the Application/Website/Services/products and enable your Information to be captured\r\n				accurately on the Application/Website/Services/products, it is essential that you have logged in\r\n				using your own credentials.</p>\r\n				<p>We will, at all times, provide the option to you to not provide the Personal Information or Sensitive\r\n				Personal Information, which we seek from you. Further, you shall, at any time while using the\r\n				Application/Services/products, also have an option to withdraw your consent given earlier to us to\r\n				use such Personal Information or Sensitive Personal Information. Such withdrawal of the consent is\r\n				required to be sent in writing to us at the contact details provided in this Policy below. In such event,\r\n				however, the Company fully reserves the right not to allow further usage of the Application or\r\n				provide any Services/products thereunder to you.</p>\r\n			</blockquote>\r\n		\r\n		<h2>Automatically Collected Information</h2>\r\n			<blockquote>\r\n				<p>In addition, the Application/products/Services may collect certain information automatically,\r\n				including, but not limited to, the type of mobile device you use, your mobile devices unique device\r\n				ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet\r\n				browsers you use, and information about the way you use the Application/Services/products. As is\r\n				true of most Mobile applications, we also collect other relevant information as per the permissions\r\n				that you provide.</p>\r\n				<p>We use an outside credit card processing company to bill you for goods and services. These\r\n				companies do not retain, share, store or use personally identifiable information for any other\r\n				purpose.</p>\r\n			</blockquote>\r\n		<h2>Use of your Personal Information</h2>\r\n			<blockquote>\r\n				<p>We use the collected Information to analyse trends, to conduct research, to administer the\r\n				Application/Services and products, to learn about each user\'s learning patterns and movements\r\n				around the Application/Services and products and to gather demographic information and usage\r\n				behaviour about our user base as a whole. Aggregated and individual, anonymized and nonanonymized data may periodically be transmitted to external service providers to help us improve\r\n				the Application, products and our Services. We will share your information with third parties only in\r\n				the ways that are described below in this Policy.</p>\r\n				<p>We may use the individual data and behaviour patterns combined with personal information to\r\n				provide you with personalized content, and better your learning objectives. Third parties provide\r\n				certain services which we may use to analyse the data and information to personalize, drive insights\r\n				and help us better your experience or reach out to you with more value-added applications,\r\n				products, information and services. However, these third-party companies do not have any\r\n				independent right to share this information. We do not sell, trade or rent your Information to any\r\n				third party unless, we have been expressly authorized by you either in writing or electronically to do\r\n				so. We may at times provide aggregate statistics about our customers, traffic patterns, and related\r\n				site information to reputable third parties, however this information when disclosed will be in an\r\n				aggregate form and does not contain any of your Personally Identifiable Information.</p>\r\n				<p>RevisED will occasionally send email notices or contact you to communicate about our Services,\r\n				products and benefits, as they are considered an essential part of the Services/products you have\r\n				chosen.</p>\r\n			</blockquote>\r\n		<h2>We may disclose Information:</h2>\r\n			<blockquote>\r\n				<p>as required by law, such as to comply with a subpoena, or similar legal process;</p>\r\n				<p>to enforce applicable ToU, including investigation of potential violations thereof;</p>\r\n				<p>when we believe in good faith that disclosure is necessary to protect our rights, protect your safety\r\n				or the safety of others, investigate fraud, address security or technical issues or respond to a\r\n				government request;</p>\r\n				<p>with our trusted services providers who work on our behalf, do not have an independent use of the\r\n				information we disclose to them, and have agreed to adhere to the rules set forth in this Policy;</p>\r\n				<p>to protect against imminent harm to the rights, property or safety of the Application/Website/\r\n				Revised Learning Technologies Private Limited or its users or the public as required or permitted by\r\n				law;</p>\r\n				<p>with third party service providers in order to personalize the Application/Website/Services/products\r\n				for a better user experience and to perform behavioural analysis;</p>\r\n				<p>Any portion of the Information containing personal data relating to minors provided by you shall be\r\n				deemed to be given with the consent of the minor\'s legal guardian. Such consent is deemed to be\r\n				provided by your registration with us.</p>\r\n			</blockquote>\r\n		<h2>Access to your Personal Information</h2>\r\n			<blockquote>\r\n				<p>We will provide you with the means to ensure that your Personal Information is correct and current.\r\n				If you have filled out a user profile, we will provide an obvious way for you to access and change\r\n				your profile from our Application/Services/Website/products. We adopt reasonable security\r\n				measures to protect your password from being exposed or disclosed to anyone.</p>\r\n			</blockquote>\r\n		<h2>Cookies</h2>\r\n			<blockquote>\r\n				<p>We send cookies (small files containing a string of characters) to your computer, thereby uniquely\r\n				identifying your browser. Cookies are used to track your preferences, help you login faster, and\r\n				aggregated to determine user trends. This data is used to improve our offerings, such as providing\r\n				more content in areas of greater interest to a majority of users.</p>\r\n				<p>Most browsers are initially set up to accept cookies, but you can reset your browser to refuse all\r\n				cookies or to indicate when a cookie is being sent. Some of our features and services may not\r\n				function properly if your cookies are disabled.</p>\r\n			</blockquote>\r\n		<h2>Links</h2>\r\n			<blockquote>\r\n				<p>We may present links in a format that enables us to keep track of whether these links have been\r\n				followed. We use this information to improve our customized content. Clicking on links may take you\r\n				to sites outside our domain. We are not responsible for the privacy practices of other web sites. We\r\n				encourage our users to be aware when they leave our site to read the privacy statements of each\r\n				and every web site that collects personally identifiable information. This Privacy Policy applies solely\r\n				to information collected by our Website.</p>\r\n			</blockquote>\r\n		<h2>Alerts</h2>\r\n			<blockquote>\r\n				<p>We may alert you by email or phone (through sms/call) to inform you about new service offerings or\r\n				other information which we feel might be useful for you.</p>\r\n			</blockquote>\r\n		<h2>Public Forums</h2>\r\n			<blockquote>\r\n				<p>When you use certain features on our website like the discussion forums and you post or share your\r\n				personal information such as comments, messages, files, photos, will be available to all users, and\r\n				will be in the public domain. All such sharing of information is done at your own risk. Please keep in\r\n				mind that if you disclose personal information in your profile or when posting on our forums this\r\n				information may become publicly available.</p>\r\n			</blockquote>\r\n		<h2>Security</h2>\r\n			<blockquote>\r\n				<p>We are concerned about safeguarding the confidentiality of your Information. We provide physical,\r\n				electronic, and procedural safeguards to protect Information we process and maintain. For example,\r\n				we limit access to this Information to authorized employees only who need to know that\r\n				information in order to operate, develop or improve our Application/Services/products/Website.</p>\r\n				<p>Please be aware that, although we endeavour to provide reasonable security for information we\r\n				process and maintain, no security system can prevent all potential security breaches.</p>\r\n			</blockquote>\r\n		<h2>How Long Do We Retain User Data?</h2>\r\n			<blockquote>\r\n				<p>Currently, we plan to retain user data while an account is active and for at least three years\r\n				afterward. We may alter this practice according to legal and business requirements. For example, we\r\n				may lengthen the retention period for some data if needed to comply with law or voluntary codes of\r\n				conduct. Unless otherwise prohibited, we may shorten the retention period for some types of data if\r\n				needed to free up storage space.</p>\r\n			</blockquote>\r\n		<h2>Log information</h2>\r\n			<blockquote>\r\n				<p>When you access our Website, our servers automatically record information that your browser\r\n				sends whenever you visit a website. These server logs may include information such as your web\r\n				request, internet protocol address, browser type, browser language, the date and time of your\r\n				request and one or more cookies that may uniquely identify your browser.</p>\r\n			</blockquote>\r\n		<h2>User communications</h2>\r\n			<blockquote>\r\n				<p>When you send an email or other communication to us, we may retain those communications in\r\n				order to process your inquiries, respond to your requests and improve our Services.</p>\r\n				Changes to this Statement\r\n				<p>As the Company evolves, our privacy policy will need to evolve as well to cover new situations. You\r\n				are advised to review this Policy regularly for any changes, as continued use is deemed approval of\r\n				all changes.</p>\r\n			</blockquote>\r\n		<h2>Your Consent</h2>\r\n			<blockquote>\r\n				<p>We believe that, every user of our Application/Services/products/Website must be in a position to\r\n				provide an informed consent prior to providing any Information required for the use of the\r\n				Application/Services/products/Website. By registering with us, you are expressly consenting to our\r\n				collection, processing, storing, disclosing and handling of your information as set forth in this Policy\r\n				now and as amended by us. Processing, your information in any way, including, but not limited to,\r\n				collecting, storing, deleting, using, combining, sharing, transferring and disclosing information, all of\r\n				which activities will take place in India. If you reside outside India your information will be\r\n				transferred, processed and stored in accordance with the applicable data protection laws of India.</p>\r\n			</blockquote>\r\n		<h2>Contact Information</h2>\r\n		<br>\r\n		<p>Our Grievance Officer shall undertake all reasonable efforts to address your grievances at the\r\n		earliest possible opportunity. You may contact us at:</p>\r\n			<blockquote>\r\n				<p>Grievance Officer: Mr. Udit Vij\r\n				<p>Address: B-38, Sector 7, Noida, 201301, Uttar Pradesh, India.\r\n				<p>Reach out to us on info@revised.co.in or revisededucationindia@gmail.com, in case of any queries.</p>\r\n			</blockquote>', 'sdfds');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `heading`, `content`) VALUES
(1, '13 Aug 2020', 'This is a blog', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.'),
(2, '15 Aug 2020', 'This is a blog 2', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.'),
(3, '13 Aug 2020', 'This is a blog 3', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.');

-- --------------------------------------------------------

--
-- Table structure for table `bussinessquery`
--

CREATE TABLE `bussinessquery` (
  `id` int(11) NOT NULL,
  `organizationName` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bussinessquery`
--

INSERT INTO `bussinessquery` (`id`, `organizationName`, `state`, `city`, `name`, `phone`, `email`, `query`) VALUES
(1, 'ABC', 'UP', 'Noida', 'Amit Kumar', '8218512255', 'amitkumar.developer1@gmail.com', 'kya hi btaye ab'),
(2, 'Kaam', 'Uttarakhand', 'Roorkee', 'Amit Kumar', '8218512255', 'amitkumar.developer1@gmail.com', 'asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `organization` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `organization`, `message`) VALUES
(1, 'Amit', 'amit@gmail.com', '8218512255', 'ABC', 'ABC'),
(2, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '08218512255', 'sdfsdsdfsdf', 'sdf'),
(3, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '08218512255', 'xxfsdfdf', 'dfdf'),
(4, 'Amit Kumar', 'amitkumar.developer1@gmail.com', '08218512255', 'asdasdasdas', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `description`, `image`) VALUES
(1, 'Smart Attendance', 'Keep parents updated with live attendance and monthly reports.', 'SVGattendence.bbcb8cbb.svg'),
(2, 'Insighful Student Reports', 'Personalised performance reports\r\nfor all your students', 'SVGReports.7464f12b.svg\r\n'),
(3, 'Parent Communication Module', 'Chat with parents, anytime, anywhere. Disable chat when you\'re busy', 'SVGChat.8b8a922d.svg\r\n'),
(4, 'Fee Records', 'Automatic reminders and receipts for instalments of students\' due fees', 'SVGFees.0cf271e2.svg\r\n'),
(5, 'Create Online Courses', 'Easily create your online courses and sell on your mobile app', 'Store1.c251ac8d.svg\r\n'),
(6, 'Secured Video Selling', 'Forget worrying about content piracy on our secured platform', 'Store2.e64224d3.svg\r\n'),
(7, 'Online Test', 'Conduct your online tests powered with automatic checking and solutions.', 'SVGOnlineTest.82f9f4c4.svg\r\n'),
(8, 'Class Management', 'Forget tons of paperwork and manage your institute completely digitally', 'SVGClass.8d33b9dd.svg\r\n'),
(9, 'Privacy Control', 'Control what info your faculties and admin can view for your batches', 'SVGPrivacy.266ae83b.svg'),
(10, 'Unlimited Cloud Space and Data Security', 'Your data is secured using SSL AES 256-bit encryption of courses providing maximum security', 'SVGDatabase.55ab39df.svg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'amit@gmail.com'),
(2, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newslettersent`
--

CREATE TABLE `newslettersent` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `class` text NOT NULL,
  `subject` text NOT NULL,
  `topic` text NOT NULL,
  `notelink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `class`, `subject`, `topic`, `notelink`) VALUES
(8, '12', 'Maths', 'Algebra', '31557algorithms_in_python.pdf'),
(12, '12', 'Science', 'Physics - Atoms', '7283112453COVER PAGE .pdf'),
(13, '12', 'Maths', 'Trignometry', '7283112453COVER PAGE .pdf');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `image`, `link`) VALUES
(1, '3.jpg', ''),
(2, '4.jpg', ''),
(3, '5.jpg', ''),
(4, '6.jpg', ''),
(5, '3.jpg', ''),
(6, '4.jpg', ''),
(7, '5.jpg', ''),
(8, '6.jpg', ''),
(9, '3.jpg', ''),
(10, '4.jpg', ''),
(11, '5.jpg', ''),
(12, '6.jpg', ''),
(13, '3.jpg', ''),
(14, '4.jpg', ''),
(15, '5.jpg', ''),
(16, '6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `type` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `subject`, `description`, `image`, `type`) VALUES
(2, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(3, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(4, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(5, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(6, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(7, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(8, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(9, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(10, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(11, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(12, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(13, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(14, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(15, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(16, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(17, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(18, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(19, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(20, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(21, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(22, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(23, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(24, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(25, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(26, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(27, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(28, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(29, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(30, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(31, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(32, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(33, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(34, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(35, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(36, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(37, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(38, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(39, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(40, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(41, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(42, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(43, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(44, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(45, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(46, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(47, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(48, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(49, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(50, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(51, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(52, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(53, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(54, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(55, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(56, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(57, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(58, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(59, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(60, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(61, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(62, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(63, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(64, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(65, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(66, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(67, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(68, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(69, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(70, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(71, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(72, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(73, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(74, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(75, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(76, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(77, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(78, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(79, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(80, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(81, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(82, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(83, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(84, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(85, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(86, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(87, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(88, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(89, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(90, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(91, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(92, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(93, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(94, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(95, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(96, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(97, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(98, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(99, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(100, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(101, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(102, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(103, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(104, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(105, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(106, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(107, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(108, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(109, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(110, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(111, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(112, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(113, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(114, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(115, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(116, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(117, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(118, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(119, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(120, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(121, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(122, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(123, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(124, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(125, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(126, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(127, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(128, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(129, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(130, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(131, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(132, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(133, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(134, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(135, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(136, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(137, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(138, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(139, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(140, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(141, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(142, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(143, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(144, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(145, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(146, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(147, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(148, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(149, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(150, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(151, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(152, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(153, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(154, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(155, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(156, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(157, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(158, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(159, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(160, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(161, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(162, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(163, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(164, 'Teacher Name', 'Science', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(165, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '4.jpg', '1'),
(166, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(167, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '1'),
(168, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '1'),
(169, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '3.jpg', '1'),
(170, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(171, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '4.jpg', '2'),
(172, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(173, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '6.jpg', '2'),
(174, 'Teacher Name', 'Arts', 'Details of the teacher to be displayed here only', '5.jpg', '2'),
(175, 'Teacher Name', 'Hindi', 'Details of the teacher to be displayed here only', '3.jpg', '2'),
(176, 'Teacher Name', 'English', 'Details of the teacher to be displayed here only', '3.jpg', '3'),
(177, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '4.jpg', '3'),
(178, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(179, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '6.jpg', '3'),
(180, 'Teacher Name', 'Commerce', 'Details of the teacher to be displayed here only', '5.jpg', '3'),
(181, 'Teacher Name', 'Maths', 'Details of the teacher to be displayed here only', '3.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `package_name`
--

CREATE TABLE `package_name` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_name`
--

INSERT INTO `package_name` (`id`, `name`, `description`) VALUES
(1, 'First Package', 'A short line on first package'),
(2, 'Second Package', 'A short line on second package'),
(3, 'Third Package', 'A short line on third package');

-- --------------------------------------------------------

--
-- Table structure for table `subject_name`
--

CREATE TABLE `subject_name` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_name`
--

INSERT INTO `subject_name` (`id`, `subject`) VALUES
(1, 'Science - PCM'),
(2, 'Commerce'),
(3, 'Arts'),
(4, 'Maths'),
(5, 'Hindi'),
(6, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` int(11) NOT NULL,
  `designation` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `designation`, `name`, `description`, `image`) VALUES
(1, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(2, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(3, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(4, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(5, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(6, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(7, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg'),
(8, 'Team Member', 'Teacher Name', 'Integer vehicula mauris libero, at molestie eros imperdiet sit amet.', '20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `school` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`, `image`, `school`) VALUES
(1, 'Amit Kumar', 'Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.\r\n\r\nAt vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.', '7.jpg', 'Army Public School'),
(3, 'Amit Kumar 2', 'Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.\r\n\r\nAt vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.', '7.jpg', 'Army Public School'),
(4, 'Amit Kumar 3', 'Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.\r\n\r\nAt vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.', '7.jpg', 'Army Public School'),
(5, 'Amit Kumar 4', 'Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.\r\n\r\nAt vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.', '7.jpg', 'Army Public School');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `class` text NOT NULL,
  `batch` text NOT NULL,
  `validate` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`id`, `name`, `phone`, `email`, `class`, `batch`, `validate`) VALUES
(1, 'Amit Kumar', '8218512255', 'amitkumar.developer1@gmail.com', '12', 'kchni', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendordetail`
--

CREATE TABLE `vendordetail` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `experience` text NOT NULL,
  `regno` text NOT NULL,
  `description` text NOT NULL,
  `class` text NOT NULL,
  `subjects` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `area` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `validate` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendordetail`
--

INSERT INTO `vendordetail` (`id`, `name`, `email`, `phone`, `experience`, `regno`, `description`, `class`, `subjects`, `state`, `city`, `area`, `address`, `password`, `image`, `validate`) VALUES
(5, 'Amit Kumar', 'amit@gmail.com', '8218512255', '2', '547812369', 'sdfsdfdsfsdfsdfsdfds', '12', 'English', 'Uttar Pardesh', 'Noida', 'Sector 62', 'Street 2, Sector 62, Noida, Uttar Pardesh', '5f4dcc3b5aa765d61d8327deb882cf99', '51918t4.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussinessquery`
--
ALTER TABLE `bussinessquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslettersent`
--
ALTER TABLE `newslettersent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_name`
--
ALTER TABLE `package_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_name`
--
ALTER TABLE `subject_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendordetail`
--
ALTER TABLE `vendordetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bussinessquery`
--
ALTER TABLE `bussinessquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newslettersent`
--
ALTER TABLE `newslettersent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `package_name`
--
ALTER TABLE `package_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_name`
--
ALTER TABLE `subject_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendordetail`
--
ALTER TABLE `vendordetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
