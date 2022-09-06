const albumImages = [
    "bornlikethis", "czarfacemeetsmetalface", "fourtetremixes",
    "madvillain", "madvillain2", "mmfood",
    "nehruviandoom", "operationdoomsday", "specialherbsboxset",
    "specialherbsvol1", "specialherbsvol1and2", "specialherbsvol3and4", "superwhat"
];

const albumTitles = [
    "Born Like This", "Czarface Meets Metalface", "Four Tet Remixes",
    "Madvillainy", "Madvillainy2", "MM.. Food",
    "NEHRUVIANDOOM", "Opeartion DOOMsday", "Special Herbs Box Set",
    "Special Herbs Vol 1", "Special Herbs Vol 1 & 2", "Special Herbs Vol 3 & 4", "Super What?"
];

const albumAlt = [
    "Born Like This album art", "Czarface Meets Metal Face album art", "Four Tet Remixes",
    "Madvillainy album art", "Madvillainy 2 album art", "MM... Food album art",
    "NehruvianDOOM album art", "Operation DOOMsday album art", "Special Herbs box set album art",
    "Special Herbs volume 1 album art", "Special Herbs volume 1 and 2 album art", "Special Herbs volume 3 and 4 album art",
    "Super What? album art"
];

let title, image, description;
d = new Date();

window.onload = function() {
    if (!(localStorage.getItem("date") === d.getDay().toString())){
        localStorage.setItem("date", d.getDay().toString())
        localStorage.removeItem("featured1");
        localStorage.removeItem("featured2");
        localStorage.removeItem("featured3");
    }

    if (!(localStorage.getItem("featured1"))){
        localStorage.setItem("featured1", (Math.floor(Math.random() * albumImages.length)).toString());
    }
    if (!(localStorage.getItem("featured2"))){
        localStorage.setItem("featured2", (Math.floor(Math.random() * albumImages.length)).toString());
    }
    if (!(localStorage.getItem("featured3"))){
        localStorage.setItem("featured3", (Math.floor(Math.random() * albumImages.length).toString()));
    }

    while ((localStorage.getItem("featured1") === localStorage.getItem("featured2")) || (localStorage.getItem("featured1") === localStorage.getItem("featured3"))){
        localStorage.removeItem("featured1");
        localStorage.setItem("featured1", (Math.floor(Math.random() * albumImages.length).toString()))
    }
    while ((localStorage.getItem("featured2") === localStorage.getItem("featured1")) || (localStorage.getItem("featured2") === localStorage.getItem("featured3"))){
        localStorage.removeItem("featured2");
        localStorage.setItem("featured2", (Math.floor(Math.random() * albumImages.length).toString()))
    }
    while ((localStorage.getItem("featured3") === localStorage.getItem("featured1")) || (localStorage.getItem("featured3") === localStorage.getItem("featured2"))){
        localStorage.removeItem("featured3");
        localStorage.setItem("featured3", (Math.floor(Math.random() * albumImages.length).toString()))
    }



    setAttributes("featured1");
    setAttributes("featured2");
    setAttributes("featured3");
}

function setAttributes(x) {
    if (x === "featured1") {
        image = document.getElementById("album-art1");
        title = document.getElementById("album-title1");

        image.src = "assets/img/" + albumImages[parseInt(localStorage.getItem("featured1"))] + ".jpg";
        image.alt = albumAlt[parseInt(localStorage.getItem("featured1"))];

        title.innerText = albumTitles[parseInt(localStorage.getItem("featured1"))];

        ajax(albumImages[parseInt(localStorage.getItem("featured1"))], "short-desc1")

    } else if (x === "featured2") {
        image = document.getElementById("album-art2");
        title = document.getElementById("album-title2");

        image.src = "assets/img/" + albumImages[parseInt(localStorage.getItem("featured2"))] + ".jpg";
        image.alt = albumAlt[parseInt(localStorage.getItem("featured2"))];

        title.innerText = albumTitles[parseInt(localStorage.getItem("featured2"))];

        ajax(albumImages[parseInt(localStorage.getItem("featured2"))], "short-desc2");
    } else {
        image = document.getElementById("album-art3");
        title = document.getElementById("album-title3");

        image.src = "assets/img/" + albumImages[parseInt(localStorage.getItem("featured3"))] + ".jpg";
        image.alt = albumAlt[parseInt(localStorage.getItem("featured3"))];

        title.innerText = albumTitles[parseInt(localStorage.getItem("featured3"))];

        ajax(albumImages[parseInt(localStorage.getItem("featured3"))], "short-desc3");
    }
}

function album(x) {
    localStorage.removeItem("album");
    if (x === 1){
        localStorage.setItem("album", localStorage.getItem("featured1"))
    }else if (x === 2){
        localStorage.setItem("album", localStorage.getItem("featured2"))
    }else{
        localStorage.setItem("album", localStorage.getItem("featured3"))
    }

}

function ajax(x, id) {
    let xhr = new XMLHttpRequest();
    xhr.onload = function(){
        if (this.status === 200) {
            document.getElementById(id).innerText = this.responseText;
        }else {
            document.getElementById(id).innerText = "Lorem ipsum dolor sit amet..."
        }
    }
    xhr.open("POST", "assets/php/shortDescription.php?desc=" + x, true);
    xhr.send();

}