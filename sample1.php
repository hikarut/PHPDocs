<?php

/*
$string = "Hello World";
echo $string . "\n";
 */


$email = "ht.hikaru.takahashi+testccc@gmail.com";
$subject = "aaa";
$message = "こちらは自動送信されています。";

$result = mb_send_mail($email, $subject, $message);

if ($result) {
    echo "メールを送信しました。\n";
} else {
    echo "メールの送信に失敗しました。\n";
}

?>
