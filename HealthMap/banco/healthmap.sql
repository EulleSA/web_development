DROP DATABASE IF EXISTS healthmap;
CREATE DATABASE healthmap;
USE healthmap;

CREATE TABLE doenca(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	categoria VARCHAR(50) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE endereco(
	cep INT NOT NULL,
	rua VARCHAR(50) NOT NULL,
	bairro VARCHAR(50) NOT NULL,
	cidade VARCHAR(50) NOT NULL,
	estado VARCHAR(50) NOT NULL,
	PRIMARY KEY(cep)
);

CREATE TABLE unidade_hospitalar(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) UNIQUE NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE endereco_unidade_hospitalar(
	id INT NOT NULL,
	cep INT NOT NULL,
	numero VARCHAR(50) NOT NULL,
	complemento VARCHAR(50) NOT NULL,
	FOREIGN KEY(id) REFERENCES unidade_hospitalar(id),
	FOREIGN KEY(cep) REFERENCES endereco(cep),
	PRIMARY KEY(id, cep)
);

CREATE TABLE usuario(
	cpf VARCHAR(11) NOT NULL,
	login VARCHAR(50) UNIQUE NOT NULL,
	senha VARCHAR(50) NOT NULL,
	nome VARCHAR(50) NOT NULL,
	data_nascimento DATE NOT NULL,
	sexo INT(1) NOT NULL,
	telefone INT NOT NULL,
	PRIMARY KEY(cpf)
);

CREATE TABLE endereco_usuario(
	cpf VARCHAR(11) NOT NULL,
	cep INT NOT NULL,
	numero VARCHAR(50) NOT NULL,
	complemento VARCHAR(50),
	FOREIGN KEY(cpf) REFERENCES usuario(cpf),
	FOREIGN KEY(cep) REFERENCES endereco(cep),
	PRIMARY KEY(cpf, cep)
);

CREATE TABLE usuario_hospital(
	matricula INT NOT NULL,
	cpf VARCHAR(11) NOT NULL,
	id_unidade_hospitalar INT NOT NULL,
	FOREIGN KEY(cpf) REFERENCES usuario(cpf),
	FOREIGN KEY(id_unidade_hospitalar) REFERENCES unidade_hospitalar(id),
	PRIMARY KEY(matricula, cpf, id_unidade_hospitalar)
);

CREATE TABLE usuario_comum(
	nsus BIGINT UNIQUE NOT NULL,
	cpf VARCHAR(11) NOT NULL,
	FOREIGN KEY(cpf) REFERENCES usuario(cpf),
	PRIMARY KEY(nsus, cpf)
);

CREATE TABLE usuario_dependente(
	nsus BIGINT UNIQUE NOT NULL,
	cpf VARCHAR(11) NOT NULL,
	nsus_responsavel BIGINT NOT NULL,
	parentesco VARCHAR(50) NOT NULL,
	FOREIGN KEY(cpf) REFERENCES usuario(cpf),
	FOREIGN KEY(nsus_responsavel) REFERENCES usuario_comum(nsus),
	PRIMARY KEY(nsus, cpf, nsus_responsavel)
);

-- https://pt.wikipedia.org/wiki/Categoria:Doenças
INSERT INTO doenca VALUES (1, "Gripe", "Infecciosa");
INSERT INTO doenca VALUES (2, "Sarampo", "Infecciosa");
INSERT INTO doenca VALUES (3, "Virus Zika", "Infecciosa");
INSERT INTO doenca VALUES (4, "Variola", "Infecciosa");

INSERT INTO endereco VALUES (59151250, "Avenida Abel Cabral", "Nova Parnamirim", "Parnamirim", "Rio Grande do Norte");
INSERT INTO endereco VALUES (59150260, "Rua das Patativas", "Nova Parnamirim", "Parnamirim", "Rio Grande do Norte");

INSERT INTO unidade_hospitalar VALUES (1, "Centro de Saude Suzete Cavalcanti");

INSERT INTO endereco_unidade_hospitalar values (1, 59150260, "s/n", "Em frente a quadra");

INSERT INTO usuario VALUES ("00000000001", "user", "senha", "Marcos", "1990-12-12", 0, 999999999);
INSERT INTO usuario VALUES ("00000000002", "userhospital", "senha", "Maria", "1985-11-05", 1, 999999998);
INSERT INTO usuario VALUES ("00000000003", "userdependente", "senha", "Joao", "2010-12-12", 0, 999999999);

INSERT INTO endereco_usuario VALUES ("00000000001", 59151250, "505", "Condominio");
INSERT INTO endereco_usuario VALUES ("00000000002", 59151250, "505", "Condominio");
INSERT INTO endereco_usuario VALUES ("00000000003", 59151250, "505", "Condominio");

INSERT INTO usuario_hospital VALUES (201801, "00000000002", 1);

INSERT INTO usuario_comum VALUES (123456789012345, "00000000001");

INSERT INTO usuario_dependente VALUES (543210987654321, "00000000003", 123456789012345, "Filho");



