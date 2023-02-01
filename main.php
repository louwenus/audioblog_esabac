<?php 
$content = file_get_contents("./data.json");
$audios = json_decode($content);
echo $content;
echo $audios;
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
