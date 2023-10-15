package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.example.lorentza.R

class MehActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_meh)

        val btnSkip : Button = findViewById(R.id.btnSkip)
        val btnGetStarted : Button = findViewById(R.id.btnGetStarted)

        btnSkip.setOnClickListener {
            val intent = Intent(this, LoginActivity::class.java)
            startActivity(intent)
        }
        btnGetStarted.setOnClickListener {
            val intent2 = Intent(this, mehPart2Activity::class.java)
            startActivity(intent2)
        }
    }
}