<php 
   $servidor = "localhost";
   $usuario = "root";
   $senha = "" ;
   $dbname = "vendas";

   $conn = mysqli_connect($servidor, $usuario, $senha , $dbname);

   if(!conn) {
       die("falha".mysqli_connect_error() );
   }else{
       echo "Conexão realizada com sucesso";
   }



?>