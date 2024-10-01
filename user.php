<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
  {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url('assets/imgs/lbgc.jpg') no-repeat;
  background-size: cover;
  background-position: center;
}

.wrapper {
  width: 420px;
  background: transparent;
  backdrop-filter: blur(0px);
  box-shadow: 0 0 0px rgba(0, 0, 0, 0);
  color: white;
  border-radius: 0px;
  padding: 40px 50px;
}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
}


.wrapper .btn {
  width: 100%;
  height: 45px;
  background: rgba(5,5,5,0.4111);
  border: none;
  outline: none;
  border-radius: 40px;
  border-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: gold;
  font-weight: 600;
}
 
  </style>
</head>
<body>

  <div class="wrapper">
    <h1>SELECT USER</h1>
    <a href="admin.php"> <button type="submit" name="submit"  value="submit" class="btn" >ADMIN</button><br></a>
  </br>
    <a href="login.php"><button type="submit" name="submit"  value="submit" class="btn" >USER</button></a>
     
	 </div>

</body>
</html>
