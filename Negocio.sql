ALTER TABLE Negocio (
    id int not null identity(1,1) primary key,
    nombre varchar(255),
    direccion varchar(255),
    numero_telefono varchar(255),
    correo varchar(255)
);

ALTER TABLE Negocio
ALTER COLUMN numero_telefono varchar(10);

ALTER TABLE formulario2
ADD image_uno varbinary(max)

INSERT INTO formulario2(Id, image_uno) 
SELECT 6, BulkColumn 
FROM Openrowset( Bulk 'C:\test.jpg', Single_Blob) as image


  ALTER TABLE formulario2
ALTER COLUMN image_uno varchar(240);

UPDATE formulario2 SET image_uno = 'https://qbucasimages.blob.core.windows.net/images/cafetales.jpeg' WHERE id = 6