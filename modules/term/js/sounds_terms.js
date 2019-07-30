  var playlist = [];
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
    var sounds_arr = sounds.dataset.list.split(',');
    for (i = 0; i < sounds_arr.length; i++) {
      playlist[i] = new Audio('/web/sounds/' + sounds_arr[i]);
    }

    //console.log(playlist);
    setInterval(playSound, 5000);
  });
});