-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 10 2012 г., 20:35
-- Версия сервера: 5.5.20
-- Версия PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mydatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `microblog`
--

CREATE TABLE IF NOT EXISTS `microblog` (
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `microblog`
--

INSERT INTO `microblog` (`message`, `data`) VALUES
('В течение жизни разум человека собирает собственную мозаику: смыслов, опыта, убеждений', '2012-03-11 13:13:13'),
('Мысленная энергия материализует скрытые варианты', '2012-04-10 10:10:25'),
('Вместо того чтобы надеяться на удачную случайность, не лучше ли превратить ее в закономерность?', '2012-05-07 13:50:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
