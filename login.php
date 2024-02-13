<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
 
 body {
  background-image: url('images/bg-img.png');
}
  
  .column-form {
    float: left;
    width: 33.33%;
    padding: 15px; 
    margin-left: 35%;
	margin-top:10%;
    background-color: white;
  }
  
  
  input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    
    background-color: #dddddd;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 73%;
  }
  
  input[type=submit]:hover {
    background-color: black;
    color: white;
  }
  
  .backbutton {
	background-color: #555555;
    margin-left:5%;
    padding:1% 3% 1% 3%;
    color:white;
    font-size:medium;
}
  
</style>
</head>
<body>
<a href="index.php"><button class="button backbutton">Back</button></a>
    
      <div class="row">
        <div class="column-form">
          <h2 class="font">Login</h2><hr>
		  <?php if (isset($_GET['error'])){ ?>

<center><h6 style="color:firebrick;" class="error"><?php echo $_GET['error']; ?></h6></center>

<?php } ?>
<?php if (isset($_GET['mass'])){ ?>

<center><h4 style="color:firebrick;" class="error"><?php echo $_GET['mass']; ?></h4></center>

<?php } ?>
          <div>
            <form action="insertlogin.php" method="post">
                
			<!-- <input type="email" > -->
			<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
          
			<input type="password" name="pswd" id="email" class="form-control input-sm" placeholder="Password" required>
            
			<input type="submit" name="submit" value="Login" class="btn btn-info btn-block"><br><br>

			  <center><a href="register.php">For Registration Click Here</a></center>
            </form>
          </div>
        </div>
      </div>
      
</body>
</html> 