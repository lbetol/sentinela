<?php
namespace abox;?>
<div class="hscrl">
	<header class="bar xtp tct fwhite -anchor" style="background-image:linear-gradient(to bottom right,#932390,#dc2431)">
		<div class="bar">
			<div class="bt rt ft-roboto-light flt dpd drs link -zi1000" onclick="ab.login()">LOGIN</div>
		</div>
		<h1 class="ft-roboto-light flt fg xtp">S·E·N·T·I·N·E·L</h1>
		<h2 class="ft-roboto-light fn flt" style="margin-top:-2rem">YES, WE CARE!</h2>
		<nav class="bar tct xts xtp">
			<div class="zyp">
				<div class="cur sxp lt" onclick='$("#{{#}}")[0].scrollTo($("#{{#}} .-anchor")[2])'>ABUSE REPORT</div>
				<div class="cur sxp lt" onclick='$("#{{#}}")[0].scrollTo($("#{{#}} .-anchor")[4])' style='border-left:1px dotted whitesmoke'>HASHTAGS</div>
				<div class="cur sxp lt" onclick='$("#{{#}}")[0].scrollTo($("#{{#}} .-anchor")[5])' style='border-left:1px dotted whitesmoke'>CONTACT</div>
				<div class="cur sxp lt" onclick='$("#{{#}}")[0].scrollTo($("#{{#}} .-anchor")[6])' style='border-left:1px dotted whitesmoke'>PROJECT</div>
			</div>
		</nav>
	</header>
	<article class="bar tct bwhite -anchor">
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
	<section class="xyp bsmoke tct bar -anchor">
		<div class="xpd">
			<div class="-map@-wd30vw lt xyp xys">
				<img class="w60" src='src/img/alert.png'/>
			</div>
			<div class="-map@-wd25vw lt xyp">
				<form class="w80 spd sys" action="javascript:void(0)" submit="{{%#}}.report_an_abuse()">
					<h1 class="ft-roboto-light flt fh">REPORT AN ABUSE</h1>
					<div class="bar">
						<select onchange="ab.apply(function(el){ 
							if(el.value=='') return;
							el.climb(-2).getElementsByClassName('--hashtags')[0].appendChild(('<div class=\'zmg fwhite hpd sr bblue\'>#'+el.value+'<icon class=\'hls cur\' onclick=\'this.climb().delete()\'>&#x51;</icon</div>').toDOM());
							el.value = '';
						},this)">
							<option value="">Choose a #hashtag</option>
							<option value="abuse">Abuse</option>
							<option value="slavery">Slavery</option>
							<option value="exploration">Exploration</option>
							<option value="prostitution">Prostitution</option>
							<option value="kidnap">Kidnap</option>
							<option value="imigration">Imigration</option>
						</select>
					</div>
					<div class="sbar tlt --hashtags"></div>
					<div class="hbar tlt">Let us know what's going on</div>
					<div class="wf"><textarea class="alphak2 fblack" rows="6"></textarea></div>
					<div class="sys bar">
						<input type='submit' class="bblue fwhite hbar" value="ENVIAR"/>
					</div>
				</form>
			</div>
		</div>
	</section>
	<nav class="bar tct fdark -anchor">
		<div>
			<div class="lt tct xyp -map@-wd20vw cur" onclick="ab.load('newcommer.php');$('#header')[0].desappear();">
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
	<section class="bar -anchor">
		<h1 class="ft-roboto-light flt fh">HASHTAGS</h1>
		<div class="w80 spd xbs xbp">
			<div class='zmg fwhite link hpd sr bblue'>#abuse</div>
			<div class='zmg fwhite link hpd sr bblue'>#slavery</div>
			<div class='zmg fwhite link hpd sr bblue'>#exploration</div>
			<div class='zmg fwhite link hpd sr bblue'>#prostituition</div>
			<div class='zmg fwhite link hpd sr bblue'>#kidnap</div>
			<div class='zmg fwhite link hpd sr bblue'>#imigration</div>
		</div>
	</section>
	<section class="xyp bsmoke tct bar -anchor">
		<div>
			<div class="xpd lt">
				<form class="-wd20vw spd sys" action="javascript:void(0)" submit="{{%#}}.report_an_abuse()">
					<h1 class="ft-roboto-light flt fh">YOUR FEEDBACK</h1>
					<div class="bar"><input type='text' class='alphak2 required'/><label>Name</label></div>
					<div class="zbar"><input type='text' class='alphak2 required -mask-chars'/><label>E-Mail</label></div>
					<div class="bar"><input type='text' class='alphak2 required -mask-phone'/><label>Phone</label></div>
					<div class="hbar tlt">What do you want to tell us?</div>
					<div class="wf"><textarea class="alphak2 fblack" rows="6"></textarea></div>
					<div class="sys bar">
						<input type='submit' class="bblue fwhite hbar" value="ENVIAR"/>
					</div>
				</form>
			</div>
			<div class="xpd lt">
				<div class="-wd20vw spd sys tlt">
					<h1 class="ft-roboto-light flt fh">CONTACT US</h1>
					<nav class="bar sbs fb">
						<icon class="zpd cur fblue --facebook">&#xe0c1;</icon>
						<icon class="zpd cur fpurple --instagram">&#xe0c8;</icon>
						<icon class="zpd cur fblue --twitter">&#xe0c5;</icon>
						<icon class="zpd cur fred --google">&#xe0c4;</icon>
						<icon class="zpd cur fwine --youtube">&#xe0d1;</icon>
					</nav>
					<div class="bar"><div class="spd">Phone: +55 12 98176 0703</div></div>
					<div class="bar"><div class="spd">E-Mail: contact@sentinelproj.com</div>
					<div class="bar"><div class="spd">Address: Av. São João 1461 - Jd Apollo - SJCampos/SP</div>
				</form>
			</div>
		</div>
	</section>
	<section class="bar" style="background-image:linear-gradient(to bottom right,#932390,#dc2431)">
		<div class="xyp">
			<div class="-ft2rem dmg lt fwhite ft-roboto-light flt">DEVVALLE</div>
			<img src="src/img/unodc.png" class='-ht6rem lt zmg'/>
			<img src="src/img/bluehack.png" class='-ht6rem lt zmg'/>
		</div>
		<br>
		<div class="fs flt dys fwhite">2018<sup>®</sup></div>
	</section>
	<script type="text/javascript">
		{{%#}} = {
			init : function(){
				ab.organize();
				ab.masks();
				this.container.appear();
				ab.loading(AB_OFF);
			}
		}
	</script>	
</div>