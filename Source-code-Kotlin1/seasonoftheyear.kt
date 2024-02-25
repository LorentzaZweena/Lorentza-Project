fun main(){
    print("Enter number of month: ")
    var monthoftheyear:Int = readLine()!!.toInt()
    var month = when(monthoftheyear){
       in 1..3 -> println("Spring season")
        in 4..6 -> println("Summer season")
        in 7..8 -> println("Rainy season")
        in 9..10 -> println("Autumn season")
        in 11..12 -> println("Winter season")
       else -> println("Error")
    }
    println(month)
}