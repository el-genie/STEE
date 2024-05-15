//change automatically image after eauch 10 seconds
//stock images in the variable images
var images = ["20.jpg","2.jpg","18.jpg","9.jpg","14.jpg","15.jpg","centrale 3.jpg","OIP(2).jpg","OIP(3).jpg","OIP(9).jpg","OIP(7).jpg","OIP(8).jpg","centrale 2.jpg"];
//create a function that can select image for to set to the background and change it after each 10 seconds
        $(function () {
            var i = 0;
            $("#dvImage").css("background-image", "url(images/" + images[i] + ")");
            setInterval(function () {
                i++;
                if (i == images.length) {
                    i = 0;
                }
                $("#dvImage").fadeOut("slow", function () {
                    $(this).css("background-image", "url(images/" + images[i] + ")");
                    $(this).fadeIn("slow");
                });
            }, 10000);
        });
