class gameSederhana{
    val playerName:String
    var score:Int = 0
    var opsi1:String=""
    var opsi2 = listOf("B", "G", "K")
    var status:String=""

    constructor(paramPlayerName:String){
        playerName = paramPlayerName
    }
    fun incrementScore(){
        score+=10
        println("Score: $score")
    }
    fun decreamentScore(){
        score-=10
        println("Score: $score")
    }
    fun gameStart(){
//         game akan jalan terus ketika dimulai
        while (true){
            print("Apakah Anda ingin bermain (Y/N): ")
            var start:String = readLine()!!.toString()
            when(start){
                "Y"->suit()
                else->break
            }
        }
    }
    fun suit(){
        print("Masukkan pilihan anda (B/G/K): ")
        opsi1 = readLine().toString()
        var computerOpsi = opsi2.shuffled()[0]
        println("Computer memilih: $computerOpsi")
        when(opsi1){

//            kondisi pertama
            "B"->when(computerOpsi){
                "G"->{
                    status="win"
                    incrementScore()
                }
                "B"->{
                    status="draw"
                }
                "K"->{
                    status="lose"
                    decreamentScore()
                }
            }

//            kondisi kedua
            "G"->when(computerOpsi){
                "G"->{
                    status="draw"
                }
                "B"->{
                    status="lose"
                    decreamentScore()
                }
                "K"->{
                    status="win"
                    incrementScore()
                }
            }

//            kondisi ketiga
            "K"->when(computerOpsi){
                "G"->{
                    status="lose"
                    decreamentScore()
                }
                "B"->{
                    status="win"
                    incrementScore()
                }
                "K"->{
                    status="draw"
                }
            }
        }
        println("Status: $status")
    }
}

fun main(){
    println("Masukan nama anda: ")
    var nama:String = readLine()!!.toString()
    var gameSederhana=gameSederhana(nama)
    gameSederhana.gameStart()
}