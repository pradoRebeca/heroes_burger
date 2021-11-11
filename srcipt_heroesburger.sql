use dbheroesburger;


create table tblprodutos(
	idprodutos int not null primary key auto_increment,
    nome varchar(50) not null,
    descricao text not null,
    preco float not null,
    precoPromocao float,
	imagens varchar(100),
    unique index(idprodutos)
);

create table tblCategoriasProdutos(
	idCategoriasProdutos int not null primary key auto_increment,
    idcategorias int not null,
    idprodutos int not null,
    
    constraint fk_tblcategorias_tblCategoriasProdutos
    foreign key(idcategorias)
    references tblcategorias(idcategorias),
    
    constraint fk_tblprodutos_tblCategoriasProdutos
    foreign key(idprodutos)
    references tblprodutos(idprodutos),
    
    unique index(idCategoriasProdutos)
);

show tables;

select * from tblprodutos;