CREATE DATABASE TESTEPHP;
USE TESTEPHP;
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    NCM VARCHAR(20) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    ativo TINYINT(1) NOT NULL
);

select * from testephp.produtos;

INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('nintendo switch', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('ps4', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('xbox', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('ps5', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('pc gamer', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('teclado', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('headset', '20', 'attg', '400', '1');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('teclado', '10', 'gfrt', '200', '0');
INSERT INTO `testephp`.`produtos` (`nome`, `quantidade`, `NCM`, `valor`, `ativo`) VALUES ('teclado', '10', 'gfrt', '200', '0');

DELETE FROM `testephp`.`produtos` WHERE (`id` = '8');

select * from testephp.produtos;

