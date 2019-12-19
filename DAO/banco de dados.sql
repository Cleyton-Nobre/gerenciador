create database gerenciamento;

CREATE TABLE usuario(
	id int not null auto_increment primary KEY,
	nome varchar(64) not null,
	email varchar(64) not null,
	senha varchar(32) not null,
	data_cadastro datetime not null
);

create table fornecedor(
     id bigint(20) not null auto_increment primary key,
     id_usuario int not null,
     nome varchar (32) not null,
     cpf char(11),
	 status enum('0','1') default '1',
	 data_cadastro datetime not null,
     foreign key (id_usuario) references usuario(id) ON DELETE RESTRICT
     );
     select * from fornecedor;
    
create table cliente(
     id bigint(20) not null auto_increment primary key,
     id_usuario int not null,
     nome varchar (32) not null,
     cpf char(11),
     status enum('0','1') default '1',
     data_cadastro datetime not null,
     foreign key (id_usuario) references usuario(id) ON DELETE RESTRICT
);

create table pagamento(
	id int not null auto_increment primary key,
    tipo varchar(32) not null,
	status enum('0','1') not null
);
select * from fornecedor;

insert into pagamento(tipo, status) values('Boleto', '1'),
											('CartÃ£o', '1'),
                                            ('Cheque', '1'),
                                            ('Dinheiro', '1'),
                                            ('TrasfÃªrencia bancÃ¡ria', '1');
                                            
create table receber(
	id bigint(20) not null auto_increment primary key,
    
    id_usuario int not null,
    id_cliente bigint(20) not null,
    id_pagamento int not null,
    
     foreign key(id_usuario) REFERENCES usuario(id) ON DELETE RESTRICT,
     foreign key(id_cliente)  REFERENCES cliente(id) ON DELETE RESTRICT,
     foreign key(id_pagamento)  REFERENCES pagamento(id) ON DELETE RESTRICT,
     
    nome_conta varchar (32) not null,
    periodo_conta varchar(9) not null,
    data_parcela date not null,
    valor decimal(10,2) not null,
    recebido_valor decimal(10,2),
    quant_parcelas  tinyint(3) not null,
    status enum('0','1') default '1',
    data_cadastro datetime not null
    
     );
select * from receber;
create table pagar(
	id bigint(20) not null auto_increment primary key,
    
    id_usuario int not null,
    id_fornecedor bigint(20) not null,
    id_pagamento int not null,
    
      foreign key(id_usuario) REFERENCES usuario(id) ON DELETE RESTRICT,
     foreign key(id_fornecedor)  REFERENCES fornecedor(id) ON DELETE RESTRICT,
     foreign key(id_pagamento)  REFERENCES pagamento(id) ON DELETE RESTRICT,
     
   nome_conta varchar (32) not null,
   periodo_conta varchar(9) not null,
   data_parcela date not null,
   valor decimal(10,2) not null, 
   quant_parcelas  tinyint(3) not null,
   recebido_valor decimal(10,2),
   status enum('0','1') default '1',
	data_cadastro datetime not null
    
    );
    
    INSERT INTO cliente(id_usuario, nome, cpf, data_cadastro) values ('1','Diego IF','','2019-12-19 17:12:56');

   