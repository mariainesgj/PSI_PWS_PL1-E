# FolhaObra App
A aplicação FolhaObra é uma aplicação web projetada para simplificar o processo de emissão de folhas de obra. Ela fornece diferentes funcionalidades para funcionários, administradores e clientes, permitindo que eles gerenciem folhas de obra, dados de clientes, serviços e taxas de IVA. A aplicação segue a arquitetura MVC e é desenvolvida em PHP. Ela utiliza uma base de dados de apoio para armazenar as informações necessárias.

## Principais Funcionalidades
Perfil Funcionário
- Autenticação: Os funcionários podem fazer login para aceder à sua área reservada.
- Gestão de Perfil: Os funcionários podem atualizar a sua senha e e-mail.
- Emissão de Folhas de Obra: Os funcionários podem criar novas folhas de obra, preencher as informações necessárias e adicionar linhas de serviço.
- Registo de Clientes: Os funcionários podem cadastrar novos clientes.
- Gestão de Serviços: Os funcionários podem gerir os serviços oferecidos pela empresa.
- Gestão de Taxas de IVA: Os funcionários podem gerir as taxas de IVA aplicáveis.
- Histórico de Folhas de Obra: Os funcionários podem visualizar o histórico de folhas de obra geradas anteriormente.

Perfil Administrador
- Autenticação: Os administradores podem fazer login para aceder à sua área reservada.
- Gestão de Funcionários: Os administradores podem criar e gerir contas de funcionários.
- Configuração da Empresa: Os administradores podem configurar os dados da empresa para a emissão de folhas de obra.
- Histórico de Folhas de Obra: Os administradores podem visualizar o histórico de todas as folhas de obra geradas pelos funcionários.
- Todas as funcionalidades disponíveis para funcionários.

Perfil Cliente
- Autenticação: Os clientes podem fazer login para aceder à sua área reservada.
- Lista de Folhas de Obra: Os clientes podem visualizar a sua lista de folhas de obra, indicando claramente as pagas e as pendentes.
- Pagamento Simulado: Os clientes podem simular o pagamento de uma folha de obra.
- Folha de Obra Impressa: Os clientes podem visualizar folhas de obra individuais num formato imprimível (texto a preto em fundo branco).

## Pré-requisitos
- Servidor web (por exemplo, Apache)
- PHP 7 ou superior
- MySQL Workbench ou outro sistema de gestão de base de dados compatível
- Composer (para gerir dependências)

## Instalação
1. Clone o repositório do projeto do GitHub.
2. Certifique-se de ter o servidor web (por exemplo, Apache) configurado e apontando para o diretório público do projeto.
3. No terminal, navegue até o diretório do projeto e execute o comando composer install para instalar as dependências.
4. Correr o sql da estrutura e de dados

## Utilização
1. Aceda a aplicação através da URL fornecida.
2. Dependendo do seu perfil (funcionário, administrador ou cliente), faça login usando as credenciais adequadas.
3. Explore as funcionalidades disponíveis com base no seu perfil:
    - Funcionários podem gerar folhas de obra, gerir clientes, serviços e taxas de IVA, e visualizar o histórico de folhas de obra.
    - Administradores têm acesso adicional para gerir funcionários e configurar a empresa.
    - Clientes podem visualizar a lista das suas folhas de obra, simular pagamentos e imprimir folhas de obra.
4. Siga a interface intuitiva da aplicação para realizar as ações desejadas e navegar pelas diferentes seções.
5. Certifique-se de fazer logout quando terminar de usar a aplicação para garantir a segurança da sua conta.

Repositório Github: https://github.com/mariainesgj/PSI_PWS_PL1-E

## Autores
Diana Catarino `2220863`
<br> Maria Jesus `2211923`

---

>Unidade Curricular: Programação Web-Servidor @2023
> <br> Curso Técnico Superior Profissional de Programação de Sistemas de Informação

![Imagem](https://www.ipleiria.pt/wp-content/themes/ipleiria/img/logo_ipl_header.png)
