var arr = ['a', 1, true];
console.log(arr);
//untuk menampilkan semua isi array.

var x = [];
x[0] = 'iqbal';
x[1] = 'atma';
x[3] = 'muliawan';
//kalau index di skip, datanya akan menjadi undefined dan lenght akan tetap menghitungnya
//------
arr[1] = undefined;
console.log(arr[1]);

for (var i = 0; i < arr.length; i++) {
    console.log(arr[i]);
}
arr[1] = 'aaaaddd';

console.log(arr.join('-'));
//untuk menampilkan array dalam bentuk string
//push untuk menambahkan elemen di akhir array
arr.push("max", 'min');
console.log(arr.join('-'));
//pop untuk menghapus elemen terakhir pada array
arr.pop();
console.log(arr.join('-'));
//unshift untuk menambahkan elemen baru diawal array
arr.unshift('iqbal');
console.log(arr.join('-'));
//shift untuk menghapus elemen di awal array
arr.shift();
console.log(arr.join('-'));

//slice untuk memisahkan array
//splice menyambung/menambal

//splice
//splice(indexAwal, optMauDihapusBerapa, optElemenBaru)
arr.splice(2, 1, 'ppp');
console.log(arr.join('-'));

//slice
//slice(awal,akhir)
arr2 = arr.slice(1, 2);
console.log(arr2.join('-'));

//foreach
var angka = [1, 2, 3, 4, 5, 6, 7, 8];
angka.forEach(function (e) {
    console.log(e);

})

arr.forEach(function (e, x) {
    console.log('elemen ke ' + (x + 1) + 'adalah' + e)
})

//map mengembalikan nilai array
var angka1 = [1, 2, 5, 3, 6, 8, 0];
var angka2 = angka1.map(function (e) {
    return e * 2;

})
console.log(angka2.join(' - '));

//sort
//untuk mengurutkan isi array
angka1.sort();
console.log(angka1.join(' - '));