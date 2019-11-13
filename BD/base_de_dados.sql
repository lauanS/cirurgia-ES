INSERT INTO `cirurgia` (`id`, `nome`, `descricao`)
    VALUES  (NULL, 'Estafilorrafia', 'Sutura da fenda palatina.'),
            (NULL, 'Cardotomia', 'Operação de cortar a cárdia, em casos de estenose do esôfago.');

INSERT INTO `medico` (`id`, `nome`, `crm`, `telefone`)
    VALUES  (NULL, 'Cleiton Costas', '1809617', '15988752215'),
            (NULL, 'Robierto Alfine', '7169081', '15974724251');

INSERT INTO `paciente` (`id`, `nome`, `cpf`, `nascimento`, `sexo`, `telefone`, `convenio`)
    VALUES  (NULL, 'Tadeu Souza de Melo', '18465420068', '1986-05-15', 'M', '13989567412', 'Bradesco'),
            (NULL, 'Maria Ross', '17862793048', '1995-02-23', 'F', '15997814881', 'Unimed');

INSERT INTO `agendamento` (`id_cirurgia`, `id_medico`, `id_paciente`, `data_inicio`, `data_fim`, `observacao`)
    VALUES ('1', '1', '1', '2019-12-11 11:00:00', '2019-12-11 14:00:00', 'Paciente com problemas vasculares ');