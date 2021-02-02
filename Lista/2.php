<!DOCTYPE html>
<html>
<head>
    <title>Questão 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    
    <br><br>
    <h1>Questão 2</h1><br>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="x"><h2>Variavel</h2></label>
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
                echo $x . ' x ' . $i . ' = ' . $x * $i;
                echo '<br>';
            }
        }
        else{
            echo 'Nenhum Valor Atribuido';
        }
        ?>
    </form>
</body>
</html>