-- -----------------------------------------------------
-- Schema BDBaskDules
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS BDBaskDules DEFAULT CHARACTER SET utf8 ;
USE BDBaskDules;


-- -----------------------------------------------------
-- Tabela Cliente
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Cliente(
  idCliente VARCHAR(11) NOT NULL,
  Nome VARCHAR(45) NOT NULL,
  Telefone VARCHAR(20),
  PRIMARY KEY (IdCliente))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabela Funcionario 
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Funcionario(
  idFunc VARCHAR(11) NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(45) NOT NULL,
  Telefone VARCHAR(20),
  PRIMARY KEY (IdFunc))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabela Moderador 
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Moderador(
  idModer VARCHAR(11) NOT NULL,
  Nome VARCHAR(45) NOT NULL,
  Telefone VARCHAR(20),
  PRIMARY KEY (IdModer))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabela Jogo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Jogo (
  idJogo INT NOT NULL AUTO_INCREMENT,
  Horario DATETIME NOT NULL,
  PRIMARY KEY (idJogo),
  CONSTRAINT fk_numQuadra
    FOREIGN KEY (numQuadra)
    REFERENCES Quadra (idQuadra)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_idArbitragem
    FOREIGN KEY (Arbitragem)
    REFERENCES Arbitragem (idArbitragem)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabela Quadra
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Quadra (
  idQuadra INT NOT NULL AUTO_INCREMENT,
  Capacidade INT NOT NULL,
  Preco FLOAT(5,2) NOT NULL
  Ocupada BOOLEAN
  PRIMARY KEY (idQuadra),
  CONSTRAINT fk_idFunc
    FOREIGN KEY (FuncResponsavel)
    REFERENCES Funcionario (idFunc)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabela Arbitro
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Arbitro (
  idArbitro INT NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (idArbitro),
  CONSTRAINT fk_idFunc
    FOREIGN KEY (FuncResponsavel)
    REFERENCES Funcionario (idFunc)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Tabela Arbitragem
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Arbitragem (
  idArbitragem INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idArbitragem),
  CONSTRAINT fk_idArbitro1
    FOREIGN KEY (PrimeroArbitro)
    REFERENCES Arbitro (idArbitro)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_idArbitro2
    FOREIGN KEY (SegundoArbitro)
    REFERENCES Arbitro (idArbitro)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


