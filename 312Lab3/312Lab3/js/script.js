// FutureTech - script.js
// IS312 Web Application Development - Lab 3

$(document).ready(function () {
    console.log("Page loaded successfully!");

    // Click event on headings
    $("h2").click(function () {
        alert("You clicked: " + $(this).text());
    });

    // Fade in cards on page load
    $(".card").hide().fadeIn(1000);

    // Add active highlight on nav-link hover
    $(".nav-link").hover(
        function () {
            $(this).css("text-decoration", "underline");
        },
        function () {
            $(this).css("text-decoration", "none");
        }
    );
});
