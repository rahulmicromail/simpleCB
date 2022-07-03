var selectedRow = null;
function onFormSubmit(e){
    event.preventDefault();
    var formData = readFormData();
    if(selectedRow === null){
        insertNewRecord(formData);
    }else{
        updateRecord(formData)
    }
    resetForm();
    }
// Read operation using this function
function readFormData(){
    var formData = {};
    formData["slno"] = document.getElementById("slno").value;
    formData["Questions"] = document.getElementById("Questions").value;
    formData["Answers"] = document.getElementById("Answers").value;
    return formData;
}

// Create operation
function insertNewRecord(data){
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    var cell1 = newRow.insertCell(0);
        cell1.innerHTML = data.slno;
    var cell2 = newRow.insertCell(1);
        cell2.innerHTML = data.Questions;
    var cell3 = newRow.insertCell(2);
        cell3.innerHTML = data.Answers;
    var cell5 = newRow.insertCell(4);
        cell5.innerHTML = `<a href="#" onClick='onEdit(this)'>Edit</a>
                        <a href="#" onClick='onDelete(this)'>Delete</a>`;
}

// To Reset the data of fill input
function resetForm(){
    document.getElementById('slno').value = '';
    document.getElementById('Questions').value = '';
    document.getElementById('Answers').value = '';
    selectedRow = null;
}

// For Edit operation
function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('slno').value = selectedRow.cells[0].innerHTML;
    document.getElementById('Questions').value = selectedRow.cells[1].innerHTML;
    document.getElementById('Answers').value = selectedRow.cells[2].innerHTML;
}
function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.slno;
    selectedRow.cells[1].innerHTML = formData.Questions;
    selectedRow.cells[2].innerHTML = formData.Answers;
}
function onDelete(td){
    if(confirm('Are you sure you want to delete this record?')){
        row = td.parentElement.parentElement;
        document.getElementById('employeeList').deleteRow(row.rowIndex);
        resetForm();
    }    
}