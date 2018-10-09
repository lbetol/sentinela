<div class="view pin zero -op0 furple">
	<form class="wh">
		<nav class="pin zero bar" style="z-index:1000">
			<icon class="dpd drs rt fb cur flt" onclick="ab.apply(function(){
				$('#newcommer')[0].desappear();
				$('#header')[0].appear();
			})">&#x4d;</icon>
		</nav>
		<h1 class="ft-roboto-light fg flt fpurple">SIGN UP</h1>
		<div class="bar"><input type='text' class='alphak2 required'/><label>Name</label></div>
		<div class="bar sys"><input type='text' class='alphak2 required'/><label>E-mail</label></div>
		<div class="bar"><input type='text' class='alphak2 required -mask-phone'/><label>Phone</label></div>
	</form>
	<script>
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