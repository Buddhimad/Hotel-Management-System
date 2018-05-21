<?php
session_start();
class UserController  extends Controller
{
 
     function __construct(){
         parent::__construct();
  
         
    }

    public function index(){
     
      $this->view->render('login',1);
    }
    public function getAccess(){
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        $access=false;
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query="SELECT * FROM User WHERE Email='$email' AND password='$password' LIMIT 1";
        $result = $mysqli->query($sql_query);
        //$name="";
        if (mysqli_num_rows($result) > 0) {
          $access=true;
          while($row = $result->fetch_assoc()) {
            //$name=$row['Name'];
            $_SESSION["name"]=$row['Name'];
            $_SESSION["email"]=$row['Email'];
            $_SESSION["position"]=$row['Position'];
            $_SESSION["nic"]= $row['NIC']; 
          }
          //$_SESSION["name"]=$name;
        }
        if($access){
          $this->loadRoomsInfo();
          $this->loadAllReservations();
          $this->loadAllFoodOrders();
          $this->view->render('profile',1);
          $access=false;
        }else{
          header("Location: http://localhost/SouthParisRestore/UserController");
        }
    }

    public function loadRoomsInfo(){
      $db = Database::getInstance();
      $mysqli = $db->getConnection();
      $sql_query="SELECT * FROM Rooms";
      $result = $mysqli->query($sql_query);
      $_SESSION["result"]=$result;
      
    }
    public function loadAllReservations(){
      $db = Database::getInstance();
      $mysqli = $db->getConnection();
      $sql_query="SELECT * FROM  Reservation";
      $result = $mysqli->query($sql_query);
      $_SESSION["result1"]=$result;
   }

   public function loadAllFoodOrders(){
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $sql_query="SELECT * FROM  FoodOrder";
    $result = $mysqli->query($sql_query);
    $_SESSION["result2"]=$result;
   }

    public function addUser(){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $position=$_POST['position'];
      $nic=$_POST['NIC'];
      $password=$_POST['password'];

      $db = Database::getInstance();
      $mysqli = $db->getConnection();
      $sql_query="SELECT ID FROM User WHERE Email='$email'";
      $result = $mysqli->query($sql_query);
      //if (mysqli_num_rows($result) > 0) {
        $sql_query="INSERT INTO User(Name,Email,Password,Position,NIC) VALUES ('$name','$email','$password','$position','$nic')";
        if($mysqli->query($sql_query)){
          echo "1";
        } else{
          echo "0";
        }
     // }else{
       // echo "2";
      //}
     

    }

    public function logout(){
      header("Location: http://localhost/SouthParisRestore/UserController");
    }
}


?>