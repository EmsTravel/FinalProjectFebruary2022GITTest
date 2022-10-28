let cookies = document.querySelector(".content");
let modal = document.querySelector(".cookie-wrapper");
let button = document.querySelector(".item");
let Backpack;
//show cookie 
function display() {
    cookies.style.display = "block";
    modal.style.display = "block";
}

//function  onload page 
document.addEventListener("DOMContentLoaded", function() {
    //accept cookie 
    function acceptcookie() {
        cookies.style.display = "none";
        modal.style.display = "none";
        clearTimeout(Backpack);
        let url = 'index.php?page=cookie';
        //send url 
        fetch(url)
            .then(function(response) {
                return response.text();
            })
    }


    if (cookies != null & button != null) {
        Backpack = setTimeout(display, 10000);
        button.addEventListener("click", acceptcookie)
    }

});