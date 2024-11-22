<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista de Agendamentos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column h-100">
<main role="main" class="flex-shrink-0">
     
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="Agendamento/agendar.php">Criar Agendamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Usuario/index.html">Cadastrar Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Agenda/index.php">Criar Agenda</a>
                </li>
               
            </ul>
        </div>
    </nav>

  <div class="container mt-3">
    <h2>Lista de Agendamentos</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome do Cliente</th>
          <th>Nome do Barbeiro</th>
          <th>Data e hora</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = 'SELECT c.nome as cliente, b.nome as barbeiro, data, horario FROM agendamentos inner join usuarios as c on c.id_usuario = agendamentos.id_usuario
          inner join agendas on agendas.id_agenda = agendamentos.id_agenda
          inner join usuarios as b on b.id_usuario = agendas.id_usuario
          ';
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "
                    <tr>
                      <td>".$row['cliente']."</td>
                      <td>".$row['barbeiro']."</td>
                      <td>".date('d/m/Y' ,strtotime($row['data']))." - " .$row['horario']."</td>
                      <td><button class='btn btn-danger'>Excluir</button></td>
                    </tr>
                  ";
              }
          }
        ?>
        
      
      </tbody>
    </table>
  </div>


    </main>
<footer class="footer bg-light bg-gradient">
      <div class="container">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</body>

</html>