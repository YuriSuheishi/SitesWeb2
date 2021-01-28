<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <form action="" class="container" method="POST">
        <div class="form-group">
            <label for="x">Variavel</label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
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
</body>
</html>