CREATE TABLE usuario(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(150),
    nacimiento DATE,
    telefono VARCHAR(20),
    correo VARCHAR(150) NOT NULL UNIQUE,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    tipo ENUM('administrador', 'cliente') NOT NULL DEFAULT 'cliente'
);

CREATE TABLE viajes(
    id_viaje INT AUTO_INCREMENT PRIMARY KEY,
    destino VARCHAR(100) NOT NULL,
    pais VARCHAR(30) NOT NULL,
    continente VARCHAR(20) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    precio DECIMAL(8,2) NOT NULL,
    duracion INT NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    frase VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    alojamiento TEXT NOT NULL,
    CHECK (fecha_fin >= fecha_inicio)
);

INSERT INTO usuario (nombre, correo, usuario, contrasena, tipo)
VALUES ('Administrador de Nómada 360', 'admin@nomada360.com', 'admin', '$2y$12$g1rJ.aB3o86XUpSvuPZE3.mB7zGFOmj5EkeF0GLALUL7PV3BBJZb6', 'administrador');

INSERT INTO viajes 
(destino, pais, continente, fecha_inicio, fecha_fin, precio, duracion, imagen, frase, descripcion, alojamiento)
VALUES
('Bali', 'Indonesia', 'Asia', '2026-07-01', '2026-07-10', 1450.00, '10', 'Bali.jpg',
 'Descubre la isla de los dioses.',
 'Naturaleza y espiritualidad en la isla de los dioses, Indonesia.',
 'Hotel con encanto cerca de la playa y zonas naturales.'),

('Barcelona', 'España', 'Europa', '2026-06-10', '2026-06-14', 450.00, '4', 'Barcelona.jpg',
 'Modernismo, mar y cultura mediterránea.',
 'Arquitectura modernista y brisa mediterránea en España.',
 'Hotel céntrico con acceso a transporte público.'),

('Brisbane', 'Australia', 'Oceanía', '2026-08-01', '2026-08-10', 2050.00, '10', 'Brisbane.jpg',
 'Vive la energía de Queensland.',
 'La vibrante capital de Queensland, Australia.',
 'Hotel urbano con desayuno incluido.'),

('Cancún', 'México', 'América', '2026-07-15', '2026-07-22', 1400.00, '7', 'Cancun.jpg',
 'Playas caribeñas y aguas turquesas.',
 'Playas de arena blanca y aguas turquesas en México.',
 'Resort cerca de la playa con régimen de alojamiento turístico.'),

('Casablanca', 'Marruecos', 'África', '2026-05-05', '2026-05-09', 420.00, '4', 'Casablanca.jpg',
 'Descubre la costa cosmopolita de Marruecos.',
 'La metrópolis costera más cosmopolita de Marruecos.',
 'Hotel situado en zona céntrica de la ciudad.'),

('Chicago', 'Estados Unidos', 'América', '2026-09-10', '2026-09-16', 1250.00, '6', 'Chicago.jpg',
 'Rascacielos, música y lago Michigan.',
 'Rascacielos icónicos y blues a orillas del lago Michigan, USA.',
 'Hotel urbano próximo a zonas comerciales.'),

('Ciudad de México', 'México', 'América', '2026-06-20', '2026-06-26', 950.00, '6', 'CiudadDeMexico.jpg',
 'Historia, cultura y gastronomía mexicana.',
 'Historia azteca y gastronomía insuperable en el corazón de México.',
 'Hotel céntrico con buena conexión a los principales puntos turísticos.'),

('Fez', 'Marruecos', 'África', '2026-05-12', '2026-05-16', 480.00, '4', 'Fez.jpg',
 'Piérdete en una medina histórica.',
 'La medina medieval mejor conservada del mundo árabe, Marruecos.',
 'Riad tradicional en el entorno de la medina.'),

('Florencia', 'Italia', 'Europa', '2026-04-10', '2026-04-14', 650.00, '4', 'Florencia.jpg',
 'Arte renacentista en cada rincón.',
 'La cuna del Renacimiento y el arte italiano.',
 'Hotel céntrico cerca de los principales monumentos.'),

('Kioto', 'Japón', 'Asia', '2026-10-01', '2026-10-08', 1950.00, '7', 'Kioto.jpg',
 'Templos, jardines y tradición japonesa.',
 'Templos milenarios y jardines zen en el Japón tradicional.',
 'Alojamiento tradicional japonés con ambiente local.'),

('Los Ángeles', 'Estados Unidos', 'América', '2026-08-05', '2026-08-13', 1550.00, '8', 'LosAngeles.jpg',
 'Cine, playas y cultura californiana.',
 'Cine, playas y el sueño americano en California, USA.',
 'Hotel en zona turística con acceso a transporte.'),

('Madrid', 'España', 'Europa', '2026-03-15', '2026-03-18', 350.00, '3', 'Madrid.jpg',
 'Museos, parques y vida urbana.',
 'Museos, parques y la alegría de la capital de España.',
 'Hotel céntrico cerca de zonas culturales.'),

('Marrakech', 'Marruecos', 'África', '2026-05-20', '2026-05-25', 550.00, '5', 'Marrakech.jpg',
 'Colores, zocos y tradición marroquí.',
 'El bullicio de la plaza Jemaa el-Fna en Marruecos.',
 'Riad tradicional con decoración marroquí.'),

