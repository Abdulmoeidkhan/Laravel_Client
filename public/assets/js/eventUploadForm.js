let fileInput = document.getElementById("eventPicture");
let fileResult = document.getElementById("eventPicHelp");
let fileSubmit = document.getElementById("uploadEvent");

fileInput.addEventListener("change", function () {
    if (fileInput.files.length > 0) {
        const fileSize = fileInput.files.item(0).size;
        const fileMb = fileSize / 1024 ** 2;
        if (fileMb >= 2) {
            fileResult.innerHTML = "Please select a file less than 2MB.";
            fileSubmit.disabled = true;
        } else {
            fileResult.innerHTML = "Success, your file is " + fileMb.toFixed(1) + "MB.";
            fileSubmit.disabled = false;
        }
    }
});