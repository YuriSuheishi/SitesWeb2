<!DOCTYPE html>
<html>
<head>
    <title>Questão 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
<br><br>
    <form action="" class="container" method="POST">
    <h1>Questão 6</h1><br>
        <div class="form-group">
            <label for="x"><h2>Nota 1</h2></label>
            <input type="text" name="x1" id="x1" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="x"><h2>Nota 2</h2></label>
            <input type="text" name="x2" id="x2" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="x"><h2>Nota 3</h2></label>
            <input type="text" name="x3" id="x3" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
        <br>
    <h2>
        <?php
        if(isset($_POST['x1']) && !empty($_POST['x1']) && isset($_POST['x2']) && !empty($_POST['x2']) && isset($_POST['x3']) && !empty($_POST['x3'])){
            $media = ( $_POST['x1'] + $_POST['x2'] + $_POST['x3'] ) / 3 ;
            echo 'Média Final = ' . $media;
            echo '<br>';
            if($media >= 6){
                echo 'Aprovado';
            }
            else{
                echo 'Reprovado';
            }
            
        }
        else{
            echo 'Nenhum Valor Atribuido';
        }
        ?>
    </h2>
    </form>
</body>
</html>