CREATE DATABASE bar;

CREATE TABLE drinks_faceis(
    codigo INT,
    nome_do_drink VARCHAR(20) NOT NULL,
    principal VARCHAR(25) NOT NULL,
    quantidade1 DECIMAL(3,2) NOT NULL,
    segundo VARCHAR(25),
    quantidade2 DECIMAL(3,2),
    instrucoes VARCHAR(100),
    PRIMARY KEY(codigo)
);

INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(1, 'Blackthorn', 'água tônica', 1.5, 'suco de abacaxi', 1, 'mexa com gelo, coloque em uma taça de coquetel com 
limão batido');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(2, 'Blue moon', 'Soda', 1.5, 'Suco de mirtilo', 0.75, 'Mexa com gelo, coloque em uma taça de coquetel com limão 
batido');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(3, 'Oh my gosh', 'Néctar de pêssego', 1, 'Suco de abacaxi', 1, 'Mexa com gelo, coloque em um copinho de licor');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(4, 'Lime Fizz', 'Sprite', 1.5, 'Suco de limão', 0.75, 'Mexa com gelo, coloque em uma taça de coquetel');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(5, 'Kiss on the lips', 'Suco de cereja', 2, 'Néctar de damasco', 7, 'Sirva com gelo e canudo');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(6, 'Hot gold', 'Néctar de pêssego', 3, 'Suco de laranja', 6, 'Coloque suco de laranja quente em uma caneca e 
adicione néctar de pêssego');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(7, 'Lone tree', 'Soda', 1.5, 'Suco de cereja', 0.75, 'Mexa com gelo, coloque em uma taça de coquetel');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(8, 'Greyhound', 'Soda', 1.5, 'Suco de laranja', 5, 'Sirva com gelo, mexa bem');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(9, 'Indian summer', 'Suco de maçã', 2, 'Cha quente', 6, 'Adicionar o suco em uma caneca e completar o resto com 
chá quente');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(10, 'Bull frog', 'Chá gelado', 1.5, 'Limonada', 5, 'Sirva com gelo e uma fatia de limão');
INSERT INTO drinks_faceis(codigo, nome_do_drink, principal, quantidade1, segundo, quantidade2, instrucoes) 
     VALUES(11, 'Soda and it', 'Soda', 2, 'Suco de uva', 1, 'Misture em uma taça de coquetel, sem gelo');

SELECT nome_do_drink FROM drinks_faceis WHERE principal = 'suco de cereja';
SELECT nome_do_drink FROM drinks_faceis WHERE nome_do_drink LIKE '%Kiss%';
SELECT nome_do_drink FROM drinks_faceis WHERE quantidade1 = '2';
SELECT nome_do_drink FROM drinks_faceis WHERE segundo LIKE '%Damasco%';
SELECT nome_do_drink FROM drinks_faceis WHERE quantidade2 = '7';
SELECT nome_do_drink FROM drinks_faceis WHERE instrucoes = 'Sirva com gelo e canudo';

SELECT nome_do_drink FROM drinks_faceis WHERE principal LIKE '%Chá%';
SELECT nome_do_drink FROM drinks_faceis WHERE segundo = 'Limonada';
SELECT nome_do_drink FROM drinks_faceis WHERE nome_do_drink LIKE '%Bull%';


CREATE TABLE drink_info(
	nome_do_drink VARCHAR (20) NOT NULL,
	preco DECIMAL (5,2) NOT NULL,
	carboidratos DECIMAL(5,2) NOT NULL,
	cor VARCHAR (20),
	gelo CHAR,
	calorias DECIMAL (5,2), 
	PRIMARY KEY (nome_do_drink)
);


INSERT INTO drink_info VALUES ('Blackthorn', 3, 8.4, 'amarelo', 'S', 33);
INSERT INTO drink_info VALUES ('Blue moon', 2.5, 3.2, 'azul', 'S', 12);
INSERT INTO drink_info VALUES ('Oh my gosh', 3.5, 8.6, 'laranja', 'S', NULL);
INSERT INTO drink_info VALUES ('Lime Fizz', 2.5, 5.4, NULL, 'S', 24) ;
INSERT INTO drink_info VALUES ('Kiss on the lips', 5.5, 42.5, 'roxo', 'S', 171);
INSERT INTO drink_info VALUES ('Hot gold', 3.2, 32.1, 'laranja', 'N', 135);
INSERT INTO drink_info VALUES ('Lone tree', 3.6, 4.2, 'vermelho', 'S', NULL);
INSERT INTO drink_info VALUES ('Greyhound', 4, 14, 'amarelo', 'S', 50);
INSERT INTO drink_info VALUES ('Indian summer', 2.8, 7.2, 'marrom', 'N', 30);
INSERT INTO drink_info VALUES ('Bull frog', 2.6, 21.5, 'cor de canela', 'S', 80);
INSERT INTO drink_info VALUES ('Soda and it', 3.8, 4.7, 'vermelho', 'N', 19);

SELECT nome_do_drink FROM drink_info WHERE nome_do_drink >= 'L'
SELECT nome_do_drink FROM drink_info WHERE nome_do_drink >= 'L' AND nome_do_drink < 'M';
SELECT nome_do_drink FROM drinks_faceis WHERE principal = 'Suco de cereja' OR segundo  = 'Suco de cereja'; 

SELECT * FROM drinks_faceis;
SELECT * FROM drink_info;

-- mais de uma condição

SELECT nome_do_drink FROM drinks_faceis WHERE (principal = 'Suco de cereja' OR segundo  = 'Suco de cereja') AND quantidade1 > '1';

-- LIKE, BETWEEN< IN

SELECT nome_do_drink FROM drink_info WHERE (carboidratos BETWEEN 10 AND 30);
SELECT nome_do_drink FROM drink_info WHERE (nome_do_drink BETWEEN 'L' AND 'M');

SELECT nome_do_drink FROM drink_info WHERE carboidratos LIKE '5%';
SELECT nome_do_drink FROM drink_info WHERE cor LIKE '_marelo';
SELECT nome_do_drink FROM drink_info WHERE cor LIKE '%vermelho%';

SELECT nome_do_drink FROM drink_info WHERE cor = 'amarelo' OR cor ='laranja' OR cor = 'vermelho';
SELECT nome_do_drink FROM drink_info WHERE cor IN('amarelo','laranja','vermelho');
SELECT nome_do_drink FROM drinks_faceis WHERE principal IN ('Suco de Laranja');




