<?php
class ReservationController extends Controller
{
    function __construct(){
        parent::__construct();
        
    }

    public function reserveRoom(){
        $rn=$_POST['rn'];
        $na=$_POST['na'];
        $nic=$_POST['nic'];
        $cn=$_POST['cn'];
        $cid=$_POST['cid'];
        $cit=$_POST['cit'];
        $cod=$_POST['cod'];
        $cot=$_POST['cot'];

        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query="SELECT * FROM Rooms where roomno=$rn";
        $result = $mysqli->query($sql_query);
        $ok=false;
       $payment=0;
            while($row = $result->fetch_assoc()){
                $ok=$row["reserved"];
                $payment=$row["price"];
            }
            if($ok==false){
               $sql_query2="INSERT INTO Reservation(roomno,name,nic,contactno,checkedind,checkedint,checkedoutd,checkedoutt,payment) VALUES ($rn,'$na','$nic','$cn','$cid','$cit','$cod','$cot',$payment)"; 
               if($mysqli->query($sql_query2)){
                $sql_query3="UPDATE Rooms SET reserved=true where roomno=$rn"; 
                if($mysqli->query($sql_query3)){
                    echo "3";//
                }else{
                    echo "4";
                }
               
              } else{
                echo "2";//booking failed
              }
            }else{
                echo "1";//room already booked
            }

      
    }

    public function viewReservation(){
        $nic=$_POST['NIC'];
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
       
        $sql_query="SELECT * FROM  Reservation where roomno=$nic";
        $result = $mysqli->query($sql_query);
        $temp=null;
        while($row = $result->fetch_assoc()){
            $temp=$row;
        }
        echo json_encode( $temp); ;
    }

  

    public function checkinOut(){
        $rn=$_POST['rn'];
        /*1) customer remove from reservation
          2)room update
        */
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query3="UPDATE Rooms SET reserved=false where roomno=$rn"; 
        if($mysqli->query($sql_query3)){
            $sql_query="DELETE FROM Reservation WHERE roomno=$rn";
            if($mysqli->query($sql_query)){
                echo "1";
            }else{
                echo "0";
            }
        }else{
            echo "0";
        }
    }
}

?>