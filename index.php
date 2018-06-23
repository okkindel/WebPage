<?php
require_once __DIR__ . "/php/template.php";

$DESCRIPTION = "Maciej Hajduk Homepage.";

$P = new Page("Maciej Hajduk", ".");
$P->SetDescription($DESCRIPTION);
$P->AddJS("imagePromise.js");
$P->AddJS("localStorage.js");
echo $P->Begin();
echo $P->PageHeader();
?>

<div class="row">
		<div class="col-2-6">
		 <img src="assets/low_me.jpg" id="photo" class="shadow" alt="me"/>
		</div>
		<div class="col-4-6">
	<div id="about">
		<header>Kim jestem?</header>
		<p id="text">Jestem studentem czwartego semestru informatyki na Wydziale Podstawowych Problemów Techniki Politechniki Wrocławskiej. Szkołę średnią - Liceum Ogólnokształcące numer IX - skończyłem we Wrocławiu. Maturę napisałem w maju 2016 roku, w tym też roku dostałem się na studia. Poza punktami z matur i przedmiotów, dostałem dodatkowe 50 punktów za ocenę celującą z konkursu organizowanego przez PWr - studium talent. Cieszę się, że wybrałem właśnie ten kierunek, odpowiada on moim zainteresowaniom i pozwala się swobodnie rozwijać w pożądanym przeze mnie kierunku.</p>
	</div>
	</div>
</div>

<div class="row">
	<div class="col-2-6 head shadow">
		<header>Menu</header>
	</div>
	<div class="col-4-6 head shadow">
		<header>Hobby</header>
	</div>
</div>

<nav class="row">
	<div class="col-2-6 shadow" id="edukacja">
		<div class="row">
			<div class="col-6-6">
				<a href="semester/first.php">Semestr I (2016/2017)</a>
				<a href="semester/second.php">Semestr II (2016/2017)</a>
				<a href="semester/third.php">Semestr III (2017/2018)</a>
				<a href="semester/fourth.php">Semestr IV (2017/2018)</a>
			</div>
		</div>
		<div class="row" id="comentary">
			<div class="col-6-6">
				<hr>
				<a href="commentary/">Skomentuj Stronę!</a>
			</div>
		</div>
	</div>
	<div class="col-4-6 shadow" id="hobby">
		<div class="row centered">
			<div class="col-3-6">
				<a href="http://www.github.com/okkindel"><i class="material-icons">code</i>
					<p>
						Staram się aktywnie rozwijać swoje umiejętności. Obecnie pracuję w JAVA i Javascript mam również solidne podstawy w językach C, C++, Python i Bash. Używałem frameworków takich jak Spring, Phaser, React, Node. Znam i korzystam codziennie z systemu kontroli wersji Git i LINUX / UNIX.
					</p>
				</a>
			</div>
			<div class="col-3-6">
				<a href="https://okkindel.deviantart.com"><i class="material-icons">photo_filter</i>
					<p>
						Zwykle samodzielnie tworzę grafikę do moich projektów. Od wielu lat pracuję nad grafiką komputerową. Poza programowaniem, często jestem także artystą w moim zespole. Znam wiele programów graficznych, w tym Photoshopa, ale najlepiej pracuję z GIMP.
					</p>
				</a>
			</div>
		</div>
		<div class="row centered">
			<div class="col-3-6">
				<a href="https://www.instagram.com/okkindel/"><i class="material-icons">photo_camera</i>
					<p>
						Jestem fotografem samoukiem. Od kilku lat staram się doskonalić swoje umiejętności w dziedzinie fotografii. Myślę, że opanowałem całą teorię i naprawdę dużo praktyki. To jest hobby, któremu lubię poświęcać się w wolnym czasie.
					</p>
				</a>
			</div>
			<div class="col-3-6">
				<a href="hobby/book.php"><i class="material-icons">book</i>
					<p>
						W wolnym czasie staram się czytać jak najwięcej książek. Jest to mój sposób relaksu i oderwania od rzeczywistości. Uważam, że każdy człowiek powinien być oczytany na tyle, by móc porozmawiać z bliźnim na dowolny temat.
					</p>
				</a>
			</div>
		</div>
	</div>
</nav>

<?php
echo $P->End();
?>