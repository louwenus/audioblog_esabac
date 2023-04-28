<?php 
$audios = json_decode(file_get_contents("./data.json"),true);
foreach ($audios as $audio){
echo '
    <div class="podcast">
    <h2 class="title">'.$audio['nom'].'</h2>
    <div class="audio_container">
        <input type="radio" id="'.$audio['files'].'" value="'.$audio['files'].'" name="radio-audio-group">
        <label for="'.$audio['files'].'">

            <img src="img/'.$audio['files'].'.png">
            
            <div class="to_hide">
                
                '.file_get_contents('./desc/'.$audio['files'].'.html').'
                <p>Par: '.$audio['auteurs'].'</p>

                <audio controls>
                    <source src="audio/'.$audio['files'].'.ogg" type="audio/ogg" >
                    <source src="audio/'.$audio['files'].'.mp3" type="audio/mp3" >
                </audio>
            </div>

        </label>
    </div></div>';
}
?>
