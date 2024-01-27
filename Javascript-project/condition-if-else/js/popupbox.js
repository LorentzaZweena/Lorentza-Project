//pop up alert

alert("Hello world!");
alert("Ini adalah pop up box alert");
alert("Nama : Ariva Zweena");
alert("Umur : 17 tahun");
alert("Pekerjaan : Murid");

//pop up prompt
var hobby = prompt("masukkan hobby anda: ");
alert("hobby anda: " + hobby);

//pop up confirm
var hobbyAnda = confirm("Apakah anda yakin memasukkan hobby anda dengan benar?");
if (hobbyAnda === true){
    alert("Yeay, Hobby anda adalah: " + hobby + " " + "!");
} else {
    alert("Oops, coba masukkan lagi!")
}