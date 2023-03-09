<?php 
$audios = json_decode(file_get_contents("./data.json"),true);
foreach ($audios as $audio){
echo "
    <hr />
    <input type=\"radio\" id=\"".$audio["files"]."\" value=\"".$audio["files"]."\" name=\"radio-audio-group\">
    <div class=\"audio_container\">
        <label for=\"".$audio["files"]."\" class=\"img-label\">
            <img src=\"img/".$audio["files"].".jpg\">
        </label>
        <div>
            <label for=\"".$audio["files"]."\" class=\"title-label\">
                <h2>".$audio["nom"]."</h2>
            </label>
            <div class=\"to_hide\">
                ".file_get_contents("./desc/".$audio["files"].".html")."
            </div>
            <p>Auteurs: ".$audio["auteurs"]."</p>
            <audio controls class=\"to_hide\">
                <source src=\"audio/".$audio["files"].".ogg\" type=\"audio/ogg\" >
                <source src=\"audio/".$audio["files"].".mp3\" type=\"audio/mp3\" >
            </audio></div></div>";
}
?>
