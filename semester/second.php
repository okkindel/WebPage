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

$P = new Page("Maciej Hajduk - Semestr 2", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
$P->AddMath();
echo $P->Begin();
echo $P->PageHeader();

echo lecture(
    "Matematyka Dyskretna",
    "Omówienie najwazniejszych elementów Matematyki Dyskretnej wykorzystywanych w Informatyce do analizy oraz projektowania algorytmów.",
    "Opanowanie formalnych narzędzi Matematyki Dyskretnej oraz nabranie praktycznej wprawy w posługiwaniu się podstawowymi obiektami matematyki dyskretnej.",
    '$$ \displaystyle {r+s\choose k}=\sum_j{r\choose j}{s\choose k-j} $$',
    ":",
    "Powtórzenie aspektów z przedmiotu",
    "Liczby Sterlinga",
    "Rozwinięcia sum"
);

echo lecture(
    "Analiza Matematyczna II",
    "Omówienie podstawowych pojęć, twierdzeń oraz metod analizy matematycznej funkcji wielu zmiennych rzeczywistych.",
    "Praktyczne opanowanie podstawowych metod analizy funkcji wielu zmiennych rzeczywistych (przestrzenie metryczne, rózniczkowanie, ekstrema, całkowanie).",
    '$$ \displaystyle\int_a^b \!\!f(x)\, dx=\int_a^c \!\! f(x)\, dx+\int_c^b\!\! f(x)\, dx $$',
    ":",
    "Przestrzenie wielowymiarowe",
    "Przestrzeie nieeuklidesowe",
    "Całka krzywoliniowa"
);

echo lecture(
    "Algebra Abstrakcyjna i Kodowanie",
    "Omówienie podstawowych struktur, twierdzen występujących w algebrze oraz zapoznanie studentów z teorią liniowych kodów korekcyjnych.",
    "Praktyczne opanowanie i stosowanie metod i narzędzi algebry abstrakcyjnej i kodów korekcyjnych.",
    '$$ M \cdot \left(\sum_{i=0}^{k}\binom{n}{i}(q-1)^i\right)  \leq q^n $$',
    ":",
    "Dziedziny Ideałów Głównych",
    "Powtórzenie zagadnień z kodowania",
    "Dzielniki normalne. RSA",
    "Pierścienie i ideały"
);

echo lecture(
    "Problemy Prawne Informatyki",
    "Przedstawienie przepisów, zasad funkcjonowania systemu prawnego i dobrych praktyk w zakresie funkcjonowania w systemie prawnym.",
    ":",
    "Umieszczanie autorów projekcie",
    "Prawo autorskie"
);

echo lecture(
    "Fizyka",
    "Nabycie podstawowej wiedzy z następujących działów fizyki: Mechaniki klasycznej, Ruchu drgającego, Elektrycznosci i magnetyzmu z elementami optyki geometrycznej i falowej, Szczególnej teorii względnosci, Fizyki kwantowej.",
    '$$ F = am $$',
    ":",
    "Bryła sztywna"
);

?>

<br>

<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>
<a href="first.php"><img src="../assets/prev.png" alt="prev" id="prev"></a>
<a href="third.php"><img src="../assets/next.png" alt="next" id="next"></a>

<?php
echo $P->End();
?>