<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

<script type="text/javascript">

function validate(){

var email = document.getElementById("email");

var password = document.getElementById("password");

if(email.value.trim() == "") {

alert("email is empty");

document.getElementById("em").style.visibility="visible";

return false;
}

else if(password.value.trim() == ""){

  alert("password is empty");

  document.getElementById("pass").style.visibility="visible";
  
  return false;
}

else{

return true;

}
}

</script>
</head>

<nav class="navbar" style="background-color: #e3f2fd;">



    <body>

<br>
<?php
if(!empty($user)){

    echo $user;

}
?>

<br>
<br>
<div>
<form onsubmit="return validate()" action="<?php echo base_url('logincheck') ?>" method="post">
<br>
<h3><b> <label class="form-label">LOGIN</label></b><h3>
<br>
<div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="text" class="form-control" name = "email" id="email" placeholder="Email">
  </div>
  <h4> <label id="em" style="color:red; visibility:hidden;">invalid email</label> </h4>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">!</span>
  <div class="form-floating">
    <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
  </div>
  <h4> <label id="pass" style="color:red; visibility:hidden;">invalid password</label> </h4>
</div>

<br>

        <button type="submit" class="btn btn-primary">Submit</button><h3 class="btn btn-outline-success"><a href="<?php echo base_url('signup'); ?>">Signup</a><h3>

    </form>
</div>
</body>
</nav>

</html>