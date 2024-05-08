CREATE DATABASE crud_libros;

use crud_libros;

CREATE TABLE Libro (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    isbn VARCHAR(20) PRIMARY KEY,
    Titulo VARCHAR(255),
    Descripcion TEXT,
    Autor VARCHAR(100),
    Fecha_Publicacion DATE,
    Precio DECIMAL(10, 2),
    Enlace VARCHAR(255)
);
