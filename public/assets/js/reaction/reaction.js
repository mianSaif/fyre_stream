$(document).ready(function () {
    $(".emoji").on("click", function () {
        // Here we are getting the reaction which is tapped by using the data-reaction attribute defined in main page
        var data_reaction = $(this).attr("data-reaction");
        $(".reaction-btn-emo").removeClass().addClass('reaction-btn-emo').addClass('like-btn-' + data_reaction.toLowerCase());
        $(".reaction-btn-text").text(data_reaction).removeClass().addClass('reaction-btn-text').addClass('reaction-btn-text-' + data_reaction.toLowerCase()).addClass("active");
    });

    $(".reaction-btn-text").on("click", function () { // undo like click
        if ($(this).hasClass("active")) {
            $(".reaction-btn-text").text("Like").removeClass().addClass('reaction-btn-text');
            $(".reaction-btn-emo").removeClass().addClass('reaction-btn-emo').addClass("like-btn-default");
        }
    })
});
