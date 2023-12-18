
    
    
    var onlyChairs = document.querySelectorAll(".onlyChairs");
    var onlySofas = document.querySelectorAll(".onlySofas");
    var onlyTables = document.querySelectorAll(".onlyTables");
    var onlyLamps = document.querySelectorAll(".onlyLamps");


    var buttonAll = document.querySelector("#btnAll");
    var buttonChairs = document.querySelector("#btnChairs");
    var buttonSofas = document.querySelector("#btnSofas");
    var buttonTables = document.querySelector("#btnTables");
    var buttonLamps = document.querySelector("#btnLamps");

    var ddownAll = document.querySelector("#ddownAll");
    var ddownChairs = document.querySelector("#ddownChairs");
    var ddownSofas = document.querySelector("#ddownSofas");
    var ddownTables = document.querySelector("#ddownTables");
    var ddownLamps = document.querySelector("#ddownLamps");


function productSeparator() {
    

    
    onlyChairs.forEach(function (element) {
        element.classList.add("d-none");
    });
    onlySofas.forEach(function (element) {
        element.classList.add("d-none");
    });
    onlyTables.forEach(function (element) {
        element.classList.add("d-none");
    });
    onlyLamps.forEach(function (element) {
        element.classList.add("d-none");
    });

    

    if (buttonAll.checked) {
        onlyChairs.forEach(function (element) {
            element.classList.remove("d-none");
        });
        onlySofas.forEach(function (element) {
            element.classList.remove("d-none");
        });
        onlyTables.forEach(function (element) {
            element.classList.remove("d-none");
        });
        onlyLamps.forEach(function (element) {
            element.classList.remove("d-none");
        });
        
    }

    if (buttonChairs.checked) {
        onlyChairs.forEach(function (element) {
            element.classList.remove("d-none");
        });
    }

    if (buttonSofas.checked) {
        onlySofas.forEach(function (element) {
            element.classList.remove("d-none");
        });
    }

    if (buttonTables.checked) {
        onlyTables.forEach(function (element) {
            element.classList.remove("d-none");
        });
    }

    if (buttonLamps.checked) {
        onlyLamps.forEach(function (element) {
            element.classList.remove("d-none");
        });
    }
}


