var sndLetItSnow = new Audio("sounds/1mp.mp3");
	var sndSanta = new Audio("sounds/3mp.mp3");

  var playlist = [sndLetItSnow, sndSanta];

  var current = null;
  var idx = 0;

  function playSound() {
      if (current === null || current.ended) {
          // go to next
          current = playlist[idx++];

          // check if is the last of playlist and return to first
          if (idx >= playlist.length)
              idx = 0;

           // return to begin
           current.currentTime=0;

           // play
           current.play();
      }

  }



$(document).ready(function() {
  $('#play-sounds').click(function() {
    setInterval(playSound, 5000);
  });
});