// login js
window.onload = function(){
    $("#showPassword").hide();

    // if($("#txtPassword").length<=3){
    //     alert("Mat khau phai lon hơn 3 ki tu");
    // }

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

$('#btncomment').click(function(){
    alert("sacsc");
    var comment=$('#comment').val();
    if(typeof id_user != "undefined"){
        $.ajax({
            //url: '../comment_exce.php',
            type: 'POST',
            data: {
                binhluan: comment,
                id_user: id_user,
                id_phim: id_phim
            },
            success: function(response){
                if (response==1) {
                    window.location.reload();
                }
            }
        });
    }else{
        alert("Bạn phải đăng nhập để có thể bình luận.");
    }
});
