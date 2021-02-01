<!DOCTYPE html>
<html>
<head>
    <title>Questão 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <br><br><br>
    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="x"><h1>Salário</h1></label>
            <input type="text" name="x" id="altura" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="x"><h1>Reajuste(%)</h1></label>
            <input type="text" name="y" id="peso" class="form-control" value=""/>
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
            $f = $x * ($y / 100);
            echo 'Sálario Final = ' . $mc;
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