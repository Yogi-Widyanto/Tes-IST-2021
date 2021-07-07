$(document).ready(function(){
    // gae warna pas seasson 
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