
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="icon" type="image/png" href="<?php echo URL;?>/view/_asset/_img/icons/favicon.ico"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>/view/_asset/_css/profile.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
      <div class="col-md-12 text-center ">
        <div class="panel panel-default">
          <div class="userprofile social ">
            <div class="userpic"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="userpicimg"> </div>
            <h3 class="username"><?php echo " ".$_SESSION["name"] ?></h3>
            <p><?php echo " ".$_SESSION["email"] ?></p>
            <!-- <div class="socials tex-center"> <a href="" class="btn btn-circle btn-primary ">
            <i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
            <i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
            <i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
            </div> -->
          </div>
          <div class="col-md-12 border-top border-bottom">
            <ul class="nav nav-pills pull-left countlist" role="tablist">
              <li role="presentation">
                <h3>50<br>
                  <small>Room Count</small> </h3>
              </li>
              <li role="presentation">
                <h3>25<br>
                  <small>Booked Room Count</small> </h3>
              </li>
              <li role="presentation">
              <button class="btn btn-primary followbtn">Attendence</button>
              </li>

            </ul>

             <a href="http://localhost/SouthParisRestore/UserController/logout" class="btn btn-primary followbtn pull-right">Logout</a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- /.col-md-12 -->
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">User Name</h1>
            <p class="page-subtitle small"><?php echo $_SESSION["name"] ?></p>
          </div>

          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Account Information</h1>
            <p class="page-subtitle small">User details</p>
          </div>
          <div class="col-md-12">
            <ul class="list-group">
              <li class="list-group-item"><span class="fa fa-male"></span><?php echo " ".$_SESSION["name"] ?></li>
              <li class="list-group-item"><span class="fa fa-institution"></span><?php echo " ".$_SESSION["position"] ?></li>
              <li class="list-group-item"><span class="fa fa-user"></span><?php echo " ".$_SESSION["email"] ?></li>
              <li class="list-group-item"><span class="fa fa-clock-o"></span><?php echo " ".$_SESSION["nic"] ?></li>

            </ul>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="page-header small">ROOMS Status</h1>
          <p class="page-subtitle small">50 Rooms</p>
        </div>
        <div class="col-md-12">

          <div class="memberblock">
            <?php
               $result=$_SESSION["result"];
               if (mysqli_num_rows($result) > 0) {

                while($row = $result->fetch_assoc()) {
                    if($row['reserved']==true){
                        echo "<a href='' class='member'>
                        <img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt=''>
                      <div class='memmbername'>".$row["roomno"]." |Booked</div>
                      </a>";
                    }else{
                        if($row['type']=="Supirior"){
                            echo "<a href='' class='member'>
                            <img src='http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/star-icon.png' alt=''>
                          <div class='memmbername'>".$row["roomno"]."</div>
                          </a>";
                        }else{
                        echo "<a href='' class='member'>
                        <img src='https://bootdey.com/img/Content/avatar/avatar2.png' alt=''>
                      <div class='memmbername'>".$row["roomno"]."</div>
                      </a>";
                        }
                    }

                }
              }
            ?>

           </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
      <div class="col-md-8 col-sm-12 pull-left posttimeline">

        <!-- <div class="panel panel-default"> -->
          <!-- <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div> -->
         <!--  <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>

                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div> -->
          <div class="col-sm-12 col-md-12  commentsblock border-top">
            <!-- <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Astha Smith</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              </div>
            </div> -->
            <?php
              if($_SESSION["position"]=='Admin'){
                echo'
                <div class="media">
                  <!-- <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div> -->
                  <div class="media-body">
                    <h4 class="media-heading" style="margin-top:10px;">Save New User</h4>
                    <hr/>
                    <form >
                        <div class="form-group">
                           <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                           <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                           <label for="nic">NIC:</label>
                          <input type="text" class="form-control" id="nic">
                        </div>
                        <div class="form-group">
                           <label for="pos">Position:</label>
                          <select class="form-control" id="pos">
                            <option>Admin</option>
                            <option>Receptionist</option>
                            <option>Food Order Taker</option>
                          </select>
                        </div>
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                       </div>
                        <div class="form-group">
                         <label for="pwd">Confirm Password:</label>
                         <input type="password" class="form-control" id="cpwd">
                        </div>


                     <button class="btn btn-default pull-right" onclick="savedata(); return false;">Submit</button>

                </form>


                  </div>
                 </div>


                ';
              }

            ?>
        <?php
              if($_SESSION["position"]=='Admin'){
                echo'
                <div class="media" style="overflow: auto;overflow-y: hidden;">
                  <!-- <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div> -->
                  <div class="media-body">
                    <h4 class="media-heading" style="margin-top:10px;">All Reservations</h4>
                    <hr/>
                   <table class="table table-bordered">
                   <thead>
                      <tr>
                      <th>RoomNo</th>
                      <th>Name</th>
                      <th>NIC</th>
                      <th>ContactNo</th>
                      <th>C_InDate</th>
                      <th>C_InTime</th>
                      <th>C_OutDate</th>
                      <th>C_OutTime</th>
                      <th>Payment</th>
                      </tr>
                      </thead>
                      <tbody>
                      ';
                      $result1=$_SESSION["result1"];
                      
                       if (mysqli_num_rows($result1) > 0) {
                          while($row = $result1->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'.$row["roomno"].'</td>';
                            echo '<td>'.$row["name"].'</td>';
                            echo '<td>'.$row["nic"].'</td>';
                            echo '<td>'.$row["contactno"].'</td>';
                            echo '<td>'.$row["checkedind"].'</td>';
                            echo '<td>'.$row["checkedint"].'</td>';
                            echo '<td>'.$row["checkedoutd"].'</td>';
                            echo '<td>'.$row["checkedoutt"].'</td>';
                            echo '<td>'.$row["payment"].'</td>';
                            echo '</tr>';
                       }
                      } 
                      echo '
                      </tbody>
                   </table>
                  </div>
                 </div>


                ';
              }

            ?>


            <?php
                if($_SESSION["position"]=='Receptionist'){
                  echo '

                               <div class="media">
                                 <!-- <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div> -->
                                 <div class="media-body">
                                   <h4 class="media-heading" style="margin-top:10px;">Room Reservation</h4>
                                   <hr/>
                                   <form >
                                       <div class="form-group">
                                          <label for="roomno">Room No:</label>
                                         <input type="text" class="form-control" id="roomno">
                                       </div>
                                       <div class="form-group">
                                          <label for="name1">Name:</label>
                                         <input type="text" class="form-control" id="name1">
                                       </div>
                                       <div class="form-group">
                                          <label for="nic1">NIC:</label>
                                         <input type="text" class="form-control" id="nic1">
                                       </div>

                                       <div class="form-group">
                                       <label for="contactno">ContactNo:</label>
                                       <input type="text" class="form-control" id="contactno">
                                      </div>
                                      <div class="form-group">
                                      <label for="checkedind">CheckedIn Date:</label>
                                      <input type="date" class="form-control" id="checkedind">
                                     </div>
                                     <div class="form-group">
                                     <label for="checkedint">CheckedIn Time:</label>
                                     <input type="time" class="form-control" id="checkedint">
                                    </div>
                                    <div class="form-group">
                                    <label for="checkedoutd">CheckedOut Date:</label>
                                    <input type="date" class="form-control" id="checkedoutd">
                                   </div>
                                   <div class="form-group">
                                   <label for="checkedoutt">CheckedOut Time:</label>
                                   <input type="time" class="form-control" id="checkedoutt">
                                  </div>

                                    <button class="btn btn-default pull-right" onclick="savereservation(); return false;">Submit</button>

                               </form>


                                 </div>
                                </div>

                  ';
                }
             ?>
             <?php
              if($_SESSION["position"]=='Food Order Taker'){
                echo '
                <div class="media">
                  <!-- <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div> -->
                  <div class="media-body">
                    <h4 class="media-heading" style="margin-top:10px;">Order Taking</h4>
                    <hr/>
                    <form >
                        <div class="form-group">
                           <label for="roomno2">Room No:</label>
                          <input type="text" class="form-control" id="roomno2">
                        </div>
                        <div class="form-group">
                           <label for="name2">Name:</label>
                          <input type="text" class="form-control" id="name2">
                        </div>
                        <div class="form-group">
                           <label for="time">Time:</label>
                           <select class="form-control" id="time" onchange="preferedTime()">
                             <option value="Breakfast">Breakfast</option>
                             <option value="Lunch">Lunch</option>
                             <option value="Dinner">Dinner</option>
                           </select>
                        </div>
                        <div class="form-group" >
                           <label for="time">Food Type:</label>
                           <select class="form-control"id="mtype">

                           </select>
                        </div>
                     <button class="btn btn-default pull-right" onclick="saveOrder(); return false;">Order</button>

                </form>


                  </div>
                 </div>
                ';
                }

              ?>

