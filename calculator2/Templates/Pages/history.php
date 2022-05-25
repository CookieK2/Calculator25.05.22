<div class="history">
<p>History of your calculations: </p>
<?php 
$CalcHistory = file_get_contents('CalcHistory.txt');
echo $CalcHistory;
?>
</div>