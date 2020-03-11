<!DOCTYPE html>
    <html lang="en,ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travler</title>
		<link rel="shortcut icon" href="image/tab.png" type="image/png">
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<!--Css-->
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="style/select.css">
        <link rel="stylesheet" href="media.css">
</head>
<body>
<?php
$monthArray = range(1, 12);
?>
<!--Обратная связь-->
    <div class="call-back">
	<div class="close">
		<span>Close</span>
	</div>
	<form action="bd.php" method="POST" class="call">
		<div class="block-call">
			<span>Full name:</span>
			<input type="text" name="fullname" required placeholder="Write your full name">
		</div>
		<div class="block-call">
			<span>Phone:</span>
			<input type="text" name="number" required class="raz" placeholder="Write your phone">
		</div>
		<div class="block-call button-call">
			<input type="submit" value="Wait for a call">
		</div>
	</form>
</div>
<!--Header-->
	<div class="header-wrap">
	<div class="header">
		<div class="nav">
			<div class="logo-wrap">
				<img src="image/logo.png" alt="logo">
				<div class="logo">
					<h3>travler</h3>
					<span>Get the advice you need about travel</span>
				</div>
			</div>
			<div class="nav-links-right">
			<span class="quicklinks">Quicklinks
			<i class="material-icons">location_on</i></span>
			<div class="vertical-line"></div>
            <div id="select-content">
            <div class="select-wrapper">
                <select name="month">
                    <option value="">Выберите месяц</option>
                    <?php
                    foreach ($monthArray as $month) {
                        $monthPadding = str_pad($month, 2, "0", STR_PAD_LEFT);
                        $fdate = date("F", strtotime("2020-$monthPadding-01"));
                        echo '<option value="'.$monthPadding.'">'.$fdate.'</option>';
                    }
                    ?>
                </select>
            </div>
            </div>
			<form action="" class="search">
				<input type="search" placeholder="Search for somthing here">
				<button type="button" class="hide" ><i class="fa fa-phone-square"></i></button>
			</form>
			</div>
		</div>
		<div class="categories-wrap">
			<button class="categories">
				<i class='fas fa-globe'></i>
				<span>Travel Guide</span>
			</button>
			<button class="categories">
				<i class='far fa-paper-plane'></i>
				<span>Services</span>
			</button>
			<button class="categories">
				<i class='far fa-list-alt'></i>
				<span>About</span>
			</button>
			<button class="categories">
				<i class="fa fa-map-marker"></i>
				<span>The Tour</span>
			</button>
			<button class="categories">
				<i class='fas fa-globe'></i>
				<span>How to</span>
			</button>
			<button class="categories categories-contact">
				<i class='far fa-list-alt'></i>
				<span>Contact</span>
			</button>
		</div>
	</div>
	</div>
<!--Map-->
	<div class="map">
		<a href=""><div class="logo-white">
			<img src="image/logo%20white.png" alt="Logo">
		</div></a>
	</div>
<!--Map position-->
	<div class="map-position">
		<h1>Anywhere, anytime, where here to help.</h1>
		<span>And we mean that</span>
		<img class="map-position-img" src="image/map%20position.png" alt="">
		<div class="icons">
			<img src="image/icon1.png" alt="Clock">
			<div class="line-icon"></div>
			<img src="image/icon2.png" alt="Cloud">
			<div class="line-icon"></div>
			<img src="image/icon3.png" alt="Box">
		</div>
		<div class="icon-info-wrap">
			<div class="icon-info">
				<h2>Save Time</h2>
				<p>Lets throw a trackie dacks also it'll be gutta. You little ripper avos flamin lets throw a lizard drinking. Gutful of jug where as busy as a big smoke. Grab us a billy as cunning as a bull bar. As cunning as a bonzer flamin as stands out like cubby house. As cross as a mate no dramas as cunning as a bonzer. Gutful of kindie flamin as cross as a grundies. Lets throw a </p>
			</div>
			<div class="icon-info">
				<h2>Win over the team</h2>
				<p>As cunning as a bonzer flamin as stands out like cubby house. As cross as a mate no dramas as cunning as a bonzer. Gutful of kindie flamin as cross as a grundies. Lets throw a strides also as cross as a thingo.
					Built like a old fella no dramas grab us a ten clicks away.</p>
			</div>
			<div class="icon-info">
				<h2>Design Features</h2>
				<p>Built like a old fella no dramas grab us a ten clicks away. Lets get some digger when she'll be right metho. As cross as a no dramas as cunning as a barrack.
					A old fella no dramas grab us a ten clicks away. Lets get some digger when she'll be right metho. As cross as a no dramas as cunning as a barrack.</p>
			</div>
		</div>
	</div>
