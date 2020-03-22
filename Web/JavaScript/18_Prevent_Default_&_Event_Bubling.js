// const closeX = document.getElementsByClassName('close')[0];

// const card = document.getElementsByClassName('card')[0];

// closeX.addEventListener('click', function () {
//     card.style.display = 'none';
// });

//DOM Traversal
//Ambil semua tombol close

//traversal dom berguna untuk menelusuri parentnya
//jadi tidak perlu melakukan penangkapan pada class card
//cukup tangkap class close, kemudian gunakan traversal DOM untuk menangkap parentnya, lalu hilangkan parentna.

const closeX = document.querySelectorAll('.close');
// for (let i = 0; i < closeX.length; i++) {
//     closeX[i].addEventListener('click', function (e) {
//         // closeX[i].parentElement.style.display = 'none';
//         e.target.parentElement.style.display = 'none';
//         console.log(e.target);
//     });
// }










//PREVENT DEFAULT
//Untuk menghentikan aksi default dari sebuah elemen
// closeX.forEach(function (el) {
//     el.addEventListener('click', function (e) {
//         e.target.parentElement.style.display = 'none';
//         e.preventDefault();
//         //EVENT BUBLING
//         e.stopPropagation();
//     });
// });

// const cards = document.querySelectorAll('.card');
// cards.forEach(function (card) {
//     card.addEventListener('click', function (e) {
//         alert('ok');
//     });
// });