<html>
<head>

<link rel="stylesheet" href="Login/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <script type="text/javascript">


function validate(){

var name = document.getElementById("nam");

var email = document.getElementById("em");

var password = document.getElementById("pass");

if(name.value.trim() == "") {

alert("name is empty");

document.getElementById("nam");

return false;
}

else if(email.value.trim() == ""){

  alert("email is empty");

  document.getElementById("em");

  return false;
}

else if(password.value.trim() == ""){

alert("password is empty");

document.getElementById("pass");

return false;
}

else{

    return true;
}
}
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #80ced6">
    <h3><b><label class="navbar-brand">SIGNUP</label></b></h3>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-dark">
                
    <form onsubmit="return validate()" action="<?php echo base_url('submit') ?>" method="POST">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="nam" name="name">
        </div>

        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="em" name="email">
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="pass" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button> <br><br>
        <h3 class="btn btn-outline-success"><a href="<?php echo base_url('login'); ?>">login</a><h3>

    </form>
</div>
</div>
</div>
</div>


<center>
<?php
if(!empty($user)){

    echo $user;
}
?>
</center>
</html>