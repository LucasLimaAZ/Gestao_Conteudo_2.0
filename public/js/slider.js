function cadastra(){

    var table = document.getElementById("slogans");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = document.getElementById("slogan").value;
    cell2.innerHTML = document.getElementById("subslogan").value;

}
