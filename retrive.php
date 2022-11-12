<?php
include 'manfunctions.php';
?>
<!doctype html>
<html>
    <head>
        <title>Employee list</title>
        <link href="css/crudstyles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="left">
                <?php require 'menu.php'; ?>
            </div>
            <div class="right">
                <?php
                
                    ?>
                    <h3>Employee List</h3>
                    <table class="emplist">
                        <thead>
                            <tr>
                                <th>Emp id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          $rows= $mf->getalldata($link,'emp');
                          
                          if(!empty($rows)){
                              foreach($rows as $row){
                                ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><img src="<?= $row['profilepic'] ?>" width="100" height="100"></td>
                                    <td>
                                        <a href="edit.php?empid=<?= $row['id'] ?>">Edit</a> | 
                                        <a href="manfunctions.php?empid=<?= $row['id'] ?>&submit=delete" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                    </td>
                                </tr>

                                <?php
                              }
                            ?>
                        </tbody>
                    </table>

                    <?php
                } else {
                    echo 'Record Not found';
                }
                ?>
            </div>
        </div>

<!--        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/myscript.js" type="text/javascript"></script>-->

    </body>
</html>




