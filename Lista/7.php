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
            <label for="hora"><h1>Horas Trabalhadas</h1></label>
            <input type="text" name="x1" id="x1" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="ss"><h1>Sálario por Hora</h1></label>
            <input type="text" name="x2" id="x2" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        <br>
    <h2>
        <?php
        if(isset($_POST['x1']) && !empty($_POST['x1']) && isset($_POST['x2']) && !empty($_POST['x2'])){
            $hora = $_POST['x1'];
            $valor = $_POST['x2'];
            if($hora>160){
                $salario = ((($hora - 160) * 1.5) + $hora) * $valor;

            }
            else{
                $salario = $hora * $valor;
            }
            echo 'Sálario Total = ' . $salario;
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