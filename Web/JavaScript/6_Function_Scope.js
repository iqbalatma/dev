//global scope
var a = 1;

//function scope karena b hanya bisa di panggil didalam function
function tes() {
    var b = 2;
}

tes();
console.log(b);