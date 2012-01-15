<?php
$_POST['act'] = strtolower($_POST['act']); $_GET['act'] = strtolower($_GET['act']);
if ($_POST['act']==null) {
	if ($_GET['act']!=null) {
		$_POST['act']=$_GET['act']; }
	if ($_POST['act']==null) {
	$_POST['act']="entoipa"; } }
if ($_POST['act']=="entoipa") { $StartThis1="selected "; } 
if ($_POST['act']=="ipatoen") { $StartThis2="selected "; }
if ($_POST['act']=="encode") { $StartThis3="selected "; }
if ($_POST['act']=="encode2") { $StartThis4="selected "; }
if ($_POST['act']=="decode") { $StartThis5="selected "; }
if ($_POST['act']=="decode2") { $StartThis6="selected "; }
if ($_POST['text']==null) {
	if ($_GET['text']!=null) {
		$_POST['text']=$_GET['text']; }
	if ($_GET['text']==null) {
	if ($_POST['act']=="entoipa"||$_POST['act']=="encode"||$_POST['act']=="encode2") {
	$_POST['text']="Testing"; }
	if ($_POST['act']=="decode") {
	$_POST['text']="084 101 115 116 105 110 103"; }
	if ($_POST['act']=="decode2") {
	$_POST['text']="054 065 073 074 069 06E 067"; }
	if ($_POST['act']=="ipatoen") {
	$_POST['text']="Tango echo sierra tango india november golf"; } } }
