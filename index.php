<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Navigation Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/menus.css" />
</head>

<body>
 <?php
include("Config/db.php");
$sth = $conn->prepare("SELECT * from sidebar order by id desc");
$sth->execute();
while ($data =$sth->fetch(PDO::FETCH_ASSOC) )
{
?>
              <header>
			<a class="logo" href="#"><span></span></a>
				<nav>
					<ul>
					
						<li><a href="#">About Us</a>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Products</a></li>
								<li><a href="#">Design Corner</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Design Corner</a>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Design Corner</a>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Design Corner</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</li>
							
						</ul>
					</li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</header>		
		<article>
			<div>
				<h1>What&rsquo;s Trending:  Creating Your Own Spa</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Duis aute irure dolor in <a href="#">reprehenderit in voluptate</a> velit esse cillum dolorte eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</article>
		<aside>
			<div>
				<h3>Customer spotlight</h3>
				<p>Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Lorem ipsum dolor sit amet, consect etuer adipiscing elit. Orci magna rhoncus neque, id pulvinar odio lorem non turpis.</p>
			</div>
		</aside>

<?php
}
?>
</body>
</html>