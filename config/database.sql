DROP DATABASE restauranteAguaAzul;
CREATE DATABASE restauranteAguaAzul;

USE restauranteAguaAzul;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    cargo ENUM('admin', 'cliente') DEFAULT 'cliente',
    ativo BOOLEAN DEFAULT TRUE,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    deleted_at DATETIME NULL 
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo ENUM('produto', 'galeria') NOT NULL,
    ativo BOOLEAN DEFAULT TRUE
);
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    imagem VARCHAR(255),
    ativo BOOLEAN DEFAULT TRUE,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    deleted_at DATETIME NULL,

    categoria_id INT NOT NULL,
    FOREIGN KEY (categoria_id)
        REFERENCES categorias(id)
);

CREATE TABLE avaliacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nota TINYINT NOT NULL CHECK (nota BETWEEN 1 AND 5),
    comentario TEXT NOT NULL,
    aprovado BOOLEAN DEFAULT FALSE,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,

    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id)
        REFERENCES usuarios(id)
);

CREATE TABLE galeria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150),
    imagem VARCHAR(255) NOT NULL,
    descricao TEXT,
    ativo BOOLEAN DEFAULT TRUE,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    deleted_at DATETIME NULL,

    categoria_id INT NOT NULL,
    FOREIGN KEY (categoria_id)
        REFERENCES categorias(id)
);

CREATE TABLE configuracoes (
    id INT PRIMARY KEY,
    nome_restaurante VARCHAR(150),
    whatsapp VARCHAR(30),
    email VARCHAR(150),
    instagram VARCHAR(255),
    facebook VARCHAR(255),

    logradouro VARCHAR(150),
    numero VARCHAR(20),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado CHAR(2),
    cep VARCHAR(10)
);

CREATE TABLE horarios_funcionamento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dia_semana TINYINT NOT NULL,
    open_at TIME NOT NULL,
    close_at TIME NOT NULL,
    ativo BOOLEAN DEFAULT TRUE
);

INSERT INTO configuracoes (
    id,
    nome_restaurante,
    whatsapp,
    email,
    instagram,
    facebook,
    logradouro,
    numero,
    bairro,
    cidade,
    estado,
    cep
)
VALUES (
    1,
    'Restaurante Água Azul',
    '19999999999',
    'restauranteaguaazul@gmail.com',
    'https://www.instagram.com/restauranteaguaazul/',
    'https://www.facebook.com/restauranteaguaazul/',
    'Rua Antônio da Silveira Ramalho',
    '215',
    'Parque cidade nova',
    'Mogi Guaçu',
    'SP',
    '13845436'
);

INSERT INTO usuarios (
    id,
    nome,
    email,
    senha,
    telefone,
    cargo
)
VALUES (
    1,
    'Admin AguaÁzul',
    'restauranteaguaazul@gmail.com',
    '$2y$10$LLAHxRkmgDN/1yBW0335S.6MkC.uQxa2rugISGKBJcyjV6ZqMpCm.',
    '19996921290',
    'admin'
)