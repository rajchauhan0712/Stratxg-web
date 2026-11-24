<?php

function getLoggedInUser($con,$userEmail,$userType){
    $qry = mysqli_query($con,"select * from students_tbl where email='$userEmail' and type='$userType'");
    if(mysqli_num_rows($qry)){
        $row = mysqli_fetch_array($qry);
        return $row;
    }
    return null;
}

function getOrderCourse($con,$userId){
    $qry = mysqli_query($con,"select od.student_id,
    od.course_id,
    cr.title,
    cr.cimage
    from course_order_tbl AS od
    INNER JOIN add_course_db AS cr ON od.course_id = cr.course_id where od.student_id='$userId'");
    if(mysqli_num_rows($qry)){
        $row = mysqli_fetch_all($qry,MYSQLI_ASSOC);
        return $row;
    }
    return null;
}