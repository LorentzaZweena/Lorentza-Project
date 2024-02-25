fun main(){
    print("Name: ")
    var nama:String = readLine()!!.toString()

    print("Tinggi: ")
    var tinggi:Float = readLine()!!.toFloat()

    var tinggi2 = (tinggi/100)
    println("Tinggi di rumus: ${tinggi2}")

    print("Berat badan: ")
    var berat:Float = readLine()!!.toFloat()

    var BMI = berat/(tinggi2*tinggi2)

    var hasil = when(BMI.toInt()){
        in 1..18 -> println("Underweight")
        in 19..25 -> println("Normal")
        in 25..30 -> println("Overweight")
       else ->"obesitas"
    }
    println("Hasil BMI : ${hasil}")
}