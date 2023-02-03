<?php 
$audios = json_decode(file_get_contents("./data.json"),true);
foreach ($audios as $audio){
echo "<div class=\"audio_container\"><h2>".$audio["nom"]."</h2>\n";
echo "  <audio controls>\n";
    echo "    <source src=\"audio/".$audio["files"]."ogg\" type=\"audio/ogg\" >";
    echo "    <source src=\"audio/".$audio["files"]."mp3\" type=\"audio/mp3\" >";
echo "  </audio>\n";
echo "</div>";
}

?>
