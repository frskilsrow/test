-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 18 2020 г., 06:29
-- Версия сервера: 5.7.15
-- Версия PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(8) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `password`) VALUES
(1, 'login', NULL, '$2y$10$QXr0bwBogn0MANagLizrnufl5JiEf4GmpexrV4qhMekoTE//ATdA.'),
(2, 'boldyfed', NULL, '$2y$10$tlGnC01VETZneYUjOmO/A.BUTFXWDtZcccSniEXb/LK5Sh0zNYCZ6'),
(3, 'boldy', NULL, '$2y$10$EUVYhcIVj1t5tMZ12JTtg..GO/3KlWEwn20eDwmkbSq1L2ai16aDy'),
(4, 'fed', NULL, '$2y$10$1q.EH2V6jkcmb1oIV3qEPOs6P71f/KXrgRamGcrXVCa9ODM6dUWn2'),
(5, 'asdf', NULL, '$2y$10$HHPAlFy2MfxJVG2RonNidOYwAtYY5Q8UZk4vMwR57/Bm0yHtDoOZe'),
(6, 'qwer', NULL, '$2y$10$LFwRWrcRYkdDOCLAMTCyWep17suhLnikJe7ieBgPVa0zob5FEnqZq'),
(7, 'tyui', NULL, '$2y$10$Rx/v9NSsJSLuG3jOCPDro.sF08Cj8F8tijtC25LUlznTFQQlehITy'),
(8, 'zxcv', NULL, '$2y$10$g1exsKzLsrkWeYISQM4P.u4/b/35.jbQ0JXIynC.Bty57rxLuhhgS'),
(9, 'bnm,', NULL, '$2y$10$NsRPLqBhpAE7ezlorcgxFOV4QuFPbwQTAdgvkl4IyN6DOpA7jzFna'),
(10, 'sdfg', NULL, '$2y$10$XTJnfgSDCmqpQwJPPiVpuO6j4Oz5Q4rxWXpPlBwCg/8Xi1KCiimf6'),
(11, 'sdfg1', NULL, '$2y$10$gcgUXyUj.KdFBETfLl.UF.7nzcdfSqFr6pY5/0g92BQLWwiEo0DbC'),
(12, 'hjkl', NULL, '$2y$10$N3EycTmxt76ibc5Tw4tn4.Vanquwz9Eqe6VkNUtBGIaMio91kn3Re'),
(13, '1234', NULL, '$2y$10$w0Y0CggM0W9e13muQXKruOZNxl5ysanLZGi6MK55qxBQgig9Mc3YO'),
(14, 'qaz', NULL, '$2y$10$Bcka6.A0OmI3N1Ieb7iCu.wP1DyN2CbrfEZVopRyKFGExEJj5f58m'),
(15, 'wsx1234', NULL, '$2y$10$7V6Amk8aA5.QF/z4QYRkju9oLL/ibVl1vuqloPo/w4ENzjyb0B.i.'),
(16, 'edc', NULL, '$2y$10$7o1qvNrb74O7Nsesr9zTweatO5qUoysv95Vh6hESuqQUUIuwWLhRW'),
(17, 'rfv', NULL, '$2y$10$ymA.nDOlTNGUqOAV4iJiEeenAVUDuZQt6mmhtvFGNkqPVAlS0YB0q'),
(18, 'rfv111', NULL, '$2y$10$nNz6ZNPHH58vIIavaV3wW.ywqrZYocBVs7r8PdQPsfLcWE.RdFGjy'),
(19, 'rfv222', NULL, '$2y$10$rwk7Cjx9zR7lcAmToLvnauokGfD3CM9m2n0EyOget6vOfZTaR8kOG'),
(20, 'tgb', NULL, '$2y$10$J2jRNQ3KDpEAdxmkfY3Dg.1h5q7sWjLVvigI.KmN.kPSHlArnAkeC'),
(21, 'yhn', NULL, '$2y$10$ZiCWNuyPKndFoFAtUkG3he908NrwmXZ49Xt6oM9JOZDOfh./mUHKS'),
(22, 'Федор', NULL, '$2y$10$ZunOSOuK52N0Gdx8KHZ3V.zvryaN3YMeTnGqxEbTEPeSZKP4yiHme'),
(23, 'admin', NULL, '$2y$10$V9RRxpAtatOVUFcuysygAOX4qwdsc45t9B/C85H9ovkHciWpltn6u'),
(24, 'cvb', NULL, '$2y$10$ZAW17x190yLeDbwljmq66u6tzqmSWy9u8Rxs/xGXdApuCRLxl4Vc2'),
(25, 'boldyfer', 'fedor14-7@yandex.ru', '$2y$10$ERf12sCDILjImEWt8iF4jeAraIpKvHrrMyEiHocgYqsAj4.xFJsEW'),
(26, 'fedbold', 'fedor14-7@yandex.ru', '$2y$10$is7riHRM6BEF//aTLMs7EONaj7FVG2jnHav9fAfRD8/UB5KIubNce');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
