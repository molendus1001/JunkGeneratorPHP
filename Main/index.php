<?php
$i = 0;
function generateRandomString($length = 10) { //source: https://stackoverflow.com/questions/4356289/php-random-string-generator
    $characters = '._-0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo "if (true == false) { ";               //This Code will never execute, and it will not use cpu.
while( $i < 999) {                          //number of loops
echo "char Junk";                           //name of char
echo $i;                                    //echo number of line
echo "[1024] = \"";                         //maximum size of char
echo generateRandomString(rand(900, 1020)); //length of random string, edit rand to pick minimum and maximum random length, going above 1024 will result in compilator errors unless you change maximum value in line above
echo "\";</br>";                            //visual studio don't like when you use one very long line, it will be likely to freeze
$i++;}
echo "}";
?>
