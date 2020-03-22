//nodeList & HTMLCollection merupakan kumpulan node
//nodeList isinya bebas sedangkan HTMLCollection harus bertipe element
//root node = document
//parent = node yang merupakan satu tingkat diatas node lainnya
//child = node yang berada satu tingkat dibawah node yang lain
//sibling = childNode merupakan child node dengan parent yang sama
//-------------------------------------------------------------------------
//DOM Selection
//***********************
//getElementByID -> mengembalikan element
const judul = document.getElementById('judul');
judul.style.color = 'red'; //mengubah warna tulisan
judul.style.backgroundColor = "gray";

//getElementsByTagName -> HTMLColection
const p = document.getElementsByTagName('p');

for (i = 0; 0 < p.length; i++) {
    p[i].style.backgroundColor = 'lightblue';
}

const h1 = document.getElementsByTagName('h1')[0];
h1.style.fontSize = '50px';

//querySelector & querySelectorAll
//document.querySelector() -> element

const px = document.querySelector('#b p');
px.style.color = 'red';

const li2 = document.querySelector('#b li:nth-child(2)');
li2.style.backgroundColor = 'red';