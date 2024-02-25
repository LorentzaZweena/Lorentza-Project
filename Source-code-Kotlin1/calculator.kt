import kotlin.math.sqrt

fun perkalian(angka1: Int, angka2: Int) :Int{
    return angka1*angka2
}

fun pemjumlahan(angka1: Int, angka2: Int) :Int{
    return angka1+angka2
}

fun pengurangan(angka1:Int, angka2: Int) :Int{
    return angka1-angka2
}

fun pembagian(angka1: Int, angka2: Int) :Int{
    return angka1/angka2
}

fun pangkat2(angka1:Int) :Int{
    return angka1*angka1
}

fun akar(angka1:Int) :Double{
    return sqrt(angka1.toDouble())
}

fun main(){
    print("input angka1: ")
    var angka1:Int = readLine()!!.toInt()

    print("Input angka2: ")
    var angka2:Int = readLine()!!.toInt()

    var resultPerkalian:Int = perkalian(angka1, angka2)
    println("Jumlah angka1 * angka2 adalah: $resultPerkalian")

    var resultPemjumlahan:Int = pemjumlahan(angka1, angka2)
    println("Jumlah angka1 + angka2 adalah: $resultPemjumlahan")

    var resultPengurangan:Int = pengurangan(angka1, angka2)
    println("Jumlah angka1 - angka2 adalah: $resultPengurangan")

    var resultPembagian:Int = pembagian(angka1, angka2)
    println("Jumlah angka1 / angka2 adalah: $resultPembagian")

    var resultPangkat2:Int = pangkat2(angka1)
    println("Jumlah pangkat adalah: $resultPangkat2")

    var resultAkar:Double = akar(angka1)
    println("Jumlah akar adalah: $resultAkar")
}

