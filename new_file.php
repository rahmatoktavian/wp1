<!DOCTYPE html>
<html>
<body>

<?php 
$cars = ["Audi", "BMW", "Mercedes", "Porsche", "VW"];
for($index=0; $index<=4; $index+=2) {
    echo $cars[$index].',';
}

foreach($cars as $index=>$value) {
    if($index%2 == 0) {
        echo $index.' '.$value.'<br />';
    }
}
?>


</body>
</html>
