package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapterr.RecentlyAdapter
import com.example.lorentza.suround.adapter.TrendingAdapter
import com.example.lorentza.suround.model.Recently
import com.example.lorentza.suround.model.Trending

class HomeActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_home)

        val rvHome:RecyclerView = findViewById(R.id.rvHome)
        val trending = arrayListOf<Trending>(
            Trending("Kill bill", R.drawable.image14),
            Trending("Pretender", R.drawable.image26),
            Trending("Moonlight", R.drawable.image16),
            Trending("Matsuri", R.drawable.image25),
            Trending("Lorentza", R.drawable.image23),
            Trending("Arterius", R.drawable.image19)
        )
        val adapter = TrendingAdapter(trending)
        val linearHorizontal = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)

        rvHome.adapter = adapter
        rvHome.layoutManager = linearHorizontal

        val rvRecently:RecyclerView = findViewById(R.id.rvRecently)
        val recently = arrayListOf<Recently>(
            Recently("Single", R.drawable.image20),
            Recently("Actions", R.drawable.image21),
            Recently("Kindness?", R.drawable.image22),
            Recently("Evening", R.drawable.image23),
            Recently("Mistake", R.drawable.image24),
            Recently("Ending", R.drawable.image25),
        )
        val adapterr = RecentlyAdapter(recently)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        rvRecently.adapter = adapterr
        rvRecently.layoutManager = linearVertical

        val ibFavorite : ImageButton = findViewById(R.id.ibFavorite)
        ibFavorite.setOnClickListener {
            val intent = Intent(this, FavoriteActivity::class.java)
            startActivity(intent)
        }
    }
}