$(document).ready(function(){
    // gae warna pas seasson 
    var temp2 = $('#tampilan').val();
    if ($("#cek0").is(':checked')) {
        $('#tampilan').val("0");
    }else{
        
    }
    
    $("#cek0").click(function() {
        if ($(this).is(':checked')) {
            $('#tampilan').val("0");
        }
    })
    $("#cek1").click(function() {
        if ($(this).is(':checked')) {
            $('#tampilan').val("1");
        }
    })

    // $("#r2").click(function() {
    //     if ($(this).is(':checked')) {
    //         $('#t2').css("color","red");
    //         $('#t1').css("color","black");
    //         $('#t3').css("color","black");
    //         $('#t4').css("color","black");
    //         $('#t5').css("color","black");
    //         $("#r1").prop("checked", false);
    //         $("#r3").prop("checked", false);
    //         $("#r4").prop("checked", false);
    //         $("#r5").prop("checked", false);
    //     } 
    // })

    // $("#r3").click(function() {
    //     if ($(this).is(':checked')) {
    //         $('#t3').css("color","red");
    //         $('#t2').css("color","black");
    //         $('#t1').css("color","black");
    //         $('#t4').css("color","black");
    //         $('#t5').css("color","black");
    //         $("#r2").prop("checked", false);
    //         $("#r1").prop("checked", false);
    //         $("#r4").prop("checked", false);
    //         $("#r5").prop("checked", false);
    //     } 
    // })

    // $("#r4").click(function() {
    //     if ($(this).is(':checked')) {
    //         $('#t4').css("color","red");
    //         $('#t2').css("color","black");
    //         $('#t3').css("color","black");
    //         $('#t1').css("color","black");
    //         $('#t5').css("color","black");
    //         $("#r2").prop("checked", false);
    //         $("#r3").prop("checked", false);
    //         $("#r1").prop("checked", false);
    //         $("#r5").prop("checked", false);
    //     } 
    // })

    // $("#r5").click(function() {
    //     if ($(this).is(':checked')) {
    //         $('#t5').css("color","red");
    //         $('#t2').css("color","black");
    //         $('#t3').css("color","black");
    //         $('#t1').css("color","black");
    //         $('#t4').css("color","black");
    //         $("#r2").prop("checked", false);
    //         $("#r3").prop("checked", false);
    //         $("#r4").prop("checked", false);
    //         $("#r1").prop("checked", false);
    //     } 
    // })
    

    



});
    