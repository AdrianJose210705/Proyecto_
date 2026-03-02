CREATE DATABASE IF NOT EXISTS portafolio_db;
USE portafolio_db;

-- tabla para los mensajes que se gestionarán
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    leido BOOLEAN DEFAULT FALSE
);

-- tabla para el portafolio de nosotros
CREATE TABLE IF NOT EXISTS perfil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(20),
    nombre_alumno VARCHAR(100),
    bio TEXT,
    habilidades TEXT,
    foto_url VARCHAR(255)
);

INSERT INTO perfil (cedula, nombre_alumno, bio, habilidades, foto_url)
VALURES ('C.I: 30.701.348',
'José Francisco Rodríguez',
'Estudiante de Ingeniería en Computación',
'SQL, Backend, Docker, PHP, Python, C++',
'pfpJF.jpg');

-- Mira Adrian, puedes hacer tu propio INSERT INTO 
-- siguiendo la estructura que yo tengo arriba :D
-- Te dejé la función en el index para que puedan
-- mostrarse nuestros datos