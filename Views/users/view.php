<h1>View</h1>
<table>
  <thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>
        <th><a href="?url=Users/add"><i class="small material-icons teal-text">playlist_add</i></a></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $u): ?>
      <tr>
        <td><?=$u['nome']?></td>
        <td><?=$u['email']?></td>
        <td><?=$u['cpf']?></td>
        <td>
          <a href="?url=Users/getOne/<?=$u['id']?>"><i class="material-icons black-text">remove_red_eye</i></a>
          <a href="?url=Users/edit/<?=$u['id']?>"><i class="material-icons blue-text">edit</i></a>
          <a href="?url=Users/remove/<?=$u['id']?>"><i class="material-icons red-text">delete</i></a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
