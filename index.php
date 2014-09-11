<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
       
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Ingrese Expresion Regular:
        <input type="text" name="exp">
        <input type="submit" name="submit" value="Ok">
    </form>
    
   
<?php
include 'stacks.php'; 
include 'conversor.php';


if(isset($_POST['submit']))
 
{
    $reg = $_POST['exp'];
    
    $alfabeto = Alfabeto($reg);
    $rege = In_Pos($reg,$alfabeto);
    echo "<br/>Alfabeto: ";
    for ($i=0 ; $i< count ($alfabeto); $i++ ) {
    print $alfabeto[$i];
    print ' ';
    }
    echo "<br/>Expresión Regular: ".$reg;
    echo "<br/>Expresión Posfija: ".$rege;
};
?>
</body>
</html>
