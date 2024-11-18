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
        .container {
            width: 40%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 10);
            color: black;
            backdrop-filter: blur(30px);
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            background-size: cover;
            background-position: center;
            color: #ffffff;
            background-image: linear-gradient(170deg, rgb(0, 0, 0), gray);
            display:flex;
            align-items:center;
        }
        
        h2, label {
            text-align: center;
            color: white;
        }
        .botoes{
            display:flex;
            justify-content:space-between;
        }
    </style>
<body>

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