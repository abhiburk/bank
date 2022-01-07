<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<title> Orion bank</title>
	<meta name="description" content="Orion bank - najlepszy bank w Polsce" />
	<meta name="keywords" content=" bank,Orio,konto,pieniądze,kredy,rata" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" ></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<link rel="stylesheet" href="{{ asset("css/fontello.css") }}" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<script type="text/javascript">
	
		$(window).on('scroll',function()
		{
			if ($(window).scrollTop())
			{
				$('nav').addClass('black');
			}
			else
			{
				$('nav').removeClass('black');
			}
		}
		)
	</script>
</head>

	 <body>
		
		<div class="banner">
			<header >
				
				<nav>
					<a href="#" class="logo">Orion</a>
					<ul>
						<li><a href="#" class="active">Strona Głowna</a></li>
						<li><a href="#"> Oferta</a></li>
						<li><a href="#"> Promocje</a></li>
						<li><a href="#"> Pomoc i kontakt</a></li>
						<li><a href="#"> Wyszukiwanie</a></li>
						<li><a href="{{ route('login') }}"> Zaloguj się</a></li>
					</ul>
				</nav>
				<div class="toggle"></div>
			</header>
			<img src="{{ asset("img/bg.jpg") }}">
			<div class="content">
				
				<h2>Bank Orion</h2>
				<p>	Tradycyjna bankowość w nowoczesnym wydaniu. Prostota jest najważniejsza więc nie zwlekaj i przyjdź do nas już dziś.</p>
			
			</div>
		</div>

		<section class="about">
			<div class="contentBx">
				<h2 class="heading">Kilka słów o nas</h2>
				<p class="text">
					Bank Orion jest ogólnopolskim, nowoczesnym bankiem oferującym swoje usługi wszystkim segmentom rynku poprzez sieć oddziałów, sieci indywidualnych doradców i bankowość elektroniczną. Wykorzystujemy najnowocześniejsze technologie i najlepsze tradycje bankowości, z powodzeniem konkurując we wszystkich segmentach rynku finansowego.
					<br/><br/>
					Jesteśmy bankiem cyfrowym, dążymy do stania się najbardziej spersonalizowanym bankiem w Polsce. Naszym priorytetem jest ułatwianie codziennego życia klientom poprzez oferowanie im wygodnego i intuicyjnego dostępu do usług finansowych i pozafinansowych. Kluczem do wszystkich wprowadzanych przez Bank zmian jest klientocentryzm i dbałość o najwyższej jakości doświadczenie użytkownika – uważne słuchanie klientów, obserwacja ich preferencji i testowanie z nimi usług w bankowym User-Experience Lab.
					<br/><br/>
					Znajomość polskiego rynku finansów zbudowaliśmy na wieloletnich doświadczeniach w obsłudze przedsiębiorstw i klientów indywidualnych, uzupełniamy ją wiedzą i międzynarodową praktyką w dziedzinie finansów wnoszoną przez Banco Comercial Portugues - największy komercyjny bank w Portugalii, który jest strategicznym udziałowcem Banku.
					<br/><br/>					
					Bank Orion Spółka Akcyjna z siedzibą w Warszawie, ul. Stanisława Żaryna 2A, 02-593 Warszawa, wpisany pod nr KRS 0000010186 do Rejestru Przedsiębiorców Krajowego Rejestru Sądowego, prowadzonego przez Sąd Rejonowy dla m.st. Warszawy, XIII Wydział Gospodarczy Krajowego Rejestru Sądowego, o numerze identyfikacji podatkowej (NIP) - 526-021-29-31 i kapitale zakładowym całkowicie wpłaconym w wysokości 1 213 116 777,00 złotych.
					</p>

			</div>
			<div class="imgBx"></div>
		</section>

		<section class="services">
			<h2 class="heading">Rób co chcesz </h2>
			<p class="text">Jesteśmy Najlepszym bankiem w Polsce oferujemy wiele możliwośći jakich w innych bankach nie ma wystarczy sprawdzić nasze oferty i samemu się przekonać. Nie trać czasu przejdź do nas już dziś wystarczy kilka prostych kliknięć.</p>
			<div class="container">
				<div class="serviceBx">
					<div>
						<img src="{{ asset("img/ico1.svg") }}">
						<h2>Konta</h2>
					</div>					
				</div>
				<div class="serviceBx">
					<div>
						<img src="{{ asset("img/ico2.svg") }}">
						<h2>Kredyty</h2>
					</div>					
				</div>
				<div class="serviceBx">
					<div>
						<img src="{{ asset("img/ico3.svg") }}">
						<h2>Oszczędności i Inwestycje</h2>
					</div>					
				</div>
			</div>
		</section>

		<section class="technology">
			<div class="contentBx">
				<h2 class="heading">Jakiś ciekawy napis</h2>
				<p class="text">Pellentesque tincidunt, tortor sit amet auctor tristique, odio est viverra enim, ac tincidunt orci sapien nec diam. Nullam ornare condimentum sapien vel bibendum. Vivamus massa sapien, ultricies ac condimentum nec, dictum sit amet magna. Cras ultricies arcu maximus, viverra urna posuere, lacinia arcu. Etiam volutpat ex ac nulla iaculis commodo. Sed at magna cursus, euismod ligula commodo, dictum ante. Ut laoreet neque ut ex tincidunt, et laoreet dolor finibus. In posuere diam ac nibh hendrerit ornare.</p>

			</div>

		</section>

		<section class="client">
			<h2 class="heading" >Dbamy o to, co dla Ciebie ważne</h2>
			<p class="text">Każdego dnia dążymy do zwiększania poziomu bezpieczeństwa, jak również propagowania wiedzy na ten temat. Troska o środowisko naturalne jest jednym z kluczowych zobowiązań Banku Orion. Naszą misją jest odpowiedzialne inwestowanie w ludzi, pomysły i projekty.</p>
			<div class="imgBx">
				<img src="{{ asset("img/bran1.jpg") }}">
				<img src="{{ asset("img/bran2.jpg") }}">
				<img src="{{ asset("img/bran3.jpg") }}">
				
			</div>
		</section>

		<section class="testimonials">
			<h2 class="heading">Co nowego</h2>
			<div class="container">
				<div class="contentBx">
					<div>
						<p>Orion Bank Polska przekazał środki na wykonanie 1000 testów na obecność SARS-CoV-2. Dzięki temu szpitale i placówki medyczne będą mogły zlecić bezpłatnie badania do laboratorium Warsaw Genomics. Zgodnie z zaleceniami Światowej Organizacji Zdrowia (WHO) tylko poprzez wykonywanie dużej ilości testów uda nam się przerwać łańcuch dalszych zakażeń. Dodatkowo zakupiliśmy 20 000 maseczek ochronnych, które przekażemy do placówek medycznych. #ZostańWDomu</p>
					<br/>
					<h3>1000 testów i 20 000 maseczek dla wspólnego bezpieczeństwa</h3>
					</div>
				</div>
				<div class="contentBx">
					<div>
						<p>Dzięki OrionMobile, aplikacji mobilnej Banku Orion , nie tylko można kupić bilet warszawskiej komunikacji miejskiej, ale też zapłacić za parkowanie na jednym ze stołecznych parkingów. W obu przypadkach płatność jest prosta i w pełni zdalna.</p>
					<br/>
					<h3>Płatności za parkowanie i bilety komunikacji miejskiej w aplikacji OrionMobile. Bank Orion ułatwia bezpieczne podróżowanie</h3>
					</div>
				</div>
			</div>
		</section>

		<section class="footer">
			<p class="text">Orion.com &copy; 2020 Najlepszy Bank w Polsce i najlepsza strona wykonał Konrad Mielnik.</p>
			<ul>
				<p class="text">Follow us on:</p>
				<li><a href="#"><img src="{{ asset("img/facebook.png") }}"></a></li>
				<li><a href="#"><img src="{{ asset("img/twitter.png") }}"></a></li>
				<li><a href="#"><img src="{{ asset("img/linkedin.png") }}"></a></li>
				<li><a href="#"><img src="{{ asset("img/youtube.png") }}"></a></li>
			</ul>
		</section>
  </body>
</html>