<?php
    // load.php
    $con = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
    // $con = mysqli_connect("localhost", "root", "");
    // $db  = mysqli_select_db($con,"testing");
    $data = array();
    $query = "SELECT * FROM events ORDER BY id";

    $statement = $con->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();

    foreach($result as $row)
    {
        $data[] = array(
            'id'    =>  $row["id"],
            'title'    =>  $row["tittle"],
            'start'     =>  $row["start_event"],
            'end'       =>  $row["end_event"]
        );
    }

    echo json_encode($data);
?>