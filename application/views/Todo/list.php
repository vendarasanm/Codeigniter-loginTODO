
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    
  <h1><b>TODO LIST</b></h1>
    <br>

    <table class="table table-dark table-striped" border="2">
        <thead>
            <tr>
                <th>no</th>

                <th>name</th>

                <th>skill</th>

                <th>age</th>

                <th>Edit</th>
                
                <th>Delete</th>
            </tr>
        </thead>

<tbody>
        <?php if (!empty($player)): ?>

        <?php foreach($player as $data): ?>

             <tr>

                 <td><?php echo $data->no; ?></td>

                 <td><?php echo $data->name; ?></td>

                 <td><?php echo $data->skill; ?></td>

                 <td><?php echo $data->age;?></td>
                       
                 <td><a href="<?php echo base_url('player/edit/'.$data->no)?>">Edit</a></td>

                 <td><a href="<?php echo base_url('player/delete/'.$data->no)?>">Delete</a></td>

             </tr>

                <?php endforeach; ?>

            <?php else: ?>
                
            <?php endif; ?>

        </tbody>

    </table>
    

   &nbsp <h3 class="btn btn-outline-success"><a href="<?php echo base_url('player')?>">create player</a><h3><br><br>


</body>
</html>
