SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
create table `transaction` (
  `sno` int(4) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
create table `Ayush` (
  `id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `balance` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `Ayush` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Ayush', 'ayushpandey150703@gmail.com', 40000),
         (2, 'Ashish', 'Ashish12@gmail.com', 20000),
         (3, 'Smith', 'Smith1@gmail.com', 30000),
         (4, 'chandra', 'chandra6@gmail.com', 400000),
         (5, 'Harshit', 'Harshitserious12@gmail.com', 500000),
         (6, 'Ajay', 'Ajaypatil0@gmail.com', 255000),
         (7, 'Utkarsh', 'Utkarsh3545@gmail.com', 7284000),
         (8, 'Raj', 'Raj234@gmail.com', 5670000),
         (9, 'Prem', 'Prem433@gmail.com', 9881000),
         (10, 'Ramesh', 'ramesha@gmail.com', 8881070);
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);
ALTER TABLE `Ayush`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `transaction`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;