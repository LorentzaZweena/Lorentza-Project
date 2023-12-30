//class segitiga merupakan class child
open class Segitiga{

//    atribut / variable
    var alas:Double = 0.0
    var tinggi:Double = 0.0

    var sisiA:Double = 0.0
    var sisiB:Double = 0.0
    var sisiC:Double = 0.0

    //    fungsi return type
    fun luasSegitiga(paramAlas:Double, paramTinggi:Double):Double{
        alas = paramAlas
        tinggi = paramTinggi
        return alas*tinggi
    }

    fun kelilingSegitiga(a:Double, b:Double, c:Double):Double{
        sisiA = a
        sisiB = b
        sisiC = c
        return sisiA+sisiB+sisiC
    }
}