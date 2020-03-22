var x = 8;
var y = 3;
var volumeX;
var volumeY;
var total;

volumeX = x * x * x;
volumeY = y * y * y;
//total = volumeX + volumeY;
console.log(total);

function jumlahVolumeDuaKubus(x, y) {
    var total;
    volumeX = x * x * x;
    volumeY = y * y * y;
    total = volumeX + volumeY;

    return total;
}