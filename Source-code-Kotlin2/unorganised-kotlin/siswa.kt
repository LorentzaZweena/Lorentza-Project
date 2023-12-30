class siswa {
    var nama:String=""
    var kelas:String=""
    var hobi:String=""
    var alamat:String="`"

    fun biodata(paramNama:String, paramKelas: String, paramHobi: String, paramAlamat: String):String{
        nama=paramNama
        kelas=paramKelas
        hobi=paramHobi
        alamat=paramAlamat
        return nama+kelas+hobi+alamat
    }
}