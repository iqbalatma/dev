function jumlahVolumeKubus(a, b) {
    var volumeA;
    var volumeB;
    var total;

    volumeA = a * a * a;
    volumeB = b * b * b;

    total = volumeA + volumeB

    return total;
}
alert(jumlahVolumeKubus(3, 4));

function jumlahVolumeDuaKubus(a, b) {


    return a * a * a + b * b * b;
}

alert(jumlahVolumeDuaKubus(3, 4));

//fungsi atas tida efisien