<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária - Gerenciamento de Veículos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        

        .imagem{
            align-items: center;
            text-align: center;
            align-content: center;
            align-self: center;
            width: 300px;
            height: 200px;
            margin-left: auto;
            margin-right: auto; 
            background-color: white;
        }
            
    </style>
</head>
<body>
    <div class="container my-3 ">
        <?php include "navbar.php"; ?>
        <?php include "./CRUD/mysql_connect.php"; ?>
        <section>
                <header class="card-header p-3 mb-3">
                        <h2>Veja os nossos veículos</h2>
                </header>
                <?php

                if (!isset($_POST['id']) && !empty($_POST['id'])) {
                $idDelete = $_POST['id'];
                $queryDelete = sprintf("DELETE FROM Carro WHERE id=$idDelete");
                $removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));
                print($removed);
                return;
                }
                $total = 0;

                $query = sprintf("SELECT * FROM Carro"); 
                $dados = mysqli_query($con, $query) or die(mysqli_error($con));
                $total = mysqli_num_rows($dados);
                ?>
                <?php

                for ($i = 0; $i < $total; $i++) {

                $linha = mysqli_fetch_assoc($dados);
                $id = $linha['ID'];
                $modelo = $linha['Modelo'];
                $marca = $linha['Marca'];
                $cor = $linha['Cor'];
                $preco = $linha['Preco'];
                $descricao = $linha['Descricao'];
                $foto = $linha['Foto'];
                ?>
                <div class="card p-2 my-3">
                        <div class="container row">
                            <div class="col-md-12 p-3">
                            <div class="row">
                                                <?php 
                                                    $filename = "img/{$foto}";
                                                    if (file_exists($filename)) { ?>
                                                    <div class="col-4">
                                                    <img width="300px" height="200px" src="<?php echo $filename; ?>">
                                                    </div>

                                                <?php        
                                                    }
                                                ?>
                                                <div class="col">
                                                <h3><?= $modelo ?></h3>
                                                <p>
                                                    <strong>Marca:</strong> <?= $marca ?><br>
                                                    <strong>Preço:</strong> R$ <?= number_format($preco, 2, ',', '.'); ?><br>
                                                    <strong>Cor:</strong> <?= $cor ?><br>
                                                    <strong>Descrição:</strong> <?= $descricao ?>
                                                </p>
                                                </div></div>
                    <div class="row justify-content-end">
                        <div class="col-xs">
                            <form action="editar.php" class="container" method="post">
                                <input id="<?php echo $id; ?>" name="id" type="hidden" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </div>
                        <div class="col-xs">
                            <form action="./CRUD/delete.php" class="container" method="post">
                                <input id="<?php echo $id; ?>" name="id" type="hidden" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
        <?php
        }
        ?>
        </section>

        <?php include "footer.php"; ?>    
    </div>
    
</body>
</html>
