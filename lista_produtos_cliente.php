<?php
    require_once "conexao.php";

    $sql   = "SELECT * FROM produto where situprod = 'Ativo' and qtdprod <> 0 order by descprod asc ";
    $query = $con->query($sql);

    $registros = $query->fetchAll();
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS_Prod/estilo_listaprod.css">

    <title>Regproduct</title>
  </head>
  <body>
    <div class="container"></br>
      <h1>Loja</h1></br>
      <!--<a class="btn btn-info btn-sm" href="lista_produtos.php">Manutenção de Produto</a>-->
      <a class="btn btn-info btn-sm" href="tela_login/index.php" onclick="return confirm('Tem certeza que deseja sair do usuário atual?')">Sair</a>
      <table class="table table-hover table-striped">
          <thead>
            <th>#</th>
            <th>Descrição:</th>
            <th>Descrição NF</th>
            <th>UM</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th></th>
          </thead>
          <tbody>
            <?php foreach ($registros as $linha): ?>
              <tr>
                  <td><?php echo $linha['codigo']; ?></td>
                  <td><?php echo $linha['descprod']; ?></td>
                  <td><?php echo $linha['descnot']; ?></td>
                  <td><?php echo $linha['unidmed']; ?></td>
                  <td><?php echo $linha['qtdprod']; ?></td>
                  <td><?php echo $linha['valoprod']; ?></td>
                  </td>

                  <td>
                      <a class="btn btn-warning btn-sm" href="busca_compra.php?codigo=<?php echo $linha['codigo']; ?>" onclick="return confirm('Tem certeza que deseja comprar esse produto?')">
                        Comprar
                      </a>
                  </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
