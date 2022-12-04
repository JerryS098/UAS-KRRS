function submitprofil() {
    alert("Data anda berhasil disimpan!");

    var nimmahasiswa = document.getElementById("nim").value;
    var namamahasiswa = document.getElementById("nama").value;
    localStorage.setItem("nimvalue", nimmahasiswa);
    localStorage.setItem("namavalue", namamahasiswa);
}

function logout() {
    localStorage.clear();
}

function submitkrrs(){
    alert("Pilihan mata kuliah berhasil disimpan!");

    localStorage.setItem('Arraycheckboxvalue', JSON.stringify(listarraycheckbox));

    window.location.href='cetakkrrs.php';
}

function loginkrrs() {
    var emailmahasiswa = document.getElementById("email").value;
    var passwordmahasiswa = document.getElementById('password').value;
    localStorage.setItem("emailvalue", emailmahasiswa);
    localStorage.setItem("passwordvalue", passwordmahasiswa);

    var mail = localStorage.getItem("emailvalue");
    var pass = localStorage.getItem("passwordvalue");

    var newmail = localStorage.getItem("newemailvalue");
    var newpass = localStorage.getItem("newpasswordvalue");

    if(mail == newmail && pass == newpass) {
        // window.open("index1.html");
        window.location.href="index1.html";
    } else {
        document.getElementById('akses').innerHTML='Login Failed!';
    }
}

function newsignup() {
    var newemailmahasiswa = document.getElementById('newemail').value;
    var newpasswordmahasiswa = document.getElementById('newpassword').value;
    localStorage.setItem("newemailvalue", newemailmahasiswa);
    localStorage.setItem("newpasswordvalue", newpasswordmahasiswa);

    localStorage.removeItem("nimvalue");
    localStorage.removeItem("namavalue");
    localStorage.removeItem("Arraycheckboxvalue");
}