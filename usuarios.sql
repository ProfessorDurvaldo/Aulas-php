CREATE TABLE `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `nivel` VARCHAR(50) NOT NULL,
  `data_nascimento` DATE DEFAULT NULL,
  `criado_em` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletado_em` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `nivel`, `data_nascimento`) VALUES
('Ana Souza',       'ana.souza@email.com',    '123456', 'admin',   '1990-03-15'),
('Bruno Lima',      'bruno.lima@email.com',   '123456', 'usuario', '1985-07-22'),
('Carla Mendes',    'carla.mendes@email.com', '123456', 'usuario', '1998-11-08'),
('Diego Ferreira',  'diego.ferreira@email.com','123456', 'admin',   '1992-01-30'),
('Elena Costa',     'elena.costa@email.com',  '123456', 'usuario', '2000-05-17'),
('Felipe Rocha',    'felipe.rocha@email.com', '123456', 'usuario', '1988-09-03');
