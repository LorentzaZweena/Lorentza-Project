// var jmlPaket = 1;
// while(jmlPaket <= 6){
//     console.log('Paket Thrifting No.' + jmlPaket + ' berhasil DIKIRIM' + ' !.');
//     jmlPaket++;
// }

// var jmlPaket = 7;
for (paketDikirim=1; paketDikirim<=10; paketDikirim++){
    // console.log('Paket Thrifting No.' + paketDikirim + ' GAGAL DIKIRIM' + ' !.');
    if(paketDikirim <= 6){
        console.log('Paket Thrifting No.' + paketDikirim + ' berhasil DIKIRIM' + ' !.');
    }else{
        console.log('Paket Thrifting No.' + paketDikirim + ' GAGAL DIKIRIM' + ' !.');
    }
}
