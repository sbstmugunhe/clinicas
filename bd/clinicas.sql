/*
Navicat MySQL Data Transfer

Source Server         : phpmyadmin
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : clinicas

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-28 15:29:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for campanhas
-- ----------------------------
DROP TABLE IF EXISTS `campanhas`;
CREATE TABLE `campanhas` (
  `id` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_vacinacao` varchar(255) DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `unidade_sanitaria` int(11) DEFAULT NULL,
  `brigada_movel` int(11) DEFAULT NULL,
  `agente_comunitario_saude` int(11) DEFAULT NULL,
  `intervalo_idade` int(11) DEFAULT NULL,
  `mulhere_p_parto` int(11) DEFAULT NULL,
  `comentarios` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of campanhas
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Clínica', 'Esta categoria guarda todas as clinicas cadastradas no sistema.', null, null);

-- ----------------------------
-- Table structure for diagnosticos
-- ----------------------------
DROP TABLE IF EXISTS `diagnosticos`;
CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sintoma` varchar(255) DEFAULT NULL,
  `metodo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of diagnosticos
-- ----------------------------

-- ----------------------------
-- Table structure for distritos
-- ----------------------------
DROP TABLE IF EXISTS `distritos`;
CREATE TABLE `distritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of distritos
-- ----------------------------
INSERT INTO `distritos` VALUES ('1', 'Distrito Municipal KaMpfumo', 'Distrito Municipal 1 - Distrito Municipal KaMpfumo.', null, null);
INSERT INTO `distritos` VALUES ('2', 'Distrito Municipal KaNhlamankulu', 'Distrito Municipal 2 - Distrito Municipal de Nhlamankulu.', null, null);
INSERT INTO `distritos` VALUES ('3', 'Distrito Municipal KaMaxakeni', 'Distrito Municipal 3 - Distrito Municipal KaMaxakeni', null, null);
INSERT INTO `distritos` VALUES ('4', 'Distrito Municipal KaMavota', 'Distrito Municipal 4. - Distrito Municipal KaMavota.', null, null);
INSERT INTO `distritos` VALUES ('5', 'Distrito Municipal KaMabukwana', 'Distrito Municipal 5 - Distrito Municipal KaMabukwana.', null, null);
INSERT INTO `distritos` VALUES ('6', 'Distrito Municipal KaTembe', 'Distrito Municpal da Catembe - Distrito Municipal Ka Tembe.', null, null);
INSERT INTO `distritos` VALUES ('7', 'Distrito Municipal KaNyaka', 'Distrito Municipal de Inhaca - Distrito Municipal KaNyaka.', null, null);

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES ('1', 'Direcção da Cidade', 'Este grupo possui todos os utilizadores da Direcção da Cidade.', '2018-07-20 06:53:45', '2019-04-16 06:37:06', null);
INSERT INTO `grupos` VALUES ('2', 'Unidade Sanitária', 'Este grupo possui todos os utilizadores  das Unidades Sanitárias.', '2018-07-20 07:00:03', '2019-04-16 06:37:52', null);

-- ----------------------------
-- Table structure for pacientes
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `area_trabalho` varchar(255) DEFAULT NULL,
  `residencia` varchar(255) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacto` (`contacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of pacientes
-- ----------------------------

-- ----------------------------
-- Table structure for tratamentos
-- ----------------------------
DROP TABLE IF EXISTS `tratamentos`;
CREATE TABLE `tratamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contadormensal` int(11) DEFAULT NULL,
  `unidade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `diagnostico_id` int(11) NOT NULL,
  `tratam` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `situacaovacinacao` varchar(255) DEFAULT NULL,
  `situacaopaciente` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tratamentos
-- ----------------------------

-- ----------------------------
-- Table structure for unidades
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `nuit` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_fundacao` date NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `distrito_id` int(11) NOT NULL,
  `numero_camas` int(3) NOT NULL,
  `endereco` text NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `unidade_esta_num_distrito` (`distrito_id`) USING BTREE,
  KEY `unidade_possui_uma_categoria` (`categorie_id`) USING BTREE,
  CONSTRAINT `unidade_esta_num_distrito` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `unidade_possui_uma_categoria` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of unidades
-- ----------------------------
INSERT INTO `unidades` VALUES ('1', 'Clínica Sommechild', 'O nosso maior valor é a vida.', '12345678', 'info@sommechild.co.mz', '2019-04-30', '1', '1', '20', 'Av. Karl Max, Nº 1234', 'Está clinica trata todo tipo de doenças com máquina.', null, null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(225) NOT NULL,
  `ultimo_nome` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `passkey` varchar(13) NOT NULL,
  `timeout` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Unidade', 'Sanitária', 'unidade', 'unidade@gmail.com', '2', 'unidade sanit', '2019-04-23 18:41:00', '$2y$10$YiCrm7HwN11NVb0NMKo5Y.1U.TWCfb6DaQrq1Na.VDAGqg0cSsmIG', '2018-07-23 16:27:23', '2019-04-28 13:19:21');
INSERT INTO `users` VALUES ('2', 'Rui Miguel', 'Cuna', 'aula', 'direccao@gmail.com', '1', 'direccao', '2018-07-24 12:01:00', '$2y$10$ktiTfJQTKNRfLT8K.FV5IeHEgjIANdKJ/5X2i17/1hIFLuq0TsqE6', '2018-07-24 10:02:23', '2019-04-16 06:35:41');
INSERT INTO `users` VALUES ('6', 'Gimo ', 'Munhas', 'gimo', 'gimo@gmail.com', '1', 'gimo', null, '$2y$10$oNoge4yzG4iAvCOdeJrs8.y3fsbGm2NpZV1540HewRrn7PKaRjLAu', '2019-04-16 15:19:45', '2019-04-16 15:19:45');
