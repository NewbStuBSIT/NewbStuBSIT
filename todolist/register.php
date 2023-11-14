<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register User</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <div class="container">
      <form action="register_user.php" method="POST">
        <label>Username:</label>
        <input type="username" name="username" required /><br />
        <label>Email:</label>
        <input type="email" name="email" required /><br />
        <label>Password</label>
        <input type="password" name="password" required  /><br />

        <input type="submit" name="submit" value="Register" />
      </form>
    </div>
  </body>
</html>
