<?php
$a = 7;

if ($a === 5) {
    echo "\$aは5です"; // \をつけて文字列にしている
} elseif ($a === 7) {
    echo "\$aは7です";
} else {
    echo "\$aは5と7以外です";
}

$people = "Saburo";

switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
}

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;
