-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2021 at 10:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owndatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `id_a` int(11) NOT NULL,
  `lang` text NOT NULL,
  `age` text NOT NULL,
  `sex` text NOT NULL,
  `topic` text NOT NULL,
  `prof` varchar(100) NOT NULL,
  `WorldP` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`id_a`, `lang`, `age`, `sex`, `topic`, `prof`, `WorldP`, `education`) VALUES
(6, 'Both', '<18', 'female', 'Наука, Спорт, История, Философия', 'student', 'stylesheet', 'Высшее');

-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

CREATE TABLE `comm` (
  `id_com` int(11) NOT NULL,
  `id_us` int(11) NOT NULL COMMENT 'recipient',
  `usname` text NOT NULL,
  `textcomm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comm`
--

INSERT INTO `comm` (`id_com`, `id_us`, `usname`, `textcomm`) VALUES
(1, 4, 'admin', 'То есть вам больше не придётся лезть в код, чтобы изменить в письме текст, изображения или отдельные блоки. Отредактированная вёрстка грузится как обычный шаблон во вкладке Templates.\r\n\r\nВ этой статье мы расскажем, как пользоваться Template Language. Текст состоит из перевода оригинальной инструкции и собственных дополнений «костыльных» моментов.\r\n\r\n'),
(2, 4, 'Svetlana', 'FDHDFHFDH'),
(8, 4, 'Svetlana', 'dnjneibie bh grneirjbgherbiherbv bbbbr rbeugbeivbeib ierbvebb  ugeuibvb ehbguehbuehb bvhebbv vhebvhueb hbbbb bhevein'),
(16, 4, 'Svetlana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu ligula finibus, faucibus purus et, ornare quam. Nullam id felis auctor ligula vulputate dignissim. In id neque sed erat sodales aliquam ac eu urna. Sed quis egestas dui, non semper magna. Curabitur tristique aliquet orci vel imperdiet. Vestibulum placerat lectus nec velit ultrices, feugiat luctus odio tempor. Vestibulum vel vestibulum sem. Proin non volutpat ex. Duis a sapien vel nulla accumsan vehicula id eget ligula. Vivamus quis dui faucibus, placerat lectus nec, suscipit enim. Vestibulum et ornare elit. Praesent interdum commodo felis quis finibus. Integer vel enim ultrices, sagittis augue nec, dictum nisl. Nunc porta enim nisi. Vivamus euismod vel arcu at congue. Etiam ac lobortis felis.\r\n\r\nNunc ultrices vitae purus eu aliquam. Duis cursus interdum magna vel porttitor. Nunc gravida, lorem at vehicula facilisis, orci sem convallis lorem, sagittis imperdiet mauris quam eu ligula. Curabitur interdum a sapien vel pulvinar. Duis vel condimentum augue. Morbi non risus ipsum. Integer varius faucibus augue ut scelerisque.'),
(17, 1, 'Svetlana', 'Это админ'),
(18, 4, 'admin', 'vjhgjhvjvvhjv'),
(19, 5, 'TEST', 'Очень интересная статья!'),
(20, 4, 'admin', 'Плохая статья!'),
(21, 4, 'admin', 'Плохая статья!!'),
(22, 6, 'nexon', 'Не судите строго');

-- --------------------------------------------------------

--
-- Table structure for table `commnews`
--

CREATE TABLE `commnews` (
  `id_c` int(11) NOT NULL,
  `id_n` int(11) NOT NULL,
  `author` text NOT NULL,
  `textcomm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commnews`
--

INSERT INTO `commnews` (`id_c`, `id_n`, `author`, `textcomm`) VALUES
(1, 1, 'admin', 'text...'),
(2, 1, 'admin', 'text2'),
(3, 11, 'admin', 'GOOD!'),
(4, 11, 'TEST', 'Accept!');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_i` int(11) NOT NULL,
  `id_usersInfo` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `jpg` blob,
  `coment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_i`, `id_usersInfo`, `title`, `link`, `jpg`, `coment`) VALUES
(1, 4, 'Статья о первопричинах', 'https://www.pandoge.com/stati-i-sovety/kak-vstavit-html-css-i-js-v-php-kod', NULL, 'COMMENT'),
(2, 3, 'ТЕСТ', 'http://ТЕСТ.html', NULL, ''),
(3, 4, 'test1', 'linktest2287', NULL, ''),
(5, 4, 'Японія', 'http://bie.ru/bio/37868.html', NULL, ''),
(6, 4, 'Троцкий и мы', 'http://localhost/myInfo.php?name=TEST', NULL, ''),
(12, 4, 'Сталин', 'http://localhost/myInfo.php?name=TEST', NULL, ''),
(13, 4, 'Сталин', 'http://localhost/myInfo.php?name=TEST', NULL, ''),
(14, 4, ' Оценка деятельности Уинстона Черчилля', 'http://localhost/myInfo.php?name=TEST', NULL, ''),
(31, 1, 'test', 'http://biofile.ru/bio/37868.html', NULL, ''),
(33, 5, ' Оценка деятельности Уинстона Черчилля', 'http://localhost/myInfo.php?name=TEST', NULL, 'nngn'),
(35, 5, 'gnfnfg', 'http://localhost/myInfo=TEST', NULL, 'nfdibdfind difbuhidfnbidjfn u niuegnierniuenbi  gneribniu benbienb ubeie nenieunb ni ein  uneugneu neunbiu  ninb nieu ineinue ne ub y uyby yu b byb ub  b bububububhub buub bb ubub buu b'),
(36, 1, ' Оценка деятельности Уинстона Черчилля', 'http://localhost/myInfo.php?name=TEST', NULL, 'Исторический обзор!'),
(37, 6, 'Сталин', 'http://localhost/myInfo=TEST', NULL, 'Биогрфия рябого');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_n` int(11) NOT NULL,
  `title` text NOT NULL,
  `news` text NOT NULL,
  `fullText` text NOT NULL,
  `author` text NOT NULL,
  `datee` date NOT NULL DEFAULT '2026-05-20'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_n`, `title`, `news`, `fullText`, `author`, `datee`) VALUES
(1, 'Тестовая новость', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id. Sed vulputate odio ut enim blandit volutpat. Eget aliquet nibh praesent tristique magna sit. Faucibus purus in massa tempor nec. Iaculis at erat pellentesque adipiscing commodo. Habitasse platea dictumst vestibulum rhoncus. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Diam maecenas sed enim ut sem viverra aliquet. Tempus egestas sed sed risus. Est velit egestas dui id ornare. Enim lobortis scelerisque fermentum dui faucibus in ornare. Tristique nulla aliquet enim tortor at auctor urna nunc id. Mollis nunc sed id semper. Risus ultricies tristique nulla aliquet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis ligula non ante vestibulum, ac bibendum magna auctor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi non tempor magna. In blandit erat quis risus faucibus pharetra. Donec ut lectus eu diam facilisis fermentum id ut mauris. Nullam eu massa in tellus malesuada aliquam a non mi. Praesent feugiat velit consequat, ullamcorper quam sit amet, ullamcorper augue. Vestibulum porta eget eros finibus elementum. Cras tincidunt auctor porttitor.\r\n\r\nFusce euismod urna nulla, nec tristique dolor condimentum eget. Cras tristique pharetra ipsum. Nunc eget neque mi. Aenean a ullamcorper purus. Aenean eleifend in dolor ut pharetra. Suspendisse at est vel sem bibendum vehicula. Vivamus feugiat lectus eu accumsan posuere. Donec lobortis varius magna eget sagittis. Etiam vestibulum ante sed massa condimentum rutrum. In convallis dui vitae velit euismod congue. Praesent felis ligula, luctus ut magna et, scelerisque tincidunt odio. Sed porttitor, arcu ut sagittis bibendum, orci dui cursus neque, ac facilisis lacus quam eu justo. Proin facilisis, ipsum eget rutrum sodales, nunc tortor congue metus, ut fermentum diam leo quis urna.\r\n\r\nVivamus quis nibh lacus. Nullam euismod purus nec efficitur pretium. Quisque iaculis, ligula molestie rutrum sagittis, turpis massa faucibus eros, ut egestas mauris nibh ut diam. Sed eros eros, lacinia non nisl sit amet, elementum suscipit augue. Cras ac consequat arcu. Nam tempus turpis neque, ut imperdiet enim elementum efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean consequat, dolor ut molestie dignissim, urna nisi cursus tortor, a vulputate nibh ex vitae metus. Sed nibh ante, scelerisque sed sagittis vitae, porta semper justo. Phasellus ut porta nisi, sit amet semper orci. Nunc hendrerit venenatis viverra.', 'admin', '2026-05-20'),
(11, 'Xiaomi полностью вышла из-под санкций США: акции компании начали расти', 'Xiaomi полностью вышла из-под санкций США: акции компании начали расти/\r\n\r\nСуд округа Колумбия в США признал недействительным решение Пентагона внести китайскую компанию Xiaomi в список...', 'Суд округа Колумбия в США признал недействительным решение Пентагона внести китайскую компанию Xiaomi в список \"коммунистических китайских военных компаний\", передает Reuters со ссылкой на официальное заявление корпорации.\r\n\r\nТаким образом все ограничения на покупку американскими инвесторами акций Xiaomi сняты. В результате отмены санкций провайдер FTSE Russell сообщил о возвращении ценных бумаг Xiaomi в свои индексы.\r\n\r\n', 'admin', '2021-05-26'),
(12, 'Глобальное потепление', 'Глобальное потепление. В Арктике зафиксировали рекордную жару...', 'Метеорологи зафиксировали в Арктике \"ошеломляющие волны тепла\". 19 мая в отдельных районах температура составляла +30º и более, что является настоящим рекордом для этого месяца, пишет Independent.\r\n\r\nЧитайте нас в Telegram: проверенные факты, только важное\r\n\r\nТакие температурные рекорды напрямую связаны с глобальным потеплением, поскольку таяние вечной мерзлоты приводит к выбросу метана в атмосферу, что еще больше усиливает парниковый эффект.\r\n\r\nПо мнению метеорологов, в будущем такие скачки резкого потепления будут наблюдаться все чаще.\r\n\r\nНапример, в ближайшие недели температура в Сибири не будет опускаться ниже +10º. В прошлом году температурный максимум в сибирском регионе составил +38º.\r\n\r\n30 ноября 2020 года в Австралии зафиксировали самую жаркую ноябрьскую ночь.', 'admin', '2021-05-26'),
(13, 'ДФС проводить обшуки у Черкаській міськраді', 'Працівники Державної фіскальної служби проводять обшуки у Черкаській міській раді. Про це повідомляє у Фейсбуці пресслужба ДФС, передає Укрінформ.  Зазначають, що співробітники ГСУ ФР ДФС України та співробітники ГУ ДФС у Черкаській області, за процесуального керівництва Офісу Генерального прокурора, викрили протизаконну схему ухилення від сплати податків при здачі в оренду комунального майна, у якій були задіяні службові особи Черкаської міської ради та низки комунальних підприємств...', 'Працівники Державної фіскальної служби проводять обшуки у Черкаській міській раді.\r\nПро це повідомляє у Фейсбуці пресслужба ДФС, передає Укрінформ.\r\n\r\nЗазначають, що співробітники ГСУ ФР ДФС України та співробітники ГУ ДФС у Черкаській області, за процесуального керівництва Офісу Генерального прокурора, викрили протизаконну схему ухилення від сплати податків при здачі в оренду комунального майна, у якій були задіяні службові особи Черкаської міської ради та низки комунальних підприємств.\r\n\r\nЗ початку 2017 року по теперішній час комунальні підприємства та бюджетні установи міста не перераховували до міського бюджету кошти від оренди майна, яке належить до комунальної власності, що спричинило тяжкі наслідки у вигляді недоотримання доходів загальним фондом міського бюджету на суму близько 35 млн грн.\r\n\r\nНаразі тривають обшуки з метою виявлення та вилучення документів, щодо здачі в оренду комунального майна, чорнових записів щодо існування зазначеної схеми ухилення від сплати податків та розкрадання бюджетних коштів.', 'admin', '2021-05-26'),
(14, 'Японія', 'У Императора случился удар...', 'Баллиста - это мощная боевая машина. Как и оружейные башенки, баллисты автоматически ведут стрельбу по нападающим войскам. Чтобы баллиста прекратила стрелять, ее необходимо уничтожить. Базовая стоимость баллисты – 10000 дерева. Баллисты занимают квадрат со стороной 3 клетки.\r\n\r\nЧтобы строить баллисты в замке и в столице, сначала необходимо разместить в столице округа \"Мастерскую по производству баллист\" и модернизировать ее хотя бы до 1-го уровня. Дальнейшая модернизация позволяет увеличить количество баллист, которые можно установить в замке. Для строительства баллист требуется дерево со склада.', 'admin', '2021-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id_sub` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `patronymic` text NOT NULL,
  `adress` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `period` text NOT NULL,
  `sub` text NOT NULL,
  `date_sub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id_sub`, `name`, `surname`, `patronymic`, `adress`, `email`, `phone`, `period`, `sub`, `date_sub`) VALUES
(1, 'Александр', 'Александровский', 'александрович', 'г.Киев', 'kjnnbb@gmail.com', '', 'На год', 'on', '2021-05-29 14:12:17'),
(8, 'gge', 'jnk', 'nkbvc', 'cvvv', 'vggff', '', 'Годовая подписка', 'on', '2021-05-29 14:25:16'),
(9, 'rhrnrnn', 'jnkjnkj', 'bjbkjbkj', 'kbkbkj', 'bkbkjbkjb', 'kkj kjkj ', 'Один выпуск', 'on', '2021-05-29 14:25:27'),
(10, 'wrgrgr', 'huihib', 'bjbj', 'jbjhbjhb', 'hbjbjb', 'bjb', 'Годовая подписка', 'on', '2021-05-30 07:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(4, 'TEST', 'TEST'),
(5, 'Svetlana', '1111'),
(6, 'nexon', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id_p` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birth` date NOT NULL,
  `subscribe` varchar(10) NOT NULL,
  `sub_start` date NOT NULL,
  `sub_end` date NOT NULL,
  `hobby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id_p`, `id_u`, `name`, `surname`, `sex`, `birth`, `subscribe`, `sub_start`, `sub_end`, `hobby`) VALUES
(1, 1, 'Admin', 'Admin', 'male', '1999-06-07', 'Yes', '2021-05-26', '2021-06-26', 'History, Phylosophy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`id_com`);

--
-- Indexes for table `commnews`
--
ALTER TABLE `commnews`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_i`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_n`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comm`
--
ALTER TABLE `comm`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `commnews`
--
ALTER TABLE `commnews`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
