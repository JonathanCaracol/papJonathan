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

 Date: 28/06/2021 11:02:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for avaliacao
-- ----------------------------
DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE `avaliacao`  (
  `avaliacaoId` int(11) NOT NULL AUTO_INCREMENT,
  `avaliacaoClienteId` int(11) NOT NULL,
  `avaliacaoServicoId` int(11) NOT NULL,
  PRIMARY KEY (`avaliacaoId`) USING BTREE,
  INDEX `fk_avaliacao_utilizadores1_idx`(`avaliacaoClienteId`) USING BTREE,
  INDEX `fk_avaliacao_servicos1_idx`(`avaliacaoServicoId`) USING BTREE,
  CONSTRAINT `fk_avaliacao_servicos1` FOREIGN KEY (`avaliacaoServicoId`) REFERENCES `servicos` (`servicoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_utilizadores1` FOREIGN KEY (`avaliacaoClienteId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of avaliacao
-- ----------------------------
INSERT INTO `avaliacao` VALUES (3, 1, 30);

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
INSERT INTO `categorias` VALUES (1, 'Trabalho manual', 'Trabalho manual', 'images/trabalhoManual.jpg');
INSERT INTO `categorias` VALUES (2, 'Desporto e atividades fÃ­sicas', 'Quer aprender a danÃ§ar? Melhorar o seu remate a bola? Procure aqui!', 'images/desporto.jpeg');
INSERT INTO `categorias` VALUES (3, 'Arte ', 'Quer aprender a tocar um novo instrumento? Precisa de um artista para pintar um quadro? Não espere mais!', 'images/arte.jpg');
INSERT INTO `categorias` VALUES (4, 'Tarefas de casa', 'Precisa de alguém que cozinhe por si? Que lave a loiça? Temos o que necessíta!', 'images/cozinha.jpg');
INSERT INTO `categorias` VALUES (5, 'Baby-sitting', '\r\nPrecisa de alguém que tome conta das suas crianças? Não procure mais!', 'images/babysitting.jpg');
INSERT INTO `categorias` VALUES (20, 'EducaÃ§Ã£o', 'EducaÃ§Ã£o', 'images/educacao.jpg');
INSERT INTO `categorias` VALUES (21, 'categoria Falsa', 'falsa', 'images/author-image-4-646x680.jpg');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos`  (
  `pedidoId` int(11) NOT NULL AUTO_INCREMENT,
  `pedidoServicoId` int(11) NOT NULL,
  `pedidoClienteId` int(11) NOT NULL,
  PRIMARY KEY (`pedidoId`) USING BTREE,
  INDEX `fk_pedidos_servicos1_idx`(`pedidoServicoId`) USING BTREE,
  INDEX `fk_pedidos_utilizadores1_idx`(`pedidoClienteId`) USING BTREE,
  CONSTRAINT `fk_pedidos_servicos1` FOREIGN KEY (`pedidoServicoId`) REFERENCES `servicos` (`servicoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_utilizadores1` FOREIGN KEY (`pedidoClienteId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES (13, 21, 2);
INSERT INTO `pedidos` VALUES (18, 9, 8);
INSERT INTO `pedidos` VALUES (19, 32, 1);

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
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of servicos
-- ----------------------------
INSERT INTO `servicos` VALUES (9, 'BalÃµes de agua', 2, 'BalÃµes', 1);
INSERT INTO `servicos` VALUES (11, 'Madeira Estatuas', 4, 'Eu faÃ§o estatuas de madeira bem fixes', 1);
INSERT INTO `servicos` VALUES (16, 'asdasd', 2, 'asdad', 2);
INSERT INTO `servicos` VALUES (17, 'sadadaas', 4, 'asdd', 3);
INSERT INTO `servicos` VALUES (18, 'asdadwd', 5, 'dasdad', 2);
INSERT INTO `servicos` VALUES (19, 'asdasd', 3, 'asdasd', 3);
INSERT INTO `servicos` VALUES (20, 'wdawda', 5, 'asdad', 1);
INSERT INTO `servicos` VALUES (21, 'ADDWD', 1, 'DAWDAW', 3);
INSERT INTO `servicos` VALUES (28, 'ola', 1, 'fsdffs', 2);
INSERT INTO `servicos` VALUES (30, 'Assar frangos', 4, 'Asso frangos no cap', 8);
INSERT INTO `servicos` VALUES (31, 'Venda de estupefacientes', 1, '2g de salada 25â‚¬ ', 4);
INSERT INTO `servicos` VALUES (32, 'xzcv', 21, 'xcvxcv', 1);

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
INSERT INTO `users` VALUES (3, 'Luis', 'Luis');
INSERT INTO `users` VALUES (4, 'Simao', 'Simao');
INSERT INTO `users` VALUES (5, 'puto_miguel', '12345');
INSERT INTO `users` VALUES (6, 'seixo_paulo', '1910');
INSERT INTO `users` VALUES (8, 'Luis18', 'notluis');

-- ----------------------------
-- Table structure for utilizadores
-- ----------------------------
DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores`  (
  `utilizadorId` int(11) NOT NULL AUTO_INCREMENT,
  `utilizadorNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEstado` enum('ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
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
INSERT INTO `utilizadores` VALUES (2, 'Leandro', '918329182', 'Leandro@gmail.com', 'ativo', 2, 21);
INSERT INTO `utilizadores` VALUES (3, 'Luis', '918291823', 'Luis@gmail.com', 'ativo', 3, 20);
INSERT INTO `utilizadores` VALUES (4, 'Simao', '919324231', 'Simao@gmail.com', 'ativo', 4, 20);
INSERT INTO `utilizadores` VALUES (5, 'puto_miguel', '000000000', 'miguelgay123@jj.com', 'ativo', 5, 20);
INSERT INTO `utilizadores` VALUES (6, 'seixo_paulo', '912345678', 'opipeserlindo@miguelgay.com', 'ativo', 6, 20);
INSERT INTO `utilizadores` VALUES (8, 'Luis18', '934544277', 'emaildoluis@sapo.pt', 'inativo', 8, 20);

SET FOREIGN_KEY_CHECKS = 1;
