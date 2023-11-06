package Pelicia

import Pelicia.Adapterrr.PeliciaPopularAdapter
import Pelicia.Lel.PremiumAdapter
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.VideoAtasAdapter
import com.example.lorentza.suround.adapterr.PeliciaCategoriesAdapter
import com.example.lorentza.suround.model.PeliciaCategories
import com.example.lorentza.suround.model.PeliciaPopular
import com.example.lorentza.suround.model.Premium
import com.example.lorentza.suround.model.VideoAtas

class DashboardActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_dashboard)


        // ----------------------- Declaration  --------------------------------- \\
        val rvDashBoardPelicia : RecyclerView = findViewById(R.id.rvDashboardPelicia)
        val rvDashBoardPelicia2 : RecyclerView = findViewById(R.id.rvDashboardPelicia2)
        val rvDashBoardPelicia3 : RecyclerView = findViewById(R.id.rvDashboardPelicia3)
        val rvDashBoardPelicia4 : RecyclerView = findViewById(R.id.rvDashboardPelicia4)
        // ----------------------- Declaration  --------------------------------- \\





        // ---------------------- video atas ------------------------------ \\
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
        // ---------------------- video atas ------------------------------ \\





        //------------------------- categories ------------------ \\
        val PeliciaCategories = arrayListOf<PeliciaCategories>(
            PeliciaCategories("CATEGORIES", R.drawable.image45),
            PeliciaCategories("TRENDING", R.drawable.image45),
            PeliciaCategories("BOX OFFICE", R.drawable.image45),
            PeliciaCategories("DISCOVER", R.drawable.image45)
        )

        val adapter2 = PeliciaCategoriesAdapter (PeliciaCategories)
        val linearHorizontal2 = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        rvDashBoardPelicia2.adapter = adapter2
        rvDashBoardPelicia2.layoutManager = linearHorizontal2
        //------------------------- categories ------------------ \\






        //------------------- popular --------------------- \\
        val PeliciaPopular = arrayListOf<PeliciaPopular>(
            PeliciaPopular(R.drawable.image46),
            PeliciaPopular(R.drawable.image47),
            PeliciaPopular(R.drawable.image48),
            PeliciaPopular(R.drawable.image49),
            PeliciaPopular(R.drawable.image50)
        )

        val adapter3 = PeliciaPopularAdapter (PeliciaPopular)
        val linearHorizontal3 = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        rvDashBoardPelicia3.adapter = adapter3
        rvDashBoardPelicia3.layoutManager = linearHorizontal3
        //------------------- popular --------------------- \\




        // ----------------------- Premium --------------------------------- \\
        val Premium = arrayListOf<Premium>(
            Premium(R.drawable.image52, "プログラマー"),
            Premium(R.drawable.image53, "大きなキノコ"),
            Premium(R.drawable.image54, "私の故郷"),
            Premium(R.drawable.image55, "私の故郷 2"),
            Premium(R.drawable.image56, "別の冒険")
        )

        val adapter4 = PremiumAdapter (Premium)
        val linearHorizontal4 = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        rvDashBoardPelicia4.adapter = adapter4
        rvDashBoardPelicia4.layoutManager = linearHorizontal4
        // ----------------------- Premium --------------------------------- \\
    }
}