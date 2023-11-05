package Pelicia

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.VideoAtasAdapter
import com.example.lorentza.suround.model.VideoAtas

class DashboardActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_dashboard)

        val rvDashBoardPelicia : RecyclerView = findViewById(R.id.rvDashboardPelicia)



        val VideoAtas = arrayListOf<VideoAtas>(
            VideoAtas("The forest", R.drawable.image39),
            VideoAtas("Weird painting", R.drawable.image40),
            VideoAtas("Abandoned Town", R.drawable.image41),
            VideoAtas("I'm back : Movie", R.drawable.image42),
            VideoAtas("Tokyo war : Season 3", R.drawable.image43),
            VideoAtas("Fairy town : Magic tree", R.drawable.image44)
        )

        val adapter = VideoAtasAdapter (VideoAtas)
        val linearHorizontal = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        rvDashBoardPelicia.adapter = adapter
        rvDashBoardPelicia.layoutManager = linearHorizontal
    }
}