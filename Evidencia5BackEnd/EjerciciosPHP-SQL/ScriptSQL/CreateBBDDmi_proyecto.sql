
CREATE DATABASE mi_proyecto;

USE mi_proyecto;


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    cedula VARCHAR(20) NOT NULL
);


/*Nota: En los registros de la tabla usuarios, la cc de Pardo y Perez, es igual(Segun el pdf de la actiidad)*/
    /*Yo lo modifique para no tener cc repetidas, quedando asi: Pardo:CC: 300000000 y Perez:CC: 400000000)*/

/*Nota2: Algunos gestores piden que se agregue en el INSERT los campos AutoIncrement y se les dé valor NULL*/

INSERT INTO `usuarios` ( `nombre`, `apellido`, `cedula`) VALUES 
('Andres', 'Pineda', '100000000'), 
('Camilo', 'Gutierrez', '200000000'),
('Jose', 'Pardo', '300000000'), 
('Nicolas', 'Perez', '400000000'), 
('Laura', 'Espitia', '500000000');

