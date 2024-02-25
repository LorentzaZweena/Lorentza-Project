@file:JvmName("PersonKt")

class Person{
    var firstName:String =""
    var lastName:String=""
    var firstName2:String =""
    var lastName2:String=""
    var firstName3:String =""
    var lastName3:String=""
}

fun main(){
    var nama1 = Person()
    nama1.firstName ="Ariva"
    nama1.lastName ="Zweena"

    nama1.firstName2 ="Bill"
    nama1.lastName2 ="Gates"

    nama1.firstName3 ="Mark"
    nama1.lastName3 ="Zuckenberg"

    println("${nama1.firstName} ${nama1.lastName}")
    println("${nama1.firstName2} ${nama1.lastName2}")
    println("${nama1.firstName3} ${nama1.lastName3}")
}