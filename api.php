<?php
$len = $_POST['len'];
$qua = $_POST['qua'];
$son = $_POST['son'];
if ($son==1){
    # Прописные, строчные и специальные символы
    $zeichen='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&/\()=?{[]}';
}
elseif (son==0) {
    # прописные и строчные буквы
    $zeichen = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
}
for ($i = 1; $i <= $qua; $i++) {
    $ranstr = substr(str_shuffle(str_repeat($zeichen, ceil($len/strlen($zeichen)) )),0,$len);
    echo $ranstr;
}
?>