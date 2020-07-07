// login js
window.onload = function(){
    $("#showPassword").hide();
}

$("#txtPassword").on('change',function() {  
		if($("#txtPassword").val())
		{
			$("#showPassword").show();
		}
		else
		{
			$("#showPassword").hide();
		}
});

$(".reveal").on('click',function() {
    var $pwd = $("#txtPassword");
    if ($pwd.attr('type') === 'password') 
		{
        $pwd.attr('type', 'text');
    } 
		else 
		{
        $pwd.attr('type', 'password');
    }
});

$("#btnlogin").on('click',function(){

    console.log("click btn");
    // var $user= $("#txtUser");
    // var $pwd=$("#txtPassword");
    // if($user=="admin" && $pwd=="123"){
    //     window.location.href="../admin/index.html"
    // }
});