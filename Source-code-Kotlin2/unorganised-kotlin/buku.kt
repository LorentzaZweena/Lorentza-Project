interface buku {
    val kodeBuku:String
    val judulBuku:String
    val tahun:Int
    val jumlahHalaman:Int
    val deadlinePinjam:Int
    val waktuPinjam:Int
    //    var denda:Int
//    var denda2:Int
    fun tampilkanDendaBuku():Unit
}

class sistemPerpus():buku{
    override val kodeBuku: String = "AIW1"
    override val judulBuku: String = "Alice in wonderland"
    override val tahun: Int = 2005
    override val jumlahHalaman: Int = 500
    override val deadlinePinjam: Int = 4
    override val waktuPinjam: Int = 6
    var denda2:Int = 0
    var denda:Int = waktuPinjam - deadlinePinjam


    override fun tampilkanDendaBuku() {
        if (denda<1){
            denda2 = 0
        }else{
            denda2 = denda * 2000
        }
        println("Kode Buku : $kodeBuku \nJudul buku : $judulBuku \nTahun : $tahun \nJumlah Halaman : $jumlahHalaman" +
                "\ndeadline pinjam : $deadlinePinjam \nWaktu Pinjam : $waktuPinjam \nDenda : $denda2")
    }
}

fun main(){
    var sistemPerpus=sistemPerpus()
    sistemPerpus.tampilkanDendaBuku()
}