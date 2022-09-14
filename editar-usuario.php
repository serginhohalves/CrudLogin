<h1>Editar Usuario</h1>

<?php

    $sql = "SELECT * FROM login WHERE id = " .$_REQUEST["id"];
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
   

?>

  <form action="login.php?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id;?>">

    <div class="mb-3 w-50">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?php print $row->email;?>" >
    </div>
    <div class="mb-3 w-50">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>