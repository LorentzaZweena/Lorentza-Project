package SehatQ

import SehatQ.AdapterJuga.NearbyHospital
import SehatQ.modelJuga.Nearby
import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapterr.HospitalAdapter
import com.example.lorentza.suround.model.Hospital

class HospitalActivity : AppCompatActivity() {
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_hospital)

        val rvHospital : RecyclerView = findViewById(R.id.rvHospital)
        val Hospital = arrayListOf<Hospital>(
            Hospital(R.drawable.image113, "RS PMI Bogor", "Jl. Raya Pajajaran No.80"),
            Hospital(R.drawable.image114, "RS Azra Bogor", "Jl. Raya Pajajaran No.219"),
            Hospital(R.drawable.image115, "RS Hermina Bogor", "Jalan Ring Road I Kav. 23"),
            Hospital(R.drawable.image116, "RS EMC Sentul", "Jl. MH. Thamrin No.Kav. 57"),
            Hospital(R.drawable.image117, "RSUD Kota Bogor", "Jl. DR. Sumeru No.120")
        )

        val adapter = HospitalAdapter(Hospital)
        val linearHorizontal = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)

        rvHospital.adapter = adapter
        rvHospital.layoutManager = linearHorizontal

        val rvNearby : RecyclerView = findViewById(R.id.rvNearby)
        val Nearby = arrayListOf<Nearby>(
            Nearby(R.drawable.image118, "RS Umum Teungku", "Tegallega, Kecamatan \nBogor"),
            Nearby(R.drawable.image119, "RS Sari Asih", "Bantarjati, Kec. Bogor \nUtara"),
            Nearby(R.drawable.image120, "RS Bethsaida", "Citaringgul, Kec. \nBabakan Madang"),
            Nearby(R.drawable.image121, "RS Tiara Sella", "Jl. Raya \nPajajaran No.80"),
            Nearby(R.drawable.image122, "RS Permata Ibu", "Jalan Ring Road I \nKav. 23")
        )

        val adapter2 = NearbyHospital(Nearby)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        rvNearby.adapter = adapter2
        rvNearby.layoutManager = linearVertical

        val ibHomeSehatQ : ImageButton = findViewById(R.id.ibHomeSehatQ)
        ibHomeSehatQ.setOnClickListener {
            val intent = Intent(this, DashActivity::class.java)
            startActivity(intent)
        }

        val ibChatSehatQ : ImageButton = findViewById(R.id.ibChatSehatQ)
        ibChatSehatQ.setOnClickListener {
            val intent = Intent(this, ChatActivity::class.java)
            startActivity(intent)
        }

        val ibShopSehatQ : ImageButton = findViewById(R.id.ibShopSehatQ)
        ibShopSehatQ.setOnClickListener {
            val intent = Intent(this, ShopActivity::class.java)
            startActivity(intent)
        }
    }
}