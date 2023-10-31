<html>
    <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <script type="text/javascript">

function validate(){

    var no = document.getElementById("no");

    var name = document.getElementById("name");

    var skill = document.getElementById("skill");

    var age = document.getElementById("age");

    if(no.value.trim() == "" || name.value.trim() == "" || skill.value.trim() == "" || age.value.trim() == "")
    {
        alert("enter all the values");

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

<h1>Edit Player</h1>
<br>

<form onsubmit = "return validate()" action="<?php echo base_url('player/update') ?>" method="post" novalidate>
       
<form>

  <h2><label class="form-label">No:</label><h2>
  <div class="mb-3">
    <input type="text" class="form-auto" id="no" name="no" value="<?php echo $player->no; ?>">
  </div>

  <h2><label class="form-label">Name:</label><h2>
  <div class="mb-3">
    <input type="text" class="form-auto" id="name" name="name" value="<?php echo $player->name; ?>">
  </div>

  <h2> <label class="form-label">Skill:</label></h2>
  <select class="form-select" name="skill" value="<?php echo $player->skill; ?>" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="batsman">batsman</option>
  <option value="bowler">bowler</option>
  <option value="keeper">keeper</option>
</select><br><br>

  <h2><label class="form-label">Age:</label><h2>
  <div class="mb-3">
    <input type="text" class="form-auto" id="age" name="age" value="<?php echo $player->age; ?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

    </form>
</nav>

</body>
</html>




