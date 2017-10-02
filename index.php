
<?php
$langages = array("HTML","CSS","Javascript","PHP");
sort($langages);
foreach ($langages as $key => $val) {
    echo 'langages =  '.$val.'<br />';
}

function fusion($langages)
{
  foreach ($langages as $key => $val) {
      echo $val;
      }
}
echo fusion($langages);
?>
