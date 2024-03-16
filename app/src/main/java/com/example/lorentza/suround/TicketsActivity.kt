package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.ImageButton
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapterr.TicketsAdapter
import com.example.lorentza.suround.model.Tickets

class TicketsActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_tickets)

        val rvTickets : RecyclerView = findViewById(R.id.rvTickets)
        val ibHome : ImageButton = findViewById(R.id.ibHome)
        val ibFavorite : ImageButton = findViewById(R.id.ibFavorite)
        val ibBackSuround2 : ImageButton = findViewById(R.id.ibBackSuround2)
        val ibProfile : ImageButton = findViewById(R.id.ibProfile)
        val btnTickets : Button = findViewById(R.id.btnTickets)

        val tickets = arrayListOf<Tickets>(
            Tickets(R.drawable.image138, "Sep 22 - 06.00 PM", "Chêne - \nTranquillité", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image139, "Sep 2 - 06.00 AM", "Église - \nSeopatera", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image140, "Sep 19 - 11.00 PM", "Conséquences - \nMalicieuSe", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image141, "Mar 7 - 10.00 AM", "Xaeplippeion - \nMatriarcat", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image142, "May 29 - 07.00 PM", "Ovravana - \nLumière", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image143, "Jan 4 - 11.38 AM", "Cachette - \nCoulés", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image144, "Apr 29- 03.42 PM", "Malédiction - \nRetraite", R.drawable.ic_favorite_whitesmoke),
            Tickets(R.drawable.image145, "Feb 19- 05.10 AM", "Pourparlers - \nD'Ahoy", R.drawable.ic_favorite_whitesmoke)
        )
        val adapterr = TicketsAdapter(tickets)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        rvTickets.adapter = adapterr
        rvTickets.layoutManager = linearVertical

        ibFavorite.setOnClickListener {
            val intent = Intent(this, FavoriteActivity::class.java)
            startActivity(intent)
        }

        ibHome.setOnClickListener {
            val intent3 = Intent(this, HomeActivity::class.java)
            startActivity(intent3)
        }

        ibBackSuround2.setOnClickListener {
            val intent6 = Intent(this, HomeActivity::class.java)
            startActivity(intent6)
        }

        ibProfile.setOnClickListener {
            val intent = Intent(this, SuroundProfileActivity::class.java)
            startActivity(intent)
        }

        btnTickets.setOnClickListener {
            val intent0 = Intent(this, MyticketsActivity::class.java)
            startActivity(intent0)
        }
    }
}