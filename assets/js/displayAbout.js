$(document).ready( function(){
    $.ajax( {
        url: "assets/text/aboutDOOM.txt",
        success: function(result){
            $("#about-text").html(result);
        }
    })
});