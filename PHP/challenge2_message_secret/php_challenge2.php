<?php

//message 1
$message1="0@sn9sirppa@#?ia’jgtvryko1";
$lengthMessage=mb_strlen($message1);
$halfLengthMessage=$lengthMessage/2;
$subStringMessage=mb_substr($message1, 5, $halfLengthMessage);
$replacePartMessage=str_replace('@#?', ' ', $subStringMessage);
$reverseMessage=strrev($replacePartMessage);
echo $reverseMessage;
echo "<br/>";

//message2
$message2="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$lengthMessage=mb_strlen($message2);
$halfLengthMessage=$lengthMessage/2;
$subStringMessage=mb_substr($message2, 5, $halfLengthMessage);
$replacePartMessage=str_replace('@#?', ' ', $subStringMessage);
$reverseMessage=strrev($replacePartMessage);
echo $reverseMessage;
echo "<br/>";

//message 3
$message3="aopi?sgnirts@#?sedhtg+p9l!";
$lengthMessage=mb_strlen($message3);
$halfLengthMessage=$lengthMessage/2;
$subStringMessage=mb_substr($message3, 5, $halfLengthMessage);
$replacePartMessage=str_replace('@#?', ' ', $subStringMessage);
$reverseMessage=strrev($replacePartMessage);
echo $reverseMessage;
echo "<br/>";
?>