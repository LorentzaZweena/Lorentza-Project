class computer (val brand:String)
class laptop(val brand: String)

fun main(){
    var computer=computer(brand = "ROG")
    println(computer.toString())
    printObject(computer)

//    println()

    var laptop=laptop(brand = "Asus")
//    println(laptop.toString())
    printObject(laptop)
}

fun printObject(any: Any){
    when(any){
        is laptop-> println("Laptop with brand ${any.brand}")
        is computer-> println("Computer with brand: ${any.brand}")
        else-> println(any)
    }
}