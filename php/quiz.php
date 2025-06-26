<!DOCTYPE html>
<html>
<body>

<?php
$x = 1;
$y = 2;
$z = 1;

if ($x == $y && $y == $z && $x == $z) {
  echo "Segitiga Sama Sisi";
} elseif ($x != $y && $y != $z && $x != $z) {
  echo "Segitiga Sembarang";
} else {
  echo "Segitiga Sama Kaki";
}

if ($x == $y && $y == $z) {
    echo "Segitiga Sama Sisi";
} elseif ($sx == $y || $x == $z || $y == $z) {
    echo "Segitiga Sama Kaki";
} else {
    echo "Segitiga Sembarang";
}
?>


</body>
</html>