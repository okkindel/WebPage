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

$P =  new Page("Maciej Hajduk - Semestr 2", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
echo $P->Begin();
echo $P->PageHeader();

echo section(
	"Problemy Prawne Informatyki",
	"Przedstawienie przepisów, zasad funkcjonowania systemu prawnego i dobrych praktyk w zakresie funkcjonowania w systemie prawnym.",
	":",
	"Umieszczanie autorów projekcie"
);

echo section(
	"Fizyka",
	"Nabycie podstawowej wiedzy z następujących działów fizyki: Mechaniki klasycznej, Ruchu drgającego, Elektrycznosci i magnetyzmu z elementami optyki geometrycznej i falowej, Szczególnej teorii względnosci, Fizyki kwantowej.",
	":",
	"Wystarczy mi fizyki w życiu..."
);

echo section(
	"Matematyka Dyskretna",
	"Omówienie najwazniejszych elementów Matematyki Dyskretnej wykorzystywanych w Informatyce do analizy oraz projektowania algorytmów.",
	"Opanowanie formalnych narzędzi Matematyki Dyskretnej oraz nabranie praktycznej wprawy w posługiwaniu się podstawowymi obiektami matematyki dyskretnej.",
	":",
	"Powtórzenie aspektów z przedmiotu"
);

echo section(
	"Analiza Matematyczna II",
	"Omówienie podstawowych pojęć, twierdzeń oraz metod analizy matematycznej funkcji wielu zmiennych rzeczywistych.",
	"Praktyczne opanowanie podstawowych metod analizy funkcji wielu zmiennych rzeczywistych (przestrzenie metryczne, rózniczkowanie, ekstrema, całkowanie).",
	":",
	"Analizy również wystarczy."
);

echo section(
	"Algebra Abstrakcyjna i Kodowanie",
	"Omówienie podstawowych struktur, twierdzen występujących w algebrze oraz zapoznanie studentów z teorią liniowych kodów korekcyjnych.",
	"Praktyczne opanowanie i stosowanie metod i narzędzi algebry abstrakcyjnej i kodów korekcyjnych.",
	":",
	"Powtórzenie zagadnień z kodowania"
);

?>

<br>

<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>
<a href="first.php"><img src="../assets/prev.png" alt="prev" id="prev"></a>
<a href="third.php"><img src="../assets/next.png" alt="next" id="next"></a>

<?php
echo $P->End();
?>