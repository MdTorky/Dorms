<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="Style Sign in.css">
  <script type="text/javascript" src="Script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title>Sign in</title>

 
</head>

<body>


  <div class="log-cn">
  <img src="Images\logo.png" alt="logo" class="logo" width="200" height="200">
  </div>

<div class="background">
  <div class="shape"></div>
  <div class="shape"></div>
</div>


  <div id="box">
    
    <h2 class="sign">Sign In</h2>

        <div class="align">

        <label class="label">
            <input type="radio" id="student" name="choose" class="radio" value="student" onclick="a1" checked>
            <div class="radio-btns">
            <img src="Images\Student.png"><p> Student </p></div>
        </label>

        <label class="label">
            <input type="radio" id="admin" name="choose" class="radio" value="admin" onclick="admin()">
            <div class="radio-btns">
            <img src="Images\Admin.png"><p> Admin </p></div>
        </label>

        <label class="label">
            <input type="radio" id="managment" name="choose" class="radio" value="managment" onclick="AM()">
            <div class="radio-btns">
            <img src="Images\Accomadation Manager.png"><p> Accomadation<br>Manager<br> </p></div>
        </label>
    </div>


    <form id="form" method="post" action="Sign in-inc.php">
      <?php if(isset($_GET["error"])) {?>
        <p class="error"><?php echo $_GET["error"];?></p>
        <?php } ?>
    <center><input type="text" class="id" id="ID" placeholder="User ID" name="ID" >
    <input type="password"  class="pass" id="Password" placeholder="Password" name="Password" >
    <i class="far fa-eye" id="togglePassword"></i>
    <!-- <button type="button" name="submit" class="submit" value="Sign In" id="login" > -->
    <button type="submit" name="submit" class="submit">Sign In</button>
    </center>
  </form>
    </div>
    

<script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.getElementById("Password");
      togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
      });
  
    </script>
   
                
     
</body>

</html>