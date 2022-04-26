const quote = document.getElementById("quote");
const quoteAuthor = document.getElementById("quoteAuthor");
const api = "https://api.quotable.io/random";
let data = "";

async function onLoad() {
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === 4) {
            data = JSON.parse(this.responseText);
            quote.innerHTML = data.content;
            if (data.author == null) {
                quoteAuthor.innerHTML = "- " + "Unknown";
            } else {
                quoteAuthor.innerHTML = "- " + data.author;
            }
        }
    });
    xhr.open("GET", api);
    xhr.send();
}