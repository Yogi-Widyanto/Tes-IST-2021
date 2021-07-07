$(document).ready(function(){
    //  tujuanya untu menghapus session storage
    $("#hps").click(function() {
        sessionStorage.clear();
    })


    var simpan =$("#save").val();
   
    var sesRadioA=simpan+"radioA";
    var sesRadioB=simpan+"radioB";
    var sesRadioC=simpan+"radioC";
    var sesRadioD=simpan+"radioD";
    var sesRadioE=simpan+"radioE";

    var s1 = sessionStorage.getItem(sesRadioA);
    var s2 = sessionStorage.getItem(sesRadioB);
    var s3 = sessionStorage.getItem(sesRadioC);
    var s4 = sessionStorage.getItem(sesRadioD);
    var s5 = sessionStorage.getItem(sesRadioE);

    if (s1 != null) {
        $("#r1").prop("checked", true);
    }if (s2 != null) {
        $("#r2").prop("checked", true);
    }if (s3 != null) {
        $("#r3").prop("checked", true);
    }if (s4 != null) {
        $("#r4").prop("checked", true);
    }if (s5 != null) {
        $("#r5").prop("checked", true);
    }
    

        
    


    // gae warna pas seasson
    $("#kunci").click(function() {
        // var simpan =$("#save").text();
        // berisikan opsi
        var simpan =$("#save").val();
   
        var sesRadioA=simpan+"radioA";
        var sesRadioB=simpan+"radioB";
        var sesRadioC=simpan+"radioC";
        var sesRadioD=simpan+"radioD";
        var sesRadioE=simpan+"radioE";
    
        var s1 = sessionStorage.getItem(sesRadioA);
        var s2 = sessionStorage.getItem(sesRadioB);
        var s3 = sessionStorage.getItem(sesRadioC);
        var s4 = sessionStorage.getItem(sesRadioD);
        var s5 = sessionStorage.getItem(sesRadioE);



        var data1 =$("#t1").text();
        var data2 =$("#t2").text();
        var data3 =$("#t3").text();
        var data4 =$("#t4").text();
        var data5 =$("#t5").text();

        if ($("#r1").is(':checked')) {
            if (s2 != null || s3 != null || s4 != null || s5 != null) {
                sessionStorage.removeItem(sesRadioB);
                sessionStorage.removeItem(sesRadioC);
                sessionStorage.removeItem(sesRadioD);
                sessionStorage.removeItem(sesRadioE);
                sessionStorage.setItem(sesRadioA,data1);
                location.reload(true);
            }else {
                sessionStorage.setItem(sesRadioA,data1);
                location.reload(true);
            }
        }

        if ($("#r2").is(':checked')) {
            if (s1 != null || s3 != null || s4 != null || s5 != null) {
                sessionStorage.removeItem(sesRadioA);
                sessionStorage.removeItem(sesRadioC);
                sessionStorage.removeItem(sesRadioD);
                sessionStorage.removeItem(sesRadioE);
                sessionStorage.setItem(sesRadioB,data2);
                location.reload(true);
            }else {
                sessionStorage.setItem(sesRadioB,data2);
                location.reload(true);
            }
        }

        if ($("#r3").is(':checked')) {
            if (s1 != null || s2 != null || s4 != null || s5 != null) {
                sessionStorage.removeItem(sesRadioA);
                sessionStorage.removeItem(sesRadioB);
                sessionStorage.removeItem(sesRadioD);
                sessionStorage.removeItem(sesRadioE);
                sessionStorage.setItem(sesRadioC,data3);
                location.reload(true);
            }else {
                sessionStorage.setItem(sesRadioC,data3);
                location.reload(true);
            }
        }

        if ($("#r4").is(':checked')) {
            if (s1 != null || s2 != null || s3 != null || s5 != null) {
                sessionStorage.removeItem(sesRadioA);
                sessionStorage.removeItem(sesRadioB);
                sessionStorage.removeItem(sesRadioC);
                sessionStorage.removeItem(sesRadioE);
                sessionStorage.setItem(sesRadioD,data4);
                location.reload(true);
            }else {
                sessionStorage.setItem(sesRadioD,data4);
                location.reload(true);
            }
        }

        if ($("#r5").is(':checked')) {
            if (s1 != null || s2 != null || s3 != null || s4 != null) {
                sessionStorage.removeItem(sesRadioA);
                sessionStorage.removeItem(sesRadioB);
                sessionStorage.removeItem(sesRadioC);
                sessionStorage.removeItem(sesRadioD);
                sessionStorage.setItem(sesRadioE,data5);
                location.reload(true);
            }else {
                sessionStorage.setItem(sesRadioE,data5);
                location.reload(true);
            }
        }

    })
    // akhir fungsi klik kunci



    $("#kirim").click(function() {
        sessionStorage.clear();
        location.reload(true);
    })
    
    
    
    if ($("#r1").is(':checked')) {
        $('#t1').css("color","red");
    }
    if ($("#r2").is(':checked')) {
        $('#t2').css("color","red");
    }
    if ($("#r3").is(':checked')) {
        $('#t3').css("color","red");
    }
    if ($("#r4").is(':checked')) {
        $('#t4').css("color","red");
    }
    if ($("#r5").is(':checked')) {
        $('#t5').css("color","red");
    }
    
    $("#r1").click(function() {
        if ($(this).is(':checked')) {
            $('#t1').css("color","red");
            $('#t2').css("color","black");
            $('#t3').css("color","black");
            $('#t4').css("color","black");
            $('#t5').css("color","black");
            $("#r2").prop("checked", false);
            $("#r3").prop("checked", false);
            $("#r4").prop("checked", false);
            $("#r5").prop("checked", false);
        } 
    })

    $("#r2").click(function() {
        if ($(this).is(':checked')) {
            $('#t2').css("color","red");
            $('#t1').css("color","black");
            $('#t3').css("color","black");
            $('#t4').css("color","black");
            $('#t5').css("color","black");
            $("#r1").prop("checked", false);
            $("#r3").prop("checked", false);
            $("#r4").prop("checked", false);
            $("#r5").prop("checked", false);
        } 
    })

    $("#r3").click(function() {
        if ($(this).is(':checked')) {
            $('#t3').css("color","red");
            $('#t2').css("color","black");
            $('#t1').css("color","black");
            $('#t4').css("color","black");
            $('#t5').css("color","black");
            $("#r2").prop("checked", false);
            $("#r1").prop("checked", false);
            $("#r4").prop("checked", false);
            $("#r5").prop("checked", false);
        } 
    })

    $("#r4").click(function() {
        if ($(this).is(':checked')) {
            $('#t4').css("color","red");
            $('#t2').css("color","black");
            $('#t3').css("color","black");
            $('#t1').css("color","black");
            $('#t5').css("color","black");
            $("#r2").prop("checked", false);
            $("#r3").prop("checked", false);
            $("#r1").prop("checked", false);
            $("#r5").prop("checked", false);
        } 
    })

    $("#r5").click(function() {
        if ($(this).is(':checked')) {
            $('#t5').css("color","red");
            $('#t2').css("color","black");
            $('#t3').css("color","black");
            $('#t1').css("color","black");
            $('#t4').css("color","black");
            $("#r2").prop("checked", false);
            $("#r3").prop("checked", false);
            $("#r4").prop("checked", false);
            $("#r1").prop("checked", false);
        } 
    })
    

    



});