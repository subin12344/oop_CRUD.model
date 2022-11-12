<?php
include 'manfunctions.php';
extract($_REQUEST);
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
                $rows=$mf->getPaticularEmployee($link, 'emp', $empid);
                if(!empty($rows)){
                    ?>
                <form class="empform" id="updateform" method="post" action="manfunctions.php" enctype="multipart/form-data">
                        <table cellspacing="20">
                            <tr>
                                <th colspan="2"><center>New Employee Form</center> <span id="update-status"></span></th>
                            </tr>
                            <?php
                            
                           foreach($rows as $row) {
                                ?>

                                <tr>
                                    <td>Emp ID</td>
                                    <td><input type="text" name="empid" id="empid"  value="<?= $row['id'] ?>" readonly="" /></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="empname" id="empname" value="<?= $row['name'] ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="empemail" id="empemail"  value="<?= $row['email'] ?>"/></td>
                                </tr>
                                <tr>
                                    <td>Photo</td>
                                    <td><img src="<?= $row['profilepic'] ?>" alt="Profile Picture" width="200" height="200"/></td>
                                </tr>
                                <tr>
                                    <td>Change(optional)</td>
                                    <td><input type="file" name="profilepic"  id="profilepic" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="sbtn" name="submit" id="submit" value="update">Update</button></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </form>
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


