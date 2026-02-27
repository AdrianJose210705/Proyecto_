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

-- tabla para el portafolio
CREATE TABLE IF NOT EXISTS perfil (
    id INT PRIMARY KEY,
    nombre_alumno VARCHAR(100),
    bio TEXT,
    habilidades TEXT,
    foto_url VARCHAR(255)
);