// Cara membuat objek pada javascript
// 1 Objek Literal
// let mahasiswa = {
//     nama: 'Iqbal Atma Muliawan',
//     energi: 10,
//     makan: function(porsi) {
//         this.energi = this.energi + porsi;
//         console.log(`Halo ${this.nama}, selamat makan`)
//     }
// }

// let mahasiswa = {
//         nama: 'Iqbal Atma Muliawan',
//         energi: 10,
//         makan: function(porsi) {
//             this.energi = this.energi + porsi;
//             console.log(`Halo ${this.nama}, selamat makan`)
//         }
//     }

// 2 Function Declaration
// function Mahasiswa(nama, energi) {
//     let mahasiswa = {};
//     mahasiswa.nama = nama;
//     mahasiswa.energi = energi;

//     mahasiswa.makan = function(porsi) {
//         this.energi += porsi;
//         console.log(`Halo ${this.nama} Selamat makan`)
//     }
//     return mahasiswa;
// }

// let iqbal = Mahasiswa('Iqbal Atma Muliawan', 50)

// 3 Constructor Function
// function Mahasiswa(nama, energi) {
//     this.nama = nama;
//     this.energi = energi;

//     this.makan = function(porsi) {
//         this.energi += porsi;
//         console.log(`Halo ${this.nama} Selamat makan`);
//     };
// }

// let iqbal = new Mahasiswa("Iqbal Atma Muliawan", 50);
// 4 Object.create

// ---------------
function Mahasiswa(nama, energi) {
    // let mahasiswa = Object.create(methodMahasiswa);
    // let mahasiswa = {};
    this.nama = nama;
    this.energi = energi;
    // return mahasiswa;
}

Mahasiswa.prototype.makan = function(porsi) {
    this.energi += porsi;
    return `Halo ${this.nama}, selamat makan `;
};

Mahasiswa.prototype.main = function(jam) {
    this.energi -= jam;
    return `Halo ${this.nama}, selamat bermain `;
};

Mahasiswa.prototype.tidur = function(jam) {
    this.energi += jam * 2;
    return `Halo ${this.nama}, selamat tidur `;
};

let iqbal = new Mahasiswa("Iqbal", 10);