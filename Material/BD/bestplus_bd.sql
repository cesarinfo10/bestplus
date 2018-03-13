/*
Navicat MySQL Data Transfer

Source Server         : CASV
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : bestplus_bd

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2018-03-09 18:21:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asesorias
-- ----------------------------
DROP TABLE IF EXISTS `asesorias`;
CREATE TABLE `asesorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of asesorias
-- ----------------------------
INSERT INTO `asesorias` VALUES ('1', 'Asesoria Social', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum', '1', '5a9c8a88a707fCopia de Dragon_Ball_Z_5.jpg', '2018-03-04 20:13:08', '2018-03-05 00:08:40');
INSERT INTO `asesorias` VALUES ('2', 'Digital Curve', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum', '2', '5a9c6f315231f07.jpg', '2018-03-04 22:12:01', '2018-03-04 22:43:43');
INSERT INTO `asesorias` VALUES ('3', 'Modalidad Presencial', 'Método de aprendizaje tradicional,  donde los participantes deben asistir a sesiones en horarios definidos.', '1', '5a9c7582988b6presencial3.jpg', '2018-03-04 22:36:10', '2018-03-04 22:38:58');
INSERT INTO `asesorias` VALUES ('4', 'Modalidad Autoinstrucción', 'Esta modalidad respeta los tiempos  y procesos de aprendizaje individuales, por lo tanto los participantes reciben el material.', '1', '5a9c764c5c3dbpresencial4.jpg', '2018-03-04 22:42:20', '2018-03-04 22:43:49');

-- ----------------------------
-- Table structure for fotos
-- ----------------------------
DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fotos
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2018_02_18_164307_create_carusell_table', '2');
INSERT INTO `migrations` VALUES ('2018_03_03_023410_create_nosotros_table', '3');
INSERT INTO `migrations` VALUES ('2018_03_04_163133_create_asesorias_table', '4');
INSERT INTO `migrations` VALUES ('2018_03_09_160602_create_fotos_table', '5');

-- ----------------------------
-- Table structure for nosotros
-- ----------------------------
DROP TABLE IF EXISTS `nosotros`;
CREATE TABLE `nosotros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nosotros
-- ----------------------------
INSERT INTO `nosotros` VALUES ('1', 'Nuestro  compromiso es  ser un  aliado estratégico de nuestros clientes,  en el desafío de desarrollar los talentos de su capital humano.  Esta es una tarea, que asumimos respetando estrictamente la confianza que depositan en nosotros, garantizando la  confidencialidad en el manejo de la información que nos entreguen.', '2018-03-03 15:46:39', '2018-03-04 16:17:51');
INSERT INTO `nosotros` VALUES ('5', 'Nuestra Empresa valora la diversidad , respeta  las capacidades distintas que  tienen las personas ,  por ello garantizamos  proveer de espacios accesible y metodologías de trabajo  adaptables a las distintas capacidades de nuestros clientes.', '2018-03-04 00:07:34', '2018-03-04 16:17:33');
INSERT INTO `nosotros` VALUES ('6', '✓Certificada NCH 2728 2015', '2018-03-04 00:07:57', '2018-03-04 00:07:57');
INSERT INTO `nosotros` VALUES ('7', '✓ISO 9001 2008', '2018-03-04 00:08:09', '2018-03-04 00:08:09');
INSERT INTO `nosotros` VALUES ('8', '✓Certificada SAG, para el reconocimiento de Aplicadores de Plaguicidas.', '2018-03-04 00:08:17', '2018-03-04 00:08:50');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES ('1', 'Creatividadd', 'Sistema de enseñanza – aprendizaje a distancia utilizando internet, Se caracteriza por utilizar plataformas para el desarrollo de las actividades, que permitan hacer seguimiento de los procesos de aprendizaje.', '1', '5a9c6e96b517apc.jpg', '2018-02-25 18:19:09', '2018-03-04 22:09:26');
INSERT INTO `sliders` VALUES ('2', 'Modalidad', 'En esta alternativa no existe interacción con una relator y los asistentes deben cumplir dentro de los requisitos de aprobación, con un mínimo de horas de conexión.', '1', '5a9c69a935aa3img-2.jpg', '2018-02-25 22:07:15', '2018-03-04 21:48:25');
INSERT INTO `sliders` VALUES ('3', 'Prueba3', 'prueba numero 3', '2', '5a94b653643bebrc1_7055.jpg', '2018-02-27 01:37:23', '2018-03-04 00:33:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
