<?php
include "../connection.php";
?>


<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Tela de Agendamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
        
    </style>
<body class="d-flex flex-column h-100">


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Lista de agendamentos</a>
                </li>
               
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Criar agendamento</h2>
        <form action="Preparando_Agendamento.php" method="post">

            <div class="mb-3 mt-3">
                <label for="data">Data do Agendamento:</label>
                <input type="date" class="form-control" name="data" placeholder="Enter email" name="data">
            </div>

            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Cliente
                </label>
                <select class="form-select" name="id_usuario">
                    <option>Selecione um Cliente</option>
                    <?php
                    $sql = 'SELECT * FROM usuarios WHERE id_grupo = 3';
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id_usuario']."'>".$row['nome']."</option>";
                        }
                    }
                    ?>
                </select>
                <br>
                <label class="form-check-label" for="servico">Escolha o serviço:</label>
                
                <select class="form-select" name="servico" id="servico">
                    <option value="1">Corte</option>
                    <option value="2">Barba</option>
                    <option value="3">Corte e Barba</option>
                </select>
                
            </div>
            <div class="botoes">
                <a href="Cadastrar_Usuarios.php" class="btn btn-success">+</a>
            <a href="index.php" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-primary">Continuar</button>
            </div>
        </form>
    </div>

</body>

</html>