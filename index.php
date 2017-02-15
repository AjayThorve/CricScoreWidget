<!DOCTYPE HTML>

<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<!-- Wide card with share menu button -->
<!-- Event card -->
<style>
.demo-card-event.mdl-card {
  width: 270px;
  height: 256px;
  background: #3E4EB8;  
  float:left;
  margin:2%;
  margin-left:5%;
  padding:1%;
}
.demo-card-event > .mdl-card__actions {
  border-color: rgba(255, 255, 255, 0.2);
}
.demo-card-event > .mdl-card__title {
  align-items: flex-start;
}
.demo-card-event > .mdl-card__title > h4 {
  margin-top: 0;
}
.demo-card-event > .mdl-card__actions {
  display: flex;
  box-sizing:border-box;
  align-items: center;
  
}
.demo-card-event > .mdl-card__actions > .material-icons {
  padding-right: 10px;
  
}
.demo-card-event > .mdl-card__title,
.demo-card-event > .mdl-card__actions,
.demo-card-event > .mdl-card__actions > .mdl-button {
  color: #fff;
}

</style>

</head>
<body>
<?php

	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);
	$i=0;
    foreach($cricketMatches->data as $item) {

?>
<div class="demo-card-event mdl-card mdl-shadow--2dp scorecards <?php echo $i;?>" style="display:none;">
  <div class="mdl-card__title mdl-card--expand">
  <h4><?php echo($item->title); ?></h4>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" target="_blank" href="http://www.cricbuzz.com">
      View Detailed Scores
    </a>
    <div class="mdl-layout-spacer"></div>
    <i class="material-icons">event</i>
  </div>
</div>


<?php $i++;} ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(document).ready(function(){
		$(".1").show();
		var n=1;
		setInterval(scores,5000);
		function scores(){
			$("."+n).hide();
			if($(".scorecards").hasClass(n))
			{
				n++;
			}
			else
			{
				n=1;
			}
			$("."+n).show();
		};
	});
	
</script>
</body>
</html>
