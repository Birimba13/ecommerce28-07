<?php 
//include_once 'autenticar.php'; // Inclui o arquivo de autenticação
//include_once 'permissao.php'; // Inclui o arquivo de permissão

// Define o caminho para o arquivo JSON
$json_file = 'data/usuarios.json';

// Lê o arquivo JSON e converte em um array PHP
$usuarios = json_decode(file_get_contents($json_file), true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boticário Jerosch - Tabela de Usuários</title>

    <!-- ===== BIBLIOTECAS EXTERNAS ===== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/maxon_red.ico" type="image/x-icon">
</head>

<body>

    <!-- ===== HEADER PRINCIPAL COM NAVEGAÇÃO ===== -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <span class="navbar-brand brand-title">
                Boticário Jerosch
                <small style="font-size: 0.6em; display: block; margin-top: -5px;">Perfumaria & Cosméticos</small>
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio-adm.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="cadastro_tabela.php">Cadastro</a></li>
					<li class="nav-item"><a class="nav-link" href="logoff.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== CONTEÚDO PRINCIPAL ===== -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Tabela de Usuários</h2>

        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Permissão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($usuarios)) {
                    foreach ($usuarios as $usuario) {
                        $username = htmlspecialchars($usuario['username']);
                        $permissao = htmlspecialchars($usuario['permissao']);

                        echo "<tr>";
                        echo "<td>$username</td>";
                        echo "<td>$permissao</td>";
                        echo "<td>
                                <a href='editar_cadastro.php?username=$username' class='btn btn-primary btn-sm'>Editar</a> 
                                <a href='editar_senha.php?username=$username' class='btn btn-warning btn-sm text-white'>Redefinir Senha</a> 
                                <a href='deletar_cadastro.php?username=$username' class='btn btn-danger btn-sm'>Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3' class='text-center'>Nenhum usuário encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="cadastro.php" class="btn btn-success">
                <i class="fas fa-user-plus"></i> Cadastrar Novo Usuário
            </a>
        </div>
    </div>

    <!-- ===== RODAPÉ ===== -->
    <footer class="footer py-4 bg-light mt-auto">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-3">
                        Boticário Jerosch
                    </h5>
                    <p class="mb-2">Perfumaria & Cosméticos de Qualidade</p>
                    <p class="mb-3 text-muted">Produtos originais • Entrega rápida • Atendimento especializado</p>
                    <div class="social-links mb-3">
                        <a href="#" class="text-decoration-none mx-2">
                            <i class="fab fa-instagram" style="color: #e91e63; font-size: 1.5rem;"></i>
                        </a>
                        <a href="#" class="text-decoration-none mx-2">
                            <i class="fab fa-facebook" style="color: #2196f3; font-size: 1.5rem;"></i>
                        </a>
                        <a href="#" class="text-decoration-none mx-2">
                            <i class="fab fa-whatsapp" style="color: #4caf50; font-size: 1.5rem;"></i>
                        </a>
                    </div>
                    <p class="mb-0 text-muted">
                        © 2025 Todos os direitos reservados |
                        Desenvolvido por João Jerosch
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
