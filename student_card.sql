-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2020 г., 19:35
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `student_card`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fakultet`
--

CREATE TABLE IF NOT EXISTS `fakultet` (
  `id` int(10) NOT NULL,
  `fakultet` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fakultet`
--

INSERT INTO `fakultet` (`id`, `fakultet`) VALUES
(1, 'Інформаційних технологій та економіки'),
(2, 'Юридичний');

-- --------------------------------------------------------

--
-- Структура таблицы `grup`
--

CREATE TABLE IF NOT EXISTS `grup` (
  `id` int(10) NOT NULL,
  `grup` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `grup`
--

INSERT INTO `grup` (`id`, `grup`) VALUES
(1, 'К-401'),
(2, 'К-402'),
(3, 'К-403'),
(4, 'К-11'),
(5, 'К-21');

-- --------------------------------------------------------

--
-- Структура таблицы `kafedra`
--

CREATE TABLE IF NOT EXISTS `kafedra` (
  `id` int(10) NOT NULL,
  `kafedra` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kafedra`
--

INSERT INTO `kafedra` (`id`, `kafedra`) VALUES
(1, 'Обліку і оподаткування'),
(2, 'Фінансів'),
(3, 'Комп′ютерних систем і технологій'),
(4, 'Соціально-гуманітарних дисциплін'),
(5, 'Професійних та спеціальних правових дисциплін'),
(6, 'Фундаментальних юридичних дисциплін');

-- --------------------------------------------------------

--
-- Структура таблицы `specialnist`
--

CREATE TABLE IF NOT EXISTS `specialnist` (
  `id` int(10) NOT NULL,
  `specialnist` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialnist`
--

INSERT INTO `specialnist` (`id`, `specialnist`) VALUES
(1, 'Право'),
(2, 'Комп′ютерні науки'),
(3, 'Облік і оподаткування'),
(4, 'Фінанси банківська справа та страхування');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `id_fo` int(11) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `by_father` varchar(16) NOT NULL,
  `birthday` date NOT NULL,
  `fakultet` varchar(100) NOT NULL,
  `kafedra` varchar(100) NOT NULL,
  `specialnist` varchar(100) NOT NULL,
  `grup` varchar(10) NOT NULL,
  `predmeti` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `id_fo`, `lastname`, `name`, `by_father`, `birthday`, `fakultet`, `kafedra`, `specialnist`, `grup`, `predmeti`) VALUES
(1, 12943332, 'Лойтош', 'Янек', 'Емеріхович', '1998-11-16', 'Інформаційних технологій та економіки', 'Комп′ютерних систем і технологій', 'Комп′ютерні науки', 'К-403', 'sadwad'),
(6, 4545456, 'Осадчук', 'Сергій', 'Іванович', '1996-06-08', 'Юридичний', 'Обліку і оподаткування', 'Право', 'К-401', 'sadwad');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fakultet`
--
ALTER TABLE `fakultet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kafedra`
--
ALTER TABLE `kafedra`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialnist`
--
ALTER TABLE `specialnist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fakultet`
--
ALTER TABLE `fakultet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `grup`
--
ALTER TABLE `grup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `kafedra`
--
ALTER TABLE `kafedra`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `specialnist`
--
ALTER TABLE `specialnist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
