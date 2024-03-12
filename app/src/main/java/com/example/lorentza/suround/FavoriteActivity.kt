package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import com.example.lorentza.R

class FavoriteActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_favorite)

        val ibBackSuround : ImageButton = findViewById(R.id.ibBackSuround)
        val ibHome : ImageButton = findViewById(R.id.ibHome)
        val ibTicket : ImageButton = findViewById(R.id.ibTicket)
        val ibProfile : ImageButton = findViewById(R.id.ibProfile)

        ibBackSuround.setOnClickListener {
            val intent = Intent(this, HomeActivity::class.java)
            startActivity(intent)
        }

        ibHome.setOnClickListener {
            val intent2 = Intent(this, HomeActivity::class.java)
            startActivity(intent2)
        }

        ibTicket.setOnClickListener {
            val intent = Intent(this, TicketsActivity::class.java)
            startActivity(intent)
        }

        ibProfile.setOnClickListener {
            val intent = Intent(this, SuroundProfileActivity::class.java)
            startActivity(intent)
        }
    }
}