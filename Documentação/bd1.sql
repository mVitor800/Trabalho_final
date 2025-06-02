create database agendeclinicpet;
use agendeclinicpet;

create table adm (
    id_adm Int Primary key auto_increment,
    nome_adm varchar(80) not null,
    email varchar(80) not null,
    senha varchar (60) not null
);

create table clientes (
    id_cliente int primary key auto_increment,
    nome_pet varchar (30) not null,
    especie varchar (20) not null,
    raca varchar (30) not null,    
    nome_tutor varchar (80) not null,
    telefone varchar (15) not null
);

create table vet (
    id_vet int primary key auto_increment,
    nome_vet varchar(80) not null,
    especializacao varchar (30) not null
);

create table servicos(
    id_ser int primary key auto_increment,
    nome_ser varchar(60) not null,
    id_vet  int,
    foreign key (id_vet) references vet(id_vet)
);

create table agendamento(
    id_agen int primary key auto_increment,
    data_agen date not null,
    hora_agen time not null,
    status_agen varchar(30),
    id_cliente int,
    id_vet int,
    id_ser int,
        foreign key (id_cliente) references clientes(id_cliente),
        foreign key (id_vet) references vet(id_vet),
        foreign key (id_ser) references servicos(id_ser)
);

create table pagamento(
    id_pagamento int primary key auto_increment,
    valor decimal(5,2) not null,
    data_pagamento date not null,
    id_agendamento int,
        foreign key (id_agendamento) references agendamento(id_agen)
);