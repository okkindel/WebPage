<?php
require_once __DIR__ . "/../php/template.php";
require_once __DIR__ . "/../php/section.php";

$DESCRIPTION = "Maciej Hajduk Homepage.";
$STYLE = <<<EOT
@media screen and (min-width: 640px) {
	#container {
	    width: 70%;
    }
}
EOT;

$P = new Page("Maciej Hajduk - Semestr 3", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
$P->AddMath();
echo $P->Begin();
echo $P->PageHeader();

echo lecture(
    "Metody Probabilistyczne i Statystyka",
    "Zaprezentowanie podstaw rachunku prawdopodobienstwa i statystyki oraz pokazanie przykładów metod probabilistycznych.",
    "Praktyczne opanowanie podstawowych metod rachunku prawdopodobienstwa i statystyki oraz metod probabilistycznych.",
    '$$ X_n  = \sum_{k} \frac{k}{n} \mathbb{1}_{\{\omega: \frac{k}{n}\leq X(\omega)\lt \frac{k+1}{n}\}}~ $$',
    ":",
    "Powtórzę statystykę",
    "Dystrybuanta i podstawowe nierówności",
    "Przestrzenie probabilistyczne"
);

echo lecture(
    "Technologia Programowania",
    "Przedstawienie podstawowych zagadnieniem związanych z technologią oprogramowania.",
    "Ćwiczenie zagadnień dotyczących projektowania oprogramowania.",
    "Dostarczenie umiejętnosci praktycznych wzorców projektowych, tworzenia oceny i realizacji oprogramowania.",
    ":",
    "Pozostałe wzorce projektowe",
    "Przysłanianie metod i ziennych"
);

echo lecture(
    "Bazy Danych",
    "Przedstawienie podstawowych aspektów systemów baz danych oraz obsługi danych.",
    "Praktyczne przecwiczenie podstawowych aspektów związanych z bazami danych.",
    "Implementacja podstawowych aspektów związanych z bazami danych w wybranym systemie bazodanowym.",
    ":",
    "Algebra relacji",
    "Nierelacyjne bazy danych"
);

echo lecture(
    "Architektura Systemów i Systemy Operacyjne",
    "Zapoznanie się ze strukturą i budową współczesnych procesorów, komputerów i systemów operacyjnych.",
    "Umiejętnosć projektowania prostych układów logicznych składających się na budowę procesora.",
    "Umiejętnosć programowania mechanizmów systemowych i współpracy z urządzeniami komputera.",
    ":",
    "Skończę swoją powłokę",
    "Przypomnę sobie sygnały prerwania"
);

?>

<br>

<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>
<a href="second.php"><img src="../assets/prev.png" alt="prev" id="prev"></a>
<a href="fourth.php"><img src="../assets/next.png" alt="next" id="next"></a>

<?php
echo $P->End();
?>