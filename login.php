<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="apple-touch-icon" sizes="57x57" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="https://coreui.io/demo/4.0/free/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="https://coreui.io/demo/4.0/free/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://coreui.io/demo/4.0/free/vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="https://coreui.io/demo/4.0/free/css/vendors/simplebar.css">

  <link href="https://coreui.io/demo/4.0/free/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
  <link href="https://coreui.io/demo/4.0/free/css/examples.css" rel="stylesheet">

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-118965717-1');
  </script>
</head>

<?php

include_once "model/db.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dados['SendLogin'])) {
  // echo "<pre>";
  // var_dump($dados);
  // echo "</pre>";

  // $selectUsuarios = "SELECT id, email, senha FROM usuarios where nome = '{$dados['email']}' and isAdmin = 1 limit 1";
  // $result = $db->query($selectUsuarios);

  $stmt = $db->prepare('SELECT id, email, senha FROM usuarios where email =:email and isAdmin = 1 limit 1');
  $stmt->bindValue(':email', $dados['email'], SQLITE3_TEXT);
  $result = $stmt->execute();
  $row = $result->fetchArray();

  $ab = is_array($row) ? count($row) : 0;

  if ($ab > 0) {
    if (password_verify($dados['senha'], $row['senha'])) {
      $_SESSION['id'] = $dados['id'];
      $_SESSION['nome'] = $dados['nome'];
      $_SESSION['email'] = $dados['email'];
      header("Location: admin.php");
    } else {
      $_SESSION['msg'] = "
                <div class='alert alert-danger' role='alert'>
                  Usuario ou senha invalidos
                </div>
                  ";
    }
  } else {
    $_SESSION['msg'] = "
                    <div class='alert alert-danger' role='alert'>
                      Usuario ou senha invalidos
                    </div>
                    ";
  }
}

if (!empty($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}

?>

<body>
  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-medium-emphasis">Sign In to your account</p>

                <form action="" method="POST">

                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" type="text" name="email" placeholder="nome">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" type="password" name="senha" placeholder="senha">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <input class="btn btn-primary px-4" type="submit" value="Login" name="SendLogin">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card col-md-5 text-white bg-primary py-5">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  < src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></>
  <script src="vendors/simplebar/js/simplebar.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
  <script>
  </script>
</body>

</html>