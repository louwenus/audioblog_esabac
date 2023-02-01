<?php 
echo "test";
$audios = json_decode(file_get_contents("./data.json"),true);
echo file_get_contents("./data.json");
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
