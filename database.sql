-- =====================================================
-- Banco de Dados: Catálogo de Veículos (Revenda de Carros)
-- =====================================================

CREATE DATABASE IF NOT EXISTS catalogo_veiculos
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE catalogo_veiculos;

-- Tabela principal de carros
CREATE TABLE IF NOT EXISTS carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(60) NOT NULL,
    modelo VARCHAR(80) NOT NULL,
    ano YEAR NOT NULL,
    quilometragem INT UNSIGNED NOT NULL DEFAULT 0,
    preco DECIMAL(10,2) NOT NULL,
    opcionais VARCHAR(255) DEFAULT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Dados de exemplo (opcional, ajuda a testar o CRUD já com conteúdo)
INSERT INTO carros (marca, modelo, ano, quilometragem, preco, opcionais) VALUES
('Volkswagen', 'Gol', 2018, 62000, 45900.00, 'Ar-condicionado, Direção elétrica'),
('Chevrolet', 'Onix', 2021, 21000, 78900.00, 'Multimídia, Câmera de ré, Sensor de estacionamento'),
('Fiat', 'Argo', 2020, 35500, 62500.00, 'Ar-condicionado, Vidros elétricos'),
('Toyota', 'Corolla', 2022, 12000, 139900.00, 'Teto solar, Bancos de couro, Piloto automático'),
('Hyundai', 'HB20', 2019, 48200, 58700.00, 'Central multimídia, Ar-condicionado');
