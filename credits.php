<!DOCTYPE html>
<head>
	<title>Credits - Senza donne niente storia</title>
	<link rel="stylesheet" href="style.css">
	<script src="jscript.js"></script> 
</head>


<body>
	<!--darkmode button-->
	<input type="checkbox" id="toggle_darkmode">
	<div id="background-color"></div>
	<label for="toggle_darkmode">
  		<div id="star">
    		<div class="star" id="star-1">★</div>
    		<div class="star" id="star-2">★</div>
  		</div>
  		<div id="moon"></div>
	</label>

	<img id="banner" src="img/banner.png"/>
	<div id="content">
		<h1>Pas d'histoire sans les femmes !</h1>
		<h1>Senza donne niente storia !</h1>
		<p>Voici les crédits par podcasts. <a href="./">Retour aux podcasts</a></p>

        <?php 
            $audios = json_decode(file_get_contents("./data.json"),true);
            foreach ($audios as $audio){
			if (file_exists('./credits/'.$audio['files'].'.html'))
            	echo '<h2 class=>'.$audio['nom'].'</h2>
                 '.file_get_contents('./credits/'.$audio['files'].'.html');
            }
        ?>
	</div>
	<div id="bottom">
		<p><a href="./">Retour aux podcasts</a><br/>
		Le code de la page est sous licence <a rel="license" href="https://www.gnu.org/licenses/gpl-3.0.html">GPLV3+ ,</a><br>
		Le contenu de la page est mis à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
		Licence Creative Commons CC-BY-SA <img style="margin-left:10px;" alt="" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a></p>
	</div>
</body>
