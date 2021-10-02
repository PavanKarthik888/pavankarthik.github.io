<style>
body{
background-image:url(company_272.jpeg);
}
</style>
<?php
$myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
$fin=fread($myfile,filesize("contacts.txt"));
$fin1=nl2br($fin);
echo "<p> <font color=white size='10pt'> $fin1 </p>";
fclose($myfile);
?>

<style>img[alt="www.000webhost.com"]{display:none;}</style>


