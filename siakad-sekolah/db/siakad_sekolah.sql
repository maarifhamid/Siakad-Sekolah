-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 08:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(50) NOT NULL,
  `Nama_Guru` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Nama_Mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `Nama_Guru`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`, `Nama_Mapel`) VALUES
('09867', 'Gibran Aira', '2021-05-31', 'L', '082295748333', 'Lubuk Linggau A', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `Kode_Mapel_Jadwal` varchar(50) NOT NULL,
  `NIP_Jadwal` varchar(50) NOT NULL,
  `Kode_Ruangan_Jadwal` varchar(50) NOT NULL,
  `Kode_Jurusan_Jadwal` varchar(50) NOT NULL,
  `Hari` varchar(50) NOT NULL,
  `Jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`Id_Jadwal`, `Kode_Mapel_Jadwal`, `NIP_Jadwal`, `Kode_Ruangan_Jadwal`, `Kode_Jurusan_Jadwal`, `Hari`, `Jam`) VALUES
(13, 'W01', 'DS003', 'R03', 'TIS1', 'Jumat', '05:10-09:10'),
(14, 'MK02', 'DS003', 'R02', 'TIS1', 'Jumat', '12:30-13:30');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `Kode_Jurusan_Sws` varchar(50) NOT NULL,
  `Nama_Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jurusan_Sws`, `Nama_Jurusan`) VALUES
('BS1', 'Bahasa'),
('MI1', 'IPA'),
('IP1', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Kode_Kelas` varchar(50) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kode_Kelas`, `Nama_Kelas`) VALUES
('R01', 'Ruangan 1'),
('R02', 'Ruangan 2'),
('R03', 'Ruangan 3'),
('R04', 'X MIPA 4');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `Kode_Mapel` varchar(50) NOT NULL,
  `Nama_Mapel` varchar(50) NOT NULL,
  `Jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`Kode_Mapel`, `Nama_Mapel`, `Jam`) VALUES
('MK01', 'Kimia', 2),
('MK02', 'Matematika', 3),
('W01', 'Fisika', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `Id_Nilai` int(11) NOT NULL,
  `NIS_Nilai` varchar(50) NOT NULL,
  `Kode_Mapel_Nilai` varchar(50) NOT NULL,
  `Semester` int(2) NOT NULL,
  `Nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`Id_Nilai`, `NIS_Nilai`, `Kode_Mapel_Nilai`, `Semester`, `Nilai`) VALUES
(2, 'D980980', 'W01', 1, 'A'),
(4, 'D980098', 'MK01', 1, 'A'),
(5, '067584', 'MK02', 1, 'A'),
(14, 'D980980', 'MK02', 2, 'B'),
(17, '067584', 'MK01', 1, 'A'),
(18, 'D980980', 'W01', 2, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(50) NOT NULL,
  `Nama_Siswa` varchar(50) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Nama_Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama_Siswa`, `Kelas`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`, `Nama_Jurusan`) VALUES
('1212', 'Gibran', 'R04', '2021-06-25', 'L', 'Lubuk Linggau A', '082295748333', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'ids.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 'admin', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma', 'sekolah.jpg'),
(18, 2, '098980', '$2y$10$25GSpBPnHynFHGafwjdyUeuwy6kF/6/pKLBSVdxk61suyPf5Tsugu', 'avatar5.png'),
(19, 3, 'D980098', '$2y$10$EEvgrytjn7UkxTXtefDx0ux60r.6jGwmo3pYS.2VybRApkvm97rGi', 'avatar04.png');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(2, 'Dosen'),
(3, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `Kode_Mapel` (`Nama_Mapel`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_Jadwal`),
  ADD KEY `FK_jadwal_dosen` (`NIP_Jadwal`),
  ADD KEY `FK_jadwal_ruangan` (`Kode_Ruangan_Jadwal`),
  ADD KEY `FK_jadwal_matakuliah` (`Kode_Mapel_Jadwal`),
  ADD KEY `FK_jadwal_jurusan` (`Kode_Jurusan_Jadwal`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Kode_Jurusan_Sws`),
  ADD UNIQUE KEY `Nama_Jurusan` (`Nama_Jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Kode_Mapel`),
  ADD UNIQUE KEY `Nama_Mapel` (`Nama_Mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id_Nilai`),
  ADD KEY `FK_nilai_mahasiswa` (`NIS_Nilai`),
  ADD KEY `FK_nilai_matakuliah` (`Kode_Mapel_Nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `FK_mahasiswa_jurusan` (`Nama_Jurusan`),
  ADD KEY `FK_Siswa_Kelas` (`Kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `FK_user_usergroup` (`Id_Usergroup_User`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id_Jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `FK_Guru_Mapel` FOREIGN KEY (`Nama_Mapel`) REFERENCES `mapel` (`Nama_Mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal_dosen` FOREIGN KEY (`NIP_Jadwal`) REFERENCES `guru` (`NIP`),
  ADD CONSTRAINT `FK_jadwal_jurusan` FOREIGN KEY (`Kode_Jurusan_Jadwal`) REFERENCES `jurusan` (`Kode_Jurusan_Sws`),
  ADD CONSTRAINT `FK_jadwal_matakuliah` FOREIGN KEY (`Kode_Mapel_Jadwal`) REFERENCES `mapel` (`Kode_Mapel`),
  ADD CONSTRAINT `FK_jadwal_ruangan` FOREIGN KEY (`Kode_Ruangan_Jadwal`) REFERENCES `kelas` (`Kode_Kelas`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai_mahasiswa` FOREIGN KEY (`NIS_Nilai`) REFERENCES `siswa` (`NIS`),
  ADD CONSTRAINT `FK_nilai_matakuliah` FOREIGN KEY (`Kode_Mapel_Nilai`) REFERENCES `mapel` (`Kode_Mapel`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_Siswa_Jurusan` FOREIGN KEY (`Nama_Jurusan`) REFERENCES `jurusan` (`Nama_Jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Siswa_Kelas` FOREIGN KEY (`Kelas`) REFERENCES `kelas` (`Kode_Kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_usergroup` FOREIGN KEY (`Id_Usergroup_User`) REFERENCES `usergroup` (`Id_Usergroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
