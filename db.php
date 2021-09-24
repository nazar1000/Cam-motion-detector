<?php

//
session_start();
$global = array();
header("Content-Type: application/json; charset=UTF-8");

$servername = "127.0.0.1";
$user = "root";
$pass = "";
$database_name = "camera_cctv";

$conn = mysqli_connect($servername, $user, $pass, $database_name, 3306);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


// print_r($_POST);

if ($_POST["date"]) {
    // $_SESSION["testing"] = "not working";

    // sending data
    $_date = $_POST["date"];
    $_time = $_POST["time"];
    $_color = $_POST["color"];

    $query = "INSERT INTO cam_triggers (date, time, color) 
    VALUES ('$_date', '$_time', '$_color');";
    echo $query;
    //getting data for send data
    $result = mysqli_query($conn, $query);

    //Getting data for request

    // $query1 = "SELECT * FROM cam_triggers;";
    // $resultOut = mysqli_query($conn, $query1);
    // // $checked = $resultOut ? "true" : "false";
    // // echo $checked;
    // $resultCheckOut = mysqli_num_rows($resultOut); //returns arrays of row
    // // print_r($resultCheckOut);
    // if ($resultCheckOut > 0) { //if rows* are more then 0....
    //     while ($row = mysqli_fetch_assoc($resultOut)) { //converts the output to named arrays based on row name

    //         $dBData = array($row["trigger_id"], $row["date"], $row["time"], $row["color"]);
    //         array_push($global, $dBData);
    //     }
    // } else {

    //     array_push($global, "Error: " . mysqli_error($conn));
    // }
    mysqli_close($conn);


    // $myJSON = json_encode($global);
    // echo $myJSON;
    // die();

    $_SESSION["db-return"] = $global;
    // header('Location: '. "http://127.0.0.1/server/Database%20Trial");
    die();
}
