/*
 Navicat Premium Data Transfer

 Source Server         : ServerPHPMyAdmin
 Source Server Type    : MySQL
 Source Server Version : 50640
 Source Host           : localhost:3306
 Source Schema         : clinicas

 Target Server Type    : MySQL
 Target Server Version : 50640
 File Encoding         : 65001

 Date: 23/04/2019 14:24:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for campanhas
-- ----------------------------
DROP TABLE IF EXISTS `campanhas`;
CREATE TABLE `campanhas`  (
  `id` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `comentarias` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentarios` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Clínica', 'Esta categoria guarda todas as clinicas cadastradas no sistema.', NULL, NULL);

-- ----------------------------
-- Table structure for distritos
-- ----------------------------
DROP TABLE IF EXISTS `distritos`;
CREATE TABLE `distritos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentarios` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of distritos
-- ----------------------------
INSERT INTO `distritos` VALUES (1, 'Distrito Municipal KaMpfumo', 'Distrito Municipal 1 - Distrito Municipal KaMpfumo.', NULL, NULL);
INSERT INTO `distritos` VALUES (2, 'Distrito Municipal de Nhlamankulu', 'Distrito Municipal 2 - Distrito Municipal de Nhlamankulu.', NULL, NULL);
INSERT INTO `distritos` VALUES (3, 'Distrito Municipal KaMaxakeni', 'Distrito Municipal 3 - Distrito Municipal KaMaxakeni', NULL, NULL);
INSERT INTO `distritos` VALUES (4, 'Distrito Municipal KaMavota', 'Distrito Municipal 4. - Distrito Municipal KaMavota.', NULL, NULL);
INSERT INTO `distritos` VALUES (5, 'Distrito Municipal KaMabukwana', 'Distrito Municipal 5 - Distrito Municipal KaMabukwana.', NULL, NULL);
INSERT INTO `distritos` VALUES (6, 'Distrito Municipal Ka Tembe', 'Distrito Municpal da Catembe - Distrito Municipal Ka Tembe.', NULL, NULL);
INSERT INTO `distritos` VALUES (7, 'Distrito Municipal KaNyaka', 'Distrito Municipal de Inhaca - Distrito Municipal KaNyaka.', NULL, NULL);

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentarios` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES (1, 'Direcção da Cidade', 'Este grupo possui todos os utilizadores da Direcção da Cidade.', '2018-07-20 06:53:45', '2019-04-16 06:37:06', NULL);
INSERT INTO `grupos` VALUES (2, 'Unidade Sanitária', 'Este grupo possui todos os utilizadores  das Unidades Sanitárias.', '2018-07-20 07:00:03', '2019-04-16 06:37:52', NULL);

-- ----------------------------
-- Table structure for unidades
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slogan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nuit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `data_fundacao` date NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `distrito_id` int(11) NOT NULL,
  `numero_camas` int(3) NOT NULL,
  `endereco` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentarios` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `unidade_esta_num_distrito`(`distrito_id`) USING BTREE,
  INDEX `unidade_possui_uma_categoria`(`categorie_id`) USING BTREE,
  CONSTRAINT `unidade_esta_num_distrito` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `unidade_possui_uma_categoria` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of unidades
-- ----------------------------
INSERT INTO `unidades` VALUES (1, 'Clínica Sommechild', 'O nosso maior valor é a vida.', '12345678', 'info@sommechild.co.mz', '2019-04-30', 1, 1, 20, 'Av. Karl Max, Nº 1234', 'Está clinica trata todo tipo de doenças com máquina.', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ultimo_nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `passkey` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timeout` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `modified` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Unidade', 'Sanitária', 'unidade', 'unidade@gmail.com', 2, 'unidade sanit', '2019-04-23 18:41:00', '123456', '2018-07-23 16:27:23', '2019-04-16 11:48:37');
INSERT INTO `users` VALUES (2, 'Rui Miguel', 'Cuna', 'aula', 'direccao@gmail.com', 1, 'direccao', '2018-07-24 12:01:00', '$2y$10$ktiTfJQTKNRfLT8K.FV5IeHEgjIANdKJ/5X2i17/1hIFLuq0TsqE6', '2018-07-24 10:02:23', '2019-04-16 06:35:41');
INSERT INTO `users` VALUES (3, 'Justino Fernando', 'Balança', 'justhyno', 'director.curso@gmail.com', 3, 'justhyno', '2018-07-27 12:05:00', '$2y$10$smsxgZp7M/IyyHlGZgv2tOCe9GwUN68tsPsdeC9UXl/aflJH8qGo2', '2018-07-25 12:36:17', '2018-07-30 07:47:50');
INSERT INTO `users` VALUES (4, 'Pena ', 'Carlos', 'penacarlos', 'estudante@gmail.com', 6, 'penacarlos', '2018-07-30 09:47:00', '$2y$10$I3dUKyC7Y4p/IDdEgZ5lZesR/XnzHZYMkJg7Qsq4m/LIN.c5faIiy', '2018-07-27 10:25:13', '2018-07-30 07:48:15');
INSERT INTO `users` VALUES (5, 'Cristina de Sousa', 'Cuna', 'cristina', 'cristina.cuna@gmail.com', 1, 'cuna', NULL, '$2y$10$/vuJPx7HChvDEaqgxzDpcugrhU5.6ZvT4W17wniqNp5ZngSN61qg6', '2018-10-31 18:28:42', '2018-10-31 18:28:42');
INSERT INTO `users` VALUES (6, 'Gimo ', 'Munhas', 'gimo', 'gimo@gmail.com', 1, 'gimo', NULL, '$2y$10$oNoge4yzG4iAvCOdeJrs8.y3fsbGm2NpZV1540HewRrn7PKaRjLAu', '2019-04-16 15:19:45', '2019-04-16 15:19:45');

SET FOREIGN_KEY_CHECKS = 1;
