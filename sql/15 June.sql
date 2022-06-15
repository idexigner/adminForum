-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 06:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keepadding`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `ch_id` int(50) NOT NULL,
  `ch_title` varchar(50) NOT NULL,
  `ch_img` varchar(100) NOT NULL,
  `ch_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`ch_id`, `ch_title`, `ch_img`, `ch_desc`) VALUES
(1, 'politics', 'politics.jpg', 'Lets discuss about whats happening around the world of politics.'),
(2, 'video', 'videos.jpg', 'Lets discuss about whats happening around the world of video.'),
(3, 'exchange', 'exchange.jpg', 'Lets discuss about whats happening around the world of exchange.'),
(4, 'pets', 'pets.jpg', 'Lets discuss about whats happening around the world of pets.'),
(5, 'music', 'music.jpg', 'Lets discuss about whats happening around the world of music.'),
(6, 'movies', 'movies.jpg', 'Lets discuss about whats happening around the world of movies.'),
(7, 'nature', 'nature.jpg', 'Lets discuss about whats happening around the world of nature.'),
(8, 'science', 'science.jpg', 'Lets discuss about whats happening around the world of science.'),
(9, 'entertainment', 'entertainment.jpg', 'Lets discuss about whats happening around the world of entertainment.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(50) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_type` varchar(50) NOT NULL,
  `post_ch_id` varchar(50) NOT NULL,
  `post_body` text NOT NULL,
  `post_user_id` varchar(50) NOT NULL,
  `post_likes` varchar(1000) NOT NULL,
  `post_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_type`, `post_ch_id`, `post_body`, `post_user_id`, `post_likes`, `post_created`) VALUES
