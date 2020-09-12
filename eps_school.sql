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
-- Database: `eps_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `vision` text NOT NULL,
  `our_values` text NOT NULL,
  `aims` text NOT NULL,
  `philosophy` text NOT NULL,
  `school_principle` text NOT NULL,
  `key_of_success` text NOT NULL,
  `about1` text NOT NULL,
  `about2` text NOT NULL,
  `vision_images` text NOT NULL,
  `values_images` text NOT NULL,
  `aims_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `vision`, `our_values`, `aims`, `philosophy`, `school_principle`, `key_of_success`, `about1`, `about2`, `vision_images`, `values_images`, `aims_images`) VALUES
(1, '<p>Rooted in the Motto \"Service Before Self\".EPS, Pakur is a school with a soul.We Envision to make our children.</p>\r\n<ul style=\"margin-top: 0px; margin-bottom: 0px;\">\r\n<li>Self-reliant and prosuctive individuals,ready to serve the community.</li>\r\n<li>To Develop in students the quality of Integrity, Honesty, Trust, Tolerance and Compassion.</li>\r\n<li>To Promote the spirit of enquiry</li>\r\n<li>To Foster a scientific temper within the bounds of humanim.</li>\r\n<li>To help the students to become a meaningful part of his/her eniviroment</li>\r\n</ul>', '<p>Elite Public School, Pakur is unique amalgation of traditional values and contemporary pedagogy.The school lays immense emphasis on nurturing core values of COURAGE,COMPASSION,EQUALITY and INTEGRITY in all its students.The School would facilitate its studens to learn and imbibe along with their subjects of study, discipline, ethis, tradition, and culture.This is with and objective to bring out the students not only intellectually well-equipped but also enable them to become socially committed citizens.</p>', '<p>&nbsp;</p>\r\n<ul>\r\n<li><span style=\"background-color: transparent; font-family: Calibri, sans-serif; font-size: 12pt; text-align: justify; white-space: pre-wrap;\">We lay emphasis on experimental and exploratory methods of learning well beyond classrooms, as well as espouse the practice of our school values and attributes.</span></li>\r\n<li><span style=\"background-color: transparent; font-family: Calibri, sans-serif; font-size: 12pt; white-space: pre-wrap; text-align: justify;\">We explore new avenues of learning and encourage our children to ask open ended questions.</span></li>\r\n<li><span style=\"background-color: transparent; font-family: Calibri, sans-serif; font-size: 12pt; white-space: pre-wrap; text-align: justify;\">We create a strong relationship with the child and enhance the connection between the educator, parent and the child.</span></li>\r\n<li><span style=\"background-color: transparent; font-family: Calibri, sans-serif; font-size: 12pt; white-space: pre-wrap; text-align: justify;\">We understand the child&rsquo;s interest and help them discover their identity and purpose in life.</span></li>\r\n<li>\r\n<p><span style=\"background-color: transparent; font-family: Calibri, sans-serif; font-size: 12pt; white-space: pre-wrap; text-align: justify;\">We create a comfortable safe environment for children.</span></p>\r\n</li>\r\n</ul>', '<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>', '<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>', '<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>', '<p><span style=\"font-size: 16px;\">Elite Public School, Pakur Jharkhand Run and Managed by &ldquo;Arvind Social Service and Educational Trust (ASSET)&rdquo; since 2010 is going to be affiliated to CBSE very soon. EPS, Pakur has come a long way from its fledge days and spread its wing to a sore high up in the sky achieving greater and greater heights.</span></p>', '<p><span style=\"font-family: Calibri, sans-serif; letter-spacing: 0.4px;\">Elite Public School is recognized through its academic world for its progressive approach and commitment towards excellence. Distinction and diversity are the twin hallmarks of its philosophy. Today it stands as a citadel of learning and a harbinger of quality, consciousness committed to develop the young minds.</span></p>', 'vision.jpg', '66988values.jpg', 'about3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(11) NOT NULL,
  `library` text NOT NULL,
  `facility` text NOT NULL,
  `curr` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `library`, `facility`, `curr`, `image`) VALUES
