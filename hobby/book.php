<?php
require_once(__DIR__."/../php/template.php");

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
}
EOT;

$P =  new Page("Maciej Hajduk- Hobby", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);

// Wyświetlamy początek strony
echo $P->Begin();
echo $P->PageHeader();
?>

<br>
<div class="row middle">
	<div class="col-6-6 head shadow nave orange">
		2018
	</div>
</div>

<div class="row middle">
	<div class="col-3-6 head shadow">
		<p>Markus Zusak - Złodziejka Książek</p>
	</div>
	<div class="col-3-6 head shadow">
		<p>Waldemar Łysiak - Perfidia</p>
	</div>
</div>
<div class="row middle">
	<div class="col-3-6 shadow">
		<p class="textbox">Liesel Meminger swoją pierwszą książkę kradnie podczas pogrzebu młodszego brata. To dzięki „Podręcznikowi grabarza” uczy się czytać i odkrywa moc słów. Później przyjdzie czas na kolejne książki: płonące na stosach nazistów, ukryte w biblioteczce żony burmistrza i wreszcie te własnoręcznie napisane… Ale Liesel żyje w niebezpiecznych czasach. Kiedy jej przybrana rodzina udziela schronienia Żydowi, świat dziewczynki zmienia się na zawsze…</p>
	</div>
	<div class="col-3-6 shadow">
		<p class="textbox">Zbiór opowiadań kryminalnych, które Waldemar Łysiak popełnił pod pseudonimem Valdemar Baldhead. Głównymi bohaterami opowiadań są policjanci, czas i strach, przy czym cechą wspólną każdego z osobna jest nietuzinkowe zakończenie przesycone tytułową perfidią.</p>
	</div>
</div>

<div class="row middle">
	<div class="col-6-6 head shadow">
		<p>Wiktor Pielewin - Hełm Grozy</p>
	</div>
</div>
<div class="row middle">
	<div class="col-6-6 shadow">
		<p class="textbox">Dlaczego Minotaur ma głowę byka? Jak myśli i o czym? Czy jego umysł jest funkcją ciała, czy też zewnętrzna postać jest tylko obrazem w jego umyśle? Czy to Tezeusz jest w środku Labiryntu? Czy może Labirynt istnieje w Tezeuszu? Czy oba twierdzenia są prawdziwe? A może oba fałszywe?
			Akcja Hełmu grozy rozgrywa się w świecie wirtualnym, w świadomości bohaterów uwikłanych w sieć wszech-otaczającego ich labiryntu. próbują go rozszyfrować, rozsadzić, przedostać się do innej rzeczywistości.
		Pielewin dokonał nowatorskiej interpretacji popularnego mitu, którego wątki i najważniejsze treści ujawniają się wraz z rozwojem zagadkowego czatu internetowego.</p>
	</div>
</div>
<br>
<div class="row middle">
	<div class="col-6-6 head shadow nave orange">
		2017
	</div>
</div>

<div class="row middle">
	<div class="col-3-6 head shadow">
		<p>Arthur C. Clarke - 2001: Odyseja Kosmiczna</p>
	</div>
	<div class="col-3-6 head shadow">
		<p>Piotr C. - Brud</p>
	</div>
</div>
<div class="row middle">
	<div class="col-3-6 shadow">
		<p class="textbox">Nie jest nam dane odgadnąć, jak wiele z tych potencjalnych rajów lub piekieł jest zamieszkanych i przez jakiego rodzaju istoty.</p>
		<p class="textbox">Najbliższy z nich znajduje się milion razy dalej niż Mars czy Wenus, które nadal stanowią odległe cele kolejnych pokoleń. Lecz przełamujemy bariery odległości i być może któregoś dnia spotkamy pośród gwiazd równych sobie, jeśli nie potężniejszych...</p>
	</div>
	<div class="col-3-6 shadow">
		<p class="textbox">Relu nie lubi ludzi, ale ludzie lubią jego. Przychodzą, aby mu się zwierzać. Pije więc i słucha ludzkich tajemnic w świecie, gdzie kobiety są łatwe, a mężczyźni bezduszni. Prowadzone rozmowy bezlitośnie obnażają brud błyszczącego i wymuskanego świata mężczyzn w drogich garniturach i kobiet w jeszcze droższych kostiumach.</p>
	</div>
</div>

<div class="row middle">
	<div class="col-6-6 head shadow">
		<p>Dmitrij Głuchowski - Metro 2033</p>
	</div>
</div>
<div class="row middle">
	<div class="col-6-6 shadow">
		<p class="textbox">„Metro 2033” jest przypowieścią o postnuklearnej Moskwie, gdzie ci, którzy przeżyli kryją się przed promieniowaniem i nowymi formami życia w stołecznym metrze – największym schronie przeciwatomowym świata. Rozproszone grupki ludzi tworzą państwa-miasta na stacjach kolejki podziemnej, handlując, wojując i układając się między sobą. Bohater książki, Artem, aby ocalić swoją stację, jest zmuszony do wyprawy na drugi koniec metra, podczas której pokonuje liczne niebezpieczeństwa i poznaje nowe społeczności, które powstały po wojnie. Im dłużej szedł, im więcej poznawał światopoglądów, tym bardziej przekonywał się, że cała jego wyprawa jest pozbawiona sensu. W końcu staje przed wyborem: czy jest sens iść dalej?</p>
	</div>
</div>
<br>

<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>

<?php
echo $P->End();
?>