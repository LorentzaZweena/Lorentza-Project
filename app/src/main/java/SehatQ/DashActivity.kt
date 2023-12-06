package SehatQ

import Pelicia.Adapterrr.RekomendasiDokterAdapter
import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import android.widget.LinearLayout
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.BannerAdapter
import com.example.lorentza.suround.adapterr.SpecialistAdapter
import com.example.lorentza.suround.model.Banner
import com.example.lorentza.suround.model.RekomendasiDokter
import com.example.lorentza.suround.model.Specialist

class DashActivity : AppCompatActivity() {
    @SuppressLint("MissingInflatedId", "ResourceType")
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

        val rvSpecialist : RecyclerView = findViewById(R.id.rvSpecialist)
        val Specialist = arrayListOf<Specialist>(
            Specialist(R.drawable.image73),
            Specialist(R.drawable.image74),
            Specialist(R.drawable.image75),
            Specialist(R.drawable.image78),
            Specialist(R.drawable.image79),
            Specialist(R.drawable.image80)
        )

        val adapter2 = SpecialistAdapter(Specialist)
        val linearHorizontal2 = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL ,false)

        rvSpecialist.adapter = adapter2
        rvSpecialist.layoutManager = linearHorizontal2

        val rvRekomendasiDokter : RecyclerView = findViewById(R.id.rvRekomendasiDokter)
        val RekomendasiDokter = arrayListOf<RekomendasiDokter>(
            RekomendasiDokter(R.drawable.image81, "Dr. Isanamikô", "Kesehatan lansia", "Lihat Profile"),
            RekomendasiDokter(R.drawable.image82, "Dr. Moriarôzi", "Masalah tidur", "Lihat Profile"),
            RekomendasiDokter(R.drawable.image83, "Dr. Patisutatu", "Anak dan parenting", "Lihat Profile"),
            RekomendasiDokter(R.drawable.image84, "Dr. Itumï", "Penyakit dalam", "Lihat Profile")
        )

        val adapter3 = RekomendasiDokterAdapter(RekomendasiDokter)
        val linearHorizontal3 = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        rvRekomendasiDokter.adapter = adapter3
        rvRekomendasiDokter.layoutManager = linearHorizontal3

        val ibChatSehatQ : ImageButton = findViewById(R.id.ibChatSehatQ)

        ibChatSehatQ.setOnClickListener {
            val intent = Intent(this, ChatActivity::class.java)
            startActivity(intent)
        }
    }
}
