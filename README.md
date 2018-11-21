# pprog
Projetos da disciplina Paradigmas de Programação 2º/2018

Instituto Federal de Educação, Ciência e Tecnologia de Brasília – IFB 
Campus Taguatinga – Bacharelado em Ciência da Computação 
Paradigmas de Programação - Profº Roberto Duarte Fontes 
16105760027 – Caio César Félix Caldeira 
16105760016 – Davi Ferreira Cordeiro 
161057600022 – Leonardo Santos da Silva 

FDV – IFGames

1.	Descrição do Projeto:

Desenvolvido para ser acessado via WEB e mobile, IFGames consiste em um sistema de automação para controle de estoque e vendas de jogos eletrônicos. 
Os jogos cadastrados no banco de dados do sistema são exibidos para os clientes, que podem solicitar a venda ao vendedor. 
O vendedor, por sua vez, tem acesso aos jogos cadastrados e também aos clientes cadastrados na loja. Caso necessário, o vendedor pode cadastrar um cliente no banco. Quando o vendedor efetua a venda, o sistema verifica os dados do usuário e, se for um usuário válido, efetua a atualização no estoque das quantias compradas. Para emissão de nota fiscal e pagamentos, consulte seu revendedor sobre a disponibilidade do IFPay em sua região.
O administrador é o responsável por cadastrar vendedores, assim como demitir, se for o caso. Pode também acessar o histórico de vendas de determinado período. Fora isso, pode exercer todas as funções de um vendedor.
O suporte é o responsável por manter o sistema funcional. Dentre suas atribuições encontra-se o cadastro de administradores, assim como a remoção. Este ator não pode realizar consultas de histórico.


2.	Detalhamento das Funcionalidades Principais:

As funcionalidades do sistema seguem o padrão de projeto CRUD (Create, Read, Update and Delete). Dessa forma, permite-se:
•	Create: Cadastrar jogos, clientes, vendedores e administradores;
•	Read: Consultar o banco de dados;
•	Update: O administrador pode alterar atributos dos demais atores e dos jogos e o próprio sistema realiza alteração ao realizar uma venda;
•	Delete: O administrador, o suporte e o sistema em si podem realizar exclusões do banco.
