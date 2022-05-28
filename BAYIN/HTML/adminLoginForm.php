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
         <form action="processAdminLoginForm.php" method="POST">
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
         </form>
      </div>
   </body>
</html>