<?php
$len = $_POST['len'];
$qua = $_POST['qua'];
$son = $_POST['son'];
if ($son==1){
    # uppercase letters, lowercase letters and special characters
    $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&/\()=?{[]}';
}
elseif (son==0) {
    # only uppercase letters and lowercase letters
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
}
for ($i = 1; $i <= $qua; $i++) {
    $ranstr = substr(str_shuffle(str_repeat($chars, ceil($len/strlen($chars)) )),0,$len);
    echo $ranstr;
}
?>