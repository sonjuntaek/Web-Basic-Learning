<?php

$d1 = new DateTime;
$d1->setTimezone(new DateTimezone($_POST['timezone']));
echo json_encode($d1->format($_POST['format']));
?>
