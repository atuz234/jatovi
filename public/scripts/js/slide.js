
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slide_active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " slide_active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
// slideIndex++;
//     if (slideIndex > slides.length) {slideIndex = 1} 
//     slides[slideIndex-1].style.display = "block"; 
//     setTimeout(showSlides, 5000); // Change image every 2 seconds