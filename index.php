<php 
    session_start;

?>


<html>
<header></header>


<body> 

<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
</form>
<p class="text-center text-danger" > 
    <php 
        if(isset($_SESSION['loginErro'])) {
            echo $_SESSION ['loginErro'];
            unset($_SESSION['loginErro']);
        
        }

    ?>
</p>

</body>


</html>