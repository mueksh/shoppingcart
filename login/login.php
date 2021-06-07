<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
  <body>

  <!--navbar section-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="height: 50px;">
  <a class="navbar-brand text-danger  nav-link disabled"><h2>Darwin Art Company</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
    <li class="nav-item active">
        <a class="nav-link" href="http://localhost/shoppingcart/Admin/index.html">OwnerPage<span class="sr-only"></span></a>
      </li>
    
    <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="signin.php">Signup<span class="sr-only"></span></a>
      </li>
    
      </li>
    </ul>
  </div>
</nav>


<div id="login">
       
       <div class="container my-3 mt-5" style=" width:500px; background: #555;">
           <div id="login-row" class="row justify-content-center align-items-center">
               <div id="login-column" class="col-md-8">
                   <div id="login-box" class="col-md-12">
                       <form action="validation.php" method="post">
                           <h3 class="text-center text-info">Login</h3>

                           <hr>

                           <div class="form-group">
                            <div class="mb-3">
    <input placeholder="UserName/Email" Required type="email" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
                          </div>
                         
                           <div class="form-group">
                           <div class="mb-3">
   
                          
   
   <input  placeholder="Password" Required name="password" type="password" class="form-control" id="exampleInputPassword1">
 </div>


                           </div>

                           <div class="form-group">
        
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                           
                           <div id="register-link" class="mt-auto text-center mb-3">
                               <a href="signin.php" class="text-info">Register here</a>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div> 


    <style>
  body{
	width:100%;
	height:93vh;
	background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)), url(./imgs/11.jpg);
	background-size: cover;
	color: white; 
}

.bg-primary{
	background: #009688!important;
}
  </style>
    


   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
</body>
</html>