(11, 'How to Rewrite the Laws of Physics in the Language of Impossibility', 'Discussion', '8', 'They say that in art, constraints lead to creativity. The same seems to be true of the universe. By placing limits on nature, the laws of physics squeeze out reality’s most fantastical creations. Limit light’s speed, and suddenly space can shrink, time can slow. Limit the ability to divide energy into infinitely small units, and the full weirdness of quantum mechanics blossoms. “Declaring something impossible leads to more things being possible,” writes the physicist Chiara Marletto. “Bizarre as it may seem, it is commonplace in quantum physics.”', '1', 'a:1:{i:0;s:1:\"1\";}', 'November 6, 2021'),
(12, 'A cup of jo', 'Discussion', '9', 'A weekend hobby for Joanna Goddard turned into a full-time job. She started A Cup of Jo in 2007 and became a superstar lifestyle blogger. In fact, the site is barely a personal blog anymore, as Jo now has a team of professional writers who share her interests, such as style, design, food, and motherhood.', '1', 'a:1:{i:0;s:1:\"1\";}', 'February 5, 2022'),
(13, 'Best student friendly countries for studies in 2022', 'Discussion', '9', 'A weekend hobby for Joanna Goddard turned into a full-time job. She started A Cup of Jo in 2007 and became a superstar lifestyle blogger. In fact, the site is barely a personal blog anymore, as Jo now has a team of professional writers who share her interests, such as style, design, food, and motherhood.', '1', 'a:1:{i:0;s:1:\"1\";}', 'February 18, 2022'),
(16, 'Who is best?', 'Poll', '8', 'a:3:{i:0;s:10:\"Babar Azam\";i:1;s:11:\"Virat Kohli\";i:2;s:11:\"Jos Buttler\";}', '1', 'a:0:{}', 'February 20, 2022'),
(24, 'Nature', 'Gallery', '1', 'http://localhost/Forum/uploads/images/70956.png', '1', 'a:0:{}', 'February 20, 2022'),
(25, 'Tax system fraud ', 'Gallery', '1', 'http://keepadding.co/Forum/uploads/images/47810.png', '1', 'a:0:{}', 'February 21, 2022'),
(26, 'Chelsea Football Owner Sanctioned', 'Video', '2', 'https://www.youtube.com/embed/DAu7bDtuVUI', '1', 'a:1:{i:0;s:1:\"4\";}', 'March 13, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `pc_id` int(10) NOT NULL,
  `pc_comment` text NOT NULL,
  `pc_post_id` varchar(10) NOT NULL,
  `pc_user_id` varchar(10) NOT NULL,
  `pc_likes` varchar(1000) NOT NULL,
  `pc_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`pc_id`, `pc_comment`, `pc_post_id`, `pc_user_id`, `pc_likes`, `pc_created`) VALUES
(6, 'This is the test comment!', '11', '1', 'a:1:{i:0;s:1:\"1\";}', 'November 22, 2021'),
(8, 'Free 2 test comment', '11', '4', 'a:0:{}', 'November 27, 2021'),
(9, 'free 3 test comment', '11', '1', 'a:0:{}', 'February 5, 2022'),
(10, 'asdasdasd', '26', '1', 'a:1:{i:0;s:1:\"4\";}', 'April 4, 2022'),
(11, 'asgdjasgd', '26', '1', 'a:0:{}', 'May 15, 2022'),
(12, 'testing comment', '26', '4', 'a:0:{}', 'June 11, 2022'),
(13, 'new one', '25', '4', 'a:0:{}', 'June 12, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments_pledges`
--

CREATE TABLE `post_comments_pledges` (
  `pcp_id` int(11) NOT NULL,
  `pcp_user_id` varchar(50) NOT NULL,
  `pcp_pc_id` varchar(11) NOT NULL,
  `pcp_post_id` varchar(50) NOT NULL,
  `pcp_pledge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments_pledges`
--

INSERT INTO `post_comments_pledges` (`pcp_id`, `pcp_user_id`, `pcp_pc_id`, `pcp_post_id`, `pcp_pledge`) VALUES
(5, '4', '8', '11', 'money'),
(6, '1', '6', '11', 'contact'),
(7, '1', '8', '11', 'time'),
(8, '1', '10', '26', 'time'),
(9, '1', '11', '26', 'money'),
(10, '4', '12', '26', 'time'),
(11, '4', '13', '25', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pro_id` int(11) NOT NULL,
  `pro_user_id` varchar(11) NOT NULL,
  `pro_title` varchar(500) NOT NULL,
  `pro_business_owner` varchar(50) NOT NULL,
  `pro_details` text NOT NULL,
  `pro_point_of_contact` varchar(50) NOT NULL,
  `pro_nature` text NOT NULL,
  `pro_proposal_type` text NOT NULL,
  `pro_budget` varchar(50) NOT NULL,
  `pro_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pro_id`, `pro_user_id`, `pro_title`, `pro_business_owner`, `pro_details`, `pro_point_of_contact`, `pro_nature`, `pro_proposal_type`, `pro_budget`, `pro_created`) VALUES
(1, '3', 'Title of project', 'Hassaan Khan', 'Lorem ipsum sit amet Lorem ipsum sit amet Lorem ipsum sit amet', 'Ahsan Dilshad', 'We are launching an app that uses community building to create business opportunities for Social Entrepreneurs.', 'Marketing Specialist with 2 years experience. Must submit a portfolio for consideration.', '1000', 'December 2, 2021'),
(2, '3', 'Social App', 'Reese Roberts', 'This idea is very exciting. Free peoples can post on forums that will be beneficial for business users to cash the idea & create business from them. This idea is very exciting. Free peoples can post on forums that will be beneficial for business users to cash the idea & create business from them. This idea is very exciting. Free peoples can post on forums that will be beneficial for business users to cash the idea & create business from them. This idea is very exciting. Free peoples can post on forums that will be beneficial for business users to cash the idea & create business from them. This idea is very exciting. Free peoples can post on forums that will be beneficial for business users to cash the idea & create business from them.', 'Hassaan Khan', 'Test nature of project line goes here.', 'Test proposal type line goes here.', '2500', 'December 4, 2021'),
(3, '3', 'Test application', 'Reese Roberts', 'social app for business development', 'Hassaan Khan', 'Lorem ipusm sit', 'lorem ua dakldasjnd asjd ', '3000', 'December 5, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `prop_id` int(11) NOT NULL,
  `prop_user_id` varchar(11) NOT NULL,
  `prop_pro_id` varchar(11) NOT NULL,
  `prop_desc` text NOT NULL,
  `prop_bid_amount` varchar(50) NOT NULL,
  `prop_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`prop_id`, `prop_user_id`, `prop_pro_id`, `prop_desc`, `prop_bid_amount`, `prop_created`) VALUES
(9, '2', '2', 'Proposal description goes here. I will do awesome work.', '700', 'December 18, 2021'),
(10, '2', '1', 'I will do my best', '500', 'May 15, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `s_id` int(11) NOT NULL,
  `s_monthly` varchar(250) DEFAULT NULL,
  `s_annually` varchar(250) DEFAULT NULL,
  `s_feature` text DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`s_id`, `s_monthly`, `s_annually`, `s_feature`, `is_active`) VALUES
(1, '-', '-', '[{\"feat\":\"Access to the social forums\"},{\"feat\":\"Ability to create a custom profile\"},{\"feat\":\"Ability to create Pledges\"},{\"feat\":\"Access the details of current projects (view only)\"}]', 1),
(2, '39.99', '399', '[{\"feat\":\"Access to the social forums\"},{\"feat\":\"Ability to create a custom profile with links for portfolio\\/CV materials\"},{\"feat\":\"Ability to create pledges and view pledge details made by other users\"},{\"feat\":\"Ability to submit bids on projects\"},{\"feat\":\"Communicate with business profiles\"},{\"feat\":\"Also includes discounts on some Serv Inc. products & services as well as that of its partners, affiliates, and subsidiaries. Some restrictions apply*\"}]', 1),
(3, '59.99', '599', '[{\"feat\":\"Includes all features included in lower tiers\"},{\"feat\":\"Ability to create projects\"},{\"feat\":\"Issue requests for proposals, and reach out to any profile on the platform\"},{\"feat\":\"Four (4) annual Assessment Meetings with our Business & research Development staff for free project development services\"},{\"feat\":\"This service includes quarterly publishings of project development updates and resources by industry, feedback on project planning, pledge analysis to help link users\' relevant networks and resources. Discounts on all Serv Inc. products & services as well as select products & services of its partners, affiliates, and subsidiaries.\"}]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `t_id` int(11) NOT NULL,
  `t_user_id` varchar(255) DEFAULT NULL,
  `t_role` varchar(255) DEFAULT NULL,
  `t_txn_id` varchar(255) DEFAULT NULL,
  `t_payment_gross` varchar(255) DEFAULT NULL,
  `t_currency_code` varchar(255) DEFAULT NULL,
  `t_payer_email` varchar(255) DEFAULT NULL,
  `t_payment_status` varchar(255) DEFAULT NULL,
  `t_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`t_id`, `t_user_id`, `t_role`, `t_txn_id`, `t_payment_gross`, `t_currency_code`, `t_payer_email`, `t_payment_status`, `t_created`) VALUES
(1, '1', '2', '3HV001018G225701J', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(2, '1', '2', '29S77276KH992471K', '399.00', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(3, '1', '2', '8E818475YU870813X', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(4, '1', '2', '3HV001018G225701J', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(5, '1', '2', '3HV001018G225701J', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(6, '1', '2', '8E818475YU870813X', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(7, '2', '2', '3HV001018G225701J', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(8, '2', '2', '26S831623L423623X', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(9, '1', '2', '8E818475YU870813X', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(10, '3', '2', '3HV001018G225701J', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(11, '3', '2', '9R527590LL168254L', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(12, '4', '3', '3HE391714J284325R', '59.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(13, '4', '2', '4G807348BL185125H', '399.00', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(14, '4', '2', '69C86603KM0933602', '399.00', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(15, '10', '2', '01982247SR672215V', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(16, '10', '2', '4G807348BL185125H', '399.00', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(17, '11', '2', '01982247SR672215V', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(18, '11', '2', '9XN22104M0432743L', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(19, '12', '2', '4G807348BL185125H', '399.00', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(20, '12', '2', '01982247SR672215V', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(21, '13', '2', '9XN22104M0432743L', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(22, '13', '2', '7WT82808T9771844P', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(23, '12', '2', '9UC19118AF321953H', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(24, '74', '2', '89U38162JR7757613', '399.00', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14'),
(25, '75', '2', '8AH319885J339115A', '39.99', 'USD', 'sb-f7jhf8298200@business.example.com', 'Completed', '2022-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_fullname` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL COMMENT '0=admin, 1=forum, 2=contractor, 3=business',
  `user_created` varchar(255) DEFAULT NULL,
  `user_expire` varchar(255) DEFAULT NULL,
  `user_package_type` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL COMMENT '0=notactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_fullname`, `user_email`, `user_pass`, `user_role`, `user_created`, `user_expire`, `user_package_type`, `is_active`) VALUES
(1, 'free', 'Hassaan Khan', 'free@gmail.com', '123', '1', '2022-06-13', '2023-06-13', 'Annually', 1),
(2, 'contractor', 'Ahsan Dilshad update', 'contractor@gmail.com', '123', '2', '2022-06-13', '2023-06-13', 'Annually', 1),
(3, 'business', 'Reese Roberts', 'business@gmail.com', '123', '3', '2022-06-13', '2023-06-13', 'Annually', 1),
(4, 'free2', 'Hamdan Nasir', 'free@gmail.com', '123', '1', '2022-06-13', '2023-06-13', 'Annually', 1),
(5, 'talha', 'Talha Javed', 'talhajaved@gmail.com', '123', '3', '2022-06-13', '2023-06-13', 'Annually', 1),
(8, 'admin', 'John David', 'admin@admin.com', '123', '0', '2022-06-13', '2023-06-13', 'Annually', 1),
(9, 'username', 'Test Full name', 'email@mail.cpm', '123123', '2', '2022-06-13', '2023-06-13', 'Annually', 1),
(10, 'test', 'Test', 'email@email.com', '123', '1', '2022-06-13', '2023-06-13', 'Annually', NULL),
(11, 'wqe', 'adfsadf', 'asf!@dsaff.co', '123', '3', '2022-06-13', '2023-06-13', 'Annually', NULL),
(12, 'asdf', 'asd', 'qweqwqweweq@awe.com', 'xzc', '3', '2022-06-13', '2023-06-13', 'Annually', NULL),
(13, 'test2', 'Qwqwe', 'test@tset.com', '123', '3', '2022-06-13', '2022-05-13', 'Annually', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `post_comments_pledges`
--
ALTER TABLE `post_comments_pledges`
  ADD PRIMARY KEY (`pcp_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `ch_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `pc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_comments_pledges`
--
ALTER TABLE `post_comments_pledges`
  MODIFY `pcp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
