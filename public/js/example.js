// specify the columns
var columnDefs = [
    {headerName: "Name", field: "name"},
    {headerName: "Created_At", field: "created_at"},
    {headerName: "Updated_At", field: "updated_at"}
];

// specify the data
/*
var rowData = [
    {name: "TODO 1", created_at: "01.01.2018", updated_at: "05.11.2016"},
    {name: "TODO 1", created_at: "01.01.2018", updated_at: "05.11.2016"} // HERE I would like to replace this dummy data with my db data
]; 
*/
var rowData = res;

// let the grid know which columns and what data to use
var gridOptions = {
    columnDefs: columnDefs,
    rowData: rowData,
    onGridReady: function () {
        gridOptions.api.sizeColumnsToFit();
    }
};

// used in our jasmine test
function selectAllRows() {
    gridOptions.api.selectAll();
}

// wait for the document to be loaded, otherwise ag-Grid will not find the div in the document.
document.addEventListener("DOMContentLoaded", function () {
    // lookup the container we want the Grid to use
    var eGridDiv = document.querySelector('#myGrid');

    // create the grid passing in the div to use together with the columns & data we want to use
    new agGrid.Grid(eGridDiv, gridOptions);
});
