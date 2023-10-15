package com.example.lorentza.suround

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.TrendingAdapter
import com.example.lorentza.suround.model.Trending

class HomeActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_home)

        val rvHome:RecyclerView = findViewById(R.id.rvHome)
        val trending = arrayListOf<Trending>(
            Trending("Kill bill", R.drawable.image14),
            Trending("Pretender", R.drawable.image15),
            Trending("Moonlight", R.drawable.image16),
            Trending("Matsuri", R.drawable.image17),
            Trending("Lorentza", R.drawable.image18),
            Trending("Arterius", R.drawable.image19)
        )
        val adapter = TrendingAdapter(trending)
        val linearHorizontal = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)

        rvHome.adapter = adapter
        rvHome.layoutManager = linearHorizontal
    }
}