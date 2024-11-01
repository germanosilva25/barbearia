<?php
include "../connection.php";

$sql = "SELECT * FROM agendas inner join usuarios on usuarios.id_usuario = agendas.id_usuario";
$result = $conn->query($sql);

// echo "<pre>";
// print_r([
//     'agendamento' => $_POST,
//     'result' => $result,
// ]);



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista_de_usuarios.php">Lista de usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container mt-3">
  <h2>Lista de usuários</h2> 
  <h2>Agendamentos disponíveis para o dia: <?php echo $_POST['data']; ?></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Barbeiro</th>
        <th>Dia da Semana</th>
        <th>Horário</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row['nome']."</td><td>".$row['dia_da_semana']."</td><td>".$row['horario']."</td></tr>";
        }
    }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>