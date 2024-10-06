<?php
ob_clean();
require('Functions.php');
header('Content-type: application/x-javascript');
?>
<!--
<?php
if ($_GET['encodedtext'] == "true") {
    $_GET['text'] = base64_decode(urldecode($_GET['text']));
}
if ($_GET['encodedtext'] == "gzcom") {
    $_GET['text'] = gzuncompress(base64_decode(urldecode($_GET['text'])));
}
if ($_GET['encodedtext'] == "gzinf") {
    $_GET['text'] = gzinflate(base64_decode(urldecode($_GET['text'])));
}
if ($_GET['encodedtext'] != "true" &&
    $_GET['encodedtext'] != "gzcom" &&
    $_GET['encodedtext'] != "gzinf") {
    if ($_GET['encodedtexts'] == "true") {
        $decode2 = base64_decode(urldecode($_GET['text']));
        $decodes = explode("|", $decode2);
        $_GET['type'] = $decodes[0];
        $_GET['text'] = base64_decode($decodes[1]);
    }
    if ($_GET['encodedtexts'] == "gzcom") {
        $decode2 = gzuncompress(base64_decode(urldecode($_GET['text'])));
        $decodes = explode("|", $decode2);
        $_GET['type'] = $decodes[0];
        $_GET['text'] = base64_decode($decodes[1]);
    }
    if ($_GET['encodedtexts'] == "gzinf") {
        $decode2 = gzinflate(base64_decode(urldecode($_GET['text'])));
        $decodes = explode("|", $decode2);
        $_GET['type'] = $decodes[0];
        $_GET['text'] = base64_decode($decodes[1]);
    }
}
if ($_GET['type'] == "100") {
    $_GET['text'] = GM2k_Encrypt1($_GET['text']);
}
if ($_GET['type'] == "150") {
    $_GET['text'] = GM2k_Encrypt1Old($_GET['text']);
}
if ($_GET['type'] == "200") {
    $_GET['text'] = GM2k_Encrypt2($_GET['text']);
}
if ($_GET['type'] == "250") {
    $_GET['text'] = GM2k_Encrypt2Old($_GET['text']);
}
if ($_GET['type'] == "300") {
    $_GET['text'] = GM2k_Encrypt1(GM2k_Encrypt2($_GET['text']));
}
if ($_GET['type'] == "400") {
    $_GET['text'] = GM2k_Encrypt3($_GET['text']);
}
if ($_GET['type'] == "500") {
    $_GET['text'] = GM2k_Decrypt($_GET['text']);
}
$_GET['text'] = nl2br($_GET['text']);
$nl1 = array("\n", "\r", "\f");
$nl2 = array("", "", "");
$_GET['text'] = str_replace($nl1, $nl2, $_GET['text']);
?>
document.write('<?php echo $_GET['text']; ?>');
//-->