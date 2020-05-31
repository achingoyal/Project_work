<script src="jquery-3.2.0.min.js"></script>
<script type="text/javascript">
	$('.box').mousemove(function(e){
		$('.seprator').animate({
			'bottom': -e.pageY + 768 + 'px'
		}, 0);
	});
</script>