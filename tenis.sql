DROP TABLE IF EXISTS RESERVASOCIOS;
DROP TABLE IF EXISTS RESERVANOSOCIOS;
DROP TABLE IF EXISTS INGRESO;
DROP TABLE IF EXISTS BAJA;


CREATE TABLE RESERVASOCIOS (

    id_reserva_socio int PRIMARY KEY NOT NULL,
    nombre varchar(255),
    dni varchar(255),
    calle varchar(255),
    numero int,
    ciudad varchar(255),
    provincia varchar(255),
    telefono int,
    email varchar(255),
    nsocio int,
    otras varchar(255),
    celebrar varchar(255),
    diacelebracion varchar(255),
    horacomienzo varchar(255), 
    duraccion int,
    diaactual varchar(255),
    mesactual varchar(255),
    anoactual int,
    firma varchar(255),
    observaciones varchar(255),
    primeraplanta boolean, 
    bodeguita boolean,
    corredor boolean,
    jardines boolean,
    salontv boolean,
    salajuventud boolean,
    salonacto boolean,
    otrascheck boolean
);

CREATE TABLE RESERVANOSOCIOS (


    id_reserva_nosocio int PRIMARY KEY NOT NULL,
    nombre varchar(255),
    dni varchar(255),
    calle varchar(255),
    numero int,
    ciudad varchar(255),
    provincia varchar(255),
    telefono int,
    email varchar(255),
    nsocio int,
    otras varchar(255),
    celebrar varchar(255),
    diacelebracion varchar(255),
    horacomienzo varchar(255), 
    duraccion int,
    diaactual varchar(255),
    mesactual varchar(255),
    anoactual int,
    firma varchar(255),
    observaciones varchar(255),
    primeraplanta boolean, 
    bodeguita boolean,
    corredor boolean,
    jardines boolean,
    salontv boolean,
    salajuventud boolean,
    salonacto boolean,
    otrascheck boolean
    
);

CREATE TABLE INGRESO (

    id_ingreso int PRIMARY KEY NOT NULL,
    nombre varchar(255),
    dni varchar(255),
    fechanacimiento varchar(255),
    domicilio varchar(255),
    calle varchar(255),
    numero int,
    telefono int,
    estado varchar(255),
    profesion varchar(255),
    email varchar(255),
    nombresocio varchar(255),
    dnisocio varchar(255),
    nombresocio2 varchar(255),
    dnisocio2 varchar(255),
    ciudad varchar(255),
    dia int,
    mes int,
    ano int,
    conyuge varchar(255),
    dniconyuge varchar(255),
    nacimientoconyuge varchar(255),
    emailconyuge varchar(255),
    hijo1 varchar(255),
    dnihijo1 varchar(255),
    nacimientohijo1 varchar(255),
    emailhijo1 varchar(255),
    hijo2 varchar(255),
    dnihijo2 varchar(255),
    nacimientohijo2 varchar(255), 
    emailhijo2 varchar(255),
    observaciones varchar(255)

);

CREATE TABLE BAJA (

    id_baja int PRIMARY KEY,
    ciudad varchar(255),
    dia int,
    mes varchar(255),
    ano int,
    nombre varchar(255),
    dni varchar(255),
    nacimiento varchar(255),
    domicilio varchar(255),
    calle varchar(255),
    numerocalle int,
    telefono int,
    bajacheck varchar(255),
    periodo varchar(255),
    familiacheck varchar(255),
    nombrefamiliar1 varchar(255),
    dnifamiliar1 varchar(255),
    nombrefamiliar2 varchar(255),
    dnifamiliar2 varchar(255),
    nombrefamiliar3 varchar(255),
    dnifamiliar3 varchar(255),
    nombrefamiliar4 varchar(255),
    dnifamiliar4 varchar(255),
    diaefec int,
    mesefect varchar(255),
    anoefect int,
    motivos varchar(255),
    firma varchar(255)
);