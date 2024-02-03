// menjalankan function setelah document html setelah dimuat
$(document).ready(function (){
    // hide the paragraph saat tombol di klik
    $("#tombol").click(function (){
        $("#paragraf").hide();
    });
});