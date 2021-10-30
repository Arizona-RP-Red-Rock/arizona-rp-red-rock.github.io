function my_proverka () {
    var code = document.getElementById("my_pass").value;
    var pass = "redrock08";
    if (code == pass) {
    var win = document.getElementById("openModal");
    win.classList.add("close");
    }
    }