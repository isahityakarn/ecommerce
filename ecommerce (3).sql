-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 02:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocarts`
--

CREATE TABLE `addtocarts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `dop` varchar(50) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtocarts`
--

INSERT INTO `addtocarts` (`id`, `user_id`, `product_id`, `qty`, `total_price`, `dop`, `active`, `created_at`) VALUES
(18, 1, 12, 3, 216, '31-Mar-2021', 0, '2021-04-02 08:03:18'),
(19, 1, 1, 5, 4750, '31-Mar-2021', 0, '2021-04-02 08:03:18'),
(20, 1, 2, 2, 1600, '31-Mar-2021', 0, '2021-04-02 08:03:18'),
(21, 7, 1, 3, 2850, '02-Apr-2021', 0, '2021-04-02 08:55:37'),
(22, 7, 19, 1, 155, '02-Apr-2021', 0, '2021-04-02 08:11:18'),
(23, 1, 19, 1, 155, '02-Apr-2021', 0, '2021-04-02 08:51:38'),
(24, 1, 4, 2, 104, '02-Apr-2021', 0, '2021-04-02 08:52:02'),
(25, 7, 10, 2, 310, '02-Apr-2021', 0, '2021-04-02 08:59:25'),
(26, 7, 7, 1, 310, '02-Apr-2021', 0, '2021-04-02 08:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$.UM.gGUQ3H1E4bXzabNKH.ZOG9XiU.o/RzcQXDetmbuol10JVcaYu', NULL, '2021-03-25 06:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'capsule', 'capsule', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'cream', 'cream', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'juice', 'juice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'oil', 'oil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'powder', 'powder', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'soap', 'soap', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'syrup', 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'shampoo', 'shampoo', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_03_25_070056_create_admins_table', 1),
(2, '2021_03_25_102112_create_categories_table', 2),
(3, '2021_03_26_070017_create_products_table', 3),
(4, '2021_03_30_060331_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_infos`
--

