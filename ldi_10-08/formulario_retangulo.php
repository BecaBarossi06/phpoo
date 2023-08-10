<!DOCTYPE html>
<html>
<head>
    <title>Formulário para calcular um retângulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">largura:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'retangulo_09_08.php';

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];
            $area = new Retangulo($largura, $altura);

            echo "Sua área é: ".$area->calcular_area();
            echo "<br>"."Seu perimetro é: " .$area->calcular_perimetro();
        }
        ?>
    </div>
</body>
</html>