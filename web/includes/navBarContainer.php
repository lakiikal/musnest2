<nav class="navbar navbar-expand-sm navbar-dark fixed-top d-sm-none" style="background-color: black; border-color: white;">
	<span class="navbar-brand fixed-left" onclick="openPage('index.php')" class="logo">
		<img src="assets/images/icons/logo.png">
	</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseid">
		<span class="navbar-toggler-icon fixed-right"></span>
	</button>
	<div class="navbar-collapse collapse" id="collapseid">
		<ul class="navbar-nav text-center">
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
		

<div id="navBarContainer">
	<nav class="navBar">

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