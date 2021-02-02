<!DOCTYPE html>
<html>
<head>
    <title>Questão 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
<br><br>
    <form action="" class="container" method="POST">
    <h1>Questão 5</h1><br>
        <div class="form-group">
            <label for="x"><h2>Salário</h2></label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="y"><h2>Reajuste(%)</h2></label>
            <input type="text" name="y" id="y" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        <br>
    <h2>
        <?php
        
        if(isset($_POST['x']) && !empty($_POST['x']) && isset($_POST['y']) && !empty($_POST['y'])){
            $x = $_POST['x'];
            $y = $_POST['y'];
            $f = $x + ($x * ($y / 100));
            echo 'Sálario Final = ' . $f;
            echo '<br>';
            
        }
        else{
            echo 'Nenhum Valor Atribuido';
        }
        ?>
    </h2>
    </form>
</body>
</html>