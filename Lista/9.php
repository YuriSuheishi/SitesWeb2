<!DOCTYPE html>
<html>
<head>
    <title>Questão 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
<br><br>
    <form action="" class="container" method="POST">
    <h1>Questão 9</h1><br>
        <div class="form-group">
            <label for="tipo"><h1>Tipo de Combustivel</h1></label>
            <select class="form-control" id="tipo" name="tipo">
                <option value=" "></option>
                <option value="cachaça">Álcool</option>
                <option value="gasosa">Gasolina</option>

            </select>
        </div>
        <div class="form-group">
            <label for="y"><h2>Quantidade</h2></label>
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
        
        if(isset($_POST['tipo']) && !empty($_POST['tipo']) && isset($_POST['y']) && !empty($_POST['y'])){
            $tipo = $_POST['tipo'];
            $qntd = $_POST['y'];
            if($tipo == 'gasosa'){
                $vf = 3.3 * $qntd;
                if($qntd > 20){
                    $vf = $vf - 2.64 - (($qntd - 20) * 0.06 * 3.3);
                }    
                else{
                    $vf = $vf - ($vf * 0.04);
                }
            }
            elseif($tipo == 'cachaça'){
                $vf = 2.9 * $qntd;
                if($qntd > 20){
                    $vf = $vf - 1.74 - (($qntd - 20) * 0.05 * 3.3);
                }    
                else{
                    $vf = $vf - ($vf * 0.03);
                }
            }
            echo 'Valor Final = ' . $vf;
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