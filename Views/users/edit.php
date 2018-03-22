<div class="row">
  <h1>Edit</h1>
  <form class="col s12" method="POST">

    <div class="row">
      <div class="input-field col s6">
        <input id="first_name" type="text" class="validate" name="nome" value="<?=$user['nome']?>" required>
        <label for="first_name">Nome</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <input id="email" type="email" class="validate" name="email" value="<?=$user['email']?>" required>
        <label for="email">Email</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <input  id="cpf" type="text" class="validate" name="cpf" value="<?=$user['cpf']?>" required>
        <label for="cpf">CPF</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <button class="btn right">Editar</button>
      </div>
    </div>

  </form>
</div>
