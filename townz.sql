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
-- Database: `townz`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_lead`
--

CREATE TABLE `accepted_lead` (
  `sid` int(255) NOT NULL,
  `lead_id` int(255) NOT NULL,
  `vendor_id` int(255) NOT NULL,
  `vendor_name` text NOT NULL,
  `time_accepted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `email`, `password`, `time_created`) VALUES
(1, '', '', '2020-06-24 14:21:09'),
(2, 'admin@gmail.com', 'a3175a452c7a8fea80c62a198a40f6c9', '2020-06-24 14:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(255) NOT NULL,
  `user_id` text NOT NULL,
  `gst` text NOT NULL,
  `pan` text NOT NULL,
  `account_no` text NOT NULL,
  `name` text NOT NULL,
  `ifsc` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `user_id`, `gst`, `pan`, `account_no`, `name`, `ifsc`, `time_created`) VALUES
(1, '1', '', '', '', '', '', '2020-06-24 14:21:29'),
(2, '2', '', '', '875165846594', 'NITIN RATHI', 'BHDJ7383769', '2020-06-24 14:21:29'),
(3, '3', '', '', '', '', '', '2020-06-24 14:21:29'),
(4, '4', '', '', '', '', '', '2020-06-24 14:21:29'),
(5, '5', '', 'BAHPA8KFKF', '568686865686', 'AKASH', 'FIGIFURIF85', '2020-06-24 14:21:29'),
(6, '6', '', 'VHAOO6787G', '54896325167', 'AKSHAY DOGRA', 'SBHU0002678', '2020-06-24 14:21:29'),
(7, '7', '', 'AJJAJAJAJA', '454646499767', 'AKASH', 'HIAIAIAJ688', '2020-06-24 14:21:29'),
(8, '8', '', '', '568885838386', 'VKVII I', 'IGICICCGG8G', '2020-06-24 14:21:29'),
(9, '9', '', '', '', '', '', '2020-06-24 14:21:29'),
(10, '10', '', 'AJAIIIAKKJ', '646464949494', 'AKASH', 'JAJAJAJJ688', '2020-06-24 14:21:29'),
(11, '11', '', '', '', '', '', '2020-06-24 14:21:29'),
(12, '12', '', '', '', '', '', '2020-06-24 14:21:29'),
(13, '13', '', 'FULPK6764H', '20186018722', 'AMIT KUMAR', 'SBIN0003241', '2020-06-24 14:21:29'),
(14, '14', '', '', '', '', '', '2020-06-24 14:21:29'),
(15, '15', '', '', '', '', '', '2020-06-24 14:21:29'),
(23, '23', '', '', '', '', '', '2020-06-24 14:21:29'),
(24, '24', '', '', '', '', '', '2020-06-24 14:21:29'),
(25, '25', '', '', '', '', '', '2020-06-24 14:21:29'),
(26, '26', '', '', '', '', '', '2020-06-24 14:21:29'),
(27, '27', 'HIA111111111111', '', '111111111111111111', 'AMIT KUMAR', 'SBI11111111', '2020-06-24 14:21:29'),
(28, '28', '', '', '458888888888888888', 'CHANDAN', 'VISGSINA798', '2020-06-24 14:21:29'),
(29, '29', '', '', '999999999999999', 'CHANDAN ', 'FUGHJJJKKKK', '2020-06-24 14:21:29'),
(30, '31', '', 'CHHAJ4566J', '545646981558', 'AKSHAY DOGRA', 'SHHK0001527', '2020-06-24 14:21:29'),
(31, '32', 'UEHSBSJSBDBJEBD', 'HSBSHSBHZB', '845484887678757587', 'NOV SHSBSHXBXJXN', 'BDHD DU3728', '2020-06-24 14:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `time_created`) VALUES
(1, '76684patrick-tomasso-fMntI8HAAB8-unsplash.jpg', '2020-06-24 14:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `basic_data`
--

CREATE TABLE `basic_data` (
  `id` int(255) NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_data`
--

INSERT INTO `basic_data` (`id`, `heading`, `content`, `time_created`) VALUES
(1, 'Training Center', 'Contact Us:<br>\r\n<strong>support@townz.co.in</strong><br><br>\r\n<strong>+91 8178416563</strong><br><br>\r\n\r\nPlease use the link below and learn how to use TOWNZ effectively:\r\n<br><br>\r\n\r\nhttps://youtu.be/Ruv4TIEyWGU', '2020-06-24 14:22:06'),
(2, 'Privacy Policy', '<p>This privacy policy agreement is effective as of June, 2020. Artihc maintenance Services LLP values your privacy. We describe the information that we collect about you when you install and use our application, <strong>TOWNz</strong> and use the services available in the application and how we use and discover that information.</p>\r\n<p>If you have any questions or comments about the privacy policy then you can contact us on <strong>support@townz.co.in</strong>. This policy is incorporated into is subject to the <strong>TOWNz</strong> terms of use, which can be accessed on this application. The use of application and services and any personal information you provide on the application remains subject to the terms of policy and Townzâ€™s terms of use. In terms of Information Technology (Intermediaries Guidelines) Rules, 2011 and the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data and Information) Rules, 2011, any grievance or complaint may be intimated to Grievance Officer. The complaint shall be redressed within a period of one month.</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> Collection of your Personal Information</strong></li>\r\n</ol>\r\n<p><strong>Â </strong></p>\r\n<ol>\r\n<li><strong> COLLECTION OF PERSONAL INFORMATION</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>\"Personal Information\" is defined to include information that whether on its own or in combination with other information may be used to readily identify or contact you such as: Name, Email Address, Phone Number etc.</p>\r\n<p>We collect Personal Information from service professionals offering their products and services. This information is partially or completely accessible to all the visitors using Townz Application, either directly or by submitting a request for a service. Service Professionals and Customers are required to create an account to be able to access certain portions of our application, such as to submit questions, participate in polls or surveys, to request a quote, to submit a bid in response to a quote and request information.</p>\r\n<p>Service Professionals, if and when they create and use an account with Townz, will be required to disclose and provide the information including personal contact details (such as PAN card, Aadhar card, phone book, call logs etc.) and participate in polls or surveys or feedback etc. Such information gathered shall be utilized to ensure greater customer satisfaction. The type of personal information that we collect from you varies based on your particular interaction with our application.</p>\r\n<p>Consumers: During the Account registration process and during your usage of Towns application we collect information such as Name, Postal Code, Telephone, Email Address and other personal information. You also may provide us with your, mailing address and demographic information (e.g. Gender, Age, Political preference, Education, Race, Ethnic origin and other information relevant to user surveys and/or offers). We may also collect Personal information that you post in your Offer, Profile, Wants, Feedback, and any comments and discussions you post anywhere in Mobile Application or any comments you provide during dispute resolution with other users of the application.</p>\r\n<p>Service Professionals: If you are a Service Professional and would like to post any information about yourself, we will require you to register for an account. During the Account Registration Process, we shall collect your business name, Telephone number, Zip code, Address, a description of your services, a headline for your profile, your first and last name and E-Mail address. Other information may also be required to be provided to Townz while you avail and use Townz application. We also may collect payment information, such as credit card, Bank Details from you.</p>\r\n<p>Background Verification: The Service Professional acknowledges that as part of the on-boarding process. the company or an entity/ agency appointed or nominated by the company (Verifier), may undertake background verification checks of the Service Professional in order to authenticate the genuineness and competency of the Service Professional. In light of the above, the Service Professional express my consents to and acknowledge s the following:</p>\r\n<ul>\r\n<li>( i ) The Service Professional does not and will not have any objection to Townz sharing the Service Professional\'s personal information and documents, including but not limited to name, gender, addresses, mobile number, zip code, Date of birth, Email, Education records, employment records Aadhar number, other Govt. issued IDs such as Voter card, PAN card, Driving License etc.( Collectively \"Proprietary Information\" ) with the verifier for the purpose of background checks and verification.</li>\r\n<li>( ii ) The Service Professional authorizes the Verifier to securely store the Service Professional\'s Proprietary Information on their platform and understands that the Verifier shall endeavor to ensure confidentiality of the same.</li>\r\n<li>( iii ) The Service Professional acknowledges that the digital record of the Proprietary Information on the Verifier\'s platform will be accessible to Townz and Townz and their authorized users/partners/affiliates/contractors will be entitled to access and update such digital record on the Verifier\'s platform, including data, documents, certificates, verification reports and references, testimonials etc. and shall be entitled to use the related services provided via the Verifier\'s platform.</li>\r\n<li>( iv ) The Service Professional acknowledges that if the Service Professional is desirous of editing and/or deleting the digital record from the Verifier\'s platform, it shall be entitled to do so by sending an email to such email address of the Verifier which shall be immediately provided by the Company to the Service Professional and in such a manner as the Verifier requires the same.</li>\r\n<li>( v ) Townz reserves its rights to take appropriate actions( in its sole discretion ) pursuant to the outcome of the background check and Verification.</li>\r\n</ul>\r\n<p>Townz reserves the right to record the conversation between the Service Professional s and Consumers facilitated by the Townz through the messaging/chat mechanism on the platform or the calls made through the virtual numbers provided to safeguard the privacy of the consumers and the Service Professionals. All the chats/messaging logs or call recording can be used to but not limited to monitor and prohibit abuse, safeguard the rights of consumers and Service Professional, resolve disputes.</p>\r\n<p>If we deem it necessary, in our sole and absolutely discretion, we may also ask for and collect supplemental information from third parties, such as information about your credit from a credit bureau( to the extent permitted by low ), or information to verify any identification details you provide during registration.</p>\r\n<p>Â </p>\r\n<ol start=\"3\">\r\n<li><strong> COLLECTION OF AUTOMATIC INFORMATION, USE OF COOKIES AND OTHER TRACKING DEVICES</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may obtain your device ID, which is sent to Townz servers and used in fraud prevention efforts.</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> HOW PERSONAL INFORMATION IS USED</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We collect your personal information and aggregate information about the use of our application and Services to better understand your needs and to provide you with a better application experience. Specifically, we may use your personal information for any of the following reasons:</p>\r\n<p>Â </p>\r\n<p>To provide our Services to you, including registering you for our Services, verifying your identity and authority to use our Services, and to otherwise enable you to use our application and our Services; For customer support and to respond to your inquiries:</p>\r\n<p>Â </p>\r\n<p>For internal record-keeping purposes:</p>\r\n<p>Â </p>\r\n<p>To process billing and payment, including sharing with third party payment gateways in connection with Townz products and Services;</p>\r\n<p>Â </p>\r\n<p>To improve and maintain our application and our Services;</p>\r\n<p>Â </p>\r\n<p>Function: this helps us determine which areas of our application users like best and areas that we may want to enhance; we also will use for troubleshooting purposes, where applicable)</p>\r\n<p>Â </p>\r\n<ul>\r\n<li>To periodically send promotional emails to the email address you provide regarding new products, special offers from Townz or other information about Townz that we think you may find interesting</li>\r\n</ul>\r\n<p>Â </p>\r\n<ul>\r\n<li>To contact you via email, telephone, facsimile or mail, or, where requested by text message, to deliver certain services or information you have requested</li>\r\n</ul>\r\n<p>Â </p>\r\n<ul>\r\n<li>For Townz market research purposes, including, but not limited to the customization of the application according to your interests</li>\r\n</ul>\r\n<p>Â </p>\r\n<ul>\r\n<li>We may use your demographic information (i.e., age, postal code, residential and commercial addresses, and other various data) to more effectively facilitate the promotion of goods and services to appropriate target audiences and for other research and analytical purposes</li>\r\n</ul>\r\n<p>Â </p>\r\n<ul>\r\n<li>To resolve disputes, to protect ourselves and other users of our application and Services, and to enforce our Terms of Use</li>\r\n</ul>\r\n<p>Â </p>\r\n<p>We also may compare personal information collected through the application and Services to Townz verify its accuracy with personal information collected from third parties. We may combine aggregate data with the personal information we collect about you.</p>\r\n<p>Â </p>\r\n<p>From time to time, Townz may use personal information for new and unanticipated uses not previously disclosed in our Privacy Policy. If our information practices change regarding information previously collected, Townz shall make reasonable efforts to provide notice and obtain consent of any such uses as may be required by law.</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> Electronic Newsletters, Invitations, Polls and Surveys</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>At our sole discretion, Townz may offer any of the following free services on the application, which you may select to use or receive at your option. Certain of the following services may require you to provide additional personal information as detailed below:</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> ELECTRONIC NEWSLETTERS</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may offer a free electronic newsletter to users. We will gather the email addresses of users who sign up for Townz for the newsletter mailing list. Users may remove themselves from this mailing list by opting out of receiving newsletters during the registration process, by following the link provided in each newsletter that points users to a subscription management page where the user can Unsubscribe from receiving newsletters or by changing their preferences in their Profile Settings page.</p>\r\n<p>Â </p>\r\n<ol start=\"2\">\r\n<li><strong> \"SEND TO A FRIEND\"</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>Our application users can voluntarily choose to electronically forward a link, page, or document to someone else by clicking \"refer and earn.\" To do so, the user must provide his or her email address, as well as the email address of the recipient. The user\'s email address is used only in the case of transmission errors and, of course, to let the recipient know who sent the email. The information is not used for any other purpose.</p>\r\n<p>Â </p>\r\n<ol start=\"3\">\r\n<li>POLLING</li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may offer interactive polls to users so they can easily share their opinions with other users and see what our audience thinks about important issues, Services</p>\r\n<p>Â </p>\r\n<p>Opinions or other responses to polls are aggregated and are not identifiable to any particular user. We may use a system to \"tag\"</p>\r\n<p>Â </p>\r\n<p>users after they have voted, so they can vote only once on a particular question. This tag is not correlated with information about individual users.</p>\r\n<p>Â </p>\r\n<ol start=\"4\">\r\n<li><strong> SURVEYS</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may conduct user surveys from time to time to better target our content to our application users. We will not share individual responses from these surveys with any third party. We will share aggregate data with third party service providers, partners, and other third parties.</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> Security</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We employ procedural and technological security measures, which are reasonably designed to help protect your personal information from unauthorized access or disclosure. Townz may use encryption passwords, and physical security measures to help protect your personal Information against unauthorized access and disclosure. No security measures, however, are 100% complete. Therefore, we do not promise and cannot guarantee, and thus you should not expect that your personal information or private communications will not be collected and used by others. You should take steps to protect against unauthorized access to your password, phone, and computer by, among other things, signing off after using a shared mobile, choosing a robust password that nobody else knows or can easily guess, and keeping your log-in and password private.</p>\r\n<p>Â </p>\r\n<p>Townz is not responsible for the unauthorized use of your information or for any lost, stolen, compromised passwords, or for any activity on your Account via unauthorized password activity</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> Disclosure</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may share the information that we collect about you, including your personal Information, as follows:</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> INFORMATION DISCLOSED TO PROTECT US AND OTHERS</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may disclose your information including Personal Information if: Townz reasonably believes that disclosure is necessary in order to comply with a legal process (such as a court order, search warrant, etc.) or other legal requirement of any governmental authority. () disclosure would potentially mitigate our liability In an actual or potential lawsuit, (ii) reasonably necessary to enforce this Privacy Policy, or Terms of Use etc.</p>\r\n<p>Â </p>\r\n<p>(iv) disclosure is intended to help investigate or prevent unauthorized transactions or other illegal activities, or (v) necessary or appropriate to protect our rights or property.</p>\r\n<p>Â </p>\r\n<p>or the rights or property of any person or entity.</p>\r\n<p>Â </p>\r\n<ol start=\"2\">\r\n<li><strong> INFORMATION DISCLOSED TO THIRD PARTY SERVICE PROVIDERS AND BUSINESS PARTNERS</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may contract with various third parties for the provision and maintenance of the application, Services and our business operations.</p>\r\n<p>Â </p>\r\n<p>and Townz may need to share your personal information and data generated by cookies and aggregate information (collectively, \"information\") with these vendors and service agencies. For example, we may provide your information to a credit card processing company to process your payment.</p>\r\n<p>Â </p>\r\n<p>The vendors and service agencies will not receive any right to use your personal information beyond what is necessary to perform its obligations to provide the Services to you. If you complete a survey, we also may share your information with the survey provider; if we offer a survey in conjunction with another entity, we also will disclose the results to that entity.</p>\r\n<p>Â </p>\r\n<ol start=\"4\">\r\n<li><strong> DISCLOSURE TO OTHER USERS OF OUR WEBSITE</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>If you are a Service Professional, the information that you post (other than your payment information) is available to other users of our application and our Services.</p>\r\n<p>Â </p>\r\n<p>Â </p>\r\n<ol start=\"5\">\r\n<li><strong> INFORMATION DISCLOSED TO LAW ENFORCEMENT OR GOVERNMENT OFFICIALS</strong></li>\r\n</ol>\r\n<p>Â We will disclose your information, including, without limitation your name, city, state, telephone number, email address, user ID history, quoting and listing history, and fraud complaints, to law enforcement or other government officials if we are required to do so by law, regulation or other government authority or otherwise in cooperation with an investigation of a governmental authority</p>\r\n<p>Â </p>\r\n<ol start=\"6\">\r\n<li><strong> IN THE EVENT OF A CHANGE OF CONTROL OR BANKRUPTCY</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>In the event that Townz undergoes a change in control, including, without limitation, a merger or sale of all or substantially all of Townz assets to which this application relates or other corporate reorganization in which Townz participates, and is thus merged with or acquired by a third party entity (a \"Successor\"). Townz hereby reserves the right to transfer the information we have collected from the users of the application and/or Services to such Successor.</p>\r\n<p>Â </p>\r\n<p>In addition, in the event of Townz bankruptcy, reorganization, receivership, or assignment for the benefit of creditors, or the application of laws or equitable principles affecting creditors\' rights generally, Townz may not be able to control how your information is transferred, used, or treated and reserves the right to transfer the information we have collected from the users of the application and/or Services to non-affiliated third parties in such event.</p>\r\n<p>Â </p>\r\n<ol start=\"7\">\r\n<li><strong> INFORMATION DISCLOSED AT YOUR REQUEST</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may share your personal information with other Registered Users to whom you explicitly ask us to send your information or if you explicitly consent to such disclosure upon receipt of a specific Service. For instance, when you contract for a specific Service with another Registered User, Townz will send that Registered User a notice that includes the personal information that you have chosen to allow Townz to reveal to users with whom you contract</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> Updating, Deleting and Correcting Your Personal Information</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>You may choose to restrict the collection or use of your personal information in the following ways:</p>\r\n<p>Â </p>\r\n<p>You can review, correct and delete your personal information by logging into the application and navigating to your preferences page in \"Edit Profile.\" You must promptly update your personal information if it changes or is inaccurate. Typically, we will not manually alter your personal information because it is very difficult to verify your identity remotely.</p>\r\n<p>Â </p>\r\n<p>Nonetheless, upon your request we will close your Account and remove your personal information from view as soon as reasonably possible based on your Account activity and in accordance with applicable law. We do retain information from closed Accounts in order to comply with the law, prevent fraud, collect any fees owed, resolve disputes, troubleshoot problems, assist with any investigations of any Registered User, enforce our Terms of Use, and take any other actions otherwise permitted by law that we deem necessary in our sole and absolute discretion. You should understand, however, that once you publicly post a Request, Offer. Want. Feedback, or any other information onto the application, you may not be able to change or remove it Once we have deleted or removed your Account, you agree that Townz shall not be responsible for any personal information that was not included within your deleted and/or removed Account that remains on the application,</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> What Choices Do I Have Regarding Use of My Personal Information?</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>We may send periodic promotional or informational emails to you. You may opt-out of such communications by following the opt out instructions contained in the email. Please note that it may take up to 10 business days for us to process opt-out requests. If you opt-out of receiving emails about recommendations or other information we think may interest you.</p>\r\n<p>Â </p>\r\n<p>we may still send you emails about your Account or any Services you have requested or received from us.</p>\r\n<p>Â </p>\r\n<p>Â </p>\r\n<ol start=\"3\">\r\n<li><strong> ACCOUNT PROTECTION</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>Your password is the key to your Account. When creating your password, you should use unique numbers, letters, special characters, and combinations thereof. In addition, DO NOT disclose your password to anyone. If you do share your password or your personal information with others, you are solely responsible for all actions taken via your Account. If you lose control of your password, you may lose substantial control over your personal information and be subject to legally binding actions taken on your behalf. Thus,</p>\r\n<p>Â </p>\r\n<p>IF YOUR PASSWORD HAS BEEN COMPROMISED FOR ANY REASON, YOU MUST IMMEDIATELY NOTIFY TOWNZ TO CHANGE YOUR PASSWORD</p>\r\n<p>Â </p>\r\n<ol>\r\n<li><strong> PRIVACY POLICY UPDATES</strong></li>\r\n</ol>\r\n<p>Â </p>\r\n<p>THIS POLICY IS CURRENT AS OF THE EFFECTIVE DATE SET FORTH ABOVE. TOWNZ MAY, IN ITS SOLE AND ABSOLUTE DISCRETION CHANGE THIS POLICY FROM TIME TO TIME BY UPDATING THIS DOCUMENT. TOWNZ WILL POST ITS UPDATED POLICY ON THE APPLICATION ON THIS PAGE. TOWNZ ENCOURAGES YOU TO REVIEW THIS POLICY REGULARLY FOR ANY CHANGES. YOUR CONTINUED USE OF THIS APPLICATION AND/OR CONTINUED PROVISION OF PERSONAL INFORMATION TO US WILL BE SUBJECT TO THE TERMS OF THE THEN CURRENT POLICY</p>\r\n<p>Â </p>\r\n<p>2020 Artihc Maintenance Services LLP. All Rights Reserved.</p>\r\n<p>Â </p>', '2020-06-24 14:22:06'),
(3, 'How it Works', 'Create a good profile with all necessary details<br><br>\r\nGet Your profile approved by the Townz Team<br><br>\r\nOnce Approved, activate your app wallet by recharging with a minimum allowed amount and that amount will also be added to your wallet<br><br>\r\nOnce profile is activated, start getting quality service requests and leads<br><br>\r\nOn Fixed Services which can be completed in a definite time with a definite money company will only take 10% of the Service Charge and from any extra income on the parts installed or anything TOWNz will not take anything<br><br>\r\nFor Lead Generation, TOWNz will provide you the leads and will take the charges on every lead provided, which either will be 1% of the lead cost or maximum 100 INR<br><br>\r\nIn case of any conflict vendor will contact the grievances team of TOWNz and the TOWNz will take care of it legally and TOWNz will take care of the pending payments<br><br>\r\n', '2020-06-24 14:22:06');
INSERT INTO `basic_data` (`id`, `heading`, `content`, `time_created`) VALUES
(4, 'Terms of user', 'Artihc Maintenance Services LLP. primarily operates, controls and manages the Services (as defined below) provided by it from its corporate office at Vill. Kalu Di Hatti (By Pass),Tehsil Palampur, Kalu Di Hatti, Kangra, Himachal Pradesh,176052, India (Himachal Office)<br><br>\r\n\r\n<strong>PLEASE READ THE TERMS OF USE THOROUGHLY AND CAREFULLY.</strong> <br><br>\r\n\r\nThe terms and conditions set forth below (\"Terms of Use\") and the Privacy Policy (as defined below) constitute a legally binding agreement between ARTIHC SERVICES LLP operating from its Himachal Corporate Office and you. These Terms of Use contain provisions that define your limits, legal rights and obligations with respect to your use of and participation in the Artihc mobile application (i.e. TOWNz), including the classified advertisements, forums, various email functions and Internet links, and all content and TOWNZ services are available through mobile application, and (IS) the online transactions between those users of the application who are offering services and those users of the Mobile Application who are obtaining services. The Terms of Use described below incorporate the Privacy Policy and apply to all users of the Mobile. <br><br>\r\n\r\nThe Mobile Application â€˜TOWNzâ€™ is owned and operated by Artihc Maintenance Services LLP. You acknowledge that the Mobile application serves as a venue for the online distribution and publication of user submitted information between Service Professionals and Service Users, and, by using, visiting, registering for, and/or otherwise participating in this application, including the Services presented, promoted, and displayed on the application, and by clicking on \"I have read and agree to the terms of use,\" you hereby certify that: \r\n(1) you are either a Service Professional or a prospective Service User.\r\n(2) you have the authority to enter into these Terms of User\r\n(3) you authorize the transfer of payment for Services requested through the use of the Application, and \r\n(4) you agree to be bound by all terms and conditions of these Terms of Use and any other documents incorporated by reference herein. If you do not so agree to the foregoing, you should not click to affirm your acceptance thereof, in which case you are prohibited from accessing or using the Application. If you do not agree to any of the provisions set forth in the Terms of Use, kindly discontinue viewing or participating in this Application immediately. <strong>YOU SPECIFICALLY AGREE THAT BY USING THE APPLICATION, YOU ARE AT LEAST 18 YEARS OF AGE AND YOU ARE COMPETENT UNDER LAW TO ENTER INTO A LEGALLY BINDING AND ENFORCEABLE CONTRACT. </strong> <br><br>\r\n\r\nAll references to \"you\" or \"your\" as applicable, mean the person that accesses, uses, and/or participates in the Application in any manner. If you use the Application or open an Account (as defined below) on behalf of a business, you represent and warrant that you have the authority to bind that business and your acceptance of the Terms of Use will be deemed an acceptance by that business and \"you\" and \"your\" herein shall refer to that business. <br><br>\r\n\r\n1. ARTIHC SERVICES LLP reserves the right, in its sole discretion, to change, modify, or otherwise amend the Terms of Use, and any other documents incorporated by reference herein for complying with legal and regulatory framework and for other legitimate business purposes, at any time, and ARTIHC SERVICES LLP will post the amended Terms of Use within the Mobile Application (TOWNz). It is your responsibility to review the Terms of Use for any changes and you are encouraged to check the Terms of Use frequently. Your use of the Application following any amendment of the Terms of Use will signify your assent to and acceptance of any revised Terms of Use. If you do not agree to abide by these or any future Terms of Use, please do not use or access the Application<br><br>\r\n \r\n2. ARTIHC SERVICES LLP has established a Privacy Policy that explains to users how their information is collected and used. The Privacy Policy is referenced above and hereby incorporated into the Terms of Use set forth herein. Your use of this Application is governed by the Privacy Policy. ARTIHC SERVICES LLP hereby grants you a non-exclusive, revocable license to use the Application as set forth in the Terms of Use; provided, however, that you will not copy, distribute, or make derivative works of the Application in any medium without ARTIHC SERVICES LLP prior written consent: (i) you will not alter or modify any part of the Application other than as may be reasonably necessary to use the Application for its intended purposes; and (ii) you will otherwise act in accordance with the terms and conditions of the Terms of Use and in accordance with all applicable laws. Use of the Application is available only to individuals who are at least 18 years old and can form legally binding contracts under applicable law. You represent, acknowledge and agree that you are at least 18 years of age, and that: \r\n(a) all registration information that you submit is truthful and accurate,\r\n(b) you will maintain the accuracy of such information, and \r\n(c) your use of the Application and Services offered through this Application do not violate any applicable law or regulation. <br><br>\r\n\r\nYour Account (defined below) may be terminated without warning if we at our discretion, believe that you are under the age of 18 or that you are not complying with any applicable laws, rules or regulations. <br><br>\r\n\r\nYou need not register with ARTIHC SERVICES LLP to simply acess and view the Application, but to access and participate in certain features of the Application. You will also have the ability to provide additional optional information, which is not required to register for an account but may be helpful to ARTIHC SERVICES LLP in providing you with a more customized experience when using the Application. You may also register for an Account using your existing Facebook account and log in credentials (your \"Third-Party Site Password\"). \r\nYou are solely responsible for safeguarding your ARTIHC SERVICES LLP accountâ€™s credentials and, if applicable, your Third-Party Site Password (collectively, \"Passwords\") at all times and shall keep your credentials secured at all times. You shall be solely responsible for all activity that occurs on your Account and you shall notify ARTIHC SERVICES LLP immediately of any breach of security or any unauthorized use of your account. Similarly, you shall never use another\'s Account without ARTIHC SERVICES LLP permission. You agree that you will not misrepresent yourself or represent yourself as another user of the Application and/or the Services offered through the Application. You hereby expressly acknowledge and agree that you yourself and not ARTIHC SERVICES LLP will be liable for your losses, damages etc. (whether direct or indirect) caused by an unauthorized use of your Account. Notwithstanding the foregoing, you may be liable for the losses of ARTIHC SERVICES LLP or others due to such unauthorized use. An Account holder is sometimes referred to herein as a \"Registered User.\" You acknowledge and agree that you shall comply with the following policies (the \"Account Policies\'): You will not copy or distribute any part of the Application in any medium without ARTIHC SERVICES LLP prior written authorization. You will not alter or modify any part of the Application other than as may be reasonably necessary to use the Application for its intended purpose. You will provide true, accurate, current and complete information when creating your Account and you shall maintain and update such information during the term of this Agreement so that it will remain accurate, true, current and complete.<br><br>\r\n\r\nYou shall not use any automated system, including but not limited to, \"robots\" \"spiders.\" \"offline readers,\" \"scrapers\" etc., to access the Application for any purpose without ARTIHC SERVICES LLP prior written approval. You shall not in any manual or automated manner collect Service Professionals or Service Users information, including but not limited to, names, addresses, phone numbers, or email addresses, copying copyrighted text, or otherwise misuse or misappropriate Application information or content, including but not limited to, use on a \"mirrored\" competitive, or third party site. \r\nARTIHC SERVICES LLP reserves the right to revoke these exceptions either generally or in specific cases.\r\nYou shall not recruit, solicit, or contact in any form Service Professionals or Service Users for employment or contracting for a business not affiliated with ARTIHC SERVICES LLP without express written permission from ARTIHC SERVICES LLP. You shall not take any action that ( unreasonably encumbers or, in ARTIHC SERVICES LLP sole discretion, may unreasonably encumber the Application\'s infrastructure: (1) interferes or attempts to interfere with the proper working of the: or (ii) bypasses Artihc Serviceâ€™s measures that are used to prevent or restrict access to the Application, you agree not to collect or harvest any personally identifiable data.\r\nYour access to, use of, and participation in the Application is subject to the Terms of Use and all applicable ARTIHC SERVICES LLP regulations, guidelines and additional policies that ARTIHC SERVICES LLP may set forth from time to time, including without limitation, a copyright policy and any other restrictions or limitations that ARTIHC SERVICES LLP publishes on the Application (the \"Additional Policies\"). You hereby agree to comply with the Additional Policies and your obligations thereunder at all times. You hereby acknowledge and agree that if you fail to adhere to any of the terms and conditions of this Agreement or documents referenced herein, including the Account Policies, membership eligibility criteria or Additional Policies, ARTIHC SERVICES LLP, in its sole discretion, may terminate your Account at any time without prior notice to you as well as initiate appropriate legal proceedings, if necessary. \r\nYou shall not upload, post, transmit, transfer, disseminate, distribute, or facilitate distribution of any content, including text, images, video, sound, data, information, or software, to any part of the Application, including your profile (\"Profile\"), the posting of your Service (\"Offer\"), the posting of your desired Service (\"Want\"), or the posting of any opinions or reviews in connection with the Application, the Service, the Service Professional, or the Service User (\"Feedback\") (all of the foregoing content is sometimes collectively referred to herein as \"Submitted Content\" and the posting of Submitted Content is sometimes referred to as a \"Posting\" or as \"Postings\') that: misrepresents the source of anything you post, including impersonation of another individual or entity or any false or inaccurate biographical Information for any Service Professionals; provides or create links to external sites that violate the Terms of Use; is intended to harm or exploit any individual under the age of 18 (\"Minor) in any way: is designed to solicit, or collect personally identifiable information of any Minor, including, but not limited to, name, email address, home address, phone number, or the name of his or her school; invades anyone\'s privacy by attempting to harvest, collect, store, or publish private or personally identifiable information, such as names, email addresses, phone numbers, passwords, account information, credit card numbers, home addresses, or other contact information without their knowledge and willing consent; contains falsehoods or misrepresentations that could damage Artihc  Services.<br><br>\r\n\r\nARTIHC SERVICES LLP will not knowingly accept any Posting which is in violation of the law.<br><br>\r\n\r\nARTIHC SERVICES LLP has the right, in its sole discretion and without prior notice to you; to immediately remove anything that discriminates or is any way in violation of any law.\r\nPROHIBITIONS WITH RESPECT TO SERVICES While using the Application, you shall not: violate Account Policies, or any provision of the Terms of Use, such as; fail to deliver payment for Services purchased by you, unless the Service Professional has materially changed the description of the Service description after you negotiate an agreement for such Service, a clear typographical error is made, or you cannot authenticate the Service Professionals identity: fail to perform Services purchased from you, unless the, refuses to pay, manipulate the price of any Service or interfere with other users\' Postings:<br><br>\r\n\r\nUser from leaving Feedback. 1. Sanctions for Inappropriate Use of Feedback. If you violate any of the above-referenced rules in connection with leaving Feedback ARTIHC SERVICES LLP LLP, in its sole discretion, may take any of the following actions: (i) cancel your Feedback or any of your Postings: (i) limit your Account privileges; (iii) suspend your Account:\r\nYou may contact ARTIHC SERVICES LLP regarding any violation via-email at support@towz.co.in. <br><br>\r\n\r\nWhen legally required or at ARTIHC SERVICES LLP discretion, ARTIHC SERVICES LLP will cooperate with law enforcement agencies in any investigation of alleged illegal activity on this Application or on the Internet ARTIHC SERVICES LLP does not and cannot review every Posting posted to the Application.\r\nThese prohibitions do not require ARTIHC SERVICES LLP to monitor, police or remove any Postings or other information submitted by you or any other user.\r\nD. Rules for Service Professionals \r\n\r\n<strong>1. PROFILES AND OFFERS MUST NOT BE FRAUDULENT</strong>\r\n\r\nSubject to any exceptions set forth in these Terms of Use or Additional Policies, if any, Service Professionals shall not: (a) list Services or offers relating to any Service in a category that is inappropriate to the Service they are offering: (b) misrepresent the location at which they will provide a Service: (c) include brand names or other inappropriate keywords in their Profile, Offer, Want, Feedback, or any other title or description relating to a Service; (d) use misleading titles that do not accurately describe the Service; or (e) include any information in their Profile that is fraudulent <br><br>\r\n\r\n<strong>2. PROFILES AND OFFERS CANNOT USE TECHNIQUES TO AVOID OR CIRCUMVENT ARTIHC SERVICES LLP FEES</strong> Subject to any exceptions set forth in these Terms of Use or Additional Policies, if any, Service Professionals shall not:<br><br>\r\n\r\n(a)	offer a catalog or a link to a third-party Application from which Service Users or any Registered User or user of the Application may obtain the Service directly; (b) exceed multiple Posting limits; (c) post a single Service but offer additional identical services in the Service description: (d) charge fees for traveling further than desired to provide the Service: (e) offer the opportunity through ARTIHC SERVICES LLP to purchase the Service or any other service outside of ARTIHC SERVICES LLP: () use their Profile page or user name to promote services not offered on or through the Application and/or prohibited services. In case we realize that any professional is involved in any of the above activities, ARTIHC SERVICES LLP holds the sole discretion to blacklist the professional and withhold any outstanding credits or payments to the professional. \r\n(b)	FOR ALL APPLICATION USERS Subject to any exceptions set forth in these Terms of Use or Additional Policies, if any, Service Professionals shall not: (a) solicit Service Users to mail cash or use other payment methods not specifically permitted by ARTIHC SERVICES LLP as approved payment methods.<br><br>\r\n\r\nIt is further clarified that your registration on the Application shall be deemed to be your consent to be contacted for the purposes mentioned above, on the mobile number shared by you even if you are registered with the National Customer Preference Register (NCPR) and have opted out of receiving promotional calls and messages and (i) by way of SMS or email notifications or messages in any other electronic form <br><br>\r\n\r\n\r\n<strong>3. SANCTIONS FOR VIOLATING ANY OF THE RULES FOR SERVICE PROFESSIONALS </strong>If a Service Professional violates any of the above referenced rules in connection with his or her Posting. ARTIHC SERVICES LLP, in its sole discretion, may take any of the following actions: (a) cancel the Posting: (b) limit the Service Professionals Account privileges: (C) suspend the Service Professional\'s Account; (d) cause the Service Professional to forfeit any fees earned on a cancelled Posting: and/or (e) decrease the Service Professional\'s status earned via the Feedback. \r\nRules for Service Users \r\n<strong>1.	SERVICE USERS SHALL NOT TAKE ANY OF THE FOLLOWING ACTIONS: </strong>\r\n(a) commit to purchasing or using a Service without paying:\r\n(b) sign up for, negotiate a price for, use, or otherwise solicit a Service with no intention of following through with your use of or payment for the Service: \r\n(c) agree to purchase a Service when you do not meet the Service Professional\'s terms as outlined in the Posting, or agree to purchase a Service with the intention of disrupting a Posting; or \r\n(d) misuse any options made available now or in the future by ARTIHC SERVICES LLP in connection with the use or purchase of any Service. \r\n<strong>2. SANCTIONS FOR VIOLATING ANY OF THE RULES FOR SERVICE USERS</strong> If a Service User violates any of the above-referenced rules in connection with his or her Posting, ARTIHC SERVICES LLP, in its sole discretion, may take any of the following actions: \r\n(a) cancel the Posting:\r\n(b) limit the Service User\'s Account privileges; \r\n(c) suspend the Service User\'s Account; and/or \r\n(d) decrease the Service User\'s status earned via the Feedback. <br><br>\r\n\r\nARTIHC SERVICES LLP may also disclose user information including personal information if ARTIHC SERVICES LLP reasonably believes that disclosure is necessary in order to comply with a legal process (such as a court order, search warrant, etc.) or other legal requirement of any governmental authority. (it) would potentially mitigate ARTIHC SERVICES LLP liability in an actual or potential lawsuit, (in) is otherwise necessary or appropriate to protect our rights or property.<br><br>\r\n\r\n(iv) to enforce this Agreement (including, but not limited to ensuring payment of fees by users), or \r\n(v) as may be required or necessary to deter illegal behavior (including, but not limited to, fraud). \r\nSuggesting or recommending changes to the Application, including, without limitation, new features or functionality relating thereto, all such Suggestions are, and will be treated as non-confidential and non-proprietary. You hereby assign all right, title, and interest in, and ARTIHC SERVICES LLP is free to use, without any attribution or compensation to you, any ideas, know-how, concepts, techniques, or other intellectual property and proprietary rights contained in the Suggestions, whether or not patentable for any purpose whatsoever, including but not limited to, developing manufacturing, having manufactured, licensing, marketing, and selling, directly or indirectly, products and services using such Suggestions. You understand and agree that ARTIHC SERVICES LLP is not obligated to use, display, reproduce, or distribute any such ideas, know how, concepts, or techniques contained in the Suggestions, and you have no right to compel!<br><br>\r\n\r\nCopyright Infringement Take Down Procedure ARTIHC SERVICES LLP has high regard for intellectual property and expects the same level of standard to be employed by its users. ARTIHC SERVICES LLP may, in appropriate circumstances and at its discretion, terminate the Account or prohibit access to the Application of users who infringe upon the intellectual property rights of others. If you believe that your work has been copied and posted on the Application in a way that constitutes copyright infringement and/or trademark infringement, please send the following information to us at support@townz.co.in <br><br>\r\n\r\n<strong>MODIFICATION OR CESSATION OF APPLICATION ARTIHC SERVICES LLP</strong> reserves the right at any time and from time to time to modify or discontinue, temporarily or permanently, the Application (or any part thereof) with or without notice and in its sole discretion.\r\nYou agree that ARTIHC SERVICES LLP shall not be liable to you or to any third party for any modification, suspension or discontinuance of ARTIHC SERVICES LLP services. You hereby acknowledge and agree that ARTIHC SERVICES LLP, in its sole and absolute discretion, has the right (but not the obligation) to delete, terminate, or deactivate your Account, block your email or IP address, cancel the Application or otherwise terminate your access to or participation in the use of the Application (or any part thereof), or remove and discard any Submitted Content on the Application (\"Termination of Service\"). Immediately and without notice, for any reason, including without limitation, Account inactivity or if ARTIHC SERVICES LLP believes or has reason to believe that you have violated any provision of the Terms of Use. You may cancel your use of the Application and/or terminate the Terms of Use with or without cause at any time by following the link in your Account under \"Account Preferences\" to \"Deactivate Account.\" 4 Upon termination of your Account, your right to participate in the Application, including, but not limited to your right to offer or purchase Services and your right to receive any fees or compensation, including, without limitation and referral discounts, incentive bonuses, or other special offer rewards, shall automatically terminate. You acknowledge and agree that your right to receive any fees or compensation hereunder is conditional upon your proper use of the Application, your adherence to the Terms of Use, the continuous activation of your Account, and your permitted participation in the Application. In the event of Termination of Service, your Account will be disabled and you may not be granted access to your Account or any files or other data contained in your Account Notwithstanding the foregoing, residual data may remain in the ARTIHC SERVICES LLP system. Unless ARTIHC SERVICES LLP has previously cancelled or terminated your use of the Application (in which case subsequent notice by ARTIHC SERVICES LLP shall not be required). If you provided a valid email address during registration, ARTIHC SERVICES LLP will notify you via email of any such termination or cancellation, which shall be effective immediately upon ARTIHC SERVICES LLP delivery of such notice. Upon Termination of Service, the following shall occur: all licenses granted to you hereunder will immediately terminate; and you shall promptly destroy all copies of ARTIHC SERVICES LLP Data (as defined below), Marks (as defined below) and other content in your possession or control. You further acknowledge and agree that ARTIHC SERVICES LLP shall not be liable to you or any third party for any termination of your access to the Application. Upon Termination of Service, ARTIHC SERVICES LLP retains the right to use any data collected from your use of the Application for internal analysis and archival purposes, and all related licenses you have granted ARTIHC SERVICES LLP hereunder shall remain in effect for the foregoing purpose. In no event is ARTIHC SERVICES LLP obligated to return any Submitted Content to you. <br><br>\r\n\r\nYou agree to indemnify and hold ARTIHC SERVICES LLP, and its officers, managers, members, affiliates, successor, assigns, directors, agents, service professionals, suppliers, and employees harmless from any claim or demand, including reasonable attorneys\' fees and court costs, made by any third party due to or arising out of the Termination of Service. \r\nL. 1. The content on the Application (exclusive of all Submitted Content), including without limitation, the text, software, scripts, graphics, photos, sounds, music, videos, interactive features and the like (\"Data\") and the trademarks, service marks and logos contained therein (\"Marks\"), are owned by ARTIHC SERVICES LLP. Other trademarks, names and logos on this Application are the property of their respective owners. Data on the Application is provided to you AS IS for your information and personal use only and may not be used, copied, reproduced, distributed, transmitted, broadcast, displayed, sold, licensed, or otherwise exploited for any other purposes whatsoever without the prior written consent of the respective owners. ARTIHC SERVICES LLP reserves all rights not expressly granted in and to the Application and the Data. You agree not to use, copy, or distribute, any of the Data other than as expressly permitted herein, including any use, copying, or distribution of Submitted Content obtained through the Application for any commercial purposes. If you download or print a copy of the Data for personal use, you must retain all copyright and other proprietary notices contained thereon. You agree not to circumvent, disable or otherwise interfere with security features of the Application or features that prevent or restrict use or copying of any Data or enforce limitations on use of the Application or the Data therein. The Application contains ARTIHC SERVICES LLP Data and Marks, which are, or may become, protected by copyright, trademark, patent, trade secret and other laws, and ARTIHC SERVICES LLP owns and retains all rights in the ARTIHC SERVICES LLP Data and Marks.<br><br>\r\n\r\nSubject to these Terms of Use. ARTIHC SERVICES LLP hereby grants you a limited, revocable, non-transferable, non-sublicensable license to reproduce and display the ARTIHC SERVICES LLP Data (excluding any software source code) solely for your personal use in connection with accessing and participating in the Application. The Application may also contain Data of other users or licensors, which you shall not copy, modify, translate, publish, broadcast, transmit, distribute, perform, display, or sell. <br><br>\r\n\r\n<strong>FEES INCURRED BY SERVICE PROFESSIONALS</strong><br><br>\r\n\r\nJoining ARTIHC SERVICES LLP, opening an Account, posting Services and viewing posted Services is free. ARTIHC SERVICES LLP reserves the right at its sole discretion to charge fees to Service Professionals for other services that ARTIHC SERVICES LLP may provide in the future. The Service Professionals shall be required to maintain a deposit in their accounts depending on the usage of the platform by the Service Professional. The Deposit amount shall be required to be maintained by the Service Professional to continue having the ability to obtain requests from the Service Users. A part of the Deposits shall be reserved by ARTIHC SERVICES LLP on receipt of the service request. The Service Professional may also pay for the future procurement of products through such Deposits. The penal charges, payable by the Service Professional shall be recovered from the Deposits amount. Further, ARTIHC SERVICES LLP may also in certain categories require Service Professionals to make payments for following up on job leads i.e, requests posted by Service Users, and permitting the Service Professional to contact the Service User (\"Lead Fee\") irrespective of whether the job leads eventually result in a transaction or exchange of consideration for the service requested.\r\nARTIHC SERVICES LLP reserves the right to charge fees for these services at its sole discretion. For the invoice to be raised by Service Professional with respect to the services to be provided to the Service User, ARTIHC SERVICES LLP shall prepare such invoice. \r\n\r\n<strong>SPECIAL CASES</strong><br><br>\r\n\r\n1.	All Service partners has to follow a 10 Strike system. Any behavioral issue which includes improper communication with the service user, not showing up on the decided time, and non-completion of work; the service user if deemed necessary can raise a strike against Service Partner and after 10 strike ARTIHC SERVICES LLP has the right to decide that if the Service Partnerâ€™s account to be terminated or penalize the account or to let him or her go with the warning.\r\n\r\n2.	All the Service providers must send their profile for approval and once approved, in order to get the job requests they have to activate their wallet by the first recharge.\r\n\r\n3.	All the payouts if pending on ARTIHC SERVICES LLP will be processed on Thursday of every week with an exception of Bank Holiday or National Holiday, or any natural calamity. \r\n\r\n<strong>FEES INCURRED BY SERVICE USERS</strong><br><br>\r\n\r\nARTIHC SERVICES LLP, opening an Account, viewing posted Services, and bidding on posted Services is free. ARTIHC SERVICES LLP currently does not charge Service Users for transactions completed on the Application between Service Users and Services Professionals. However, Artihc reserves the right to charge a fee to Service Users in the future on a per-transaction basis or in any other manner, and reserves the right to do so in its sole discretion. Changes to this Fee Policy are effective after ARTIHC SERVICES LLP has provided you with thirty (30) days\' notice by posting the changes on the Application. If applicable, you agree to pay all fees or charges to your Account based on ARTIHC SERVICES LLP fees, charges, and billing terms then in effect. If you do not pay on time or if ARTIHC SERVICES LLP cannot charge your credit card, any payment gateway or other payment method for any reason, ARTIHC SERVICES LLP reserves the right to either suspend or terminate your access to the Application and Account and terminate these Terms of Use. You are expressly agreeing that ARTIHC SERVICES LLP is permitted to bill you for the applicable fees, any applicable tax and any other charges you may incur in connection with your use of this Application and the fees will be billed to your credit card, a payment gateway or other payment method designated at the time you make a purchase or register for a fee-based service. If you cancel your Account at any time, you will not receive any refund. If you have a balance due on any account, you agree that ARTIHC SERVICES LLP may charge such unpaid fees to your credit card or otherwise bill you for such unpaid fees.<br><br>\r\n\r\nARTIHC SERVICES LLP LLP reserves its right to initiate appropriate legal proceedings, if necessary, in its sole discretion, to recover such outstanding amounts. \r\nYou understand that we are acting solely as an intermediary for the collection of rents and fees between a Service User and a Service Professional who choose to enter into an Agreement for Service. Because state and local tax laws vary significantly by locality, you understand and agree that you are solely responsible for determining your own tax reporting requirements in consultation with tax advisors, and that we cannot and do not offer tax advice to either hosts or guests. Further, you understand that ARTIHC SERVICES LLP shall not be responsible or liable in any manner in relation to tax liability of a Service User or a Service Professional. In case of unregistered Housekeeping services (HK services\').\r\nARTIHC SERVICES LLP shall pay taxes under Section 9 of Central Goods and Services Tax Act, 2017. on behalf of the Service Professional. \r\nREFUND POLICY All commissions payable to ARTIHC SERVICES LLP by Service Professionals on consummated transactions, i.e. exchange of services for consideration, are final and non-refundable. All monies paid by Service Professionals in form of \"Credits or Deposits\" are non-interest bearing.\r\nUnutilised and unclaimed \"Credits or Deposits for a period of more than 364 days from the date of purchase of \"Credits\" shall expire and stand forfeited. No refunds of credits will be processed after the expiry date.<br><br>\r\n\r\nARTIHC SERVICES LLP may attempt to seek information about the background of a Service Professional, either via a telephonic or in person interview, review of past work/customer feedback and/or check presence online (If available) on Facebook, personalized Application, LinkedIn, Twitter etc., you understand that Service Professionals may register themselves. You also understand that any so called background check undertaken by ARTIHC SERVICES LLP is not exhaustive to the extent to determine previous criminal antecedents and hence, at the end of the day, the Service User should take an informed decision on his/her own accord and keep in mind the fact that ARTIHC SERVICES LLP only seeks to provide a platform wherein Service Users and Service Professionals have an opportunity to meet each other.<br><br>\r\n\r\n<strong>NOTWITHSTANDING THE FOREGOING, YOU AGREE THAT SINCE ARTIHC SERVICES LLP</strong> only seeks to provide a platform wherein the Service User and Service Professional can be brought together and ARTIHC SERVICES LLP LLP itself has no role in the execution or provision of Services ITSELF,<br><br>\r\n\r\n<strong>ARTIHC SERVICES LLP LLP SHALL NOT BE RESPONSIBLE OR LIABLE FOR ANY LOSS OR DAMAGE OF ANY SORT WHATSOEVER INCURRED AS THE RESULT OF ANY SUCH TRANSACTION OR DEALINGS. IF THERE IS A DISPUTE BETWEEN PARTICIPANTS ON THE APPLICATION, OR BETWEEN REGISTERED USERS OR ANY APPLICATION USER AND ANY THIRD PARTY, YOU ACKNOWLEDGE AND AGREE THAT ARTIHC SERVICES LLP IS UNDER NO OBLIGATION TO BECOME INVOLVED IN THE EVENT THAT A DISPUTE ARISES BETWEEN YOU AND ONE OR MORE APPLICATION USERS, REGISTERED USERS OR ANY THIRD PARTY, YOU HEREBY RELEASE ARTIHC SERVICES LLP. ITS OFFICERS, MANAGERS, MEMBERS, DIRECTORS, EMPLOYEES ATTORNEYS, AGENTS, AND SUCCESSORS IN RIGHTS FROM ANY CLAIMS, DEMANDS, AND DAMAGES (ACTUAL AND CONSEQUENTIAL) OF EVERY KIND OR NATURE, KNOWN OR UNKNOWN, SUSPECTED OR UNSUSPECTED.</strong><br><br>\r\n\r\n<strong>FORESEEABLE OR UNFORESEEABLE, DISCLOSED OR UNDISCLOSED, ARISING OUT OF OR IN ANY WAY RELATED TO SUCH DISPUTES AND/OR THE APPLICATION OR ANY SERVICE PROVIDED THEREUNDER. O. Dispute</strong><br><br>\r\n\r\nResolution If a dispute arises between you and ARTIHC SERVICES LLP our goal is to provide you with a neutral and cost-effective means of resolving the dispute quickly. Accordingly. you and ARTIHC SERVICES LLP hereby agree that we will resolve any claim or controversy at law and equity that arises out of the Terms of Use or the Application in accordance with this Section O or as we and you otherwise agree in writing<br><br>\r\n\r\nBefore resorting to the filing of a formal lawsuit, we strongly encourage you to first contact us directly to seek a resolution via e mail at support@townz.co.in. The dispute shall be resolved through alternative dispute resolution procedures, such as mediation or arbitration, as alternatives to litigation. <br><br>\r\n\r\nGOVERNING LAW The Terms of Use shall be governed in all respects by the laws of India and any legal proceeding arising out of this Agreement will occur exclusively in the courts located in New Delhi India. P Aspects of the Application and other ARTIHC SERVICES LLP LLP services may be supported by advertising revenue. As such, ARTIHC SERVICES LLP may display advertisements and promotions on the service. The manner, mode and extent of advertising by ARTIHC SERVICES LLP on the Application are subject to change and the appearance of advertisements on the Application does not necessarily imply endorsement by ARTIHC SERVICES LLP of any advertised products or services. You agree that ARTIHC SERVICES LLP shall not be responsible or liable for any loss or damage of any sort incurred by you as a result of any such dealings or as the result of the presence of such advertisers on the Application. Q The Application may provide, or third parties may provide, links, contact forms and/or phone numbers to other Applications or resources, including, without citation, social networking, blogging and similar Applications through which you are able to log into the Application using your existing account and login credentials for such third party Applications. Certain areas of the Application may allow you to interact and/or conduct transactions with such third-party sites, and, if applicable, allow you to configure your privacy settings in your third-party site account to permit your activities on the Application to be shared with your contacts in your third-party site account. Because ARTIHC SERVICES LLP has no control over such sites and resources, you acknowledge and agree that ARTIHC SERVICES LLP is not responsible for the availability of such external sites or resources, and is not responsible or liable for any content, advertising, products, goods or services on or available from such Applications or resources. Unless expressly stated on the Application. You further acknowledge and agree that ARTIHC SERVICES LLP shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, advertising, product, goods or services available on or through any such Application or resource. The Third-party Application may have different privacy policies and terms and conditions and business practices than ARTIHC SERVICES LLP. In certain situations, you may be transferred to a third-party Application through a link or connected to a third-party resource by a contact form or phone but it may appear that you are still on this Application or transacting with ARTIHC SERVICES LLP. In these situations, you acknowledge and agree that the Third-party Application terms and conditions and privacy policy apply in this situation. Your dealings and communications through the Application with any party other than ARTIHC SERVICES LLP are solely between you and such third party. Any complaints, concerns or questions you have relating to materials provided by third parties should be forwarded directly to the applicable<br><br>\r\n\r\nthird party. YOU AGREE THAT YOUR USE OF THE APPLICATION SHALL BE AT YOUR OWN RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, AND ARTIHC SERVICES LLP AND ITS OFFICERS, MANAGERS.<br><br>\r\n\r\nMEMBERS, DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES AFFILIATES, SERVICE PROFESSIONALS SUPPLIERS, AND AGENTS DISCLAIM ALL WARRANTIES, EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, AND MAKE NO WARRANTIES REPRESENTATIONS, OR GUARANTEES IN CONNECTION WITH THIS APPLICATION, THE SERVICES OFFERED ON OR THROUGH THIS APPLICATION, ANY DATA, MATERIALS, SUBMITTED CONTENT, RELATING TO THE QUALITY, SUITABILITY, TRUTH, ACCURACY OR COMPLETENESS OF ANY INFORMATION OR MATERIAL CONTAINED OR PRESENTED ON THIS APPLICATION, INCLUDING WITHOUT LIMITATION THE MATERIALS, DATA AND SUBMITTED CONTENT OF OTHER USERS OF THIS SITE OR OTHER THIRD PARTIES. UNLESS OTHERWISE EXPLICITLY STATED, TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, THIS APPLICATION<br><br>\r\n\r\nTHE SERVICES OFFERED ON OR THROUGH THIS APPLICATION, DATA, MATERIALS, SUBMITTED CONTENT, AND ANY INFORMATION OR MATERIAL CONTAINED OR PRESENTED ON THIS APPLICATION IS PROVIDED TO YOU ON AN \"AS IS.\"<br><br>\r\n\r\n\"AS AVAILABLE\" AND \"WHEREIS\" BASIS WITH NO WARRANTY OF IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF THIRD PARTY RIGHTS. ARTIHC SERVICES LLP DOES NOT PROVIDE ANY WARRANTIES AGAINST ERRORS, MISTAKES, OR INACCURACIES OF DATA, CONTENT, INFORMATION, MATERIALS, SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT, ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE APPLICATION BY ANY THIRD PARTY, ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE APPLICATION, ANY DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY OR SERVICE USER OR SERVICE PROVIDER, OR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY DATA, CONTENT INFORMATION, MATERIALS, SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT POSTED EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE APPLICATION, ARTIHC SERVICES LLP DOES NOT ENDORSE, WARRANT, GUARANTEE OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE APPLICATION OR ANY HYPERLINKED SITE OR FEATURED IN ANY BANNER OR OTHER ADVERTISEMENT. ARTIHC SERVICES LLP WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY PARTY, INCLUDING THIRD PARTY SERVICE PROFESSIONALS OF PRODUCTS OR SERVICES. AS WITH THE USE OF ANY PRODUCT OR SERVICE, AND THE PUBLISHING OR POSTING OF ANY MATERIAL THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE. 1. IN NO EVENT SHALL ARTIHC SERVICES LLP, OR ITS RESPECTIVE OFFICERS, MANAGERS, MEMBERS DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES, AFFILIATES, SERVICE PROFESSIONALS, SUPPLIERS. ATTORNEYS OR AGENTS, BE LIABLE TO YOU FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, CONSEQUENTIAL OR EXEMPLARY DAMAGES (INCLUDING BUT NOT LIMITED TO LOSS OF BUSINESS, REVENUE, PROFITS, USE, DATA OR OTHER ECONOMIC ADVANTAGE) WHATSOEVER RESULTING FROM ANY (1) ACCESS TO OR USE OF THE APPLICATION OR ANY SERVICES OFFERED BY ANY SERVICE PROFESSIONALS VIA THE APPLICATION, INCLUDING SERVICES PROVIDED PURSUANT TO AN AGREEMENT FORMED INDEPENDENTLY OF THE APPLICATION, WHETHER OR NOT AN AGREEMENT FOR SERVICE FORMED VIA THE APPLICATION IS IN EFFECT: (I) ERRORS, MISTAKES, OR INACCURACIES OF DATA, MARKS CONTENT, INFORMATION, MATERIALS OR SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT: (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN:<br><br>\r\n\r\n(IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE APPLICATION BY ANY THIRD PARTY:<br><br>\r\n\r\n(V) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE APPLICATION: (VI) ANY ERRORS OR OMISSIONS IN ANY DATA.<br><br>\r\n\r\nCONTENT, INFORMATION, MATERIALS OR SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT: (VII) ANY FAILED NEGOTIATIONS FOR A SERVICE, ANY DISPUTES THAT ARISE DURING OR AFTER THE NEGOTIATION OF A SERVICE OR THE FORMATION OF A CONTRACT FOR A SERVICE, OR ANY OTHER DISPUTE THAT ARISES BETWEEN USERS OF THE APPLICATION: (VIII) ANY DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY OR SERVICE USER OR SERVICE PROFESSIONAL: OR (IX) ANY USE OF ANY DATA, MARKS, CONTENT, INFORMATION, MATERIALS OR SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT POSTED. EMAILED, TRANSMITTED. OR OTHERWISE MADE AVAILABLE ON OR THROUGH THE APPLICATION, WHETHER BASED ON WARRANTY, CONTRACT, TORT (INCLUDING NEGLIGENCE), OR ANY OTHER LEGAL THEORY, AND WHETHER OR NOT ARTIHC SERVICES LLP ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION. 2. IN NO EVENT SHALL THE TOTAL, AGGREGATE LIABILITY OF ARTIHC SERVICES LLP, OR ANY OF THE ABOVE-REFERENCED RESPECTIVE PARTIES, ARISING FROM OR RELATING TO THE APPLICATION, AND/OR SUBMITTED CONTENT EXCEED THE TOTAL AMOUNT OF FEES ACTUALLY PAID TO ARTIHC SERVICES LLP BY YOU HEREUNDER. YOU HEREBY ACKNOWLEDGE AND AGREE THAT ARTIHC SERVICES LLP SHALL NOT BE LIABLE FOR SUBMITTED CONTENT OR THE DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY OR SERVICE USER OR SERVICE PROVIDER AND THAT THE RISK OF HARM OR DAMAGE FROM THE FOREGOING RESTS ENTIRELY WITH YOU.<br><br>\r\n\r\nYOU FURTHER ACKNOWLEDGE AND AGREE THAT ARTIHC SERVICES LLP SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL PUNITIVE, CONSEQUENTIAL OR EXEMPLARY DAMAGES (INCLUDING BUT NOT LIMITED TO LOSS OF BUSINESS, REVENUE, PROFITS, USE, DATA OR OTHER ECONOMIC ADVANTAGE) WHATSOEVER RESULTING FROM OR RELATING TO ANY CONTRACT BETWEEN APPLICATION USERS ENTERED INTO INDEPENDENTLY OF THE APPLICATION. THE APPLICATION MAY CONTAIN LINKS TO THIRD-PARTY APPLICATIONS THAT ARE NOT OWNED OR CONTROLLED BY ARTIHC SERVICES LLP.<br><br>\r\n\r\nARTIHC SERVICES LLP DOES NOT HAVE ANY CONTROL OVER, AND ASSUMES NO RESPONSIBILITY FOR, THE CONTENT, PRIVACY POLICIES, OR PRACTICES OF ANY THIRD-PARTY APPLICATIONS. IN ADDITION, ARTIHC SERVICES LLP WILL NOT AND CANNOT CENSOR OR EDIT THE CONTENT OF ANY THIRD-PARTY SITE. BY USING THE APPLICATION, YOU EXPRESSLY RELIEVE ARTIHC SERVICES LLP FROM ANY AND ALL LIABILITY ARISING FROM YOUR USE OF ANY THIRD PARTY APPLICATION<br><br>\r\n\r\nACCORDINGLY, PLEASE BE ADVISED TO READ THE TERMS AND CONDITIONS AND PRIVACY POLICY OF EACH THIRD-PARTY APPLICATION THAT YOU VISIT, INCLUDING THOSE DIRECTED BY THE LINKS CONTAINED ON THE APPLICATION<br><br>\r\n\r\nNeither ARTIHC SERVICES LLP LLP nor you shall be liable to the other for any delay or failure in performance under the Terms of Use, other than payment obligations, arising out of a cause beyond its control and without its fault or negligence.<br><br>\r\n\r\nSuch causes may include, but are not limited to fires, floods, earthquakes, strikes, unavailability of necessary Utilities, blackouts, acts of God, acts of declared or undeclared war, acts of regulatory agencies, or national disasters. <br><br>\r\n\r\nYOU AGREE TO DEFEND, INDEMNIFY AND HOLD HARMLESS ARTIHC SERVICES LLP, AND ITS OFFICERS, MANAGERS, MEMBERS, DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES, AFFILIATES, SERVICE PROFESSIONALS, SUPPLIERS, AND AGENTS, FROM AND AGAINST ANY AND ALL CLAIMS, DAMAGES, OBLIGATIONS, LOSSES, LIABILITIES COSTS OR DEBT, AND EXPENSES (INCLUDING BUT NOT LIMITED TO ATTORNEYS FEES) ARISING FROM YOUR USE OF, ACCESS TO, AND PARTICIPATION IN THE APPLICATION: YOUR VIOLATION OF ANY PROVISION OF THE TERMS OF USE, INCLUDING THE PRIVACY POLICY; YOUR VIOLATION OF ANY THIRD-PARTY RIGHT, INCLUDING WITHOUT LIMITATION ANY COPYRIGHT, PROPERTY, PROPRIETARY INTELLECTUAL PROPERTY, OR PRIVACY RIGHT: OR ANY CLAIM THAT YOUR SUBMITTED CONTENT CAUSED DAMAGE TO A THIRD PARTY<br><br>\r\n\r\nTHIS DEFENSE AND INDEMNIFICATION OBLIGATION WILL SURVIVE THESE TERMS OF SERVICE AND YOUR USE OF THE APPLICATION. IF YOU HAVE A DISPUTE WITH ONE OR MORE APPLICATION USERS, YOU FOREVER RELEASE ARTIHC SERVICES LLP (AND ITS OFFICERS, MANAGERS, MEMBERS, DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES, AFFILIATES, SERVICE PROFESSIONALS, SUPPLIERS, AGENTS, SUBSIDIARIES, AND EMPLOYEES) FROM ANY AND ALL CLAIMS, DEMANDS AND DAMAGES (ACTUAL AND CONSEQUENTIAL) OF EVERY KIND AND NATURE, KNOWN AND UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF THE APPLICATION AND/OR ANY SUBMITTED CONTENT. THE TERMS OF USE, AND ANY RIGHTS AND LICENSES GRANTED HEREUNDER, MAY NOT BE TRANSFERRED OR ASSIGNED BY YOU, BUT MAY BE ASSIGNED BY ARTIHC SERVICES LLP WITHOUT RESTRICTION. <br><br>\r\n\r\nYou agree that, except as otherwise expressly provided in the Terms of Use, there shall be no third-party beneficiaries to the Terms of Use. You agree that ARTIHC SERVICES LLP may provide you with notices including those regarding changes to the Terms of Use, by email, regular mail, or postings on the Application. The Terms of Use, together with the Privacy Policy and any other legal notices or Additional Policies published by ARTIHC SERVICES LLP on the Application, shall constitute the entire agreement between you and ARTIHC SERVICES LLP LLP concerning the Application. If any provision of the Terms of Use is deemed invalid by court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of the Terms of Use, which shall remain in full force and effect. No waiver of any provision of this these Terms of Use shall be deemed a further or continuing waiver of such term or any other term, and ARTIHC SERVICES LLP failure to assert any right or provision under these Terms of Use shall not constitute a waiver of such right or provision. You agree that any cause of action arising out of or related to the Application must commence within one (1) year after the cause of action accrues. Otherwise, such cause of action is permanently barred.<br><br>\r\n\r\nThe section headings in the Terms of Use are for convenience only and have no legal or contractual effect.\r\n', '2020-06-24 14:22:06');
INSERT INTO `basic_data` (`id`, `heading`, `content`, `time_created`) VALUES
(5, 'Terms and Conditions', 'TerconditionArtihc Maintenance Services LLP. primarily operates, controls and manages the Services (as defined below) provided by it from its corporate office at Vill. Kalu Di Hatti (By Pass),Tehsil Palampur, Kalu Di Hatti, Kangra, Himachal Pradesh,176052, India (Himachal Office)<br><br>\r\n\r\n<strong>PLEASE READ THE TERMS OF USE THOROUGHLY AND CAREFULLY.</strong> <br><br>\r\n\r\nThe terms and conditions set forth below (\"Terms of Use\") and the Privacy Policy (as defined below) constitute a legally binding agreement between ARTIHC SERVICES LLP operating from its Himachal Corporate Office and you. These Terms of Use contain provisions that define your limits, legal rights and obligations with respect to your use of and participation in the Artihc mobile application (i.e. TOWNz), including the classified advertisements, forums, various email functions and Internet links, and all content and TOWNZ services are available through mobile application, and (IS) the online transactions between those users of the application who are offering services and those users of the Mobile Application who are obtaining services. The Terms of Use described below incorporate the Privacy Policy and apply to all users of the Mobile. <br><br>\r\n\r\nThe Mobile Application â€˜TOWNzâ€™ is owned and operated by Artihc Maintenance Services LLP. You acknowledge that the Mobile application serves as a venue for the online distribution and publication of user submitted information between Service Professionals and Service Users, and, by using, visiting, registering for, and/or otherwise participating in this application, including the Services presented, promoted, and displayed on the application, and by clicking on \"I have read and agree to the terms of use,\" you hereby certify that: \r\n(1) you are either a Service Professional or a prospective Service User.\r\n(2) you have the authority to enter into these Terms of User\r\n(3) you authorize the transfer of payment for Services requested through the use of the Application, and \r\n(4) you agree to be bound by all terms and conditions of these Terms of Use and any other documents incorporated by reference herein. If you do not so agree to the foregoing, you should not click to affirm your acceptance thereof, in which case you are prohibited from accessing or using the Application. If you do not agree to any of the provisions set forth in the Terms of Use, kindly discontinue viewing or participating in this Application immediately. <strong>YOU SPECIFICALLY AGREE THAT BY USING THE APPLICATION, YOU ARE AT LEAST 18 YEARS OF AGE AND YOU ARE COMPETENT UNDER LAW TO ENTER INTO A LEGALLY BINDING AND ENFORCEABLE CONTRACT. </strong> <br><br>\r\n\r\nAll references to \"you\" or \"your\" as applicable, mean the person that accesses, uses, and/or participates in the Application in any manner. If you use the Application or open an Account (as defined below) on behalf of a business, you represent and warrant that you have the authority to bind that business and your acceptance of the Terms of Use will be deemed an acceptance by that business and \"you\" and \"your\" herein shall refer to that business. <br><br>\r\n\r\n1. ARTIHC SERVICES LLP reserves the right, in its sole discretion, to change, modify, or otherwise amend the Terms of Use, and any other documents incorporated by reference herein for complying with legal and regulatory framework and for other legitimate business purposes, at any time, and ARTIHC SERVICES LLP will post the amended Terms of Use within the Mobile Application (TOWNz). It is your responsibility to review the Terms of Use for any changes and you are encouraged to check the Terms of Use frequently. Your use of the Application following any amendment of the Terms of Use will signify your assent to and acceptance of any revised Terms of Use. If you do not agree to abide by these or any future Terms of Use, please do not use or access the Application<br><br>\r\n \r\n2. ARTIHC SERVICES LLP has established a Privacy Policy that explains to users how their information is collected and used. The Privacy Policy is referenced above and hereby incorporated into the Terms of Use set forth herein. Your use of this Application is governed by the Privacy Policy. ARTIHC SERVICES LLP hereby grants you a non-exclusive, revocable license to use the Application as set forth in the Terms of Use; provided, however, that you will not copy, distribute, or make derivative works of the Application in any medium without ARTIHC SERVICES LLP prior written consent: (i) you will not alter or modify any part of the Application other than as may be reasonably necessary to use the Application for its intended purposes; and (ii) you will otherwise act in accordance with the terms and conditions of the Terms of Use and in accordance with all applicable laws. Use of the Application is available only to individuals who are at least 18 years old and can form legally binding contracts under applicable law. You represent, acknowledge and agree that you are at least 18 years of age, and that: \r\n(a) all registration information that you submit is truthful and accurate,\r\n(b) you will maintain the accuracy of such information, and \r\n(c) your use of the Application and Services offered through this Application do not violate any applicable law or regulation. <br><br>\r\n\r\nYour Account (defined below) may be terminated without warning if we at our discretion, believe that you are under the age of 18 or that you are not complying with any applicable laws, rules or regulations. <br><br>\r\n\r\nYou need not register with ARTIHC SERVICES LLP to simply acess and view the Application, but to access and participate in certain features of the Application. You will also have the ability to provide additional optional information, which is not required to register for an account but may be helpful to ARTIHC SERVICES LLP in providing you with a more customized experience when using the Application. You may also register for an Account using your existing Facebook account and log in credentials (your \"Third-Party Site Password\"). \r\nYou are solely responsible for safeguarding your ARTIHC SERVICES LLP accountâ€™s credentials and, if applicable, your Third-Party Site Password (collectively, \"Passwords\") at all times and shall keep your credentials secured at all times. You shall be solely responsible for all activity that occurs on your Account and you shall notify ARTIHC SERVICES LLP immediately of any breach of security or any unauthorized use of your account. Similarly, you shall never use another\'s Account without ARTIHC SERVICES LLP permission. You agree that you will not misrepresent yourself or represent yourself as another user of the Application and/or the Services offered through the Application. You hereby expressly acknowledge and agree that you yourself and not ARTIHC SERVICES LLP will be liable for your losses, damages etc. (whether direct or indirect) caused by an unauthorized use of your Account. Notwithstanding the foregoing, you may be liable for the losses of ARTIHC SERVICES LLP or others due to such unauthorized use. An Account holder is sometimes referred to herein as a \"Registered User.\" You acknowledge and agree that you shall comply with the following policies (the \"Account Policies\'): You will not copy or distribute any part of the Application in any medium without ARTIHC SERVICES LLP prior written authorization. You will not alter or modify any part of the Application other than as may be reasonably necessary to use the Application for its intended purpose. You will provide true, accurate, current and complete information when creating your Account and you shall maintain and update such information during the term of this Agreement so that it will remain accurate, true, current and complete.<br><br>\r\n\r\nYou shall not use any automated system, including but not limited to, \"robots\" \"spiders.\" \"offline readers,\" \"scrapers\" etc., to access the Application for any purpose without ARTIHC SERVICES LLP prior written approval. You shall not in any manual or automated manner collect Service Professionals or Service Users information, including but not limited to, names, addresses, phone numbers, or email addresses, copying copyrighted text, or otherwise misuse or misappropriate Application information or content, including but not limited to, use on a \"mirrored\" competitive, or third party site. \r\nARTIHC SERVICES LLP reserves the right to revoke these exceptions either generally or in specific cases.\r\nYou shall not recruit, solicit, or contact in any form Service Professionals or Service Users for employment or contracting for a business not affiliated with ARTIHC SERVICES LLP without express written permission from ARTIHC SERVICES LLP. You shall not take any action that ( unreasonably encumbers or, in ARTIHC SERVICES LLP sole discretion, may unreasonably encumber the Application\'s infrastructure: (1) interferes or attempts to interfere with the proper working of the: or (ii) bypasses Artihc Serviceâ€™s measures that are used to prevent or restrict access to the Application, you agree not to collect or harvest any personally identifiable data.\r\nYour access to, use of, and participation in the Application is subject to the Terms of Use and all applicable ARTIHC SERVICES LLP regulations, guidelines and additional policies that ARTIHC SERVICES LLP may set forth from time to time, including without limitation, a copyright policy and any other restrictions or limitations that ARTIHC SERVICES LLP publishes on the Application (the \"Additional Policies\"). You hereby agree to comply with the Additional Policies and your obligations thereunder at all times. You hereby acknowledge and agree that if you fail to adhere to any of the terms and conditions of this Agreement or documents referenced herein, including the Account Policies, membership eligibility criteria or Additional Policies, ARTIHC SERVICES LLP, in its sole discretion, may terminate your Account at any time without prior notice to you as well as initiate appropriate legal proceedings, if necessary. \r\nYou shall not upload, post, transmit, transfer, disseminate, distribute, or facilitate distribution of any content, including text, images, video, sound, data, information, or software, to any part of the Application, including your profile (\"Profile\"), the posting of your Service (\"Offer\"), the posting of your desired Service (\"Want\"), or the posting of any opinions or reviews in connection with the Application, the Service, the Service Professional, or the Service User (\"Feedback\") (all of the foregoing content is sometimes collectively referred to herein as \"Submitted Content\" and the posting of Submitted Content is sometimes referred to as a \"Posting\" or as \"Postings\') that: misrepresents the source of anything you post, including impersonation of another individual or entity or any false or inaccurate biographical Information for any Service Professionals; provides or create links to external sites that violate the Terms of Use; is intended to harm or exploit any individual under the age of 18 (\"Minor) in any way: is designed to solicit, or collect personally identifiable information of any Minor, including, but not limited to, name, email address, home address, phone number, or the name of his or her school; invades anyone\'s privacy by attempting to harvest, collect, store, or publish private or personally identifiable information, such as names, email addresses, phone numbers, passwords, account information, credit card numbers, home addresses, or other contact information without their knowledge and willing consent; contains falsehoods or misrepresentations that could damage Artihc  Services.<br><br>\r\n\r\nARTIHC SERVICES LLP will not knowingly accept any Posting which is in violation of the law.<br><br>\r\n\r\nARTIHC SERVICES LLP has the right, in its sole discretion and without prior notice to you; to immediately remove anything that discriminates or is any way in violation of any law.\r\nPROHIBITIONS WITH RESPECT TO SERVICES While using the Application, you shall not: violate Account Policies, or any provision of the Terms of Use, such as; fail to deliver payment for Services purchased by you, unless the Service Professional has materially changed the description of the Service description after you negotiate an agreement for such Service, a clear typographical error is made, or you cannot authenticate the Service Professionals identity: fail to perform Services purchased from you, unless the, refuses to pay, manipulate the price of any Service or interfere with other users\' Postings:<br><br>\r\n\r\nUser from leaving Feedback. 1. Sanctions for Inappropriate Use of Feedback. If you violate any of the above-referenced rules in connection with leaving Feedback ARTIHC SERVICES LLP LLP, in its sole discretion, may take any of the following actions: (i) cancel your Feedback or any of your Postings: (i) limit your Account privileges; (iii) suspend your Account:\r\nYou may contact ARTIHC SERVICES LLP regarding any violation via-email at support@towz.co.in. <br><br>\r\n\r\nWhen legally required or at ARTIHC SERVICES LLP discretion, ARTIHC SERVICES LLP will cooperate with law enforcement agencies in any investigation of alleged illegal activity on this Application or on the Internet ARTIHC SERVICES LLP does not and cannot review every Posting posted to the Application.\r\nThese prohibitions do not require ARTIHC SERVICES LLP to monitor, police or remove any Postings or other information submitted by you or any other user.\r\nD. Rules for Service Professionals \r\n\r\n<strong>1. PROFILES AND OFFERS MUST NOT BE FRAUDULENT</strong>\r\n\r\nSubject to any exceptions set forth in these Terms of Use or Additional Policies, if any, Service Professionals shall not: (a) list Services or offers relating to any Service in a category that is inappropriate to the Service they are offering: (b) misrepresent the location at which they will provide a Service: (c) include brand names or other inappropriate keywords in their Profile, Offer, Want, Feedback, or any other title or description relating to a Service; (d) use misleading titles that do not accurately describe the Service; or (e) include any information in their Profile that is fraudulent <br><br>\r\n\r\n<strong>2. PROFILES AND OFFERS CANNOT USE TECHNIQUES TO AVOID OR CIRCUMVENT ARTIHC SERVICES LLP FEES</strong> Subject to any exceptions set forth in these Terms of Use or Additional Policies, if any, Service Professionals shall not:<br><br>\r\n\r\n(a)	offer a catalog or a link to a third-party Application from which Service Users or any Registered User or user of the Application may obtain the Service directly; (b) exceed multiple Posting limits; (c) post a single Service but offer additional identical services in the Service description: (d) charge fees for traveling further than desired to provide the Service: (e) offer the opportunity through ARTIHC SERVICES LLP to purchase the Service or any other service outside of ARTIHC SERVICES LLP: () use their Profile page or user name to promote services not offered on or through the Application and/or prohibited services. In case we realize that any professional is involved in any of the above activities, ARTIHC SERVICES LLP holds the sole discretion to blacklist the professional and withhold any outstanding credits or payments to the professional. \r\n(b)	FOR ALL APPLICATION USERS Subject to any exceptions set forth in these Terms of Use or Additional Policies, if any, Service Professionals shall not: (a) solicit Service Users to mail cash or use other payment methods not specifically permitted by ARTIHC SERVICES LLP as approved payment methods.<br><br>\r\n\r\nIt is further clarified that your registration on the Application shall be deemed to be your consent to be contacted for the purposes mentioned above, on the mobile number shared by you even if you are registered with the National Customer Preference Register (NCPR) and have opted out of receiving promotional calls and messages and (i) by way of SMS or email notifications or messages in any other electronic form <br><br>\r\n\r\n\r\n<strong>3. SANCTIONS FOR VIOLATING ANY OF THE RULES FOR SERVICE PROFESSIONALS </strong>If a Service Professional violates any of the above referenced rules in connection with his or her Posting. ARTIHC SERVICES LLP, in its sole discretion, may take any of the following actions: (a) cancel the Posting: (b) limit the Service Professionals Account privileges: (C) suspend the Service Professional\'s Account; (d) cause the Service Professional to forfeit any fees earned on a cancelled Posting: and/or (e) decrease the Service Professional\'s status earned via the Feedback. \r\nRules for Service Users \r\n<strong>1.	SERVICE USERS SHALL NOT TAKE ANY OF THE FOLLOWING ACTIONS: </strong>\r\n(a) commit to purchasing or using a Service without paying:\r\n(b) sign up for, negotiate a price for, use, or otherwise solicit a Service with no intention of following through with your use of or payment for the Service: \r\n(c) agree to purchase a Service when you do not meet the Service Professional\'s terms as outlined in the Posting, or agree to purchase a Service with the intention of disrupting a Posting; or \r\n(d) misuse any options made available now or in the future by ARTIHC SERVICES LLP in connection with the use or purchase of any Service. \r\n<strong>2. SANCTIONS FOR VIOLATING ANY OF THE RULES FOR SERVICE USERS</strong> If a Service User violates any of the above-referenced rules in connection with his or her Posting, ARTIHC SERVICES LLP, in its sole discretion, may take any of the following actions: \r\n(a) cancel the Posting:\r\n(b) limit the Service User\'s Account privileges; \r\n(c) suspend the Service User\'s Account; and/or \r\n(d) decrease the Service User\'s status earned via the Feedback. <br><br>\r\n\r\nARTIHC SERVICES LLP may also disclose user information including personal information if ARTIHC SERVICES LLP reasonably believes that disclosure is necessary in order to comply with a legal process (such as a court order, search warrant, etc.) or other legal requirement of any governmental authority. (it) would potentially mitigate ARTIHC SERVICES LLP liability in an actual or potential lawsuit, (in) is otherwise necessary or appropriate to protect our rights or property.<br><br>\r\n\r\n(iv) to enforce this Agreement (including, but not limited to ensuring payment of fees by users), or \r\n(v) as may be required or necessary to deter illegal behavior (including, but not limited to, fraud). \r\nSuggesting or recommending changes to the Application, including, without limitation, new features or functionality relating thereto, all such Suggestions are, and will be treated as non-confidential and non-proprietary. You hereby assign all right, title, and interest in, and ARTIHC SERVICES LLP is free to use, without any attribution or compensation to you, any ideas, know-how, concepts, techniques, or other intellectual property and proprietary rights contained in the Suggestions, whether or not patentable for any purpose whatsoever, including but not limited to, developing manufacturing, having manufactured, licensing, marketing, and selling, directly or indirectly, products and services using such Suggestions. You understand and agree that ARTIHC SERVICES LLP is not obligated to use, display, reproduce, or distribute any such ideas, know how, concepts, or techniques contained in the Suggestions, and you have no right to compel!<br><br>\r\n\r\nCopyright Infringement Take Down Procedure ARTIHC SERVICES LLP has high regard for intellectual property and expects the same level of standard to be employed by its users. ARTIHC SERVICES LLP may, in appropriate circumstances and at its discretion, terminate the Account or prohibit access to the Application of users who infringe upon the intellectual property rights of others. If you believe that your work has been copied and posted on the Application in a way that constitutes copyright infringement and/or trademark infringement, please send the following information to us at support@townz.co.in <br><br>\r\n\r\n<strong>MODIFICATION OR CESSATION OF APPLICATION ARTIHC SERVICES LLP</strong> reserves the right at any time and from time to time to modify or discontinue, temporarily or permanently, the Application (or any part thereof) with or without notice and in its sole discretion.\r\nYou agree that ARTIHC SERVICES LLP shall not be liable to you or to any third party for any modification, suspension or discontinuance of ARTIHC SERVICES LLP services. You hereby acknowledge and agree that ARTIHC SERVICES LLP, in its sole and absolute discretion, has the right (but not the obligation) to delete, terminate, or deactivate your Account, block your email or IP address, cancel the Application or otherwise terminate your access to or participation in the use of the Application (or any part thereof), or remove and discard any Submitted Content on the Application (\"Termination of Service\"). Immediately and without notice, for any reason, including without limitation, Account inactivity or if ARTIHC SERVICES LLP believes or has reason to believe that you have violated any provision of the Terms of Use. You may cancel your use of the Application and/or terminate the Terms of Use with or without cause at any time by following the link in your Account under \"Account Preferences\" to \"Deactivate Account.\" 4 Upon termination of your Account, your right to participate in the Application, including, but not limited to your right to offer or purchase Services and your right to receive any fees or compensation, including, without limitation and referral discounts, incentive bonuses, or other special offer rewards, shall automatically terminate. You acknowledge and agree that your right to receive any fees or compensation hereunder is conditional upon your proper use of the Application, your adherence to the Terms of Use, the continuous activation of your Account, and your permitted participation in the Application. In the event of Termination of Service, your Account will be disabled and you may not be granted access to your Account or any files or other data contained in your Account Notwithstanding the foregoing, residual data may remain in the ARTIHC SERVICES LLP system. Unless ARTIHC SERVICES LLP has previously cancelled or terminated your use of the Application (in which case subsequent notice by ARTIHC SERVICES LLP shall not be required). If you provided a valid email address during registration, ARTIHC SERVICES LLP will notify you via email of any such termination or cancellation, which shall be effective immediately upon ARTIHC SERVICES LLP delivery of such notice. Upon Termination of Service, the following shall occur: all licenses granted to you hereunder will immediately terminate; and you shall promptly destroy all copies of ARTIHC SERVICES LLP Data (as defined below), Marks (as defined below) and other content in your possession or control. You further acknowledge and agree that ARTIHC SERVICES LLP shall not be liable to you or any third party for any termination of your access to the Application. Upon Termination of Service, ARTIHC SERVICES LLP retains the right to use any data collected from your use of the Application for internal analysis and archival purposes, and all related licenses you have granted ARTIHC SERVICES LLP hereunder shall remain in effect for the foregoing purpose. In no event is ARTIHC SERVICES LLP obligated to return any Submitted Content to you. <br><br>\r\n\r\nYou agree to indemnify and hold ARTIHC SERVICES LLP, and its officers, managers, members, affiliates, successor, assigns, directors, agents, service professionals, suppliers, and employees harmless from any claim or demand, including reasonable attorneys\' fees and court costs, made by any third party due to or arising out of the Termination of Service. \r\nL. 1. The content on the Application (exclusive of all Submitted Content), including without limitation, the text, software, scripts, graphics, photos, sounds, music, videos, interactive features and the like (\"Data\") and the trademarks, service marks and logos contained therein (\"Marks\"), are owned by ARTIHC SERVICES LLP. Other trademarks, names and logos on this Application are the property of their respective owners. Data on the Application is provided to you AS IS for your information and personal use only and may not be used, copied, reproduced, distributed, transmitted, broadcast, displayed, sold, licensed, or otherwise exploited for any other purposes whatsoever without the prior written consent of the respective owners. ARTIHC SERVICES LLP reserves all rights not expressly granted in and to the Application and the Data. You agree not to use, copy, or distribute, any of the Data other than as expressly permitted herein, including any use, copying, or distribution of Submitted Content obtained through the Application for any commercial purposes. If you download or print a copy of the Data for personal use, you must retain all copyright and other proprietary notices contained thereon. You agree not to circumvent, disable or otherwise interfere with security features of the Application or features that prevent or restrict use or copying of any Data or enforce limitations on use of the Application or the Data therein. The Application contains ARTIHC SERVICES LLP Data and Marks, which are, or may become, protected by copyright, trademark, patent, trade secret and other laws, and ARTIHC SERVICES LLP owns and retains all rights in the ARTIHC SERVICES LLP Data and Marks.<br><br>\r\n\r\nSubject to these Terms of Use. ARTIHC SERVICES LLP hereby grants you a limited, revocable, non-transferable, non-sublicensable license to reproduce and display the ARTIHC SERVICES LLP Data (excluding any software source code) solely for your personal use in connection with accessing and participating in the Application. The Application may also contain Data of other users or licensors, which you shall not copy, modify, translate, publish, broadcast, transmit, distribute, perform, display, or sell. <br><br>\r\n\r\n<strong>FEES INCURRED BY SERVICE PROFESSIONALS</strong><br><br>\r\n\r\nJoining ARTIHC SERVICES LLP, opening an Account, posting Services and viewing posted Services is free. ARTIHC SERVICES LLP reserves the right at its sole discretion to charge fees to Service Professionals for other services that ARTIHC SERVICES LLP may provide in the future. The Service Professionals shall be required to maintain a deposit in their accounts depending on the usage of the platform by the Service Professional. The Deposit amount shall be required to be maintained by the Service Professional to continue having the ability to obtain requests from the Service Users. A part of the Deposits shall be reserved by ARTIHC SERVICES LLP on receipt of the service request. The Service Professional may also pay for the future procurement of products through such Deposits. The penal charges, payable by the Service Professional shall be recovered from the Deposits amount. Further, ARTIHC SERVICES LLP may also in certain categories require Service Professionals to make payments for following up on job leads i.e, requests posted by Service Users, and permitting the Service Professional to contact the Service User (\"Lead Fee\") irrespective of whether the job leads eventually result in a transaction or exchange of consideration for the service requested.\r\nARTIHC SERVICES LLP reserves the right to charge fees for these services at its sole discretion. For the invoice to be raised by Service Professional with respect to the services to be provided to the Service User, ARTIHC SERVICES LLP shall prepare such invoice. \r\n\r\n<strong>SPECIAL CASES</strong><br><br>\r\n\r\n1.	All Service partners has to follow a 10 Strike system. Any behavioral issue which includes improper communication with the service user, not showing up on the decided time, and non-completion of work; the service user if deemed necessary can raise a strike against Service Partner and after 10 strike ARTIHC SERVICES LLP has the right to decide that if the Service Partnerâ€™s account to be terminated or penalize the account or to let him or her go with the warning.\r\n\r\n2.	All the Service providers must send their profile for approval and once approved, in order to get the job requests they have to activate their wallet by the first recharge.\r\n\r\n3.	All the payouts if pending on ARTIHC SERVICES LLP will be processed on Thursday of every week with an exception of Bank Holiday or National Holiday, or any natural calamity. \r\n\r\n<strong>FEES INCURRED BY SERVICE USERS</strong><br><br>\r\n\r\nARTIHC SERVICES LLP, opening an Account, viewing posted Services, and bidding on posted Services is free. ARTIHC SERVICES LLP currently does not charge Service Users for transactions completed on the Application between Service Users and Services Professionals. However, Artihc reserves the right to charge a fee to Service Users in the future on a per-transaction basis or in any other manner, and reserves the right to do so in its sole discretion. Changes to this Fee Policy are effective after ARTIHC SERVICES LLP has provided you with thirty (30) days\' notice by posting the changes on the Application. If applicable, you agree to pay all fees or charges to your Account based on ARTIHC SERVICES LLP fees, charges, and billing terms then in effect. If you do not pay on time or if ARTIHC SERVICES LLP cannot charge your credit card, any payment gateway or other payment method for any reason, ARTIHC SERVICES LLP reserves the right to either suspend or terminate your access to the Application and Account and terminate these Terms of Use. You are expressly agreeing that ARTIHC SERVICES LLP is permitted to bill you for the applicable fees, any applicable tax and any other charges you may incur in connection with your use of this Application and the fees will be billed to your credit card, a payment gateway or other payment method designated at the time you make a purchase or register for a fee-based service. If you cancel your Account at any time, you will not receive any refund. If you have a balance due on any account, you agree that ARTIHC SERVICES LLP may charge such unpaid fees to your credit card or otherwise bill you for such unpaid fees.<br><br>\r\n\r\nARTIHC SERVICES LLP LLP reserves its right to initiate appropriate legal proceedings, if necessary, in its sole discretion, to recover such outstanding amounts. \r\nYou understand that we are acting solely as an intermediary for the collection of rents and fees between a Service User and a Service Professional who choose to enter into an Agreement for Service. Because state and local tax laws vary significantly by locality, you understand and agree that you are solely responsible for determining your own tax reporting requirements in consultation with tax advisors, and that we cannot and do not offer tax advice to either hosts or guests. Further, you understand that ARTIHC SERVICES LLP shall not be responsible or liable in any manner in relation to tax liability of a Service User or a Service Professional. In case of unregistered Housekeeping services (HK services\').\r\nARTIHC SERVICES LLP shall pay taxes under Section 9 of Central Goods and Services Tax Act, 2017. on behalf of the Service Professional. \r\nREFUND POLICY All commissions payable to ARTIHC SERVICES LLP by Service Professionals on consummated transactions, i.e. exchange of services for consideration, are final and non-refundable. All monies paid by Service Professionals in form of \"Credits or Deposits\" are non-interest bearing.\r\nUnutilised and unclaimed \"Credits or Deposits for a period of more than 364 days from the date of purchase of \"Credits\" shall expire and stand forfeited. No refunds of credits will be processed after the expiry date.<br><br>\r\n\r\nARTIHC SERVICES LLP may attempt to seek information about the background of a Service Professional, either via a telephonic or in person interview, review of past work/customer feedback and/or check presence online (If available) on Facebook, personalized Application, LinkedIn, Twitter etc., you understand that Service Professionals may register themselves. You also understand that any so called background check undertaken by ARTIHC SERVICES LLP is not exhaustive to the extent to determine previous criminal antecedents and hence, at the end of the day, the Service User should take an informed decision on his/her own accord and keep in mind the fact that ARTIHC SERVICES LLP only seeks to provide a platform wherein Service Users and Service Professionals have an opportunity to meet each other.<br><br>\r\n\r\n<strong>NOTWITHSTANDING THE FOREGOING, YOU AGREE THAT SINCE ARTIHC SERVICES LLP</strong> only seeks to provide a platform wherein the Service User and Service Professional can be brought together and ARTIHC SERVICES LLP LLP itself has no role in the execution or provision of Services ITSELF,<br><br>\r\n\r\n<strong>ARTIHC SERVICES LLP LLP SHALL NOT BE RESPONSIBLE OR LIABLE FOR ANY LOSS OR DAMAGE OF ANY SORT WHATSOEVER INCURRED AS THE RESULT OF ANY SUCH TRANSACTION OR DEALINGS. IF THERE IS A DISPUTE BETWEEN PARTICIPANTS ON THE APPLICATION, OR BETWEEN REGISTERED USERS OR ANY APPLICATION USER AND ANY THIRD PARTY, YOU ACKNOWLEDGE AND AGREE THAT ARTIHC SERVICES LLP IS UNDER NO OBLIGATION TO BECOME INVOLVED IN THE EVENT THAT A DISPUTE ARISES BETWEEN YOU AND ONE OR MORE APPLICATION USERS, REGISTERED USERS OR ANY THIRD PARTY, YOU HEREBY RELEASE ARTIHC SERVICES LLP. ITS OFFICERS, MANAGERS, MEMBERS, DIRECTORS, EMPLOYEES ATTORNEYS, AGENTS, AND SUCCESSORS IN RIGHTS FROM ANY CLAIMS, DEMANDS, AND DAMAGES (ACTUAL AND CONSEQUENTIAL) OF EVERY KIND OR NATURE, KNOWN OR UNKNOWN, SUSPECTED OR UNSUSPECTED.</strong><br><br>\r\n\r\n<strong>FORESEEABLE OR UNFORESEEABLE, DISCLOSED OR UNDISCLOSED, ARISING OUT OF OR IN ANY WAY RELATED TO SUCH DISPUTES AND/OR THE APPLICATION OR ANY SERVICE PROVIDED THEREUNDER. O. Dispute</strong><br><br>\r\n\r\nResolution If a dispute arises between you and ARTIHC SERVICES LLP our goal is to provide you with a neutral and cost-effective means of resolving the dispute quickly. Accordingly. you and ARTIHC SERVICES LLP hereby agree that we will resolve any claim or controversy at law and equity that arises out of the Terms of Use or the Application in accordance with this Section O or as we and you otherwise agree in writing<br><br>\r\n\r\nBefore resorting to the filing of a formal lawsuit, we strongly encourage you to first contact us directly to seek a resolution via e mail at support@townz.co.in. The dispute shall be resolved through alternative dispute resolution procedures, such as mediation or arbitration, as alternatives to litigation. <br><br>\r\n\r\nGOVERNING LAW The Terms of Use shall be governed in all respects by the laws of India and any legal proceeding arising out of this Agreement will occur exclusively in the courts located in New Delhi India. P Aspects of the Application and other ARTIHC SERVICES LLP LLP services may be supported by advertising revenue. As such, ARTIHC SERVICES LLP may display advertisements and promotions on the service. The manner, mode and extent of advertising by ARTIHC SERVICES LLP on the Application are subject to change and the appearance of advertisements on the Application does not necessarily imply endorsement by ARTIHC SERVICES LLP of any advertised products or services. You agree that ARTIHC SERVICES LLP shall not be responsible or liable for any loss or damage of any sort incurred by you as a result of any such dealings or as the result of the presence of such advertisers on the Application. Q The Application may provide, or third parties may provide, links, contact forms and/or phone numbers to other Applications or resources, including, without citation, social networking, blogging and similar Applications through which you are able to log into the Application using your existing account and login credentials for such third party Applications. Certain areas of the Application may allow you to interact and/or conduct transactions with such third-party sites, and, if applicable, allow you to configure your privacy settings in your third-party site account to permit your activities on the Application to be shared with your contacts in your third-party site account. Because ARTIHC SERVICES LLP has no control over such sites and resources, you acknowledge and agree that ARTIHC SERVICES LLP is not responsible for the availability of such external sites or resources, and is not responsible or liable for any content, advertising, products, goods or services on or available from such Applications or resources. Unless expressly stated on the Application. You further acknowledge and agree that ARTIHC SERVICES LLP shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, advertising, product, goods or services available on or through any such Application or resource. The Third-party Application may have different privacy policies and terms and conditions and business practices than ARTIHC SERVICES LLP. In certain situations, you may be transferred to a third-party Application through a link or connected to a third-party resource by a contact form or phone but it may appear that you are still on this Application or transacting with ARTIHC SERVICES LLP. In these situations, you acknowledge and agree that the Third-party Application terms and conditions and privacy policy apply in this situation. Your dealings and communications through the Application with any party other than ARTIHC SERVICES LLP are solely between you and such third party. Any complaints, concerns or questions you have relating to materials provided by third parties should be forwarded directly to the applicable<br><br>\r\n\r\nthird party. YOU AGREE THAT YOUR USE OF THE APPLICATION SHALL BE AT YOUR OWN RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, AND ARTIHC SERVICES LLP AND ITS OFFICERS, MANAGERS.<br><br>\r\n\r\nMEMBERS, DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES AFFILIATES, SERVICE PROFESSIONALS SUPPLIERS, AND AGENTS DISCLAIM ALL WARRANTIES, EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, AND MAKE NO WARRANTIES REPRESENTATIONS, OR GUARANTEES IN CONNECTION WITH THIS APPLICATION, THE SERVICES OFFERED ON OR THROUGH THIS APPLICATION, ANY DATA, MATERIALS, SUBMITTED CONTENT, RELATING TO THE QUALITY, SUITABILITY, TRUTH, ACCURACY OR COMPLETENESS OF ANY INFORMATION OR MATERIAL CONTAINED OR PRESENTED ON THIS APPLICATION, INCLUDING WITHOUT LIMITATION THE MATERIALS, DATA AND SUBMITTED CONTENT OF OTHER USERS OF THIS SITE OR OTHER THIRD PARTIES. UNLESS OTHERWISE EXPLICITLY STATED, TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, THIS APPLICATION<br><br>\r\n\r\nTHE SERVICES OFFERED ON OR THROUGH THIS APPLICATION, DATA, MATERIALS, SUBMITTED CONTENT, AND ANY INFORMATION OR MATERIAL CONTAINED OR PRESENTED ON THIS APPLICATION IS PROVIDED TO YOU ON AN \"AS IS.\"<br><br>\r\n\r\n\"AS AVAILABLE\" AND \"WHEREIS\" BASIS WITH NO WARRANTY OF IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF THIRD PARTY RIGHTS. ARTIHC SERVICES LLP DOES NOT PROVIDE ANY WARRANTIES AGAINST ERRORS, MISTAKES, OR INACCURACIES OF DATA, CONTENT, INFORMATION, MATERIALS, SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT, ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE APPLICATION BY ANY THIRD PARTY, ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE APPLICATION, ANY DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY OR SERVICE USER OR SERVICE PROVIDER, OR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY DATA, CONTENT INFORMATION, MATERIALS, SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT POSTED EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE APPLICATION, ARTIHC SERVICES LLP DOES NOT ENDORSE, WARRANT, GUARANTEE OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE APPLICATION OR ANY HYPERLINKED SITE OR FEATURED IN ANY BANNER OR OTHER ADVERTISEMENT. ARTIHC SERVICES LLP WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY PARTY, INCLUDING THIRD PARTY SERVICE PROFESSIONALS OF PRODUCTS OR SERVICES. AS WITH THE USE OF ANY PRODUCT OR SERVICE, AND THE PUBLISHING OR POSTING OF ANY MATERIAL THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE. 1. IN NO EVENT SHALL ARTIHC SERVICES LLP, OR ITS RESPECTIVE OFFICERS, MANAGERS, MEMBERS DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES, AFFILIATES, SERVICE PROFESSIONALS, SUPPLIERS. ATTORNEYS OR AGENTS, BE LIABLE TO YOU FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, CONSEQUENTIAL OR EXEMPLARY DAMAGES (INCLUDING BUT NOT LIMITED TO LOSS OF BUSINESS, REVENUE, PROFITS, USE, DATA OR OTHER ECONOMIC ADVANTAGE) WHATSOEVER RESULTING FROM ANY (1) ACCESS TO OR USE OF THE APPLICATION OR ANY SERVICES OFFERED BY ANY SERVICE PROFESSIONALS VIA THE APPLICATION, INCLUDING SERVICES PROVIDED PURSUANT TO AN AGREEMENT FORMED INDEPENDENTLY OF THE APPLICATION, WHETHER OR NOT AN AGREEMENT FOR SERVICE FORMED VIA THE APPLICATION IS IN EFFECT: (I) ERRORS, MISTAKES, OR INACCURACIES OF DATA, MARKS CONTENT, INFORMATION, MATERIALS OR SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT: (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN:<br><br>\r\n\r\n(IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE APPLICATION BY ANY THIRD PARTY:<br><br>\r\n\r\n(V) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE APPLICATION: (VI) ANY ERRORS OR OMISSIONS IN ANY DATA.<br><br>\r\n\r\nCONTENT, INFORMATION, MATERIALS OR SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT: (VII) ANY FAILED NEGOTIATIONS FOR A SERVICE, ANY DISPUTES THAT ARISE DURING OR AFTER THE NEGOTIATION OF A SERVICE OR THE FORMATION OF A CONTRACT FOR A SERVICE, OR ANY OTHER DISPUTE THAT ARISES BETWEEN USERS OF THE APPLICATION: (VIII) ANY DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY OR SERVICE USER OR SERVICE PROFESSIONAL: OR (IX) ANY USE OF ANY DATA, MARKS, CONTENT, INFORMATION, MATERIALS OR SUBSTANCE OF THE APPLICATION OR SUBMITTED CONTENT POSTED. EMAILED, TRANSMITTED. OR OTHERWISE MADE AVAILABLE ON OR THROUGH THE APPLICATION, WHETHER BASED ON WARRANTY, CONTRACT, TORT (INCLUDING NEGLIGENCE), OR ANY OTHER LEGAL THEORY, AND WHETHER OR NOT ARTIHC SERVICES LLP ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION. 2. IN NO EVENT SHALL THE TOTAL, AGGREGATE LIABILITY OF ARTIHC SERVICES LLP, OR ANY OF THE ABOVE-REFERENCED RESPECTIVE PARTIES, ARISING FROM OR RELATING TO THE APPLICATION, AND/OR SUBMITTED CONTENT EXCEED THE TOTAL AMOUNT OF FEES ACTUALLY PAID TO ARTIHC SERVICES LLP BY YOU HEREUNDER. YOU HEREBY ACKNOWLEDGE AND AGREE THAT ARTIHC SERVICES LLP SHALL NOT BE LIABLE FOR SUBMITTED CONTENT OR THE DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY OR SERVICE USER OR SERVICE PROVIDER AND THAT THE RISK OF HARM OR DAMAGE FROM THE FOREGOING RESTS ENTIRELY WITH YOU.<br><br>\r\n\r\nYOU FURTHER ACKNOWLEDGE AND AGREE THAT ARTIHC SERVICES LLP SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL PUNITIVE, CONSEQUENTIAL OR EXEMPLARY DAMAGES (INCLUDING BUT NOT LIMITED TO LOSS OF BUSINESS, REVENUE, PROFITS, USE, DATA OR OTHER ECONOMIC ADVANTAGE) WHATSOEVER RESULTING FROM OR RELATING TO ANY CONTRACT BETWEEN APPLICATION USERS ENTERED INTO INDEPENDENTLY OF THE APPLICATION. THE APPLICATION MAY CONTAIN LINKS TO THIRD-PARTY APPLICATIONS THAT ARE NOT OWNED OR CONTROLLED BY ARTIHC SERVICES LLP.<br><br>\r\n\r\nARTIHC SERVICES LLP DOES NOT HAVE ANY CONTROL OVER, AND ASSUMES NO RESPONSIBILITY FOR, THE CONTENT, PRIVACY POLICIES, OR PRACTICES OF ANY THIRD-PARTY APPLICATIONS. IN ADDITION, ARTIHC SERVICES LLP WILL NOT AND CANNOT CENSOR OR EDIT THE CONTENT OF ANY THIRD-PARTY SITE. BY USING THE APPLICATION, YOU EXPRESSLY RELIEVE ARTIHC SERVICES LLP FROM ANY AND ALL LIABILITY ARISING FROM YOUR USE OF ANY THIRD PARTY APPLICATION<br><br>\r\n\r\nACCORDINGLY, PLEASE BE ADVISED TO READ THE TERMS AND CONDITIONS AND PRIVACY POLICY OF EACH THIRD-PARTY APPLICATION THAT YOU VISIT, INCLUDING THOSE DIRECTED BY THE LINKS CONTAINED ON THE APPLICATION<br><br>\r\n\r\nNeither ARTIHC SERVICES LLP LLP nor you shall be liable to the other for any delay or failure in performance under the Terms of Use, other than payment obligations, arising out of a cause beyond its control and without its fault or negligence.<br><br>\r\n\r\nSuch causes may include, but are not limited to fires, floods, earthquakes, strikes, unavailability of necessary Utilities, blackouts, acts of God, acts of declared or undeclared war, acts of regulatory agencies, or national disasters. <br><br>\r\n\r\nYOU AGREE TO DEFEND, INDEMNIFY AND HOLD HARMLESS ARTIHC SERVICES LLP, AND ITS OFFICERS, MANAGERS, MEMBERS, DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES, AFFILIATES, SERVICE PROFESSIONALS, SUPPLIERS, AND AGENTS, FROM AND AGAINST ANY AND ALL CLAIMS, DAMAGES, OBLIGATIONS, LOSSES, LIABILITIES COSTS OR DEBT, AND EXPENSES (INCLUDING BUT NOT LIMITED TO ATTORNEYS FEES) ARISING FROM YOUR USE OF, ACCESS TO, AND PARTICIPATION IN THE APPLICATION: YOUR VIOLATION OF ANY PROVISION OF THE TERMS OF USE, INCLUDING THE PRIVACY POLICY; YOUR VIOLATION OF ANY THIRD-PARTY RIGHT, INCLUDING WITHOUT LIMITATION ANY COPYRIGHT, PROPERTY, PROPRIETARY INTELLECTUAL PROPERTY, OR PRIVACY RIGHT: OR ANY CLAIM THAT YOUR SUBMITTED CONTENT CAUSED DAMAGE TO A THIRD PARTY<br><br>\r\n\r\nTHIS DEFENSE AND INDEMNIFICATION OBLIGATION WILL SURVIVE THESE TERMS OF SERVICE AND YOUR USE OF THE APPLICATION. IF YOU HAVE A DISPUTE WITH ONE OR MORE APPLICATION USERS, YOU FOREVER RELEASE ARTIHC SERVICES LLP (AND ITS OFFICERS, MANAGERS, MEMBERS, DIRECTORS, EMPLOYEES, SUCCESSORS, ASSIGNS, SUBSIDIARIES, AFFILIATES, SERVICE PROFESSIONALS, SUPPLIERS, AGENTS, SUBSIDIARIES, AND EMPLOYEES) FROM ANY AND ALL CLAIMS, DEMANDS AND DAMAGES (ACTUAL AND CONSEQUENTIAL) OF EVERY KIND AND NATURE, KNOWN AND UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF THE APPLICATION AND/OR ANY SUBMITTED CONTENT. THE TERMS OF USE, AND ANY RIGHTS AND LICENSES GRANTED HEREUNDER, MAY NOT BE TRANSFERRED OR ASSIGNED BY YOU, BUT MAY BE ASSIGNED BY ARTIHC SERVICES LLP WITHOUT RESTRICTION. <br><br>\r\n\r\nYou agree that, except as otherwise expressly provided in the Terms of Use, there shall be no third-party beneficiaries to the Terms of Use. You agree that ARTIHC SERVICES LLP may provide you with notices including those regarding changes to the Terms of Use, by email, regular mail, or postings on the Application. The Terms of Use, together with the Privacy Policy and any other legal notices or Additional Policies published by ARTIHC SERVICES LLP on the Application, shall constitute the entire agreement between you and ARTIHC SERVICES LLP LLP concerning the Application. If any provision of the Terms of Use is deemed invalid by court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of the Terms of Use, which shall remain in full force and effect. No waiver of any provision of this these Terms of Use shall be deemed a further or continuing waiver of such term or any other term, and ARTIHC SERVICES LLP failure to assert any right or provision under these Terms of Use shall not constitute a waiver of such right or provision. You agree that any cause of action arising out of or related to the Application must commence within one (1) year after the cause of action accrues. Otherwise, such cause of action is permanently barred.<br><br>\r\n\r\nThe section headings in the Terms of Use are for convenience only and have no legal or contractual effect.\r\n', '2020-06-24 14:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` text NOT NULL,
  `logo` text NOT NULL,
  `dsc` text NOT NULL,
  `dsc_short` text NOT NULL,
  `is_show` tinyint(4) NOT NULL DEFAULT '0',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `logo`, `dsc`, `dsc_short`, `is_show`, `time_created`) VALUES
(1, 'Electrician', '90468â€”Pngtreeâ€”electrician_professional_illustration_4763836.png', 'Executing plans of electrical wiring for well functioning lighting, intercom and other electrical systems', 'Executing plans of electrical wiring for well functioning lighting, intercom and other electrical systems', 1, '2020-06-24 14:22:39'),
(2, 'Painter', '49685painter-2204201-1838546.png', 'Preparing painting surfaces by washing walls, repairing holes, or removing old paint. Mixing, matching, and applying paints and other finishes to various surfaces. Providing decorative and faux finishes as the project requires', 'Preparing painting surfaces by washing walls, repairing holes, or removing old paint. Mixing, matching, and applying paints and other finishes to various surfaces. Providing decorative and faux finishes as the project requires', 1, '2020-06-24 14:22:39'),
(3, 'Salon', '70819salon.png', 'A beauty salon is an establishment that offers a variety of cosmetic treatments and cosmetic services for men and women. Beauty salons may offer a variety of services including professional hair cutting and styling, manicures and pedicures, and often cosmetics, makeup and makeovers.', 'A beauty salon is an establishment that offers a variety of cosmetic treatments and cosmetic services for men and women. Beauty salons may offer a variety of services including professional hair cutting and styling, manicures and pedicures, and often cosmetics, makeup and makeovers.', 0, '2020-06-24 14:22:39'),
(4, 'Carpenter', '37731carpenter.png', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 0, '2020-06-24 14:22:39'),
(5, 'Car', '87039â€”Pngtreeâ€”electrician_professional_illustration_4763836.png', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 0, '2020-06-24 14:22:39'),
(6, 'Mason', '38536painter-2204201-1838546.png', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 0, '2020-06-24 14:22:39'),
(7, 'Cleaning', '31826salon.png', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 0, '2020-06-24 14:22:39'),
(8, 'Fitness', '32909carpenter.png', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 0, '2020-06-24 14:22:39'),
(9, 'Massage', '25226painter-2204201-1838546.png', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 'Carpenters are skilled artisans who construct, erect, install and renovate structures made of wood and other materials, ranging from kitchen cabinets to building frameworks.', 0, '2020-06-24 14:22:39'),
(10, 'Appliance Repair', '65277â€”Pngtreeâ€”electrician_professional_illustration_4763836.png', 'Responsible for greeting customers at car wash, taking orders, washing vehicles, and vacuuming interiors. Uses cloths, hoses, chemicals, and water to clean and detail vehicle.', 'Responsible for greeting customers at car wash, taking orders, washing vehicles, and vacuuming interiors. Uses cloths, hoses, chemicals, and water to clean and detail vehicle.', 0, '2020-06-24 14:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `category_image`
--

CREATE TABLE `category_image` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `image` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_image`
--

INSERT INTO `category_image` (`id`, `category_id`, `image`, `time_created`) VALUES
(1, 1, '90468item_2871469_546.jpg', '2020-06-24 14:22:57'),
(2, 2, '49685images.jpg', '2020-06-24 14:22:57'),
(3, 2, '27046download_(2).jpg', '2020-06-24 14:22:57'),
(4, 2, '89031download_(3).jpg', '2020-06-24 14:22:57'),
(5, 1, '57179depositphotos_30414567-stock-photo-adult-electrician-engineer-worker.jpg', '2020-06-24 14:22:57'),
(6, 1, '58703tool-2766835_960_720.webp', '2020-06-24 14:22:57'),
(7, 3, '99651timely-small-salon-ideas-1400x800-c-1400x800-c-default.jpg', '2020-06-24 14:22:57'),
(8, 3, '562451564402268905Salon-on-Sankey-Road-Play-Salon-Le-Meridien-Bengaluru-5.jpg', '2020-06-24 14:22:57'),
(9, 3, '33687salon.jpg', '2020-06-24 14:22:57'),
(10, 4, '37731download_(6).jpg', '2020-06-24 14:22:57'),
(11, 5, '87039depositphotos_30414567-stock-photo-adult-electrician-engineer-worker.jpg', '2020-06-24 14:22:57'),
(12, 6, '38536depositphotos_30414567-stock-photo-adult-electrician-engineer-worker.jpg', '2020-06-24 14:22:57'),
(13, 7, '31826salon.jpg', '2020-06-24 14:22:57'),
(14, 8, '99509salon.jpg', '2020-06-24 14:22:57'),
(15, 9, '25226salon.jpg', '2020-06-24 14:22:57'),
(16, 10, '65277item_2871469_546.jpg', '2020-06-24 14:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `time_created`) VALUES
(16, 'KANGRA', '2020-06-24 14:23:16'),
(17, 'SHIMLA', '2020-06-24 14:23:16'),
(18, 'UNA', '2020-06-24 14:23:16'),
(19, 'HAMIRPUR', '2020-06-24 14:23:16'),
(20, 'MANDI', '2020-06-24 14:23:16'),
(21, 'BILASPUR', '2020-06-24 14:23:16'),
(22, 'SOLAN', '2020-06-24 14:23:16'),
(23, 'SIRMAUR', '2020-06-24 14:23:16'),
(24, 'KULLU', '2020-06-24 14:23:16'),
(25, 'CHAMBA', '2020-06-24 14:23:16'),
(27, 'Testing Lead', '2020-06-24 14:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `city_location`
--

CREATE TABLE `city_location` (
  `id` int(11) NOT NULL,
  `city_id` int(255) NOT NULL,
  `location` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_location`
--

INSERT INTO `city_location` (`id`, `city_id`, `location`, `time_created`) VALUES
(31, 16, 'Nagrota Surian', '2020-06-24 14:23:34'),
(30, 16, 'Nagrota Bagwan', '2020-06-24 14:23:34'),
(26, 16, 'Baijnath', '2020-06-24 14:23:34'),
(27, 16, 'Kangra', '2020-06-24 14:23:34'),
(41, 16, 'Jaswan', '2020-06-24 14:23:34'),
(40, 16, 'Rakkar', '2020-06-24 14:23:34'),
(25, 16, 'Dharamshala', '2020-06-24 14:23:34'),
(24, 16, 'Palampur', '2020-06-24 14:23:34'),
(39, 16, 'Dhural', '2020-06-24 14:23:34'),
(33, 16, 'Nurpur', '2020-06-24 14:23:34'),
(34, 16, 'Shahpur', '2020-06-24 14:23:34'),
(35, 16, 'Jawali', '2020-06-24 14:23:34'),
(36, 16, 'Jawlamukhi', '2020-06-24 14:23:34'),
(37, 16, 'Jaisinghpur', '2020-06-24 14:23:34'),
(38, 16, 'Dehra Gopipur', '2020-06-24 14:23:34'),
(42, 16, 'Indora', '2020-06-24 14:23:34'),
(43, 16, 'Fatehpur', '2020-06-24 14:23:34'),
(44, 16, 'Dhira', '2020-06-24 14:23:34'),
(45, 16, 'Baroh', '2020-06-24 14:23:34'),
(46, 16, 'Harchakian', '2020-06-24 14:23:34'),
(47, 16, 'Khundian', '2020-06-24 14:23:34'),
(52, 20, 'Jogindarnagar', '2020-06-24 14:23:34'),
(49, 22, 'Baddi', '2020-06-24 14:23:34'),
(50, 22, 'Nalagarh', '2020-06-24 14:23:34'),
(51, 22, 'Solan', '2020-06-24 14:23:34'),
(53, 20, 'Mandi', '2020-06-24 14:23:34'),
(54, 20, 'Padhar', '2020-06-24 14:23:34'),
(55, 20, 'Sarkaghat', '2020-06-24 14:23:34'),
(56, 17, 'Shimla Rural', '2020-06-24 14:23:34'),
(57, 17, 'Shimla Urban', '2020-06-24 14:23:34'),
(58, 17, 'Theog', '2020-06-24 14:23:34'),
(59, 23, 'Nahan', '2020-06-24 14:23:34'),
(60, 23, 'Paonta Sahib', '2020-06-24 14:23:34'),
(61, 21, 'Bilaspur Sadar', '2020-06-24 14:23:34'),
(62, 25, 'Brahmaur', '2020-06-24 14:23:34'),
(63, 25, 'Chamba', '2020-06-24 14:23:34'),
(64, 25, 'Dalhousie', '2020-06-24 14:23:34'),
(65, 24, 'Kullu', '2020-06-24 14:23:34'),
(66, 24, 'Manali', '2020-06-24 14:23:34'),
(67, 24, 'Banjar', '2020-06-24 14:23:34'),
(68, 18, 'Amb', '2020-06-24 14:23:34'),
(69, 18, 'Bangana', '2020-06-24 14:23:34'),
(70, 18, 'Haroli', '2020-06-24 14:23:34'),
(71, 18, 'Una', '2020-06-24 14:23:34'),
(72, 19, 'Bhoranj', '2020-06-24 14:23:34'),
(73, 19, 'Hamirpur', '2020-06-24 14:23:34'),
(74, 19, 'Nadaun', '2020-06-24 14:23:34'),
(75, 19, 'Tira Sujanpur', '2020-06-24 14:23:34'),
(76, 22, 'Arki', '2020-06-24 14:23:34'),
(78, 22, 'Darlaghat', '2020-06-24 14:23:34'),
(79, 22, 'Kasauli', '2020-06-24 14:23:34'),
(80, 20, 'Chachyot', '2020-06-24 14:23:34'),
(81, 20, 'Karsog', '2020-06-24 14:23:34'),
(82, 20, 'Thunag', '2020-06-24 14:23:34'),
(83, 17, 'Rampur', '2020-06-24 14:23:34'),
(84, 17, 'Rohru', '2020-06-24 14:23:34'),
(85, 23, 'Pachhad', '2020-06-24 14:23:34'),
(86, 23, 'Rajgarh', '2020-06-24 14:23:34'),
(87, 23, 'Renuka', '2020-06-24 14:23:34'),
(88, 21, 'Bharari', '2020-06-24 14:23:34'),
(89, 21, 'Ghumarwin', '2020-06-24 14:23:34'),
(90, 21, 'Jhanduta', '2020-06-24 14:23:34'),
(92, 21, 'Naina Devi', '2020-06-24 14:23:34'),
(93, 25, 'Bhattiyat', '2020-06-24 14:23:34'),
(94, 25, 'Chaurah', '2020-06-24 14:23:34'),
(95, 25, 'Saluni', '2020-06-24 14:23:34'),
(96, 24, 'Ani', '2020-06-24 14:23:34'),
(97, 24, 'Nermand', '2020-06-24 14:23:34'),
(98, 19, 'Barsar', '2020-06-24 14:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE `coupon_code` (
  `id` int(255) NOT NULL,
  `coupon_code` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `dsc` text NOT NULL,
  `available_no` int(11) NOT NULL,
  `used` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `min_amount` int(11) NOT NULL,
  `max_discount_amount` int(11) NOT NULL,
  `active` enum('1','0') NOT NULL DEFAULT '1',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`id`, `coupon_code`, `start_date`, `end_date`, `dsc`, `available_no`, `used`, `discount`, `min_amount`, `max_discount_amount`, `active`, `time_created`) VALUES
(1, 'Townz20', '2020-05-18', '2020-09-02', '20', 112, 8, 20, 1000, 200, '1', '2020-06-24 14:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `location` text NOT NULL,
  `pin_code` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `customer_id`, `address`, `city`, `location`, `pin_code`, `time_created`) VALUES
(5, 4, 'abc', 'KANGRA', 'Nagrota Surian', '247667', '2020-06-24 14:24:12'),
(3, 2, 'hno 48 ', 'KANGRA', 'Nagrota Surian', '247667', '2020-06-24 14:24:12'),
(4, 3, 'G-123 Krishna Naga, Delhi', 'KANGRA', 'Nagrota Surian', '110092', '2020-06-24 14:24:12'),
(7, 5, '123', 'Delhi', 'pal', '123456', '2020-06-24 14:24:12'),
(8, 6, 'haj', 'KANGRA', 'Nurpur', '247667', '2020-06-24 14:24:12'),
(9, 7, 'hsj', 'KANGRA', 'Nagrota Surian', '646444', '2020-06-24 14:24:12'),
(10, 8, 'hanaj', 'KANGRA', 'Nagrota Surian', '247667', '2020-06-24 14:24:12'),
(11, 9, 'jwj', 'KANGRA', 'Nagrota Surian', '666666', '2020-06-24 14:24:12'),
(12, 10, 'Hno 48 Lane no. 2', 'KANGRA', 'Nagrota Surian', '222222', '2020-06-24 14:24:12'),
(13, 11, 'b', 'KANGRA', 'Nagrota Surian', '999999', '2020-06-24 14:24:12'),
(14, 12, 'hg', 'KANGRA', 'Nagrota Surian', '888888', '2020-06-24 14:24:12'),
(15, 13, 'Hno. 48 Lane no. 2', 'KANGRA', 'Nagrota Surian', '123456', '2020-06-24 14:24:12'),
(16, 14, 's-44 ugf', 'KANGRA', 'Palampur', '110092', '2020-06-24 14:24:12'),
(17, 15, 'vpo banuri, palampur ', 'KANGRA', 'Palampur', '176061', '2020-06-24 14:24:12'),
(18, 16, 'dfgvgggfff', 'SOLAN', 'Baddi', '284588', '2020-06-24 14:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_app_banner`
--

CREATE TABLE `customer_app_banner` (
  `id` int(255) NOT NULL,
  `image` text NOT NULL,
  `location` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_app_banner`
--

INSERT INTO `customer_app_banner` (`id`, `image`, `location`, `time_created`) VALUES
(1, '85752download_(11).jpg', 'category_top', '2020-06-24 14:24:33'),
(2, '90980images_(1).jpg', 'category_top', '2020-06-24 14:24:33'),
(3, '10885download_(8).jpg', 'category_top', '2020-06-24 14:24:33'),
(4, '96179download_(6).jpg', 'category_middle', '2020-06-24 14:24:33'),
(5, '51371download_(5).jpg', 'category_middle', '2020-06-24 14:24:33'),
(6, '34627download_(4).jpg', 'category_middle', '2020-06-24 14:24:33'),
(7, '20990images_(2).jpg', 'category_lower', '2020-06-24 14:24:33'),
(8, '70717download_(7).jpg', 'category_lower', '2020-06-24 14:24:33'),
(9, '30612download_(10).jpg', 'category_lower', '2020-06-24 14:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `customer_basic_data`
--

CREATE TABLE `customer_basic_data` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_basic_data`
--

INSERT INTO `customer_basic_data` (`id`, `heading`, `content`, `time_created`) VALUES
(1, 'faq', '<p>FAQ</p>', '2020-06-24 14:24:55'),
(2, 'tnc', '<p>Terms and Condition</p>', '2020-06-24 14:24:55'),
(3, 'Need Help', '<p>Need Help</p>', '2020-06-24 14:24:55'),
(4, 'Home Page Note', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2020-06-24 14:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `token` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `sphone` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `profile_image` text NOT NULL,
  `address_id` int(11) NOT NULL,
  `referrer_code` text NOT NULL,
  `referrer_code_used` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `isFirstBooking` tinyint(4) NOT NULL DEFAULT '0',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `name`, `token`, `phone`, `sphone`, `email`, `profile_image`, `address_id`, `referrer_code`, `referrer_code_used`, `active`, `isFirstBooking`, `time_created`) VALUES
(3, 'Chandan', 'fNcN9apCTta3-c_CGobHtx:APA91bF3okJAV1CIDPp0mp21h9pPaSYGaXDHnW3YMFDdRo004pLW-O-nzK1T7d_Fyrz3YX60at3jnqFg10kr1zSgrpmthNQ784Wny7pJn2ld7MZNjh23nYJNlnYpg9e0EHNAP4RSyw5a', '7042040468', '7888888888', 'chandan.sharma7539@gmail.com', 'https://vgeekersinfotech.com/townz/dashboard/assets/images/customer_profile/619193.jpg', 4, 'TWZCR3', 'TWZCR2', 1, 0, '2020-06-24 14:25:15'),
(4, 'Amit Kumar', 'ctZ_tO11SxSwP889Wwxrh7:APA91bG37nlCKkXWUz-GSlqTd5qTFstbjJyocfgaOhRHKdkdD0353qToW5bEa2XS4O7B8ZTkKo_g7WhfmzlIMwbp8QbJuVh6cNuEzGgHW0ZK-yoirBar9ykf-3dcYGUp801HIB9gvTTw', '7042009850', '', 'amitjaat66966@gmail.com', '', 5, 'TWZCR4', '', 1, 0, '2020-06-24 14:25:15'),
(2, 'Amit Kumar', 'dUpSXlPaRGqqVdJCJ240uM:APA91bE2_imtjWauMcemGcb3Sfp9IOR8Ujk-gBrJcggUdPbUhXQWmUt-J1rL7_i54sYwUMSbaeWObk5iXW_BsWa8-I3yZ1z7jaCgKYK0lU9IjrEcuf8hAujQTViW0g6aViGYSxPo0NnC', '8218512254', '7042009850', 'amitkumar66966@gmail.com', 'https://vgeekersinfotech.com/townz/dashboard/assets/images/customer_profile/378852.jpg', 3, 'TWZCR2', 'TWZCR1', 1, 0, '2020-06-24 14:25:15'),
(14, 'Akash RASTOGI Customer', 'fqMSwwjuSgSvw9rd03uXp6:APA91bHSXTqxlt_Blsk-Y8SaZxEY-WECkE4Odahz3FnTvOoq4_K0c8pTrOiybP83NrzeRfnr24U7s398YzudHuCk_eKWQWDiOiLrH2ExwXavQpaW3Mssg2PypFpeijWAz__GMmvn4IcQ', '8287150813', '9711127735', 'rustagiakash@hotmail.com', '', 16, 'TWZCR14', '', 1, 0, '2020-06-24 14:25:15'),
(13, 'Amit Kumar', 'dUpSXlPaRGqqVdJCJ240uM:APA91bE2_imtjWauMcemGcb3Sfp9IOR8Ujk-gBrJcggUdPbUhXQWmUt-J1rL7_i54sYwUMSbaeWObk5iXW_BsWa8-I3yZ1z7jaCgKYK0lU9IjrEcuf8hAujQTViW0g6aViGYSxPo0NnC', '8218512255', '', '', '', 15, 'TWZCR13', 'TWZCR3', 1, 0, '2020-06-24 14:25:15'),
(15, 'Akshay Dogra', 'dklOSUs2TDOw6TeM7bpvwU:APA91bHzaospO6q5euolIiheCwiLa3pobGo6MFrNu6JQuRBLaFCeFPRq7svpLerpeBdwKdUQrjop52kv_B3zKGk2YoCmrS9_syYDEDmcFn_WRAcL19emDvHM6sPbPq5ac3sRXHPDcZbj', '8766270884', '', 'akshaydogra321@gmail.com', '', 17, 'TWZCR15', '', 1, 0, '2020-06-24 14:25:15'),
(16, 'nitin', 'eNBKOip-Qya13GHdMb1eKL:APA91bHy3F-QRX55pKwEb1vRPpz1l5rn8amL0YJatyKbjjPAozqi2LJfbAAbk5VyJILM6rqn_mrG3lt1-Qmx-daC_Zu3QmpRjOP6JmJsk6isunEugzAAWcekF0uYfO1ip_czwOXGKOWU', '8527927360', '', '', '', 18, 'TWZCR16', '', 1, 0, '2020-06-24 14:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `customer_notification`
--

CREATE TABLE `customer_notification` (
  `id` int(255) NOT NULL,
  `alert` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_notification`
--

INSERT INTO `customer_notification` (`id`, `alert`, `user_id`, `created_at`, `modified_at`) VALUES
(133, 'Recharge Details\nRecharge of Rs 500 is Failed', 16, '2020-06-24 11:53:11', '2020-06-24 11:53:11'),
(132, 'Recharge Details\nRecharge of Rs 500 is Successfull', 14, '2020-06-23 16:37:06', '2020-06-23 16:37:06'),
(131, 'Recharge Details\nRecharge of Rs 500 is Failed', 14, '2020-06-23 16:36:50', '2020-06-23 16:36:50'),
(130, 'Recharge Details\nRecharge of Rs 500 is Successfull', 3, '2020-06-23 16:35:11', '2020-06-23 16:35:11'),
(129, 'Booking Completed\nYour Booking Has Been Completed... Thank You !!!', 2, '2020-06-22 17:24:07', '2020-06-22 17:24:07'),
(128, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 15:48:02', '2020-06-22 15:48:02'),
(127, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 3, '2020-06-22 15:35:36', '2020-06-22 15:35:36'),
(126, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 15:33:56', '2020-06-22 15:33:56'),
(125, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 3, '2020-06-22 15:28:31', '2020-06-22 15:28:31'),
(123, 'Credit Added\n470 Points redeemed and 235 Rs is added to wallet', 3, '2020-06-22 15:07:34', '2020-06-22 15:07:34'),
(124, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 15:26:54', '2020-06-22 15:26:54'),
(122, 'Recharge Details\nRecharge of Rs 500 is Successfull', 3, '2020-06-22 15:07:12', '2020-06-22 15:07:12'),
(121, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 14:57:33', '2020-06-22 14:57:33'),
(120, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 14:54:27', '2020-06-22 14:54:27'),
(119, 'Credit Added\n10 Points has been added to your account', 3, '2020-06-22 14:51:34', '2020-06-22 14:51:34'),
(118, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 14:50:39', '2020-06-22 14:50:39'),
(117, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 14:42:51', '2020-06-22 14:42:51'),
(116, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 14:39:41', '2020-06-22 14:39:41'),
(115, 'Booking Cancelled\nYour Booking Has Been Cancelled... Thank You !!!', 2, '2020-06-22 12:56:10', '2020-06-22 12:56:10'),
(114, 'Booking Status\nBooking Completed \n Online Payment Successfull', 0, '2020-06-22 12:53:30', '2020-06-22 12:53:30'),
(113, 'Booking Status\nBooking Failed \n Wallet Balance Insufficient', 0, '2020-06-22 12:52:46', '2020-06-22 12:52:46'),
(112, 'Booking Status\nBooking Completed \n Online Payment Successfull', 0, '2020-06-21 20:57:07', '2020-06-21 20:57:07'),
(111, 'Query Closed\nYour Query has been closed...Thank You !!!', 2, '2020-06-21 20:14:47', '2020-06-21 20:14:47'),
(110, 'Query Closed\nYour Query has been closed...Thank You !!!', 2, '2020-06-21 20:08:47', '2020-06-21 20:08:47'),
(109, 'Query Closed\nYour Query has been closed...Thank You !!!', 2, '2020-06-21 20:08:37', '2020-06-21 20:08:37'),
(108, 'Query Closed\nYour Query has been closed...Thank You !!!', 2, '2020-06-21 20:07:23', '2020-06-21 20:07:23'),
(107, 'Credit Added\n400 Points has been added to your account', 3, '2020-06-21 19:26:51', '2020-06-21 19:26:51'),
(106, 'Credit Added\n10 Points has been added to your account', 3, '2020-06-21 19:24:42', '2020-06-21 19:24:42'),
(105, 'Credit Added\n10 Points has been added to your account', 4, '2020-06-21 19:24:36', '2020-06-21 19:24:36'),
(104, 'Credit Added\n10 Points has been added to your account', 4, '2020-06-21 19:16:06', '2020-06-21 19:16:06'),
(103, 'Credit Added\n10 Points has been added to your account', 4, '2020-06-21 19:15:01', '2020-06-21 19:15:01'),
(102, 'Recharge Details\nRecharge of Rs 500 is Successfull', 4, '2020-06-21 19:14:41', '2020-06-21 19:14:41'),
(101, 'Query Closed\nYour Query has been closed...Thank You !!!', 4, '2020-06-21 17:52:04', '2020-06-21 17:52:04'),
(100, 'Query Closed\nYour Query has been closed...Thank You !!!', 4, '2020-06-21 17:49:28', '2020-06-21 17:49:28'),
(99, 'ddddddddd\nffffffffffff', 2, '2020-06-21 16:46:46', '2020-06-21 16:46:46'),
(98, 'hiiiiii\nhhhhhhhhhh', 2, '2020-06-21 16:40:55', '2020-06-21 16:40:55'),
(97, 'hiiiiii\nhhhhhhhhhh', 3, '2020-06-21 16:40:55', '2020-06-21 16:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_wallet`
--

CREATE TABLE `customer_wallet` (
  `wallet_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `total_balance` double NOT NULL DEFAULT '0',
  `credit` int(11) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_wallet`
--

INSERT INTO `customer_wallet` (`wallet_id`, `user_id`, `total_balance`, `credit`, `time_created`, `time_updated`) VALUES
(2, 2, 17600, 10, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(3, 3, 14835, 473, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(4, 4, 0, 30, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(5, 5, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(6, 6, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(7, 7, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(8, 8, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(9, 9, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(10, 10, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(11, 11, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(12, 12, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(13, 13, 700, 63, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(14, 14, 500, 10, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(15, 15, 0, 10, '2020-06-24 14:26:36', '2020-06-24 14:26:36'),
(16, 16, 0, 0, '2020-06-24 14:26:36', '2020-06-24 14:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `profile` text NOT NULL,
  `id_proof` text NOT NULL,
  `address_proof` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`id`, `user_id`, `profile`, `id_proof`, `address_proof`, `time_created`) VALUES
(1, 1, '', '', '', '2020-06-24 14:26:55'),
(2, 2, 'https://townz.co.in/dashboard/assets/images/vendor_identity/279162.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/548992.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/369652.jpg', '2020-06-24 14:26:55'),
(3, 3, '', '', '', '2020-06-24 14:26:55'),
(4, 4, '', '', '', '2020-06-24 14:26:55'),
(5, 5, 'https://townz.co.in/dashboard/assets/images/vendor_identity/723345.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/166335.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/670615.jpg', '2020-06-24 14:26:55'),
(6, 6, 'https://townz.co.in/dashboard/assets/images/vendor_identity/959206.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/375806.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/283626.jpg', '2020-06-24 14:26:55'),
(7, 7, 'https://townz.co.in/dashboard/assets/images/vendor_identity/140967.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/709117.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/937067.jpg', '2020-06-24 14:26:55'),
(8, 8, 'https://townz.co.in/dashboard/assets/images/vendor_identity/896638.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/423838.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/389138.jpg', '2020-06-24 14:26:55'),
(9, 9, '', '', '', '2020-06-24 14:26:55'),
(10, 10, 'https://townz.co.in/dashboard/assets/images/vendor_identity/6297110.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/9470710.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/7737010.jpg', '2020-06-24 14:26:55'),
(11, 11, '', '', '', '2020-06-24 14:26:55'),
(12, 12, '', '', '', '2020-06-24 14:26:55'),
(13, 13, 'https://townz.co.in/dashboard/assets/images/vendor_identity/9044413.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/3621413.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/9533113.jpg', '2020-06-24 14:26:55'),
(14, 14, '', '', '', '2020-06-24 14:26:55'),
(15, 15, '', '', '', '2020-06-24 14:26:55'),
(23, 23, '', '', '', '2020-06-24 14:26:55'),
(24, 24, '', '', '', '2020-06-24 14:26:55'),
(25, 25, '', '', '', '2020-06-24 14:26:55'),
(26, 26, '', '', '', '2020-06-24 14:26:55'),
(27, 27, 'https://townz.co.in/dashboard/assets/images/vendor_identity/2738127.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/2461227.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/9809727.jpg', '2020-06-24 14:26:55'),
(28, 28, 'https://townz.co.in/dashboard/assets/images/vendor_identity/8175728.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/8585628.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/6202728.jpg', '2020-06-24 14:26:55'),
(29, 29, 'https://townz.co.in/dashboard/assets/images/vendor_identity/2787229.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/8939229.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/3891529.jpg', '2020-06-24 14:26:55'),
(30, 31, 'https://townz.co.in/dashboard/assets/images/vendor_identity/3253831.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/8713931.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/5294231.jpg', '2020-06-24 14:26:55'),
(31, 32, 'https://townz.co.in/dashboard/assets/images/vendor_identity/7442532.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/3239432.jpg', 'https://townz.co.in/dashboard/assets/images/vendor_identity/7320732.jpg', '2020-06-24 14:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(255) NOT NULL,
  `is_lead` tinyint(1) NOT NULL,
  `category` text NOT NULL,
  `city` text NOT NULL,
  `location` text NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `vendor_name` text NOT NULL,
  `customer_id` int(255) NOT NULL,
  `customerName` text NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `price` double NOT NULL,
  `upperPrice` text NOT NULL,
  `status` text NOT NULL,
  `dsc` text NOT NULL,
  `customer_dsc` text NOT NULL,
  `lowerPrice` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `is_accept` tinyint(1) NOT NULL DEFAULT '0',
  `rejectReason` text NOT NULL,
  `transactionType` int(11) NOT NULL,
  `orderJson` text NOT NULL,
  `orderProduct` text NOT NULL,
  `timeSlot` text NOT NULL,
  `addressId` int(255) NOT NULL,
  `orderAmount` int(255) NOT NULL,
  `netPayAmount` int(255) NOT NULL,
  `couponCode` text NOT NULL,
  `couponId` int(255) NOT NULL,
  `txn_id` int(11) NOT NULL,
  `order_id` text NOT NULL,
  `payment_status` text NOT NULL,
  `rating` double DEFAULT NULL,
  `visiting_date` date NOT NULL,
  `visiting_time` time NOT NULL,
  `isStrike` tinyint(4) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `is_lead`, `category`, `city`, `location`, `user_id`, `vendor_name`, `customer_id`, `customerName`, `name`, `date`, `time`, `price`, `upperPrice`, `status`, `dsc`, `customer_dsc`, `lowerPrice`, `phone`, `address`, `is_accept`, `rejectReason`, `transactionType`, `orderJson`, `orderProduct`, `timeSlot`, `addressId`, `orderAmount`, `netPayAmount`, `couponCode`, `couponId`, `txn_id`, `order_id`, `payment_status`, `rating`, `visiting_date`, `visiting_time`, `isStrike`, `time_created`) VALUES
(1, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '03:07:PM', 320, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br><b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313143</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 12:00 am - 03:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.3400.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Tonwz12</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.3200.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 0, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":2,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"},{\"id\":9,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":10,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":11,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"}]', '12:00 am - 03:00 am', 15, 3400, 3200, 'Tonwz12', 1, 143, 'B1313143', 'Success', NULL, '2020-06-24', '00:00:00', 0, '2020-06-24 14:27:17'),
(2, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '03:14:PM', 150, '', 'Cancelled', '<b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br><b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313145</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 03:00 am - 06:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1700.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Tonwz12</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"},{\"id\":9,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":10,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"}]', '03:00 am - 06:00 am', 15, 1700, 1500, 'Tonwz12', 1, 145, 'B1313145', 'Success', NULL, '2020-06-24', '03:00:00', 0, '2020-06-24 14:27:17'),
(3, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '03:34:PM', 170, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313147</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 12:00 am - 03:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1700.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1700.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":2,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"}]', '12:00 am - 03:00 am', 15, 1700, 1700, '', 0, 147, 'B1313147', 'Success', NULL, '2020-06-24', '00:00:00', 0, '2020-06-24 14:27:17'),
(4, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '03:44:PM', 50, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313149</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 12:00 am - 03:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '12:00 am - 03:00 am', 15, 500, 500, '', 0, 149, 'B1313149', 'Success', NULL, '2020-06-24', '00:00:00', 0, '2020-06-24 14:27:17'),
(5, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '04:08:PM', 150, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313151</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 12:00 am - 03:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1700.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Tonwz12</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":2,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"}]', '12:00 am - 03:00 am', 15, 1700, 1500, 'Tonwz12', 1, 151, 'B1313151', 'Success', NULL, '2020-06-24', '00:00:00', 0, '2020-06-24 14:27:17'),
(6, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '04:17:PM', 150, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313152</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 pm - 11:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1700.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Tonwz12</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":2,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"}]', '09:00 pm - 11:00 pm', 15, 1700, 1500, 'Tonwz12', 1, 152, 'B1313152', 'Success', NULL, '2020-06-24', '21:00:00', 0, '2020-06-24 14:27:17'),
(7, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '04:21:PM', 50, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313155</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 pm - 11:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 pm - 11:00 pm', 15, 500, 500, '', 0, 155, 'B1313155', 'Success', NULL, '2020-06-24', '21:00:00', 0, '2020-06-24 14:27:17'),
(8, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '04:26:PM', 30, '', 'Cancelled', '<b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313159</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 12:00 am - 03:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.300.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.300.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"}]', '12:00 am - 03:00 am', 15, 300, 300, '', 0, 159, 'B1313159', 'Success', NULL, '2020-06-24', '00:00:00', 0, '2020-06-24 14:27:17'),
(9, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '04:39:PM', 50, '', 'Cancelled', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313162</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 12:00 am - 03:00 am</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '12:00 am - 03:00 am', 15, 500, 500, '', 0, 162, 'B1313162', 'Success', NULL, '2020-06-24', '00:00:00', 0, '2020-06-24 14:27:17'),
(10, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '04:40:PM', 100, '', 'Cancelled', '<b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313165</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 pm - 11:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1200.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Townz20</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1000.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 3, '', 1, '', '[{\"id\":2,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":3,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"}]', '09:00 pm - 11:00 pm', 15, 1200, 1000, 'Townz20', 1, 165, 'B1313165', 'Success', NULL, '2020-06-24', '21:00:00', 0, '2020-06-24 14:27:17'),
(11, 1, 'Electrician', 'KANGRA', 'Palampur', NULL, '', 14, 'Akash RASTOGI Customer', 'Electrician', '2020-06-23', '10:03:PM', 50, '', 'Pay. Failed', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Akash RASTOGI Customer</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1414171</span><br><span style=\'line-height:1\'><b>Address </b>: s-44 ugf, Palampur, KANGRA, 110092</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 am - 12:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8287150813', 's-44 ugf', 0, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 am - 12:00 pm', 16, 500, 500, '', 0, 171, 'B1414171', 'Failed', NULL, '2020-06-24', '09:00:00', 0, '2020-06-24 14:27:17'),
(12, 1, 'Electrician', 'KANGRA', 'Palampur', NULL, '', 14, 'Akash RASTOGI Customer', 'Electrician', '2020-06-23', '10:03:PM', 50, '', 'Pay. Failed', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Akash RASTOGI Customer</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1414172</span><br><span style=\'line-height:1\'><b>Address </b>: s-44 ugf, Palampur, KANGRA, 110092</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 am - 12:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8287150813', 's-44 ugf', 0, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 am - 12:00 pm', 16, 500, 500, '', 0, 172, 'B1414172', 'Failed', NULL, '2020-06-24', '09:00:00', 0, '2020-06-24 14:27:17'),
(13, 1, 'Electrician', 'KANGRA', 'Palampur', NULL, '', 14, 'Akash RASTOGI Customer', 'Electrician', '2020-06-23', '10:03:PM', 50, '', 'Pay. Failed', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Akash RASTOGI Customer</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1414173</span><br><span style=\'line-height:1\'><b>Address </b>: s-44 ugf, Palampur, KANGRA, 110092</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 am - 12:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8287150813', 's-44 ugf', 0, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 am - 12:00 pm', 16, 500, 500, '', 0, 173, 'B1414173', 'Failed', NULL, '2020-06-24', '09:00:00', 0, '2020-06-24 14:27:17'),
(14, 1, 'Electrician', 'KANGRA', 'Palampur', NULL, '', 14, 'Akash RASTOGI Customer', 'Electrician', '2020-06-23', '10:03:PM', 50, '', 'Pending', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Akash RASTOGI Customer</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1414174</span><br><span style=\'line-height:1\'><b>Address </b>: s-44 ugf, Palampur, KANGRA, 110092</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 am - 12:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8287150813', 's-44 ugf', 0, '', 0, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 am - 12:00 pm', 16, 500, 500, '', 0, 174, 'B1414174', 'Success', NULL, '2020-06-24', '09:00:00', 0, '2020-06-24 14:27:17'),
(15, 1, 'Electrician', 'KANGRA', 'Palampur', NULL, '', 14, 'Akash RASTOGI Customer', 'Electrician', '2020-06-23', '10:04:PM', 50, '', 'Pending', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Akash RASTOGI Customer</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1414175</span><br><span style=\'line-height:1\'><b>Address </b>: s-44 ugf, Palampur, KANGRA, 110092</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 am - 12:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.500.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs 0</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.500.0</span><br>', '', '8287150813', 's-44 ugf', 0, '', 0, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 am - 12:00 pm', 16, 500, 500, '', 0, 175, 'B1414175', 'Success', NULL, '2020-06-24', '09:00:00', 0, '2020-06-24 14:27:17'),
(16, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', 29, 'Chandan ', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '10:13:PM', 150, '', 'Completed', '<b>Service Name</b>: Servicing <b>Qty.</b>: 1<br><b>Service Name</b>: Ac Switch Box <b>Qty.</b>: 1<br><b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313179</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li><li><span style=\'line-height:0.1\'><b>Ac Switch Box</b> (Qty. : 1, Price : 300)</span></li><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 09:00 am - 12:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1700.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Townz20</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1500.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 2, '', 1, '', '[{\"id\":10,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"},{\"id\":11,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/90575mcb.png\",\"price\":300,\"sub_category_id\":\"1\",\"name\":\"Ac Switch Box\"},{\"id\":33,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"}]', '09:00 am - 12:00 pm', 15, 1700, 1500, 'Townz20', 1, 179, 'B1313179', 'Success', NULL, '2020-06-24', '09:00:00', 0, '2020-06-24 14:27:17'),
(17, 1, 'Electrician', 'KANGRA', 'Nagrota Surian', 29, 'Chandan ', 13, 'Amit Kumar', 'Electrician', '2020-06-23', '10:19:PM', 120, '', 'Completed', '<b>Service Name</b>: Cleaning <b>Qty.</b>: 1<br><b>Service Name</b>: Servicing <b>Qty.</b>: 1<br>', '<span style=\'line-height:1\'><b>Customer Name</b> : Amit Kumar</span><br><span style=\'line-height:1\'><b>Order ID </b>: B1313180</span><br><span style=\'line-height:1\'><b>Address </b>: Hno. 48 Lane no. 2, Nagrota Surian, KANGRA, 123456</span><br><div style=\'margin-top:30px;margin-bottom: 30px\'><h3 style=\'line-height:1\'>Booked Services :</h3><ul><li><span style=\'line-height:0.1\'><b>Cleaning</b> (Qty. : 1, Price : 500)</span></li><li><span style=\'line-height:0.1\'><b>Servicing</b> (Qty. : 1, Price : 900)</span></li></ul></div><span style=\'line-height: 1\'><b>Time Slot</b>: 03:00 pm - 06:00 pm</span><br><span style=\'line-height: 1\'><b>Visiting Date</b>: 2020-06-24</span><br><span style=\'line-height: 1\'><b>Total Price</b>: Rs.1400.0</span><br><span style=\'line-height: 1\'><b>Coupon Applied</b>: Townz20</span><br><span style=\'line-height: 1\'><b>Discount Applied</b>: Rs.200</span><br><span style=\'line-height: 1\'><b>Paid Amount</b>: Rs.1200.0</span><br>', '', '8218512255', 'Hno. 48 Lane no. 2', 2, '', 1, '', '[{\"id\":1,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/73846ac.png\",\"price\":500,\"sub_category_id\":\"1\",\"name\":\"Cleaning\"},{\"id\":2,\"category_id\":\"1\",\"counterValue\":1,\"logo\":\"https://vgeekersinfotech.com/townz/dashboard/assets/images/services/51003ac.png\",\"price\":900,\"sub_category_id\":\"1\",\"name\":\"Servicing\"}]', '03:00 pm - 06:00 pm', 15, 1400, 1200, 'Townz20', 1, 180, 'B1313180', 'Success', 3, '2020-06-24', '15:00:00', 0, '2020-06-24 14:27:17'),
(18, 0, 'Electrician', 'KANGRA', 'Nagrota Surian', NULL, '', 13, 'Kumar', 'Ac Repair', '2020-06-23', '10:37:PM', 100, '12000', 'Completed', 'I want my full house wiring for a 3 floor house', '', '11000', '8218512255', 'Hno. 48 Lane no. 2', 2, '', 0, '', '', '', 15, 0, 0, '', 0, 0, '', '', NULL, '0000-00-00', '00:00:00', 0, '2020-06-24 14:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `alert` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `alert`, `user_id`, `created_at`, `modified_at`) VALUES
(217, 'Document Details\nYour Document Details is Completed', 32, '2020-06-24 12:25:41', '2020-06-24 12:25:41'),
(216, 'Townz\nYour account is Activated by admin', 32, '2020-06-24 11:59:54', '2020-06-24 11:59:54'),
(215, 'Townz\nYour Approval Request is Accepted', 32, '2020-06-24 11:57:44', '2020-06-24 11:57:44'),
(214, 'Booking Completed\nYour Booking Has Been Completed. Thank You !!!', 29, '2020-06-24 11:51:24', '2020-06-24 11:51:24'),
(213, 'Approval Request\nYour Approval Request is Raised', 32, '2020-06-24 11:42:04', '2020-06-24 11:42:04'),
(212, 'Bank Details\nYour Bank Details is Updated', 32, '2020-06-24 11:42:00', '2020-06-24 11:42:00'),
(211, 'Document Details\nYour Document Details is Completed', 32, '2020-06-24 11:41:08', '2020-06-24 11:41:08'),
(210, 'Query Closed\nYour Query has been closed. Thank You !!!', 0, '2020-06-23 17:12:48', '2020-06-23 17:12:48'),
(209, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-23 17:10:43', '2020-06-23 17:10:43'),
(208, 'Lead Accepted\nNew lead is accepted', 31, '2020-06-23 17:10:43', '2020-06-23 17:10:43'),
(207, 'Lead Accepted\nNew lead is accepted', 31, '2020-06-23 17:10:21', '2020-06-23 17:10:21'),
(206, 'Lead Accepted\nNew lead is accepted', 31, '2020-06-23 17:10:03', '2020-06-23 17:10:03'),
(205, 'Townz\nNew Lead Added for you', 31, '2020-06-23 17:07:11', '2020-06-23 17:07:11'),
(204, 'Townz\nNew Lead Added for you', 29, '2020-06-23 17:07:11', '2020-06-23 17:07:11'),
(203, 'Townz\nYour account is Activated by admin', 31, '2020-06-23 17:04:53', '2020-06-23 17:04:53'),
(202, 'Townz\nYour Account is Approved by the admin', 31, '2020-06-23 17:04:46', '2020-06-23 17:04:46'),
(201, 'Approval Request\nYour Approval Request is Raised', 31, '2020-06-23 17:04:34', '2020-06-23 17:04:34'),
(199, 'Document Details\nYour Document Details is Completed', 31, '2020-06-23 17:03:55', '2020-06-23 17:03:55'),
(200, 'Bank Details\nYour Bank Details is Updated', 31, '2020-06-23 17:04:29', '2020-06-23 17:04:29'),
(198, 'Booking Completed\nYour Booking Has Been Completed. Thank You !!!', 29, '2020-06-23 16:52:43', '2020-06-23 16:52:43'),
(197, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-23 16:52:15', '2020-06-23 16:52:15'),
(196, 'Recharge Details\nRecharge of Rs 1500 is Failed', 29, '2020-06-23 16:49:29', '2020-06-23 16:49:29'),
(195, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 16:49:20', '2020-06-23 16:49:20'),
(194, 'Townz\nNew Electrician Booking Added for you', 10, '2020-06-23 16:49:20', '2020-06-23 16:49:20'),
(193, 'Townz\nNew Electrician Booking Added for you', 6, '2020-06-23 16:49:19', '2020-06-23 16:49:19'),
(192, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-23 16:44:58', '2020-06-23 16:44:58'),
(191, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 16:43:47', '2020-06-23 16:43:47'),
(190, 'Townz\nNew Electrician Booking Added for you', 10, '2020-06-23 16:43:47', '2020-06-23 16:43:47'),
(189, 'Townz\nNew Electrician Booking Added for you', 6, '2020-06-23 16:43:47', '2020-06-23 16:43:47'),
(188, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 16:34:46', '2020-06-23 16:34:46'),
(187, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 16:34:01', '2020-06-23 16:34:01'),
(186, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 11:10:03', '2020-06-23 11:10:03'),
(185, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 11:09:04', '2020-06-23 11:09:04'),
(184, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 10:56:22', '2020-06-23 10:56:22'),
(183, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 10:52:00', '2020-06-23 10:52:00'),
(182, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 10:47:23', '2020-06-23 10:47:23'),
(181, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 10:38:39', '2020-06-23 10:38:39'),
(180, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 10:14:46', '2020-06-23 10:14:46'),
(179, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 10:05:03', '2020-06-23 10:05:03'),
(178, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 09:44:11', '2020-06-23 09:44:11'),
(177, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-23 09:38:19', '2020-06-23 09:38:19'),
(176, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:31:13', '2020-06-22 20:31:13'),
(175, 'Townz\nSorry, Your Accepted Booking is Cancelled by the Customer!!! Refund will be credit to your wallet in 24 hours', 29, '2020-06-22 20:25:06', '2020-06-22 20:25:06'),
(174, 'Booking Completed\nYour Booking Has Been Completed. Thank You !!!', 29, '2020-06-22 20:24:57', '2020-06-22 20:24:57'),
(173, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 20:20:13', '2020-06-22 20:20:13'),
(172, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 20:19:54', '2020-06-22 20:19:54'),
(171, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:14:28', '2020-06-22 20:14:28'),
(170, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:11:55', '2020-06-22 20:11:55'),
(169, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:06:44', '2020-06-22 20:06:44'),
(168, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:05:29', '2020-06-22 20:05:29'),
(167, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:04:38', '2020-06-22 20:04:38'),
(166, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 20:01:36', '2020-06-22 20:01:36'),
(165, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 19:59:01', '2020-06-22 19:59:01'),
(164, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 19:52:25', '2020-06-22 19:52:25'),
(163, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 19:30:38', '2020-06-22 19:30:38'),
(162, 'Townz\nSorry, Your Accepted Booking is Cancelled by the Customer!!! Refund will be credit to your wallet in 24 hours', 29, '2020-06-22 19:29:55', '2020-06-22 19:29:55'),
(161, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 19:18:36', '2020-06-22 19:18:36'),
(160, 'Townz\nNew Electrician Booking Added for you', 29, '2020-06-22 19:08:01', '2020-06-22 19:08:01'),
(159, 'Query Closed\nYour Query has been closed. Thank You !!!', 0, '2020-06-22 18:56:24', '2020-06-22 18:56:24'),
(158, 'Townz\nNew \".$category.\" Booking Added for you', 29, '2020-06-22 18:54:28', '2020-06-22 18:54:28'),
(157, 'Townz\nNew \".$category.\" Booking Added for you', 29, '2020-06-22 18:53:48', '2020-06-22 18:53:48'),
(156, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 18:27:45', '2020-06-22 18:27:45'),
(155, 'Townz\nSorry, Your Accepted Booking is Cancelled by the Customer!!! Refund will be credit to your wallet in 24 hours', 29, '2020-06-22 17:27:01', '2020-06-22 17:27:01'),
(154, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 17:25:48', '2020-06-22 17:25:48'),
(153, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 17:23:18', '2020-06-22 17:23:18'),
(152, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 17:09:16', '2020-06-22 17:09:16'),
(151, 'Lead Accepted\nNew lead is accepted', 29, '2020-06-22 17:06:48', '2020-06-22 17:06:48'),
(150, 'Townz\nNew Booking Added for you', 29, '2020-06-22 17:04:36', '2020-06-22 17:04:36'),
(149, 'Townz\nNew Booking Added for you', 29, '2020-06-22 17:00:57', '2020-06-22 17:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `order_txn`
--

CREATE TABLE `order_txn` (
  `id` int(255) NOT NULL,
  `wallet_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `amount` text NOT NULL,
  `name` text NOT NULL,
  `order_id` text NOT NULL,
  `active` enum('0','1') NOT NULL,
  `time` text NOT NULL,
  `type` text NOT NULL,
  `txn_id` int(255) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `email_id` text,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_txn`
--

INSERT INTO `order_txn` (`id`, `wallet_id`, `date`, `amount`, `name`, `order_id`, `active`, `time`, `type`, `txn_id`, `currency`, `status`, `contact_no`, `email_id`, `description`) VALUES
(1, 2, '2020-06-03', '20000000', 'Nitin Rathi', 'R221', '0', '11:51:59 AM', 'recharge', 1, 'INR', 'Failed', 2147483647, '', ''),
(2, 2, '2020-06-03', '200', 'Nitin Rathi', 'E221', '0', '11:55:17 AM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 1'),
(3, 5, '2020-06-06', '500', 'Akash RASTOGI', 'R552', '0', '01:26:34 PM', 'recharge', 2, 'INR', 'Failed', 2147483647, 'rustagiakash@hotmail.com', ''),
(4, 7, '2020-06-06', '200', 'Akash RASTOGI', 'E773', '0', '02:02:34 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 3'),
(5, 7, '2020-06-06', '100', 'Akash RASTOGI', 'E774', '0', '02:10:07 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 4'),
(6, 7, '2020-06-06', '500', 'Akash RASTOGI', 'R773', '0', '02:26:43 PM', 'recharge', 3, 'INR', 'Failed', 2147483647, 'rustagiakash@hotmail.com', ''),
(7, 10, '2020-06-07', '500', 'Akash', 'R10104', '0', '10:46:38 AM', 'recharge', 4, 'INR', 'Failed', 2147483647, 'rustagiakash@hotmail.com', ''),
(8, 13, '2020-06-07', '500', 'Amit kumar', 'R13135', '0', '09:58:57 PM', 'recharge', 5, 'INR', 'Success', 2147483647, 'amitkashyap777@gmail.com', ''),
(9, 29, '2020-06-22', '45', 'Chandan ', 'E292930', '0', '01:39:03 AM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 30'),
(10, 29, '2020-06-22', '190', 'Chandan ', 'E292938', '0', '07:56:37 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 38'),
(11, 29, '2020-06-22', '290', 'Chandan ', 'E292943', '0', '09:15:18 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 43'),
(12, 29, '2020-06-22', '100', 'Chandan ', 'E292942', '0', '10:36:48 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 42'),
(13, 29, '2020-06-22', '280', 'Chandan ', 'E292946', '0', '10:39:06 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 46'),
(14, 29, '2020-06-22', '220', 'Chandan ', 'E292936', '0', '10:53:18 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 36'),
(15, 29, '2020-06-22', '280', 'Chandan ', 'E292946', '0', '10:55:37 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 46'),
(16, 29, '2020-06-22', '280', 'Chandan ', 'RF29296', '0', '10:57:01 PM', '', 6, '', 'Success', 2147483647, 'chandan112@gmail.com', '280 Refund Added'),
(17, 29, '2020-06-22', '5.5', 'Chandan ', 'E292934', '0', '11:57:34 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 34'),
(18, 29, '2020-06-23', '100', 'Chandan ', 'RF29297', '0', '12:59:55 AM', 'Refund', 7, '', 'Success', 2147483647, 'chandan112@gmail.com', '100 Refund Added'),
(19, 29, '2020-06-23', '310', 'Chandan ', 'E292960', '0', '01:49:54 AM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 60'),
(20, 29, '2020-06-23', '170', 'Chandan ', 'E292948', '0', '01:50:13 AM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 48'),
(21, 29, '2020-06-23', '170', 'Chandan ', 'RF29298', '0', '01:55:06 AM', 'Refund', 8, '', 'Success', 2147483647, 'chandan112@gmail.com', '170 Refund Added'),
(22, 29, '2020-06-23', '150', 'Chandan ', 'E292916', '0', '10:14:58 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 16'),
(23, 29, '2020-06-23', '1500', 'Chandan ', 'R29299', '0', '10:19:29 PM', '', 9, 'INR', 'Failed', 2147483647, 'chandan112@gmail.com', ''),
(24, 29, '2020-06-23', '120', 'Chandan ', 'E292917', '0', '10:22:15 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 17'),
(25, 30, '2020-06-23', '100', 'Akshay Dogra', 'E313018', '0', '10:40:03 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 18'),
(26, 30, '2020-06-23', '100', 'Akshay Dogra', 'E313018', '0', '10:40:11 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 18'),
(27, 29, '2020-06-23', '100', 'Chandan ', 'E292918', '0', '10:40:33 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 18'),
(28, 30, '2020-06-23', '100', 'Akshay Dogra', 'E313018', '0', '10:40:38 PM', 'expense', 0, 'INR', 'Success', NULL, NULL, 'Lead Id 18');

-- --------------------------------------------------------

--
-- Table structure for table `order_txn_customer`
--

CREATE TABLE `order_txn_customer` (
  `id` int(255) NOT NULL,
  `wallet_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `amount` text NOT NULL,
  `name` text NOT NULL,
  `order_id` text NOT NULL,
  `active` enum('0','1') NOT NULL,
  `time` text NOT NULL,
  `type` text NOT NULL,
  `txn_id` int(255) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `email_id` text,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_txn_customer`
--

INSERT INTO `order_txn_customer` (`id`, `wallet_id`, `date`, `amount`, `name`, `order_id`, `active`, `time`, `type`, `txn_id`, `currency`, `status`, `contact_no`, `email_id`, `description`) VALUES
(136, 2, '2020-06-23', '3100.0', 'Amit Kumar', 'B22136', '0', '01:41:55 AM', 'order_wallet', 136, 'INR', 'Success', 2147483647, '', 'processing'),
(135, 2, '2020-06-23', '3900', 'Electrician', 'RF22135', '0', '01:41:30 AM', 'Refund', 135, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '3900 Refund Added'),
(134, 2, '2020-06-23', '3100', 'Electrician', 'RF22134', '0', '01:41:24 AM', 'Refund', 134, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '3100 Refund Added'),
(133, 2, '2020-06-23', '3100.0', 'Amit Kumar', 'B22133', '0', '01:36:44 AM', 'order_wallet', 133, 'INR', 'Success', 2147483647, '', 'processing'),
(132, 2, '2020-06-23', '3700.0', 'Amit Kumar', 'B22132', '0', '01:35:29 AM', 'order_wallet', 132, 'INR', 'Success', 2147483647, '', 'processing'),
(131, 3, '2020-06-23', '3400', 'Electrician', 'RF33131', '0', '01:35:20 AM', 'Refund', 131, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '3400 Refund Added'),
(130, 2, '2020-06-23', '2700', 'Electrician', 'RF22130', '0', '01:34:57 AM', 'Refund', 130, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '2700 Refund Added'),
(129, 3, '2020-06-23', '3200.0', 'Chandan', 'B33129', '0', '01:34:38 AM', 'order_wallet', 129, 'INR', 'Success', 2147483647, '', 'processing'),
(128, 2, '2020-06-23', '2500.0', 'Amit Kumar', 'B22128', '0', '01:31:26 AM', 'order_wallet', 128, 'INR', 'Success', 2147483647, '', 'processing'),
(127, 2, '2020-06-23', '3600', 'Electrician', 'RF22127', '0', '01:30:56 AM', 'Refund', 127, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '3600 Refund Added'),
(126, 2, '2020-06-23', '3600', 'Electrician', 'RF22126', '0', '01:30:50 AM', 'Refund', 126, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '3600 Refund Added'),
(124, 3, '2020-06-23', '2900.0', 'Chandan', 'B33124', '0', '01:22:15 AM', 'Booking', 124, 'INR', 'Success', 2147483647, '', 'processing'),
(125, 2, '2020-06-23', '3600.0', 'Amit Kumar', 'B22125', '0', '01:28:56 AM', 'order_wallet', 125, 'INR', 'Success', 2147483647, '', 'processing'),
(123, 2, '2020-06-23', '3400.0', 'Amit Kumar', 'B22123', '0', '01:00:38 AM', 'order_wallet', 123, 'INR', 'Success', 2147483647, '', 'processing'),
(122, 3, '2020-06-23', '1000', 'Electrician', 'RF33122', '0', '12:59:55 AM', 'Refund', 122, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '1000 Refund Added'),
(121, 2, '2020-06-23', '5300', 'Electrician', 'RF22121', '0', '12:59:49 AM', 'Refund', 121, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '5300 Refund Added'),
(120, 2, '2020-06-23', '5100.0', 'Amit Kumar', 'B22120', '0', '12:48:26 AM', 'order_wallet', 120, 'INR', 'Success', 2147483647, '', 'processing'),
(119, 2, '2020-06-23', '1900', 'Electrician', 'RF22119', '0', '12:47:02 AM', 'Refund', 119, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '1900 Refund Added'),
(118, 2, '2020-06-23', '1900', 'Electrician', 'RF22118', '0', '12:46:52 AM', 'Refund', 118, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '1900 Refund Added'),
(117, 2, '2020-06-23', '1900', 'Electrician', 'RF22117', '0', '12:46:48 AM', 'Refund', 117, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '1900 Refund Added'),
(116, 2, '2020-06-23', '5700', 'Electrician', 'RF22116', '0', '12:46:42 AM', 'Refund', 116, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '5700 Refund Added'),
(115, 3, '2020-06-23', '100.0', 'Chandan', 'B33115', '0', '12:46:12 AM', 'order_failed', 115, 'INR', 'Failed', 2147483647, '', 'processing'),
(114, 2, '2020-06-23', '5500.0', 'Amit Kumar', 'B22114', '0', '12:38:01 AM', 'order_wallet', 114, 'INR', 'Success', 2147483647, '', 'processing'),
(113, 3, '2020-06-23', '1700.0', 'Chandan', 'B33113', '0', '12:24:23 AM', 'order_wallet', 113, 'INR', 'Success', 2147483647, '', 'processing'),
(112, 3, '2020-06-23', '8300.0', 'Chandan', 'B33112', '0', '12:23:43 AM', 'Booking', 112, 'INR', 'Success', 2147483647, '', 'processing'),
(111, 3, '2020-06-22', '400', 'Chandan', 'C33111', '0', '11:09:27 PM', 'Pt. Earned', 111, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '400 Points added'),
(110, 0, '2020-06-22', '400', '', 'C1110', '0', '11:09:23 PM', 'Pt. Earned', 110, '', 'Success', 0, '', '400 Points added'),
(109, 3, '2020-06-22', '10', 'Chandan', 'C33109', '0', '11:08:04 PM', 'Pt. Earned', 109, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '10 Points added'),
(108, 2, '2020-06-22', '2800', 'Electrician', 'RF22108', '0', '10:57:01 PM', 'Refund', 108, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '2800 Refund Added'),
(107, 2, '2020-06-22', '2800', 'Electrician', 'RF22107', '0', '10:39:48 PM', 'Refund', 107, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '2800 Refund Added'),
(106, 2, '2020-06-22', '2800.0', 'Amit Kumar', 'B22106', '0', '10:34:26 PM', 'order_wallet', 106, 'INR', 'Success', 2147483647, '', 'processing'),
(105, 2, '2020-06-22', '1900.0', 'Amit Kumar', 'B22105', '0', '10:30:47 PM', 'order_wallet', 105, 'INR', 'Success', 2147483647, '', 'processing'),
(104, 2, '2020-06-22', '1700.0', 'Amit Kumar', 'B22104', '0', '09:42:52 PM', 'order_wallet', 104, 'INR', 'Success', 2147483647, '', 'processing'),
(103, 2, '2020-06-22', '3100', 'Electrician', 'RF22103', '0', '09:17:51 PM', 'Refund', 103, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '3100 Refund Added'),
(102, 2, '2020-06-22', '2900.0', 'Amit Kumar', 'B22102', '0', '09:13:29 PM', 'order_wallet', 102, 'INR', 'Success', 2147483647, '', 'processing'),
(101, 3, '2020-06-22', '1000', 'Electrician', 'RF33101', '0', '09:05:25 PM', 'Refund', 101, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '1000 Refund Added'),
(100, 2, '2020-06-22', '1900', 'Electrician', 'RF22100', '0', '09:03:56 PM', 'Refund', 100, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '1900 Refund Added'),
(99, 12, '0000-00-00', '100', '', 'RF123', '0', '', 'Refund', 12, '', 'Success', 0, '', '12'),
(98, 0, '2020-06-22', '3400', 'Electrician', 'RF3399', '0', '08:58:21 PM', 'Refund', 99, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '3400 Refund Added'),
(96, 3, '2020-06-22', '1000.0', 'Chandan', 'B3397', '0', '08:49:34 PM', 'order_failed', 97, 'INR', 'Failed', 2147483647, '', 'processing'),
(97, 0, '2020-06-22', '1900', 'Electrician', 'RF2298', '0', '08:56:54 PM', 'Refund', 98, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '1900 Refund Added'),
(95, 3, '2020-06-22', '1500.0', 'Chandan', 'B3396', '0', '08:46:40 PM', 'order_failed', 96, 'INR', 'Failed', 2147483647, '', 'processing'),
(94, 3, '2020-06-22', '1000.0', 'Chandan', 'B3395', '0', '08:40:55 PM', 'order_wallet', 95, 'INR', 'Success', 2147483647, '', 'processing'),
(93, 3, '2020-06-22', '235', 'Chandan', 'C3394', '0', '08:37:33 PM', 'points redeem', 94, 'INR', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '470 Points is redeemed to wallet as 235 Rs'),
(92, 3, '2020-06-22', '500', 'Chandan', 'R3393', '0', '08:37:12 PM', 'Recharge', 93, 'INR', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', ''),
(91, 0, '2020-06-22', '1900', 'Electrician', 'RF2292', '0', '08:27:33 PM', 'Refund', 92, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '1900 Refund Added'),
(90, 0, '2020-06-22', '2200', 'Electrician', 'RF2291', '0', '08:24:27 PM', 'Refund', 91, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '2200 Refund Added'),
(89, 3, '2020-06-22', '10', 'Chandan', 'C3390', '0', '08:21:34 PM', 'points added', 90, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '10 Points added'),
(88, 0, '2020-06-22', '', 'Electrician', 'RF289', '0', '08:20:28 PM', 'Refund', 89, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '2100 Refund Added'),
(87, 2, '2020-06-22', '1900.0', 'Amit Kumar', 'B2288', '0', '07:58:45 PM', 'order_wallet', 88, 'INR', 'Success', 2147483647, '', 'processing'),
(86, 2, '2020-06-22', '1900.0', 'Amit Kumar', 'B2287', '0', '07:54:02 PM', 'order_payment', 87, 'INR', 'Success', 2147483647, '', 'processing'),
(85, 2, '2020-06-22', '2200.0', 'Amit Kumar', 'B2286', '0', '06:23:20 PM', 'order_payment', 86, 'INR', 'Success', 2147483647, '', 'processing'),
(84, 2, '2020-06-22', '2200.0', 'Amit Kumar', 'B2285', '0', '06:22:45 PM', 'Order failed', 85, 'INR', 'Failed', 2147483647, '', 'processing'),
(83, 3, '2020-06-22', '3200.0', 'Chandan', 'B3384', '0', '02:27:07 AM', 'order_payment', 84, 'INR', 'Success', 2147483647, '', 'processing'),
(82, 3, '2020-06-22', '400', 'Chandan', 'C3383', '0', '12:56:51 AM', 'points added', 83, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '400 Points added'),
(81, 4, '2020-06-22', '10', 'Amit Kumar', 'C4482', '0', '12:54:36 AM', 'points added', 82, '', 'Success', 2147483647, 'amitjaat66966@gmail.com', '10 Points added'),
(80, 3, '2020-06-22', '10', 'Chandan', 'C3381', '0', '12:54:32 AM', 'points added', 81, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '10 Points added'),
(79, 4, '2020-06-22', '10', 'Amit Kumar', 'C4480', '0', '12:46:06 AM', 'points added', 80, '', 'Success', 2147483647, 'amitjaat66966@gmail.com', '10 Points added'),
(78, 4, '2020-06-22', '10', 'Amit Kumar', 'C4479', '0', '12:45:01 AM', 'points added', 79, '', 'Success', 2147483647, 'amitjaat66966@gmail.com', '10 Points added'),
(77, 3, '2020-06-22', '500', 'Chandan', 'R4378', '0', '12:44:40 AM', '', 78, 'INR', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', ''),
(76, 2, '2020-06-21', '10', 'Amit Kumar', 'C2277', '0', '09:44:11 PM', 'points added', 77, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '10 Points added'),
(75, 2, '2020-06-21', '3200.0', 'Amit Kumar', 'B2276', '0', '09:16:57 PM', 'order_payment', 76, 'INR', 'Success', 2147483647, '', 'processing'),
(74, 2, '2020-06-21', '500', 'Amit Kumar', 'R2275', '0', '09:10:13 PM', '', 75, 'INR', 'Success', 2147483647, 'amitkumar66966@gmail.com', ''),
(73, 1, '2020-06-21', '10', 'Chandan', 'C1174', '0', '08:34:21 PM', 'points added', 74, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '10 Points added'),
(137, 2, '2020-06-23', '3100', 'Electrician', 'RF22137', '0', '01:43:53 AM', 'Refund', 137, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '3100 Refund Added'),
(138, 2, '2020-06-23', '3100.0', 'Amit Kumar', 'B22138', '0', '01:44:18 AM', 'order_wallet', 138, 'INR', 'Success', 2147483647, '', 'processing'),
(139, 3, '2020-06-23', '1900', 'Electrician', 'RF33139', '0', '01:55:06 AM', 'Refund', 139, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '1900 Refund Added'),
(140, 3, '2020-06-23', '8300', 'Electrician', 'RF33140', '0', '01:55:14 AM', 'Refund', 140, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '8300 Refund Added'),
(141, 2, '2020-06-23', '2600.0', 'Amit Kumar', 'B22141', '0', '02:01:03 AM', 'order_wallet', 141, 'INR', 'Success', 2147483647, '', 'processing'),
(142, 2, '2020-06-23', '2600', 'Electrician', 'RF22142', '0', '02:01:39 AM', 'Refund', 142, '', 'Success', 2147483647, 'amitkumar66966@gmail.com', '2600 Refund Added'),
(143, 13, '2020-06-23', '3200.0', 'Amit Kumar', 'B1313143', '0', '03:08:19 PM', 'Booking', 143, 'INR', 'Success', 2147483647, '', 'processing'),
(144, 13, '2020-06-23', '3400', 'Electrician', 'RF1313144', '0', '03:11:43 PM', 'Refund', 144, '', 'Success', 2147483647, '', '3400 Refund Added'),
(145, 13, '2020-06-23', '1500.0', 'Amit Kumar', 'B1313145', '0', '03:14:11 PM', 'order_wallet', 145, 'INR', 'Success', 2147483647, '', 'processing'),
(146, 13, '2020-06-23', '1500', 'Electrician', 'RF1313146', '0', '03:34:22 PM', 'Refund', 146, '', 'Success', 2147483647, '', '1500 Refund Added'),
(147, 13, '2020-06-23', '1700.0', 'Amit Kumar', 'B1313147', '0', '03:34:57 PM', 'Booking', 147, 'INR', 'Success', 2147483647, '', 'processing'),
(148, 13, '2020-06-23', '1700', 'Electrician', 'RF1313148', '0', '03:43:45 PM', 'Refund', 148, '', 'Success', 2147483647, '', '1700 Refund Added'),
(149, 13, '2020-06-23', '500.0', 'Amit Kumar', 'B1313149', '0', '03:44:36 PM', 'Booking', 149, 'INR', 'Success', 2147483647, '', 'processing'),
(150, 13, '2020-06-23', '500', 'Electrician', 'RF1313150', '0', '04:08:04 PM', 'Refund', 150, '', 'Success', 2147483647, '', '500 Refund Added'),
(151, 13, '2020-06-23', '1500.0', 'Amit Kumar', 'B1313151', '0', '04:08:38 PM', 'Booking', 151, 'INR', 'Success', 2147483647, '', 'processing'),
(152, 13, '2020-06-23', '1500.0', 'Amit Kumar', 'B1313152', '0', '04:17:23 PM', 'Booking', 152, 'INR', 'Success', 2147483647, '', 'processing'),
(153, 13, '2020-06-23', '1500', 'Electrician', 'RF1313153', '0', '04:17:58 PM', 'Refund', 153, '', 'Success', 2147483647, '', '1500 Refund Added'),
(154, 13, '2020-06-23', '1500', 'Electrician', 'RF1313154', '0', '04:18:04 PM', 'Refund', 154, '', 'Success', 2147483647, '', '1500 Refund Added'),
(155, 13, '2020-06-23', '500.0', 'Amit Kumar', 'B1313155', '0', '04:21:55 PM', 'Booking', 155, 'INR', 'Success', 2147483647, '', 'processing'),
(156, 3, '2020-06-23', '21', 'Chandan', 'C33156', '0', '04:21:55 PM', 'Refer Pt.', 156, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '21 Points added for Referal'),
(157, 13, '2020-06-23', '21', 'Amit Kumar', 'C13157', '0', '04:21:55 PM', 'Refer Pt.', 157, '', 'Success', 2147483647, '', '21 Points added for Referal'),
(158, 13, '2020-06-23', '500', 'Electrician', 'RF1313158', '0', '04:25:32 PM', 'Refund', 158, '', 'Success', 2147483647, '', '500 Refund Added'),
(159, 13, '2020-06-23', '300.0', 'Amit Kumar', 'B1313159', '0', '04:26:22 PM', 'Booking', 159, 'INR', 'Success', 2147483647, '', 'processing'),
(160, 3, '2020-06-23', '21', 'Chandan', 'C33160', '0', '04:26:22 PM', 'Refer Pt.', 160, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '21 Points added for Referal'),
(161, 13, '2020-06-23', '21', 'Amit Kumar', 'C13161', '0', '04:26:22 PM', 'Refer Pt.', 161, '', 'Success', 2147483647, '', '21 Points added for Referal'),
(162, 13, '2020-06-23', '500.0', 'Amit Kumar', 'B1313162', '0', '04:39:03 PM', 'Booking', 162, 'INR', 'Success', 2147483647, '', 'processing'),
(163, 3, '2020-06-23', '21', 'Chandan', 'C33163', '0', '04:39:03 PM', 'Refer Pt.', 163, '', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', '21 Points added for Referal'),
(164, 13, '2020-06-23', '21', 'Amit Kumar', 'C13164', '0', '04:39:03 PM', 'Refer Pt.', 164, '', 'Success', 2147483647, '', '21 Points added for Referal'),
(165, 13, '2020-06-23', '1000.0', 'Amit Kumar', 'B1313165', '0', '04:40:03 PM', 'Booking', 165, 'INR', 'Success', 2147483647, '', 'processing'),
(166, 13, '2020-06-23', '1000', 'Electrician', 'RF1313166', '0', '04:53:30 PM', 'Refund', 166, '', 'Success', 2147483647, '', '1000 Refund Added'),
(167, 13, '2020-06-23', '300', 'Electrician', 'RF1313167', '0', '04:53:37 PM', 'Refund', 167, '', 'Success', 2147483647, '', '300 Refund Added'),
(168, 13, '2020-06-23', '500', 'Electrician', 'RF1313168', '0', '04:53:44 PM', 'Refund', 168, '', 'Success', 2147483647, '', '500 Refund Added'),
(169, 14, '2020-06-23', '10', 'Akash RASTOGI Customer', 'C1414169', '0', '09:37:09 PM', 'Pt. Earned', 169, '', 'Success', 2147483647, 'rustagiakash@hotmail.com', '10 Points added'),
(170, 15, '2020-06-23', '10', 'Akshay Dogra', 'C1515170', '0', '09:37:59 PM', 'Pt. Earned', 170, '', 'Success', 2147483647, 'akshaydogra321@gmail.com', '10 Points added'),
(171, 14, '2020-06-23', '500.0', 'Akash RASTOGI Customer', 'B1414171', '0', '10:03:04 PM', 'Order failed', 171, 'INR', 'Failed', 2147483647, '', 'processing'),
(172, 14, '2020-06-23', '500.0', 'Akash RASTOGI Customer', 'B1414172', '0', '10:03:15 PM', 'Order failed', 172, 'INR', 'Failed', 2147483647, '', 'processing'),
(173, 14, '2020-06-23', '500.0', 'Akash RASTOGI Customer', 'B1414173', '0', '10:03:31 PM', 'Order failed', 173, 'INR', 'Failed', 2147483647, '', 'processing'),
(174, 14, '2020-06-23', '500.0', 'Akash RASTOGI Customer', 'B1414174', '0', '10:04:00 PM', 'Booking', 174, 'INR', 'Success', 2147483647, '', 'processing'),
(175, 14, '2020-06-23', '500.0', 'Akash RASTOGI Customer', 'B1414175', '0', '10:04:46 PM', 'Booking', 175, 'INR', 'Success', 2147483647, '', 'processing'),
(176, 3, '2020-06-23', '500', 'Chandan', 'R33176', '0', '10:05:01 PM', 'Recharge', 176, 'INR', 'Success', 2147483647, 'chandan.sharma7539@gmail.com', ''),
(177, 14, '2020-06-23', '500', 'Akash RASTOGI Customer', 'R1414177', '0', '10:06:40 PM', 'Recharge', 177, 'INR', 'Failed', 2147483647, 'rustagiakash@hotmail.com', '\n'),
(178, 14, '2020-06-23', '500', 'Akash RASTOGI Customer', 'R1414178', '0', '10:07:06 PM', 'Recharge', 178, 'INR', 'Success', 2147483647, 'rustagiakash@hotmail.com', ''),
(179, 13, '2020-06-23', '1500.0', 'Amit Kumar', 'B1313179', '0', '10:13:47 PM', 'Booking', 179, 'INR', 'Success', 2147483647, '', 'processing'),
(180, 13, '2020-06-23', '1200.0', 'Amit Kumar', 'B1313180', '0', '10:19:19 PM', 'Booking', 180, 'INR', 'Success', 2147483647, '', 'processing'),
(181, 16, '2020-06-24', '500', 'nitin', 'R1616181', '0', '05:23:01 PM', 'Recharge', 181, 'INR', 'Failed', 2147483647, '', '\nhh');

-- --------------------------------------------------------

--
-- Table structure for table `refer_amount`
--

CREATE TABLE `refer_amount` (
  `id` int(11) NOT NULL,
  `refer_from` int(11) NOT NULL,
  `refer_to` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refer_amount`
--

INSERT INTO `refer_amount` (`id`, `refer_from`, `refer_to`) VALUES
(1, 11, 51),
(2, 11, 51);

-- --------------------------------------------------------

--
-- Table structure for table `refer_earn_customer`
--

CREATE TABLE `refer_earn_customer` (
  `id` int(255) NOT NULL,
  `refered_from_customer_id` int(255) NOT NULL,
  `refered_from_customer_name` text NOT NULL,
  `refered_to_customer_id` int(255) NOT NULL,
  `refered_to_customer_name` text NOT NULL,
  `money_old_customer` int(255) NOT NULL,
  `money_new_customer` int(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refer_earn_vendor`
--

CREATE TABLE `refer_earn_vendor` (
  `id` int(255) NOT NULL,
  `refered_from_vendor_id` int(255) NOT NULL,
  `refered_from_vendor_name` text NOT NULL,
  `refered_to_vendor_id` int(255) NOT NULL,
  `refered_to_vendor_name` text NOT NULL,
  `money_old_vendor` int(255) NOT NULL,
  `money_new_vendor` int(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refer_earn_vendor`
--

INSERT INTO `refer_earn_vendor` (`id`, `refered_from_vendor_id`, `refered_from_vendor_name`, `refered_to_vendor_id`, `refered_to_vendor_name`, `money_old_vendor`, `money_new_vendor`, `time`, `date`) VALUES
(8, 27, 'Amit Kumar', 28, 'Chandan', 510, 11, '09:34:00', '2020-06-18'),
(7, 6, 'AKSHAY DOGRA', 26, 'Test', 510, 11, '01:02:00', '2020-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `report_problem`
--

CREATE TABLE `report_problem` (
  `id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `problem` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_problem`
--

INSERT INTO `report_problem` (`id`, `customer_id`, `image1`, `image2`, `problem`, `time_created`) VALUES
(1, 1, '9691311.jpg', '', 'Thia ismy problem', '2020-06-24 14:28:26'),
(2, 1, '6655211.jpg', '', 'yih', '2020-06-24 14:28:26'),
(3, 1, '2519711.jpg', '2519712.jpg', 'bjb', '2020-06-24 14:28:26'),
(4, 2, '2675921.jpg', '2675922.jpg', 'testing', '2020-06-24 14:28:26'),
(5, 3, '', '', 'bjh', '2020-06-24 14:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `services_subcategory`
--

CREATE TABLE `services_subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `logo` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_subcategory`
--

INSERT INTO `services_subcategory` (`id`, `category_id`, `sub_category_id`, `name`, `price`, `logo`, `time_created`) VALUES
(1, 1, 1, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(2, 1, 1, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(3, 1, 1, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(4, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(5, 1, 2, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(6, 1, 2, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(7, 1, 2, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(8, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(9, 1, 1, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(10, 1, 1, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(11, 1, 1, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(12, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(13, 1, 2, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(14, 1, 2, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(15, 1, 2, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(16, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(17, 1, 3, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(18, 1, 3, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(19, 1, 3, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(20, 1, 3, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(21, 1, 3, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(22, 1, 3, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(23, 1, 3, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(24, 1, 3, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(25, 1, 3, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(26, 1, 3, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(27, 1, 3, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(28, 1, 3, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(29, 1, 2, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(30, 1, 2, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(31, 1, 2, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(32, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(33, 1, 1, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(34, 1, 1, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(35, 1, 1, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(36, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(37, 1, 2, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(38, 1, 2, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(39, 1, 2, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(40, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(41, 1, 1, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(42, 1, 1, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(43, 1, 1, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(44, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(45, 1, 2, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(46, 1, 2, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(47, 1, 2, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(48, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(49, 1, 3, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(50, 1, 3, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(51, 1, 3, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(52, 1, 3, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(53, 1, 3, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(54, 1, 3, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(55, 1, 3, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(56, 1, 3, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(57, 1, 3, 'Cleaning', '500', '73846ac.png', '2020-06-24 14:28:46'),
(58, 1, 3, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(59, 1, 3, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(60, 1, 3, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46'),
(61, 1, 2, 'Fan', '500', '73846ac.png', '2020-06-24 14:28:46'),
(62, 1, 2, 'Servicing', '900', '51003ac.png', '2020-06-24 14:28:46'),
(63, 1, 2, 'Ac Switch Box', '300', '90575mcb.png', '2020-06-24 14:28:46'),
(64, 1, 2, 'Regulator', '100', '66606regulator.png', '2020-06-24 14:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `strike_info`
--

CREATE TABLE `strike_info` (
  `id` int(255) NOT NULL,
  `vendor_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `lead_id` int(255) NOT NULL,
  `reason` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `sub_category` text NOT NULL,
  `price` int(11) NOT NULL,
  `problem1` text,
  `problem2` text,
  `problem3` text,
  `problem4` text,
  `dsc` text NOT NULL,
  `dsc_short` text NOT NULL,
  `logo` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category`, `price`, `problem1`, `problem2`, `problem3`, `problem4`, `dsc`, `dsc_short`, `logo`, `time_created`) VALUES
(1, 1, 'Ac Repair', 200, '', '', '', '', 'AC Repair', 'Ac Repair', '86436ac.png', '2020-06-24 14:29:13'),
(2, 1, 'Fan', 150, '', '', '', '', 'Fan Repair', 'Fan Repair', '80541fan.png', '2020-06-24 14:29:13'),
(3, 1, 'Room Heater', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '13602room_heater.png', '2020-06-24 14:29:13'),
(4, 1, 'Drill Work', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '35945drill.png', '2020-06-24 14:29:13'),
(5, 1, 'Tv Repair', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '27401tv.png', '2020-06-24 14:29:13'),
(6, 1, 'Mcb Soket', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '86344mcb.png', '2020-06-24 14:29:13'),
(7, 2, 'Ac Repair', 200, '', '', '', '', 'AC Repair', 'Ac Repair', '86436ac.png', '2020-06-24 14:29:13'),
(8, 2, 'Fan', 150, '', '', '', '', 'Fan Repair', 'Fan Repair', '80541fan.png', '2020-06-24 14:29:13'),
(9, 2, 'Room Heater', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '13602room_heater.png', '2020-06-24 14:29:13'),
(10, 2, 'Drill Work', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '35945drill.png', '2020-06-24 14:29:13'),
(11, 2, 'Tv Repair', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '27401tv.png', '2020-06-24 14:29:13'),
(12, 2, 'Mcb Soket', 400, '', '', '', '', 'Fan Repair', 'Fan Repair', '86344mcb.png', '2020-06-24 14:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `start_time`, `end_time`, `time_created`) VALUES
(1, '09:00:00', '12:00:00', '2020-06-24 14:29:39'),
(2, '12:00:00', '15:00:00', '2020-06-24 14:29:39'),
(3, '15:00:00', '18:00:00', '2020-06-24 14:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `id` int(255) NOT NULL,
  `payment_status` text,
  `dsc` text,
  `pay_id` text,
  `pay_error_code` int(20) DEFAULT NULL,
  `pay_captured` enum('0','1') NOT NULL DEFAULT '0',
  `pay_signature` text,
  `gateway_order_id` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_table`
--

INSERT INTO `transaction_table` (`id`, `payment_status`, `dsc`, `pay_id`, `pay_error_code`, `pay_captured`, `pay_signature`, `gateway_order_id`, `time`) VALUES
(1, '\".$payment_status.\"', '\".$desc.\"', '\".$pay_id.\"', 0, '', '\".$pay_signature.\"', '\".$gateway_order_id.\"', '\".$time.\"'),
(2, 'Initiated', NULL, NULL, NULL, '0', NULL, '', ''),
(3, 'Initiated', NULL, NULL, NULL, '0', NULL, '', ''),
(4, 'Initiated', NULL, NULL, NULL, '0', NULL, '', ''),
(5, 'Initiated', NULL, NULL, NULL, '0', NULL, '', ''),
(6, 'Refund', '280 Refund Added', 'Refund Added', NULL, '0', NULL, '', '10:57:01 PM'),
(7, 'Refund', '100 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:59:55 AM'),
(8, 'Refund', '170 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:55:06 AM'),
(9, 'Failed', 'com.razorpay.PaymentData@53e01ae', 'Payment Cancelled', 0, '', '', '', '10:19:29 PM');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table_customer`
--

CREATE TABLE `transaction_table_customer` (
  `id` int(255) NOT NULL,
  `payment_status` text,
  `dsc` text,
  `pay_id` text,
  `pay_error_code` int(20) DEFAULT NULL,
  `pay_captured` enum('0','1') NOT NULL DEFAULT '0',
  `pay_signature` text,
  `gateway_order_id` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_table_customer`
--

INSERT INTO `transaction_table_customer` (`id`, `payment_status`, `dsc`, `pay_id`, `pay_error_code`, `pay_captured`, `pay_signature`, `gateway_order_id`, `time`) VALUES
(133, 'Success', 'com.razorpay.PaymentData@e930a19', 'Wallet', 200, '', '', '', '01:36:44 AM'),
(132, 'Success', 'com.razorpay.PaymentData@3d0526e', 'Wallet', 200, '', '', '', '01:35:29 AM'),
(131, 'Refund', '3400 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:35:20 AM'),
(130, 'Refund', '2700 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:34:57 AM'),
(129, 'Success', 'com.razorpay.PaymentData@331c02a', 'Wallet', 200, '', '', '', '01:34:38 AM'),
(128, 'Success', 'com.razorpay.PaymentData@56bb4ea', 'Wallet', 200, '', '', '', '01:31:26 AM'),
(127, 'Refund', '3600 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:30:56 AM'),
(126, 'Refund', '3600 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:30:50 AM'),
(125, 'Success', 'com.razorpay.PaymentData@3142b0e', 'Wallet', 200, '', '', '', '01:28:56 AM'),
(124, 'Success', 'com.razorpay.PaymentData@61d1113', 'pay_F5nA46ZaISmkmt', 200, '', '', '', '01:22:15 AM'),
(123, 'Success', 'com.razorpay.PaymentData@e30a595', 'Wallet', 200, '', '', '', '01:00:38 AM'),
(122, 'Refund', '1000 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:59:55 AM'),
(121, 'Refund', '5300 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:59:49 AM'),
(120, 'Success', 'com.razorpay.PaymentData@eb4d48a', 'Wallet', 200, '', '', '', '12:48:26 AM'),
(119, 'Refund', '1900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:47:02 AM'),
(118, 'Refund', '1900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:46:52 AM'),
(117, 'Refund', '1900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:46:48 AM'),
(116, 'Refund', '5700 Refund Added', 'Refund Added', NULL, '0', NULL, '', '12:46:42 AM'),
(115, 'Failed', 'com.razorpay.PaymentData@a9182a1', 'Payment Cancelled', 0, '', '', '', '12:46:12 AM'),
(114, 'Success', 'com.razorpay.PaymentData@d35c8b4', 'Wallet', 200, '', '', '', '12:38:01 AM'),
(113, 'Success', 'com.razorpay.PaymentData@8779c39', 'Wallet', 200, '', '', '', '12:24:23 AM'),
(112, 'Success', 'com.razorpay.PaymentData@b2ae650', 'pay_F5mAEA3HGBm1mO', 200, '', '', '', '12:23:43 AM'),
(111, 'Success', '400 Points added', 'Pt. Earned', NULL, '0', NULL, '', '11:09:27 PM'),
(110, 'Success', '400 Points added', 'Pt. Earned', NULL, '0', NULL, '', '11:09:23 PM'),
(109, 'Success', '10 Points added', 'Pt. Earned', NULL, '0', NULL, '', '11:08:04 PM'),
(108, 'Refund', '2800 Refund Added', 'Refund Added', NULL, '0', NULL, '', '10:57:01 PM'),
(107, 'Refund', '2800 Refund Added', 'Refund Added', NULL, '0', NULL, '', '10:39:48 PM'),
(106, 'Success', 'com.razorpay.PaymentData@ab3a265', 'Wallet', 200, '', '', '', '10:34:26 PM'),
(105, 'Success', 'com.razorpay.PaymentData@bffdd2e', 'Wallet', 200, '', '', '', '10:30:47 PM'),
(104, 'Success', 'com.razorpay.PaymentData@b7a3311', 'Wallet', 200, '', '', '', '09:42:52 PM'),
(103, 'Refund', '3100 Refund Added', 'Refund Added', NULL, '0', NULL, '', '09:17:51 PM'),
(102, 'Success', 'com.razorpay.PaymentData@afc78b4', 'Wallet', 200, '', '', '', '09:13:29 PM'),
(101, 'Refund', '1000 Refund Added', 'Refund Added', NULL, '0', NULL, '', '09:05:25 PM'),
(100, 'Refund', '1900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '09:03:56 PM'),
(99, 'Refund', '3400 Refund Added', 'Refund Added', NULL, '0', NULL, '', '08:58:21 PM'),
(98, 'Refund', '1900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '08:56:54 PM'),
(97, 'Failed', 'com.razorpay.PaymentData@ef1b792', 'Payment Cancelled', 0, '', '', '', '08:49:34 PM'),
(96, 'Failed', 'com.razorpay.PaymentData@9edb50a', 'Payment Cancelled', 0, '', '', '', '08:46:40 PM'),
(95, 'Success', 'com.razorpay.PaymentData@5f99398', 'Wallet', 200, '', '', '', '08:40:55 PM'),
(94, 'Success', '470 Points is redeemed to wallet as 235 Rs', 'points redeem', NULL, '0', NULL, '', '08:37:33 PM'),
(93, 'Success', 'com.razorpay.PaymentData@9a4a912', 'pay_F5iIyHFoH3M2iR', 200, '', '', '', '08:37:12 PM'),
(92, 'Refund', '1900 Refund Added', 'Points Added', NULL, '0', NULL, '', '08:27:33 PM'),
(91, 'Refund', '2200 Refund Added', 'Points Added', NULL, '0', NULL, '', '08:24:27 PM'),
(90, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '08:21:34 PM'),
(89, 'Refund', '2100 Refund Added', 'Points Added', NULL, '0', NULL, '', '08:20:28 PM'),
(88, 'Success', 'com.razorpay.PaymentData@4f27ae3', 'Wallet', 200, '', '', '', '07:58:45 PM'),
(87, 'Success', 'com.razorpay.PaymentData@a94887f', 'pay_F5hZIKgMgB5UZm', 200, '', '', '', '07:54:02 PM'),
(86, 'Success', 'com.razorpay.PaymentData@151ba5e', 'pay_F5g1XjcWaVQCOK', 200, '', '', '', '06:23:20 PM'),
(85, 'Failed', 'com.razorpay.PaymentData@9d84ccd', 'Wallet', 200, '', '', '', '06:22:45 PM'),
(84, 'Success', 'com.razorpay.PaymentData@1a7e82b', 'pay_F5PjUWW1DBeh5m', 200, '', '', '', '02:27:07 AM'),
(83, 'Success', '400 Points added', 'Points Added', NULL, '0', NULL, '', '12:56:51 AM'),
(82, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '12:54:36 AM'),
(81, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '12:54:32 AM'),
(80, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '12:46:06 AM'),
(79, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '12:45:01 AM'),
(78, 'Success', 'com.razorpay.PaymentData@5f308ff', 'pay_F5NzGZK85Ahch6', 200, '', '', '', '12:44:40 AM'),
(77, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '09:44:11 PM'),
(76, 'Success', 'com.razorpay.PaymentData@571416e', 'pay_F5KRq5m0ZYPLx6', 200, '', '', '', '09:16:57 PM'),
(75, 'Success', 'com.razorpay.PaymentData@2fbb967', 'pay_F5KKi15oddFjeQ', 200, '', '', '', '09:10:13 PM'),
(74, 'Success', '10 Points added', 'Points Added', NULL, '0', NULL, '', '08:34:21 PM'),
(134, 'Refund', '3100 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:41:24 AM'),
(135, 'Refund', '3900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:41:30 AM'),
(136, 'Success', 'com.razorpay.PaymentData@d384f72', 'Wallet', 200, '', '', '', '01:41:55 AM'),
(137, 'Refund', '3100 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:43:53 AM'),
(138, 'Success', 'com.razorpay.PaymentData@1163e23', 'Wallet', 200, '', '', '', '01:44:18 AM'),
(139, 'Refund', '1900 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:55:06 AM'),
(140, 'Refund', '8300 Refund Added', 'Refund Added', NULL, '0', NULL, '', '01:55:14 AM'),
(141, 'Success', 'com.razorpay.PaymentData@507908c', 'Wallet', 200, '', '', '', '02:01:03 AM'),
(142, 'Refund', '2600 Refund Added', 'Refund Added', NULL, '0', NULL, '', '02:01:39 AM'),
(143, 'Success', 'com.razorpay.PaymentData@1c550a1', 'pay_F61Ef76JJjsY8b', 200, '', '', '', '03:08:19 PM'),
(144, 'Refund', '3400 Refund Added', 'Refund Added', NULL, '0', NULL, '', '03:11:43 PM'),
(145, 'Success', 'com.razorpay.PaymentData@fee15cb', 'Wallet', 200, '', '', '', '03:14:11 PM'),
(146, 'Refund', '1500 Refund Added', 'Refund Added', NULL, '0', NULL, '', '03:34:22 PM'),
(147, 'Success', 'com.razorpay.PaymentData@eee1e04', 'Wallet', 200, '', '', '', '03:34:57 PM'),
(148, 'Refund', '1700 Refund Added', 'Refund Added', NULL, '0', NULL, '', '03:43:45 PM'),
(149, 'Success', 'com.razorpay.PaymentData@caafd8e', 'Wallet', 200, '', '', '', '03:44:36 PM'),
(150, 'Refund', '500 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:08:04 PM'),
(151, 'Success', 'com.razorpay.PaymentData@18f1b4c', 'Wallet', 200, '', '', '', '04:08:38 PM'),
(152, 'Success', 'com.razorpay.PaymentData@1f611ee', 'Wallet', 200, '', '', '', '04:17:23 PM'),
(153, 'Refund', '1500 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:17:58 PM'),
(154, 'Refund', '1500 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:18:04 PM'),
(155, 'Success', 'com.razorpay.PaymentData@32ea18', 'Wallet', 200, '', '', '', '04:21:55 PM'),
(156, 'Success', '21 Points added for Referal', 'Refer Pt.', NULL, '0', NULL, '', '04:21:55 PM'),
(157, 'Success', '21 Points added for Referal', 'Points Added', NULL, '0', NULL, '', '04:21:55 PM'),
(158, 'Refund', '500 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:25:32 PM'),
(159, 'Success', 'com.razorpay.PaymentData@f8fcf2c', 'Wallet', 200, '', '', '', '04:26:22 PM'),
(160, 'Success', '21 Points added for Referal', 'Refer Pt.', NULL, '0', NULL, '', '04:26:22 PM'),
(161, 'Success', '21 Points added for Referal', 'Points Added', NULL, '0', NULL, '', '04:26:22 PM'),
(162, 'Success', 'com.razorpay.PaymentData@f660398', 'Wallet', 200, '', '', '', '04:39:03 PM'),
(163, 'Success', '21 Points added for Referal', 'Refer Pt.', NULL, '0', NULL, '', '04:39:03 PM'),
(164, 'Success', '21 Points added for Referal', 'Points Added', NULL, '0', NULL, '', '04:39:03 PM'),
(165, 'Success', 'com.razorpay.PaymentData@9e71bc0', 'Wallet', 200, '', '', '', '04:40:03 PM'),
(166, 'Refund', '1000 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:53:30 PM'),
(167, 'Refund', '300 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:53:37 PM'),
(168, 'Refund', '500 Refund Added', 'Refund Added', NULL, '0', NULL, '', '04:53:44 PM'),
(169, 'Success', '10 Points added', 'Pt. Earned', NULL, '0', NULL, '', '09:37:09 PM'),
(170, 'Success', '10 Points added', 'Pt. Earned', NULL, '0', NULL, '', '09:37:59 PM'),
(171, 'Failed', 'com.razorpay.PaymentData@ea2d3f2', 'Wallet', 200, '', '', '', '10:03:04 PM'),
(172, 'Failed', 'com.razorpay.PaymentData@29aaf1f', 'Wallet', 200, '', '', '', '10:03:15 PM'),
(173, 'Failed', 'com.razorpay.PaymentData@4429dbb', 'Wallet', 200, '', '', '', '10:03:31 PM'),
(174, 'Success', 'com.razorpay.PaymentData@2a3c986', 'pay_F68Jfv8CssBadU', 200, '', '', '', '10:04:00 PM'),
(175, 'Success', 'com.razorpay.PaymentData@152736c', 'pay_F68KbRIFzkz38L', 200, '', '', '', '10:04:46 PM'),
(176, 'Success', 'com.razorpay.PaymentData@e58a421', 'pay_F68KqFTv2R6EJ8', 200, '', '', '', '10:05:01 PM'),
(177, 'Failed', 'com.razorpay.PaymentData@57a550', 'Payment Cancelled', 0, '', '', '', '10:06:40 PM'),
(178, 'Success', 'com.razorpay.PaymentData@ba1bb2b', 'pay_F68N4hYDAv9Dv7', 200, '', '', '', '10:07:06 PM'),
(179, 'Success', 'com.razorpay.PaymentData@13d4309', 'Wallet', 200, '', '', '', '10:13:47 PM'),
(180, 'Success', 'com.razorpay.PaymentData@5df4644', 'Wallet', 200, '', '', '', '10:19:19 PM'),
(181, 'Failed', 'com.razorpay.PaymentData@aeff1da', 'Payment Cancelled', 0, '', '', '', '05:23:01 PM');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE `vendor_details` (
  `user_id` int(255) NOT NULL,
  `token` text NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `secondary_phone` text,
  `wphone` text,
  `email` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `location` text NOT NULL,
  `Profile_image` text NOT NULL,
  `referrer_code` text NOT NULL,
  `referring_code` varchar(10) NOT NULL,
  `whatsapp` tinyint(1) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `is_approved` tinyint(4) NOT NULL,
  `isBankCompleted` tinyint(4) NOT NULL DEFAULT '0',
  `isIdentityCompleted` tinyint(4) NOT NULL DEFAULT '0',
  `send_approval` tinyint(4) NOT NULL,
  `online` enum('0','1') NOT NULL DEFAULT '1',
  `category` text NOT NULL,
  `rating` float NOT NULL,
  `strike` int(11) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`user_id`, `token`, `name`, `phone`, `secondary_phone`, `wphone`, `email`, `country`, `city`, `location`, `Profile_image`, `referrer_code`, `referring_code`, `whatsapp`, `active`, `is_approved`, `isBankCompleted`, `isIdentityCompleted`, `send_approval`, `online`, `category`, `rating`, `strike`, `time_created`) VALUES
(11, '', 'vijay', '9736608004', '9736608004', NULL, '', 'India', 'KANGRA', 'Nagrota Surian', '', '', '100011', 0, 0, 0, 0, 0, 0, '1', '[{\"id\":3,\"isChecked\":true,\"name\":\"ELECTRICIAN\"}]', 0, 10, '2020-06-24 14:30:13'),
(12, '', 'Ramesh Kumar', '9816112640', '7018912824', NULL, 'ramesh12jan@gmail.com', 'India', 'KANGRA', 'Palampur', '', '', '100012', 1, 0, 0, 0, 0, 0, '1', '[{\"id\":2,\"isChecked\":true,\"name\":\"PLUMBER\"},{\"id\":7,\"isChecked\":true,\"name\":\"PAINTER\"},{\"id\":8,\"isChecked\":true,\"name\":\"MASON\"}]', 0, 8, '2020-06-24 14:30:13'),
(13, '', 'Amit kumar', '9459755557', '9882765557', NULL, 'amitkashyap777@gmail.com', 'India', 'KANGRA', 'Palampur', 'https://townz.co.in/dashboard/assets/images/vendor_identity/9780313.jpg', '', '100013', 1, 1, 1, 1, 1, 1, '1', '[{\"id\":3,\"isChecked\":true,\"name\":\"ELECTRICIAN\"}]', 0, 8, '2020-06-24 14:30:13'),
(15, '', 'Parmjeet Singh', '9625259206', '', NULL, 'jeetbaba31@gmail.com', 'India', 'KANGRA', 'Palampur', '', '', '100015', 0, 0, 0, 0, 0, 0, '1', '[{\"id\":2,\"isChecked\":true,\"name\":\"PLUMBER\"},{\"id\":3,\"isChecked\":true,\"name\":\"ELECTRICIAN\"},{\"id\":6,\"isChecked\":true,\"name\":\"CARPENTER\"},{\"id\":7,\"isChecked\":true,\"name\":\"PAINTER\"},{\"id\":8,\"isChecked\":true,\"name\":\"MASON\"}]', 0, 8, '2020-06-24 14:30:13'),
(29, 'fAiBMD0lQaiYa5RMmOsoNm:APA91bGOLIjE8jMNK28j36sW7S9kSlJzSSrAOy_s_30I8fH8c56yHz5yOKtuWec62jgBQpDJUdfSg7jcwaBbJNCzkw6MmRPzYT-FCjePKArILI2jr3PqL9YAYVESJXvSOtHs8k563-Y1', 'Chandan ', '8287150813', '7042040468', NULL, 'chandan112@gmail.com', 'India', 'KANGRA', 'Nagrota Surian', '', '', '29', 0, 1, 1, 1, 1, 1, '1', '[{\"id\":1,\"isChecked\":true,\"name\":\"Electrician\"},{\"id\":2,\"isChecked\":true,\"name\":\"Painter\"}]', 3, 3, '2020-06-24 14:30:13'),
(31, 'dx7YkvZITaGIzB3E1L2K2w:APA91bEYmM4QKVJ9O9qjXBW9hYkp5wImbEY46vj_J7ePTTQ5gALkG1PzZ9AzpZ_SAUxBJmqSBpPTazm_AJj4m9ro9Zi_44V4vaozmTTypB_a5TrPDuw8run6-ipWdp5ncckjZ2U9yhnN', 'Akshay Dogra', '8766270884', '', NULL, 'akshaydogra321@gmail.com', 'India', 'KANGRA', 'Nagrota Surian', '', '', 'TWZVN31', 0, 1, 1, 1, 1, 1, '1', '[{\"id\":1,\"isChecked\":true,\"name\":\"Electrician\"}]', 0, 0, '2020-06-24 14:30:13'),
(32, 'cZvUEeSJRd-wn3rjLM4TqC:APA91bHw6opPnKFDBg72lteKUP3wV7pzmqB_GAgRy0Oir3QewWi2q-XSe2uAANTvU97HW-kqpWM521xwo0P6SSJuMzlxktnlARMFO9CTEGLj1wawN1Civ2dNVzwafkCTauGBELLkANc9', 'nitin rathi', '8527927360', '', NULL, '', 'India', 'SHIMLA', 'Shimla Rural', 'https://townz.co.in/dashboard/assets/images/vendor_identity/9584332.jpg', '', 'TWZVN32', 0, 1, 1, 1, 1, 1, '1', '[{\"id\":1,\"isChecked\":\"true\",\"name\":\"Electrician\"},{\"id\":2,\"isChecked\":\"true\",\"name\":\"Painter\"},{\"id\":3,\"isChecked\":\"true\",\"name\":\"Carpenter\"},{\"id\":4,\"isChecked\":\"true\",\"name\":\"Car\"},{\"id\":5,\"isChecked\":\"true\",\"name\":\"Cleaning\"},{\"id\":6,\"isChecked\":\"true\",\"name\":\"Fitness\"},{\"id\":7,\"isChecked\":\"true\",\"name\":\"Massage\"},{\"id\":8,\"isChecked\":\"true\",\"name\":\"Appliance Repair\"}]', 0, 0, '2020-06-24 17:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `total_balance` double NOT NULL DEFAULT '0',
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `user_id`, `total_balance`, `time_created`, `time_updated`) VALUES
(1, 1, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(2, 2, 300, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(3, 3, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(4, 4, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(5, 5, 500, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(6, 6, 5000, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(7, 7, 200, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(8, 8, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(9, 9, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(10, 10, 5000, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(11, 11, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(12, 12, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(13, 13, 500, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(14, 14, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(15, 15, 0, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(26, 26, 11, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(25, 25, 11, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(24, 24, 11, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(23, 23, 11, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(27, 27, 510, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(28, 28, 600, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(29, 29, 289.5, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(30, 31, 4700, '2020-06-24 14:30:34', '2020-06-24 14:31:02'),
(31, 32, 10000, '2020-06-24 14:30:34', '2020-06-24 14:31:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_lead`
--
ALTER TABLE `accepted_lead`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_data`
--
ALTER TABLE `basic_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_location`
--
ALTER TABLE `city_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_code`
--
ALTER TABLE `coupon_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_app_banner`
--
ALTER TABLE `customer_app_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_basic_data`
--
ALTER TABLE `customer_basic_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_notification`
--
ALTER TABLE `customer_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_wallet`
--
ALTER TABLE `customer_wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_txn`
--
ALTER TABLE `order_txn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_txn_customer`
--
ALTER TABLE `order_txn_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer_amount`
--
ALTER TABLE `refer_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer_earn_vendor`
--
ALTER TABLE `refer_earn_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_problem`
--
ALTER TABLE `report_problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_subcategory`
--
ALTER TABLE `services_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strike_info`
--
ALTER TABLE `strike_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_table_customer`
--
ALTER TABLE `transaction_table_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_lead`
--
ALTER TABLE `accepted_lead`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_data`
--
ALTER TABLE `basic_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_image`
--
ALTER TABLE `category_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `city_location`
--
ALTER TABLE `city_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `coupon_code`
--
ALTER TABLE `coupon_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer_app_banner`
--
ALTER TABLE `customer_app_banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_basic_data`
--
ALTER TABLE `customer_basic_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_notification`
--
ALTER TABLE `customer_notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `customer_wallet`
--
ALTER TABLE `customer_wallet`
  MODIFY `wallet_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `order_txn`
--
ALTER TABLE `order_txn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_txn_customer`
--
ALTER TABLE `order_txn_customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `refer_amount`
--
ALTER TABLE `refer_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refer_earn_vendor`
--
ALTER TABLE `refer_earn_vendor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report_problem`
--
ALTER TABLE `report_problem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_subcategory`
--
ALTER TABLE `services_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `strike_info`
--
ALTER TABLE `strike_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction_table`
--
ALTER TABLE `transaction_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction_table_customer`
--
ALTER TABLE `transaction_table_customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
