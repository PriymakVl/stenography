playlist = [];
index = 0;

$(document).ready(function() {
    var sounds = new URL(location).searchParams.get("sounds");
    var delay = new URL(location).searchParams.get("delay");
    if (delay) play_all(delay);

    $('#play-sounds').click(function(event) {
        event.preventDefault();
        var delay = prompt('Укажите задержку между словами в секундах не более 30 сек', 5);
        if (!+delay) return alert('Вы не указали задержку');
        else if (+delay < 1) return alert('Слишком маленькая задержка');
        else if (+delay > 30) return alert('Слишком большая задержка'); 
        play_all(Number(delay) * 1000);
    });

    $('#stop-sounds').click(function() {
        var page = new URL(location).searchParams.get("page") || 1;
        location.href = 'http://stenography/term/list?page=' + page;
    });
});


function get_play_list()
{
    var sounds_arr = sounds.dataset.list.split(',');
    if (!sounds_arr) return alert('Нет звуковых файлов');
    var arr = [];
    if (!sounds_arr) return;
    for (i = 0; i < sounds_arr.length; i++) {
        arr[i] = new Audio('/web/sounds/' + sounds_arr[i]);
    }
    return arr;
}

function play_all(delay)
{
    playlist = get_play_list();
    if (!playlist) return;
    setTimeout(play_one, 1000, delay);
}

function play_one(delay)
{
    if (index == playlist.length) return go_page(delay);
    playlist[index].play();
    index++;
    setTimeout(play_one, delay, delay);
}

function go_page(delay)
{
    var page = new URL(location).searchParams.get("page") || 1;
    page++;
    location.href = '/term/list?page=' + page + '&delay=' + delay; 
}



