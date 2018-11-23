<?php


echo $_SERVER['DOCUMENT_ROOT'];
echo "<br/>";
echo $_SERVER["PHP_SELF"];
echo "<br/>";


function runurl($url) {
    $ch = curl_init();    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);			
    curl_exec($ch);
    curl_close($ch);
    
}

//$CHATID=352163327; for 798
$CHATID=476754297;
$KEY="342184435:AAFnq3silr-yZgUT2iWdtXzIowHACvet8z0";
$MSG=$_GET["msg"];
$URL="https://api.telegram.org/bot$KEY/sendMessage"."?chat_id=" . $CHATID . "&text=" . $MSG;
echo "<br/>";
echo "<br/>";
echo $MSG;
echo "<br/>";
echo "<br/>";
echo $URL;
echo "<br/>";
echo "<br/>";

 runurl($URL);



/*
$url=$URL;
echo $url;

   $mystring = get_data($url);

//echo "hi!";

echo $mystring;

function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
*/

?>