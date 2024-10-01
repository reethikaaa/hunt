<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="OVER OVER VIEW port" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" href="stylec.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100%
}
body::before{
   content: '';
   position: absolute;
   height: 100%;
   width: 100%;
   background: url(assets/imgs/lbgc.jpg)no-repeat;
   background-position: center;
   background-size: cover;
}
.login-wrapper{
    width: 400px;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
    backdrop-filter: blur(1px);
    -webkit-backdrop-filter: blur(1px);
}
form{
    display: flex;
    flex-direction: column;
}
form h1{
    font-size: 2rem;
    color:aliceblue;
    margin-bottom: 20px;
}
.input-field{
    position: relative;
    margin: 15px 0;
    border-bottom: 2px solid white;
}
.input-field input{
    width: 100%;
    height: 40px;
    background: transparent;
    border: none;
    outline: none;
    color:#f5f5f5;
    font-size: 1rem;
}
.input-field label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    color:azure;
    font-size: 1rem;
    pointer-events: none;
    transition: 0.3s ease;
}
.input-field input:focus~label,
.input-field input:valid~label{
    transform: translateY(-120%);
    font-size: 0.8rem;
    top: 10px;
}
.password-options{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 25px 0 35px 0;
    color: white;
}
.password-options label{
    display: flex;
    align-items: center;
}
#remember{
    accent-color: white;
}
.password-options label p{
    margin-left: 8px;
}
.login-wrapper a{
    color: #efefef;
    text-decoration: none;
}
.login-wrapper a:hover{
    text-decoration: underline;
}
button{
    background:white;
    color: black;
    font-size: 1rem;
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 3px;
    border: 2px solid transparent;
    cursor: pointer;
    transition: 0.3s ease;  
}
button:hover{
    background: rgba(255, 255, 255, 0.15);
    color: white;
    border-color: white;
}
.account-options{
    text-align: center;
    margin-top: 30px;
    color: white;
}
    </style>
    <body>
        <div class="login-wrapper">
            <form action="logconc.php" method="post">
                <h1>LOGIN</h1>
                <div class="input-field">
                    <input type="text" name="user" placeholder="username" required>
                    <label>Enter your Username</label>
                </div>
                <div class="input-field">
                    <input type="password" name="pass" placeholder="password" required>
                    <label>Enter your Password</label>
                </div>
                <div class="password-options">
                    <label fot="remember">
                        <input type="checkbox" id="remember">
                        <p>Remember Me</p>
                    </label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" name="submit"  value="submit" class="btn" >Login</button>
                <div class="account-options">
                    <p>Don't have an Account? <a href="reg.php">REGISTER</a></p>
                </div>
            </form>
        </div>
    </body>
</html>