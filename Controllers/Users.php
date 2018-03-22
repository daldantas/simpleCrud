<?php
require_once "Models/User.php";
class Users extends User
{
  private $dados;
  public function index()
  {
    $this->dados['view'] = 'Views/users/view';
    $this->dados['users'] = $this->selectAll();
    return $this->dados;
  }

  public function add()
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $this->insert($_POST);
        $this->dados = $this->index();
    }
    else
    {
      $this->dados['view'] = 'Views/users/add';
    }
    return $this->dados;
  }
  
  public function edit($id)
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $_POST['id'] = $id;
        $this->update($_POST);
        $this->dados = $this->index();
    }
    else
    {
      $this->dados['user'] = $this->selectOne(['id'=>$id]);
      $this->dados['view'] = 'Views/users/edit';
    }
    return $this->dados;
  }
  public function remove($id)
  {
    $this->delete(['id'=>$id]);
    $this->dados = $this->index();
    return $this->dados;
  }
}
?>