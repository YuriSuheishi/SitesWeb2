<!DOCTYPE html>
<html>
<head>
    <title>Questão 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <br><br><br>
    <form action="" class="container" method="GET">
        <div class="form-group">
            <label for="x"><h1>Valor de Fábrica</h1></label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        
        <br>
        <?php
        
        if(isset($_GET['x']) && !empty($_GET['x'])){
            $x = $_GET['x'];
            $xf = $x + ($x * (0,45 + 0,28))
            echo 'Valor Final é R$: ' . $xf;
            echo '<br>';
        }
        else{
            echo 'Nenhum Valor Atribuido';
        }
        ?>
    </h1>
    </form>
</body>
</html>