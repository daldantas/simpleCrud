<?php
require_once "Core/Model.php";
class User extends Model
{

  private $q;
  private $id;
  private $nome;
  private $email;
  private $cpf;

  protected function insert($par)
  {
    $this->nome = $par['nome'];
    $this->email = $par['email'];
    $this->cpf = $par['cpf'];
    $this->q = "INSERT INTO users (nome, email, cpf) VALUES ('$this->nome', '$this->email', '$this->cpf')";
    $this->execute($this->q);
  }

  protected function selectAll()
  {
  	$this->q = "SELECT * FROM users";
  	return $this->execute($this->q);
  }

  protected function selectOne($par)
  {
    $this->id = $par['id'];
    $this->q = "SELECT * FROM users WHERE id = '$this->id'";
    return mysqli_fetch_assoc($this->execute($this->q));
  }

  protected function update($par)
  {
    $this->id = $par['id'];
    $this->nome = $par['nome'];
    $this->email = $par['email'];
    $this->cpf = $par['cpf'];
    $this->q = "UPDATE users SET nome = '$this->nome', email = '$this->email', cpf = '$this->cpf' WHERE id = '$this->id'";
    return $this->execute($this->q);
  }

  protected function delete($par)
  {
    $this->id = $par['id'];
    $this->q = "DELETE FROM users WHERE id = '$this->id'";
    return $this->execute($this->q);
  }
}
?>