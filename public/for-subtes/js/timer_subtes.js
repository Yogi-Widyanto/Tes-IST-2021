function counter(time) {
    var interval = setInterval(function () {
        var menit =Math.floor(time/60);
        var detik=time%60;
        if (menit>=0) {
            $('#menit').text(menit);
        }
        if (detik >=0) {
            $('#detik').text(detik);
        }
        if (detik==0) {
            $('#menit').text(menit);
        }
        if (menit<=0) {
            $('#menit').text(0);
        }
        if (time == 0) {
            clearInterval(interval);
            window.location="/subtes-9";
        }
        time = time - 1;
    }, 1000);
}

$(document).ready(function () {
    counter(10);
});