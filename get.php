<?php

function get_title($url){
  $str = file_get_contents($url);
  if(strlen($str)>0){
    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
    return $title[1];
  }
}
//Example:

$filename = 'info.txt';
$contents = file($filename);

foreach($contents as $line) {

echo "update studies set name = '".rtrim(get_title($line))."' where url ='".rtrim($line)."';" . PHP_EOL;
}
?>