('Melbourne', 'Australia', 'Oceanía', '2026-08-12', '2026-08-23', 2150.00, '11', 'Melbourne.jpg',
 'Cultura, café y arte urbano.',
 'Cultura, café y arte urbano en el sur de Australia.',
 'Hotel moderno en zona urbana.'),

('Miami', 'Estados Unidos', 'América', '2026-07-03', '2026-07-10', 1350.00, '7', 'Miami.jpg',
 'Sol, playa y ritmo latino.',
 'Art Déco, sol y ritmo latino en Florida, USA.',
 'Hotel próximo a la playa.'),

('Milán', 'Italia', 'Europa', '2026-04-20', '2026-04-24', 550.00, '4', 'Milan.jpg',
 'Moda, diseño y elegancia italiana.',
 'La capital de la moda y el diseño en el norte de Italia.',
 'Hotel céntrico cerca de zonas comerciales.'),

('Nueva York', 'Estados Unidos', 'América', '2026-09-01', '2026-09-08', 1550.00, '7', 'NuevaYork.jpg',
 'La ciudad que nunca duerme.',
 'La ciudad que nunca duerme. Manhattan en estado puro, USA.',
 'Hotel urbano en Manhattan o alrededores.'),

('Okinawa', 'Japón', 'Asia', '2026-10-12', '2026-10-19', 1650.00, '7', 'Okinawa.jpg',
 'Playas tropicales en Japón.',
 'Playas tropicales y cultura única en el sur de Japón.',
 'Hotel costero cerca de zonas de playa.'),

('Osaka', 'Japón', 'Asia', '2026-10-20', '2026-10-26', 1700.00, '6', 'Osaka.jpg',
 'Gastronomía y luces de neón.',
 'La cocina de Japón y luces de neón infinitas.',
 'Hotel urbano en zona céntrica.'),

('Riviera Maya', 'México', 'América', '2026-07-25', '2026-08-03', 1250.00, '9', 'RivieraMaya.jpg',
 'Caribe, cultura maya y descanso.',
 'Paraíso caribeño y herencia ancestral maya en México.',
 'Resort turístico en zona de playa.'),

('Roma', 'Italia', 'Europa', '2026-04-01', '2026-04-06', 700.00, '5', 'Roma.jpg',
 'Historia eterna en la capital italiana.',
 'Historia eterna en cada esquina de la capital italiana.',
 'Hotel céntrico cerca de monumentos principales.'),

('San Francisco', 'Estados Unidos', 'América', '2026-09-15', '2026-09-21', 1650.00, '6', 'SanFrancisco.jpg',
 'Colinas, tranvías y Golden Gate.',
 'Colinas, tranvías y el icónico Golden Gate en USA.',
 'Hotel urbano con buena conexión turística.'),

('Sapporo', 'Japón', 'Asia', '2026-11-01', '2026-11-09', 1850.00, '8', 'Sapporo.jpg',
 'Naturaleza y nieve en el norte de Japón.',
 'Festivales de nieve y naturaleza salvaje en el norte de Japón.',
 'Hotel confortable en zona urbana.'),

('Sevilla', 'España', 'Europa', '2026-03-25', '2026-03-29', 420.00, '4', 'Sevilla.jpg',
 'Color, tradición y esencia andaluza.',
 'Color, duende y el aroma de azahar en Andalucía, España.',
 'Hotel céntrico en zona histórica.'),

('Sydney', 'Australia', 'Oceanía', '2026-08-25', '2026-09-06', 2100.00, '12', 'Sydney.jpg',
 'Ópera, playa y vida australiana.',
 'La Ópera más famosa y el estilo de vida surfero de Australia.',
 'Hotel urbano próximo a zonas emblemáticas.'),

('Tokyo', 'Japón', 'Asia', '2026-10-05', '2026-10-14', 2100.00, '9', 'Tokyo.jpg',
 'Tradición y futuro en una gran metrópolis.',
 'La metrópolis del futuro conviviendo con la tradición en Japón.',
 'Hotel moderno en zona céntrica de Tokyo.'),

('Valencia', 'España', 'Europa', '2026-03-10', '2026-03-14', 320.00, '4', 'Valencia.jpg',
 'Playas, paella y vanguardia.',
 'Vanguardia, playas y la mejor paella a orillas del Turia, España.',
 'Hotel próximo al centro y zonas turísticas.'),

('Venecia', 'Italia', 'Europa', '2026-04-15', '2026-04-19', 720.00, '4', 'Venecia.jpg',
 'Canales, romanticismo e historia.',
 'Canales de ensueño y romanticismo puro en Italia.',
 'Hotel o alojamiento tradicional cerca de los canales.'),

('Yakarta', 'Indonesia', 'Asia', '2026-07-12', '2026-07-18', 1250.00, '6', 'Yakarta.jpg',
 'Descubre la capital dinámica de Indonesia.',
 'La vibrante y dinámica capital de Indonesia.',
 'Hotel urbano con servicios turísticos.'),

('Yogyakarta', 'Indonesia', 'Asia', '2026-07-20', '2026-07-25', 1150.00, '5', 'Yogyakarta.jpg',
 'Arte, templos y cultura javanesa.',
 'Cuna del arte y los grandes templos de Java, Indonesia.',
 'Alojamiento tradicional cercano a zonas culturales.');