class PersonName(firstName:String, middleName:String, lastName:String) {
    val first:String = firstName
    val middle:String = middleName
    val last:String = lastName

//        initializer block : fungsi pertama di eksekusi ketika object dibuat

    init {
        print("Nama lengkap: ")
    }
}

fun main(){
    var namwa = PersonName(firstName = "Ariva", middleName = "Afrida", lastName = "Zweena")
//    println("first name: ${namwa.first}")
//    println("Middle name: ${namwa.middle}")
//    println("Last name: ${namwa.last}")
//    println()
    println("${namwa.first} ${namwa.middle} ${namwa.last}")

    var namwa2 = PersonName(firstName = "Lorentza", middleName = "Arterius", lastName = "Coulombia")
    println("${namwa2.first} ${namwa2.middle} ${namwa2.last}")
}