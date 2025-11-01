<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container{
    text-align: center;
    padding: 0px 20px;
    font-size: large;
}

 .forthe{
        color: red;
    }
    .ph, .password{
        background-color:lightgrey; 
        border: none;
         width: 400px;   
  height: 20px; 
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 3px;
    }
     input::placeholder{
        color: black;
        font-size: small;
        text-align: left;
    }
    .login{
        background-color: rgba(186, 199, 212, 1);
        border: none;
        border-radius: 5px;
         width: 420px;   
  height: 30px; 
  font-size: larger;
    }
    .signup{
color: rgba(41, 143, 233, 1);
    }
</style>
<body>
    <div class="container">
    <h1>Frostique</h1>
    <p><span  style="margin-right: 150px;">Luxury Warmth </span></p>
    <p><span  style="margin-left: 50px;" class="forthe">for the</span></p>
    <p> <span  style="margin-left: 250px;" >Modern You</span></p>
    <form class="form">
        <input type="text" class="ph" placeholder="ph.no,username or email"><br><br>
        <input type="text" class="password" placeholder="password"><br><br>
        <button class="login">Login</button>
    </form>
    <p>Forget password?</p>
    <p>Don't have an account? <a href="signup.php" class="signup">sign up</a></p>
    </div>
</body>
</html>