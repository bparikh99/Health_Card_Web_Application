<?php
session_start();
//$_SESSION['myusername'];
?>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Health Card</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
  
    </head>
</html>
<html>
   
   <head>
      <title>Log In Successfully </title>
   </head>
    <style>
        h3{
            padding-top: 20px;
}
    </style>
   
   <body>
      <h3 align="center" >Welcome To Your Account!!<br><br><br><?php echo"Welcome Patient id   ".$_SESSION['myusername'];?>
          <form action="request.php" method="post">
          <input type="submit" name="submit" value="Send Request To Doctor" class="btn btn-success" autocomplete="off">
              
          </form>
  </h3> 
        <?php
//    session_start();
    global $conn;
    $servername = "localhost:3308";
    $username = "bhavya";
    $password = "1111";
    $database="myDB";    
            
    $conn=mysqli_connect($servername,$username,$password,$database);
    @$_SESSION['myusername']=isset($_SESSION['myusername']) ? $_SESSION['myusername']:'';
    $sql="SELECT id,sym,sugg,file,dt FROM information WHERE id= '{$_SESSION['myusername']}'";
    $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result))
     {
           echo "Record Submitted by Doctor:<br>";
         echo'<tr> id: 
                  <td>'.$row["id"].'</td> 
                  </tr>
            <tr> Symptoms:
                  <td>'.$row["sym"].'</td> 
                  </tr>
            <tr> Suggestion:
                  <td>'.$row["sugg"].'</td> 
                  </tr>
            <tr>File:
            <td>< img src = add.php?name='.$row["file"].'width=200 height=200 ></td>
                   <tr>Date & Time:
                  <td>'.$row['dt'].'</td>
              </tr>';
     }
        mysqli_close($conn);
    ?>
       <h2><a href = "home1.php">Generate ID Card</a></h2>
      <h2><a href = "logout_pat.php">Sign Out</a></h2>
   </body>
   
</html>