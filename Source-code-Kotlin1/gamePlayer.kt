class gamePlayer{
    var score:Int
    var playerName:String

    constructor(paramScore:Int, paramPlayerName:String) {
        score = paramScore
        playerName = paramPlayerName
    }
    fun changePlayerName(name: String) {
        playerName = name
        println("$playerName win with score $score")
    }
    fun changeScore(paramScore: Int) {
        score = paramScore
        println("$score is the highest score by $playerName")
    }
}
fun main(){
    var gamePlayer = gamePlayer(paramScore = 20, paramPlayerName = "paul")
    gamePlayer.changePlayerName("John")

    var gameScore = gamePlayer(paramScore = 50, paramPlayerName = "lorentza")
    gameScore.changeScore(50)
}

