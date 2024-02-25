class car(paramBrand:String, paramYear:Int=2020) {
    val brand:String = paramBrand
    val year:Int = paramYear

//        initializer block : fungsi pertama di eksekusi ketika object dibuat

    init {
        println("Object car dibuat")
    }
}

fun main(){
    var car1 = car(paramBrand = "Almaz", paramYear = 2022)
    println("Brand: ${car1.brand}")
    println("year: ${car1.year}")

    println()

    var car2 = car(paramBrand = "Toyota")
    println("Brand: ${car2.brand}")
    println("year: ${car2.year}")
}