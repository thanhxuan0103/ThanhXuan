-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2022 lúc 05:19 PM
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
  `StatusChangeTo` int(11) NOT NULL,
  `Desc_Change` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateChange` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'thai vuon pham', 1212121212, '123', 'pham@gmail.com', '123', '2022-07-02 15:17:50'),
(2, '123', 123123123, 'qưe', '123@123.c', '123', '2022-07-02 15:37:15'),
(3, 'tran thanh  xuan', 330033003, 'ca nhan', 'xuan@c.com', 'khong co', '2022-07-11 06:00:06');

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
  `Status` int(11) NOT NULL,
  `DateAdd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customerrequirement`
--

INSERT INTO `customerrequirement` (`idRequirement`, `idCustomer`, `SoftwareName`, `idUserAdd`, `ReqirementDesc`, `Note`, `Price`, `Status`, `DateAdd`) VALUES
(4, 1, 'Phan mem quan ly cafe', 6, '<p>1123</p>', '<p>3332</p>', 10000000, 0, '2022-07-11 06:16:53'),
(5, 3, 'Phan mem quan ly', 6, '<p>123</p>', '<p>123</p>', 333333, 0, '2022-07-11 06:54:16'),
(6, 3, 'Phan mem quan ly cafe', 11, '<p>123</p>', '<p>123</p>', 33333333, 0, '2022-07-12 06:03:10');

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
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, 'ContractTemplate.docx', '9pm', '2022-07-11 13:59:52', 11, 'YCKH4'),
(6, '+²+¦¦++F.pdf', 'test2', '2022-07-11 14:15:35', 11, 'YCKH4'),
(7, '¦µ¦+-¦+-+¦-+.txt', 'test111', '2022-07-11 14:16:43', 11, 'YCKH5'),
(8, 'keymap.txt', 'test22', '2022-07-12 06:06:37', 11, 'YCKH4'),
(10, 'dom.php', 'test2333', '2022-07-12 07:05:31', 11, 'YCKH6');

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
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Date` int(11) NOT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idContract` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `Status` int(11) NOT NULL,
  `DocumentDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `DateSign` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `softwarecontract`
--

