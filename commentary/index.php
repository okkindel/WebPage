<?php
require_once __DIR__ . "/../php/template.php";
require_once __DIR__ . "/../php/section.php";

$servername = "localhost";
$username = "root";
$password = "Varden97";
$dbname = "Glosary";

$DESCRIPTION = "Maciej Hajduk Homepage.";
$STYLE = <<<EOT
@media screen and (min-width: 640px) {
	#container {
	    width: 70%;
    }
}
EOT;

$P = new Page("Maciej Hajduk - Komentarze", "..");
$P->SetDescription($DESCRIPTION);
$P->AddInnerStyle($STYLE);
$P->AddJS("toast.js");
echo $P->Begin();
echo $P->PageHeader();

$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT name, header, data FROM Glosary";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo gloasrry(
            $row["name"],
            $row["header"],
            $row["data"]
        );
    }
}
$connection->close();
?>

<br><br>
<form action="../php/insert.php" method="post">
    <div class="row middle">
        <div class="col-3-6">
            <p>
                <label for="name">Imię i nazwisko:</label>
                <br>
                <input type="text" name="name" id="name" required>
            </p>
            <p>
                <label for="header">Nagłówek:</label>
                <br>
                <input type="text" name="header" id="header" required>
            </p>
            <p>
                <br>
                <input type="submit" class="button" value="Wyślij">
            </p>
        </div>
        <div class="col-3-6">
            <p>
                <label for="data">Treść komentarza:</label>
                <br>
                <input type="text" name="data" id="data" required>
            </p>
            <p>
            <label for="captcha">Podaj cykl w poniższej prermutacji, rozpoczynający się od 0:</label>
            <br>
                <input type="text" name="captcha" id="captcha" required>
            </p>
            <p>
                <br>
                <img id="permutation" alt="catpcha" src="../php/captcha.php" />
            </p>
        </div>
    </div>
</form>
<br>

<div id="toast" class="shadow"></div>
<a href="../index.php"><img src="../assets/home.png" alt="home" id="return"></a>

<?php echo $P->End(); ?>