function playSound(playlist, i)
{
  if (i ==  playlist.length) return;
  playlist[i].play();
  i++;
  setTimeout(playSound, 5000, playlist, i);
}



$(document).ready(function() {
  // $('#play-sounds').click(function() {
  //   var sounds_arr = sounds.dataset.list.split(',');
  //   for (i = 0; i < sounds_arr.length; i++) {
  //     playlist[i] = new Audio('/web/sounds/' + sounds_arr[i]);
  //   }
  //   playSound(playlist, 0);
    
  // });
    var sounds_arr = sounds.dataset.list.split(',');
    var playlist;

    for (i = 0; i < sounds_arr.length; i++) {
      playlist[i] = new Audio('/web/sounds/' + sounds_arr[i]);
      console.log(playlist);
    }

    playSound(playlist, 0);

    var page = new URL(location).searchParams.get("page");
    location.href = 'http://stenography/term/list?page=' + page;
});