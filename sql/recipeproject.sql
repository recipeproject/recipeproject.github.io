-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Kwi 2021, 01:16
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `recipeproject`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `category_ID` int(2) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rates`
--

CREATE TABLE `rates` (
  `rate_ID` int(5) NOT NULL,
  `user_ID` int(5) NOT NULL,
  `recipe_ID` int(3) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recipes`
--

CREATE TABLE `recipes` (
  `recipe_ID` int(3) NOT NULL,
  `category_ID` int(2) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture` varchar(100) NOT NULL,
  `creation_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_ID` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indeksy dla tabeli `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rate_ID`),
  ADD KEY `recipe_ID` (`recipe_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indeksy dla tabeli `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_ID`),
  ADD KEY `category_ID` (`category_ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `category_ID` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `rates`
--
ALTER TABLE `rates`
  MODIFY `rate_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_ID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`recipe_ID`) REFERENCES `recipes` (`recipe_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rates_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`category_ID`) REFERENCES `categories` (`category_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
