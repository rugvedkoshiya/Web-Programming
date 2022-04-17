const selectedCountry = document.getElementById("country");
const capitalSpan = document.getElementById("capital");
const contryObj = {
    "India": "New Delhi",
    "Canada": "Ottawa",
    "US": "Washington, D.C.",
    "Russia": "Moscow",
    "Germany": "Berlin",
}

function findCapial() {
    capitalSpan.innerText = contryObj[selectedCountry.value];
}