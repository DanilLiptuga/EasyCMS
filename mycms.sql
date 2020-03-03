-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2020 г., 19:32
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mycms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'nature'),
(2, 'travelling'),
(15, 'wewesdsda'),
(16, 'daddrwewe35r333333'),
(17, 'adaddaadad');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `post` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `post`, `text`, `date`) VALUES
(1, 'яdsd', 21, 'sdsd', '2020-02-24 00:00:00'),
(2, 'яdsd', 21, 'sdsd', '2020-02-24 00:00:00'),
(3, 'я', 21, 'sss', '2020-02-24 00:00:00'),
(4, 'Danilka', 21, 'Хорошая статья', '2020-02-24 00:00:00'),
(5, 'Danilka', 24, 'dfdf', '2020-02-24 00:00:00'),
(6, 'яdsd', 24, 'sdsdsdsdddddddddd', '2020-02-24 00:00:00'),
(7, 'яdsd', 24, 'sdsdsdsd', '2020-02-24 00:00:00'),
(8, 'Danilka#2', 27, 'Ya lublu etot sait', '2020-02-24 08:14:13');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `Template` varchar(255) NOT NULL DEFAULT 'Default',
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`title`, `content`, `date`, `id`, `Template`, `link`) VALUES
('About', '<div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><p><br></p></div></div></div></div></div></div></div>', '2020-02-24', 24, 'about', 'about'),
('Contact', '<div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><div class=\"fr-view\"><p><br></p></div></div></div></div></div>', '2020-02-16', 25, 'contact', 'contact');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `date`, `image`, `author`, `category`) VALUES
(21, 'An Example of a Google Bar Chart #2', 'sdsddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasd', '<p><img src=\"/content/uploads/55.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib fr-draggable\"></p>', '2020-02-24 00:00:00', '/content/uploads/03.jpg', 'Danil', '1,2,15'),
(22, 'An Example of a Google Bar Chart', 'This is an example of post #1', '<p><br></p>', '2020-02-18 00:00:00', '/content/uploads/', 'Danil', '1'),
(23, 'An Example of a Google Bar Chart #3', 'This is an example of post #2 without image', '<p><br></p>', '2020-02-18 00:00:00', '/content/uploads/', 'Danil', '1,16,17'),
(24, 'sdsd', 'sdsddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddasd', '<p><br></p><p>zzzz/////////////........./Z sdsdsd</p>', '2020-02-24 00:00:00', '/content/uploads/2.png', 'Danil', '1'),
(25, 'dddddddddddddddddddd', 'dddd', '<p><br></p>', '2020-02-24 00:00:00', '/content/uploads/60.jpg', 'Danil', '2'),
(26, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', '<p><br></p>', '2020-02-24 00:00:00', '/content/uploads/88f40a6a6f38ba565d85718fb4d930a2.jpg', 'Danil', ''),
(27, 'New post #1', 'New post #1', '<p>New post #1<br></p>', '2020-02-24 08:12:11', '/content/uploads/img_71622_1.jpg', 'Danil', '1,2');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `type`) VALUES
(1, 'Site name', 'MyBlog', 'text'),
(2, 'Site description', 'This is my new blog', 'text'),
(3, 'Language', 'Russian\r\n', 'select'),
(4, 'Theme', 'default', 'select');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `role` tinytext NOT NULL DEFAULT '\'client\'',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`) VALUES
(1, 'Danil', 'admin', 'danilliptuga@gmail.com', '$2y$10$IBD0p1yzf6I09QjHy6t.d.lQda30aH5n8IQqfBwSieOVeUbRWQJAy');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
