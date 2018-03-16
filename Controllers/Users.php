<?php
require_once "Models/User.php";
class Users extends User
{
  public function index()
  {
    $dados['view'] = 'Views/users/view';
    $dados['users'] = $this->selectAll();
    return $dados;
  }
  public function add()
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $this->insert($_POST);
        $dados = $this->index();
    }
    else
    {
      $dados['view'] = 'Views/users/add';
    }
    return $dados;
  }
}
?>