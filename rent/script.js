$('document').ready(function(){

	$("login").click(function(){
		$.ajax({
			type:'post',
			url:'login.php',
			success:function(data){
				$('info').slideDown().html(data);
			}
		})
	})

});