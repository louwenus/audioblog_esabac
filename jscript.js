//pause other players when one is started
function onlyPlayOneIn(container) {
  container.addEventListener("play", function(event) {
  audio_elements = container.getElementsByTagName("audio")
    for(i=0; i < audio_elements.length; i++) {
      audio_element = audio_elements[i];
      if (audio_element !== event.target) {
        audio_element.pause();
      }
    }
  }, true);
}


//when html is fully loaded
document.addEventListener("DOMContentLoaded", function() {
  //detect dark mode preference and auto toogle dark mode button
  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.getElementById("toggle_darkmode").checked = true;
  }
  //pause other players when one is started
  onlyPlayOneIn(document.body);
});


