<?php
include('db_connect.php');

session_start(); // Iniciar a sessão

// Processamento do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastrar'])) {
    $nome = $_POST['registerName'];
    $email = $_POST['registerEmail'];
    $senha = $_POST['registerPassword'];

    // Criptografar a senha antes de inserir no banco de dados
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_criptografada')";
    if ($db->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Cadastro realizado com sucesso!";
    } else {
        $_SESSION['error_message'] = "Erro ao cadastrar: " . $db->error;
    }
    header("Location: index.php");
    exit();
}

// Processamento do formulário de login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['loginEmail'];
    $senha = $_POST['loginPassword'];

    // Consulta ao banco de dados para verificar se o usuário existe
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado, verificar a senha
        $row = $result->fetch_assoc(); // Buscar informações do usuário
        if (password_verify($senha, $row['senha'])) {
            // Senha correta, usuário autenticado com sucesso
            $_SESSION['nome_usuario'] = $row['nome']; // Definir o nome do usuário na sessão
            $_SESSION['success_message'] = "Login bem-sucedido!";
            header("Location: ../index.php");
            exit();
        } else {
            // Senha incorreta
            $_SESSION['error_message'] = "Email ou senha incorretos!";
            header("Location: ../public/login.php");
            exit();
        }
    } else {
        // Usuário não encontrado
        $_SESSION['error_message'] = "Email ou senha incorretos!";
        header("Location: ../public/login.php");
        exit();
    }
}

$db->close();
?>
