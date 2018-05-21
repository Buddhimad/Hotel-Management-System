<?php

class HotelController extends Controller
{
    function __construct(){
        parent::__construct();
       
    }

    public function index(){
        
        $this->view->render('index',1);
    }
    public function loadMeals(){
        $time=$_POST['time'];
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query="SELECT * FROM Meal WHERE Time='$time'";
        $result = $mysqli->query($sql_query);
        $list=array();
        $i=0;
        if (mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                $list[$i++]=$row['Type'];
            }
            //echo $list;
            echo json_encode( $list); 
        }
    }
}


?>