  
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
    <link rel="stylesheet"  type ="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
body{
    padding:0px;
    margin:0px;
    background-color:aqua;
    
  }
  .container
  {
    margin: 200px 500px 400px 500px;

     
  }
  .form-group input{
    width: 390px;
    height: 45px;
  }
  .container h2{
    font: sansarif;
    margin-left:300px;
    font-size:50px;
    margin:auto;
    color:black;
    margin-top:-100px;
   
    
  }
.container button {
    width:200px;
}
.container   a {
    width:190px;
}
  </style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2> Registration Form   </h2>
                <form action="registration.php" method="post">
                    
                   
                   <div class="form-group">
                    <label>Username</label>
                     <input type="text" name="users" class="form-control">
                   </div>
                   
                   <div class="form-group">
                    <label>Password</label>
                     <input type="password" name="password" class="form-control">
                   </div>
                 
                
                   <div class="form-group">
                    <label>Email</label>
                     <input type="text" name="email" class="form-control">
                   </div>
                   
                   <div class="form-group">
                    <label>Mobile Number</label>
                     <input type="text" name="mobilenumber" class="form-control">
                   </div>
                
                   <div class="form-group">
                    <label>Current City Name</label>
                     <input type="text" name="currentcname" class="form-control">
                   </div>
                  <br>
                   <button type="submit" class="btn btn-primary"> Register </button>
                  <a type="text" class="btn btn-success" href="login.php">Login</a>
                </form>
</div>
             
        </div>
    </div>
    
</body>
</html>