<?php
namespace abox;?>
<div class="hscrl">
	<header class="bar xtp tct fwhite" style="background-image:linear-gradient(to bottom right,#932390,#dc2431)">
		<div class="bar">
			<div class="bt rt ft-roboto-light flt dpd link -zi1000" onclick="ab.login()">LOGIN</div>
		</div>
		<h1 class="ft-roboto-light flt fg xtp">S·E·N·T·I·N·E·L·A</h1>
		<h2 class="ft-roboto-light fn flt" style="margin-top:-2rem">YES, WE CARE!</h2>
		<nav class="bar tct xts xtp">
			<div class="zyp">
				<div class="cur sxp lt">ABUSE REPORT</div>
				<div class="cur sxp lt" style='border-left:1px dotted whitesmoke'>HASHTAGS</div>
				<div class="cur sxp lt" style='border-left:1px dotted whitesmoke'>CONTACT</div>
				<div class="cur sxp lt" style='border-left:1px dotted whitesmoke'>PROJECT</div>
				<div class="cur sxp lt" style='border-left:1px dotted whitesmoke'>TEAM</div>
			</div>
		</nav>
	</header>
	<article class="bar tct bwhite">
		<div class="xpd">
			<div class="-map@-wd30vw lt xyp">
				<row class="fb flt tct">WE'VE GOT</row>
				<row class="fg fbd tct">1.000.000</row>
				<row class="fb flt tct">LIVES SAVED</row>
				<row class="flt tct">AND COUNTING</row>
			</div>
			<div class="-map@-wd30vw lt">
				<img class="wf" src='src/img/worldmap.png'/>
			</div>
		</div>
	</article>
	<section class="xyp bsmoke tct bar">
		<div class="xpd">
			<div class="-map@-wd30vw lt xyp">
				
			</div>
			<div class="-map@-wd30vw lt xyp">
				
			</div>
		</div>
	</section>
	<nav class="bar tct fdark bsmoke">
		<div>
			<div class="lt tct xyp -map@-wd20vw cur">
				<icon class="fg flt">&#xe107;</icon>
				<div class="zbar tct fn">SIGN UP</div>
				<div class="spd">Join us! Let's make the world a better place to live! Together we can!</div>
			</div>
			<div class="lt tct xyp -map@-wd20vw cur">
				<icon class="fg flt">&#xe0e9;</icon>
				<div class="zbar tct fn">SAVING LIFES</div>
				<div class="spd">Millions are saved around the world, just sharing some hashtags!</div>
			</div>
			<div class="lt tct xyp -map@-wd20vw cur">
				<icon class="fg flt">&#xe01f;</icon>
				<div class="zbar tct fn">MAP OF FACTS</div>
				<div class="spd">Find out where people are enslaved or children are sold!</div>
			</div>
		</div>
	</nav>
	<script type="text/javascript">
		{{%#}} = {
			init : function(){
				ab.organize();
				this.container.appear();
				ab.loading(AB_OFF);
			}
		}
	</script>	
</div>