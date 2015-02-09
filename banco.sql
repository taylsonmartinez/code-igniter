create table usuarios (id integer auto_increment primary key, nome varchar(255), email varchar(255), senha varchar(255));

create table produtos(id integer auto_increment primary key, nome varchar(255), descricao text, preco decimal(10,2), usuario_id integer);

	insert into usuarios values(1,'taylsonmartinez', 'taylson.martinez@gmail.com','e10adc3949ba59abbe56e057f20f883e');

insert into produtos values(1, 'Bola de Futebol', 'Bola de futebol assinada pelo Zico', 300, 1);

insert into produtos values(2, 'HD Externo', 'Marca HD-Mega', 400, 1);