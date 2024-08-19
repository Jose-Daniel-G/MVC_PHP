CREATE DATABASE companyjdgo;

USE companyjdgo;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    monto DECIMAL(10, 2) NOT NULL
);

-- Datos de ejemplo
INSERT INTO usuarios (nombre, email) VALUES ('Juan Perez', 'juan@example.com'), ('Maria Lopez', 'maria@example.com');
INSERT INTO ventas (fecha, monto) VALUES ('2024-01-01', 150.00), ('2024-01-02', 200.00);