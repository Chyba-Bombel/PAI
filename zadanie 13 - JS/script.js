let tekst = document.getElementById("hello");
let przycisk = document.getElementById("send");
function obliczCene(){
    let cenaForm = document.getElementById("price").value.trim();
    let ilosc = document.getElementById("amount").value.trim();
    let tekst = document.getElementById("wyswietl");
    let cenaCalkowita = cenaForm * ilosc;
    tekst.textContent = "Cena to: " + Math.round(cenaCalkowita * 100) / 100 + "zł";



}
function obliczIlePlytek(){
    let dlugosc = document.getElementById("length").value;
    let szerokosc = document.getElementById("width").value;
    let pole = document.getElementById("plytka").value;
    let wyswietl = document.getElementById("tekst");
    let ilePlytek = (dlugosc * szerokosc) / pole;
    wyswietl.textContent = "Potrzebujesz " + Math.ceil(ilePlytek) + " płytek"
}
przycisk.addEventListener("click", function(){
    tekst.textContent = "Udało ci się!";
} )