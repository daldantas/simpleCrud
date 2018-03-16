<?php
require_once "Core/Model.php";
class User extends Model
{
  public function insert($p)
  {
    $nome = $p['nome'];
    $email = $p['email'];
    $cpf = $p['cpf'];
    $q = "INSERT INTO users (nome, email, cpf) VALUES ('$nome', '$email', '$cpf')";
    $this->execute($q);
  }
  public function selectAll()
  {
  	$q = "SELECT * FROM users";
  	return $this->execute($q);
  }
}
?>