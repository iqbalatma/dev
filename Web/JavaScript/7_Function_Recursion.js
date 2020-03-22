function tampilAngka(n) {
    if (n == 0) {
        return
    }
    console.log(n);
    return tampilAngka(n - 1);
}

tampilAngka(10);

//faktorial
var x;
var y;

function faktorial(x) {
    if (x == 0) {
        return 1;
    }
    return y = x * faktorial(x - 1);
}

faktorial(5);
console.log(y);