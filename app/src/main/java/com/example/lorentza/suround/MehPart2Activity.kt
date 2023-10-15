package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.example.lorentza.R

class mehPart2Activity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_meh_part2)

        val btnSkipPart2 : Button = findViewById(R.id.btnSkipPart2)
        val btnGetStartedPart2 : Button = findViewById(R.id.btnGetStartedPart2)

        btnSkipPart2.setOnClickListener {
            val intent = Intent(this, LoginActivity::class.java)
            startActivity(intent)
        }
        btnGetStartedPart2.setOnClickListener {
            val intent2 = Intent(this, LoginActivity::class.java)
            startActivity(intent2)
        }
    }
}