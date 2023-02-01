<?php 
$audios = json_decode(file_get_contents("./data.json"),true);
var_dump($audios);
foreach ($audios as $audio){
echo "<div><h2>".$audio["nom"]."</h2>\n";
echo "  <audio controls>\n";
foreach ($audio["source"] as $file){
    echo "    <source ".$file."/>\n";
}
echo "  </audio>\n";
echo "</div>";
}

?>
