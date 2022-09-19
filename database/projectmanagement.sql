-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectmanagement`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contractlog`
--

CREATE TABLE `contractlog` (
  `idContractLog` int(11) NOT NULL,
  `idContract` int(11) NOT NULL,
  `OldStatus` int(11) NOT NULL,
  `NewStatus` int(11) NOT NULL,
  `Reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contractlog`
--

INSERT INTO `contractlog` (`idContractLog`, `idContract`, `OldStatus`, `NewStatus`, `Reason`, `Date`, `idUser`) VALUES
(1, 11, 0, 2, 'Test', '2022-07-21 18:06:31', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customerinfo`
--

CREATE TABLE `customerinfo` (
  `idCustomer` int(11) NOT NULL,
  `CustomerName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerPhone` int(11) NOT NULL,
  `OrgName` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CustomerMail` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MiddlemanName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateAdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customerinfo`
--

INSERT INTO `customerinfo` (`idCustomer`, `CustomerName`, `CustomerPhone`, `OrgName`, `CustomerMail`, `MiddlemanName`, `DateAdd`) VALUES
(1, 'Thái Vươn Phàm', 1212121212, 'Quán Cà Phê', 'pham@gmail.com', 'Không có', '2022-07-02 15:17:50'),
(2, 'Phạm', 123123123, 'Cơ sở lưu trú Phi Long', '123@123.c', 'Không có', '2022-07-02 15:37:15'),
(3, 'Trần Thanh Xuân', 330033003, 'Cơ sở cá nhân', 'xuan@c.com', 'Không có', '2022-07-11 06:00:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customerrequirement`
--

CREATE TABLE `customerrequirement` (
  `idRequirement` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `SoftwareName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUserAdd` int(11) NOT NULL,
  `ReqirementDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `Note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Price` int(40) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 3,
  `DateAdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customerrequirement`
--

INSERT INTO `customerrequirement` (`idRequirement`, `idCustomer`, `SoftwareName`, `idUserAdd`, `ReqirementDesc`, `Note`, `Price`, `Status`, `DateAdd`) VALUES
(4, 1, 'Phần mềm quản lý khách sạn', 6, '<p>Quản l&yacute; kh&aacute;ch sạn</p>', '<p>Kh&aacute;ch sạn h&ocirc;m nay</p>', 10000000, 0, '2022-07-11 06:16:53'),
(5, 3, 'Phần mềm quản lý quán trà sữa', 6, '<p>Phần mêm quản lý đặt hàng...</p>', '<p>Khách hàng yêu cầu ...</p>', 333333, 0, '2022-07-11 06:54:16'),
(6, 3, 'Phần mềm quản lý quán cafe\r\n', 11, '<p>Quản lý đặt hàng, kho quán ...</p>', '<p>....</p>', 33333333, 0, '2022-07-12 06:03:10'),
(7, 2, 'Phần mềm quản lý nhà hàng', 6, '<p>Mô tả</p>', '<p>.....</p>', 10000000, 0, '2022-07-17 11:23:45'),
(8, 2, 'Phần mềm quản lý mua bán tạp hóa', 6, '<p>Quản l&yacute;</p>', '<p>Y&ecirc;u cầu</p>', 10000000, 0, '2022-07-17 11:37:48'),
(9, 1, 'Phan mem quan ly123123', 6, '<p>123</p>', '<p>123</p>', 10000000, 0, '2022-07-21 09:15:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delay`
--

CREATE TABLE `delay` (
  `idDelay` int(11) NOT NULL,
  `idTask` int(11) NOT NULL,
  `Reason` text COLLATE utf8_unicode_ci NOT NULL,
  `DateReport` datetime NOT NULL,
  `DelayUntill` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file`
--

CREATE TABLE `file` (
  `idFile` int(11) NOT NULL,
  `File` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `FileName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UploadDate` datetime NOT NULL,
  `idUser` int(11) NOT NULL COMMENT 'Owner(Chủ file)',
  `Prefix` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `file`
--

INSERT INTO `file` (`idFile`, `File`, `FileName`, `UploadDate`, `idUser`, `Prefix`) VALUES
(1, 'ocHapnYWQhHLIT7ngUh8P1_02.mp3', 'File test', '2022-07-21 19:10:33', 6, 'YCKH4'),
(7, 'ClbiTIRWBtMlZPVUTUiMP1_07.mp3', 'test333', '2022-07-21 21:03:25', 6, 'YCKH5'),
(10, 'P48HrKY7WaxGb08W6b8wP1_07.mp3', 'test', '2022-07-21 21:16:09', 6, 'CTF4'),
(12, 'Avatar6xU8NvU2Dhzspace_aesthetic-wallpaper-1920x1080.jpg', 'Avatar của Quản trị (Admin)', '2022-07-24 18:35:01', 6, 'AVT6'),
(13, 'Avatar832GFvKxuccgiao dien.png', 'Avatar của Conan', '2022-07-24 19:28:29', 8, 'AVT8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filepermissiongroup`
--

CREATE TABLE `filepermissiongroup` (
  `idFile` int(11) NOT NULL,
  `idUserGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filepermissionuser`
--

CREATE TABLE `filepermissionuser` (
  `idFile` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log`
--

CREATE TABLE `log` (
  `idLog` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `TableChange` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Action` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ColumnChange` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `OldData` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NewData` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TimeChange` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requirementlog`
--

CREATE TABLE `requirementlog` (
  `idReqLog` int(11) NOT NULL,
  `idRequirement` int(11) NOT NULL,
  `OldStatus` int(11) NOT NULL,
  `NewStatus` int(11) NOT NULL,
  `Reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date` date NOT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `requirementlog`
--

INSERT INTO `requirementlog` (`idReqLog`, `idRequirement`, `OldStatus`, `NewStatus`, `Reason`, `Date`, `User`) VALUES
(1, 9, 0, 3, 'Test 123', '2022-07-21', 6),
(2, 9, 3, 0, NULL, '2022-07-21', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idContract` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`idRole`, `idUser`, `idContract`) VALUES
(2, 12, 6),
(3, 14, 8),
(2, 13, 7),
(1, 12, 7),
(1, 16, 7),
(2, 12, 7),
(1, 13, 7),
(3, 14, 7),
(3, 15, 7),
(3, 8, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roletype`
--

CREATE TABLE `roletype` (
  `idRole` int(11) NOT NULL,
  `RoleName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roletype`
--

INSERT INTO `roletype` (`idRole`, `RoleName`) VALUES
(1, 'Quản lý trực tiếp'),
(2, 'Quản lý gián tiếp'),
(3, 'Lập trình viên\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `softwareacceptancedoc`
--

CREATE TABLE `softwareacceptancedoc` (
  `idDocument` int(11) NOT NULL,
  `idSoftwareContract` int(11) NOT NULL,
  `ActFileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ActFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `DocumentDesc` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Được upload',
  `idUser` int(11) NOT NULL,
  `DateUpload` date NOT NULL,
  `DateSign` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `softwareacceptancedoc`
--

INSERT INTO `softwareacceptancedoc` (`idDocument`, `idSoftwareContract`, `ActFileName`, `ActFile`, `Status`, `DocumentDesc`, `idUser`, `DateUpload`, `DateSign`) VALUES
(1, 7, 'SoureCode7', 'cN9od9C3iaY5kgyof0fhP1_02.mp3', 0, 'Được upload', 6, '2022-07-22', NULL),
(6, 6, 'SoureCode6', 'kykCjhJB09Ym5yskY2D5P1_07.mp3', 0, 'Được upload', 6, '2022-07-23', NULL),
(7, 6, 'TKCT6', 'MresZRJ0gWedLo8qZggdP1_04.mp3', 1, 'Được upload', 6, '2022-07-23', NULL),
(8, 6, 'HDSD6', 'WMBZdQ4vyxhEU33nulJPP1_07.mp3', 0, 'Được upload', 6, '2022-07-23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `softwarecontract`
--

CREATE TABLE `softwarecontract` (
  `idContract` int(11) NOT NULL,
  `idRequirement` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `BuildStatus` int(11) NOT NULL DEFAULT 0,
  `CreateDate` datetime NOT NULL COMMENT 'Ngày tạo hợp đồng',
  `SignDate` datetime DEFAULT NULL COMMENT 'Ngày KH ký HĐ',
  `Creator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `softwarecontract`
--

INSERT INTO `softwarecontract` (`idContract`, `idRequirement`, `Status`, `BuildStatus`, `CreateDate`, `SignDate`, `Creator`) VALUES
(6, 4, 2, 0, '2022-07-11 06:25:22', '2022-07-16 16:54:24', 6),
(7, 5, 0, 0, '2022-07-11 06:54:19', NULL, 6),
(8, 6, 0, 0, '2022-07-12 06:07:13', NULL, 11),
(9, 7, 0, 0, '2022-07-17 11:23:54', NULL, 6),
(10, 8, 0, 0, '2022-07-17 11:37:54', NULL, 6),
(11, 9, 2, 0, '2022-07-21 10:07:48', '2022-07-21 18:06:31', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taskinfo`
--

CREATE TABLE `taskinfo` (
  `idTask` int(11) NOT NULL,
  `idSoftwareContract` int(11) NOT NULL,
  `TaskName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TaskDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `TaskStartTime` date NOT NULL,
  `TaskEndTime` date DEFAULT NULL,
  `ExpectToEnd` date NOT NULL,
  `TaskidUser` int(11) NOT NULL,
  `UserAddTask` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taskinfo`
--

INSERT INTO `taskinfo` (`idTask`, `idSoftwareContract`, `TaskName`, `TaskDesc`, `TaskStartTime`, `TaskEndTime`, `ExpectToEnd`, `TaskidUser`, `UserAddTask`, `Status`) VALUES
(1, 6, 'cv1', 'mo ta cv1', '2022-07-17', NULL, '2022-07-20', 8, 6, 0),
(2, 6, 'cv2', 'mo ta cv 2', '2022-07-19', NULL, '2022-07-29', 14, 6, 0),
(3, 6, 'cv3', 'Testing', '2022-07-27', NULL, '2022-08-04', 15, 6, 0),
(4, 6, 'CV4', 'Công việc 4', '2022-07-27', NULL, '2022-08-05', 15, 12, 0),
(5, 11, 'asd', '123', '2022-07-26', NULL, '2022-07-30', 8, 6, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usergroup`
--

CREATE TABLE `usergroup` (
  `idUserGroup` int(11) NOT NULL,
  `GroupName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `usergroup`
--

INSERT INTO `usergroup` (`idUserGroup`, `GroupName`) VALUES
(0, 'Quản trị hệ thống'),
(1, 'Lập trình viên'),
(2, 'Quản lý dự án'),
(3, 'Lãnh đạo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `idUserGroup` int(11) NOT NULL,
  `idUserAdd` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Đang cập nhật',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Đang cập nhật',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `idUserGroup`, `idUserAdd`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted`) VALUES
(6, 0, NULL, 'Quản trị (Admin)', 'a@a.c', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$XWRRaMk/c8uod0BSAXqJied7zyHB23Pbx/ZYSEY/wikWZXe67aub2', '7un24FJSnzC3TFDQGeCYQseTGgZndJXQyjKUNJ05fNwzH1Qe3SsDPCttQZ2f', '2022-06-18 04:17:29', '2022-07-24 06:09:33', 0),
(8, 1, 6, 'Conan', 'test@gmail.com', 'Đang cập nhật', 'Cần thơ', NULL, '$2y$10$x4M6u6EUGQY9j8zCsdIQHubfm6Y1rm6QqYgnB5nz3/VigVezg0iZe', NULL, '2022-06-26 01:18:31', '2022-07-17 20:43:01', 0),
(11, 0, 6, 'Rach', 'no@cm.com', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$q10jEwa012/rZJzJFQah3usfrxxvjKp8meEQNmQMXCDpe5HsHz3R6', NULL, '2022-07-11 00:31:17', '2022-07-19 06:14:44', 0),
(12, 2, 11, 'Xuân', 'xuan@gmail.com', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$PZuly32pn6w6BSacIM66KuiXZwT0UXHQ4fnKI12Omy/fStA4vp6Zy', NULL, '2022-07-12 23:49:14', '2022-07-19 05:45:54', 1),
(13, 2, 11, 'Hy', 'hy@gmail.com', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$lx/GUYnk9P.KdunisY8j2eBnGWfKoKKXZczumoBqv4E9.NF59TCh2', NULL, '2022-07-12 23:49:39', '2022-07-12 23:49:39', 0),
(14, 1, 11, 'Andy', 'no@cm.comm', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$z6QbSai54yMuU7VeaC24..02PuhO7dWXzOz1PKwQaqhHldxWBSuk6', NULL, '2022-07-13 15:44:38', '2022-07-13 15:44:38', 0),
(15, 1, 11, 'Thanh', 'no@cm.commc', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$PzntZWXEGCcyFz1wm2UdguKpH8cyUCjU2gnf2gQkpmjlX0GMDAOHG', NULL, '2022-07-13 15:45:04', '2022-07-13 15:45:04', 0),
(16, 2, 6, 'John', 'b@gmail.com', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$imt05aSXsuXUC/EffVxauOx9ahQmouzVshh.bAkI5jzu3je54qzrm', NULL, '2022-07-15 21:22:38', '2022-07-15 21:22:38', 0),
(19, 3, 6, 'test', 'tes11111@gmail.com', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$TLPmKtrTC4lWQ1MLcEeasuu6T065jpG8tkN/lNdUXpKOzg.CRv38i', NULL, '2022-07-19 05:38:11', '2022-07-19 05:48:12', 1),
(20, 0, 6, '123', '123@123.c', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$bkKuYRLzp0yY2a9BCVMLI.pYMOmiqV7Sy8ttuxTLW5soQhduL3kHi', NULL, '2022-07-19 05:52:56', '2022-07-19 05:53:01', 1),
(21, 0, 6, '123', '123@123.cc', 'Đang cập nhật', 'Đang cập nhật', NULL, '$2y$10$zRfAnGwTKIw3DeQguO1bFudeLEedsb5O118wXiVIxrm4XgjkQXZW2', NULL, '2022-07-19 05:54:22', '2022-07-19 05:54:25', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contractlog`
--
ALTER TABLE `contractlog`
  ADD PRIMARY KEY (`idContractLog`),
  ADD KEY `idContract` (`idContract`);

--
-- Chỉ mục cho bảng `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Chỉ mục cho bảng `customerrequirement`
--
ALTER TABLE `customerrequirement`
  ADD PRIMARY KEY (`idRequirement`),
  ADD KEY `FK_RqCus` (`idCustomer`),
  ADD KEY `FK_USAdd` (`idUserAdd`);

--
-- Chỉ mục cho bảng `delay`
--
ALTER TABLE `delay`
  ADD PRIMARY KEY (`idDelay`),
  ADD KEY `FK_Task` (`idTask`);

--
-- Chỉ mục cho bảng `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`idFile`),
  ADD KEY `FK_USOwn` (`idUser`);

--
-- Chỉ mục cho bảng `filepermissiongroup`
--
ALTER TABLE `filepermissiongroup`
  ADD KEY `FK_FileUSG` (`idUserGroup`),
  ADD KEY `FK_USGFile` (`idFile`);

--
-- Chỉ mục cho bảng `filepermissionuser`
--
ALTER TABLE `filepermissionuser`
  ADD KEY `FK_PermitUser` (`idUser`),
  ADD KEY `FK_PermitFileUser` (`idFile`);

--
-- Chỉ mục cho bảng `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idLog`),
  ADD KEY `FK_UserChange` (`idUser`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `requirementlog`
--
ALTER TABLE `requirementlog`
  ADD PRIMARY KEY (`idReqLog`),
  ADD KEY `FK_ReqL` (`idRequirement`),
  ADD KEY `FK_USChReq` (`User`);

--
-- Chỉ mục cho bảng `roletype`
--
ALTER TABLE `roletype`
  ADD PRIMARY KEY (`idRole`);

--
-- Chỉ mục cho bảng `softwareacceptancedoc`
--
ALTER TABLE `softwareacceptancedoc`
  ADD PRIMARY KEY (`idDocument`),
  ADD UNIQUE KEY `ActFile` (`ActFile`),
  ADD KEY `FK_ContAcc` (`idSoftwareContract`);

--
-- Chỉ mục cho bảng `softwarecontract`
--
ALTER TABLE `softwarecontract`
  ADD PRIMARY KEY (`idContract`),
  ADD KEY `FK_CTReq` (`idRequirement`),
  ADD KEY `FK_UserAdd` (`Creator`);

--
-- Chỉ mục cho bảng `taskinfo`
--
ALTER TABLE `taskinfo`
  ADD PRIMARY KEY (`idTask`),
  ADD UNIQUE KEY `idSoftwareContract` (`idSoftwareContract`,`TaskName`),
  ADD KEY `FK_USAddTask` (`UserAddTask`),
  ADD KEY `FK_USDo` (`TaskidUser`);

--
-- Chỉ mục cho bảng `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`idUserGroup`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contractlog`
--
ALTER TABLE `contractlog`
  MODIFY `idContractLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customerrequirement`
--
ALTER TABLE `customerrequirement`
  MODIFY `idRequirement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `delay`
--
ALTER TABLE `delay`
  MODIFY `idDelay` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `file`
--
ALTER TABLE `file`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `log`
--
ALTER TABLE `log`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `requirementlog`
--
ALTER TABLE `requirementlog`
  MODIFY `idReqLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `roletype`
--
ALTER TABLE `roletype`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `softwareacceptancedoc`
--
ALTER TABLE `softwareacceptancedoc`
  MODIFY `idDocument` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `softwarecontract`
--
ALTER TABLE `softwarecontract`
  MODIFY `idContract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `taskinfo`
--
ALTER TABLE `taskinfo`
  MODIFY `idTask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `idUserGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contractlog`
--
ALTER TABLE `contractlog`
  ADD CONSTRAINT `contractlog_ibfk_1` FOREIGN KEY (`idContract`) REFERENCES `softwarecontract` (`idContract`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `customerrequirement`
--
ALTER TABLE `customerrequirement`
  ADD CONSTRAINT `FK_RqCus` FOREIGN KEY (`idCustomer`) REFERENCES `customerinfo` (`idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_USAdd` FOREIGN KEY (`idUserAdd`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `delay`
--
ALTER TABLE `delay`
  ADD CONSTRAINT `FK_Task` FOREIGN KEY (`idTask`) REFERENCES `taskinfo` (`idTask`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `FK_USOwn` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `filepermissiongroup`
--
ALTER TABLE `filepermissiongroup`
  ADD CONSTRAINT `FK_FileUSG` FOREIGN KEY (`idUserGroup`) REFERENCES `usergroup` (`idUserGroup`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_USGFile` FOREIGN KEY (`idFile`) REFERENCES `file` (`idFile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `filepermissionuser`
--
ALTER TABLE `filepermissionuser`
  ADD CONSTRAINT `FK_FilePermitUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_FileToUser` FOREIGN KEY (`idFile`) REFERENCES `file` (`idFile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_UserChange` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `requirementlog`
--
ALTER TABLE `requirementlog`
  ADD CONSTRAINT `FK_ReqL` FOREIGN KEY (`idRequirement`) REFERENCES `customerrequirement` (`idRequirement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_USChReq` FOREIGN KEY (`User`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `FK_Role` FOREIGN KEY (`idRole`) REFERENCES `roletype` (`idRole`),
  ADD CONSTRAINT `FK_UserRole` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `softwareacceptancedoc`
--
ALTER TABLE `softwareacceptancedoc`
  ADD CONSTRAINT `FK_ContAcc` FOREIGN KEY (`idSoftwareContract`) REFERENCES `softwarecontract` (`idContract`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `softwarecontract`
--
ALTER TABLE `softwarecontract`
  ADD CONSTRAINT `FK_CTReq` FOREIGN KEY (`idRequirement`) REFERENCES `customerrequirement` (`idRequirement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_UserAdd` FOREIGN KEY (`Creator`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `taskinfo`
--
ALTER TABLE `taskinfo`
  ADD CONSTRAINT `FK_SoftwareBuid` FOREIGN KEY (`idSoftwareContract`) REFERENCES `softwarecontract` (`idContract`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_USAddTask` FOREIGN KEY (`UserAddTask`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_USDo` FOREIGN KEY (`TaskidUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