<!--Screen-->
	<div class="screen">
		<div class="screen-background">
			<h1>A simple begining lead to big ideas</h1>
			<span>We started small but grew quickly.</span>
		</div>
	</div>
<!--Team-->
	<div class="team">
		<div class="team-logo">
			<div class="white-line"></div>
				<h1>A humble Team we are </h1>
			<div class="white-line"></div>
		</div>
		<span>We’ll some of us anyways</span>
		<div class="slider">
			<div class="portfolio">
				<img src="image/producer.png" alt="Producer">
				<p class="name">Josh Jansen</p>
				<span class="profesion">Digital Producer</span>
			</div>
			<div class="portfolio">
				<img src="image/designer.png" alt="Designer">
				<p class="name">Blaz Robar</p>
				<span class="profesion">Designer</span>
			</div>
			<div class="portfolio">
				<img src="image/develop.png" alt="Developer">
				<p class="name">James Brown</p>
				<span class="profesion">Developer</span>
			</div>
			<div class="portfolio">
				<img src="image/admin.png" alt="Administration">
				<p class="name">Skeletor</p>
				<span class="profesion">Administration</span>
			</div>
		</div>
		<div class="btn-slider">
			<button class="active"></button>
			<button></button>
			<button></button>
			<button></button>
		</div>
		<div class="wrap-information">
			<div class="information">
				<button>+</button>
				<h2>Winning Design Awards</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu turpis purus. Pellentesque ullamcorper mauris vitae sapien bibendum tincidunt. Check leo dignissim +
					<br><br><span>Morbi malesuada mauris sed nibh placerat sit amet posuere libero egestas. Vestibulum consectetur iaculis est, at dapibus purus malesuada vitae. Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non.
				</span>
				</p>

			</div>
			<div class="information">
				<button>+</button>
				<h2>Badass Features</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu turpis purus. Pellentesque ullamcorper mauris vitae sapien bibendum tincidunt. Check leo dignissim +
					<br><br><span>Morbi malesuada mauris sed nibh placerat sit amet posuere libero egestas. Vestibulum consectetur iaculis est, at dapibus purus malesuada vitae. Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non. </span></p>
			</div>
		</div>
		<div class="bot-information">
			<h2>A full col text box sits nicely like this</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu turpis purus. Pellentesque ullamcorper mauris vitae sapien bibendum tincidunt. Check leo dignissim +
				<br><br><span>Morbi malesuada mauris sed nibh placerat sit amet posuere libero egestas. Vestibulum consectetur iaculis est, at dapibus purus malesuada vitae. Mauris sollicitudin aliquam scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et mi sem. Duis tristique elementum tristique. Sed ac magna quis erat sagittis suscipit. Phasellus faucibus rhoncus massa, non laoreet lorem fringilla non. </span></p>
		</div>
	</div>
<!--Footer-->
	<div class="footer">
		<div class="footer-block">
			<div class="navbar">
				<div class="logo">
					<img src="image/logo white.png" alt="Logo">
					<div class="logo-dev">
						<h1>travler</h1>
						<span>Get the advice you need about travel</span>
				    </div>
				</div>
				<div class="nav">
					<a href="">Portfolio</a>
					<div class="vertical-line-nav"></div>
					<a href="">Services</a>
					<div class="vertical-line-nav"></div>
					<a href="">Staff</a>
					<div class="vertical-line-nav"></div>
					<a href="">Articles</a>
					<div class="vertical-line-nav"></div>
					<a href="">Contact</a>
				</div>
			</div>
			<div class="info-social">
				<div class="info">Trent from punchy digger bloody gutful of mokkies. Get a dog up ya fair dinkum mate as cross as a flake. Stands out like a bluey flamin stands out like a pot. As stands out like christmas to grab us a ugg boots. She'll be right buckley's chance my as stands out like divvy van. It'll be smokes trent from punchy chewie. </div>
				<div class="social">
					<i class="fab fa-twitter"></i>Twitter
					<i class="fab fa-facebook-f"></i>Facebook
					<i class="fas fa-rss"></i>RSS
					<img src="image/mail.png" alt="">Mail
				</div>
			</div>
			<ul>
				<li><a href="">About us</a></li>
				<li><a href="">Footer Links here</a></li>
				<li><a href=""> Privacy</a></li>
				<li><a href="">Icons by http://www.dribbble.com/joshuaandrewdavies</a></li>
			</ul>
			<p>As cross as a hoon my built like a op shop. We're going bored sh*tless heaps she'll be right budgie smugglers. Grab us a durry mate she'll be right dunny rat.
				<br>She'll be right larrikin with skite. As stands out like kero it'll be truckie.</p>
		</div>
	</div>

<script src="jquery.js"></script>
</body>
</html>