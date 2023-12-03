package SehatQ

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.LinearLayout
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.BannerAdapter
import com.example.lorentza.suround.model.Banner

class DashActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_dash)

        val rvSehatQ : RecyclerView = findViewById(R.id.rvSehatQ)
        val Banner = arrayListOf<Banner>(
            Banner("Klinik Online", "Kami siap membantu \nanda", R.drawable.image69),
            Banner("Hidup Sehat", "07.00 - 21.00", R.drawable.image70),
            Banner("Diskon 30%", "s/d 9 des 2067", R.drawable.image71),
            Banner("SehatQ", "Pilihlah kesehatan, \npilihlah kebahagiaan.", R.drawable.image69)
        )

        val adapter = BannerAdapter(Banner)
        val linearHorizontal = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)

        rvSehatQ.adapter = adapter
        rvSehatQ.layoutManager = linearHorizontal
    }
}