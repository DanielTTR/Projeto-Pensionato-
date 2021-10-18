-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Out-2021 às 23:46
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vale_moradia_final1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conjunto`
--

CREATE TABLE `conjunto` (
  `Tipo_conjunto` varchar(20) NOT NULL,
  `Nome_conjunto` varchar(30) NOT NULL,
  `Responsavel` varchar(30) NOT NULL,
  `Telefone` varchar(30) NOT NULL,
  `Bairro` varchar(30) NOT NULL,
  `Rua` varchar(30) NOT NULL,
  `Foto` varchar(150) NOT NULL,
  `Descricao` text NOT NULL,
  `Conj_id` int(11) NOT NULL,
  `CONTADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conjunto`
--

INSERT INTO `conjunto` (`Tipo_conjunto`, `Nome_conjunto`, `Responsavel`, `Telefone`, `Bairro`, `Rua`, `Foto`, `Descricao`, `Conj_id`, `CONTADOR`) VALUES
('Pensionato', 'Pensionato da Dona Carmen', 'Dona Carmen', '38 9954 7851', 'Centro', 'Rua das graças', 'https://images.pexels.com/photos/4825701/pexels-photo-4825701.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Um pensionato para pessoas mais calmas e preferencialmente para alunos ou universitários', 1, 4),
('Apartamento', 'Sete coroas', 'Sr rodrigues', '38 5421 9452', 'Centro', 'Nova esperança', 'https://images.pexels.com/photos/2869215/pexels-photo-2869215.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Um apartamento tranquilo e arrumado para estudantes', 2, 2),
('Pensionato', 'Alagoas', 'Maria', '38 5421 9452', 'Centro', 'Nova esperança', 'https://images.pexels.com/photos/2506988/pexels-photo-2506988.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Um apartamento tranquilo e arrumado para estudantes', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-09-24-212004', 'App\\Database\\Migrations\\CriaTabelaUsuarios', 'default', 'App', 1632569655, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `quarto_id` int(11) NOT NULL,
  `conj_id` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `disponibilidade` varchar(50) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`quarto_id`, `conj_id`, `nome`, `disponibilidade`, `descricao`, `preco`, `foto`) VALUES
(1, 1, 'Quarto 1', 'Disponivel', 'Um quarto retangular com uma janela, tem um guarda roupas, uma cama e uma mesa inclusos.', 400, 'https://images.pexels.com/photos/1454806/pexels-photo-1454806.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(2, 1, 'Quarto 2', 'Disponivel', 'Um quarto cúbico, tem duas janelas um armário e uma cama.', 500, 'https://images.pexels.com/photos/90317/pexels-photo-90317.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(3, 2, 'Apartamento 100', 'Disponivel', 'Um apartamento com quarto, sala, cozinha e banheiro. Tem algumas mobílias inclusas como armários, camas e hacks.', 650, 'https://images.pexels.com/photos/2631746/pexels-photo-2631746.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(4, 1, 'Quarto 3', 'Disponivel', 'Um apartamento tranquilo e arrumado para estudantes', 350, 'https://images.pexels.com/photos/2869215/pexels-photo-2869215.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(5, 1, 'Quarto 4', 'Ocupado', 'Um apartamento tranquilo, tem um banheiro', 500, 'https://images.pexels.com/photos/2506988/pexels-photo-2506988.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(6, 3, 'Quarto 1', 'Disponivel', 'Um apartamento no térreo bem ventilado', 700, 'https://images.pexels.com/photos/775219/pexels-photo-775219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(7, 2, 'Apartamento 101', 'Ocupado', 'Um apartamento tranquilo e arrumado para estudantes', 650, 'https://images.pexels.com/photos/2869215/pexels-photo-2869215.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');

--
-- Acionadores `quarto`
--
DELIMITER $$
CREATE TRIGGER `Diminui_quartos` AFTER DELETE ON `quarto` FOR EACH ROW BEGIN
        UPDATE conjunto SET CONTADOR = CONTADOR - 1
        WHERE (Conj_id = old.conj_id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Soma_quartos` AFTER INSERT ON `quarto` FOR EACH ROW BEGIN
        UPDATE conjunto SET CONTADOR = CONTADOR + 1
        WHERE (Conj_id = new.conj_id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `ativo` tinyint(1) DEFAULT 0,
  `password_hash` varchar(255) NOT NULL,
  `ativacao_hash` varchar(64) DEFAULT NULL,
  `reset_hash` varchar(64) DEFAULT NULL,
  `reset_expira_em` datetime DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `atualizado_em` datetime DEFAULT NULL,
  `deletado_em` datetime DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `is_admin`, `ativo`, `password_hash`, `ativacao_hash`, `reset_hash`, `reset_expira_em`, `criado_em`, `atualizado_em`, `deletado_em`, `cpf`) VALUES
(1, 'Daniel Rodrigues Ramalho', 'admin@admin.com', '(33) 99999-9999', 1, 1, '$2y$10$GFV9WJAS8RMw0.Y1BUyKdufKCctzevhquso6J9Lz0gaAlz7Rze6U2', NULL, NULL, NULL, '2021-09-05 09:02:00', '2021-10-16 17:12:25', NULL, '114.240.520-68');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conjunto`
--
ALTER TABLE `conjunto`
  ADD PRIMARY KEY (`Conj_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`quarto_id`),
  ADD KEY `conj_id` (`conj_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ativacao_hash` (`ativacao_hash`),
  ADD UNIQUE KEY `reset_hash` (`reset_hash`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conjunto`
--
ALTER TABLE `conjunto`
  MODIFY `Conj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `quarto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `quarto`
--
ALTER TABLE `quarto`
  ADD CONSTRAINT `quarto_ibfk_1` FOREIGN KEY (`conj_id`) REFERENCES `conjunto` (`Conj_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
