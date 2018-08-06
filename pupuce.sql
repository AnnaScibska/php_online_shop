-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 09:34 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupuce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `_cart_Id` int(10) NOT NULL,
  `_user_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`_cart_Id`, `_user_Id`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `_cartItem_Id` int(10) NOT NULL,
  `_cartItem_Quantity` int(10) NOT NULL,
  `_cart_Id` int(10) NOT NULL,
  `_product_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cartitem`
--

INSERT INTO `cartitem` (`_cartItem_Id`, `_cartItem_Quantity`, `_cart_Id`, `_product_Id`) VALUES
(1, 4, 1, 4),
(2, 2, 1, 8),
(3, 3, 2, 3),
(4, 2, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `_user_Id` int(10) NOT NULL,
  `_user_FirstName` char(255) NOT NULL,
  `_user_Email` char(255) NOT NULL,
  `_user_Password` char(255) NOT NULL,
  `_superior_Id` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`_user_Id`, `_user_FirstName`, `_user_Email`, `_user_Password`, `_superior_Id`) VALUES
(1, 'Anna', 'anna@gmail.com', '123', 1),
(2, 'John', 'john@gmail.com', '333', 1),
(3, 'Jane', 'jane@gmail.com', '444', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `_product_Id` int(11) NOT NULL,
  `_product_Name` char(255) NOT NULL,
  `_product_Type` char(255) NOT NULL,
  `_product_Description` varchar(1000) NOT NULL,
  `_product_Image` varchar(1000) NOT NULL,
  `_product_Price` double NOT NULL,
  `_product_Quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`_product_Id`, `_product_Name`, `_product_Type`, `_product_Description`, `_product_Image`, `_product_Price`, `_product_Quantity`) VALUES
(1, 'super toy', 'toy', 'Itaque tum Scaevola cum in eam ipsam mentionem incidisset, exposuit nobis sermonem Laeli de amicitia habitum ab illo secum et cum altero genero, C. Fannio Marci filio, paucis diebus post mortem Africani. Eius disputationis sententias memoriae mandavi, quas hoc libro exposui arbitratu meo; quasi enim ipsos induxi loquentes, ne \'inquam\' et \'inquit\' saepius interponeretur, atque ut tamquam a praesentibus coram haberi sermo videretur.', 'https://img.chewy.com/is/image/catalog/59205_MAIN._AC_SL1500_V1518036947_.jpg', 4.55, 0),
(2, 'another super toy', 'toy', 'Et quoniam mirari posse quosdam peregrinos existimo haec lecturos forsitan, si contigerit, quamobrem cum oratio ad ea monstranda deflexerit quae Romae gererentur, nihil praeter seditiones narratur et tabernas et vilitates harum similis alias, summatim causas perstringam nusquam a veritate sponte propria digressurus.', 'https://i.warbycdn.com/-/f/sal-dog-toy-b3d49111', 3.05, 0),
(3, 'green ball', 'toy', 'Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest, expetendam putamus.', 'https://shop-cdn-m.shpp.ext.zooplus.io/bilder/large/spiky/ball/dog/toy/6/400/62906_PLA_TPR_Spiky_Ball_large_12_FG__53_6.jpg', 10, 0),
(4, 'Brown Dry Dog Food', 'food', 'Ex turba vero imae sortis et paupertinae in tabernis aliqui pernoctant vinariis, non nulli velariis umbraculorum theatralium latent, quae Campanam imitatus lasciviam Catulus in aedilitate sua suspendit omnium primus; aut pugnaciter aleis certant turpi sono fragosis naribus introrsum reducto spiritu concrepantes; aut quod est studiorum omnium maximum ab ortu lucis ad vesperam sole fatiscunt vel pluviis, per minutias aurigarum equorumque praecipua vel delicta scrutantes.', 'https://img.chewy.com/is/catalog/48934_PT2._AC_SL1500_V1476358651_.jpg', 2.5, 0),
(5, 'Color Dry Dog Food', 'food', 'Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.', 'https://target.scene7.com/is/image/Target/14776809_Alt02?wid=488&hei=488&fmt=pjpeg', 3.4, 0),
(6, 'PillTreats', 'medicine', 'Accedebant enim eius asperitati, ubi inminuta vel laesa amplitudo imperii dicebatur, et iracundae suspicionum quantitati proximorum cruentae blanditiae exaggerantium incidentia et dolere inpendio simulantium, si principis periclitetur vita, a cuius salute velut filo pendere statum orbis terrarum fictis vocibus exclamabant.', 'https://i5.walmartimages.com/asr/bee38a53-0d09-40fe-8ff5-f71a3fa68b5f_1.b87306307ef831d3765b60387180cf50.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF', 20, 0),
(7, 'Medical Kit', 'medicine', 'Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.', 'http://cdn.shopify.com/s/files/1/0662/0351/products/AMKAdventureDogMedKit_grande.jpg?v=1454186522', 26, 0),
(8, 'Frontline', 'medicine', 'Hanc regionem praestitutis celebritati diebus invadere parans dux ante edictus per solitudines Aboraeque amnis herbidas ripas, suorum indicio proditus, qui admissi flagitii metu exagitati ad praesidia descivere Romana. absque ullo egressus effectu deinde tabescebat immobilis.', 'https://d2ul0w83gls0j4.cloudfront.net/products/54/600/549074.jpg', 10, 0),
(9, 'Fresh Dog Food', 'food', 'Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.', 'https://shop-cdn-m.shpp.ext.zooplus.io/bilder/procani/viande/de/buf/cartilage/de/volaille/2/400/65746_procani_rindgefluegel_2.jpg', 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `_user_Id` int(10) NOT NULL,
  `_user_FirstName` char(255) NOT NULL,
  `_user_Email` char(255) NOT NULL,
  `_user_RegistrationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `_user_Password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`_user_Id`, `_user_FirstName`, `_user_Email`, `_user_RegistrationDate`, `_user_Password`) VALUES
(1, 'Anna', 'anna@gmail.com', '2018-08-05 22:53:06', '123'),
(2, 'Mary', 'mary@gmail.com', '2018-08-05 22:51:45', '234'),
(3, 'John', 'john@gmail.com', '2018-08-05 22:53:27', '456'),
(4, 'Jane', 'jane@gmail.com', '2018-08-05 23:52:48', '666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`_cart_Id`),
  ADD KEY `_user_Id` (`_user_Id`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`_cartItem_Id`),
  ADD KEY `_cart_Id` (`_cart_Id`),
  ADD KEY `_product_Id` (`_product_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`_user_Id`),
  ADD KEY `_user_Id` (`_superior_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`_product_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `_cart_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `_cartItem_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `_user_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `_product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `_user_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`_user_Id`) REFERENCES `user` (`_user_Id`);

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `cartitem_ibfk_1` FOREIGN KEY (`_cart_Id`) REFERENCES `cart` (`_cart_Id`),
  ADD CONSTRAINT `cartitem_ibfk_2` FOREIGN KEY (`_product_Id`) REFERENCES `product` (`_product_Id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`_superior_Id`) REFERENCES `employee` (`_user_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
