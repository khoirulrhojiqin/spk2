/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : spk

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 29/06/2022 17:52:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_prodi
-- ----------------------------
DROP TABLE IF EXISTS `m_prodi`;
CREATE TABLE `m_prodi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `mata_kuliah` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 108 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_prodi
-- ----------------------------
INSERT INTO `m_prodi` VALUES (1, 'Sistem Informasi', 'Algoritma pemrograman');
INSERT INTO `m_prodi` VALUES (2, 'Sistem Informasi', 'Data warehouse');
INSERT INTO `m_prodi` VALUES (3, 'Sistem Informasi', 'Keamanan data');
INSERT INTO `m_prodi` VALUES (4, 'Sistem Informasi', 'Sistem pendukung keputusan');
INSERT INTO `m_prodi` VALUES (5, 'Sistem Informasi', 'Ui/ux');
INSERT INTO `m_prodi` VALUES (6, 'Sistem Informasi', 'Pemrograman terstruktur');
INSERT INTO `m_prodi` VALUES (7, 'Sistem Informasi', 'Pemrpgraman mobile');
INSERT INTO `m_prodi` VALUES (8, 'Sistem Informasi', 'Struktur data');
INSERT INTO `m_prodi` VALUES (9, 'Sistem Informasi', 'Pemrograman berorientasi objek');
INSERT INTO `m_prodi` VALUES (10, 'Sistem Informasi', 'Jaringan komputer');
INSERT INTO `m_prodi` VALUES (11, 'Sistem Informasi', 'Kakas pengembangan perangkat lunak');
INSERT INTO `m_prodi` VALUES (12, 'Sistem Informasi', 'Pemrograman web');
INSERT INTO `m_prodi` VALUES (13, 'Sistem Informasi', 'Basis data ');
INSERT INTO `m_prodi` VALUES (14, 'Teknik Informatika', 'Praktikum Teknologi Informasi');
INSERT INTO `m_prodi` VALUES (15, 'Teknik Informatika', 'Algoritma Pemrograman');
INSERT INTO `m_prodi` VALUES (16, 'Teknik Informatika', 'Pemrograman mobile');
INSERT INTO `m_prodi` VALUES (17, 'Teknik Informatika', 'Cyber security');
INSERT INTO `m_prodi` VALUES (18, 'Teknik Informatika', 'Pemrograman web 1');
INSERT INTO `m_prodi` VALUES (19, 'Teknik Informatika', 'Pemrograman web 2');
INSERT INTO `m_prodi` VALUES (20, 'Teknik Informatika', 'Data mining');
INSERT INTO `m_prodi` VALUES (21, 'Teknik Informatika', 'Text mining');
INSERT INTO `m_prodi` VALUES (22, 'Teknik Informatika', 'Pemrograman web 2');
INSERT INTO `m_prodi` VALUES (23, 'Teknik Informatika', 'Data mining');
INSERT INTO `m_prodi` VALUES (24, 'Teknik Informatika', 'Text mining');
INSERT INTO `m_prodi` VALUES (25, 'Teknik Perencanaan Wilayah dan Kota', 'Teknik evaluasi perencanaan');
INSERT INTO `m_prodi` VALUES (26, 'Teknik Perencanaan Wilayah dan Kota', 'Perencanaan real estate');
INSERT INTO `m_prodi` VALUES (27, 'Teknik Perencanaan Wilayah dan Kota', 'Revitalisasi kawasan');
INSERT INTO `m_prodi` VALUES (28, 'Teknik Perencanaan Wilayah dan Kota', 'Perencanaan kawasan agropolitan');
INSERT INTO `m_prodi` VALUES (29, 'Teknik Perencanaan Wilayah dan Kota', 'Perencanaan tata ruang pesisir dan kepulauan');
INSERT INTO `m_prodi` VALUES (30, 'Teknik Arsitektur', 'Asas dan perancangan arsitektur 2');
INSERT INTO `m_prodi` VALUES (31, 'Teknik Arsitektur', 'Asas dan perancangan arsitektur 3');
INSERT INTO `m_prodi` VALUES (32, 'Teknik Arsitektur', 'Asas dan perancangan arsitektur 4');
INSERT INTO `m_prodi` VALUES (33, 'Teknik Arsitektur', 'Asas dan perancangan arsitektur 5');
INSERT INTO `m_prodi` VALUES (34, 'Teknik Arsitektur', 'Asas dan perancangan arsitektur 6');
INSERT INTO `m_prodi` VALUES (35, 'Teknik Arsitektur', 'Struktur dan konstruksi bangunan 1');
INSERT INTO `m_prodi` VALUES (36, 'Teknik Arsitektur', 'Struktur dan konstruksi bangunan 2');
INSERT INTO `m_prodi` VALUES (37, 'Teknik Arsitektur', 'Struktur dan konstruksi bangunan 3');
INSERT INTO `m_prodi` VALUES (38, 'Teknik Arsitektur', 'Struktur dan konstruksi bangunan 4');
INSERT INTO `m_prodi` VALUES (39, 'Teknik Arsitektur', 'Struktur dan konstruksi bangunan 5');
INSERT INTO `m_prodi` VALUES (40, 'Teknik Arsitektur', 'Fisika bangunan');
INSERT INTO `m_prodi` VALUES (41, 'Teknik Arsitektur', 'Teknik presentasi arsitektur');
INSERT INTO `m_prodi` VALUES (42, 'Teknik Arsitektur', 'Studio perancangan tapak');
INSERT INTO `m_prodi` VALUES (43, 'Teknik Arsitektur', 'Wirausaha');
INSERT INTO `m_prodi` VALUES (44, 'Teknik Arsitektur', 'Arsitektur perilaku');
INSERT INTO `m_prodi` VALUES (45, 'Teknik Arsitektur', 'Arsitektur vernakuler');
INSERT INTO `m_prodi` VALUES (46, 'Teknik Arsitektur', 'Pengukuran dan pemetaan');
INSERT INTO `m_prodi` VALUES (47, 'Teknik Arsitektur', 'Teknopreneurship/wirausaha');
INSERT INTO `m_prodi` VALUES (48, 'Teknik Arsitektur', 'Teori dan kritik arsitektur');
INSERT INTO `m_prodi` VALUES (49, 'Teknik Arsitektur', 'Arsitektur nusantara');
INSERT INTO `m_prodi` VALUES (50, 'Ilmu Peternakan', 'Sosiologi masyarakat dan ilmu penyukuhan peternakan');
INSERT INTO `m_prodi` VALUES (51, 'Ilmu Peternakan', 'Genetika dan pemuliaan ternak');
INSERT INTO `m_prodi` VALUES (52, 'Ilmu Peternakan', 'Ilmu dan teknologi hasil ternak');
INSERT INTO `m_prodi` VALUES (53, 'Ilmu Peternakan', 'Ilmu ternak unggas');
INSERT INTO `m_prodi` VALUES (54, 'Ilmu Peternakan', 'Biokimia nutrisi ternak');
INSERT INTO `m_prodi` VALUES (55, 'Ilmu Peternakan', 'Anatomi dan fisiologi ternak');
INSERT INTO `m_prodi` VALUES (56, 'Ilmu Peternakan', 'Ilmu ternak ruminansia dan non ruminansia herbivora');
INSERT INTO `m_prodi` VALUES (57, 'Ilmu Peternakan', 'Pengendalian mutu dan keamanan pangan hasil ternak');
INSERT INTO `m_prodi` VALUES (58, 'Ilmu Peternakan', 'Bahan pakan dan formulasi ransum');
INSERT INTO `m_prodi` VALUES (59, 'Ilmu Peternakan', 'Ilmu reproduksi ternak');
INSERT INTO `m_prodi` VALUES (60, 'Ilmu Peternakan', 'Aplikasi komputer dalam bidang petrnakan');
INSERT INTO `m_prodi` VALUES (61, 'Ilmu Peternakan', 'Ilmu reproduksi ternak');
INSERT INTO `m_prodi` VALUES (62, 'Ilmu Peternakan', 'Ilmu penyakit dan reproduksi ternak');
INSERT INTO `m_prodi` VALUES (63, 'Ilmu Peternakan', 'Ilmu nutrisi unggas');
INSERT INTO `m_prodi` VALUES (64, 'Ilmu Peternakan', 'Mikrobiologi ternak');
INSERT INTO `m_prodi` VALUES (65, 'Ilmu Peternakan', 'Teknologi pengolahan limbah ternak');
INSERT INTO `m_prodi` VALUES (66, 'Ilmu Peternakan', 'Manajemen ternak potong dan kerja');
INSERT INTO `m_prodi` VALUES (67, 'Ilmu Peternakan', 'Teknologi reproduksi ternak');
INSERT INTO `m_prodi` VALUES (68, 'Ilmu Peternakan', 'Manajemen ternak unggas');
INSERT INTO `m_prodi` VALUES (69, 'Ilmu Peternakan', 'Manajemen ternak perah');
INSERT INTO `m_prodi` VALUES (70, 'Ilmu Peternakan', 'Teknologi pengolahan hasil ternak islami');
INSERT INTO `m_prodi` VALUES (71, 'Ilmu Peternakan', 'Teknologi pengolahan pakan');
INSERT INTO `m_prodi` VALUES (72, 'Ilmu Peternakan', 'Studi kelayakan usaha peternakan');
INSERT INTO `m_prodi` VALUES (73, 'Ilmu Peternakan', 'Pembibitan dan penetasan');
INSERT INTO `m_prodi` VALUES (74, 'Ilmu Peternakan', 'Sistem pertanian dan petrnakan terpadu');
INSERT INTO `m_prodi` VALUES (75, 'Ilmu Peternakan', 'Nutrisi dan gizi daging');
INSERT INTO `m_prodi` VALUES (76, 'Ilmu Peternakan', 'Industri pakan ternak');
INSERT INTO `m_prodi` VALUES (77, 'Ilmu Peternakan', 'Pembangunan koperasi peternakan dan usaha kecil menengah');
INSERT INTO `m_prodi` VALUES (78, 'Kimia', 'Kimia dasar 1');
INSERT INTO `m_prodi` VALUES (79, 'Kimia', 'Kimia dasar 2');
INSERT INTO `m_prodi` VALUES (80, 'Kimia', 'Pemisahan');
INSERT INTO `m_prodi` VALUES (81, 'Kimia', 'Kimia fisika 1');
INSERT INTO `m_prodi` VALUES (82, 'Kimia', 'Kimia Fisika 2');
INSERT INTO `m_prodi` VALUES (83, 'Kimia', 'Biokimia');
INSERT INTO `m_prodi` VALUES (84, 'Kimia', 'Metabolisme');
INSERT INTO `m_prodi` VALUES (85, 'Matematika', 'Kalkulus geometri');
INSERT INTO `m_prodi` VALUES (86, 'Matematika', 'Data mining');
INSERT INTO `m_prodi` VALUES (87, 'Matematika', 'Pemodelan risiko');
INSERT INTO `m_prodi` VALUES (88, 'Matematika', 'Analisis numerik');
INSERT INTO `m_prodi` VALUES (89, 'Matematika', 'Aljabar');
INSERT INTO `m_prodi` VALUES (90, 'Matematika', 'Matematika aktuaria');
INSERT INTO `m_prodi` VALUES (91, 'Matematika', 'Matematika ekonomi');
INSERT INTO `m_prodi` VALUES (92, 'Biologi', 'Botani dasar');
INSERT INTO `m_prodi` VALUES (93, 'Biologi', 'Botani lanjut');
INSERT INTO `m_prodi` VALUES (94, 'Biologi', 'Taksonomi tumbuhan tingkat tinggi');
INSERT INTO `m_prodi` VALUES (95, 'Biologi', 'Taksonomi Invetebrata');
INSERT INTO `m_prodi` VALUES (96, 'Biologi', 'Taksonomi Vertebrata');
INSERT INTO `m_prodi` VALUES (97, 'Biologi', 'Mikrobiologi lanjut');
INSERT INTO `m_prodi` VALUES (98, 'Biologi', 'Mikrobiologi dasar');
INSERT INTO `m_prodi` VALUES (99, 'Biologi', 'genetika');
INSERT INTO `m_prodi` VALUES (100, 'Biologi', 'Ekologi');
INSERT INTO `m_prodi` VALUES (101, 'Biologi', 'zoologi');
INSERT INTO `m_prodi` VALUES (102, 'Fisika', 'Fisika dasar 1');
INSERT INTO `m_prodi` VALUES (103, 'Fisika', 'Fisika dasar 2');
INSERT INTO `m_prodi` VALUES (104, 'Fisika', 'Fisika kimia');
INSERT INTO `m_prodi` VALUES (105, 'Fisika', 'Eksperimen 1');
INSERT INTO `m_prodi` VALUES (106, 'Fisika', 'Eksperimen 2');
INSERT INTO `m_prodi` VALUES (107, 'Fisika', 'Elektronika');

SET FOREIGN_KEY_CHECKS = 1;
