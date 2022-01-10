<?php include_once "../base.php";

if(isset($_FILES['path']['tmp_name'])){
    $data['path']=$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'],'../img/'.$data['path']);

    $data['name']=$_POST['name'];
    $Poster->save($data);
};

to("../back.php?do=poster");
?>
