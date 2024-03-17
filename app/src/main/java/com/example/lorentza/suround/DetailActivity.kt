package com.example.lorentza.suround

import android.annotation.SuppressLint
import android.content.Intent
import android.os.Bundle
import android.widget.Button
import android.widget.ImageButton
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.example.lorentza.R

class DetailActivity : AppCompatActivity() {
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_detail)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }
        val ibHome : ImageButton = findViewById(R.id.ibHome)
        val ibFavorite : ImageButton = findViewById(R.id.ibFavorite)
        val ibBackSuround2 : ImageButton = findViewById(R.id.ibBackSuround2)
        val ibProfile : ImageButton = findViewById(R.id.ibProfile)
        val btnTickets : Button = findViewById(R.id.btnTickets)

        ibFavorite.setOnClickListener {
            val intent = Intent(this, FavoriteActivity::class.java)
            startActivity(intent)
        }

        ibHome.setOnClickListener {
            val intent3 = Intent(this, HomeActivity::class.java)
            startActivity(intent3)
        }

        ibBackSuround2.setOnClickListener {
            val intent6 = Intent(this, MyticketsActivity::class.java)
            startActivity(intent6)
        }

        ibProfile.setOnClickListener {
            val intent = Intent(this, SuroundProfileActivity::class.java)
            startActivity(intent)
        }

        btnTickets.setOnClickListener {
                val intent0 = Intent(this, TicketsActivity::class.java)
            startActivity(intent0)
        }
    }
}