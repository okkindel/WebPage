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

$P = new Page("Maciej Hajduk - Semestr 1", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
$P->AddMath();
echo $P->Begin();
echo $P->PageHeader();

echo lecture(
    "Algebra z Geometrią Analityczną",
    "Poznanie własnosci podstawowych pojęć algebry, algebry liniowej i geometrii analitycznej.",
    "Zdobycie praktycznych umiejętnosci stosowania podstawowych pojęć algebry, algebry liniowej i geometrii analitycznej.",
    '$$ |a+b\cdot i| = \sqrt{a^2+b^2} $$',
    ":",
    "Macierz hermitowska",
    "Symplektyczność formy dwuliniowej",
    "Iloczyny tensorowe",
    "Funkcjonał półtoraliniowy"
);

echo lecture(
    "Analiza Matematyczna I",
    "Omówienie podstawowych pojęć twierdzeń oraz metod analizy matematycznej funkcji jednej zmiennej rzeczywistej.",
    "Praktyczne opanowanie podstawowych metod analizy funkcji jednej zmiennej rzeczywistej (granice ciągów i funkcji, rózniczkowanie, całkowanie, szeregi potęgowe).",
    '$$ \frac{d}{d t} \int_{a}^{t} f(x) dx = f(t) $$',
    ":",
    "Całka Lebesgue’a",
    "Całka Riemanna",
    "Twierdzenie Newtona-Leibniza",
    "Całka Henstocka–Kurzweila"
);

echo lecture(
    "Wstęp do Informatyki i Programowania",
    "Zapoznanie się z podstawowymi zagadnieniami informatyki a szczególnie z algorytmiką.",
    "Opanowanie umiejętnosci projektowania i analizy prostych algorytmów.",
    "Opanowanie umiejętnosci projektowania prostych algorytmów i implementacji w języku C.",
    ":",
    "Przeciążanie operatorów w C++"
);

echo lecture(
    "Logika i Struktury Formalne",
    "Omówienie podstawowych pojęć twierdzeń oraz metod rachunku zdań, rachunku kwantyfikatorów, teorii zbiorów oraz struktur formalnych.",
    "Praktyczne opanowanie podstawiwych metod rachunku zdań, rachunku kwantyfikatorów, teorii zbiorów oraz struktur formalnych.",
    '$$ |A|\le |B|\land |B|\le |A|\longrightarrow |A|=|B| $$',
    ":",
    "Struktury Formalne",
    "Teoria Modeli",
    "Sygnatury Językowe",
    "Interpretacja termów w modelu M"
);

?>
<br>
<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>
<a href="../index.php"><img src="../assets/prev.png" alt="prev" id="prev"></a>
<a href="second.php"><img src="../assets/next.png" alt="next" id="next"></a>
<?php
echo $P->End();
?>