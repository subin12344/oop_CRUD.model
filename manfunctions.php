<?php

include 'config.php';

class ManFunctions extends DB {
    function getalldata($link, $table) {
        $query = "SELECT * from $table";
        $result = mysqli_query($link, $query);
        $res = [];
        if (mysqli_num_rows($result) > 0) {
            $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $res;
    }

    function getPaticularEmployee($link, $table, $empid) {
        $query = "SELECT * from $table where id=$empid";
        $result = mysqli_query($link, $query);
        $res = [];
        if (mysqli_num_rows($result) > 0) {
            $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $res;
    }

    function create() {
        extract($_REQUEST);
        $fname = $_FILES['profilepic']['name'];
        $tr = explode('.', $fname);
        $ext = strtolower(end($tr));
        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {

            $dir = 'profilepic';
            $newfname = $empid . '.' . $ext;
            $profilepic_path = $dir . '/' . $newfname;
            move_uploaded_file($_FILES['profilepic']['tmp_name'], $profilepic_path);
            $query = "INSERT INTO emp(id,name,email,profilepic) values('$empid','$empname','$empemail','$profilepic_path')";
            $result = mysqli_query($link, $query);
            if ($result) {
                header('location:create.php');
            } else {
                echo mysqli_error($link);
            }
        } else {
            echo 'You have choosen ' . $ext . ' file. Please choose png or jpg or jpeg file.';
        }
    }

    function update() {
        extract($_REQUEST);
        if ($_FILES['profilepic']['size'] == 0) {
            $query = "UPDATE emp set name='$empname',email='$empemail' where id='$empid'";
            $result = mysqli_query($link, $query);
            if ($result) {
                header('location:retrive.php');
            } else {
                echo mysqli_error($link);
            }
        } else {
            $fname = $_FILES['profilepic']['name'];
            $dd = explode('.', $fname);
            $ext = strtolower(end($dd));

            if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
                $dir = 'profilepic';
                $newfname = $empid . '.' . $ext;
                $profilepic_path = $dir . '/' . $newfname;
                move_uploaded_file($_FILES['profilepic']['tmp_name'], $profilepic_path);

                $query = "UPDATE emp set name='$empname',email='$empemail',profilepic='$profilepic_path' where id='$empid'";
                $result = mysqli_query($link, $query);
                if ($result) {
                    header('location:retrive.php');
                } else {
                    echo mysqli_error($link);
                }
            } else {
                echo 'You have choosen ' . $ext . ' file. Please choose png or jpg or jpeg file.';
            }
        }
    }

    function delete() {
        extract($_REQUEST);
        $query = "SELECT profilepic from emp where id=$empid";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);
        $profilepic_path = $row['profilepic'];
        if (file_exists($profilepic_path)) {
            unlink($profilepic_path);
        }
        $dquery = "delete from emp where id=$empid";
        $result = mysqli_query($link, $dquery);
        if ($result) {
            header('location:retrive.php');
        }
    }

}

$mf = new ManFunctions();
extract($_REQUEST);
$link=$mf->connection();
$_REQUEST['link']=$link;
if (isset($submit) && $submit == 'create') {
    $mf->create();
} else if (isset($submit) && $submit == 'update') {
    $mf->update();
} else if (isset($submit) && $submit == 'delete') {
    $mf->delete();
}
