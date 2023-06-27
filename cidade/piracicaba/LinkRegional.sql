create database linkregional;

drop database linkregional;

use linkregional;

CREATE TABLE cliente (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    nempresa VARCHAR(100) NOT NULL,
    cpf VARCHAR (11) unique NOT NULL,
    email VARCHAR(100),
    site VARCHAR(100),
    contato VARCHAR(20),
    endereco VARCHAR(50),
    cidade VARCHAR(50),
    estado VARCHAR(50),
    categoria VARCHAR(50),
    classificacao decimal(5,2),
    imagem_cartao varchar(220) NOT NULL,
    PRIMARY KEY (id)
)CHARSET=utf8mb4;

insert into cliente
(nome, nempresa, cpf, email, site, contato, endereco, cidade, estado, categoria, classificacao, imagem_cartao)
values
('Robson Ferreira', 'Oficina do Computador', '00000000000', 'oficinadocomputador.oficial@gmail', 'www.oficinadocomputador.com', 
 '15996653508', 'Rua Dois', 'Piracicaba', 'São Paulo', 'Serviço', '7.0', 'slide1.jpg');
 
 insert into cliente
(nome, nempresa, cpf, email, site, contato, endereco, cidade, estado, categoria, classificacao, imagem_cartao)
values
('Arthur Fellipo', 'Metri de Vinhos Finos', '01234567890', 'ometriarthurfellipo@gmail', 'www.metriarthurfellipe.com', 
 '15996653508', 'Av Maestro Elias Calfiman ', 'São Paulo', 'São Paulo', 'Serviço', '9.5', 'slide2.jpg');

select * from cliente;

show COLUMNS from cliente;

