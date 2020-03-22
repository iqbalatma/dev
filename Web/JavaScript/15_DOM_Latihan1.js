const tUbahWarna = document.getElementById('tUbahWarna');
const body = document.getElementsByClassName('body')[0];
tUbahWarna.onclick = function () {
    //document.body.style.backgroundColor = 'lightblue';
    // document.body.setAttribute('class', 'biru-muda');
    document.body.classList.toggle('biru-muda');
}


const tAcakWarna = document.createElement('button');
const teksTombol = document.createTextNode('Acak Warna');
tAcakWarna.appendChild(teksTombol);
tAcakWarna.setAttribute('type', 'button');
tUbahWarna.after(tAcakWarna);

tAcakWarna.addEventListener('click', function () {
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
});

const sMerah = document.querySelector('input[name=sMerah]');

sMerah.addEventListener('input', function () {
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
    //  console.log(sMerah.value);
});

const sHijau = document.querySelector('input[name=sHijau]');

sHijau.addEventListener('input', function () {
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
    //  console.log(sMerah.value);
});


//tangkap sBiru
const sBiru = document.querySelector('input[name=sBiru]');
//kemudian sBiru akan melakukan event
//memiliki dua parameter, yaitu 'change' adalah eventnya (akan terjadi ketika . . .) dan parameter kedua adalah aksi yang dilakukan.
//jika parameter pertama di isi change, warna akan berubah ketika kursor dilepaskan. jika di isi input maka perubahan warna akan live
sBiru.addEventListener('input', function () {
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;
    document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';


});


document.body.addEventListener('mousemove', function (event) {
    //posisi mouse
    // console.log(event.clientX);

    //ukuran browser
    // console.log(window.innerHeight);
    const xPos = Math.round((event.clientX / window.innerWidth) * 255);
    // console.log(xPos);
    const yPos = Math.round((event.clientY / window.innerHeight) * 255);

    document.body.style.backgroundColor = 'rgb(' + xPos + ',' + yPos + ',  100 )';
});