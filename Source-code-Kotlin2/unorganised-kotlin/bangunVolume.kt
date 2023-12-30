open class volumeBangun {
}


fun main(){

    var volumeBangunBalok = balokVolume()
    volumeBangunBalok.panjang = 10.0
    volumeBangunBalok.lebar = 10.0
    volumeBangunBalok.tinggi = 10.0
    println(volumeBangunBalok.volumeBalok(volumeBangunBalok.panjang, volumeBangunBalok.lebar, volumeBangunBalok.tinggi))

    var volumeBangunKerucut = kerucutVolume()
    volumeBangunKerucut.tinggi = 5.0
    volumeBangunKerucut.jari = 13.0
    println(volumeBangunKerucut.volumeKerucut(volumeBangunKerucut.tinggi, volumeBangunKerucut.jari))

}