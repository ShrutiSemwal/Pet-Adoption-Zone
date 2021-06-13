<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umeed Foundation</title>

  <style>
      .showcase {
  background: var(--primary-color);
  color: #fff;
  height: 100vh;
  position: relative;
}

.showcase:before {
  content: '';
  background: url('https://images.pexels.com/photos/406014/pexels-photo-406014.jpeg?cs=srgb&dl=pexels-lumn-406014.jpg&fm=jpg') no-repeat center center/cover;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.showcase .showcase-inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100%;
}

.showcase h1 {
  font-size: 4rem;
}

.showcase p {
  font-size: 1.3rem;
}

.btn {
  display: inline-block;
  border: none;
  background: var(--primary-color);
  color: #fff;
  padding: 0.75rem 1.5rem;
  margin-top: 1rem;
  transition: opacity 1s ease-in-out;
  text-decoration: none;
}

.btn:hover {
  opacity: 0.7;
}
    </style>
</head>
<body>
  <!--header-->
<?php include('../includes/navigation.php'); ?>  
  <!-- header end-->
 
  <header class="showcase">
    <div class="container showcase-inner">
      <h1>Umeed Foundation</h1>
      <h2>Welcome! Pretty Paws here</h2>
      <p>Pet Adoption Service | Explore our website to know more.</p>
      <a href="#" class="btn">Read More</a>
    </div>
  </header>
  
 
</body>
</html>