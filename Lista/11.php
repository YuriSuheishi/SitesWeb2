<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
</head>
<body>
    
<br><br>
    <form action="" class="container" method="POST">
    <h1>Questão 11</h1><br>
    <h2>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nomeCompleto" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="nome">CPF</label>
            <input type="text" name="cpf" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="nome">Idade</label>
            <input type="text" name="idade" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                Enviar
            </button>
        </div>

        
    <?php

print '<pre>';
if(isset($_POST) && !empty($_POST)){
    print_r($_POST);
}
print '</pre>';    

?>
        
    </h2>
    </form>
</body>
</html>