CREATE TABLE `order_infos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dop` varchar(200) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_infos`
--

INSERT INTO `order_infos` (`id`, `order_id`, `user_id`, `dop`, `product_id`, `qty`, `price`, `updated_at`, `created_at`) VALUES
(21, 1, 1, '02-Apr-2021', 18, 3, 216, '2021-04-02 02:07:09', '2021-04-02 02:07:09'),
(22, 1, 1, '02-Apr-2021', 19, 5, 4750, '2021-04-02 02:07:09', '2021-04-02 02:07:09'),
(23, 1, 1, '02-Apr-2021', 20, 2, 1600, '2021-04-02 02:07:09', '2021-04-02 02:07:09'),
(24, 24, 1, '02-Apr-2021', 18, 3, 216, '2021-04-02 02:14:39', '2021-04-02 02:14:39'),
(25, 24, 1, '02-Apr-2021', 19, 5, 4750, '2021-04-02 02:14:39', '2021-04-02 02:14:39'),
(26, 24, 1, '02-Apr-2021', 20, 2, 1600, '2021-04-02 02:14:39', '2021-04-02 02:14:39'),
(27, 27, 1, '02-Apr-2021', 12, 3, 216, '2021-04-02 02:33:18', '2021-04-02 02:33:18'),
(28, 27, 1, '02-Apr-2021', 1, 5, 4750, '2021-04-02 02:33:18', '2021-04-02 02:33:18'),
(29, 27, 1, '02-Apr-2021', 2, 2, 1600, '2021-04-02 02:33:18', '2021-04-02 02:33:18'),
(30, 30, 1, '02-Apr-2021', 19, 1, 155, '2021-04-02 02:41:18', '2021-04-02 02:41:18'),
(31, 31, 1, '02-Apr-2021', 19, 1, 155, '2021-04-02 02:42:36', '2021-04-02 02:42:36'),
(32, 32, 1, '02-Apr-2021', 19, 1, 155, '2021-04-02 03:21:38', '2021-04-02 03:21:38'),
(33, 33, 1, '02-Apr-2021', 4, 2, 104, '2021-04-02 03:22:02', '2021-04-02 03:22:02'),
(34, 34, 7, '02-Apr-2021', 1, 3, 2850, '2021-04-02 03:25:37', '2021-04-02 03:25:37'),
(35, 35, 7, '02-Apr-2021', 10, 2, 310, '2021-04-02 03:29:25', '2021-04-02 03:29:25'),
(36, 35, 7, '02-Apr-2021', 7, 1, 310, '2021-04-02 03:29:25', '2021-04-02 03:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `stock` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `c_slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `s_description`, `description`, `specification`, `price`, `stock`, `quantity`, `image`, `category_id`, `c_slug`, `created_at`, `updated_at`) VALUES
(1, 'Pile-Swift Caps', 'pile-swift-capsule', 'one', 'Each capsule contains:- maha Neem-100mg, Naag Kesar-70mg, Haritaki-40mg, Amla-40mg, Bahera-40mg, Apamarg-20mg, Ajmoda-20mg, Indrayav-20mg, Khadir-20mg, Nisoth-40mg, Senna-40mg, Gugglu-20mg, Shudh Shilajit-20mg, Perval Pisti-10mg. ', 'two', '950.00', 'In Stock', 1, 'pile-capsule.jpg', 1, 'capsule', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Swift Dengue Cure Caps', 'swift-dengue-capsule', 'one', 'Each capsule contains: Papaya Leaf (Carica Papaya)-350mg, Giloy (Tinospora Cordifolia)-150mg. Packing:-10X10 A-A', 'two', '800.00', 'In Stock', 1, 'dengu-cure-capsule.jpg', 1, 'capsule', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Swift Hangover Caps', 'swift-hangover-capsule', 'one', 'Each capsule contains : extracts- Khajura* Fr-47mg, Kasni#Sd 47mg, Yavatikta #Wh.Pl. 47mg, Draksha* Fr. 47mg, Bhumiamlaki# Wh.Pl. 31mg, Amalakai* Fr. 31mg, other ingredients : Sodium Benzoate IP, Capsule colour : Brilliant Blue FCF.', 'two', '1290.00', 'In Stock', 1, 'hangover-capsule.jpg', 1, 'capsule', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Cracknil Cream', 'cracknil-cream', 'one', 'Each gm contains: RaExd. (Dct.)-20.0% w/w,Phitkari Sudh-2.0% w/w, Rt.(Dct.)-5.0% w/w,Manjistha Rt. (Dct.)-5.0% w/w,Kampilak Fr. Dust (Dct.)-20.0% MPS IP-(0.45%), PPS IP (0.02%),Colour Sunset Yellow (0.1%),Caramel (0.05%),Fragrance Mongra (0.4%)', 'two', '52.00', 'In Stock', 1, 'cracknil-cream.png', 2, 'cream', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Swift Aloevera Juice', 'swift-aloevera-juice', 'one', 'Each 10ml contains: Aloevera (Aloe Barbadensis)-10gm, Sorbitol-q.s. Packing:-500 ML', 'two', '285.00', 'In Stock', 1, 'aloevera-juice.jpg', 3, 'juice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Swift Ashwagandha Juice', 'swift-ashwagandha-juice', 'one', 'Arjun Chhal, Aahwagandha, Jatamans, Shatavari?Kaunch Beej, Vidari Kand, Munakka, Giloy, Saunf.', 'two', '390.00', 'In Stock', 1, 'ashwangandha-juice.jpg', 3, 'juice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Swift Jamun Karela Juice', 'swift-jamun-karela-juice', 'one', 'Each 10ml contains: Neem-200mg, Karela-750mg, Jamun -1000mg, Gudmar-250mg, Methi-250mg. Preservatives : Sodium Benzoate-0.5%w/v, Methylparaben Sodium-0.1% w/v, Propylparaben Sodium-0.01%w/v?', 'two', '310.00', 'In Stock', 1, 'karela-juice.jpg', 3, 'juice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Swift Noni Juice', 'swift-noni-juice', 'one', 'Noni is rich in antioxidants, Vitamin C, Vitamin B3, Vitamin A and Iron and helps to strengthen the immune system.\nAids in reducing the effect of stress on the cognitive system.\nEmbodies antiviral properties thus beneficial in the case of cold, cough, fever, and body ache.\nImproves the blood flow in the arteries thus promoting a healthy heart\nhelp relieve constipation , Each 10ml contains: Noni Fruit Ras (Morinda Citrifolia)-0.95gm, Coccom fruit Ras (Garcinia Indica)-0.03gm.', 'two', '450.00', 'In Stock', 1, 'noni-juice.jpg', 3, 'juice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Adeliv Oil', 'adeliv-oil', 'one', 'Baby nourishing skin oil-100 ml -  Protects Skin dryness,Improves blood circulation,Promotes muscle & Bone health,Normalize Muscle tone,Provide soothing action for dry skin & nappy rash: - Olive Oil enriched with Vitamin A, D & E', 'two', '199.00', 'In Stock', 1, 'adeliv-oil.jpg', 4, 'oil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Majitrich Hair Oil', 'majitrich-hair-oil', 'one', 'Each 10ml contains: Olive Oil-10ml, Almond Oil-10ml, Sarso il-5ml, Coconut Oil-2ml, Bhring Raj Oil-10ml, Grain seed Oil-2ml, Castor Oil-2ml, Levender Oil-2ml, Cyprus Oil-2ml, Sage Oil-2ml, Rose Marry Oil-2ml, Jojoba Oil-4ml, Geranium Oil-2ml, Fenguin Seed Oil-5ml, Maskruit Oil-5ml, Aloe Vera-5ml, Gohru Powder-50gm, Triphla Powder-50gm, Aswagandha Powder-50gm, Shikakai Powder-50gm, Heena Powder-50gm, ', 'two', '155.00', 'In Stock', 1, 'majitrich-hair-oil.png', 4, 'oil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Oliade Oil', 'oliade-oil', 'one', 'Composition:-Baby oil enriched with Olive oil, Vitamin A, D & E,1. Protects Skin dryness\n2. Improves blood circulation\n3. Promotes muscle & Bone health\n4. Normalize Muscle tone\n5. Provide soothing action for dry skin & nappy rash', 'two', '199.00', 'In Stock', 1, 'oliade-oil.jpg', 4, 'oil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Natulooz Powder', 'natulooz-powder', 'one', 'Each 6 gm contains:', 'two', '72.00', 'In Stock', 1, 'natulooz-powder.png', 5, 'powder', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Swift Acnewash Soap', 'swift-acnewash-soap', 'one', 'Indication:\n\nRemoves dead cells\nTo help control acne breakouts\nTo remove dirt, pimples\nGives soft and glowing skin\nPacking: 75 gm\n\nDirections to use:\n\nWash face with water, develop rich leather and gently massage into the skin with fingers for two minutes and rinse off. Repeat 2-3 times a day.:- COMPOSITION:-\nSalicylic Acid IP-1.0% w/w, Soap Noodle Base-q.s.', 'two', '65.00', 'In Stock', 1, 'acnewash-soap.png', 6, 'soap', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Swift Neem & Aloevera Soap', 'swif-neem&aloevera-soap', 'one', 'Composition:-Aloe vera- 0.2% w/w, Neem extract- 0.1% w/w, Soap Noodle- q.s, Fragrance & Excipients-q.sINDICATION:-Keeps skin looking healthy, moiturizing & refreshing.', 'two', '75.00', 'In Stock', 1, 'neem-alovera-soap.png', 6, 'soap', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Hemonika Syrup', 'hemonika-syrup', 'one', 'COMPOSITION:-\nEach 5ml Syrup contains:\nAshok chall 317 mg, Ghel Kawar Patre 317 mg, Lodh 264 mg, Ulat Kamble 264 mg, Vasa patra 264 mg, Arjun Chall 211 mg, Amla 211 mg, Satawri 211 mg, Amaltas Gudha 211 mg, Sonth 211 mg, Jatamasi 211 mg, Dhatki 211 mg, Ajwain 158 mg, Nag Kesar 158 mg, Aajmod 158 mg, Ashwagandha 158 mg ; INDICATION :-\n\nHighly efficacious in abdominal cramp, pelvic pain, leucorrhoea, loss of Appetite, Anaemia, Backache, Nausea, Vomiting, Hot Flushes of Palm & Soles and other solutions of ill health in female.\nPurify & form new blood for glowing skin & beauty.', 'two', '126.00', 'In Stock', 1, 'hemonika-syrup.png', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Kufchil Syrup', 'kufchil-syrup', 'one', 'COMPOSITION :-\n\nHoney (A.F.I) and Aqueous extract derived from: Vasaka(Adhotoda Vasica) 500mg, Tulsi (Ocimum sanctum Lf.) 100mg, Kantakari (Solanum xanthocarpum) 100mg, Mulethi (Glycyrrhiza glabra St.) 150mg, Behada (Terminalia bellirica) 100mg, Kulanjan (Alpinla galangal Rt.) 50mg, Kakdasighi (Rosmarinus officinalis) 50mg, Vekhand (Calamus Root) 30mg, Dalchini (Cinnamomum verum) 20mg, Pippali (Pipur longum) 20mg, Sonth (Zingiber officinale St.) 20 mg, Kali Mirch (Piper nigrum) 20mg ; Description:\nEffective relief from Cough & cold\nAllergic , cold, throat infection\nBronchial congestion\n\nDosage- Children- ? -1 ? teaspoonful 2-3 times a day\nAdult- 1-3 teaspoonful 2-3 times a day.', 'two', '65.00', 'In Stock', 1, 'kufchil-syrup.png', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Swidril Honey Cough Syrup', 'swidril-honey-cough-syrup', 'one', 'COMPOSITION:-\nVasaka, Honey, Tulsi, Mulethi, Kaiphal, Gazgaan, Hansraj, Vharangi, Sugar base ; INDICATION:-\na : Very good expectorant, Clears throat of kapha Treat bronchitis.\nb : Soothes throat ans relives cough instantly.\nc : Effective expectorant.\nd : Sore throat reliever.', 'two', '110.00', 'In Stock', 1, 'swidril-honey-syrup.png', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Swift Braino-Fit Syrup', 'swiftbrain-o-fit-syrup', 'one', '\nCOMPOSITION:-\nEach 10ml contains: Sankhpushpi (Convolvulus pluricaulis)-600mg, Brahmi (Bacopa monnieri)-400mg, Bacha (Acorus Calamus)-200mg, Jatamanshi Nardostachys jatamanshi)-100mg, Ashwagandha (Withania somnifera)-500mg, Satawari (Asparagus racemosus)-100mg, Yashti Madhu (Glycyrrhiza glabra)-100mg, Tagar (Valeriana wallichii)-200mg, Khus Khus (Andropogon muricatus)-150mg, Jyotismati (Celastrus paniculatus)-150mg, Harar (Terminalia chebula)-175mg, Bahera (Terminalia belerica)-175mg, Amla (Emblica officinalis)-175mg. Preservative: Sodium Benzoate-0.4%, Methylparaben Sodium-0.1%, Propylparaben sodium-0.05% ; Indications:\nImproves learning\nConcentration\nImproves Recall Ability\nUseful in Brain Tonic\nCure weak memory\nReduce mental tension & anxiety\n\nPacking: 225 ml\n\nDosage:  2 teaspoon full 2-3 times a day', 'two', '180.00', 'In Stock', 1, 'braino-fit-syrup.png', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Swift Dengue Cure Syrup', 'swift-dengue-cure-syrup', 'one', 'Description\nEach 10ml contains: Giloy-1000mg, Tulsi-200mg, Pudina-100mg, Neem Leaf-50mg, Ashwagandha-100mg, Chirayata-100mg, Punarnava-200mg, Papaya Leaf-500mg, Base-Q.S. Packing:-200 ML ; Description:\nTreats Dengue fever.Platelet Booster\nAnti Malarial properties\nAnti-Inflammatory properties,\nNo Added Sugar\n\nPacking:-200 ml', 'two', '155.00', 'In Stock', 1, 'medicated-dengu-syrup.jpg', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Swift Musli Gold Syrup', 'swift-musli-gold-syrup', 'one', 'Description\nEach 10ml contains: Safed musli (Asparagus adscendens)-300mg, Vidarikand (Pueraria tuberosa)-300mg, Shatavar (Asparagus racemosus)-300mg, Ashwagandha (Withania somnifera)-300mg, Bhringraj (Eclipta alba)-300mg, Brahmi (Bacopa Monnieri)-300mg, Trikatu (A.S.S.)-150mg, Triphala (A.S.S.)-150mg, Shankhpushpi (Convolvulus pluricaulis)-300mg, Vidhara beej (Argyreia speciosa)-200mg, Gokhru (Tribulus terrestris)-100mg, Bala panchang (Sida cardifolia)-100mg ; Indications:-\nFor Vigor& Vitality\nIncrease stamina & energy\n\nPacking:-225 ml', 'two', '250.00', 'In Stock', 1, 'medicated-musli-syrup.jpg', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Swift Raktha Safi Syrup', 'swift-raktha-safi-syrup', 'one', 'Description\nComposition:\nEach 10ml contains:Manjistha (Rubia cordifolia)-500mg, Khair (Acacia catechu)-200mg, Daruhaldi (Berberies aristata)-200mg, Chirayata (Swerita chirayata)-100mg, kalmegh (Andrographis paniculata) 200mg, Pittpapra (Fumaria Indica)-200mg, Harar (Terminalia chebula) 600mg, Guduchi (Tinospora cordifolia)-200mg, Gorakhmundi (Sphaeranthus indicus)-600mg, Arusa (Adhatoda Vasica)-400mg, Sugar-Q.S. ; \nIndications:\nPurifies impure blood,\nImproves skin Health\nSeptic condition of wounds,\nOther skin disorders.\nPacking:  225 ml\nDosage:\n2 teaspoon full two to three times daily', 'two', '135.00', 'In Stock', 1, 'rakth-safi-syrup.jpg', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Swift Size-O Syrup', 'swift-size-o-syrup', 'one', '\nCOMPOSITION:-\nEach 10ml Contains: Virang (Myrsine Africana)-220mg, Harad (Terminalia Chebula)-150mg, Behada(Terminalia Bellirica-150mg, Amla (Emblica Officinalis)-150mg, Ghee Kuwar (Aloe Barbadensis)-350mg, Nagar Motha (Cyprus rotundus)-250mg, Saunth (Zingiber Officinalis)-250mg, Jeera (Cuminum Cyminym)-190mg, Vacha(Acorus calamus)-220mg, Patha (Cissampelos perrieta)-180mg, Khas (Papaver Somnifernum)-125mg, Balamool (Coptis teeta)-135mg. ; Weight management syrup\nApplication: One teaspoonful in the morning & evening twice daily or as directed by the physician.\nIndications:\nImproves Poor digestion levels\nImproves immune system\nBurns High fat levels\nRemoves Accumulated toxins in body that causes increase of weight\nBurns high calorie in body\nPacking: 225 ml\nDosage: Adults: 1-3 teaspoonfuls, 2-3 times a day', 'two', '210.00', 'In Stock', 1, 'swift-size-0-syrup.png', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Swift Stone Out Syrup', 'swift-stone-out-syrup', 'one', 'COMPOSITION :-\nEach 10ml contains: Pashanbhed (Saxifarga Ligulata)-450mg, Kulthi (Dolichos biflorus)-150mg, Varun Chhal (Crataeva nurvala)-200mg, Chandan (Santalum album)-150mg, Patthar Phool (Parmelia perlata)-300mg, Gokhru Chhota (Tribulus terrestris)-450mg, Kakri Beej (Cusumis Utillissinus)-100mg, Sheetal Chini (Piper Cubeba)-100mg, Apamarg (achyranthes aspera)-250mg, Bhumi Amla (Phyllanthus niruri)-100mg, Kasni Beej (Cichorium endivia)-50mg, Makoy (solanum nigrum)-150mg, Muli Kashar (Raphanus sativus)-100mg, Yavak Kashar (Potasli carbonas)-100mg, Sugar-Q.S. Preservative: Sodium Benzoate-0.4%, Methyl Paraben Sodium-0.1%, Propyl Paraben Sodium-0.05% ; Indications:\nDysuria\nBurning Micturition\nNon-specific UTI\nCrystalluria\nDosage: 10-15 ml 2-3 times a day\nPacking: 225 ml', 'two', '180.00', 'In Stock', 1, 'stone-out-syrup.jpg', 7, 'syrup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Majitrich Shampoo', 'majitrich-shampoo', 'one', 'COMPOSITION:-\nReetha-5mg, Amla-5mg, Bhringraj-5mg, Heena-5mg, Shikakai-5mg, Neem-5mg, Jatamansi-5mg, Tagar-5mg, Bakuchi-5mg, Haldi-5mg, Giloy-5mg, Ghritkumari-5mg, Amla Haldi-5mg. ; INDICATION:-\nCures baldness & prevents dandruff , Promotes hair growth, blackness & shine.\nPacking :- 100 ml', 'two', '75.00', 'In Stock', 1, 'majitrich-shampoo.png', 8, 'shampoo', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `state`, `zipcode`, `country`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'sahitya karn', 'sahityakarn@gmail.com', '$2y$10$VU/HXhDUI41TL4OTzJtbM.FbaTWIiE/BkW5xIhmgnJeBtiiixBwTa', 'vikas nagar', 'new delhi', '110059', 'new delhi', '9599007788', NULL, '2021-03-30 01:36:00'),
(7, 'neha', 'neha@gmail.com', '$2y$10$M.l9kiatlCCR9w8axatJTu5iiluJBrC3YrvvbglqYaC/oyKIL/dWi', 'b 36 gali no 6 vikas nagar new delhi', 'new delhi', '110059', 'india', '9521325444', '2021-04-01 03:35:51', '2021-04-01 03:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocarts`
--
ALTER TABLE `addtocarts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_infos`
--
ALTER TABLE `order_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocarts`
--
ALTER TABLE `addtocarts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_infos`
--
ALTER TABLE `order_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
