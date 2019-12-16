create database gerenciamento;

CREATE TABLE usuario(
	id int not null auto_increment primary KEY,
	nome varchar(64) not null,
	email varchar(64) not null,
	senha varchar(32) not null,
	data_cadastro datetime not null
);

select * from usuario;

create table fornecedores(
     id bigint(20) not null auto_increment primary key,
     id_usuario int not null,
     nome varchar (32) not null,
     sobrenome varchar(32),
	 status enum('0','1') not null,
	 data_cadastro datetime not null,
     foreign key (id_usuario) references usuario(id) ON DELETE RESTRICT
     );
     
     select * from fornecedor;
    
create table cliente(
     id bigint(20) not null auto_increment primary key,
     id_usuario int not null,
     nome varchar (32) not null,
     sobrenome varchar(32),
     status enum('0','1') not null,
     data_cadastro datetime not null,
     foreign key (id_usuario) references usuario(id) ON DELETE RESTRICT
);

create table pagamento(
	id int not null auto_increment primary key,
    tipo varchar(32) not null,
	status enum('0','1') not null
);

insert into pagamento(tipo, status) values('Boleto', '1'),
											('CartÃ£o', '1'),
                                            ('Cheque', '1'),
                                            ('TrasfÃªrencia bancÃ¡ria', '1');
drop table receber, pagar;
create table receber(
	id bigint(20) not null auto_increment primary key,
    id_usuario int not null,
    id_cliente bigint(20) not null,
    id_pagamento int not null,
    
    nome_conta varchar (32) not null,
    periodo_conta varchar(9) not null,
    data_parcela date not null,
    valor decimal(10,2) not null, 
    quant_parcelas  tinyint(3) not null,
    status enum('0','1') not null,
    data_cadastro datetime not null,
     foreign key(id_usuario) REFERENCES usuario(id) ON DELETE RESTRICT,
     foreign key(id_cliente)  REFERENCES cliente(id) ON DELETE RESTRICT,
     foreign key(id_pagamento)  REFERENCES pagamento(id) ON DELETE RESTRICT
     );

create table pagar(
	id bigint(20) not null auto_increment primary key,
    id_usuario int not null,
    id_fornecedor bigint(20) not null,
    id_pagamento int not null,
    
    nome_conta varchar (32) not null,
   periodo_conta varchar(9) not null,
    data_parcela date not null,
    valor decimal(10,2) not null, 
    quant_parcelas  tinyint(3) not null,
    status enum('0','1') not null,
    data_cadastro datetime not null,
     foreign key(id_usuario) REFERENCES usuario(id) ON DELETE RESTRICT,
     foreign key(id_fornecedor)  REFERENCES fornecedor(id) ON DELETE RESTRICT,
     foreign key(id_pagamento)  REFERENCES pagamento(id) ON DELETE RESTRICT
    );
   