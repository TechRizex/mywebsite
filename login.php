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
    width: 300px;
    height: 45px;
  }
  .container h2{
    font: sansarif;
    margin-left:60px;
    font-size:50px;
    margin:auto;
    color:black;
    margin-top:1px;
  }
  .container button{
    width:140px;
  }


    </style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2> Login Form</h2>
                <form action="validation.php" method="post">
                   <div class="form-group">
                    <label>Username</label>
                     <input type="text" name="users" class="form-control">
                   </div>
                   <br>
                
                   <div class="form-group">
                    <label>Password</label>
                     <input type="password" name="password" class="form-control">
                   </div>
                   <br>
                   <button type="submit" class="btn btn-primary"> Login </button>
                   <a type="text" class="btn btn-success" href="signin.php">Create an account</a>
                </form>
</div>
             
        </div>
    </div>
    
</body>
</html>