(1, '<p>Content Update Soon!</p>', '<p>Content Update Soon!</p>', '<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Being a CBSE pattern school, Elite Public School strictly follows the CBSE guidelines as far as syllabus and other curricular parts concerns. We even put a lot of emphasis on co-curricular and sports and games events to enthuse the students mentally and physically. </span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: center;\" align=\"center\"><strong><u><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">CURRICULAR ACTIVITIES:-</span></u></strong></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -18.0pt; mso-list: l1 level1 lfo1;\"><!-- [if !supportLists]--><strong><em><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">1.<span style=\"font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></em></strong><!--[endif]--><strong><em><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Examinations</span></em></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">In each academic year the school will hold the following assessments (exams) &ndash;</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">a)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">PRE &ndash; SUMMATIVE 1</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">b)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">1<sup>ST</sup> SUMMATIVE ASSESSMENT</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">c)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">POST SUMMTIVE 1</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l0 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">d)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">2<sup>ND</sup> SUMMATIVE ASSESSMENT</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">To assess the preparation of students, Monday Test is being conducted on Monday each week for different subjects as per the routine mentioned in the school diary.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">We conduct PRE-SUMMATIVE 1 in the months of June &ndash; July. 1<sup>ST</sup> SUMMATIVE ASSESSMENT in the month of September, POST SUMMATIVE 1 in the month of December and finally 2<sup>ND</sup> SUMMATIVE ASSESSMENT in the Month of March.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">For Class X, PRE-BOARD is conducted in the month of December &ndash; January. </span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -18.0pt; mso-list: l1 level1 lfo1;\"><!-- [if !supportLists]--><strong><em><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">2.<span style=\"font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></em></strong><!--[endif]--><strong><em><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Progress Report</span></em></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">The progress report shall be sent by the school two times in an academic session, one after SA 1 and another after SA 2. Parents are requested to note the progress and take necessary action for the betterment of your child.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Format of PROGRESS REPORT/REPORT CARD<br /> <!-- [if !supportLineBreakNewLine]--><br /> <!--[endif]--></span></p>\r\n<table class=\"MsoTableGrid\" style=\"width: 453.7pt; margin-left: 36.0pt; border-collapse: collapse; border: none; mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;\" border=\"1\" width=\"605\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 30.95pt;\">\r\n<td style=\"width: 44.75pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.95pt;\" valign=\"top\" width=\"60\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">SA &ndash; 1</span></strong></p>\r\n</td>\r\n<td style=\"width: 106.45pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.95pt;\" valign=\"top\" width=\"142\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">Pre &ndash; Summative 1</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(10)</span></strong></p>\r\n</td>\r\n<td style=\"width: 75.6pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.95pt;\" valign=\"top\" width=\"101\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">Subject Enrichment</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(5)</span></strong></p>\r\n</td>\r\n<td style=\"width: 75.6pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.95pt;\" valign=\"top\" width=\"101\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">Notebooks</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(5)</span></strong></p>\r\n</td>\r\n<td style=\"width: 102.35pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.95pt;\" valign=\"top\" width=\"136\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">1<sup>st</sup> Summative Assessment</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(80)</span></strong></p>\r\n</td>\r\n<td style=\"width: 48.95pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 30.95pt;\" valign=\"top\" width=\"65\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">SA 1</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(100)</span></strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"mso-yfti-irow: 1; mso-yfti-lastrow: yes; height: 29.25pt;\">\r\n<td style=\"width: 44.75pt; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 29.25pt;\" valign=\"top\" width=\"60\">\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">SA - 2</span></strong></p>\r\n</td>\r\n<td style=\"width: 106.45pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 29.25pt;\" valign=\"top\" width=\"142\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">Post &ndash; Summative 1</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(10)</span></strong></p>\r\n</td>\r\n<td style=\"width: 75.6pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 29.25pt;\" valign=\"top\" width=\"101\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">Subject Enrichment</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(5)</span></strong></p>\r\n</td>\r\n<td style=\"width: 75.6pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 29.25pt;\" valign=\"top\" width=\"101\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">Monday Test</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(5)</span></strong></p>\r\n</td>\r\n<td style=\"width: 102.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 29.25pt;\" valign=\"top\" width=\"136\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">2<sup>nd</sup> Summative Assessment</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(80)</span></strong></p>\r\n</td>\r\n<td style=\"width: 48.95pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 29.25pt;\" valign=\"top\" width=\"65\">\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">SA 2</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin: 0cm; margin-bottom: .0001pt; mso-add-space: auto; text-align: center; line-height: normal;\" align=\"center\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt;\">(100)</span></strong></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"MsoListParagraphCxSpFirst\"><strong><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">&nbsp;</span></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l1 level1 lfo1;\"><!-- [if !supportLists]--><strong><em><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\">3.<span style=\"font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></em></strong><!--[endif]--><strong><em><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Leave</span></em></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">A student may be allowed lave in very special case by the Principal. The application should be sent to the school on the same day or latest by the next day, duly signed by the parents or guardian of the child. During Tests/Examinations no leave will be allowed except medical grounds and a medical certificate from an authorized medical officer has to be submitted along with the leave application.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">&nbsp;</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: center;\" align=\"center\"><strong><u><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">CO &ndash; CURRICULAR ACTIVITIES</span></u></strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">We put a lot of effort for a student&rsquo;s all round development. Along with the curricular activities we indulge the students in different co-curricular activities such as Painting, Singing, Dancing, Art &amp; Craft, Quiz, Debate, Recitation etc. <br /> <br /> <!-- [if !supportLineBreakNewLine]--><br /> <!--[endif]--></span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-align: center;\" align=\"center\"><strong><u><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">GAMES AND SPORTS</span></u></strong></p>\r\n<p class=\"MsoNormal\" style=\"text-align: center;\" align=\"center\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Calibri\',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: \'Times New Roman\'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Students are also encouraged to participate in different games and sports events to develop them physically. Along with curricular and co-curricular activities different sporting events are also organized in the school each academic session. Various Inter-House competitions of different sports such as Cricket, Football, Badminton, Kabaddi, Chess, Carromboard etc. to inculcate competitiveness among students. A main sporting event &ldquo;ANNUAL SPORTS MEET&rdquo; is also organized once a session where different Track and Field events are organized and</span></p>', '1.jpg'),
(2, '', '', '', '2.jpg'),
(3, '', '', '', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, '', ''),
(2, 'eps123@gmail.com', '8208b0ee4b30fb19b25ad6fdbbd99209');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `instruction_parent` text NOT NULL,
  `instruction_student` text NOT NULL,
  `code_of_conduct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `instruction_parent`, `instruction_student`, `code_of_conduct`) VALUES
(1, '<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Parents &ndash; Teacher co-operation is fundamental for complete and harmonious development of a student&rsquo;s personality. To bring out the best in a child, the family influences should help to inculcate in him/her the desirable behavior patterns, healthy habits// and positive attitudes in personal and social life.</span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">1.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Make sure that your ward comes to school in proper uniform as per the specification and design laid by the school.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">2.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Make an impression upon your ward that that should come to school and observe punctuality of time regularly and should not miss the school even for a day unless it is unavoidable. No valuable article should be worn by the students or should be sent with the student. Pupils must be responsible for their own books, pens, cycles, tiffin boxes or any article brought to the school.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">3.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">The report cards/progress report cards signed by the parents should be returned to school within two days of its receipt.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">4.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Parents are not allowed to talk to their ward or take them away from the school premises during school hours without the permission of the Principal. </span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">5.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Those who seek information or who want to make some complaints should do so to the Principal and not to the teachers however they can meet the Principal or the teacher on prior appointment.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">6.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">For a healthy and purposeful interaction between the parents and the teachers, a Parent &ndash; Teacher Association (PTA) meeting is organized from time to time in the school.</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">7.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">It is impossible to educate the child without good example and cooperation of the parents/guardian with the Principal and staffs. A parent/guardian should respect the Principal and staff all the time.</span></p>', '<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">1.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Come to school clean, well-groomed and in proper uniform with polished shoes.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">2.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Remain regular in attendance and never come late to the school.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">3.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Be present in morning prayers and other school activities.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">4.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Bring all the school text books and other study materials required for the day.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">5.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Bring your school diary to the school every day.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">6.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Be ready to pick up god habits and shun the bad ones; learn social manners and prepare yourself for healthy citizenship in a democratic country.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">7.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Remember the school is running for your improvement and growth and always be willing to respect its discipline and rules framed or the purpose.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">8.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Keep your classroom clean. Throw wastes into the dustbin only.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">9.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Insist your parents to sign your school diary daily and also the examination report cards on a regular note.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">10.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Students should obey house prefects, class monitors and other students on duty.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">11.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Students are not allowed to leave the school during working hours unless authorized person whose signature is given on the first page of the school diary comes in person to make the request.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">12.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Students are allowed to leave their classroom only when they carry outgoing pass with them.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">13.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Follow the examination rules properly.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">14.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Be polite, respectful to your parents, teachers and visitors.</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;\"><span style=\"mso-list: Ignore;\">15.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%;\">Do not hesitate to contact your Principal if there is difficulty.</span></p>', '<p>Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra. Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula.</p>\r\n<p>adas</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contacted`
--

