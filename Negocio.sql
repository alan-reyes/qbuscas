ALTER TABLE Negocio (
    id int not null identity(1,1) primary key,
    nombre varchar(255),
    direccion varchar(255),
    numero_telefono varchar(255),
    correo varchar(255)
);

ALTER TABLE Negocio
ALTER COLUMN numero_telefono varchar(10);