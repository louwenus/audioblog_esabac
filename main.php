<?php 

$audios = json_decode(file_get_contents("./data.json"),true);

foreach ($audios as $audio){
echo "<div><h2>".$audio["nom"]."</h2>"
echo "<audio controls>"
foreach ($file as $audio["source"]
echo "</audio>"
echo "</div>"
}

?>
