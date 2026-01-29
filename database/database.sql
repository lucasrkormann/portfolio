CREATE DATABASE portfolio_lucas;

USE portfolio_lucas;

CREATE TABLE comentarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    mensagem VARCHAR(500) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO comentarios (nome, mensagem) VALUES
('Ana Souza', 'Gostei muito do seu portfólio! Layout limpo e bem organizado.'),
('João Pedro', 'Sistema simples, mas muito bem feito. Ótimo para mostrar habilidades.'),
('Fernanda Rocha', 'Achei bem legal a ideia do livro de visitas, ficou bem intuitivo.');

-- Mensagens de exemplo para as funcionalidades --
