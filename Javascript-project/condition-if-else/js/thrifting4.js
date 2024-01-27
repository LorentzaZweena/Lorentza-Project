for (paketDikirim=1; paketDikirim<=10; paketDikirim++){
    // console.log('Paket Thrifting No.' + paketDikirim + ' GAGAL DIKIRIM' + ' !.');
    if(paketDikirim <= 6 && paketDikirim !==5 ){
        console.log('Paket Thrifting No.' + paketDikirim + ' berhasil DIKIRIM' + ' !.');
    }else if (paketDikirim == 8 || paketDikirim == 10 ||  paketDikirim == 5){
        console.log('Paket Thrifting No.' + paketDikirim + ' DALAM PERJALANAN' + ' !.');
    } else{
        console.log('Paket Thrifting No.' + paketDikirim + ' GAGAL DIKIRIM' + ' !.');
    }
}