<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <form action="user_login_action.php" method="POST">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required />
        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id="psw"
          required
        />
        <label>
          <input type="checkbox" checked="checked" name="remember" /> Remember
          me
        </label>
        <label>
          <input type="checkbox" onclick="showPassword()" /> Show Password
        </label>
        <button type="submit"><a href="create_todo.php">Login</button>
      </form>
      <div class="options">
        <a href="forgot.php">Forgot Password?</a>
        <a href="register.php">Create Account</a>
        
      </div>
    </div>
    <script src="login.js"></script>
  </body>
</html>
