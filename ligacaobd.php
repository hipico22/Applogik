<?php
// Liga ao MySQL 'localhost','root'
$ligaBD = mysqli_connect('applogik_1','oratoroeuarolha');

if (!$ligaBD){
echo "<br>Erro: Não foi possivel escolher estabelecer ligação com o MySQL";
exit;
}
// Liga a BD
$escolhaBD = mysqli_select_db($ligaBD,'applogik_1');
if (!$escolhaBD){
echo "<br>Erro: Ao escolher a BD";
exit;
}
    
    mysqli_set_charset($ligaBD,"utf8");
?>
