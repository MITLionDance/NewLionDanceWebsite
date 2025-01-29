<?php include("header.php"); ?>

<script src="./slider/js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/slider/js/jquery.min.js"><\/script>')</script>
<!-- Anything Slider -->
	<link rel="stylesheet" href="./slider/css/anythingslider.css">
	<script src="./slider/js/jquery.anythingslider.js"></script>
<!-- Define slider dimensions here -->
	<style>
	#aboutslider { width: 800px; height: 500px; overflow-y:auto; 	font-family: Helvetica, sans-serif;	line-height: 1.5 em; font-size: 13.5px; }
	#nav { float: top;}
	#nav ul { position: relative; margin: auto; padding: 0; float: right; }
	#nav li { padding: 0px; }
	#nav ul li { display: inline; }
	#nav a {
    display: inline-block;
    width: 100px;
    height: 20px;;
    padding: 8px;
    text-align: center;
    text-decoration: none;;
	}
	
	</style>

	<!-- AnythingSlider initialization -->
	<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider();
			$('#aboutslider').anythingSlider({
				
				resizeContents      : true, // If true, solitary images/objects in the panel will expand to fit the viewport
				navigationSize      : 5,     // Set this to the maximum number of visible navigation tabs; false to disable
				startText           : null,
				stopText						: null,
				buildStartStop 			: false,
				appendControlsTo: $('#nav'),
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['Current Members', 'Exec Board', 'Former Presidents', 'Alumni'][index - 1];
				},
				onSlideBegin: function(e,slider) {
					// keep the current navigation tab in view
					slider.navWindow( slider.targetPage );
				}
			});
		});
		
	</script>
