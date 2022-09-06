// 13 items long
const albums = [
    "bornlikethis", "czarfacemeetsmetalface", "fourtetremixes",
    "madvillain", "madvillain2", "mmfood",
    "nehruviandoom", "operationdoomsday", "specialherbsboxset",
    "specialherbsvol1", "specialherbsvol1and2", "specialherbsvol3and4", "superwhat"
];

const albumAlt = [
    "Born Like This album art", "Czarface Meets Metal Face album art", "Four Tet Remixes",
    "Madvillainy album art", "Madvillainy 2 album art", "MM... Food album art",
    "NehruvianDOOM album art", "Operation DOOMsday album art", "Special Herbs box set album art",
    "Special Herbs volume 1 album art", "Special Herbs volume 1 and 2 album art", "Special Herbs volume 3 and 4 album art",
    "Super What? album art"
];

const spotify = [
    "5i7JM6qlMK5x2gY6Tkv56h", "2PPvDD3t985MvMphfSwzgr", "1lBlWsgSwzxUObEwzRTCP3",
    "19bQiwEKhXUBJWY6oV3KZk", "2tFoLuLmgTgwFS0P9RVvew", "1UcS2nqUhxrZjrBZ3tHk2N",
    "1ffAV4iWGRi0wxAR3FVqyw", "4UG3kz6qoHtNI1glQ2wdon", "3ywl9PSiAb3RJrcs9DtncG",
    "63fFCsXmRWP5Spr06X83Tb", "1DcGy9z5Bz7ZDS7dMhdtkY", "3TDUs1ZtrcccyI9SlxuEP5",
    "4odeNH2Qe9DAxT3sC1qq9p"
];

let image, iframe;

window.onload = function() {
    if (!localStorage.getItem("album")) {
        localStorage.setItem("album", (Math.floor(Math.random() * albums.length)).toString());
    }
    setAttributes(localStorage.getItem("album"));
}

function carouselMove(i) {
    if ((parseInt(localStorage.getItem("album")) + i) > (albums.length-1) )
    {
        return "0";
    }
    else if ((parseInt(localStorage.getItem("album")) + i) === -1)
    {
        return (albums.length - 1).toString();
    }
    return (parseInt(localStorage.getItem("album")) + i).toString();
}

function setAttributes(x){
    image = document.getElementById('carouselImg');
    iframe = document.getElementById('spotify');
    image.src = "assets/img/" + albums[parseInt(x)] + ".jpg";
    image.alt = albumAlt[parseInt(x)];
    iframe.src = "https://open.spotify.com/embed/album/" + spotify[parseInt(x)] + "?utm_source=generator";
}

function move(i) {
    let newVal = carouselMove(i);
    localStorage.removeItem("album");
    localStorage.setItem("album", newVal);
    setAttributes(localStorage.getItem("album"));
}