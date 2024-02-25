open class volumeBangun {
}


fun main(){
//    var volumeAll = volumeBangun()
//    volumeAll.panjang = 2.5
//    volumeAll.lebar = 5.7
//    volumeAll.tinggi = 2.2
//
//
//    volumeAll.radius = 4.7
//    volumeAll.tinggi = 5.8
//
//    print("Volume balok: ")
//    print(volumeAll.volumeBalok(volumeAll.panjang, volumeAll.lebar, volumeAll.tinggi))
//    println()
//    print("Volume kerucut: ")
//    print(cone.volumeKerucut())
//    val vb = volumeBalok()
//    vb.panjang = 5.0
//    vb.lebar = 10.0
//    vb.tinggi = 10.0
//
//    var hasilVb = vb.hasilVB(vb.panjang, vb.lebar, vb.tinggi)
//    println("Volume balokL $hasilVb")
//
//    val vk = volumeKerucut()
//    vk.r = 10.0
//    vk.tinggi = vb.tinggi
//    var hasilVk = vk.hasilVK(vk.r, vk.tinggi)
//    println("Volume kerucut: $hasilVk")


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