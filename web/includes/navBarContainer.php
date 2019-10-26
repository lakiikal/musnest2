<nav id="navForMobile" class="navbar navbar-expand-sm navbar-dark fixed-top d-sm-none" style="background-color: black;">
	<span class="navbar-brand" onclick="openPage('index.php')" class="logo">
		<img src="assets/images/icons/logo.png">
	</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseid" style="border: 2px solid white;">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="collapseid">
		<ul class="navbar-nav text-right">
			<li class="nav-item">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink text-white">Browse</span>
			</li>
			<li class="nav-item">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink text-white">Your Music</span>
			</li>
			<li class="nav-item">
				<span role="link" tabindex="0" onclick="logout()" class="navItemLink text-white">Logout</span>
			</li>
		</ul>
	</div>
</nav>

<script>
	$("#collapseid li").click(function(){
    	$(this).parent().hide();
	});
	
	$(".navbar-toggler").click(function(){
    	$(".navbar-nav").show();
	});
</script>
		
<div id="navBarContainer">
	<nav class="nav-Bar">

		<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
			<img src="assets/images/icons/logo.png">
		</span>
		
		<div class="group">
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
			</div>

		</div>

	</nav>
</div>
<script>
	$(".navbar-toggler").click(function(){
    	$(".navbar-nav text-right").show();
	});
</script>