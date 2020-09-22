<?php 
  session_start();
  require 'class/MySql.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Efetuar login</title>
</head>
<body>

<div class="box-login">
<?php 
    if(isset($_POST['acao'])){
      $login = $_POST['login'];
      $password = $_POST['password'];
      $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.user` WHERE login = ? AND password = ? ");
      $sql->execute(array($login,$password));
      if($sql->rowCount() == 1){
        $info = $sql->fetch();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('Location: index2.php');
        die();
      }else{
        echo 'Usuário ou senha incorretos';
      }
    }
  ?>
  <h2>Efetuar o login</h2>
    <form method="post">
      <input type="text" name="login" placeholder="Login" required/>
      <input type="password" name="password" placeholder="Password" required/>
      <input type="submit" name="acao" value="Logar"/>
    </form>
</div><!--box-login-->

</body>
</html>