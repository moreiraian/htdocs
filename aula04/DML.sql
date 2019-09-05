/*DML - Linguagem de Manipulação de Dados*/

/*INSERT - Comando responsável por inserir registros no banco */

/*insert do curso PHP com banco de dados na tabela curso*/
insert into tb_curso(idcurso, nome) values (null, 'PHP com banco de dados');

/*insert do curso Analise e modelagem de sistemas na tabela tb_curso*/
insert into tb_curso(nome) values ('Analise e modelagem de Sistemas');

/*insert do curso Analise e modelagem de sistemas na tabela tb_curso*/
insert into tb_curso(nome) values (null, 'Analise e modelagem de Sistemas - PHP');

/*select de todos os cursos da tabela tb_curso*/
select  idcurso, nome from tb_curso;

/*select de todos os cursos (sem selecionar campos) da tabela tb_curso*/
select * from tb_curso;

/*select campos especificos dos cursos da tabela tb_curso*/
select nome from tb_curso;
