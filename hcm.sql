-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Sie 2021, 09:50
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hcm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `accounts`
--

CREATE TABLE `accounts` (
  `id_acc` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `accounts`
--

INSERT INTO `accounts` (`id_acc`, `email`, `password`, `firstname`, `lastname`, `active`) VALUES
(2, 'staz-roman@artneo.pl', '7891035a5b87a54279967ddd61e53df7', 'Roman', 'Mohyła', 1),
(3, 'artneo@artneo.pl', 'artneo', 'artneo', 'artneo2', 0),
(4, 'test@testowanko.pl', '098f6bcd4621d373cade4e832627b4f6', 'Romczi', 'Kosa', 1),
(5, 'test@testowe.pl', 'bfcf316934b9ec95de0ddda492fffcc8', 'teścik', 'teścik', 1),
(6, 'gierki@gierki.pl', 'b8e8850c0e2ece34ade88ffebe2fd5c0', 'edit', 'edit', 1),
(7, 'huehueh@huhu.hihi', 'e9f5713dec55d727bb35392cec6190ce', 'hueh', 'huh', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `certificates`
--

CREATE TABLE `certificates` (
  `id_certificate` int(255) NOT NULL,
  `id_domain` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `issue_date` date NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `certificates`
--

INSERT INTO `certificates` (`id_certificate`, `id_domain`, `type`, `issue_date`, `expire_date`) VALUES
(8, 6, 'Jak widać działa', '2021-08-20', '2021-08-31'),
(9, 6, 'tu też działa', '2021-08-03', '2021-08-11');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `id_client` int(255) NOT NULL,
  `id_manager` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `NIP` varchar(10) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`id_client`, `id_manager`, `email`, `name`, `localisation`, `NIP`, `phone_number`) VALUES
(2, 3, 'random@rand.pl', 'ktoskolwiek', 'park na łące', '1234567890', '501 122 122'),
(3, 2, 'art@arrt.pl', 'Arterooos', 'Olsztyn Nowy świat 20', '0987654325', '101 101 101'),
(6, 2, 'test@test.pl', 'test', 'test', '1421412421', '1231232132'),
(8, 2, 'routing@rrrrrrrrr.pl', 'route', 'router', '0987654312', '501122122'),
(10, 2, 'valid@email.com', 'SuperStar', 'adresik', '1234567890', '501122124');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `domains`
--

CREATE TABLE `domains` (
  `id_domain` int(255) NOT NULL,
  `id_hosting_acc` int(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `domain_root` varchar(255) NOT NULL,
  `php_version` varchar(255) NOT NULL,
  `number_of_email_acc` int(255) NOT NULL,
  `mail_limit_MB` double NOT NULL,
  `mail_occupied_MB` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `domains`
--

INSERT INTO `domains` (`id_domain`, `id_hosting_acc`, `url`, `name`, `domain_root`, `php_version`, `number_of_email_acc`, `mail_limit_MB`, `mail_occupied_MB`) VALUES
(6, 4, 'url', 'nazwa', 'korzeń', '5', 5, 5, 5),
(7, 4, 'url', 'nazwa 2', 'korzeń 2', '2', 22, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hosting`
--

CREATE TABLE `hosting` (
  `id_hosting` int(255) NOT NULL,
  `id_pur_serv` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `capacity_MB` varchar(255) NOT NULL,
  `occupied_MB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `hosting`
--

INSERT INTO `hosting` (`id_hosting`, `id_pur_serv`, `name`, `description`, `capacity_MB`, `occupied_MB`) VALUES
(4, 11, 'hostingowanie poczty edit sdad sadas das dsa s', 'po zmianie vara', '222444', '222444'),
(5, 11, 'to jest hosting edit', 'bl bbal edit', '1000', '100'),
(6, 11, 'hosting to jest', 'to jest hosting', '200', '200');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `purchased_services`
--

CREATE TABLE `purchased_services` (
  `id_pur_serv` int(255) NOT NULL,
  `id_client` int(255) NOT NULL,
  `id_service` int(255) NOT NULL,
  `service_start_date` date NOT NULL,
  `service_end_date` date NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `purchased_services`
--

INSERT INTO `purchased_services` (`id_pur_serv`, `id_client`, `id_service`, `service_start_date`, `service_end_date`, `price`, `payment_date`, `payment_deadline`) VALUES
(3, 2, 4, '0000-00-00', '0000-00-00', '0.00', '0000-00-00', '0000-00-00'),
(4, 3, 4, '0000-00-00', '0000-00-00', '0.00', '0000-00-00', '0000-00-00'),
(11, 2, 1, '0000-00-00', '0000-00-00', '102.00', '0000-00-00', '2021-08-31'),
(14, 2, 12, '0000-00-00', '0000-00-00', '100.00', '0000-00-00', '0000-00-00'),
(15, 2, 12, '0000-00-00', '0000-00-00', '31343.00', '0000-00-00', '0000-00-00'),
(16, 2, 12, '0000-00-00', '0000-00-00', '123.00', '0000-00-00', '0000-00-00'),
(17, 2, 12, '0000-00-00', '0000-00-00', '51.00', '0000-00-00', '2021-08-30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `services`
--

CREATE TABLE `services` (
  `id_service` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `price_type` varchar(255) NOT NULL COMMENT 'za godzine\r\nza miesiac\r\nza rok',
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `services`
--

INSERT INTO `services` (`id_service`, `type`, `price`, `price_type`, `name`) VALUES
(1, 'hosting', '100.50', 'miesiąc', 'hostingowanie poczty'),
(2, 'hosting', '1000.99', 'rok', 'hosting domen wielu'),
(3, 'hosting', '99.99', 'miesiąc', 'hosting multi poczty'),
(4, 'pracowanie', '10.00', 'miesiąc', 'ciężka praca'),
(6, 'słaba', '10.00', 'rok', 'słabiutko'),
(11, 'editowanko', '11.00', 'miesiąc', 'edit'),
(12, 'służenie', '10.00', 'rok', 'nieznana jest ta nazwa'),
(14, 'dropdown', '10.00', 'rok', 'dropdown'),
(15, 'dropdown2', '10.00', 'rok', 'drop');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeksy dla tabeli `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id_certificate`),
  ADD KEY `domains_certificates` (`id_domain`);

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `accounts_clients` (`id_manager`);

--
-- Indeksy dla tabeli `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id_domain`),
  ADD KEY `hosting_domains` (`id_hosting_acc`);

--
-- Indeksy dla tabeli `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id_hosting`),
  ADD KEY `purchasedServices_hosting` (`id_pur_serv`);

--
-- Indeksy dla tabeli `purchased_services`
--
ALTER TABLE `purchased_services`
  ADD PRIMARY KEY (`id_pur_serv`),
  ADD KEY `clients_purchasedServices` (`id_client`),
  ADD KEY `services_purchasedServices` (`id_service`);

--
-- Indeksy dla tabeli `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id_acc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id_certificate` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `domains`
--
ALTER TABLE `domains`
  MODIFY `id_domain` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id_hosting` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `purchased_services`
--
ALTER TABLE `purchased_services`
  MODIFY `id_pur_serv` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `domains_certificates` FOREIGN KEY (`id_domain`) REFERENCES `domains` (`id_domain`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `accounts_clients` FOREIGN KEY (`id_manager`) REFERENCES `accounts` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `domains`
--
ALTER TABLE `domains`
  ADD CONSTRAINT `hosting_domains` FOREIGN KEY (`id_hosting_acc`) REFERENCES `hosting` (`id_hosting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `hosting`
--
ALTER TABLE `hosting`
  ADD CONSTRAINT `purchasedServices_hosting` FOREIGN KEY (`id_pur_serv`) REFERENCES `purchased_services` (`id_pur_serv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `purchased_services`
--
ALTER TABLE `purchased_services`
  ADD CONSTRAINT `clients_purchasedServices` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_purchasedServices` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
