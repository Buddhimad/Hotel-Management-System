function userLogin(){
    var e=$('#email').val();
    var p=$('#password').val();
    alert("called");
    $.post('http://localhost/SouthParisRestore/UserController/getAccess',{email:e,password:p},
    
        function(data){
            alert(data);
        }
    );
}
