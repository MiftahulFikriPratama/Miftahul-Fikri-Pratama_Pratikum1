<!DOCTYPE html>
<html>
<head>
<body>
<?php   
$tims = ["erwin","heru","ali","zaki"];
array_pop($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}
?>
</body>
</html>