//html dengan id "screen"
var screen = document.getElementById("screen");

//variable untuk menyimpan input user
var input = "";

//function untuk menampilkan input di layar
function display(){
    screen.value = input;
}

//function untuk menambahkan input
function addInput(value){
    input += value;
    display();
}

//function untuk menghapus input terakhir
function deleteInput(){
    input = input.slice(0, -1);
    display();
}

//function untuk menghapus semua input
function clearInput(){
    input = "";
    display();
}

//function untuk menghitung hasil input
function calculate(){
    if(input && !isNaN(input.slice(-1))){
        input = eval(input).toString();
        display();
    }
}

//event listener untuk setiap tombol
document.getElementById("clear").addEventListener("click", clearInput);
document.getElementById("backspace").addEventListener("click", deleteInput);
document.getElementById("divide").addEventListener("click", function (){
    addInput("/");
});
document.getElementById("multiply").addEventListener("click", function (){
    addInput("*");
});
document.getElementById("minus").addEventListener("click", function (){
    addInput("-");
});
document.getElementById("plus").addEventListener("click", function (){
    addInput("+");
});
document.getElementById("equal").addEventListener("click", calculate);
document.getElementById("dot").addEventListener("click", function (){
    addInput(".");
});
document.getElementById("zero").addEventListener("click", function (){
    addInput("0");
});
document.getElementById("one").addEventListener("click", function (){
    addInput("1");
});
document.getElementById("two").addEventListener("click", function (){
    addInput("2");
});
document.getElementById("three").addEventListener("click", function (){
    addInput("3");
});
document.getElementById("four").addEventListener("click", function (){
    addInput("4");
});
document.getElementById("five").addEventListener("click", function (){
    addInput("5");
});
document.getElementById("six").addEventListener("click", function (){
    addInput("6");
});
document.getElementById("seven").addEventListener("click", function (){
    addInput("7");
});
document.getElementById("eight").addEventListener("click", function (){
    addInput("8");
});
document.getElementById("nine").addEventListener("click", function (){
    addInput("9");
});