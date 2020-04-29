<php 

unset(

$_SESSION ['usuarioId'],
$_SESSION ['usuarioNome'],
$_SESSION ['usuarioNiveisAcessoId'],
$_SESSION ['usuarioEmail'],
$_SESSION ['usuarioSenha'],

);

header("Location: index.php");

?>