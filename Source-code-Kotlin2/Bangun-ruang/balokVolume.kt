open class balokVolume {
    var panjang:Double = 0.0
    var lebar:Double = 0.0
    var tinggi:Double = 0.0

    fun volumeBalok(paramPanjang:Double, paramTinggi:Double, paramLebar:Double):Double{
        panjang = paramPanjang
        tinggi = paramTinggi
        lebar = paramLebar
        return panjang*tinggi*lebar
    }
}