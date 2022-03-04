//function  onload page 
document.addEventListener('DOMContentLoaded', function() {
window.onscroll = function(ev) {
    document.getElementById("goBack").className = (window.pageYOffset > 100) ? "goVisible" : "goInvisible";
};
});