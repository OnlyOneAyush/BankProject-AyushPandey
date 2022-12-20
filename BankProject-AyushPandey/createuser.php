<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');   
.mainfolder {
  width: 100%;
  display: flex;
  background-image: url('./images/usercreation.jpg');
}

.container {
  flex: 0 1 700px;
  width: 100%;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #d9d9d9;
  border-radius: 15px;
  box-shadow: 5px 10px 10px rgba(0, 0, 0, .25);
}
button,input {
  font-weight: 800 solid bold;
  letter-spacing: 1.4px;
  font-family: 'Ubuntu', sans-serif;
}
button,input:hover {
  background-color: skyblue;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}
.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.button {
  margin-bottom: 0;
  text-align: left;
  position: absolute;
  bottom: 30px;
 left:40px;
}

.app-form-control{
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #4C4B4B;
  color: #4C4B4B;
  font-size: 14px;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #4C4B4B;
}

.app-form-button {
  cursor: pointer;
  background: none;
  border: none;
  margin-left: 20px;
  color: red;
  font-size: 14px;
  outline: none;
}

.app-form-button:hover {
  color:skyblue;
  background-color: red;
}

@media screen and (max-width: 520px) {
  *{
    letter-spacing:1px;
  }
  .container{
    margin-right: 20px;
    margin-left: 22px;
    margin-bottom: 40px;
  }
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 50px;
  }
  .app-form-button{
    margin-top:5px;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

    </style>
</head>
<body>
<?php
    include 'configure.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into Ayush(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray!You have created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
    <?php
    include 'navbar.php';
    ?>
    <style>
      
    </style>
    <h1 class="text-center">Create New Account</h1>
    <br>
    <div class="mainfolder">
  <div class="container">
    <div class="screen">
      <div class="screen-body">
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter Your Name" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter Your Email-Id" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Balance" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="Create" name="submit"></input>
              <input class="app-form-button" type="reset" value="Reset" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php
    include 'footer.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>