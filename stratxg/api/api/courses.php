<?php
//Headers
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once  '../config/Database.php';
include_once '../models/Academy.php';

$database = new Database();
$db = $database->connect();

$course = new Academy($db);
$result = $course->read();

$num = mysqli_num_rows($result);

if($num > 0){
    $course_arr = array();
    $course_arr['data'] = array();
    while ($row = mysqli_fetch_array($result)){
        $course_item =array(
            'courseId'=> $row['course_id'],
            'title'=>$row['title'],
            'description'=>$row['description'],
            'category'=>$row['category'],
            'date'=>$row['classdate'],
            'outcome'=>$row['learning_outcome'],
            'image'=>$row['cimage'],
            'seats' => $row['cseats']
        );
        array_push($course_arr['data'],$course_item);
    }
    echo json_encode($course_arr);
}else{
    echo json_encode(
        array('message' => 'No Posts found')
    );
}
