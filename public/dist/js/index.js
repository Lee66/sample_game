$("#beginBtn").click(function() {
	$.ajax({
		type:"post",
		url:"/index/playGame",
		data:{
			joinNum:$("#randomNum").val(),
			endNum:$("#showNum").val()
		},
		success:function(data){
			console.log(data);
		}
		
	});
});
$(".show").click(function() {
	var $play = $(".show span:first-child");
	var $pause = $(".show span:last-child");
	var randomEnd = $("#randomNum").val();
	console.log(randomEnd);
	if(!randomEnd==""){
		
	if($pause.is(':hidden')) {
		$pause.show();
		$play.hide();
		startNum = setInterval(function() {
			var randomNum = parseInt(Math.random() * randomEnd) + 1;
			$("#showNum").val(randomNum);
		}, 5);

	} else {
		$play.show();
		$pause.hide();
		clearInterval(startNum);
	}
	}else{
		alert('');
	}
});
