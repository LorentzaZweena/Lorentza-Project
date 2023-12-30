package com.example.myapplication

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        val titleHello:TextView = findViewById(R.id.titleHello)
        val labelNama:TextView = findViewById(R.id.labelNama)
        val inputNama:EditText = findViewById(R.id.inputNama)
        val labelKelas:TextView = findViewById(R.id.labelKelas)
        val inputKelas:EditText = findViewById(R.id.inputKelas)
        val btnSubmit:Button = findViewById(R.id.btnSubmit)

//        untuk mengisi nilai textview
        titleHello.text = "Form biodata"

//        untuk notification
        btnSubmit.setOnClickListener {
            Toast.makeText(this,
                "Your name is:  ${inputNama.text}",
                Toast.LENGTH_SHORT
                ).show()
        }
    }
}