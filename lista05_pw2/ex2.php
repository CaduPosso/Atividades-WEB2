<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
</head>
<body>
    <h2>Editar Carro</h2>
    <form method="post">
        Marca: <input type="text" name="marca" required><br>
        Modelo: <input type="text" name="modelo" required><br>
        Ano: <input type="number" name="ano" required><br>
        <input type="submit" name="submit" value="Cadastrar">
    </form>

    <?php
    class Carro {
        private $marca;
        private $modelo;
        private $ano;

        public function __construct($marca, $modelo, $ano) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function setMarca($marca) { $this->marca = $marca; }
        public function setModelo($modelo) { $this->modelo = $modelo; }
        public function setAno($ano) { $this->ano = $ano; }

        public function getMarca() { return $this->marca; }
        public function getModelo() { return $this->modelo; }
        public function getAno() { return $this->ano; }

        public function getDetalhes() {
            return "Carro: {$this->marca}, {$this->modelo}, {$this->ano}";
        }
    }

    session_start();
    if (!isset($_SESSION['carro']) && isset($_POST['submit'])) {
        $_SESSION['carro'] = new Carro($_POST['marca'], $_POST['modelo'], $_POST['ano']);
    }

    if (isset($_SESSION['carro'])) {
        $carro = $_SESSION['carro'];

        if (isset($_POST['atualizar'])) {
            $carro->setMarca($_POST['nova_marca']);
            $carro->setModelo($_POST['novo_modelo']);
            $carro->setAno($_POST['novo_ano']);
        }

        echo "<h3>Detalhes do Carro</h3>";
        echo "<p>" . $carro->getDetalhes() . "</p>";

        echo '<h3>Alterar Informações</h3>
        <form method="post">
            Nova Marca: <input type="text" name="nova_marca"><br>
            Novo Modelo: <input type="text" name="novo_modelo"><br>
            Novo Ano: <input type="number" name="novo_ano"><br>
            <input type="submit" name="atualizar" value="Atualizar">
        </form>';
    }
    ?>
</body>
</html>
