console.log("JS-JQuery Running")

// TURN IN Button
$("#turnInt").click(function (e){
    alert("Turden In :) ....")
    $("#turnInt").toggleClass("d-none")
    $("#unsubmit").toggleClass("d-none")
})

$("#unsubmit").click(function (e){
    alert("Unsubmitted :( ....")
    $("#turnInt").toggleClass("d-none")
    $("#unsubmit").toggleClass("d-none")
})

// ATTACHMENT MENU
$(".dTugas-attachment-icon").click(function (e) {
    e.stopPropagation()
    $(".dTugas-attachment-icon").children(".dTugas-attachment-options-wrapper").removeClass("dTugas-options-show")
    $(this).children(".dTugas-attachment-options-wrapper").toggleClass("dTugas-options-show")
});

$(".dTugas-attachment-options-wrapper").mouseout(function (e) {
    e.stopPropagation()
    $(this).removeClass("dTugas-options-show")
});

$(".dTugas-attachment-option").click(function (e) {
    e.stopPropagation()
    alert("PHP Processing... Clicked " + $(this).children("span").text())
    $(".dTugas-attachment-options-wrapper").removeClass("dTugas-options-show")
});

// FOOTER DROPUP
$('#dTugas-footer-expand').click(function (e) {
    e.stopPropagation()
    dropContentSwitch()
});
$('#dTugas-footer-collapse').click(function (e) {
    e.stopPropagation()
    dropContentSwitch()
});
$('#drop-bg').click(function (e) { 
    e.stopPropagation()
    dropContentSwitch()
});
$('.dTugas-footer-option').click(function (e) {
    e.stopPropagation()
    dropContentSwitch()
});

function dropContentSwitch() {
    $('#dTugas-footer-dropContentWrapper').toggleClass('dTugas-show')
    $('#drop-bg').toggleClass('dTugas-show')
    $('#dTugas-footer-expand').toggleClass('dTugas-hidden')
    $('#dTugas-footer-collapse').toggleClass('dTugas-hidden')
}

// DETAIL TUGAS SUBMIT FROM APPLICATON
