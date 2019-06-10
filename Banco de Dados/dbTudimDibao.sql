-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para tudimdibao
CREATE DATABASE IF NOT EXISTS `tudimdibao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tudimdibao`;

/*Se alterar o nome do DB, tratar os arquivos PHP para se comunicarem com o banco renomeado*/

-- Copiando estrutura para tabela tudimdibao.cardapio
CREATE TABLE IF NOT EXISTS `cardapio` (
  `idCardapio` int(11) NOT NULL,
  `segunda` varchar(150) DEFAULT NULL,
  `terca` varchar(150) DEFAULT NULL,
  `quarta` varchar(150) DEFAULT NULL,
  `quinta` varchar(150) DEFAULT NULL,
  `sexta` varchar(150) DEFAULT NULL,
  `sabado` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idCardapio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Se alterar a estrutura da tabela, altere também os arquivos PHP para buscarem esses campos*/

-- Copiando dados para a tabela tudimdibao.cardapio: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
INSERT INTO `cardapio` (`idCardapio`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`) VALUES
	(0, 'Teste 0', 'Teste 1', 'Teste 2', 'Teste 3', 'Teste 4', 'Teste 5');
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;

/*Não criar novos índices na tabela, o formulário irá apenas editar o índice 0*/

-- Copiando estrutura para tabela tudimdibao.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `loginUsuario` varchar(45) NOT NULL,
  `senhaUsuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Se modificar os camnpos da tabela, modificar também os campos PHP para lidarem com esta alteração*/

-- Copiando dados para a tabela tudimdibao.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `loginUsuario`, `senhaUsuario`) VALUES
	(1, 'admin', '123456');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*Cuidado ao adicionar novos usuários*/

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