CREATE TABLE `softwarecontract` (
  `idContract` int(11) NOT NULL,
  `Price` int(40) NOT NULL,
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

INSERT INTO `softwarecontract` (`idContract`, `Price`, `idRequirement`, `Status`, `BuildStatus`, `CreateDate`, `SignDate`, `Creator`) VALUES
(6, 10000000, 4, 0, 0, '2022-07-11 06:25:22', NULL, 6),
(7, 333333, 5, 0, 0, '2022-07-11 06:54:19', NULL, 6),
(8, 33333333, 6, 0, 0, '2022-07-12 06:07:13', NULL, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taskinfo`
--

CREATE TABLE `taskinfo` (
  `idTask` int(11) NOT NULL,
  `idSoftwareContract` int(11) NOT NULL,
  `TaskName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TaskDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `TaskStartTime` datetime NOT NULL,
  `TaskEndTime` datetime DEFAULT NULL,
  `ExpectToEnd` datetime NOT NULL,
  `TaskidUser` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(0, 'Admin'),
(1, 'Lập trình viên'),
(2, 'Quản lý dự án'),
(3, 'Lãnh đạo'),
(4, 'Test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `idUserGroup` int(11) NOT NULL DEFAULT 0,
  `idUserAdd` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `idUserGroup`, `idUserAdd`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 0, NULL, 'a', 'a@a.c', NULL, '$2y$10$7N7Z3VfrHfaB7NUGV033I.GISZpI.iHL96A8DJrStSB2KF1MkRLte', '7un24FJSnzC3TFDQGeCYQseTGgZndJXQyjKUNJ05fNwzH1Qe3SsDPCttQZ2f', '2022-06-18 04:17:29', '2022-06-18 04:17:29'),
(8, 1, 6, 'test', 'test@gmail.com', NULL, '$2y$10$x4M6u6EUGQY9j8zCsdIQHubfm6Y1rm6QqYgnB5nz3/VigVezg0iZe', NULL, '2022-06-26 01:18:31', '2022-06-26 01:18:31'),
(11, 0, 6, 'test2', 'no@cm.com', NULL, '$2y$10$q10jEwa012/rZJzJFQah3usfrxxvjKp8meEQNmQMXCDpe5HsHz3R6', NULL, '2022-07-11 00:31:17', '2022-07-11 00:31:17'),
(12, 2, 11, 'Xuân', 'xuan@gmail.com', NULL, '$2y$10$PZuly32pn6w6BSacIM66KuiXZwT0UXHQ4fnKI12Omy/fStA4vp6Zy', NULL, '2022-07-12 23:49:14', '2022-07-12 23:49:14'),
(13, 2, 11, 'Hy', 'hy@gmail.com', NULL, '$2y$10$lx/GUYnk9P.KdunisY8j2eBnGWfKoKKXZczumoBqv4E9.NF59TCh2', NULL, '2022-07-12 23:49:39', '2022-07-12 23:49:39'),
(14, 1, 11, 'test2', 'no@cm.comm', NULL, '$2y$10$z6QbSai54yMuU7VeaC24..02PuhO7dWXzOz1PKwQaqhHldxWBSuk6', NULL, '2022-07-13 15:44:38', '2022-07-13 15:44:38'),
(15, 1, 11, 'test3', 'no@cm.commc', NULL, '$2y$10$PzntZWXEGCcyFz1wm2UdguKpH8cyUCjU2gnf2gQkpmjlX0GMDAOHG', NULL, '2022-07-13 15:45:04', '2022-07-13 15:45:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contractlog`
--
ALTER TABLE `contractlog`
  ADD PRIMARY KEY (`idContractLog`);

--
-- Chỉ mục cho bảng `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Chỉ mục cho bảng `customerrequirement`
--
ALTER TABLE `customerrequirement`
  ADD PRIMARY KEY (`idRequirement`);

--
-- Chỉ mục cho bảng `delay`
--
ALTER TABLE `delay`
  ADD PRIMARY KEY (`idDelay`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`idFile`);

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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `roletype`
--
ALTER TABLE `roletype`
  ADD PRIMARY KEY (`idRole`);

--
-- Chỉ mục cho bảng `softwareacceptancedoc`
--
ALTER TABLE `softwareacceptancedoc`
  ADD PRIMARY KEY (`idDocument`);

--
-- Chỉ mục cho bảng `softwarecontract`
--
ALTER TABLE `softwarecontract`
  ADD PRIMARY KEY (`idContract`);

--
-- Chỉ mục cho bảng `taskinfo`
--
ALTER TABLE `taskinfo`
  ADD PRIMARY KEY (`idTask`),
  ADD KEY `FK_TaskOf` (`idSoftwareContract`),
  ADD KEY `FK_TaskUser` (`TaskidUser`);

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
  MODIFY `idContractLog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customerrequirement`
--
ALTER TABLE `customerrequirement`
  MODIFY `idRequirement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `delay`
--
ALTER TABLE `delay`
  MODIFY `idDelay` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `file`
--
ALTER TABLE `file`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roletype`
--
ALTER TABLE `roletype`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `softwareacceptancedoc`
--
ALTER TABLE `softwareacceptancedoc`
  MODIFY `idDocument` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `softwarecontract`
--
ALTER TABLE `softwarecontract`
  MODIFY `idContract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `taskinfo`
--
ALTER TABLE `taskinfo`
  MODIFY `idTask` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `idUserGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `delay`
--
ALTER TABLE `delay`
  ADD CONSTRAINT `FK_Task` FOREIGN KEY (`idTask`) REFERENCES `taskinfo` (`idTask`);

--
-- Các ràng buộc cho bảng `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_UserChange` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `FK_Role` FOREIGN KEY (`idRole`) REFERENCES `roletype` (`idRole`),
  ADD CONSTRAINT `FK_UserRole` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `taskinfo`
--
ALTER TABLE `taskinfo`
  ADD CONSTRAINT `FK_SoftwareBuid` FOREIGN KEY (`idSoftwareContract`) REFERENCES `softwarecontract` (`idContract`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
