package com.example.lorentza.suround

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.example.lorentza.R

class LoginActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_login)

        val btnSignUp: Button = findViewById(R.id.btnSignUp)
        val btnApple : Button = findViewById(R.id.btnApple)
        val btnGoogle : Button = findViewById(R.id.btnGoogle)

        btnSignUp.setOnClickListener {
            val intent = Intent(this, signupActivity::class.java)
            startActivity(intent)
        }
        btnApple.setOnClickListener {
            val intent2 = Intent(this, InterestActivity::class.java)
            startActivity(intent2)
        }
        btnGoogle.setOnClickListener {
            val intent = Intent(this, InterestActivity::class.java)
            startActivity(intent)
        }
    }
}