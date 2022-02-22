const btn = document.getElementById("btn");
const userInput = document.getElementById("userInput");

function countCharacter() {
    let totalChar = userInput.value.length;
    let totalWord = userInput.value.split("\n").join(" ").split(" ").length;
    let totalLine = (userInput.value.match(new RegExp("\n", "g")) || []).length + 1;
    raw = `Total Character : ${totalChar}\nTotal Word : ${totalWord}\nTotal Line : ${totalLine}`
    alert(raw);
}

btn.addEventListener("click", countCharacter);
