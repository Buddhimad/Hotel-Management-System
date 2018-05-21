<?php

Class OrderController extends Controller{

    function __construct(){
        parent::__construct();
        echo "Order controller";
    }
    
    public function saveOrder(){
        $rn=$_POST['roomno'];
        $na=$_POST['name'];
        $time=$_POST['time'];
        $meal=$_POST['meal'];
        /*
            1)reservation price update according to the meal
            2)order save

        */
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query="SELECT * FROM Meal where Time='$time' AND Type='$meal'";
        $result = $mysqli->query($sql_query);
        $mealprice=0;
        while($row = $result->fetch_assoc()){
            $mealprice=$row['price'];
        }
        $sql_query1="SELECT * FROM Reservation where roomno=$rn";
        $result = $mysqli->query($sql_query1);
        $payment=0;
        while($row = $result->fetch_assoc()){
            $payment=$row['payment'];
        }
        $totalcost=$payment+$mealprice;
        $sql_query2="UPDATE Reservation SET payment=$totalcost where roomno=$rn";
        if($mysqli->query($sql_query2)){
            $sql_query3="INSERT INTO FoodOrder(roomno,time,meal) VALUES ($rn,'$time','$meal')"; 
            if($mysqli->query($sql_query3)){
                echo "1";//error 
            }else{
                echo "0";//error   
            }
        }else{
            echo "0";//error
        }

    }
}

?>