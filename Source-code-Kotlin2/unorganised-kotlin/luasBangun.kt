//class parent
class luasBangun:Segitiga(){
}

fun main(){
//    panggil object
    var luasBangunSegitiga = luasBangun()
    luasBangunSegitiga.alas = 4.5
    luasBangunSegitiga.tinggi = 6.0

    luasBangunSegitiga.sisiA = luasBangunSegitiga.alas
    luasBangunSegitiga.sisiB = luasBangunSegitiga.tinggi
    luasBangunSegitiga.sisiC = 10.0

    print("Luas: ")
    print(luasBangunSegitiga.luasSegitiga(luasBangunSegitiga.alas, luasBangunSegitiga.tinggi))
    println()
    print("Keliling: ")
    print(luasBangunSegitiga.kelilingSegitiga(luasBangunSegitiga.sisiA, luasBangunSegitiga.sisiB, luasBangunSegitiga.sisiC))


//    var kelilingSegitiga = luasBangun()
//    kelilingSegitiga.sisiA = 5.6
//    kelilingSegitiga.sisiB = 3.4
//    kelilingSegitiga.sisiC = 6.8

//    println("Keliling: ")
//    println(luasBangunSegitiga)
}