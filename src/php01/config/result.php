<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$radio = htmlspecialchars($_GET['radio'], ENT_QUOTES);
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);

print "私の名前は、" . $name . "<br>" . "ご希望の商品は、" . $radio . "<br>" . "注文数は、" . $number;
