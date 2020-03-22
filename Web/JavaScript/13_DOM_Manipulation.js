// const h1 = document.getElementById('judul');
// h1.innerHTML = '<em>tes</em>';

// const sectionA = document.querySelector('section#a');
// sectionA.innerHTML = 'Hello World';


// const judul = document.querySelector('#judul');
// judul.style.color = 'lightblue';


// const judul = document.getElementsByTagName('h1')[0];
// judul.setAttribute('name', 'iqbal');

// const a = document.querySelector('section#a a');
// a.setAttribute('id', 'link')

// a.getAttribute('href');

// a.removeAttribute('href');

// //Node manipulation
// //buat element baru
// const pBaru = document.createElement('p');
// const teksPBaru = document.createTextNode('Paragraf Baru');
// pBaru.appendChild(teksPBaru);
// //simpan diakhir sectionA
// const sectionA = document.getElementById('a');
// sectionA.appendChild(pBaru);

// const liBaru = document.createElement('li');
// const teksLiBaru = document.createTextNode('LiBaru');
// liBaru.appendChild(teksLiBaru);
// const ul = document.querySelector('section#b ul');
// const li2 = document.querySelector('section#b ul li:nth-child(2)');
// ul.insertBefore(liBaru, li2);

// const sectionA = document.getElementById('a');
// const link = document.getElementsByTagName('a')[0];
// sectionA.removeChild(link);

const sectionB = document.getElementById('b');
const p4 = sectionB.querySelector('p');

const h2Baru = document.createElement('h2');
const teksH2Baru = document.createTextNode('judul h2 baru000');
h2Baru.appendChild(teksH2Baru);

sectionB.replaceChild(h2Baru, p4);