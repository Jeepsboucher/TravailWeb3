#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: tbl_participant
#------------------------------------------------------------
drop database if exists bd_travail3;
create database bd_travail3;
use bd_travail3;

CREATE TABLE tbl_participant(
        id_participant Int  Auto_increment  NOT NULL ,
        fullname       Varchar (50) ,
        username       Varchar (50) ,
        password       Varchar (25) ,
        email          Varchar (50)
	,CONSTRAINT tbl_participant_PK PRIMARY KEY (id_participant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_pays
#------------------------------------------------------------

CREATE TABLE tbl_pays(
        id_pays Int  Auto_increment  NOT NULL ,
        nom     Varchar (50)
	,CONSTRAINT tbl_pays_PK PRIMARY KEY (id_pays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_categorie
#------------------------------------------------------------

CREATE TABLE tbl_categorie(
        id_categorie Int  Auto_increment  NOT NULL ,
        nom          Varchar (50)
	,CONSTRAINT tbl_categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_photo
#------------------------------------------------------------

CREATE TABLE tbl_photo(
        id_photo       Int  Auto_increment  NOT NULL ,
        path           Varchar (50) ,
        description    Varchar (255) NOT NULL ,
        id_participant Int NOT NULL ,
        id_pays        Int NOT NULL ,
        id_categorie   Int NOT NULL
	,CONSTRAINT tbl_photo_PK PRIMARY KEY (id_photo)

	,CONSTRAINT tbl_photo_tbl_participant_FK FOREIGN KEY (id_participant) REFERENCES tbl_participant(id_participant)
	,CONSTRAINT tbl_photo_tbl_pays0_FK FOREIGN KEY (id_pays) REFERENCES tbl_pays(id_pays)
	,CONSTRAINT tbl_photo_tbl_categorie1_FK FOREIGN KEY (id_categorie) REFERENCES tbl_categorie(id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_vote_photo
#------------------------------------------------------------

CREATE TABLE tbl_vote_photo(
        id_vote_photo  Int  Auto_increment  NOT NULL ,
        date_vote      Date NOT NULL ,
        id_participant Int NOT NULL ,
        id_photo       Int NOT NULL
	,CONSTRAINT tbl_vote_photo_PK PRIMARY KEY (id_vote_photo)

	,CONSTRAINT tbl_vote_photo_tbl_participant_FK FOREIGN KEY (id_participant) REFERENCES tbl_participant(id_participant)
	,CONSTRAINT tbl_vote_photo_tbl_photo0_FK FOREIGN KEY (id_photo) REFERENCES tbl_photo(id_photo)
)ENGINE=InnoDB;

Insert into tbl_participant(fullname,username,password,email)
values('Jean-Philippe Boucher','Jeepsboucher','12345','jeeps_boucher@hotmail.com'),
('Alice Lessard','ChickenAndPizza','12345','alessard97@hotmail.com'),
('Yohan Orange','Yesseur','12345','yohanOOO@hotmail.com'),
('Annie Larochelle','a','a','annie.st-pros@hotmail.com'),
('Audrey Lessard','asas','asas','audsept24@hotmail.com');

Insert into tbl_categorie(nom)
values('Le plus étrange'),
('Le plus beau'),
('Le plus gros'),
('Le plus coloré'),
('Le plus petit');

Insert into tbl_pays(nom)
values
('Afghanistan'),
('Albania'),
('Algeria'),
('Andorra'),
('Angola'),
('Antigua and Barbuda'),
('Argentina'),
('Armenia'),
('Australia'),
('Austria'),
('Austrian Empire'),
('Azerbaijan'),
('Baden'),
('Bahrain'),
('Bangladesh'),
('Barbados'),
('Bavaria'),
('Belarus'),
('Belgium'),
('Belize'),
('Benin'),
('Bolivia'),
('Bosnia and Herzegovina'),
('Botswana'),
('Brazil'),
('Brunei'),
('Brunswick and Lüneburg'),
('Bulgaria'),
('Burkina Faso'),
('Burma'),
('Burundi'),
('Cabo Verde'),
('Cambodia'),
('Cameroon'),
('Canada'),
('Central African Republic'),
('Central American Federation'),
('Chad'),
('Aruba'),
('Chile'),
('China'),
('Colombia'),
('Comoros'),
('Costa Rica'),
('Cote d’Ivoire'),
('Croatia'),
('Cuba'),
('Cyprus'),
('Czechia'),
('Czechoslovakia'),
('Democratic Republic of the Congo'),
('Denmark'),
('Djibouti'),
('Dominica'),
('Dominican Republic'),
('East Germany'),
('Ecuador'),
('Egypt'),
('El Salvador'),
('Equatorial Guinea'),
('Eritrea'),
('Estonia'),
('Eswatini'),
('Ethiopia'),
('Fiji'),
('Finland'),
('France'),
('Gabon'),
('Georgia'),
('Germany'),
('Ghana'),
('Greece'),
('Grenada'),
('Guatemala'),
('Guinea'),
('Guinea-Bissau'),
('Guyana'),
('Haiti'),
('Hanover'),
('Hanseatic Republics'),
('Hawaii'),
('Hesse'),
('Holy See'),
('Honduras'),
('Hungary'),
('Iceland'),
('India'),
('Indonesia'),
('Iran'),
('Iraq'),
('Ireland'),
('Israel'),
('Italy'),
('Jamaica'),
('Japan'),
('Jordan'),
('Kazakhstan'),
('Yugoslavia'),
('Kiribati'),
('Korea'),
('Kosovo'),
('Kuwait'),
('Kyrgyzstan'),
('Laos'),
('Latvia'),
('Lebanon'),
('Lesotho'),
('Lew Chew'),
('Liberia'),
('Libya'),
('Liechtenstein'),
('Lithuania'),
('Luxembourg'),
('Macedonia'),
('Madagascar'),
('Malawi'),
('Malaysia'),
('Maldives'),
('Mali'),
('Malta'),
('Marshall Islands'),
('Mauritania'),
('Mauritius'),
('Mecklenburg-Schwerin'),
('Mecklenburg-Strelitz'),
('Mexico'),
('Micronesia'),
('Moldova'),
('Monaco'),
('Mongolia'),
('Montenegro'),
('Morocco'),
('Mozambique'),
('Namibia'),
('Nassau'),
('Nauru'),
('Nepal'),
('New Zealand'),
('Nicaragua'),
('Niger'),
('Nigeria'),
('North German Confederation'),
('Norway'),
('Oldenburg'),
('Oman'),
('Pakistan'),
('Palau'),
('Panama'),
('Papal States'),
('Papua New Guinea'),
('Paraguay'),
('Peru'),
('Philippines'),
('Piedmont-Sardinia'),
('Poland'),
('Portugal'),
('Qatar'),
('Republic of Genoa'),
('South Korea'),
('Republic of the Congo'),
('Romania'),
('Russia'),
('Rwanda'),
('Saint Kitts and Nevis'),
('Saint Lucia'),
('Saint Vincent and the Grenadines'),
('Samoa'),
('San Marino'),
('Sao Tome and Principe'),
('Saudi Arabia'),
('Schaumburg-Lippe'),
('Senegal'),
('Serbia'),
('Seychelles'),
('Sierra Leone'),
('Singapore'),
('Slovakia'),
('Slovenia'),
('Somalia'),
('South Africa'),
('South Sudan'),
('Spain'),
('Sri Lanka'),
('Sudan'),
('Suriname'),
('Sweden'),
('Switzerland'),
('Syria'),
('Tajikistan'),
('Tanzania'),
('Thailand'),
('The Bahamas'),
('The Cayman Islands'),
('The Congo Free State'),
('The Duchy of Parma'),
('The Gambia'),
('The Grand Duchy of Tuscany'),
('The Netherlands'),
('The Solomon Islands'),
('The United Kingdom'),
('Timor-Leste'),
('Togo'),
('Tonga'),
('Trinidad and Tobago'),
('Tunisia'),
('Turkey'),
('Turkmenistan'),
('Tuvalu'),
('Uganda'),
('Ukraine'),
('Union of Soviet Socialist Republics'),
('Uruguay'),
('Uzbekistan'),
('Vanuatu'),
('Venezuela'),
('Vietnam'),
('Yemen'),
('Zambia'),
('Zimbabwe');

insert into tbl_photo (path, description, id_participant, id_pays, id_categorie)
values ('photo/2018-12-02 16-58-14.jpg', 'Flat and big', '4', '110', '1'),
('photo/2018-12-02 16-58-58.jpg', 'Beau et printanier', '4', '95', '2'),
('photo/2018-12-02 16-59-17.jpg', 'Donne du sirop', '4', '35', '4'),
('photo/2018-12-02 17-00-45.jpg', 'Pour noel', '4', '35', '2'),
('photo/2018-12-02 17-01-04.jpg', 'troue', '4', '13', '1'),
('photo/2018-12-02 17-01-30.jpg', 'grand et etroit', '4', '1', '1'),
('photo/2018-12-02 17-02-04.jpg', 'bleute', '4', '3', '4'),
('photo/2018-12-02 17-02-19.jpg', 'tronc bleu', '4', '17', '4'),
('photo/2018-12-02 17-02-37.jpg', 'court et elegant', '4', '95', '5'),
('photo/2018-12-02 17-03-03.jpg', 'piquant', '4', '180', '1'),
('photo/2018-12-02 17-03-14.jpg', 'pleur', '4', '14', '1'),
('photo/2018-12-02 17-03-40.jpg', 'large', '4', '7', '1'),
('photo/2018-12-02 17-04-00.jpg', 'lonononong', '4', '8', '3'),
('photo/2018-12-02 17-04-23.jpg', 'ete', '4', '9', '2'),
('photo/2018-12-02 17-04-48.jpg', 'donne des peches', '4', '9', '4'),
('photo/2018-12-02 17-05-06.jpg', 'long et etroit', '4', '35', '3'),
('photo/2018-12-02 17-06-52.jpg', 'donne des pommes', '4', '35', '4');

insert into tbl_vote_photo(date_vote,id_participant,id_photo)
values ('2018-12-02','1','1'),
('2018-12-02','2','1'),
('2018-12-02','3','1'),
('2018-12-02','4','1'),
('2018-12-02','1','2'),
('2018-12-02','2','2'),
('2018-12-02','1','3'),
('2018-12-02','1','4'),
('2018-12-02','1','5'),
('2018-12-02','1','6'),
('2018-12-02','2','6'),
('2018-12-02','3','6'),
('2018-12-02','4','6');

CREATE PROCEDURE listePhotosSelonFavoris()
BEGIN
	SELECT COUNT(*) tbl_photo.path, tbl_photo.description, tbl_photo.id_participant, tbl_photo.id_pays, tbl_photo.id_categorie
    FROM tbl_photo
    INNER JOIN tbl_vote_photo
    ON tbl_vote_photo.id_photo = tbl_photo.id_photo
    ORDER BY tbl_vote_photo.
END
