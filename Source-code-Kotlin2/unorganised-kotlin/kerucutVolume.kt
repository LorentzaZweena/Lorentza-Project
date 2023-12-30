class kerucutVolume {
    var jari:Double = 0.0
    var tinggi:Double = 0.0

    fun volumeKerucut(paramTinggi:Double, paramJari: Double):Double{
        jari = paramJari
        tinggi = paramTinggi
        return (0.33*Math.PI*jari*jari*tinggi)
    }
}