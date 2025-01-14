-- Crear la base de datos (opcional, puedes omitir si ya tienes una creada)
CREATE DATABASE IF NOT EXISTS ikasleak_moduluak_db;
USE ikasleak_moduluak_db;

-- Tabla "ikasleak"
CREATE TABLE ikasleak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(255) NOT NULL,
    abizena VARCHAR(255) NOT NULL,
    jaiotze_data DATE NOT NULL
);

-- Tabla "moduluak"
CREATE TABLE moduluak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(255) NOT NULL,
    gela DATE NOT NULL
);

-- Tabla intermedia "ikasleak_moduluak" para la relación N:M
CREATE TABLE ikasleak_moduluak (
    ikasle_id INT NOT NULL,
    modulu_id INT NOT NULL,
    PRIMARY KEY (ikasle_id, modulu_id),
    FOREIGN KEY (ikasle_id) REFERENCES ikasleak(id) ON DELETE CASCADE,
    FOREIGN KEY (modulu_id) REFERENCES moduluak(id) ON DELETE CASCADE
);