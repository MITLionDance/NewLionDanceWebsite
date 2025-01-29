<?php include("header.php"); ?>

<script src="./slider/js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/slider/js/jquery.min.js"><\/script>')</script>
<!-- Anything Slider -->
	<link rel="stylesheet" href="./slider/css/anythingslider.css">
	<script src="./slider/js/jquery.anythingslider.js"></script>
<!-- Define slider dimensions here -->
	<style>
	#aboutslider {width: 800px; height: 500px; overflow-y:auto; 	font-family: Helvetica, sans-serif;	line-height: 1.5 em; font-size: 13.5px; }
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
					return ['General', 'Costume', 'Dance', 'Legend & Origin', 'AtMIT'][index - 1];
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
    <p class="title">General</p>
    <ul>
     <blockquote>The lion dance is one of China's most distinctive cultural arts. The tradition dates back thousands of years. It is believed to have appeared in either the Tang, Han, or Ch'in dynasties, possibly in different forms. Other legends associated with lion dance include using the dance to chase away the monster "Nian." Often performed by kung fu schools, lion dancing brings with it good fortune, prosperity, and longevity. The lion dance appears in western countries mainly during celebrations such as Chinese New Year, the August Moon Festival, and other multi-cultural events. It is also often seen at the opening of new shops, weddings, births, or where good fortune and prosperity is wished.
While lions are not native to China and were rarely seen in Ancient China, the lion somehow became a part of the Chinese culture. They are often seen carved outside of temples, and, of course, there is the lion dance. Often, the lion statues and costumes for lion dancing have no resemblance to an actual lion, probably due to the fact that actual lions were rarely seen. The bright colors were used to chase away evil spirits and bad luck. There are two major types of lion dancing evolved from Northern and Southern China, with the lion of the Northern style more so resembling an actual lion. However, both styles produce a very realistic portrayal of the lion. The dance can be performed freestyle or choreographed. The freestyle form is used mostly in parades. The choreographed dances are used in shows coordinated to a drum, gong, and cymbals.

		</blockquote>
    </ul>
   </div>
  </li>
	
	<li class="panel2">
   <div class="textSlide">
    <blockquote>
		    <p class="title">Costume</p><br/>
        The lion heads take hours to construct. First, a frame is made from bamboo and wood. Then, paper mache is used to cover the frame. A thin cloth is added between layers of paper mache for extra strength. After the paper mache is dried, paint is applied in colorful patterns. A clear glossy coat is applied which also adds strength. Finally, the eyes, ears, fur, and other decorations are applied to finish the head. Before a head is used it must first have its eyes opened in a ceremony called Hoi Gong. For realism, the heads have moving mouth, eyes, and ears.
There are several different types of heads, some even weighing as much as 35 pounds. However, movement is less about strength than coordination and timing. First off, the Northern and Southern heads and costumes are different. The Northern lion looks more like a real lion, with fur all over the body and a more anatomically correct head. The performers often wear leggings that add to the realism. The Southern lion head is more ornate and fancy. The body and tail is made of silk and has almost no fur. The best heads can be purchased for $1000 to $800 from Hong Kong or Malaysia. For about $500, heads can be purchased from Foshan (Buddha Mountain in Guangdong), but they only last for a few performances. Aside from the Foshan style head, there is the Heshan style that has more room inside because of a protruding nose and mouth.

   </div>
  </li>
	
		<li class="panel3">
   <div class="textSlide">
    <blockquote>
		   <p class="title">Dance</p><br/>
       The dance sequence usually starts with the lion(s) cautiously coming out of a cave. He sniffs around for danger. Other elements of the dance include: giving respects by bowing, fighting if more than one lion is performing, sleeping, grooming,eating, and drinking. Many dances will also add in tricks such as lifts and rolls. These are difficult to coordinate between both dancers and other lions.
Generally, each dance contains a sequence, called choy cheng, where the lion eats lettuce or other greens. In the United States, the green has come to mean prosperity because it is the color of money. However, the true meaning is that dealing out lettuce is fa tsai in Chinese, which sounds like “become prosperous” in Chinese. Often a red envelope, called hong bao, is attached as payment. After eating the lettuce, the lion crouches for a moment and then sprays the audience with it. Sometimes the lettuce is placed behind obstacles that the lion needs to pass to get it.
Other exotic objects have been eaten with different meanings. Sometimes scrolls with lucky sayings are used when spraying lettuce is inappropriate.
Other choreographed sequences may include a dancing Buddhist monk, called the Little Buddha, that provokes the lion, plays with it, and/or feeds it. Sometimes the lion will bite the monk.

        These are difficult to coordinate between both dancers and other lions.<br/>
		</blockquote>
   </div>
  </li>

		<li class="panel4">
   <div class="textSlide">
    <blockquote>
		     <p class="title">Legend and Origins</p><br/>
         The legend says Nian was a fierce monster that especially liked kidnapping children. He terrorized villages year after year. Finally, one year, a lion defeated and chased the monster away, but Nian vowed to return the next year. This time, unfortunately, the villagers did not have a lion to protect themselves. So, they solved the problem by creating a costume in the likeness of a lion and two villagers used it to scare Nian away. This is the reason the lion dance is performed every Chinese New Year. Legend also says that loud noises from the drum, other instruments, and firecrackers helped to scare Nian away. Red is worn during the New Years celebration because it was also believed that Nian was afraid of the color red.
Another origin of the lion dance is that an emperor of the Tang Dynasty had a dream in which a strange creature saved his life. When he woke, he described his dream. His advisors said the creature he described resembled the lion, a creature from the West. The emperor commissioned the lion dance in honor of the creature that saved his life. The Tang dynasty saw lion dancing at its peak. One record states that a dance performed for nobles contained 12 groups of 5 lions, each with 12 'lion-men' following each lion. They danced to 140 people singing the 'tai-ping' melody (composed in the Tang Dynasty).
The Little Buddha originates from the Buddhist/Shaolin monks that was thought to have trained the first lion dancers. The Little Buddha is sometimes referred to as the dai tou fut, or big headed monk.

        </blockquote>
   </div>
  </li>
	
			<li class="panel5">
   <div class="textSlide">
    <blockquote>
				<p class="title"> At MIT</p>
        <br/>
        </font> The MIT Lion Dance Club is a lion dance group based in Boston. 
        We have been performing all over the East Coast for over 10 years now 
        (since 1994), and have established a reputation for themselves. We became 
        an official club at MIT in 1997.<br/>
        <br/>
        We use the Southern Lion and perform mostly choreographed sequences with 
        two or three lions. We generally perform in what is known as the <i>Hong 
        Gar (also Hung Gar)</i> style to mostly three-star but some seven-star movements/beats. 
        <i>Hong Gar</i> style was founded by Hung Hei Gwoon.  It is the style that was 
	practiced by the famous kung fu master, Wong Fei Hong and his father Wong Kai Ying.<br/>
        <br/>
        It is a lot of fun, particularly working with children. In general, we 
        usually perform around Chinese New Year, but are availible most of the 
        year.<br/>
        <br/>
	See examples of MIT Lion Dance <a href="../performances/index.html">performances</a>.<br/><br/>
	If you would like to request a performance, <a href="../request/index.html">use this form</a>.<br/><br/>
	Here's the <a href="../_global/constitution.txt" target="blank">MIT Lion Dance Constitution</a>.<br/><br/></blockquote>
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
