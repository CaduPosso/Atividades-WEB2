<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo</title>
    <script>
        function mostrarCampos() {
            let tipo = document.getElementById("tipo").value;
            document.getElementById("carro").style.display = tipo === "Carro" ? "block" : "none";
            document.getElementById("moto").style.display = tipo === "Moto" ? "block" : "none";
        }
    </script>
</head>
<body>
    <h2>Cadastro de Veículo</h2>
    <form method="post">
        Tipo de veículo:
        <select name="tipo" id="tipo" onchange="mostrarCampos()" required>
            <option value="">Selecione</option>
            <option value="Carro">Carro</option>
            <option value="Moto">Moto</option>
        </select>
        
        <div id="carro" style="display:none;">
            Marca: <input type="text" name="marca"><br>
            Modelo: <input type="text" name="modelo"><br>
            Ano: <input type="number" name="ano"><br>
        </div>

        <div id="moto" style="display:none;">
            Marca: <input type="text" name="marca_moto"><br>
            Modelo: <input type="text" name="modelo_moto"><br>
            Cilindradas: <input type="number" name="cilindradas"><br>
        </div>

        <input type="submit" name="submit" value="Cadastrar">
    </form>

    <?php
    class Veiculo {
        protected $marca, $modelo;
        public function __construct($marca, $modelo) {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function exibir() {
            return "{$this->marca}, {$this->modelo}";
        }
    }

    class Carro extends Veiculo {
        private $ano;
        public function __construct($marca, $modelo, $ano) {
            parent::__construct($marca, $modelo);
            $this->ano = $ano;
        }
        public function exibir() {
            return "Carro: {$this->marca}, {$this->modelo}, {$this->ano}.";
        }
        public function abrirPorta() {
            return "O carro {$this->marca} {$this->modelo} está abrindo a porta!";
        }
    }

    class Moto extends Veiculo {
        private $cilindradas;
        public function __construct($marca, $modelo, $cilindradas) {
            parent::__construct($marca, $modelo);
            $this->cilindradas = $cilindradas;
        }
        public function exibir() {
            return "Moto: {$this->marca}, {$this->modelo}, {$this->cilindradas}cc.";
        }

        public function empinar() {
            return "A moto {$this->marca} {$this->modelo} está empinando!";
        }
    }

    if (isset($_POST['submit'])) {
        if ($_POST['tipo'] == "Carro") {
            $veiculo = new Carro($_POST['marca'], $_POST['modelo'], $_POST['ano']);
        } else {
            $veiculo = new Moto($_POST['marca_moto'], $_POST['modelo_moto'], $_POST['cilindradas']);
        }

        echo "<h3>Detalhes do Veículo</h3>";
        echo "<p>" . $veiculo->exibir() . "</p>";

        if ($veiculo instanceof Moto) {
            echo "<p>" . $veiculo->empinar() . "</p>";
        }
        if ($veiculo instanceof Carro) {
            echo "<p>" . $veiculo->abrirPorta() . "</p>";
        }
    }
    ?>
</body>
</html>
