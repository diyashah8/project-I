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
    .form{
background-color:white; 
        border: 3px solid rgba(217, 217, 217, 1); 
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
.country{
    background-color:white; 
        border: 3px solid rgba(217, 217, 217, 1); 
         width: 430px;   
  height: 34px; 
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 3px;
}
    .signup{
        background-color: rgba(186, 199, 212, 1);
        border: none;
         width: 425px;   
  height: 38px; 
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 3px;
    }
    .login{
        color: rgba(41, 143, 233, 1);
    }
</style>
<body>
    <div class="container">
        <h1>Sign up</h1>
    <form type="form">
<input type="text" class="form" placeholder="First name" required><br><br>
        <input type="text" class="form" placeholder="Last name"required><br><br>
       
        <input type="text" class="form" placeholder="Email" required><br><br>
        <input type="date" class="form" placeholder="Birthdate"><br><br>
        <select id="country" class="country" name="country">
  <option value="">Country</option>
  <option value="np">Nepal</option>
  <option value="in">India</option>
  <option value="us">United States</option>
  <option value="uk">United Kingdom</option>
  <option value="ca">Canada</option>
  <option value="au">Australia</option>
</select><br><br>
 <input type="number" class="form" placeholder="Number" required><br><br>
  <input type="password" class="form" placeholder="Password" name="password" required><br><br>
  <input type="password" class="form" placeholder="Confirm_password" name="confirm_password" required><br><br>
        <button class="signup">Sign up</button>
    </form>
    <p>Already have an account? <a href="Login.php" class="login">Login</a></p>
    </div>
</body>
</html>