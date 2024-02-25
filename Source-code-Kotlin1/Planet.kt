fun main(){
    var planet = arrayOf("Merkurius", "Venus", "Bumi", "Mars", "Jupiter", "Saturnus", "Uranus", "Neptunus")

    println("Planet: ${planet[3]}, ${planet[6]}")
    var sizeplanet:Int = planet.size //mencari total data array
    println("Total data: ${sizeplanet}")

    if ("Pluto" in planet){ //ngecek apakah data yg di mau ada
        println("ada")
    } else{
        println("tidak ada")
    }

//    var planet2 = arrayOf("Merkurius", "Venus", "Bumi", "Mars")
    println("planet dalam: ")
    for (p in 0 until 4 ){
        println(planet[p] + " ")
    }
    println()
    println("Planet luar: ")
    for (p in 4 until 9 ){
        println(planet[p] + " ")
    }

//    var planet3 = arrayOf("Jupiter", "Saturnus", "Uranus", "Neptunus")
//    for (pe in planet){
//        println("Planet luar : ${planet[4]}, ${planet[5]}, ${planet[6]}, ${planet[7]},")
//    }
}