<?php
              if($_SESSION["position"]=='Food Order Taker'){
                echo '
                <div class="media">
                  <!-- <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div> -->
                  <div class="media-body">
                    <h4 class="media-heading" style="margin-top:10px;">View Food Orders</h4>
                    <hr/>
                    <table class="table table-bordered">
                    <thead>
                       <tr>
                       <th>RoomNo</th>
                       <th>Time</th>
                       <th>Meal</th>
                       </tr>
                       </thead>
                       <tbody>
                       ';
                       $result1=$_SESSION["result2"];
                       
                        if (mysqli_num_rows($result1) > 0) {
                           while($row = $result1->fetch_assoc()) {
                             echo '<tr>';
                             echo '<td>'.$row["roomno"].'</td>';
                             echo '<td>'.$row["time"].'</td>';
                             echo '<td>'.$row["meal"].'</td>';
                             echo '</tr>';
                        }
                       } 
                       echo '
                       </tbody>
                    </table>
                   </div>
                  </div>
                 ';
                }

              ?>

              <?php
                  if($_SESSION["position"]=='Receptionist'){
                    echo ' <div class="media">
                       <!-- <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div> -->
                       <div class="media-body">
                         <h4 class="media-heading" style="margin-top:10px;">Checkout</h4>
                         <hr/>
                         <form >
                             <div class="form-group">
                                <label for="roomno3">Room No:</label>
                               <input type="text" class="form-control" id="roomno3">
                             </div>

                          <button class="btn btn-default pull-left" onclick="viewreservation(); return false;">View</button>
                          <button class="btn btn-default pull-right" onclick="checkingout(); return false;">Checkout</button>

                     </form>
                     <div class="form-group">
                     <br/><br/>
                                <p id="name6"></p>
                                <p id="nic6"></p>
                                <p id="cost6"></p>
                             </div>

                       </div>
                      </div>';
                  }
              ?>


          </div>
         <!-- </div> -->

      </div>
    </div>
</div>
<script src="<?php echo URL;?>/view/_asset/_js/profile.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>
