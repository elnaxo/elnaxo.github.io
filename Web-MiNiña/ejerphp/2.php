<html>
<head></head>
<body>
 <?php
    $num=rand(1,100);
    echo $num;
    echo "<br>";
    if ($num<50){
        echo "El numero $num es menor que 50";
    }else{
        echo "El numero $num es mayor que 50";
    }
 ?>
</body>
</html>
