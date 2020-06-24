INSERT INTO `comments` (`id`, `content`, `post_id`, `user_id`) VALUES
(1, 'As matrículas dos alunos veteranos se iniciam dia 12/11 e vai até 13/11.', 1, 4),
(2, 'Funcionários, professores, alunos de graduação e de pós-graduação.', 2, 6),
(3, 'Bloco C.', 3, 4),
(4, 'Ciência da computação é a ciência que estuda as técnicas, metodologias e instrumentos computacionais, que automatiza processos e desenvolve soluções baseadas no uso do processamento de dados. Não se restringe apenas ao estudo dos algoritmos, suas aplicações e implementação na forma de software, extrapolando para todo e qualquer conhecimento pautado no computador, que envolve também a telecomunicação, o banco de dados e as aplicações tecnológicas que possibilitam atingir o tratamento de dados de entrada e saída, de forma que se transforme em informação. Assim, a Ciência da Computação também abrange as técnicas de modelagem de dados e os protocolos de comunicação, além de princípios que abrangem outras especializações da área. ', 4, 6),
(5, 'MVC é o acrônimo de Model-View-Controller (em português: Arquitetura Modelo-Visão-Controle - MVC) é um padrão de projeto de software, ou padrão de arquitetura de software formulado na década de 1970, focado no reuso de código e a separação de conceitos em três camadas interconectadas, onde a apresentação dos dados e interação dos usuários (front-end) são separados dos métodos que interagem com o banco de dados (back-end).', 5, 4),
(6, 'Um Sistema de Gerenciamento de Banco de Dados (SGBD) — do inglês Data Base Management System (DBMS) — é o conjunto de softwares responsáveis pelo gerenciamento de um banco de dados. Seu principal objetivo é retirar da aplicação cliente a responsabilidade de gerenciar o acesso, a persistência, a manipulação e a organização dos dados. O SGBD disponibiliza uma interface para que seus clientes possam incluir, alterar ou consultar dados previamente armazenados. Em bancos de dados relacionais a interface é constituída pelas APIs (Application Programming Interface) ou drivers do SGBD, que executam comandos na linguagem SQL (Structured Query Language). ', 6, 6),
(7, 'E quando inicia a segunda fase?', 1, 8);

INSERT INTO `posts` (`id`, `content`, `user_id`, `topic_id`) VALUES
(1, 'Quando inicia o período de matrícula dos alunos veteranos para o semestre 2019.2 e quando começa o período letivo?', 7, 1),
(2, 'Quem tem direito ao Restaurante Universitário?', 7, 1),
(3, 'Qual o bloco da computação?', 7, 3),
(4, 'O que é Ciência da Computação?', 4, 3),
(5, 'O que significa MVC?', 7, 4),
(6, 'O que é um SGBD?', 7, 5);

INSERT INTO `topics` (`id`, `title`, `user_id`) VALUES
(1, 'Restaurante Universitário', 7),
(2, 'Calendário Universitário', 7),
(3, 'Cursos', 7),
(4, 'Arquitetura de Software', 7),
(5, 'Banco de Dados', 7),
(6, 'Carteira Estudantil', 7),
(7, 'Avaliações', 6);

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'Phillip Williams', 'phillip.williams@aluno.univ.br', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Olga Barlow', 'olga.barlow@aluno.univ.br', '202cb962ac59075b964b07152d234b70'),
(7, 'Katharine Bert', 'katharine.bert@aluno.univ.br', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Fake User', 'fake.user@aluno.univ.br', '81dc9bdb52d04dc20036dbd8313ed055');


