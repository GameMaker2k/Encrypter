<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title> Encrypter 2k (Made by Cool Dude 2k) </title>
<meta http-equiv="content-language" content="en-us">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="editplus">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<?php
if ($_POST['Text'] == null) {
    if ($_GET['Text'] != null) {
        $_POST['Text'] = $_GET['Text'];
        if ($_POST['Encrypter'] == null) {
            $_POST['Encrypter'] = "100";
        }
    }
    if ($_GET['Text'] == null) {
        $_POST['Text'] = "Cool Dude 2k";
    }
}
?>
<body>
<form method="post" action="?">
<select size="1" name="Encrypter">
 <option selected value="100">Encrypt Text 1 Time (Small)</option>
 <option value="150">Encrypt Text 1 Time (Big)</option>
 <option value="200">Encrypt Text 2 Times (Small)</option>
 <option value="250">Encrypt Text 2 Times (Big)</option>
 <option value="300">Encrypt Text 3 Times (Small)</option>
 <option value="400">Encrypt Text 3 Times (Big)</option>
 <option value="500">Decrypt Text</option>
</select><br />
<select size="1" name="ZipData">
 <option selected value="none">Dont zip/unzip data</option>
 <option value="deflate">gzip/ungzip data with deflate</option>
 <option value="zlib">gzip/ungzip data with zlib</option>
 <option value="bzip">bzip/unbzip data</option>
</select><br />
<select size="1" name="EncodeData">
 <option selected value="none">Dont encode/decode</option>
 <option value="base64">Base64 encode/decode</option>
 <option value="urlencode">URL encode/decode</option>
</select><br />
<textarea rows="4" name="Text" cols="20"><?php echo $_POST['Text']; ?></textarea><br />
<input type="submit" name="Send" value="Send Text">
<input type="reset" name="Reset" value="Reset Text"><br />
</form>
<?php
if ($_POST['Text'] != null) {
    require_once('Functions.php');
    $_POST['OldText'] = $_POST['Text'];
    if ($_POST['EncodeData'] != "none" && $_POST['Encrypter'] == "500") {
        if ($_POST['EncodeData'] == "base64") {
            $_POST['Text'] = base64_decode($_POST['Text']);
        }
        if ($_POST['EncodeData'] == "urlencode") {
            $_POST['Text'] = urldecode($_POST['Text']);
        }
    }
    if ($_POST['ZipData'] != "none" && $_POST['Encrypter'] == "500") {
        if ($_POST['ZipData'] == "deflate") {
            $_POST['Text'] = gzinflate($_POST['Text']);
        }
        if ($_POST['ZipData'] == "zlib") {
            $_POST['Text'] = gzuncompress($_POST['Text']);
        }
        if ($_POST['ZipData'] == "bzip") {
            $_POST['Text'] = bzdecompress($_POST['Text']);
        }
    }
    if ($_POST['Encrypter'] == "100") {
        $_POST['Text'] = GM2k_Encrypt1($_POST['Text']);
    }
    if ($_POST['Encrypter'] == "150") {
        $_POST['Text'] = GM2k_Encrypt1Old($_POST['Text']);
    }
    if ($_POST['Encrypter'] == "200") {
        $_POST['Text'] = GM2k_Encrypt2($_POST['Text']);
    }
    if ($_POST['Encrypter'] == "250") {
        $_POST['Text'] = GM2k_Encrypt2Old($_POST['Text']);
    }
    if ($_POST['Encrypter'] == "300") {
        $_POST['Text'] = GM2k_Encrypt1(GM2k_Encrypt2($_POST['Text']));
    }
    if ($_POST['Encrypter'] == "400") {
        $_POST['Text'] = GM2k_Encrypt3($_POST['Text']);
    }
    if ($_POST['Encrypter'] == "500") {
        $_POST['Text'] = GM2k_Decrypt($_POST['Text']);
    }
    $HTML1 = array("<", ">");
    $HTML2 = array("&lt;", "&gt;");
    $_POST['Text'] = str_replace($HTML1, $HTML2, $_POST['Text']);
    $HTML1 = array("&lt;br&gt;", "&lt;br /&gt;");
    $HTML2 = array("<br />", "<br />");
    $_POST['Text'] = str_replace($HTML1, $HTML2, $_POST['Text']);
    $_POST['Text'] = nl2br($_POST['Text']);
    if ($_POST['ZipData'] != "none" && $_POST['Encrypter'] != "500") {
        if ($_POST['ZipData'] == "deflate") {
            $_POST['Text'] = gzdeflate($_POST['Text']);
        }
        if ($_POST['ZipData'] == "zlib") {
            $_POST['Text'] = gzcompress($_POST['Text']);
        }
        if ($_POST['ZipData'] == "bzip") {
            $_POST['Text'] = bzcompress($_POST['Text']);
        }
    }
    if ($_POST['EncodeData'] != "none" && $_POST['Encrypter'] != "500") {
        if ($_POST['EncodeData'] == "base64") {
            $_POST['Text'] = base64_encode($_POST['Text']);
        }
        if ($_POST['EncodeData'] == "urlencode") {
            $_POST['Text'] = urlencode($_POST['Text']);
        }
    }
    echo $_POST['Text'];
}
?>
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
