<?php
$str1="La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";

echo"<p> La chaine str1 contient ";
echo strlen ($str1);
echo" caractères.</p>";

echo"<p> La chaine str1 contient ";
echo str_word_count($str1);
echo" mots.</p>";

echo"<p>";
echo strtolower($str1);
echo"</p>";

echo"<p>";
echo strtoupper($str1);
echo"</p>";

echo"<p>";
echo str_shuffle($str1);
echo"</p>";

echo"<p>";
$words=explode(' ',$str1);
for ($i=0; $i<count($words); $i=$i+1)
{
    if(strtolower($words[$i])=='la')
    $words[$i]=strtoupper($words[$i]);
}
echo join(" ", $words);
echo"</p>";

echo"<p>";
$str1=substr(str1,0,-34);
echo"$str1 </p>";

?>