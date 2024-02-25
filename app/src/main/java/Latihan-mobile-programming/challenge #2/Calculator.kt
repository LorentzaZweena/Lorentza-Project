package com.example.belajarandroidactivity

import android.annotation.SuppressLint
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import com.example.myapplication.R

class Calculator : AppCompatActivity() {
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_calculator)
        setContentView(com.example.myapplication.R.layout.activity_calculator)

        var hasil:TextView = findViewById(com.example.myapplication.R.id.hasil)
        var input1:EditText = findViewById(com.example.myapplication.R.id.inputAngka1)
        var input2:EditText = findViewById(com.example.myapplication.R.id.inputAngka2)
        val tambah: Button = findViewById(com.example.myapplication.R.id.tambah)
        val min: Button = findViewById(com.example.myapplication.R.id.min)
        val persen: Button = findViewById(com.example.myapplication.R.id.persen)
        val kali: Button = findViewById(com.example.myapplication.R.id.kali)
        val bagi: Button = findViewById(com.example.myapplication.R.id.bagi)
        val clear:Button = findViewById(com.example.myapplication.R.id.clear)

        hasil.text = "0"
        println(hasil.text)

        Log.d("Number", "Hasilnya:  ${hasil.text}")
        tambah.setOnClickListener {

            var angka1:Int =input1.text.toString().toInt()
            var angka2:Int =input2.text.toString().toInt()
            var rumus:Int = angka2 + angka1
            hasil.text = rumus.toString()
        }
        min.setOnClickListener {

            var angka1:Int =input1.text.toString().toInt()
            var angka2:Int =input2.text.toString().toInt()
            var rumus:Int = angka1 - angka2
            hasil.text = rumus.toString()
        }
        persen.setOnClickListener {

            var angka1:Float =input1.text.toString().toFloat()
            var angka2:Float =input2.text.toString().toFloat()
            var rumus:Float= angka1 % angka2
            hasil.text = rumus.toString()
        }
        kali.setOnClickListener {

            var angka1:Int =input1.text.toString().toInt()
            var angka2:Int =input2.text.toString().toInt()
            var rumus:Int = angka2 * angka1
            hasil.text = rumus.toString()
        }
        bagi.setOnClickListener {

            var angka1:Float =input1.text.toString().toFloat()
            var angka2:Float =input2.text.toString().toFloat()
            var rumus:Float= angka1 / angka2
            hasil.text = rumus.toString()
        }
        clear.setOnClickListener {
            var cleardulu:Int =hasil.text.toString().toInt()
            hasil.text = "0"
        }
    }
}