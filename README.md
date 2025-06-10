# Artisan 

Um sistema de **gerenciamento de estoque para estabelecimentos de artesanato**, desenvolvido no ambiente acadêmico como projeto de TCC.

---

## Funcionalidades Principais

- **Cadastro de usuários:** Clientes e funcionários podem registrar-se e autenticar-se.
- **Gerenciamento de estoque:** Inclusão, edição, listagem e exclusão de produtos.
- **Carrinho de compras:** Clientes podem adicionar matérias-primas e produtos ao carrinho.
- **Processamento de pedidos:** Solicitação de matérias-primas e finalização de vendas.
- **Administração de usuários:** Visualizar e gerenciar clientes, funcionários e vendedores.
- **Notificações via e-mail:** Alertas referentes a pedidos e atualizações do sistema.
- **Perfis personalizados:** Clientes, vendedores e administradores têm páginas individuais com informações específicas.

---

## Tecnologias Utilizadas

- **PHP** para backend e lógica de negócio
- **SQL**, **MySQL** como banco de dados relacional
- **HTML**, **CSS** (versões mobile e desktop) e **JavaScript** para a interface
- Estruturação modular com pastas dedicadas para funcionalidades

---

## Estrutura do Repositório

```
/
├── assets/                   # Imagens, logotipos e outros recursos visuais
├── login/                    # Páginas e scripts de autenticação
├── cadastro/                 # Registros de clientes e vendedores
├── carrinho/                 # Lógica e páginas do carrinho de compras
├── produtos/                 # Gerenciamento e visualização de produtos
├── clientes/                 # CRUD de clientes
├── listar_usuarios/          # Visualização de usuários cadastrados
├── notificacao_email/        # Scripts de envio de e-mail
├── perfil_usuario/           # Perfis individuais dos usuários
├── index.html & index.js     # Página inicial e scripts gerais
├── indexDesktop.css          # CSS para layout desktop
├── indexMobile.css           # CSS para layout mobile
├── produtoss.php             # Manipulação de produtos no backend
└── readme.md                 # Documentação do projeto atual
```

---

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/LuksPC/Artisan.git
   cd Artisan
   ```
2. Configure seu servidor PHP + MySQL (ex: XAMPP, LAMP).
3. Crie o banco **u553234134\_Artisan** e ajuste usuário/senha no código:
   ```php
   $servername = "localhost";
   $database = "u553234134_Artisan";
   $username = "root";
   $password = "";
   ```
4. Importe o script SQL para criar tabelas necessárias (clientes, produtos, pedidos, usuários).
5. Acesse `index.html` via URL local para iniciar.

---

## Uso

- **Registrar →** efetuar cadastro como cliente ou vendedor.
- **Login →** acessar conta e visualizar opções conforme o papel (cliente, vendedor, admin).
- **Cliente:** navegar produtos, adicionar ao carrinho e finalizar compras.
- **Vendedor/Admin:** gerenciar estoque, aprovar pedidos e cadastrar novos usuários.
- **Notificações:** alertas por e-mail sobre pedidos (via `notificacao_email`).

---

## Detalhes Técnicos

- **Conexão com MySQL:** cada script contém segmentação via `mysqli_connect`, com tratamento básico de erros.
- **Sessões PHP:** usadas para identificar usuário logado e controlar acesso.
- **Fallbacks e validação:** login falha redireciona com alertas via JavaScript para evitar acesso não autorizado.

---

## Equipe de Desenvolvimento

- Lucas Pereira Cavalcante
- Guilherme Izaac Ferreira
- Guilherme Henrique da Costa Nascimento

---

