/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : pap2021epris

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 21/07/2021 23:12:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for avaliacoes
-- ----------------------------
DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE `avaliacoes`  (
  `avaliacaoPedidoId` int NOT NULL,
  `avaliacaoValor` int NOT NULL DEFAULT 0,
  `avaliacaoData` date NOT NULL,
  PRIMARY KEY (`avaliacaoPedidoId`) USING BTREE,
  INDEX `fk_avaliacao_pedidos1_idx`(`avaliacaoPedidoId`) USING BTREE,
  CONSTRAINT `fk_avaliacao_pedidos1` FOREIGN KEY (`avaliacaoPedidoId`) REFERENCES `pedidos` (`pedidoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of avaliacoes
-- ----------------------------

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `categoriaId` int NOT NULL AUTO_INCREMENT,
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
  `pedidoId` int NOT NULL AUTO_INCREMENT,
  `pedidoServicoId` int NOT NULL,
  `pedidoClienteId` int NOT NULL,
  `pedidoEstado` enum('pedido','aceite','avaliado','recusado') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pedido',
  PRIMARY KEY (`pedidoId`) USING BTREE,
  INDEX `fk_pedidos_servicos1_idx`(`pedidoServicoId`) USING BTREE,
  INDEX `fk_pedidos_utilizadores1_idx`(`pedidoClienteId`) USING BTREE,
  CONSTRAINT `fk_pedidos_servicos1` FOREIGN KEY (`pedidoServicoId`) REFERENCES `servicos` (`servicoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_utilizadores1` FOREIGN KEY (`pedidoClienteId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES (28, 9, 1, 'recusado');
INSERT INTO `pedidos` VALUES (29, 41, 11, 'recusado');

-- ----------------------------
-- Table structure for servicos
-- ----------------------------
DROP TABLE IF EXISTS `servicos`;
CREATE TABLE `servicos`  (
  `servicoId` int NOT NULL AUTO_INCREMENT,
  `servicoNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `servicoCategoriaId` int NOT NULL,
  `servicoDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `servicoUtilizadorId` int NOT NULL,
  PRIMARY KEY (`servicoId`) USING BTREE,
  INDEX `fk_servicos_categorias1_idx`(`servicoCategoriaId`) USING BTREE,
  INDEX `fk_servicos_utilizadores1_idx`(`servicoUtilizadorId`) USING BTREE,
  CONSTRAINT `fk_servicos_categorias1` FOREIGN KEY (`servicoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_utilizadores1` FOREIGN KEY (`servicoUtilizadorId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of servicos
-- ----------------------------
INSERT INTO `servicos` VALUES (9, 'BalÃµes de agua', 2, 'BalÃµes', 1);
INSERT INTO `servicos` VALUES (11, 'Madeira Estatuas', 1, 'Eu faÃ§o estatuas de madeira bem fixes', 1);
INSERT INTO `servicos` VALUES (30, 'Assar frangos', 4, 'Eu asso frangos para si', 8);
INSERT INTO `servicos` VALUES (32, 'Bancos de madeira', 1, 'Eu faÃ§o um banco de madeira grande', 1);
INSERT INTO `servicos` VALUES (33, 'Limpar o chÃ£o', 4, 'Vou limpar o chÃ£o atÃ© ficar limpinho', 9);
INSERT INTO `servicos` VALUES (34, 'Caricatura', 3, 'Vou desenhar uma caricatura da sua cara', 9);
INSERT INTO `servicos` VALUES (35, 'Limpar casa de banho', 4, 'Limpo as casas de banho atÃ© ficarem a cheirar a rosas como eu', 9);
INSERT INTO `servicos` VALUES (36, 'Tomar conta das crianÃ§as a noite', 5, 'Posso tomar conta das suas crianÃ§as enquanto sai fora', 14);
INSERT INTO `servicos` VALUES (37, 'Tomar conta das suas crianÃ§as de dia', 5, 'Posso tomar conta das suas crianÃ§as enquanto trabalha', 14);
INSERT INTO `servicos` VALUES (38, 'Ir correr consigo', 2, 'Posso ir correr consigo e exercitar me para ajudar', 15);
INSERT INTO `servicos` VALUES (39, 'Futebol', 2, 'Posso ensina-lo a jogar futebol e ser tÃ£o bom como o Ronaldo', 15);
INSERT INTO `servicos` VALUES (40, 'Pesca', 2, 'Posso ir ajudÃ¡-lo a pescar um peixÃ£o grande', 12);
INSERT INTO `servicos` VALUES (41, 'Futebol', 2, 'Posso ir ensinÃ¡-lo uns truques de futebol', 12);
INSERT INTO `servicos` VALUES (42, 'PortuguÃªs', 20, 'Posso dar aulas de portuguÃªs as suas crianÃ§as', 11);

-- ----------------------------
-- Table structure for slideshow
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow`  (
  `idslideShow` int NOT NULL AUTO_INCREMENT,
  `UrlSlideShow` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idslideShow`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES (2, 'images/secondSlide.png');
INSERT INTO `slideshow` VALUES (3, 'images/thirdSlide.png');
INSERT INTO `slideshow` VALUES (4, 'images/slideShow1.jpg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Jonathan', 'Jonathan');
INSERT INTO `users` VALUES (2, 'Leandro', 'Leandro');
INSERT INTO `users` VALUES (4, 'Simao', 'Simao');
INSERT INTO `users` VALUES (8, 'Luis', 'Luis');
INSERT INTO `users` VALUES (9, 'Sara', 'Sara');
INSERT INTO `users` VALUES (10, 'Daniel', 'Daniel');
INSERT INTO `users` VALUES (11, 'Carla', 'Carla');
INSERT INTO `users` VALUES (12, 'Joel', 'Joel');
INSERT INTO `users` VALUES (13, 'Monica', 'Monica');
INSERT INTO `users` VALUES (14, 'Nicole', 'Nicole');
INSERT INTO `users` VALUES (15, 'Julie', 'Julie');

-- ----------------------------
-- Table structure for utilizadores
-- ----------------------------
DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores`  (
  `utilizadorId` int NOT NULL AUTO_INCREMENT,
  `utilizadorNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEstado` enum('pendente','ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
  `utilizadorUserId` int NOT NULL,
  `utilizadorPontos` int NOT NULL,
  PRIMARY KEY (`utilizadorId`) USING BTREE,
  INDEX `fk_utilizadores_users1_idx`(`utilizadorUserId`) USING BTREE,
  CONSTRAINT `fk_utilizadores_users1` FOREIGN KEY (`utilizadorUserId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of utilizadores
-- ----------------------------
INSERT INTO `utilizadores` VALUES (1, 'Jonathan', '917346505', 'joncarajoinas@gmail.com', 'ativo', 1, 10);
INSERT INTO `utilizadores` VALUES (2, 'Leandro', '918329182', 'Leandro@gmail.com', 'ativo', 2, 20);
INSERT INTO `utilizadores` VALUES (4, 'Simao', '919324231', 'Simao@gmail.com', 'ativo', 4, 20);
INSERT INTO `utilizadores` VALUES (8, 'Luis', '934544277', 'emaildoluis@sapo.pt', 'ativo', 8, 20);
INSERT INTO `utilizadores` VALUES (9, 'Sara', '919609786', 'Sara@gmail.com', 'ativo', 9, 20);
INSERT INTO `utilizadores` VALUES (10, 'Daniel', '827321827', 'Daniel@gmail.com', 'ativo', 10, 20);
INSERT INTO `utilizadores` VALUES (11, 'Carla', '918274827', 'Carla@gmail.com', 'ativo', 11, 20);
INSERT INTO `utilizadores` VALUES (12, 'Joel', '928192839', 'Joel@gmail.com', 'ativo', 12, 20);
INSERT INTO `utilizadores` VALUES (13, 'Monica', '918289293', 'Monica@gmail.com', 'ativo', 13, 20);
INSERT INTO `utilizadores` VALUES (14, 'Nicole', '918239173', 'Nicole@gmail.com', 'ativo', 14, 20);
INSERT INTO `utilizadores` VALUES (15, 'Julie', '918928492', 'Julie@gmail.com', 'ativo', 15, 20);

SET FOREIGN_KEY_CHECKS = 1;
