<?php
require_once(__DIR__."/../php/template.php");
require_once(__DIR__."/../php/section.php");

$DESCRIPTION = "Maciej Hajduk Homepage.";
$STYLE =<<<EOT
.nave {
	padding-top: 5px;
	padding-bottom: 5px;
	font-size: 1.5em;
}
@media screen and (min-width: 640px) {
		#container {
	width: 70%;
}
.middle {
	margin: 0 10%;
}
}
EOT;

$P =  new Page("Maciej Hajduk - Semestr 4", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
echo $P->Begin();
echo $P->PageHeader();

echo section(
	"Technologie Sieciowe",
	"Omówienie podstaw sieci LAN i WAN. Przedstawienie architektury Internetu oraz protokołów komunikacyjnych.",
	"Przekazanie podstaw tworzenia aplikacji sieciowych wykorzystujących rózne protokoły komunikacyjne.",
	":",
	"Dodatkowe protokoły sieciowe"
);

echo section(
	"Algorytmy i Struktury Danych",
	"Poznanie podstawowych algorytmów i struktur danych, nauka metodologii budowy algorytmów i struktur danych, nauka teorii analizy algorytmów i struktur danych.

",
	"Praktyczne opanowanie algorymtów i struktur danych omówionych na wykładzie, opanowanie metodologii budowy algorytmów i struktur danych, opanowanie praktycznej analiza algorytmów i struktur danych.",
	":",
	"Przeczytam całego Cormena"
);

echo section(
	"Nowoczesne Technologie WWW",
	"Omówienie nowoczesnych paradygmatów oraz narzędzi służących do tworzenia stron WWW.",
	"Zapoznanie się z nowoczesnymi narzędziami służącymi do budowania stron WWW.",
	":",
	"Przerobię porządnie kurs PHP"
);

echo section(
	"Wprowadzenie do Teorii Grafów",
	"Wprowadzenie do teorii grafów.",
	"Lepsze zrozumienie materiału omawianego na wykładzie.",
	":",
	"Zastosowanie grafów w informatyce"
);

echo section(
	"Grafika Komputerowa i Wizualizacja",
	"Opanowanie podstawowych metod współczesnej grafiki komputerowej oraz metod wizualizacji danych numerycznych.",
	"Opanowanie narzędzi formalnych współczesnej grafiki komputerowej.",
	"Opanowanie podstawowych narzędzi oraz metod współczesnej grafiki komputerowej (SVG, HTML5, OpenGL, ray-tracing).",
	":",
	"Mapy normalne",
	"Jak dodać dwuwymiarowe sprajty w moim silniku 3D"
);

?>

<br>

<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>
<a href="third.php"><img src="../assets/prev.png" alt="prev" id="prev"></a>
<a href="../index.php"><img src="../assets/next.png" alt="next" id="next"></a>

<?php
echo $P->End();
?>