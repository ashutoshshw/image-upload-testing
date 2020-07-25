<DOCTYPE html>
    <html lang="em">
    <head>
    <meta name="viewport" content="width device-width, initial-scale=1"> 
    <title>Welcome </title> 
    <link href="htstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    .header
    {
      background-color: black;
    }
    .navbar {
      width: 100%;
      background-color: #555;
      overflow: auto;
    }
    .navbar a {
      float: left;
      padding: 12px;
      color: white;
      text-decoration: none;
      font-size: 17px;
    }
    .navbar a:hover {
      background-color: #000;
    }
    .active {
      background-color: #4CAF50;
    }
    @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
      }
    }
    </style>
    </head> 
    <body>
      
    <div class="header"> 
    <div class="inner-header">
    <div class="logo"><a href="#"><h2 style="color:white;">BLOG-INN</h2></a></div> 
    <div class="navbar" ="right">
    <a href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
      <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
      <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
      <a class="active" href="upload_image.php"><i class="fa fa-fw fa-user"></i> Profile</a>
    </div>
    </div>
    </div>
    </body>
    </html>