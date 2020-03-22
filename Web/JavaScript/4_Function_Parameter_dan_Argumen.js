//parameter adalah variabel dalam kurung saat function dibuat
//parameter bisa juga disebut bahan
//argumen adalah nilai yang dikirimkan ke parameter
//bahan => function => output

function tambah(a, b) {
    return a + b;
}

var coba = tambah(5, 10);

//a dan b adalah parameter
//5 dan 10 adalah nilai yang dikirimkan (argumen)

console.log(coba);

function kurang(x, y) {
    return x - y;
}

var x = 10;
var y = 2;
var z = kurang(x, y);

console.log(z);

function kali(k, l) {
    return k * l;
}
var k = parseInt(prompt("Masukkan nilai k: "));
var l = parseInt(prompt("Masukkan nilai l: "));
var final = kali(k, l);
console.log(final);

var p = kali(tambah(1, 2), tambah(3, 4));
console.log(p);

function lala() {
    var hasil = 0;
    for (var i = 0; i < arguments.length; i++) {
        hasil += arguments[i];
    }
    return hasil;
}

var tes = lala(1, 1, 2, 3, 4);
console.log(tes);