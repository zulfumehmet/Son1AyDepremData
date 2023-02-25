<?php 
header('Content-type: text/html; charset=UTF-8');
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://udim.koeri.boun.edu.tr/zeqmap/saveas.asp?xmlt/sonAy.xml");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

?>
<html> 
<meta charset="UTF-8">
<head>
<title>Son 1 Ayda Oluşan Depremler</title>
</head>
<body>

<p>Son 1 Ayda Oluşan Depremler</p>

<pre>
    <?php echo $response; ?>
</pre>

</body>
</html>
