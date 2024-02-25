open class shape {
//    defaultnya
    open val corner:Int = -1
    fun draw(){
        println("line started")
    }
}

class rectangle:shape(){
    override val corner:Int=4
    val superShapeCorner:Int=super.corner
    fun drawRectangle(){
        super.draw()
    }
}

class circle:shape(){
//    replace untuk circle
    override val corner:Int=50
}

fun main(){
    val rectangle = rectangle()
    println("Rectangle corner : ${rectangle.corner}")

    val circle=circle()
    println("Circle: ${circle.corner}")

    println("Rectangle super corner: ${rectangle.superShapeCorner}")
    rectangle.drawRectangle()
}