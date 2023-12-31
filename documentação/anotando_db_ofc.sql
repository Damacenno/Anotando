-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para anotando
CREATE DATABASE IF NOT EXISTS `anotando` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `anotando`;

-- Copiando estrutura para tabela anotando.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nome` varchar(50) DEFAULT NULL,
  `usuario_email` varchar(50) DEFAULT NULL,
  `usuario_senha` varchar(255) DEFAULT NULL,
  `usuario_foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela anotando.usuarios: ~3 rows (aproximadamente)
INSERT INTO `usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_foto`) VALUES
	(1, 'administrador', 'admin@email.com', '$2y$10$iUx1b7XBHEVTyXjIH5PFI.o.PyLqBkn.wlQn3TfPzsbhexCTcaWVO', 'MjcwYy5wbmc='),
	(2, 'teste', 'teste@email.com', '$2y$10$Wc4Gh3kmxvNReXEaUinT8OikVqhA7ygtIEWGM6Ud7IRpkb7xVMgae', 'RjlOWG9lUFdBQUFZUTFaLmpmaWY='),
	(3, 'Caio', 'c@gmail.com', '$2y$10$TymCjs1DRYgQKGBFstxxau82gS7136Y09eWRPf1FR8aNI/OES842m', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
