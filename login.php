<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design</title>
      <link rel="stylesheet" href="css/login.css">

   </head>
   <body>
     
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="action_login.php" method="POST">
            <div class="field">
               <input name="email" type="text" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input name="password" type="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
            </div>
            
         </form>
      </div>
   </body>
</html>
