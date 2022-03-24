//let url = 'http://localhost/mvc';
let url = 'https://axewes.website/mvc';
$('body').on("keydown", function(e) {
    if (e.ctrlKey && e.shiftKey && e.which === 90) {
        window.open(url + "/Administrador/index", "", "width=400, height=300");
    }
});