window.onload = () => {
    mediael = document.getElementById("media");
    mediael.classList.add("active");
    mediael.style.color="gray";
    mediael.setAttribute("href","#");
    addPics();
};

function addPics() {
    picsarea = document.getElementById("picsarea");

    picsarea.innerHTML += "<div class=\"carousel-item active\" style=\"object-fit:scale-down\">\
        <img src=\"images/img_1.jpg\" class=\"img-fluid mx-auto d-block\" alt=\"Image 1 in slideshow of MIT Lion Dance Pictures...\">\
    </div>";

    for (let i = 2; i <= 23; i++) {
        picsarea.innerHTML += "<div class=\"carousel-item\" style=\"object-fit:scale-down\">\
            <img src=\"images/img_"+i+".jpg\" class=\"img-fluid mx-auto d-block\" alt=\"Image "+i+" in slideshow of MIT Lion Dance Pictures...\">\
        </div>";
    }
}
