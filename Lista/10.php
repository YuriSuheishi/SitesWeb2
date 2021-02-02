<!DOCTYPE html>
<html>
<head>
    <title>Questão 10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
    <br><br><br>
    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="x"><h1>Idade Atual</h1></label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="y"><h1>Tempo de Trabalho</h1></label>
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
        
        if(isset($_POST['x']) && !empty($_POST['x']) && isset($_POST['y']) && !empty($_POST['y']) ){
            $idade = $_POST['x'];
            $tt = $_POST['y'];
            if(($idade >= 65)||($tt >= 30)||(($idade >= 60) && ($tt >= 25))){
                echo 'Requerer Aposentadoria';
            }
            else{
                echo 'Não Requerer Aposentadoria';
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