function angka1() {
    let klr = document.getElementById("kalkulator");
    klr.a1.value = "";
}

function angka2() {
    let klr = document.getElementById("kalkulator");
    klr.a2.value = "";
}

function kosongAll() {
    let klr = document.getElementById("kalkulator");
    klr.a1.value = "";
    klr.a2.value = "";
    klr.hasil.value = "";
}

function tambah() {
    let klr = document.getElementById("kalkulator");
    let a1 = eval(klr.a1.value);
    let a2 = eval(klr.a2.value);
    let hasil = klr.hasil.value;

    if (isNaN(a1) || a1 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else if (isNaN(a2) || a2 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else {
        let tambah = a1 + a2;
        klr.hasil.value = tambah;
}
}
function kurang() {
    let klr = document.getElementById("kalkulator");
    let a1 = klr.a1.value;
    let a2 = klr.a2.value;
    let hasil = klr.hasil.value;

    if (isNaN(a1) || a1 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else if (isNaN(a2) || a2 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else {
        let kurang = a1 - a2;
        klr.hasil.value = kurang;
}
}
function kali() {
    let klr = document.getElementById("kalkulator");
    let a1 = klr.a1.value;
    let a2 = klr.a2.value;
    let hasil = klr.hasil.value;

    if (isNaN(a1) || a1 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else if (isNaN(a2) || a2 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else {
        let kali = a1 * a2;
        klr.hasil.value = kali;
}
}

function bagi() {
    let klr = document.getElementById("kalkulator");
    let a1 = klr.a1.value;
    let a2 = klr.a2.value;
    let hasil = klr.hasil.value;

    if (isNaN(a1) || a1 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else if (isNaN(a2) || a2 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else {
        let bagi = a1 / a2;
        klr.hasil.value = bagi;
}
}

function pangkat() {
    let klr = document.getElementById("kalkulator");
    let a1 = klr.a1.value;
    let a2 = klr.a2.value;
    let hasil = klr.hasil.value;

    if (isNaN(a1) || a1 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else if (isNaN(a2) || a2 == '') {
        alert("Data angka 1 salah, Masukan ulang angka!");
    } else {
        let pangkat = Math.pow(a1, a2)
        klr.hasil.value = pangkat;
}
}