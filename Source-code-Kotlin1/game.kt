class Game(play:Boolean?, score:Int, playerName:String){

    constructor(paramScore:Int, paramPlayerName:String):

            this (play = null, paramScore, paramPlayerName){
                println("Score: $paramScore")
            println("player name: $paramPlayerName")

            }
}

fun main(){
//    memanggil object game
    val game1 = Game(paramScore = 20, paramPlayerName = "Zweena")
}