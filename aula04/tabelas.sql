/* ################ DDL - Linguagem de definição de dados ####################  */

/*Criação de base*/
create schema db_curso;

/*Selecionar uma base*/
use db_curso;

/*Criação da tabela curso*/
create table tb_curso(
	idcurso int primary key auto_increment,
    nome varchar(150) not null
);

/*Criação da tabela endereço*/
create table tb_endereco(
	id_endereco int primary key auto_increment,
    rua varchar(145) not null,
    bairro varchar(145) not null
);

create table tb_aluno(
	id_aluno int primary key auto_increment,
    matricula int not null unique,
    nome varchar(145) not null,
    endereco_id int not null,
    curso_id int not null,
    constraint fk_endereco foreign key(endereco_id) references tb_endereco(id_endereco),
    constraint fk_curso foreign key(curso_id) references tb_curso(idcurso)
);

create table tb_professor(
	id_professor int primary key auto_increment,
    nome varchar(14) not null,
    endereco varchar(145) not null
);

create table tb_telefone(
	id_telefone int primary key auto_increment,
    numero varchar(12) not null,
    professor_id int not null,
    constraint fk_professor foreign key(professor_id) references tb_professor(id_professor)
);

create table tb_disciplina(
	id_disciplina int primary key auto_increment,
    descricao text not null,
    professor_id int not null,
    constraint fk_professor_d foreign key(professor_id) references tb_professor(id_professor)
);
/* alterar estrutura da tabela disciplina */
alter table tb_disciplina add column nome varchar (150) not null after id_disciplina;
alter table tb_disciplina drop foreign key fk_professor_d;
alter table tb_disciplina drop column professor_id;

create table curso_disciplina(
	curso_id int not null,
    disciplina_id int not null,
    primary key(curso_id, disciplina_id),
    constraint fk_curso_d foreign key(curso_id) references tb_curso(idcurso),
    constraint fk_disciplina_c foreign key(disciplina_id) references tb_disciplina(id_disciplina)
);
create table professor_disciplina (
    professor_id int not null,
    disciplina_id in not null,
    primary key (professor_d, disciplina_id),
    constraint fk_professor_disciplina foreign key (professor_id) references tb_professor(id_professor)
    constraint fk_disciplina_professor foreign key (disciplina_id) references tb_disciplina(id_disciplina)
)
/* comando para visualizar a descriçaõ da tabela */

desc tb_curso


