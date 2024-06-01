<?php
include('../private/db_connect.php');

session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Cadastro</title>
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- MDBootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
  <!-- FontAwesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Template Stylesheet -->
  <link href="../css/login.css" rel="stylesheet">
</head>
<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card">
          <div class="mb-4">
            <a href="../index.php" class="btn"><i class="bi bi-arrow-left"></i></a>
          </div>
            <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center">
              <img src="../img/login.jpg"
                  alt="login form" class="img-fluid" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Cadastro</button>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                      <form action="../private/processo.php" method="post">
                      <input type="hidden" name="login" value="1" />
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Login UniTreino</span>
                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre na sua conta</h5>
                        <div class="form-outline mb-4">
                          <input type="email" id="loginEmail" name="loginEmail" class="form-control form-control-lg" />
                          <label class="form-label" for="loginEmail">Endereço de Email</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="password" id="loginPassword" name="loginPassword" class="form-control form-control-lg" />
                          <label class="form-label" for="loginPassword">Senha</label>
                        </div>
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
                        <a class="small text-muted" href="#!">Esqueceu a senha?</a>
                      </form>
                    </div>
                    <!-- Register Form -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                      <form action="../private/processo.php" method="post">
                      <input type="hidden" name="cadastrar" value="1" />

                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Cadastro UniTreino</span>
                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crie sua conta</h5>
                        <div class="form-outline mb-4">
                          <input type="text" id="registerName" name="registerName" class="form-control form-control-lg" />
                          <label class="form-label" for="registerName">Nome Completo</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="email" id="registerEmail" name="registerEmail" class="form-control form-control-lg" />
                          <label class="form-label" for="registerEmail">Endereço de Email</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="password" id="registerPassword" name="registerPassword" class="form-control form-control-lg" />
                          <label class="form-label" for="registerPassword">Senha</label>
                        </div>
                        <div class="pt-1 mb-4">
                          <button type="submit" class="btn btn-dark btn-lg btn-block" type="button">Cadastrar</button>
                        </div>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Já tem uma conta? <a href="#!"
                            style="color: #393f81;" onclick="document.querySelector('#login-tab').click();">Entre aqui</a></p>
                      </form>
                    </div>
                  </div>
                  <a href="#!" class="small text-muted">Termos de uso.</a>
                  <a href="#!" class="small text-muted">Política de privacidade</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <!-- MDBootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

  <script>
        // Verificar se há mensagem de sucesso e exibir em um alerta
        <?php if(isset($_SESSION['success_message'])): ?>
            alert("<?php echo $_SESSION['success_message']; ?>");
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>

        // Verificar se há mensagem de erro e exibir em um alerta
        <?php if(isset($_SESSION['error_message'])): ?>
            alert("<?php echo $_SESSION['error_message']; ?>");
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
    </script>
</body>
</html>
