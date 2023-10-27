<html>
    <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <script type="text/javascript">

function validate(){

    var name = document.getElementById("name");

    var skill = document.getElementById("skill");

    var age = document.getElementById("age");

    if(name.value.trim() == "" || skill.value.trim() == "" || age.value.trim() == "")
    {
        alert("enter some values");

        return false;
    }
    else{

        return true;
    }
}

</script>
</head>


<body style="background-color: #dee2e6;">

<h1><b><?php echo $this->session->userdata('email'); ?>  -->>>  "TODO LIST CREATION"</b><h1>

<br><br>
<nav class="navbar">
<form onsubmit = "return validate()" action="<?php echo base_url('player/insert') ?>" method="post">
       
  <div class="mb-3">
   <h2> <label class="form-label">Name:</label></h2>
    <input type="text" class="form-auto" id="name" name="name">
  </div>

 <h2><label class="form-label">Skill:</label><br></h2>
  <select class="form-select" name="skill" id="skill" aria-label="Default select example">
  <option selected>Select</option>
  <option value="batsman">batsman</option>
  <option value="bowler">bowler</option>
  <option value="keeper">keeper</option>
</select><br><br>

  <div class="mb-3">
  <h2><label class="form-label">Age:</label></h2>
    <input type="text" class="form-auto" id="age" name="age">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

    </form>
<br>
</nav>
<br>




  <h3 style=float:left; class="btn btn-outline-success"><a href="<?php echo base_url('player/list')?>">view list</a></h3><br><br>


  <h3 class="btn btn-outline-success"><a href="<?php echo base_url('logout'); ?>">Logout</a><h3>

</body>

</html>




