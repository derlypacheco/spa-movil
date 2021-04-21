create table prod_mesas_estructuras
(
	id_segbank int auto_increment,
	ordernhk varchar(5) not null,
	prod_corte char default 0 not null,
	prod_scorte datetime null,
	prod_ecorte datetime null,
	prod_madera char default 0 not null,
	prod_smadera datetime null,
	prod_emadera datetime null,
	prod_barre1 char default 0 not null,
	prod_sbarre1 datetime null,
	prod_ebarre1 datetime null,
	prod_barre2 char default 0 not null,
	prod_sbarre2 datetime null,
	prod_ebarre2 datetime null,
	prod_arma char default 0 not null,
	prod_sarma datetime null,
	prod_earma datetime null,
	prod_empty char default 0 not null,
	prod_sempty datetime null,
	prod_eempty datetime null,
	prod_active char default 1 not null,
	prod_desc text null,
	user_corte int null,
	user_madera int null,
	user_barre1 int null,
	constraint prod_mesas_estructuras_pk
		primary key (id_segbank)
);

create unique index prod_mesas_estructuras_ordernhk_uindex
	on prod_mesas_estructuras (ordernhk);

-- Version simplificada de la tabla 

create table prod_mesas_estructuras
(
	id_segbank int auto_increment,
	ordernhk varchar(5) not null,
	`action` varchar(40) not null,
	estatus char default 1 not null,
	reloj_emp int not null,
	empleado text null,
	time_start datetime not null,
	time_end datetime null,
	active char default 1 not null,
	observation text null,
	constraint prod_mesas_estructuras_pk
		primary key (id_segbank)
);

