const mainTable = document.getElementById("mainTable");
const totalNumber = 10;

function addRow(data) {
    let newRow = mainTable.insertRow();
    newRow.insertCell().appendChild(document.createTextNode(data.number));
    newRow.insertCell().appendChild(document.createTextNode(data.square));
    newRow.insertCell().appendChild(document.createTextNode(data.cube));
}

for (let index = 0; index < totalNumber; index++) {
    data = {
        "number": index,
        "square": index ** 2,
        "cube": index ** 3,
    }
    addRow(data)
}