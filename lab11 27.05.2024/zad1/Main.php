

<?php
require_once "Ubezpieczenie.php";

$auto = new Ubezpieczenie("Fiat Seicento",10000, 300, 0, 200, 0.05, 10);

    echo $auto->obliczCene();
?>
