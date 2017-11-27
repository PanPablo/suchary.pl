document.addEventListener("DOMContentLoaded", function(event) {

    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

});