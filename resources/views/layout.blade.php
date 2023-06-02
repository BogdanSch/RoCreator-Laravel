<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
	<link rel="stylesheet" href="style/normalize.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
	<link rel="manifest" href="./img/favicon/site.webmanifest">
</head>

<body>
	<header class="header">
		<div class="container">
            <div class="header__wrap">
                <div class="header__logo">
                    <a class="logo" href="/">RoCreator</a>
                </div>
                <div class="header__burger">
                    <span></span>
                </div>
                <div class="header__menu">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="/">Home</a>
                        </li>
                        <li class="header__item sub-games">
                            <button class="opener">Games</button>
                            <ul class="header__lower__list">
                                <li class="header__lower__item">
                                    <a href="/games-roblox">Roblox</a>
                                </li>
                                <li class="header__lower__item">
                                    <a href="/games-android">Android</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__item">
                            <a href="/soft">Software</a>
                        </li>
                        <li class="header__item">
                            <a href="/privacy">Privacy</a>
                        </li>
                    </ul>
                    <div class="page__action">
                        <button type="button" class="page__theme"></button>
                    </div>
                </div>
            </div>
        </div>
	</header>
	<main class="main">
        @yield('main_content')
	</main>
	<footer class="footer">
		<div class="footer__wrap">
			<div class="footer__content">
				<p>All rights reserved!</p>
				<div class="soc-medias">
					<a href="https://www.roblox.com/users/1412761211/profile" target="_blank" class="soc-link">
						<i class="fa-solid fa-r">
							<p class="hint">
								Roblox
							</p>
						</i>
					</a>
					<a href="https://t.me/+voC6fujFeLE4ZDQy" target="_blank" class="soc-link">
						<i class="fa-brands fa-telegram">
							<p class="hint">
								Telegram
							</p>
						</i>
					</a>
					<a href="instagram" target="_blank" class="soc-link">
						<i class="fa-brands fa-instagram">
							<p class="hint">
								Instagram
							</p>
						</i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/daa76c24e2.js" crossorigin="anonymous"></script>
	<script src="js/jQuery v3.6.0.js"></script>
	<script src="js/script.js"></script>
</body>

</html>