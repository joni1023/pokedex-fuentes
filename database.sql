drop table pokemon;
create database pokemons_fuentes_jonathan;
use pokemons_fuentes_jonathan;

create table pokemon (
id int auto_increment ,
numero int(4),
nombre varchar(20),
tipo varchar(20),
imagen varchar(200),
especie varchar(22),
primary key (id)
);

create table usuario (
nombre varchar (30),
clave varchar(30)
);

insert into usuario values('admin','admin');

insert into pokemon (numero,nombre,tipo,imagen,especie) values (6,'charizard','fuego,volador','https://vignette.wikia.nocookie.net/es.pokemon/images/9/95/Charizard.png/revision/latest?cb=20180325003352','llama'),
(18,'pidgeot','volador y normal','https://vignette.wikia.nocookie.net/es.pokemon/images/a/a9/Pidgeot.png/revision/latest?cb=20141214190416','pajaro'),
(20,'raticate','normal','https://assets.pokemon.com/assets/cms2/img/pokedex/full/020.png','raton'),
(25,'pikachu','electrico','https://vignette.wikia.nocookie.net/es.pokemon/images/7/77/Pikachu.png/revision/latest?cb=20150621181250','raton'),
(150,'mewtwo','psiquico','https://ae01.alicdn.com/kf/HTB1wZx9BOOYBuNjSsD4q6zSkFXaa/Full-Square-Diamond-5D-DIY-Diamond-Painting-Mewtwo-Pokemon-Embroidery-Cross-Stitch-Rhinestone-Mosaic-Painting-Home.jpg_640x640.jpg','genetico'),
(100,'voltorb','electrico','https://assets.pokemon.com/assets/cms2/img/pokedex/full/100.png','bola')
;