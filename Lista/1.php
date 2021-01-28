<!DOCTYPE html>
<html>
<head>
    <title>Questão 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <br><br><br>
    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="x"><h1>Variavel</h1></label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        
    <h1>
        <?php
        $x = $_POST['x'];
        
        if(isset($_POST['x']) && !empty($_POST['x'])){
            if($x > 0){
                echo 'O valor é positivo';
            }
            elseif($x = 0){
                echo 'O valor é igual a zero';
            }
            else{
                echo 'O valor é negativo';
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