<?php 
$content = file_get_contents("./data.json");
$audios = json_decode(file_get_contents("./data.json"));
var_dump($content);
var_dump($audios);
foreach ($audios as $audio){
echo "<div><h2>".$audio["nom"]."</h2>";
echo "<audio controls>";
foreach ($audio["source"] as $file){
    echo "<source ".$file."/>";
}
echo "</audio>";
echo "</div>";
}

?>
