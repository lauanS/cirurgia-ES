CREATE DATABASE cirurgia_ES;

CREATE TABLE cirurgia_ES.paciente(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	cpf VARCHAR(11) NOT NULL,
        nascimento DATE NOT NULL,
	sexo CHAR NOT NULL,
	telefone VARCHAR(20) NOT NULL,
	convenio VARCHAR(30)
);

CREATE TABLE cirurgia_ES.medico(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	crm VARCHAR(10) NOT NULL,
	telefone VARCHAR(20) NOT NULL
);

CREATE TABLE cirurgia_ES.cirurgia(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	descricao TEXT NOT NULL 
);

CREATE TABLE cirurgia_ES.agendamento(
  	id_cirurgia INTEGER NOT NULL REFERENCES cirurgia(id),
    	id_medico INTEGER NOT NULL REFERENCES medico(id),
    	id_paciente INTEGER NOT NULL REFERENCES paciente(id),
	data_inicio DATETIME NOT NULL,
	data_fim DATETIME NOT NULL,
    	observacao TEXT
);