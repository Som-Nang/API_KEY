<?php
include_once ("core.php");
    $host= 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'assignment_db';
    $con = mysqli_connect($host,$username,$password,$db_name);
    $requestset =mysqli_query($con, "SELECT * from api_assignment");
    $json_array = array();
    while ($row =mysqli_fetch_assoc($requestset))
    {
        $json_array[] =$row;
    }
    print(json_encode($json_array));
// include_once ("core.php");
    // $db = mysqli_connect("localhost", "root", "", "assignment_db");
    // $response =array();
    // if ($con){
    //     $sql = "select * from api_assignment";
    //     $result = mysqli_query($con, $sql);
    //     if($result){
    //         header("content-type: JSON");
    //         $i = 0;
    //         while($row  = mysqli_fetch_assoc($result)){
    //             $response[$i]['id'] = $row ['id'];
    //             $response[$i]['ass_cover'] = $row ['ass_cover'];
    //             $response[$i]['ass_title'] = $row ['ass_title'];
    //             $response[$i]['ass_group_name'] = $row ['ass_group_name'];
    //             $response[$i]['subject_catag'] = $row ['subject_catag'];
    //             $response[$i]['release_date'] = $row ['release_date'];
    //             $response[$i]['rating'] = $row ['rating'];
    //             $response[$i]['lecturer_aproval'] = $row ['lecturer_aproval'];
    //             $i++;
    //         }
    //         echo json_encode($response,JSON_PRETTY_PRINT);
    //     }
        
    // }else{
    //     echo "DB not connected";
    // }

?>