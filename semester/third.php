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

$P =  new Page("Maciej Hajduk - Semestr 3", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
echo $P->Begin();
echo $P->PageHeader();

echo section(
	"Technologia Programowania",
	"Przedstawienie podstawowych zagadnieniem związanych z technologią oprogramowania.",
	"Ćwiczenie zagadnień dotyczących projektowania oprogramowania.",
	"Dostarczenie umiejętnosci praktycznych wzorców projektowych, tworzenia oceny i realizacji oprogramowania.",
	":",
	"Pozostałe wzorce projektowe"
);

echo section(
	"Bazy Danych",
	"Przedstawienie podstawowych aspektów systemów baz danych oraz obsługi danych.",
	"Praktyczne przecwiczenie podstawowych aspektów związanych z bazami danych.",
	"Implementacja podstawowych aspektów związanych z bazami danych w wybranym systemie bazodanowym.",
	":",
	"Algebra relacji"
);

echo section(
	"Architektura Systemów i Systemy Operacyjne",
	"Zapoznanie się ze strukturą i budową współczesnych procesorów, komputerów i systemów operacyjnych.",
	"Umiejętnosć projektowania prostych układów logicznych składających się na budowę procesora.",
	"Umiejętnosć programowania mechanizmów systemowych i współpracy z urządzeniami komputera.",
	":",
	"Skończę swoją powłokę"
);

echo section(
	"Metody Probabilistyczne i Statystyka",
	"Zaprezentowanie podstaw rachunku prawdopodobienstwa i statystyki oraz pokazanie przykładów metod probabilistycznych.",
	"Praktyczne opanowanie podstawowych metod rachunku prawdopodobienstwa i statystyki oraz metod probabilistycznych.",
	":",
	"Powtórzę statystykę"
);

?>

<br>

<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>
<a href="second.php"><img src="../assets/prev.png" alt="prev" id="prev"></a>
<a href="fourth.php"><img src="../assets/next.png" alt="next" id="next"></a>

<?php
echo $P->End();
?>