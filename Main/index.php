<style>
/* https://stackoverflow.com/questions/2310734/how-to-make-html-text-unselectable */
.unselectable {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>
<div class="unselectable">
<a href=index.php?m=0><button type="button">Generate Passive if statement Junk</button></a>
<a href=index.php?m=1><button type="button">Generate Unreachable Switch/Case[int] Junk</button></a>
<br><br>
</div>

<?php
$i = 0;											//Line counter to begin with
function generateRandomString($length = 99) {	//source: https://stackoverflow.com/questions/4356289/php-random-string-generator
    $characters = '._-0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if ($_GET["m"] == 1) {
	echo "case " . rand(2000000000, 2147483646) .":<br>";			//This case uses very big number that is unlikely to be used in normal cases
}

echo "if (true == false) { <br>";	/*preventing error 'initialisation is skipped by case label' in visualstudio compiler when using case junk*/	//Code after this statement will never execute, and it will not use cpu.

while( $i < 99) {								//number of loops
	echo "char Junk";							//name of char, we just keep them simillar, becouse compiler kicks exact variable names anyway
	echo $i;									//echo number of line - so that we don't have two identical variables
	echo "[1024] = \"";							//maximum memsize of char
	echo generateRandomString(rand(900, 1020));	//length of random string, edit rand to pick minimum and maximum random length, going above 1024 will result in compilator errors unless you change maximum value in line above
	echo "\";<br>";								//visual studio don't like when you use one very long line, it woud be likely to freeze
	$i++;
}

echo "}";	//closing if statement

if ($_GET["m"] == 1) {
	echo "break;";
}

?>
