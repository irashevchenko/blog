-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 19 2012 г., 12:05
-- Версия сервера: 5.5.20
-- Версия PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `microblog`
--

CREATE TABLE IF NOT EXISTS `microblog` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=130 ;

--
-- Дамп данных таблицы `microblog`
--

INSERT INTO `microblog` (`id`, `message`, `data`) VALUES
(84, 'Может быть в скором будущем мы все станем....)', '2012-05-20 17:27:19'),
(122, 'С редактированием разобрались...', '2012-05-20 22:41:29'),
(123, 'Продуктивный сегодня день)))', '2012-05-20 22:50:31'),
(124, 'Говорят у людей с холодными руками горячее сердце)))', '2012-05-21 15:18:08'),
(125, 'влечение ума рождает уважение', '2012-05-21 15:18:24'),
(126, 'Влечение сердец рождает дружбу!', '2012-05-21 15:18:33'),
(128, 'Жизнь всё расставит по своим местам', '2012-05-21 15:51:11'),
(129, 'Для работы просто необходимо иметь упорство и терпение))', '2012-05-21 15:51:26');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(15) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `login`, `password`) VALUES
(1, 'Ira', 'Sheva', 'irasheva', 'lfiekmrf2005');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
