CREATE DATABASE IF NOT EXISTS celke DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE celke;

CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(220) NOT NULL,
  email varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ponto (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  data_entrada date NULL,
  entrada time DEFAULT NULL,
  saida_intervalo time DEFAULT NULL,
  retorno_intervalo time DEFAULT NULL,
  saida time DEFAULT NULL,
  usuario_id int(11) NOT NULL,
  FOREIGN KEY (usuario_id) REFERENCES ponto (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
INSERT INTO usuarios (id, nome, email) VALUES
(1, 'Cesar', 'cesar@mail.pt'),
(2, 'Kelly', 'kelly@mail.pt'),
(3, 'Gabrielly', 'Gabrielly@mail.pt');