$_POST['text'] = stripslashes($_POST['text']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<?php if ($_POST['text']!="International Phonetic Alphabe") {?>
<title> International Phonetic Alphabe (Made by Cool Dude 2k) </title>
<?php } if ($_POST['text']=="International Phonetic Alphabe") {?>
<title> India november tango echo romeo november alpha tango india oscar november alpha lima Papa hotel oscar november echo tango india charlie Alpha lima papa hotel alpha bravo echo (Made by Cool Dude 2k) </title>
<?php } ?>
<meta name="Generator" content="EditPlus">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
</head>

<body>
<form method=post action="?"><pre>
<select size="1" name="act">
<option <?php echo $StartThis1; ?>value="entoipa">English to IPA</option>
<option <?php echo $StartThis2; ?>value="ipatoen">IPA to English</option>
<option <?php echo $StartThis3; ?>value="encode">Encode Text Dec</option>
<option <?php echo $StartThis4; ?>value="encode2">Encode Text Hex</option>
<option <?php echo $StartThis5; ?>value="decode">Decode Text Dec</option>
<option <?php echo $StartThis6; ?>value="decode2">Decode Text Hex</option>
</select>
<?php/*<input type="text" name="text" value="<?php echo $_POST['text']; ?>">*/?>
<textarea rows="6" name="text" cols="30"><?php echo $_POST['text']; ?></textarea>
<input type="submit" value="???" title="???"> <input type="reset" title="Reset">
</pre></form>
<?php
if ($_POST['text']!=null) {
if ($_POST['act']=="entoipa") {
/*$_POST['text'] = str_replace(" ", "", $_POST['text']);
$_POST['text'] = str_replace("	", "", $_POST['text']);*/
$num = strlen($_POST['text'])-1;
$i = 0;
while ($i <= $num) {
unset($TransPost);
$FirstPost = $_POST['text'][$i];
if ($FirstPost=="a"||$FirstPost=="A") {
$TransPost = preg_replace("/(a)/isxS", "\\1lpha", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="b"||$FirstPost=="B") {
$TransPost = preg_replace("/(b)/isxS", "\\1ravo", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="c"||$FirstPost=="C") {
$TransPost = preg_replace("/(c)/isxS", "\\1harlie", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="d"||$FirstPost=="D") {
$TransPost = preg_replace("/(d)/isxS", "\\1elta", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="e"||$FirstPost=="E") {
$TransPost = preg_replace("/(e)/isxS", "\\1cho", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="f"||$FirstPost=="F") {
$TransPost = preg_replace("/(f)/isxS", "\\1oxtrot", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="g"||$FirstPost=="G") {
$TransPost = preg_replace("/(g)/isxS", "\\1olf", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="h"||$FirstPost=="H") {
$TransPost = preg_replace("/(h)/isxS", "\\1otel", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="i"||$FirstPost=="I") {
$TransPost = preg_replace("/(i)/isxS", "\\1ndia", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="j"||$FirstPost=="J") {
$TransPost = preg_replace("/(j)/isxS", "\\1uliet", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="k"||$FirstPost=="K") {
$TransPost = preg_replace("/(k)/isxS", "\\1ilo", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="l"||$FirstPost=="L") {
$TransPost = preg_replace("/(l)/isxS", "\\1ima", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="m"||$FirstPost=="M") {
$TransPost = preg_replace("/(m)/isxS", "\\1ike", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="n"||$FirstPost=="N") {
$TransPost = preg_replace("/(n)/isxS", "\\1ovember", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="o"||$FirstPost=="O") {
$TransPost = preg_replace("/(o)/isxS", "\\1scar", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="p"||$FirstPost=="P") {
$TransPost = preg_replace("/(p)/isxS", "\\1apa", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="q"||$FirstPost=="Q") {
$TransPost = preg_replace("/(q)/isxS", "\\1uebec", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="r"||$FirstPost=="R") {
$TransPost = preg_replace("/(r)/isxS", "\\1omeo", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="s"||$FirstPost=="S") {
$TransPost = preg_replace("/(s)/isxS", "\\1ierra", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="t"||$FirstPost=="T") {
$TransPost = preg_replace("/(t)/isxS", "\\1ango", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="u"||$FirstPost=="U") {
$TransPost = preg_replace("/(u)/isxS", "\\1niform", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="v"||$FirstPost=="V") {
$TransPost = preg_replace("/(v)/isxS", "\\1ictor", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="w"||$FirstPost=="W") {
$TransPost = preg_replace("/(w)/isxS", "\\1hiskey", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="x"||$FirstPost=="X") {
$TransPost = preg_replace("/(x)/isxS", "\\1ray", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="y"||$FirstPost=="Y") {
$TransPost = preg_replace("/(y)/isxS", "\\1ankee", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($FirstPost=="z"||$FirstPost=="Z") {
$TransPost = preg_replace("/(z)/isxS", "\\1ulu", $FirstPost);
if ($i!=$num) { $TransPost = $TransPost." "; } }
if ($TransPost==null) { $TransPost=$FirstPost;
if ($i!=$num) { $TransPost = $TransPost." "; } }
echo $TransPost;
++$i; } }
if ($_POST['act']=="ipatoen") {
$_POST['text'] = str_replace(" ", "", $_POST['text']);
$_POST['text'] = str_replace("	", "", $_POST['text']);
$FirstPost = $_POST['text'];
//$TransPost = preg_replace("/(f|F)ox/isxS", "\\11oxtrot", $TransPost);
$FirstPost = preg_replace("/(m|M)ary/isxS", "\\1ike", $FirstPost);
$FirstPost = preg_replace("/(n|N)ancy/isxS", "\\1ovember", $FirstPost);
$FirstPost = preg_replace("/(z|Z)ed/isxS", "\\1ulu", $FirstPost);
$TransPost = $FirstPost;
$TransPost = preg_replace("/(a|A)lpha/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(b|B)ravo/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(c|c)harlie/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(d|D)elta/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(e|E)cho/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(f|F)1oxtrot/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(g|G)olf/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(h|H)otel/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(i|I)ndia/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(j|J)uliet/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(k|K)ilo/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(l|L)ima/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(m|M)ike/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(n|N)ovember/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(o|O)scar/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(p|P)apa/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(q|Q)uebec/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(r|R)omeo/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(s|S)ierra/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(t|T)ango/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(u|U)niform/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(v|V)ictor/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(w|W)hiskey/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(x|X)ray/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(y|Y)ankee/isxS", "\\1", $TransPost);
$TransPost = preg_replace("/(z|Z)ulu/isxS", "\\1", $TransPost);
echo $TransPost; }
if ($_POST['act']=="encode"||$_POST['act']=="encode2") {
$num=strlen($_POST['text']);
$Il=0;
while ($Il < $num) {
	if ($_POST['act']=="encode") { $ascii=ord($_POST['text'][$Il])." ";	}
	if ($_POST['act']=="encode2") { $ascii=ord($_POST['text'][$Il]); $ascii=dechex($ascii)." ";	}
	if (strlen($ascii)==3) { $ascii="0".$ascii; }
	if (strlen($ascii)==2) { $ascii="00".$ascii; }
	$ascii = strtoupper($ascii);
	echo $ascii;
	++$Il; }	}

if ($_POST['act']=="decode"||$_POST['act']=="decode2") {
$test=explode("\n", $_POST['text']);
$num=count($test);
$l=0;
while ($l < $num) {
	$test[$l]=str_replace("\r", " ", $test[$l]);
	++$l;	}
$_POST['text'] = implode("", $test);
$test=explode(" ", $_POST['text']);
if ($_POST['act']=="decode") { 
	$LineNew1="010";
	$LineNew2="012";
	$LineNew3="013";
		$add['text']=null; }
if ($_POST['act']=="decode2") { 
	$LineNew1="00A";
	$LineNew2="00C";
	$LineNew3="00D";
		$add['text']="x"; }
$i=0;
$num=count($test);
while ($i < $num) {
	$test[$i] = strtoupper($test[$i]);
	if (strlen($test[$i])==2) { $test[$i]="0".$test[$i]; }
	if (strlen($test[$i])==1) { $test[$i]="00".$test[$i]; }
	if ($test[$i]==$LineNew3) {
	$FullText=$FullText."&#".$add['text'].$test[$i].";<br />"; }
	if ($test[$i]!=$LineNew3) {
	$FullText=$FullText."&#".$add['text'].$test[$i].";";	}
	++$i;	}
echo $FullText; } }
?><br />
<?php if ($_POST['text']!="International Phonetic Alphabe") {?>
<a href="http://www.qsl.net/w4fwd/alpha.html">International Phonetic Alphabe</a>
<?php } if ($_POST['text']=="International Phonetic Alphabe") {?>
<a href="http://www.qsl.net/w4fwd/alpha.html">India november tango echo romeo november alpha tango india oscar november alpha lima Papa hotel oscar november echo tango india charlie Alpha lima papa hotel alpha bravo echo</a>
<?php } ?>
</body>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1754608-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</html>
