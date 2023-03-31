</html>
<form action="reto.php" method="post" <input type="number" name="número" placeholder="digita un número" required>
    <button>Iniciar</button><br><br><br>
</form>
<?php
$n = $_POST['num']??0;
echo "<table border='1' aling='center'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>.$i.</td><tr> ";
}
;
?>