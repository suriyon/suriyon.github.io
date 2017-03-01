<?php
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id = $_GET['id'];
        
        require_once('dbconnect.php');
        $sql = "select * from student where id = '" . $id . "'";

        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_array($result);

        $students = array();

        array_push($students, array(
            "id" => $data['id'],
            "name" => $data['name'],
            "age" => $data['age']
        ));

        echo json_encode(array("students"=>$students));

        mysqli_close($con);
    }
?>