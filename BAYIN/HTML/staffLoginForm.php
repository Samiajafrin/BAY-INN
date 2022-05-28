<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="../CSS/loginstyle.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="processStaffLoginForm.php" method="POST">
            <div class="field">
               <input type="text" name="username" required>
               <label>User name</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="staffRegistrationForm.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>