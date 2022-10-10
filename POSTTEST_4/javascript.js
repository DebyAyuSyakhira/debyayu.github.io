var element = document.body;

function ubahwarna(){
    element.classList.toggle("gelap");
    if(element.classList.contains('gelap')){
        alert('Ingin mengubah tampilan menjadi Darkmode?');
        localStorage.setItem('tema', 'gelap');
    }
    else{
        alert('Ingin mengubah tampilan menjadi Lightmode?');
        localStorage.setItem('tema','terang');
    }
}

var tema =localStorage.getItem("tema");
if(tema=='gelap'){
    element.classList.add("gelap");
}


var button = document.getElementById('info');
button.addEventListener("click", function showInfo()
{
    const x = document.getElementById('biodata');
    if (x.style.display == 'none'){
        x.style.display = 'block';s
    }
    else{
        x.style.display = 'none';
    }
});

var element = document.body;

function masuk(){
    element.classList.toggle("logout");
    if(element.classList.contains('logout')){
        alert('Ingin login?');
        localStorage.setItem('masuk', 'logout');
    }
    else{
        alert('Ingin logout?');
        localStorage.setItem('masuk','login');
    }
}

var masuk =localStorage.getItem("masuk");
if(tema=='logout'){
    element.classList.add("logout");
}

