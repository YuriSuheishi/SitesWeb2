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
            <label for="x"><h1>Altura</h1></label>
            <input type="text" name="altura" id="altura" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="x"><h1>Peso</h1></label>
            <input type="text" name="peso" id="peso" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        <br>
        <h1>
        <?php
        
        if(isset($_POST['altura']) && !empty($_POST['altura']) && $_POST['peso']) && !empty($_POST['peso'])){
            $alt = $_POST['altura'];
            $peso = $_POST['peso'];
            $mc = $peso / ($alt * $alt)
            echo 'IMC = ' . $mc;
            echo '<br>';
            
        }
        else{
            echo 'Nenhum Valor Atribuido';
        }
        ?>
    </h1>
    <h2>
        <?php
            if($mc < 20){
                echo 'Subpeso';
            }
            elseif($mc > 25){
                echo 'Sobrepeso';
            }
            else{
                echo 'Normal';
            }
        ?>
    </h2>
    </form>
</body>
</html>