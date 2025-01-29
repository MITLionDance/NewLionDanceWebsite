<html>
<head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30891664-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider();
			$('#slider2').anythingSlider({
				
				resizeContents      : true, // If true, solitary images/objects in the panel will expand to fit the viewport
				navigationSize      : 5,     // Set this to the maximum number of visible navigation tabs; false to disable
				startText           : null,
				stopText						: null,
				buildStartStop 			: false,
				appendControlsTo: $('#nav'),
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['About', 'Members', 'Links', 'Performances', 'Contact', 'Blog'][index - 1];
				},
				onSlideBegin: function(e,slider) {
					// keep the current navigation tab in view
					slider.navWindow( slider.targetPage );
				}
			});
		});
		
	</script>
<title>MIT Lion Dance</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table id="Table_01" width="1000" height="565" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td background ="../images/layout_01.jpg" width="1000" height="254" alt=""></td>
	</tr>
	<tr>
		<td background="../images/layout_02.jpg" width="1000" align="center" height="41" alt="" id="navtop"><p>  
	<a href="./index.php">home</a>
	<a href="./about.php">about</a>
	<a href="./members.php">members</a>
  <a href="./performances.php">performances</a> 
  <a href="./request.php">contact / request</a>
  <a href="./links.php">links</a>  

	 
	 </td>
	</tr>
	<tr>
		<td background="../images/layout_03.png" width="1000" height="159" alt="" id="main">
