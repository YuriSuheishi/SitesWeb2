<!DOCTYPE html>
<html>
<head>
    <title>Questão 8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
<br><br>
    <form action="" class="container" method="POST">
    <h1>Questão 8</h1><br>
        <div class="form-group">
            <label for="x"><h2>Salário</h2></label>
            <input type="text" name="x" id="x" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="y"><h2>Valor de Venda</h2></label>
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
        
        if(isset($_POST['x']) && !empty($_POST['x']) && isset($_POST['y'])){
            $fixo = $_POST['x'];
            $vendas = $_POST['y'];
            if($vendas>1500){
                $salario = $fixo + 45 + (($vendas - 1500) * 0.05);

            }
            else{
                $salario = $fixo + ($vendas * 0.03);
            }
            echo 'Sálario Atual = ' . $salario;
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