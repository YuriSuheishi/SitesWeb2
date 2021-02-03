<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $x = $_GET['x'];
    ?>
    <h1> Fatorial de <?php echo $x; ?> </h1>
    <h1>
        <?php
            $fat = 1;
            for($i = 1; $i <= $x; ++$i){
                $fat = $fat * $i;
            }
            echo $fat;
        ?>
    </h1>
</body>
</html>