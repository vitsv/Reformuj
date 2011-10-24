-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 13 Sty 2011, 21:12
-- Wersja serwera: 5.1.41
-- Wersja PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `social`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_blog`
--

CREATE TABLE IF NOT EXISTS `lv_blog` (
  `blog_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_owner_id` int(11) unsigned NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_type` enum('personal','open','invite','close') DEFAULT 'personal',
  `blog_date_add` datetime NOT NULL,
  `blog_date_edit` datetime DEFAULT NULL,
  `blog_rating` float(9,3) NOT NULL DEFAULT '0.000',
  `blog_count_vote` int(11) unsigned NOT NULL DEFAULT '0',
  `blog_count_user` int(11) unsigned NOT NULL DEFAULT '0',
  `blog_limit_rating_topic` float(9,3) NOT NULL DEFAULT '0.000',
  `blog_url` varchar(200) DEFAULT NULL,
  `blog_avatar` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `user_owner_id` (`user_owner_id`),
  KEY `blog_type` (`blog_type`),
  KEY `blog_url` (`blog_url`),
  KEY `blog_title` (`blog_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_blog_user`
--

CREATE TABLE IF NOT EXISTS `lv_blog_user` (
  `blog_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `user_role` int(3) DEFAULT '1',
  UNIQUE KEY `blog_id_user_id_uniq` (`blog_id`,`user_id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_city`
--

CREATE TABLE IF NOT EXISTS `lv_city` (
  `city_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `city_name` (`city_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_city_user`
--

CREATE TABLE IF NOT EXISTS `lv_city_user` (
  `city_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  UNIQUE KEY `user_id` (`user_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_comment`
--

CREATE TABLE IF NOT EXISTS `lv_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_pid` int(11) unsigned DEFAULT NULL,
  `target_id` int(11) unsigned DEFAULT NULL,
  `target_type` enum('topic','talk') NOT NULL DEFAULT 'topic',
  `target_parent_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL,
  `comment_text` text NOT NULL,
  `comment_text_hash` varchar(32) NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_user_ip` varchar(20) NOT NULL,
  `comment_rating` float(9,3) NOT NULL DEFAULT '0.000',
  `comment_count_vote` int(11) unsigned NOT NULL DEFAULT '0',
  `comment_delete` tinyint(4) NOT NULL DEFAULT '0',
  `comment_publish` tinyint(1) NOT NULL DEFAULT '1',
  `guest_name` varchar(300) DEFAULT NULL,
  `guest_email` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_pid` (`comment_pid`),
  KEY `type_date_rating` (`target_type`,`comment_date`,`comment_rating`),
  KEY `id_type` (`target_id`,`target_type`),
  KEY `type_delete_publish` (`target_type`,`comment_delete`,`comment_publish`),
  KEY `user_type` (`user_id`,`target_type`),
  KEY `target_parent_id` (`target_parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_comment_online`
--

CREATE TABLE IF NOT EXISTS `lv_comment_online` (
  `comment_online_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `target_id` int(11) unsigned DEFAULT NULL,
  `target_type` enum('topic','talk') NOT NULL DEFAULT 'topic',
  `target_parent_id` int(11) NOT NULL DEFAULT '0',
  `comment_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`comment_online_id`),
  UNIQUE KEY `id_type` (`target_id`,`target_type`),
  KEY `comment_id` (`comment_id`),
  KEY `type_parent` (`target_type`,`target_parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_country`
--

CREATE TABLE IF NOT EXISTS `lv_country` (
  `country_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `country_name` (`country_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_country_user`
--

CREATE TABLE IF NOT EXISTS `lv_country_user` (
  `country_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  UNIQUE KEY `user_id` (`user_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_favourite`
--

CREATE TABLE IF NOT EXISTS `lv_favourite` (
  `user_id` int(11) unsigned NOT NULL,
  `target_id` int(11) unsigned DEFAULT NULL,
  `target_type` enum('topic','comment','talk') DEFAULT 'topic',
  `target_publish` tinyint(1) DEFAULT '1',
  UNIQUE KEY `user_id_target_id_type` (`user_id`,`target_id`,`target_type`),
  KEY `target_publish` (`target_publish`),
  KEY `id_type` (`target_id`,`target_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_friend`
--

CREATE TABLE IF NOT EXISTS `lv_friend` (
  `user_from` int(11) unsigned NOT NULL DEFAULT '0',
  `user_to` int(11) unsigned NOT NULL DEFAULT '0',
  `status_from` int(4) NOT NULL,
  `status_to` int(4) NOT NULL,
  PRIMARY KEY (`user_from`,`user_to`),
  KEY `user_to` (`user_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_invite`
--

CREATE TABLE IF NOT EXISTS `lv_invite` (
  `invite_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `invite_code` varchar(32) NOT NULL,
  `user_from_id` int(11) unsigned NOT NULL,
  `user_to_id` int(11) unsigned DEFAULT NULL,
  `invite_date_add` datetime NOT NULL,
  `invite_date_used` datetime DEFAULT NULL,
  `invite_used` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`invite_id`),
  UNIQUE KEY `invite_code` (`invite_code`),
  KEY `user_from_id` (`user_from_id`),
  KEY `user_to_id` (`user_to_id`),
  KEY `invite_date_add` (`invite_date_add`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_notify_task`
--

CREATE TABLE IF NOT EXISTS `lv_notify_task` (
  `notify_task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(30) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `notify_subject` varchar(200) DEFAULT NULL,
  `notify_text` text,
  `date_created` datetime DEFAULT NULL,
  `notify_task_status` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`notify_task_id`),
  KEY `date_created` (`date_created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_page`
--

CREATE TABLE IF NOT EXISTS `lv_page` (
  `page_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_pid` int(11) unsigned DEFAULT NULL,
  `page_url` varchar(50) NOT NULL,
  `page_url_full` varchar(254) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_text` text NOT NULL,
  `page_date_add` datetime NOT NULL,
  `page_date_edit` datetime DEFAULT NULL,
  `page_seo_keywords` varchar(250) DEFAULT NULL,
  `page_seo_description` varchar(250) DEFAULT NULL,
  `page_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `page_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `page_sort` int(11) NOT NULL,
  PRIMARY KEY (`page_id`),
  KEY `page_pid` (`page_pid`),
  KEY `page_url_full` (`page_url_full`,`page_active`),
  KEY `page_title` (`page_title`),
  KEY `page_sort` (`page_sort`),
  KEY `page_main` (`page_main`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_reminder`
--

CREATE TABLE IF NOT EXISTS `lv_reminder` (
  `reminder_code` varchar(32) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `reminder_date_add` datetime NOT NULL,
  `reminder_date_used` datetime DEFAULT '0000-00-00 00:00:00',
  `reminder_date_expire` datetime NOT NULL,
  `reminde_is_used` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`reminder_code`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_session`
--

CREATE TABLE IF NOT EXISTS `lv_session` (
  `session_key` varchar(32) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `session_ip_create` varchar(15) NOT NULL,
  `session_ip_last` varchar(15) NOT NULL,
  `session_date_create` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `session_date_last` datetime NOT NULL,
  PRIMARY KEY (`session_key`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `session_date_last` (`session_date_last`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_talk`
--

CREATE TABLE IF NOT EXISTS `lv_talk` (
  `talk_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `talk_title` varchar(200) NOT NULL,
  `talk_text` text NOT NULL,
  `talk_date` datetime NOT NULL,
  `talk_date_last` datetime NOT NULL,
  `talk_user_ip` varchar(20) NOT NULL,
  `talk_count_comment` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`talk_id`),
  KEY `user_id` (`user_id`),
  KEY `talk_title` (`talk_title`),
  KEY `talk_date` (`talk_date`),
  KEY `talk_date_last` (`talk_date_last`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_talk_blacklist`
--

CREATE TABLE IF NOT EXISTS `lv_talk_blacklist` (
  `user_id` int(10) unsigned NOT NULL,
  `user_target_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`user_target_id`),
  KEY `lv_talk_blacklist_fk_target` (`user_target_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_talk_user`
--

CREATE TABLE IF NOT EXISTS `lv_talk_user` (
  `talk_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `date_last` datetime DEFAULT NULL,
  `comment_id_last` int(11) NOT NULL DEFAULT '0',
  `comment_count_new` int(11) NOT NULL DEFAULT '0',
  `talk_user_active` tinyint(1) DEFAULT '1',
  UNIQUE KEY `talk_id_user_id` (`talk_id`,`user_id`),
  KEY `user_id` (`user_id`),
  KEY `date_last` (`date_last`),
  KEY `date_last_2` (`date_last`),
  KEY `talk_user_active` (`talk_user_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_topic`
--

CREATE TABLE IF NOT EXISTS `lv_topic` (
  `topic_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `topic_type` enum('topic','link','question') NOT NULL DEFAULT 'topic',
  `topic_title` varchar(200) NOT NULL,
  `topic_tags` varchar(250) DEFAULT 'tag' COMMENT 'tags separated by a comma',
  `topic_date_add` datetime NOT NULL,
  `topic_date_edit` datetime DEFAULT NULL,
  `topic_user_ip` varchar(20) NOT NULL,
  `topic_publish` tinyint(1) NOT NULL DEFAULT '0',
  `topic_publish_draft` tinyint(1) NOT NULL DEFAULT '1',
  `topic_publish_index` tinyint(1) NOT NULL DEFAULT '0',
  `topic_rating` float(9,3) NOT NULL DEFAULT '0.000',
  `topic_count_vote` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_count_read` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_count_comment` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_cut_text` varchar(100) DEFAULT NULL,
  `topic_forbid_comment` tinyint(1) NOT NULL DEFAULT '0',
  `topic_text_hash` varchar(32) NOT NULL,
  `topic_cat` enum('idea','err','thank','ques') NOT NULL DEFAULT 'idea',
  PRIMARY KEY (`topic_id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`),
  KEY `topic_date_add` (`topic_date_add`),
  KEY `topic_rating` (`topic_rating`),
  KEY `topic_publish` (`topic_publish`),
  KEY `topic_text_hash` (`topic_text_hash`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_topic_content`
--

CREATE TABLE IF NOT EXISTS `lv_topic_content` (
  `topic_id` int(11) unsigned NOT NULL,
  `topic_text` longtext NOT NULL,
  `topic_text_short` text NOT NULL,
  `topic_text_source` longtext NOT NULL,
  `topic_extra` text NOT NULL,
  `topic_answer` text,
  `topic_answer_autor` int(11) DEFAULT NULL,
  `topic_answer_data` datetime DEFAULT NULL,
  `topic_status` enum('comleted','started','planned','review','canceled') DEFAULT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_topic_question_vote`
--

CREATE TABLE IF NOT EXISTS `lv_topic_question_vote` (
  `topic_id` int(11) unsigned NOT NULL,
  `user_voter_id` int(11) unsigned NOT NULL,
  `answer` tinyint(4) NOT NULL,
  UNIQUE KEY `topic_id_user_id` (`topic_id`,`user_voter_id`),
  KEY `user_voter_id` (`user_voter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_topic_read`
--

CREATE TABLE IF NOT EXISTS `lv_topic_read` (
  `topic_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `date_read` datetime NOT NULL,
  `comment_count_last` int(10) unsigned NOT NULL DEFAULT '0',
  `comment_id_last` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `topic_id_user_id` (`topic_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_topic_tag`
--

CREATE TABLE IF NOT EXISTS `lv_topic_tag` (
  `topic_tag_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `blog_id` int(11) unsigned NOT NULL,
  `topic_tag_text` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_tag_id`),
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`),
  KEY `blog_id` (`blog_id`),
  KEY `topic_tag_text` (`topic_tag_text`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_user`
--

CREATE TABLE IF NOT EXISTS `lv_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_skill` float(9,3) unsigned NOT NULL DEFAULT '0.000',
  `user_date_register` datetime NOT NULL,
  `user_date_activate` datetime DEFAULT NULL,
  `user_date_comment_last` datetime DEFAULT NULL,
  `user_ip_register` varchar(20) NOT NULL,
  `user_rating` float(9,3) NOT NULL DEFAULT '0.000',
  `user_count_vote` int(11) unsigned NOT NULL DEFAULT '0',
  `user_activate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_activate_key` varchar(32) DEFAULT NULL,
  `user_profile_name` varchar(50) DEFAULT NULL,
  `user_profile_sex` enum('man','woman','other') NOT NULL DEFAULT 'other',
  `user_profile_country` varchar(30) DEFAULT NULL,
  `user_profile_region` varchar(30) DEFAULT NULL,
  `user_profile_city` varchar(30) DEFAULT NULL,
  `user_profile_birthday` datetime DEFAULT NULL,
  `user_profile_site` varchar(200) DEFAULT NULL,
  `user_profile_site_name` varchar(50) DEFAULT NULL,
  `user_profile_icq` bigint(20) unsigned DEFAULT NULL,
  `user_profile_about` text,
  `user_profile_date` datetime DEFAULT NULL,
  `user_profile_avatar` varchar(250) DEFAULT NULL,
  `user_profile_foto` varchar(250) DEFAULT NULL,
  `user_settings_notice_new_topic` tinyint(1) NOT NULL DEFAULT '1',
  `user_settings_notice_new_comment` tinyint(1) NOT NULL DEFAULT '1',
  `user_settings_notice_new_talk` tinyint(1) NOT NULL DEFAULT '1',
  `user_settings_notice_reply_comment` tinyint(1) NOT NULL DEFAULT '1',
  `user_settings_notice_new_friend` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_login` (`user_login`),
  UNIQUE KEY `user_mail` (`user_mail`),
  KEY `user_activate_key` (`user_activate_key`),
  KEY `user_activate` (`user_activate`),
  KEY `user_rating` (`user_rating`),
  KEY `user_profile_sex` (`user_profile_sex`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_user_administrator`
--

CREATE TABLE IF NOT EXISTS `lv_user_administrator` (
  `user_id` int(11) unsigned NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `lv_vote`
--

CREATE TABLE IF NOT EXISTS `lv_vote` (
  `target_id` int(11) NOT NULL DEFAULT '0',
  `user_voter_id` int(11) unsigned NOT NULL,
  `target_type` enum('topic','blog','user','comment') NOT NULL DEFAULT 'topic',
  `vote_direction` tinyint(2) DEFAULT '0',
  `vote_value` float(9,3) NOT NULL DEFAULT '0.000',
  `vote_date` datetime NOT NULL,
  KEY `user_voter_id` (`user_voter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `lv_blog`
--
ALTER TABLE `lv_blog`
  ADD CONSTRAINT `lv_blog_fk` FOREIGN KEY (`user_owner_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_blog_user`
--
ALTER TABLE `lv_blog_user`
  ADD CONSTRAINT `lv_blog_user_fk` FOREIGN KEY (`blog_id`) REFERENCES `lv_blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_blog_user_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_city_user`
--
ALTER TABLE `lv_city_user`
  ADD CONSTRAINT `lv_city_user_fk` FOREIGN KEY (`city_id`) REFERENCES `lv_city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_city_user_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_comment`
--
ALTER TABLE `lv_comment`
  ADD CONSTRAINT `lv_topic_comment_fk` FOREIGN KEY (`comment_pid`) REFERENCES `lv_comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_comment_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_comment_online`
--
ALTER TABLE `lv_comment_online`
  ADD CONSTRAINT `lv_topic_comment_online_fk1` FOREIGN KEY (`comment_id`) REFERENCES `lv_comment` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_country_user`
--
ALTER TABLE `lv_country_user`
  ADD CONSTRAINT `lv_country_user_fk` FOREIGN KEY (`country_id`) REFERENCES `lv_country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_country_user_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_favourite`
--
ALTER TABLE `lv_favourite`
  ADD CONSTRAINT `lv_favourite_target_fk` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_friend`
--
ALTER TABLE `lv_friend`
  ADD CONSTRAINT `lv_friend_from_fk` FOREIGN KEY (`user_from`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_friend_to_fk` FOREIGN KEY (`user_to`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_invite`
--
ALTER TABLE `lv_invite`
  ADD CONSTRAINT `lv_invite_fk` FOREIGN KEY (`user_from_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_invite_fk1` FOREIGN KEY (`user_to_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_page`
--
ALTER TABLE `lv_page`
  ADD CONSTRAINT `lv_page_fk` FOREIGN KEY (`page_pid`) REFERENCES `lv_page` (`page_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_reminder`
--
ALTER TABLE `lv_reminder`
  ADD CONSTRAINT `lv_reminder_fk` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_session`
--
ALTER TABLE `lv_session`
  ADD CONSTRAINT `lv_session_fk` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_talk`
--
ALTER TABLE `lv_talk`
  ADD CONSTRAINT `lv_talk_fk` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_talk_blacklist`
--
ALTER TABLE `lv_talk_blacklist`
  ADD CONSTRAINT `lv_talk_blacklist_fk_target` FOREIGN KEY (`user_target_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_talk_blacklist_fk_user` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_talk_user`
--
ALTER TABLE `lv_talk_user`
  ADD CONSTRAINT `lv_talk_user_fk` FOREIGN KEY (`talk_id`) REFERENCES `lv_talk` (`talk_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_talk_user_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_topic`
--
ALTER TABLE `lv_topic`
  ADD CONSTRAINT `lv_topic_fk` FOREIGN KEY (`blog_id`) REFERENCES `lv_blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_topic_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_topic_content`
--
ALTER TABLE `lv_topic_content`
  ADD CONSTRAINT `lv_topic_content_fk` FOREIGN KEY (`topic_id`) REFERENCES `lv_topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_topic_question_vote`
--
ALTER TABLE `lv_topic_question_vote`
  ADD CONSTRAINT `lv_topic_question_vote_fk` FOREIGN KEY (`topic_id`) REFERENCES `lv_topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_topic_question_vote_fk1` FOREIGN KEY (`user_voter_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_topic_read`
--
ALTER TABLE `lv_topic_read`
  ADD CONSTRAINT `lv_topic_read_fk` FOREIGN KEY (`topic_id`) REFERENCES `lv_topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_topic_read_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_topic_tag`
--
ALTER TABLE `lv_topic_tag`
  ADD CONSTRAINT `lv_topic_tag_fk` FOREIGN KEY (`topic_id`) REFERENCES `lv_topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_topic_tag_fk1` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lv_topic_tag_fk2` FOREIGN KEY (`blog_id`) REFERENCES `lv_blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `lv_user_administrator`
--
ALTER TABLE `lv_user_administrator`
  ADD CONSTRAINT `user_administrator_fk` FOREIGN KEY (`user_id`) REFERENCES `lv_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
