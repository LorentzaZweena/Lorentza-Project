package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.ImageButton
import android.widget.ImageView
import android.widget.Toast
import com.example.lorentza.R

class TrendingActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_trending)

        val ibBackTrending : ImageButton = findViewById(R.id.ibBackTrending)
        val ibTrendingSuround : ImageButton = findViewById(R.id.ibTrendingSuround)
        val FavoriteSuround : ImageView = findViewById(R.id.FavoriteSuround)
        val ibPlay : ImageButton = findViewById(R.id.ibPlay)
        val ibPause : ImageView = findViewById(R.id.ibPause)

        ibBackTrending.setOnClickListener {
            val intent = Intent(this, HomeActivity::class.java)
            startActivity(intent)
        }

        ibTrendingSuround.setOnClickListener {
            if (FavoriteSuround.visibility == View.VISIBLE) {
                FavoriteSuround.visibility = View.INVISIBLE

                Toast.makeText(
                    this, "Removed from favorites", Toast.LENGTH_SHORT
                ).show()
            } else {
                FavoriteSuround.visibility = View.VISIBLE
                Toast.makeText(
                    this, "Added from favorites", Toast.LENGTH_SHORT
                ).show()
            }
        }

        ibPlay.setOnClickListener {
            if (ibPause.visibility == View.VISIBLE){
                ibPause.visibility == View.INVISIBLE
            } else {
                ibPause.visibility = View.VISIBLE
            }
        }
    }
}