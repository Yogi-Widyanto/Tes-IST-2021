$(document).ready(function(){
    // untuk menghapus ssession saat tombol mulai diklik
    $("#hps").click(function() {
        sessionStorage.clear();
    })

    var simpan =$("#save").val();
    var sesInput=simpan+"inputUser";
    

    var s1 = sessionStorage.getItem(sesInput);
    if (s1 != null) {
        $("#jawaban").val(s1);
    }


    // gae warna pas seasson
    $("#kunci").click(function() {
        var simpan =$("#save").val();
   
        var sesInput=simpan+"inputUser";
    
        var s1 = sessionStorage.getItem(sesInput);

        var data1 =$("#jawaban").val();
        

        if (data1 != null) {
            if (s1 != null) {
                sessionStorage.removeItem(sesInput);

                sessionStorage.setItem(sesInput,data1);
                location.reload(true);
            }else {
                sessionStorage.setItem(sesInput,data1);
                location.reload(true);
            }
        }

        

    })
    // akhir fungsi klik kunci



    $("#kirim").click(function() {
        sessionStorage.clear();
        location.reload(true);
    })
    
    
    
    

    



});