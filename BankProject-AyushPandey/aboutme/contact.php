<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        .carousel-item{
            display: flex;
         margin-bottom: 10px;
          
        }
        left{
            float: left;
            height: 20px;
           
        }
        .calling{
            margin-left: 150px;
            color: red;
        }
       .right{
        float: right;
        align-items: center;
        margin-top: 120px;
        margin-left: 20px;
        font-weight: 600px;
      color: #033747;
        
       }
       .right p{
        color: lightgreen;
        font-weight: 700;
       }
       .right h1{
        margin-left: 100px;
       }
       .heading2{

        color:skyblue;
       }
     .homebutton{
     
        margin-left: 600px;
     }
     .homebutton button
     {
        height: 40px;
        width: 80px;
        font-weight: 900px;
        background-color:white;
       color:red;
        cursor: pointer;
     }
     .homebutton button:hover{
        
       
        background-color:red;
     }
    </style>
</head>
<body>
    <div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   
    <div class="carousel-item active">
    <div class="left">
      <img class="d-block w-80" src="../aboutme/images/call.webp" alt="First slide">
      </div>
      
      <div class="right"><h1 class=calling>CAll</h1>
                         <h2 class="heading2">Calling-Time:06:00AM-9:00PM</h2>
                         <h3>Contact-No:9999999999 </h3>
                         <p  >You can call in the given time if any problem arise</p>
     </div>
      </div>
    <div class="carousel-item">
    <div class="left">
      <img class="d-block w-40" src="../aboutme/images/emaill.webp" alt="Second slide"></div>
      <div class="right"><h1 class=calling>G-mail Service</h1>
                         <h2 class="heading2">Time:Always Available</h2>
                         <h3>Gmail-id:abcd@gmail.com </h3>
                         <p>You can G-mail your problem at any time</p>
     </div>
    </div>
    <div class="carousel-item">
    <div class="left">
      <img class="d-block w-100" src="../aboutme/images/insttttt.jpeg" alt="Third slide"></div>
      <div class="right"><h1 class=calling>Instagram</h1>
                         <h2 class="heading2">Time:Always Available</h2>
                         <h3>INSTA-ID:abbbbb </h3>
                         <p>You can also message your query meassage personally</p>
     </div>
    </div>
    <div class="carousel-item">
    <div class="left">
      <img class="d-block w-100" src="../aboutme/images/linkkk.webp" alt="four slide"></div>
      <div class="right"><h1 class=calling>Linkedin</h1>
                         <h2 class="heading2">Time:Always Available</h2>
                         <h3>Linkedin-Accountlinkedin.com/in/theayush </h3>
                         <p>You can also message your query meassage personally</p>
     </div>
    </div>
   
  </div>
</div>
</div>
<div class="homebutton">
<button type="button"> <a href="http://localhost:3000/index.php">Home</a> </button></div>
</body>
</html>