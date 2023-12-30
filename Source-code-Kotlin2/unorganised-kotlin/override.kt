//open class biodata(val name:String) {
//    open fun murid(name: String){
//        println("Nama: $name, my name is ${this.name}")
//    }
//}
//
//class Manager(name: String):Employee(name){
//    override fun sayHello(name: String){
//        println("Hello Manager $name, my name is ${this.name}")
//    }
//}
//class vicePresident(name: String) :Employee(name){
//    override fun sayHello(name: String){
//        println("Hello Vice President $name, my name is ${this.name}")
//    }
//}
//
//fun main(){
//    val panggilManager=Manager(name = "Bill gates")
//    panggilManager.sayHello(name = "Elon musk")
//
//    val panggilPresident=vicePresident(name = "Mark Zuckenberg")
//    panggilPresident.sayHello(name = "Steve Jobs")
//}