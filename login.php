<div class="container-sm mt-1" style="max-width: 500px;">
  <div class="text-center">
    <img src="assets/logo.png" style="width: 130px;height: 150px;margin-top:50px" />
  </div>
  <h3 class="text-center">Rekap Surat Masuk Keluar</h3>
  <p class="text-center">Silahkan login menggunakan username dan password</p>
  <form method="POST" action="action.php">
    <input type="hidden" value="login" name="action" />
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Username</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">Login</button>
    </div>
  </form>
</div>