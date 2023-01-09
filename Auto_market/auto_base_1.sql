-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 06 2022 г., 17:08
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auto_base`
--
CREATE DATABASE IF NOT EXISTS auto_base;

USE auto_base;
-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `ID` int(11) NOT NULL,
  `Code_vl` int(11) NOT NULL,
  `Car_num` varchar(255) NOT NULL,
  `Car_mark` varchar(255) NOT NULL,
  `Rel_date` date NOT NULL,
  `Reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`ID`, `Code_vl`, `Car_num`, `Car_mark`, `Rel_date`, `Reg_date`) VALUES
(1, 211, 'Ð’555Ð’Ð’', 'BMW', '2018-01-10', '2021-11-11'),
(2, 21122, 'Ðš875Ð”Ð’', 'BMW', '2016-01-01', '2021-12-25'),
(3, 333, 'Ð£854Ð˜Ð', 'Skoda', '2019-05-30', '2022-05-25'),
(4, 5555, 'Ðš888ÐšÐš', 'Skoda', '2020-10-25', '2022-09-19'),
(5, 32152, 'Ð’423Ð˜Ð”', 'LADA GRANTA', '2018-11-14', '2022-02-22'),
(6, 312512, 'Ð–241ÐÐ”', 'LADA GRANTA', '2019-05-10', '2022-03-10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
