
<?php 
    include_once __DIR__.'/Templates/header.php';
?>
    	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
		<ul class="side-menu">
			<li><a href="#" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li class="divider" data-text="main">Main</li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i> Elements <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a class='enlace' href="#">Alert</a></li>
					<li><a href="#">Badges</a></li>
					<li><a href="#">Breadcrumbs</a></li>
					<li><a href="#">Button</a></li>
				</ul>
			</li>
			<li><a href="#"><i class='bx bxs-chart icon' ></i> Charts</a></li>
			<li><a href="#"><i class='bx bxs-widget icon' ></i> Widgets</a></li>
			<li class="divider" data-text="table and forms">Table and forms</li>
			<li><a href="#"><i class='bx bx-table icon' ></i> Tables</a></li>
			<li>
				<a href="#"><i class='bx bxs-notepad icon' ></i> Forms <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Basic</a></li>
					<li><a href="#">Select</a></li>
					<li><a href="#">Checkbox</a></li>
					<li><a href="#">Radio</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				
			</form>
			
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a class='enlace' href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a class='enlace' href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a class='enlace' href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
<?php
    include_once __DIR__. '/Templates/footer.php';
?>