CREATE TABLE `contacted` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacted`
--

INSERT INTO `contacted` (`id`, `name`, `email`, `message`, `date`) VALUES
(9, 'Amit Kumar', 'amit@gmail.com', 'I have a query', '2020-04-29 15:31:15'),
(10, 'Amit Kumar', 'amit@gmail.com', 'I have a query', '2020-04-29 15:31:15'),
(11, 'Amit Kumar', 'amit@gmail.com', 'I have a query', '2020-04-29 15:31:15'),
(12, 'Amit Kumar', 'amit@gmail.com', 'I have a query', '2020-04-29 15:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `phone1` text,
  `phone2` text,
  `email1` text NOT NULL,
  `email2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `phone1`, `phone2`, `email1`, `email2`) VALUES
(1, '6205005490', '9572383919', 'epspakur@yahoo.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `DOB` date NOT NULL,
  `blood_grp` text NOT NULL,
  `facebook` text NOT NULL,
  `linkedin` text NOT NULL,
  `twitter` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `qualification`, `experience`, `email`, `phone`, `address`, `DOB`, `blood_grp`, `facebook`, `linkedin`, `twitter`, `image`) VALUES
(1, 'Moushami Mukherjee', 'M.A , B.Ed.', '', 'moubanerjee483@gmail.com', '9934458076', 'D.N Pally , Pakur', '1970-10-01', 'O+', '', '', '', '15652Principal.jpg'),
(2, 'Kunal Kumar Keshri', 'M.A , B.Ed.', '', 'kunalkeshri279@gmail.com', '9430368619', 'Bank Colony , Pakur', '1985-12-07', 'B+', '', '', '', 'a.jpg'),
(3, 'Avijit Banerjee', 'M.Sc.ADCA', '', 'banerjeeavibumba001@gmail.com', '8637343682', 'Madhyapara, Pakur', '1989-12-31', 'B+', '', '', '', 'a.jpg'),
(4, 'Beauty Pandey', 'B.A, D.El.Ed.', '', 'beautypandeypkr@gmail.com', '9006958955', 'Birsha Chowk , Pakur', '1978-10-18', 'AB+', '', '', '', 'a.jpg'),
(5, 'Md. Fayaz Uddin ', 'B.A, B.Ed.', '', 'fayaz.khan94@gmail.com', '8340249780', 'GowalPara, Pakur', '1983-05-12', 'A+', '', '', '', 'a.jpg'),
(6, 'Priya Kant Ojha', 'BCA', '', 'priyakant2402@gmail.com', '9006354366', 'Chakbalrampur, Pakur', '1990-02-24', 'B+', '', '', '', 'a.jpg'),
(7, 'Putul Kumari Sah', 'M.A , B.Ed.', '', 'putulkumarisaha@gmail.com', '8777366750', 'Madhyapara, Pakur', '1987-04-15', 'AB+', '', '', '', 'a.jpg'),
(8, 'Mayuri Kumari ', 'M.A , B.Ed.', '', 'mayurikumari1993@gmail.com', '8051291177', 'Annapurna Colony ,Pakur', '1993-12-29', 'B+', '', '', '', 'a.jpg'),
(9, 'Laxmi Singh ', 'B.Sc.D.El.Ed.', '', 'laxmi.sid23@gmail.com', '7004575747', 'Annapurna Colony ,Pakur', '1992-07-17', 'B+', '', '', '', '\r\na.jpg'),
(10, 'Mousumi Sinha ', 'M.A, B.Ed.', '', '', '8709196321', 'Bhagatpara, Pakur', '1977-08-01', '', '', '', '', 'a.jpg'),
(11, 'Md. Motibull Mollah', 'M.Sc. B.Ed.', '', '', '', '', '1987-12-02', '', '', '', '', 'a.jpg'),
(12, 'Ragni Kumari ', 'B.Sc. B.Ed.', '', '', '', '', '1992-06-21', '', '', '', '', 'a.jpg'),
(13, 'Sanjeev Kumar Saha', 'M.A, B.Ed.', '', '', '', '', '1981-11-19', '', '', '', '', 'a.jpg'),
(14, 'Dolly Parween', 'B.A, B.Ed.', '', '', '', '', '1989-10-28', '', '', '', '', 'a.jpg'),
(15, 'Pushpa Kumari ', 'I.Sc. D.El.Ed.', '', '', '', '', '1991-11-08', '', '', '', '', 'a.jpg\r\n'),
(16, 'Avinandan Rana ', 'B.A. B.Ed.', '', '', '', '', '1995-02-14', '', '', '', '', 'a.jpg\r\n'),
(17, 'Rishiraj Hembrom ', 'B.A, B.P.Ed.', '', '', '', '', '1988-01-03', '', '', '', '', 'a.jpg'),
(18, 'Sharmistha Das ', 'B.A, B.Lib.', '', '', '', '', '1995-12-03', '', '', '', '', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, '534271.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '1.jpg'),
(5, '2.jpg'),
(6, '3.jpg'),
(7, '1.jpg'),
(8, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `glance` text NOT NULL,
  `infra` text NOT NULL,
  `attraction` text NOT NULL,
  `welcome_heading` text NOT NULL,
  `welcome_content` text NOT NULL,
  `video_tour` text NOT NULL,
  `educational_heading` text NOT NULL,
  `educational_tour` text NOT NULL,
  `educational_image` text NOT NULL,
  `admission_details` text NOT NULL,
  `admission_heading` text NOT NULL,
  `admission_image` text NOT NULL,
  `glance_image1` text NOT NULL,
  `glance_image2` text NOT NULL,
  `glance_image3` text NOT NULL,
  `glance_image4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `glance`, `infra`, `attraction`, `welcome_heading`, `welcome_content`, `video_tour`, `educational_heading`, `educational_tour`, `educational_image`, `admission_details`, `admission_heading`, `admission_image`, `glance_image1`, `glance_image2`, `glance_image3`, `glance_image4`) VALUES
(1, '<p class=\"MsoBodyText\" style=\"margin-top: 9.0pt; line-height: 107%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin;\">Elite Public School, Pakur Jharkhand Run and Managed by &ldquo;Arvind Social Service and Educational Trust (ASSET)&rdquo; since 2010 is going to be affiliated to CBSE very soon. EPS, Pakur has come a long way from its fledge days and spread its wing to a sore high up in the sky achieving greater and greater heights.</span></p>\r\n<p style=\"line-height: 16.5pt; background: white; margin: 0cm 0cm 7.5pt 0cm;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri\',sans-serif; mso-ascii-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt;\">Elite Public School is recognized through its academic world for its progressive approach and commitment towards excellence. Distinction and diversity are the twin hallmarks of its philosophy. Today it stands as a citadel of learning and a harbinger of quality, consciousness committed to develop the young minds.</span></p>\r\n<p class=\"MsoBodyText\" style=\"line-height: 107%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin;\">This school is committed to academic excellence, intellectual growth, art athletics high standard of ethical awareness and sportsmanship it is a co-educational school that provides an invigorating and competitive atmosphere created by excellent facilities and guidance provided by a highly qualified and dedicated faculties to instil such values that are ingrained to help to promote confidence, and critical thinking skills leading to the development of well adjusted, adaptable and integrated personalities. All this add depth and variety to the students&rsquo; life and help in shaping their overall personalities, in other words we can say EPS, Pakur offers comprehensive and holistic education.</span></p>\r\n<p class=\"MsoBodyText\" style=\"line-height: 107%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt; background: white;\">The school follows the progressive pattern of Central Board of Secondary Education (CBSE) with state-of-the-art infrastructure including spacious and airy classrooms, a secure network of CCTV cameras, well equipped labs for Computers, Sciences, Mathematics, a library and a sincere and dedicated staff to ensure safety and well-being of your children.</span></p>\r\n<p class=\"MsoBodyText\" style=\"margin-right: 14.7pt; line-height: 107%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin;\">Besides being committed to academic excellence and providing education another special characteristic of Elite Public School, Pakur is the appreciation of worth of each students. Children belonging to every strata of society are given the opportunity to stay here. The school does not in any way discriminate on the basis of race, religion, sex, caste or creed, in the implementation of its admission policy.</span></p>\r\n<p class=\"MsoBodyText\" style=\"line-height: 107%; margin: 7.85pt 10.15pt .0001pt 5.0pt;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin;\">At EPS, Pakur the standard of teaching is high and learning is marked by a sense of adventure. The students are taught by a team of experienced and enthusiastic teachers who make education fun and take every opportunity to cultivate creativity individuality and a love of learning.</span></p>\r\n<p class=\"MsoBodyText\" style=\"line-height: 107%; margin: 7.85pt 10.15pt .0001pt 5.0pt;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt; background: white;\">We aim and believe that the purpose of education is to create students who will become confident, responsible, happy and successful individuals.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: center; line-height: 22.5pt; mso-pagination: widow-orphan; mso-outline-level: 2; text-autospace: ideograph-numeric ideograph-other; margin: 11.25pt 0cm 11.25pt 0cm;\" align=\"center\"><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 16.5pt; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; text-transform: uppercase; letter-spacing: .3pt; mso-bidi-language: AR-SA;\">THE SCHOOL MOTTO</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"text-align: center; line-height: 16.5pt; mso-pagination: widow-orphan; text-autospace: ideograph-numeric ideograph-other;\" align=\"center\"><strong><em style=\"mso-bidi-font-style: normal;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt; mso-bidi-language: AR-SA;\">&ldquo;Service before Self&rdquo;<br style=\"mso-special-character: line-break;\" /> <!-- [if !supportLineBreakNewLine]--><br style=\"mso-special-character: line-break;\" /> <!--[endif]--></span></em></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; text-align: justify; line-height: 16.5pt; mso-pagination: widow-orphan; text-autospace: ideograph-numeric ideograph-other;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt; mso-bidi-language: AR-SA;\">EPS is committed to pursue excellence in every imaginable field. For us every child is a leader of tomorrow and we leave no stone unturned to ensure that every DIPSITE excels.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; text-align: justify; line-height: 16.5pt; mso-pagination: widow-orphan; text-autospace: ideograph-numeric ideograph-other;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt; mso-bidi-language: AR-SA;\">We pledge to serve others before we serve ourselves. We vow to uphold our motto in its true spirit, to reinforce our commitment to the service of others.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; text-align: center; line-height: 16.5pt; mso-pagination: widow-orphan; text-autospace: ideograph-numeric ideograph-other;\" align=\"center\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; letter-spacing: .3pt; mso-bidi-language: AR-SA;\">We firmly believe in &ldquo;Their need is greater than mine&rdquo;.</span></p>', '<p class=\"para-w3-agile\">Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra. Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.&nbsp;</p>\r\n<p class=\"para-w3-agile\">asdsad</p>', '<p>Some random text...</p> <p>Some random text...</p> <p>Some random text...</p> <p>Some random text...</p> <p>Some random text...</p> <p>Some random text...</p> <p>Some random text...</p> <p>Some random text...</p>', '<p>Elite Public School Pakur Jharkhand Run and Managed by \"Arvind Social Service and Education Trust (ASSET)\" since 2010 is going to be affilated to CBSE very soon.EPS, Pakur has come a long way from its fledge days and spread its wing to a sore high up in the sky achieving greater and greater heights.</p>\r\n<p>&nbsp;At EPS Pakur the standard the standard of teaching is high and learning is marked by a sense of adventure.</p>', '<p>&nbsp;The students are taught by Team of Experienced and Enthusiastic teachers who make education fun and take every oppurtunity to cultivate creativity individuality and a loveof learning.</p>\r\n<p>We aim and believe that the purpose of education is to create students who will become confident, responsible, happy and successful individuals.</p>', '98694VID-20190315-WA0031.mp4', 'Heading', '<p style=\"box-sizing: border-box; border: 0px #e6e6e6; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 0px 1rem; padding: 0px; line-height: 1.7; color: #8c8c8c; font-family: Poppins, sans-serif; font-size: 16px;\">The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinsterï¿½s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingsterï¿½s alumni. All alumni are automatically enrolled!</p>\r\n<p style=\"box-sizing: border-box; border: 0px #e6e6e6; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 0px 1rem; padding: 0px; line-height: 1.7; color: #8c8c8c; font-family: Poppins, sans-serif; font-size: 16px;\">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>', '98636index3.JPG', '<p style=\"box-sizing: border-box; border: 0px #e6e6e6; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 0px 1rem; padding: 0px; line-height: 1.7; color: #8c8c8c; font-family: Poppins, sans-serif; font-size: 16px;\">The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinsterï¿½s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingsterï¿½s alumni. All alumni are automatically enrolled!</p>\r\n<p style=\"box-sizing: border-box; border: 0px #e6e6e6; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 0px 1rem; padding: 0px; line-height: 1.7; color: #8c8c8c; font-family: Poppins, sans-serif; font-size: 16px;\">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>', 'Heading', '64634index4.JPG', '5161051918t4.jpg', '62585952884.jpg', '3.jpg', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `dname` text NOT NULL,
  `dstudent` text NOT NULL,
  `dmessage` text NOT NULL,
  `dimage` text NOT NULL,
  `pname` text NOT NULL,
  `pstudent` text NOT NULL,
  `pmessage` text NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `dname`, `dstudent`, `dmessage`, `dimage`, `pname`, `pstudent`, `pmessage`, `pimage`) VALUES
(1, 'MR. ARVIND SAH', '<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\">Every year hundreds of little children, with big and bright dreams march into our portals and are eager to share with us the varied things that they would like to grow up and do. The many different roles they\'d like to play and the wondrous ways in which they\'d like to change the world. And every year, each of them inspire me to get for them the very best of educational facilities and design an environment where children may learn to learn.</p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri\',sans-serif; mso-ascii-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Tahoma;\">&nbsp;</span></p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri\',sans-serif; mso-ascii-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Tahoma;\">Where the little ones can grow to understand the process of becoming what they wish to be, in a responsible and conscientious manner. Where &ldquo;education&rdquo; goes beyond the mere cramming of pre-discovered facts and theorems and enters a realm where young minds, are designed to become inquirers, thinkers, achievers, communicators and above all Global Citizens with a conscious rooted deep in the Indian value system.</span></p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri\',sans-serif; mso-ascii-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Tahoma;\">&nbsp;</span></p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri\',sans-serif; mso-ascii-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Tahoma;\">The entire space dedicated entirely to the needs of growing children. A space where they can dream, believe, fly and be the people they\'d like to be. As I look upon children&rsquo;s bright and eager faces and the opportunities my team has planned for their future, from our portals I envision, the birth of conscientious leaders, responsible achievers and principled citizens of the world.</span></p>', '<p class=\"para-w3-agile\">Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra. Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.</p>', '6476260390Director Sir .jpg', 'Mrs. Mousumi Banerjee (Mukherjee)', '<p style=\"text-align: justify; line-height: 18.0pt; background: white; vertical-align: baseline; margin: 0cm 0cm 18.0pt 0cm;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Arial; color: black; mso-themecolor: text1;\">We affirm that education begins at birth and continues through life. Our complete focus is to provide a support center to our children so they continue learning and developing towards becoming whole and healthy individuals.</span></p>\r\n<p style=\"text-align: justify; line-height: 18.0pt; background: white; vertical-align: baseline; margin: 0cm 0cm 18.0pt 0cm;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Arial; color: black; mso-themecolor: text1;\">We work with the core belief that wisdom can be cultivated gradually amongst all individuals. It is to make them wise so that they are able to use their intelligence judiciously.</span></p>\r\n<p style=\"text-align: justify; line-height: 16.5pt; background: white; margin: 0cm 0cm 7.5pt 0cm;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Arial; color: black; mso-themecolor: text1; letter-spacing: .3pt;\">Our curriculum and practices are consistently reviewed to ensure that we are following the most updated best practices, meeting all regulations, and addressing the future needs of our students.&nbsp;&nbsp; Our staff consistently follows current trends and after brainstorming over the best plan of action to incorporate those trends, we zero in on the ones that are most appropriate to our classrooms. The system of education has become so dynamic that it is no longer enough to connect the dots, we need to think out of the box and think beyond a pattern.</span><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Tahoma; color: black; mso-themecolor: text1;\"> We foster a positive spirit and believe in partnership between students, parents, teachers and support staff striving to create a milieu that sustains excellence. Our distinction lies in the pursuit of high academic attainment through support, encouragement, praise and motivation.<br style=\"mso-special-character: line-break;\" /> <!-- [if !supportLineBreakNewLine]--><br style=\"mso-special-character: line-break;\" /> <!--[endif]--></span></p>\r\n<p style=\"text-align: justify; line-height: 16.5pt; background: white; margin: 0cm 0cm 7.5pt 0cm;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Arial; color: black; mso-themecolor: text1; letter-spacing: .3pt;\">The students at EPS, Pakur are offered many opportunities to explore their interests and investigate new ideas.&nbsp; We offer many clubs, activities, sports and a large variety of musical ventures that our students can participate in.&nbsp; Many of our students are involved in a variety of extracurricular activities that allow them the opportunity to grow at their own pace in a safe, nurturing environment.&nbsp; Our list of clubs, activities and other extracurricular offerings are broadened each year with a hope to have something that interests every student.<span style=\"background: white;\"> The students are encouraged to take part in all the internal and external events and are given enough guidance and practice before being exposed to the competitions.<br style=\"mso-special-character: line-break;\" /> <!-- [if !supportLineBreakNewLine]--><br style=\"mso-special-character: line-break;\" /> <!--[endif]--></span></span></p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Tahoma; color: black; mso-themecolor: text1;\">I strongly believe that education is a collaborative effort that involves professional administrators, committed teachers and motivated students. We dedicate ourselves as professional administrators in creating a dynamic education programme empowering the students in a global perspective.</span></p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Tahoma; color: black; mso-themecolor: text1;\">&nbsp;</span></p>\r\n<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify; line-height: 13.5pt;\"><span lang=\"EN-US\" style=\"font-family: \'Calibri Light\',sans-serif; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin; mso-bidi-font-family: Tahoma; color: black; mso-themecolor: text1;\">We are a group of diverse experiences and outlooks, committed to excellence in preparing learners for enriched opportunities worldwide. In short, learning at is a wholesome package of attitude, challenge and opportunity.</span></p>', '<p class=\"para-w3-agile\">Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra. Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.Aenean eget accumsan lectus, vel vestibulum nisl. Nullam at tempor enim. Fusce ornare auctor varius. Donec fringilla fringilla dignissim. Pellentesque non ligula vel augue fringilla viverra.</p>', 'Prinicpal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `dates` text NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `dates`, `title`, `message`, `image`) VALUES
(1, 'JUNE 6, 2016', 'ADMISSION , STUDENT', 'Professor Albert joint research on mobile money in Tanzania', '1.jpg'),
(2, 'JUNE 6, 2016', 'ADMISSION , STUDENT', 'A Global MBA for the next generation of business leaders', '1.jpg'),
(3, 'JUNE 6, 2016', 'ADMISSION , STUDENT', 'Professor Tom comments on voluntary recalls by snack brands', '1.jpg'),
(4, 'JUNE 6, 2016', 'ADMISSION , STUDENT', 'Professor Alexa is interviewed about Twitter’s valuation', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `message`, `image`) VALUES
(2, 'New Notice for April', 'Elite Public School has already started online classes for the students. Please contact school office and provide us your WhatsApp number  so that they can join the class.\r\nEPS, Pakur\r\n', '70245IMG_20200429_111937__01.jpg'),
(6, '\r\nNew Notice for May', 'Elite Public School has already started online classes for the students. Please contact school office and provide us your WhatsApp number so that they can join the class. EPS, Pakur', '70245IMG_20200429_111937__02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(11) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `video`) VALUES
(1, 'mov_bbb.mp4'),
(2, 'mov_bbb.mp4'),
(3, 'mov_bbb.mp4'),
(4, 'mov_bbb.mp4'),
(5, 'mov_bbb.mp4'),
(6, 'mov_bbb.mp4'),
(7, 'mov_bbb.mp4'),
(8, 'mov_bbb.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacted`
--
ALTER TABLE `contacted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacted`
--
ALTER TABLE `contacted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
