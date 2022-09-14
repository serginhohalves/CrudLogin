  <h1>Cadastro de Usuario</h1>
  <form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3 w-50">
      <label>Email</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3 w-50">
      <label>Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>