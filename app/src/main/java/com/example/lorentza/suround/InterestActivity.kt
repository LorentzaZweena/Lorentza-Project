package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.ImageButton
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.CategoriesAdapter
import com.example.lorentza.suround.model.Categories

class InterestActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_interest)

        val category = arrayListOf<Categories>(
            Categories("Rock", R.drawable.image9),
            Categories("Classic", R.drawable.image10),
            Categories("Hip hop / rock", R.drawable.image11),
            Categories("World music",R.drawable.image12)
        )
        val adapter = CategoriesAdapter(category)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        var rvCategories : RecyclerView = findViewById(R.id.rvCategories)
        rvCategories.adapter = adapter
        rvCategories.layoutManager = linearVertical

        val btnFinish : Button = findViewById(R.id.btnFinish)
        btnFinish.setOnClickListener {
            val intent4 = Intent(this, HomeActivity::class.java)
            startActivity(intent4)
        }
    }
//    val ibBack2 : ImageButton = findViewById(R.id.ibBack2)

}