$("#beginBtn").click(function() {
	var randomEnd = $("#randomNum").val();
	var startNum = setInterval(function() {
		var randomNum = parseInt(Math.random() * randomEnd) + 1;
		$("#showNum").val(randomNum);
	}, 5);
	$("#endBtn").click(function() {
		clearInterval(startNum);
	});
});
$(".show").click(function() {
	var $play = $(".show span:first-child");
	var $pause = $(".show span:last-child");
	var randomEnd = $("#randomNum").val();
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
});
$(".show span:first-child").click(function() {
	$(this).toggle();
});