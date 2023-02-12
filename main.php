<?php 
$audios = json_decode(file_get_contents("./data.json"),true);
foreach ($audios as $audio){
echo "
    <input type=\"checkbox\" id=\"".$audio["files"]."\">
    <div class=\"audio_container\">
        <label for=\"".$audio["files"]."\" class=\"img-label\">
            <img src=\"img/".$audio["files"].".jpg\">
        </label>
        <div>
            <label for=\"".$audio["files"]."\" class=\"title-label\">
                <h2>".$audio["nom"]."</h2>
            </label>
            <p>".file_get_contents("./desc/".$audio["files"].".txt")."</p>
            <audio controls>
                <source src=\"audio/".$audio["files"].".ogg\" type=\"audio/ogg\" >
                <source src=\"audio/".$audio["files"].".mp3\" type=\"audio/mp3\" >
            </audio></div></div>";
}
?>
