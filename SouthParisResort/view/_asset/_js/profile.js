function savedata(){
    var n=$('#name').val();
    var e=$('#email').val();
    var pos=$('#pos').val();
    var nic=$('#nic').val();
    var p=$('#pwd').val();
    var cp=$('#cpwd').val();
    alert(n+"|"+e+"|"+pos+"|"+nic+"|"+p+"|"+cp);
    if(p==cp){
        $.post('http://localhost/SouthParisRestore/UserController/addUser',{name:n,email:e,position:pos,NIC:nic,password:p},
        
            function(data){
                if(data==1){
                   
                    location.reload();
                }else if(data==2){
                    alert("User already exsist...");
                }else{
                    alert("Some things wrong unable to save user..");
                }    
            }
        );
    }else{
        alert("password not matching");
       
    }
    
    
}
function cleardata(){
   $('#name').val()="";
   $('#email').val()="";
    $('#pos').val()="";
    $('#nic').val()="";
    $('#pwd').val()="";
    $('#cpwd').val()="";
}

function savereservation(){
    var rn=$('#roomno').val();
    var na=$('#name1').val();
    var nic=$('#nic1').val();
    var cn=$('#contactno').val();
    var cid=$('#checkedind').val();
    var cit=$('#checkedint').val();
    var cod=$('#checkedoutd').val();
    var cot=$('#checkedoutt').val();
    alert(rn+"|"+na+"|"+nic+"|"+cn+"|"+cid+"|"+cit+"|"+cod+"|"+cot);
    //if(rn!=""&&na!=""&&nic!=""&&cn!=""&&cid!=""&&cit!=""&&cod!=""&&cot!=""){
        $.post('http://localhost/SouthParisRestore/ReservationController/reserveRoom',{rn:rn,na:na,nic:nic,cn:cn,cid:cid,cit:cit,cod:cod,cot:cot},
        
            function(data){
                if(data==3){
                   
                    location.reload();

                }else if(data==2){
                    alert("Booking failed....");
                }else if(data==1){
                    alert("room already booked....");
                }else if(data==0){
                    alert("no room found");
                }else{
                    alert("Successfully booked room...");
                }    
            }
        );
    

}
function preferedTime(){
    var time = document.getElementById('time').value;
    $.post('http://localhost/SouthParisRestore/HotelController/loadMeals',{time:time},
    
        function(data){
            var obj = $.parseJSON(data);
            $('#mtype').children().remove().end().append('') ;
            obj.forEach(function(element) {
                $('<option value="'+ element +'">' + element + '</option>').appendTo('#mtype');
            }, this);
           
        }
    );
   
}

function saveOrder(){
    var rn=$('#roomno2').val();
    var na=$('#name2').val();
    var time = document.getElementById('time').value;
    var meal = document.getElementById('mtype').value;

    //alert(rn+" | "+na+" | "+time+" | "+meal);
    $.post('http://localhost/SouthParisRestore/OrderController/saveOrder',{roomno:rn,name:na,time:time,meal:meal},
    
        function(data){
            if(data==1){
                location.reload();
            }else{
                alert("Unable to Process...");
            }
        }
    );
}

function viewreservation(){
    var nic=$('#roomno3').val();
   // alert(nic);
    $.post('http://localhost/SouthParisRestore/ReservationController/viewReservation',{NIC:nic},
    
        function(data){
            var obj = $.parseJSON(data);
           
            document.getElementById("name6").innerHTML="Name : "+obj.name;
            document.getElementById("nic6").innerHTML="NIC : "+obj.nic;
            document.getElementById("cost6").innerHTML="Payment : "+obj.payment;
        }
    );
}



function checkingout(){
    var roomno=$('#roomno3').val();
    $.post('http://localhost/SouthParisRestore/ReservationController/checkinOut',{rn:roomno},
    
        function(data){
           if(data==1){
            location.reload();
           }else{
               alert("Unable to continue...");
           }
        }
    );
}
