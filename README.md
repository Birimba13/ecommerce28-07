# Boticário Jerosch - E-commerce

Bem-vindo ao **Boticário Jerosch**! 

Este é um projeto de e-commerce simples e funcional, desenvolvido em **PHP puro**, focado em **perfumaria e cosméticos**. Ele oferece funcionalidades essenciais como **cadastro**, **login** e **gerenciamento de usuários**, com todos os dados armazenados localmente em arquivos `.json`.

---

## Índice

*   [Funcionalidades](#-funcionalidades)
*   [Tecnologias Utilizadas](#%EF%B8%8F-tecnologias-utilizadas)
*   [Estrutura do Projeto](#-estrutura-do-projeto)
*   [Como Rodar o Projeto](#-como-rodar-o-projeto)
    *   [Pré-requisitos](#pré-requisitos)
    *   [Instalação e Configuração](#instalação-e-configuração)
*   [Contribuição](#-contribuição)
*   [Licença](#-licença)

---

## Funcionalidades

Explore as principais características deste sistema:

*   **Sistema de Autenticação Completo:**
    *   **Cadastro de Usuários:** Permite novos registros com definição de níveis de permissão (Administrador ou Usuário padrão).
    *   **Login Seguro:** Redirecionamento inteligente pós-login, baseado no nível de permissão do usuário.
*   **Gerenciamento de Usuários (Admin):**
    *   Visualização, edição e exclusão de cadastros de usuários.
    *   Funcionalidade para alteração de senha.
*   **Controle de Acesso:**
    *   Páginas protegidas por controle de sessão, garantindo que apenas usuários autenticados acessem áreas restritas.
    *   Funcionalidade de `logoff` para encerrar a sessão.
*   **Interface Intuitiva:**
    *   Design responsivo e agradável, construído com **Bootstrap**, ideal para lojas de perfumaria e cosméticos.
*   **Armazenamento de Dados:**
    *   Dados de usuários persistidos localmente em arquivos `.json`, sem a necessidade de um banco de dados relacional.

## Tecnologias Utilizadas

Este projeto foi construído com as seguintes tecnologias:

*   **PHP Puro:** Linguagem de programação backend.
*   **HTML5:** Estrutura das páginas web.
*   **CSS3:** Estilização personalizada (`style.css`).
*   **Bootstrap 5:** Framework CSS para um design responsivo e moderno.
*   **JSON:** Formato de arquivo para armazenamento de dados.

## Estrutura do Projeto

A organização do projeto segue uma estrutura clara para facilitar o desenvolvimento e a manutenção:

\`\`\`
e-commerce/

│

├── index.php                 # Página inicial pública do site

├── login.php                 # Formulário para acesso ao sistema

├── cadastro.php              # Formulário para criação de novas contas

├── processa_login.php        # Lógica de validação e autenticação do login

├── processa_cadastro.php     # Lógica para processar o registro de novos usuários

│

├── sistema/                  # Diretório com as páginas e lógicas internas do sistema

│   ├── inicio.php            # Dashboard ou página inicial para usuários comuns

│   ├── inicio-adm.php        # Dashboard ou página inicial para administradores

│   ├── autenticar.php        # Script para verificar e proteger o acesso às páginas

│   ├── logoff.php            # Script para encerrar a sessão do usuário

│   ├── cadastro_tabela.php   # Exibe a lista de usuários cadastrados (apenas para admin)

│   ├── editar_cadastro.php   # Formulário para edição de dados de um usuário (apenas para admin)

│   ├── deletar_cadastro.php  # Lógica para exclusão de um usuário (apenas para admin)

│   ├── editar_senha.php      # Formulário para alteração de senha de um usuário (apenas para admin)

│   ├── atualizacao_cadastro.php # Processa a atualização dos dados do usuário (apenas para admin)

│   ├── atualizacao_senha.php # Processa a alteração da senha do usuário(apenas para admin)

│
│   ├── data/                 # Diretório para armazenamento de dados

│   │   └── usuarios.json     # Arquivo JSON que armazena todos os dados dos usuários

│

│   ├── img/                  # Diretório para imagens do projeto (ex: produtos, ícones)

│   └── style.css             # Folha de estilos CSS personalizada para o sistema
\`\`\`

## Como Rodar o Projeto

Siga estes passos para colocar o projeto em funcionamento na sua máquina local:

### Pré-requisitos

Certifique-se de ter o seguinte software instalado:

*   **Servidor Web:** Apache, Nginx ou similar.
*   **PHP:** Versão 7.x ou superior (recomendado PHP 8.x).

### Instalação e Configuração

1.  **Clone o repositório:**
    Abra seu terminal ou prompt de comando e execute:
    \`\`\`bash
    git clone [URL_DO_SEU_REPOSITORIO]
    cd e-commerce
    \`\`\`
    *(Substitua `[URL_DO_SEU_REPOSITORIO]` pelo link do seu repositório Git.)*

2.  **Configure o Servidor Web:**
    *   Mova ou configure a raiz do seu servidor web (document root) para apontar para a pasta `e-commerce` que você acabou de clonar.
    *   Exemplo para Apache (no `httpd.conf` ou arquivo de configuração do Virtual Host):
        \`\`\`apache
        DocumentRoot "/caminho/para/o/seu/projeto/e-commerce"
        <Directory "/caminho/para/o/seu/projeto/e-commerce">
            AllowOverride All
            Require all granted
        </Directory>
        \`\`\`

3.  **Acesse no Navegador:**
    Após configurar o servidor, abra seu navegador e acesse:
    \`\`\`
    http://localhost/
    \`\`\`
    (Ou o endereço configurado para seu servidor local, como `http://meu-ecommerce.test`).

## Contribuição

Sua contribuição é muito bem-vinda! Se você deseja aprimorar este projeto, siga os passos abaixo:

1.  Faça um fork do projeto.
2.  Crie uma nova branch para sua funcionalidade ou correção:
    \`\`\`bash
    git checkout -b feature/minha-nova-funcionalidade
    \`\`\`
3.  Faça suas alterações e commit com uma mensagem clara:
    \`\`\`bash
    git commit -am 'feat: Adiciona nova funcionalidade X'
    \`\`\`
4.  Envie suas alterações para o seu fork:
    \`\`\`bash
    git push origin feature/minha-nova-funcionalidade
    \`\`\`
5.  Abra um Pull Request para o repositório original.

## Licença

Este projeto está licenciado sob a **Licença MIT**. Para mais detalhes, consulte o arquivo `LICENSE` na raiz do repositório.

---

Feito por João Jerosch
\`\`\`
