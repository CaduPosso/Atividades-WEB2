<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro</title>
</head>
<body>
    <h2>Cadastro de Carro</h2>
    <form method="post">
        Marca: <input type="text" name="marca" required><br>
        Modelo: <input type="text" name="modelo" required><br>
        Ano: <input type="number" name="ano" required><br>
        <input type="submit" name="submit" value="Cadastrar">
    </form>

    <?php
    class Carro {
        public $marca;
        public $modelo;
        public $ano;

        public function __construct($marca, $modelo, $ano) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function getDetalhes() {
            return "Carro: {$this->marca}, {$this->modelo}, {$this->ano}";
        }
    }

    if (isset($_POST['submit'])) {
        $carro = new Carro($_POST['marca'], $_POST['modelo'], $_POST['ano']);
        echo "<h3>Detalhes do Carro</h3>";
        echo "<p>" . $carro->getDetalhes() . "</p>";
    }
    ?>
</body>
</html>
