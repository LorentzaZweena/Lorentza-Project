package SehatQ

import SehatQ.AdapterJuga.ArtikelAdapter
import SehatQ.AdapterJuga.ArtikelJugaAdapter
import SehatQ.modelJuga.Artikel
import SehatQ.modelJuga.ArtikelJuga
import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R

class ArticleActivity : AppCompatActivity() {
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_article)

        val rvArtikel : RecyclerView = findViewById(R.id.rvArtikel)
        val Artikel = arrayListOf<Artikel>(
            Artikel(R.drawable.image125, "Penyebab dan solusi \nmasalah tidur", "Masalah tidur"),
            Artikel(R.drawable.image126, "Tips dan trik untuk \norangtua mendidik anak", "Parenting"),
            Artikel(R.drawable.image127, "Mengapa ibu hamil \nmudah marah?", "Kehamilan"),
            Artikel(R.drawable.image128, "Macam - macam \npenyakit dalam", "Penyakit dalam"),
            Artikel(R.drawable.image129, "Lakukan 7 hal ini untuk \nlebih percaya diri", "Kecantikan")
        )

        val adapter = ArtikelAdapter(Artikel)
        val linearHorizontal = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        rvArtikel.adapter = adapter
        rvArtikel.layoutManager = linearHorizontal

        val rvArtikelRekomendasi : RecyclerView = findViewById(R.id.rvArtikelRekomendasi)
        val ArtikelJuga = arrayListOf<ArtikelJuga>(
            ArtikelJuga("Mental", "Tanda - tanda kesehatan \nmental tidak sehat", R.drawable.image130),
            ArtikelJuga("Lansia", "Tips pola hidup sehat untuk \nlansia", R.drawable.image131),
            ArtikelJuga("Kesehatan", "10 langkah sederhana \nmemulai hidup sehat", R.drawable.image132),
            ArtikelJuga("Kecantikan", "Cara merawat kulit dengan \nsehat", R.drawable.image133),
            ArtikelJuga("Masalah tidur", "Hal - hal yang dapat \nmenjadi susah tidur", R.drawable.image134),
            ArtikelJuga("Penyakit dalam", "Beberapa penyakit dalam \nyang harus di ketahui", R.drawable.image135)
        )

        val adapter2 = ArtikelJugaAdapter(ArtikelJuga)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)
        rvArtikelRekomendasi.adapter = adapter2
        rvArtikelRekomendasi.layoutManager = linearVertical

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

        val ibHospitalSehatQ : ImageButton = findViewById(R.id.ibHospitalSehatQ)
        ibHospitalSehatQ.setOnClickListener {
            val intent = Intent(this, HospitalActivity::class.java)
            startActivity(intent)
        }

        val ibHomeSehatQ : ImageButton = findViewById(R.id.ibHomeSehatQ)
        ibHomeSehatQ.setOnClickListener {
            val intent = Intent(this, DashActivity::class.java)
            startActivity(intent)
        }

        val ibProfileSehatQ : ImageButton = findViewById(R.id.ibProfileSehatQ)
        ibProfileSehatQ.setOnClickListener {
            val intent = Intent(this, ProfileSehatQActivity::class.java)
            startActivity(intent)
        }
    }
}