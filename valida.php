<php
session_start;
include_once("conexao.php");

   if(isset ($_POST['email'] )) && (isset($_POST ['senha'] ))) {
       $usuario = mysqli_real_escape_string($conn, $_POST['email']); 
       $senha = mysqli_real_escape_string($conn, $_POST['senha']);
       $senha = md5 ($senha);

       $sql = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";    
       $result = mysqli_query($conn, $sql);
       $resultado = mysqli_fetch_assoc($result);
       
        if(($senha == "123") && ($usuario == "")) {
            header("Location:administrativo.php");
        }else{
            $_SESSION['loginErro'] = "usuario ou senha invalidos";
            header("Location: index.php");
        }

   }else{
       $_SESSION['loginErro'] = "Usuario ou senha invalida" ;
       header("Location: index.php");
   }
?>
