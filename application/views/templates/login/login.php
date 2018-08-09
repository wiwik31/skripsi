<?php echo form_open('login_admin/login') ?>

  <label for="username">Masukkan Username</label>
  <input type="text" name="username"> <br>
  <label for="password">Masukkan Password</label>
  <input type="password" name="password">
  <br>
  <button type="submit" name="submit">LOGIN</button>
<?php echo form_close() ?>