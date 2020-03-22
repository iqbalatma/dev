function getPilihanComputer() {
    const comp = Math.random();

    if (comp < 0.34) return 'batu';
    if (comp >= 0.34 && comp < 0.67) return 'gunting';
    return 'kertas';
}

function getHasil(comp, player) {
    if (player == comp) return 'SERI!';
    if (player == 'gunting') return (comp == 'batu') ? 'KALAH!' : 'MENANG!';
    if (player == 'batu') return (comp == 'kertas') ? 'KALAH!' : 'MENANG!';
    if (player == 'kertas') return (comp == 'gunting') ? 'KALAH!' : 'MENANG!';
}

// const pBatu = document.querySelector('.batu');
// pBatu.addEventListener('click', function () {
//     const pilihanComputer = getPilihanComputer();
//     const pilihanPlayer = pBatu.className;

//     const hasil = getHasil(pilihanComputer, pilihanPlayer);

//     const imgComputer = document.querySelector('.img-computer');
//     imgComputer.setAttribute('src', 'img/' + pilihanComputer + '.png');

//     const info = document.querySelector('.info');
//     info.innerHTML = hasil;
//     // console.log(pilihanComputer);
//     // console.log(pilihanPlayer);
//     // console.log(x);
// })

// const pGunting = document.querySelector('.gunting');
// pGunting.addEventListener('click', function () {
//     const pilihanComputer = getPilihanComputer();
//     const pilihanPlayer = pGunting.className;
//     const hasil = getHasil(pilihanComputer, pilihanPlayer);
//     const imgComputer = document.querySelector('.img-computer');
//     imgComputer.setAttribute('src', 'img/' + pilihanComputer + '.png');
//     const info = document.querySelector('.info');
//     info.innerHTML = hasil;
// })

// const pKertas = document.querySelector('.kertas');
// pKertas.addEventListener('click', function () {
//     const pilihanComputer = getPilihanComputer();
//     const pilihanPlayer = pKertas.className;
//     hasil = getHasil(pilihanComputer, pilihanPlayer);

//     const imgComputer = document.querySelector('.img-computer');
//     imgComputer.setAttribute('src', 'img/' + pilihanComputer + '.png');
//     const info = document.querySelector('.info');
//     info.innerHTML = hasil;
// })

function putar() {
    const imgComputer = document.querySelector('.img-computer');
    const gambar = ['batu', 'kertas', 'gunting'];
    let i = 0;
    const waktuMulai = new Date().getTime();
    setInterval(function () {
        if (new Date().getTime() - waktuMulai > 1000) {
            clearInterval;
            return;
        }
        imgComputer.setAttribute('src', 'img/' + gambar[i++] + '.png');
        if (i == gambar.length) i = 0;

    }, 100);
}

const pilihan = document.querySelectorAll('li img');
pilihan.forEach(function (pil) {
    pil.addEventListener('click', function () {
        const pilihanComputer = getPilihanComputer();
        const pilihanPlayer = pil.className;
        const hasil = getHasil(pilihanComputer, pilihanPlayer);

        putar();

        setTimeout(function () {
            const imgComputer = document.querySelector('.img-computer');
            imgComputer.setAttribute('src', 'img/' + pilihanComputer + '.png');
            const info = document.querySelector('.info');
            info.innerHTML = hasil;
        }, 1000);



    })
})