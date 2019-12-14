INSERT INTO `cirurgia` (`id`, `nome`, `descricao`)
    VALUES  (NULL, 'Estafilorrafia', 'Sutura da fenda palatina.');
            (NULL, 'Cardotomia', 'Operação de cortar a cárdia, em casos de estenose do esôfago.'),
            (NULL, 'Cistectomia', 'Retirada da bexiga.'),
            (NULL, 'Gastrectomia', 'Retirada total ou parcial do estômago.'),
            (NULL, 'Apendicectomia', 'Retirada cirúrgica do apêndice vermiforme.');

INSERT INTO `medico` (`id`, `nome`, `crm`, `telefone`)
    VALUES  (NULL, 'Cleiton Costas', '1809617', '15988752215'),
            (NULL, 'Robierto Alfine', '7169081', '15974724251');

INSERT INTO `medico` (`id`, `nome`, `crm`, `telefone`)
    VALUES  (NULL, 'Kohei Horikosh', '6584112', '21996166803'),
            (NULL, 'Henry Luan Rezende', '3599541', '15985030337');

INSERT INTO `paciente` (`id`, `nome`, `cpf`, `nascimento`, `sexo`, `telefone`, `convenio`)
    VALUES  (NULL, 'Tadeu Souza de Melo', '18465420068', '1986-05-15', 'M', '13989567412', 'Bradesco'),
            (NULL, 'Maria Ross', '17862793048', '1995-02-23', 'F', '15997814881', 'Unimed');

INSERT INTO `paciente` (`id`, `nome`, `cpf`, `nascimento`, `sexo`, `telefone`, `convenio`)
    VALUES  (NULL, 'Anderson Luiz Thomas', '45649782415', '1967-06-12', 'M', '15984369914', NULL),
            (NULL, 'Milena Leticia Emily Freitas', '49675576944', '1968-01-07', 'F', '20999961843', 'Caixa');

INSERT INTO `paciente` (`id`, `nome`, `cpf`, `nascimento`, `sexo`, `telefone`, `convenio`)
        VALUES  (NULL, 'Maria de Lurdes Nunes', '56831207057', '1972-09-15', 'F', '83991310393', 'Samaritano '),
                (NULL, 'Maria de Lurdes Nunes', '91839763884', '1989-10-12', 'F', '69994071794', 'Unimed');

INSERT INTO `agendamento` (`id_cirurgia`, `id_medico`, `id_paciente`, `data_inicio`, `data_fim`, `observacao`)
    VALUES ('1', '1', '1', '2019-12-11 11:00:00', '2019-12-11 14:00:00', 'Paciente com problemas vasculares '),
           ('1', '1', '2', '2019-12-12 11:00:00', '2019-12-12 14:00:00', 'Paciente com problemas vasculares '),
           ('3', '2', '4', '2019-12-11 11:00:00', '2019-12-11 14:00:00', 'Paciente com problemas na bexiga '),
           ('4', '1', '3', '2019-12-11 11:00:00', '2019-12-11 14:00:00', 'Paciente com problemas estomacais ');