<!DOCTYPE html>
<html>
<head>
    <title>Questão 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <br><br><br>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="x"><h1>Variavel</h1></label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        
        Tabuada: 
        <br>
        <?php
        
        if(isset($_GET['x']) && !empty($_GET['x'])){
            $x = $_GET['x'];
            for($i = 0; $i <= 10; ++$i){
                echo $x;
                echo ' x ';
                echo $i;
                echo ' = ';
                echo $x * $i;
                echo '<br>';
            }
        }
        else{
            echo 'Nenhum Valor Atribuido';
        }
        ?>
    </h1>
    </form>
</body>
</html>