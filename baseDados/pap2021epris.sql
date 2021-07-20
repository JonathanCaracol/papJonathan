/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021epris

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 20/07/2021 15:52:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for avaliacoes
-- ----------------------------
DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE `avaliacoes`  (
  `avaliacaoPedidoId` int(11) NOT NULL,
  `avaliacaoValor` int(11) NOT NULL DEFAULT 0,
  `avaliacaoData` date NOT NULL,
  PRIMARY KEY (`avaliacaoPedidoId`) USING BTREE,
  INDEX `fk_avaliacao_pedidos1_idx`(`avaliacaoPedidoId`) USING BTREE,
  CONSTRAINT `fk_avaliacao_pedidos1` FOREIGN KEY (`avaliacaoPedidoId`) REFERENCES `pedidos` (`pedidoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of avaliacoes
-- ----------------------------

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `categoriaId` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categoriaDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categoriaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`categoriaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'Trabalho manual', 'Gostaria construir uma porta? Precisa de ajuda com a sua mobÃ­lia? PeÃ§a ajuda aqui.', 'images/trabalhoManual.jpg');
INSERT INTO `categorias` VALUES (2, 'Desporto e atividades fÃ­sicas', 'Quer aprender a danÃ§ar? Melhorar o seu remate a bola? Procure aqui!', 'images/desporto.jpeg');
INSERT INTO `categorias` VALUES (3, 'Arte ', 'Quer aprender a tocar um novo instrumento? Precisa de um artista para pintar um quadro? NÃ£o espere mais!', 'images/arte.jpg');
INSERT INTO `categorias` VALUES (4, 'Tarefas de casa', 'Precisa de alguÃ©m que cozinhe por si? Que lave a loiÃ§a? Temos o que necessÃ­ta!', 'images/cozinha.jpg');
INSERT INTO `categorias` VALUES (5, 'Baby-sitting', 'Precisa de alguÃ©m que tome conta das suas crianÃ§as? NÃ£o procure mais!', 'images/babysitting.jpg');
INSERT INTO `categorias` VALUES (20, 'EducaÃ§Ã£o', 'Precisa de alguÃ©m para relembrÃ¡-lo como fazer 2+2? Venha cÃ¡ pedir ajuda.', 'images/educacao.jpg');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos`  (
  `pedidoId` int(11) NOT NULL AUTO_INCREMENT,
  `pedidoServicoId` int(11) NOT NULL,
  `pedidoClienteId` int(11) NOT NULL,
  `pedidoEstado` enum('pedido','aceite','avaliado','recusado') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pedido',
  PRIMARY KEY (`pedidoId`) USING BTREE,
  INDEX `fk_pedidos_servicos1_idx`(`pedidoServicoId`) USING BTREE,
  INDEX `fk_pedidos_utilizadores1_idx`(`pedidoClienteId`) USING BTREE,
  CONSTRAINT `fk_pedidos_servicos1` FOREIGN KEY (`pedidoServicoId`) REFERENCES `servicos` (`servicoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_utilizadores1` FOREIGN KEY (`pedidoClienteId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidos
-- ----------------------------

-- ----------------------------
-- Table structure for servicos
-- ----------------------------
DROP TABLE IF EXISTS `servicos`;
CREATE TABLE `servicos`  (
  `servicoId` int(11) NOT NULL AUTO_INCREMENT,
  `servicoNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `servicoCategoriaId` int(11) NOT NULL,
  `servicoDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `servicoUtilizadorId` int(11) NOT NULL,
  PRIMARY KEY (`servicoId`) USING BTREE,
  INDEX `fk_servicos_categorias1_idx`(`servicoCategoriaId`) USING BTREE,
  INDEX `fk_servicos_utilizadores1_idx`(`servicoUtilizadorId`) USING BTREE,
  CONSTRAINT `fk_servicos_categorias1` FOREIGN KEY (`servicoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_utilizadores1` FOREIGN KEY (`servicoUtilizadorId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of servicos
-- ----------------------------
INSERT INTO `servicos` VALUES (9, 'BalÃµes de agua', 2, 'BalÃµes', 1);
INSERT INTO `servicos` VALUES (11, 'Madeira Estatuas', 4, 'Eu faÃ§o estatuas de madeira bem fixes', 1);
INSERT INTO `servicos` VALUES (30, 'Assar frangos', 4, 'Eu asso frangos para si', 8);

-- ----------------------------
-- Table structure for slideshow
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow`  (
  `idslideShow` int(11) NOT NULL AUTO_INCREMENT,
  `UrlSlideShow` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idslideShow`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES (1, 'images/firstSlide.png');
INSERT INTO `slideshow` VALUES (2, 'images/secondSlide.png');
INSERT INTO `slideshow` VALUES (3, 'images/thirdSlide.png');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Jonathan', 'Jonathan');
INSERT INTO `users` VALUES (2, 'Leandro', 'Leandro');
INSERT INTO `users` VALUES (4, 'Simao', 'Simao');
INSERT INTO `users` VALUES (8, 'Luis', 'Luis');

-- ----------------------------
-- Table structure for utilizadores
-- ----------------------------
DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores`  (
  `utilizadorId` int(11) NOT NULL AUTO_INCREMENT,
  `utilizadorNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEstado` enum('pendente','ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pendente',
  `utilizadorUserId` int(11) NOT NULL,
  `utilizadorPontos` int(11) NOT NULL,
  PRIMARY KEY (`utilizadorId`) USING BTREE,
  INDEX `fk_utilizadores_users1_idx`(`utilizadorUserId`) USING BTREE,
  CONSTRAINT `fk_utilizadores_users1` FOREIGN KEY (`utilizadorUserId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of utilizadores
-- ----------------------------
INSERT INTO `utilizadores` VALUES (1, 'Jonathan', '917346505', 'joncarajoinas@gmail.com', 'ativo', 1, 19);
INSERT INTO `utilizadores` VALUES (2, 'Leandro', '918329182', 'Leandro@gmail.com', 'ativo', 2, 25);
INSERT INTO `utilizadores` VALUES (4, 'Simao', '919324231', 'Simao@gmail.com', 'ativo', 4, 20);
INSERT INTO `utilizadores` VALUES (8, 'Luis', '934544277', 'emaildoluis@sapo.pt', 'ativo', 8, 18);

SET FOREIGN_KEY_CHECKS = 1;
