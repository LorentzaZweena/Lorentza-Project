package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import com.example.lorentza.R

class SuroundProfileActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_suround_profile)

        val ibFavorite : ImageButton = findViewById(R.id.ibFavorite)
        ibFavorite.setOnClickListener {
            val intent = Intent(this, FavoriteActivity::class.java)
            startActivity(intent)
        }

        val ibTicket : ImageButton = findViewById(R.id.ibTicket)
        ibTicket.setOnClickListener {
            val intent = Intent(this, TicketsActivity::class.java)
            startActivity(intent)
        }

        val ibProfile : ImageButton = findViewById(R.id.ibProfile)
        ibProfile.setOnClickListener {
            val intent = Intent(this, SuroundProfileActivity::class.java)
            startActivity(intent)
        }

        val ibHome : ImageButton = findViewById(R.id.ibHome)
        ibHome.setOnClickListener {
            val intent4 = Intent(this, HomeActivity::class.java)
            startActivity(intent4)
        }

        val ibBackSuroundProfile : ImageButton = findViewById(R.id.ibBackSuroundProfile)
        ibBackSuroundProfile.setOnClickListener {
            val intent9 = Intent(this, ibBackSuroundProfile::class.java)
            startActivity(intent9)
        }
    }
}