<?php 
$audios = json_decode(file_get_contents("./data.json"),true);
foreach ($audios as $audio){
echo "<div class=\"audio_container\"><h2>".$audio["nom"]."</h2>\n";
echo "  <audio controls>\n";
foreach ($audio["source"] as $files){
    echo "    <source src=\"audio/".$files["f"]."\" type=\"".$files["t"]."\"/>\n";
}
echo "  </audio>\n";
echo "</div>";
}

?>
