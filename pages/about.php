<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>About Us</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}

.about-section{
    background: url("../images/4.jpg") no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}



.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 40px;
    font-weight: 900;
    font-family: "Times New Roman", Times, serif;
}

.text{
    font-size: 13px;
    font-family: Arial, Helvetica, sans-serif;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-evenly;
    font-weight: 700;
    font-size: 18px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}

  
      </style>
</head>
<body>
 <!--header-->
 <?php include('../includes/navigation.php'); ?>  
  <!-- header end-->
    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
           
            <p class="text">
                Hi everyone! Umeed Foundation is an NGO doing pet adoption service in Vikasnagar, Uttarakhand to take care of stray animals left on streets to survive.
                We rescue them, provide medical help to them  and give them a nice shelter to live. 
                Our aim is to give these pretty paws their forever homes and so, we wait for kind people like you to 
                adopt a puppy and take happiness with you. Visit our shelter care and adopt if you are in search of cute dogs. 
                Connect with us on our social media handles to explore more.
            </p>
           
            <div class="skills">
                <span> <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a> </span>
                <span><a href="www.instagram.com/pretty_p.a.w.s"><i class="fa fa-instagram" ></i></a></span>
                
            </div>
        </div>
    </div>
</body>
</html>