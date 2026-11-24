<?php
class Academy
{
    private $conn;
    private $table = 'add_course_db';

    public $courseId;
    public $CourseHeading;
    public $CourseContent;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read(){
//        $qry = "SELECT  course_id,title, description, category, classdate, learning_outcome, cimage, cseats FROM $this->table a LEFT JOIN course_header_db c ON course_id = c.course_head_id ORDER BY title ASC";
        $qry ="SELECT course_id, title, description, category, classdate, learning_outcome, cimage, cseats FROM $this->table ORDER BY title ASC";
        $run = mysqli_query($this->conn, $qry);
        return $run;
    }

//    public function find_course(){
//        $qry = "select a.course_id as courseId, c.course_header_id, c.course_content FROM $this->table a LEFT JOIN course_header_content c ON a.course_id = c.course_id WHERE a.course_id = c.$this->courseId";
//        $run = mysqli_query($this->conn, $qry);
//        $datas = array();
//        if(mysqli_num_rows($run) > 0){
//            while($row = mysqli_fetch_array($run)){
//                $this->courseId = $row['courseId'];
//                $this->
//            }
//        }
//    }
}