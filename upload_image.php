
<html>
<head>

    <title>Welcome </title> 
    
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- image uploading style -->
    <style>
*{margin:0px; padding:0px;}

.upload{
 height:200px,
 width:100px,
 background-color:#fff,
 overflow:hidden
}
.header1 {
   position: fixed;
   width: 100%;
   height: 60px;
   background: #2802d1fa;
   top: 0;
   left: 0;
   color: white;
   z-index: 7;
}
.camera {
   background-image: -webkit-radial-gradient(circle, transparent 25%, #1e1e1e 25%, #1e1e1e 35%, transparent 35%, transparent 45%, #1e1e1e 45%);
   border-radius: .25em;
   display: inline-block;
   height: 2em;
   left: 50%;
   margin: -1em -1.5em;
   position: absolute;
 
   width: 3em;
   -webkit-filter: drop-shadow(0 2px 3px hsla(0,0%,0%,.25));
   overflow:hidden;
}
.camera:after {
   border: .25em solid #1e1e1e;
   border-bottom: none;
   border-radius: .25em .25em 0 0;
   content: '';
   height: .25em;
   left: .875em;
   position: absolute;
   top: -.5em;
   width: .75em;
   overflow:hidden;
}
.camera:before {
   background-color: #1e1e1e;
   content: '';
   height: .25em;
   left: .25em;
   position: absolute;
   top: -.25em;
   width: .5em;
 
}

div.upload input {
   display: block !important;
   width: 157px !important;
   height: 57px !important;
   opacity: 0 !important;
   overflow: hidden !important;
}
#box{
    / position: absolute; 
   /padding:2%;
  
   margin:10px auto;

}
#container{
    position:absolute;
   top:10%;
    left:40%;
    width:20%; 
    padding:2%;
   
    margin:10px auto;
   }
   #mydetails{
       position:absolute;
   margin-bottom:10%;
    margin-left:40%;
    width:50%; 
    padding:1%;
   
    margin:10px auto;
   
   }
   }
  


#image1{width:96% ; padding:2%; border:1px dashed green;}
#header5{background:#000000; color:white;text-align:center; padding:5%; height:20%}
#view-image{border-radius:5px; width:100%; overflow:hidden;}
#preview-image
{
    padding:1%;
    margin-top:10%;
     border-radius:10px
      solid #efefef; 
      max-width:100%;
      height:auto;
   }
#header001{    position: fixed;
   width: 100%;
   height: 60px;
   background: #2802d1fa
   top: 0;
   left: 0;
   color: white;
   z-index: 6;}
  </style>




<!-- styling navbar -->
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

<!-- main code -->

<body>


<div class="header"> 
    <div class="inner-header">
    <div class="logo"><a href="#"><h2 style="color:white;">BLOG-INN</h2></a></div> 
    <div class="navbar" ="right">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
      <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
      <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
      <a class="active" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>


 <div id="container" > 
 <form action="upload_file.php" method="post" enctype="multipart/form-data">
   

</form>
<br>
<div id="view-image">
   <h3 id="header5">PROFILE</h3>
   
 <div id="preview-image">
   image will show right here
   </div>

   <div class="upload">
    <div class="camera">
        <input type="file" id="image"/>
        
    </div>
    </div>

   <div id="mydetails">
  <form action="" >
  <label for="fname">Full name:</label><br>
  <input type="text" id="fname" name="fname"  size=30><br>
  <label for="lname">Age</label><br>
  <input type="text" id="lname" name="lname" size =30 ><br>
  <label for="email">Enter your email:</label>

<input type="email" id="email"
       pattern=".+@gmail.com" size="30" required>


  <label for="gender"> Gender</label><br>

  <select id="gender" name="gender" >
  <option  name=gender>Male</option>
  <option  name=gender>Female</option>
</select><br><br>
  <input type="submit" value="Submit">
</form>

</div>
   
  </div>

 </div>
</div>

 <script src="jquery-3.5.0.min.js"></script>
 <script src="script_file.js">
  

 </script>
      
</body>
</html>

