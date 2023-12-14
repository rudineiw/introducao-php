<?php
class Model {
	private $pdo;

	public function __construct() {
		$host = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "aulaphp";
		$porta = 3306;

		try {
			$this->pdo = new PDO("mysql:host=$host;port=$porta;dbname=$banco",$usuario,$senha);	
		} catch (PDOException $e) {
			die("Erro ao estabelecer a conexão com o banco de dados: " . $e->getMessage());
		}

	}

	public function listarProdutos() {
		$sql = "SELECT * FROM produtos";
		$stmt = $this->pdo->query($sql);
		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}

	public function incluirProduto($nome, $valor) {
		$sql = "INSERT INTO produtos (nome, valor) VALUES (:nome, :valor)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([':nome'=>$nome, ':valor'=>$valor]);
	}

	public function listarClientes() {
		$sql = "SELECT * FROM clientes";
		$stmt = $this->pdo->query($sql);
		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}

	public function dadosCliente($id) {
		$sql = "SELECT id,nome,email FROM clientes WHERE id=:id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([':id'=>$id]);
		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}

	public function incluirCliente($nome, $email) {
		$sql = "INSERT INTO clientes (nome, email) VALUES (:nome, :email)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([':nome'=>$nome, ':email'=>$email]);
	}

	public function editarCliente($id, $nome, $email) {
		$sql = "UPDATE clientes SET nome=:nome, email=:email WHERE id=:id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([':id'=>$id, ':nome'=>$nome, ':email'=>$email]);
	}

	public function removeCliente($id) {
		$sql = "DELETE FROM clientes WHERE id=:id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([':id'=>$id]);
	}

	public function __destruct() {
		$this->pdo = null;
	}
} 