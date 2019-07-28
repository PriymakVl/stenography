-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 26 2019 г., 16:55
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stenography`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `exercises`
--

INSERT INTO `exercises` (`id`, `number`, `title`, `status`) VALUES
(1, 1, 'Урок №1', 1),
(2, 2, 'Урок №2', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