</head>
<body>
  <table>
    <tr> 
    
      <td>
			<!-- AnythingSlider -->

	<ul id="aboutslider">

		<li class="panel1">
   <div class="textSlide">
    <p class="title">Current Members</p>
     <blockquote>
		<br>Anna Liu '27
		<br>Jolie Duquene '27

		<br>Allison Lin '26
		<br>Danny Yang '26

		<br>Alex Li '25
		<br>Elijah Van Ryck de Groot '25
		<br>Grace Yang '25
		<br>Serena Li '25
		<br>Zixuan Liu '25

		<br>Amanda Mei '24
		<br>April Cheng '24
		<br>Austin Chin '24
		<br>Erica Chen '24
		<br>Jason Li '24

		<br>Kevin Qian '23
		<br>Eileen Chau '23

		<br>Justin Duffy '22

		<br>
		</blockquote>
   </div>
  </li>
	
	<li class="panel2">
   <div class="textSlide">
	 <p class="title">Executive Board</p>
    <blockquote>
	President: Elijah Van Ryck de Groot '25<br>
	Vice President: Danny Yang '26<br>
	Treasurer: Alex Li '25<br>
	Social Chair: Grace Yang '25<br>
	Public Relations: Alex Li '25<br>
	Choreographer: Zixuan Liu '25<br>
	Lion Keepers: Allison Lin '26, Danny Yang '26, Zixuan Liu '25<br>
	Webmaster: Jolie Duquene '27<br>
	Room Coordinator: Elijah Van Ryck de Groot '25<br>
	Show Coordinators: Amanda Mei '24, Eileen Chau '23<br>
	Competition Coach: Danny Yang '26<br>
		 </blockquote>
   </div>
  </li>
	
		<li class="panel3">
   <div class="textSlide">
	 <p class="title">Former Presidents</p>
    <blockquote>
		Amanda Mei '24<br>
		Eileen Chau '23<br>
		Kevin Ly '22<br>
		Andison Tran '21 and Nathan Liang '21<br>
		Joy Chen '14<br>
		Cathy Wu '11<br>
		Sammy Chu '10<br>
		Melissa Chu '08<br>
		Karen Law '07<br>
		John Wu '06<br>
		John Wu '06<br>
		Emily Chi '04<br>
		Eugene Chiu '01<br>
		Andrew Lau '00<br>
		Frank Liu '00<br>
		Rachel Sha '98<br>
		Vincent See '97
		 </blockquote>
   </div>
  </li>
	
		<li class="panel4">
   <div class="textSlide" style="overflow:scroll;">
    <blockquote>
		   <p class="title">Alumni</p><br/>
			Zachary Francis '23<br>
		   	Britney Ting '22<br>
		   	Jamie Geng '22<br>
			Juan Aleman '22<br>
			Kevin Ly '22<br>
			Andrea Lo '21<br>
			Andison Tran '21<br>
			Nathan Liang '21<br>
			Sarah Vu '21<br>
			Chris Xu '21<br>
			Gloria "Wawa" Chyr '20<br>
			Junyu Yang '20<br>
		   	Elizabeth Li '18<br>
			Sibo Wang '18<br>
			Gina Liu '18<br>
			Kevin Ng '17<br>
			Tara Lee '17<br>
			Doris Le '17<br>
			Julia Guo '17<br>
			Jamin Liu '15<br>
			Yang Chen '15<br>
		   	Ronald Chan '15<br>
			Yang Chen '15<br>
			Jamin Liu '15<br>
			Yukino Nagai '15<br>
			Lealia Xiong '15<br>
			Joy Chen '14<br>
			Catherine Fan '14<br>
			Geza Kovacks '12<br>
			Carrie Liang '14<br>
			Qian Long '14<br>
			North Surakitbovorn '14<br>
			Stephanie Tsai '13<br>
			Josh Chartier '07<br>
			Tim Lee '11<br>
			Alice Li '11<br>
			Lakshman Sankar '11<br>
			Danielle Wang '11<br>
			Lulu Wang '11<br>
			Cathy Wu '11<br>
			Kellie Young '11<br>
			Sammy Chu '10<br>
			Evan Chan '08<br>
			Kathleen Cui '08<br>
			Lydia Gu '08<br>
			Amanda Shing '08<br>
			Sai Hei Yeung '08<br>
			Elizabeth Au '07<br>
			Jason Chen '07<br>
			Kerry Cheung '07<br>
			Christine Fanchiang '07<br>
			Kimberly Kam '07<br>
			Lauren Leung '07<br>
			Ling Xu '07<br>
			Maxine Yang '07<br>
			Christine Yu '07<br>
			Joseph Cheng '06<br>
			George Huo '06<br>
			Lauri Kauppila '06<br>
			Yao King '06<br>
			Andrew Lee '06<br>
			Vivian Leung '06<br>
			Forrest Liau '06<br>
			Meng Mao '06<br>
			Jacqueline Tio '06<br>
			Kelvin Chan '05<br>
			Ken Chang '05<br>
			Alice Chou '05<br>
			Kathryn Der '05<br>
			Jeff Hsu '05<br>
			Yuan Shu '05<br>
			Amy Wong '05<br>
			Sherry Kan '04<br>
			John King '04<br>
			Diana Lam '04<br>
			Sean Liu '04<br>
			Pon Pon Yeh '04<br>
			Brian Hong '03<br>
			Delia Hou '03<br>
			Janet Hsiao '03<br>
			Pei-Hsin Lin '03<br>
			Spencer Seung '02<br>
			Ailin Yang '02<br>
			Ying Cao '01<br>
			Alan Chen '01<br>
			Fred Huang '01<br>
			Yi-fungar Lin '01<br>
			Rich Moy '01<br>
			Alice Chau '00<br>
			Win Chevapravatdumrong '00<br>
			Lillian Kiang '00<br>
			Laurie Leong '00<br>
			Susan Lin '00<br>
			K.Cherry Liu '00<br>
			Xiaomin Mou '00<br>
			Jean Yang '00<br>
			Anita Chung '99<br>
			Sandy Jen '99<br>
			Grace Liu '99<br>
			Brian Wong '99<br>
			Anita Wu '99<br>
			Janet Chieh '98<br>
			Jean Hsu '98<br>
			Jimmy Lin '98<br>
			Amy Kimura '97<br>
			Douglas Yeung '97
		</blockquote>
   </div>
  </li>
	</ul>

	<!-- END AnythingSlider -->
	  
       
        <br/>
	  </td>	  
    </tr>
  </table>
<br/>
<?php include("footer.php"); ?>
