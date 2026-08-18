CREATE TABLE `lista_compra` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nome` VARCHAR(255) NOT NULL , 
    `usuario_id` INT NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;