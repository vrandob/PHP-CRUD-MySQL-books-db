CREATE DATABASE crud_libros;

use crud_libros;

CREATE TABLE Libros (
    isbn VARCHAR(20) PRIMARY KEY,
    Titulo VARCHAR(255),
    Descripcion TEXT,
    Autor VARCHAR(100),
    Fecha_Publicacion DATE,
    Precio DECIMAL(10, 2),
    Enlace VARCHAR(255)
);

DESCRIBE libros;