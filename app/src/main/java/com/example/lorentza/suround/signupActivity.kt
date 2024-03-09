package com.example.lorentza.suround

import android.app.AlertDialog
import android.content.DialogInterface
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import com.example.lorentza.R

class signupActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_signup)

        var inputEmail: EditText? = findViewById(R.id.inputEmail)
        var inputPassword: EditText? = findViewById(R.id.inputPassword)
        var btnSignUp2: Button = findViewById(R.id.btnSignUp2)
        var btnGuestMode : Button = findViewById(R.id.btnGuestMode)
        val builder2: AlertDialog.Builder = AlertDialog.Builder(this@signupActivity)
        val builder: AlertDialog.Builder = AlertDialog.Builder(this@signupActivity)

        btnSignUp2.setOnClickListener {
            if (inputPassword?.getText().toString().equals("meong3x") && inputEmail?.getText().toString().equals("Lorentza@gmail.com")
            ) {
                builder.setTitle("Woohoo!")
                builder.setMessage("Enjoy your music!")
                builder.setCancelable(true)

                val alertDialog: AlertDialog = builder.create()
                alertDialog.show()

                val intent3 = Intent(this, InterestActivity::class.java)
                startActivity(intent3)

            } else if (inputPassword?.getText().toString().equals("meong3x") && inputEmail?.getText().toString().equals(""))
            {
                builder.setTitle("Uh oh!")
                builder.setMessage("Email can't be empty!")
                builder.setCancelable(true)

                val alertDialog: AlertDialog = builder.create()
                alertDialog.show()
            } else if (inputPassword?.getText().toString().equals("") && inputEmail?.getText().toString().equals("lorentza@gmail.com")){
                builder.setTitle("Uh oh!")
                builder.setMessage("Password can't be empty!")
                builder.setCancelable(true)

                val alertDialog: AlertDialog = builder.create()
                alertDialog.show()
            }else if (inputPassword?.getText().toString().equals("") && inputEmail?.getText().toString().equals("")) {
                builder.setTitle("Uh oh!")
                builder.setMessage("Please fill the blank first!")
                builder.setCancelable(true)

                val alertDialog: AlertDialog = builder.create()
                alertDialog.show()
            }else{
                builder.setTitle("Try again!")
                builder.setMessage("Incorrect email or password!")
                builder.setCancelable(true)

                val alertDialog: AlertDialog = builder.create()
                alertDialog.show()
            }
        }
        btnGuestMode.setOnClickListener {
            builder2.setTitle("Warning!")
            builder2.setMessage("Your history won't be save, are you sure about this?")
            builder2.setCancelable(false)

            builder2.setPositiveButton("Yeah!", DialogInterface.OnClickListener { dialog, which ->
                val intent3 = Intent(this, InterestActivity::class.java)
                startActivity(intent3)
            })
            builder2.setNegativeButton("Nevermind", DialogInterface.OnClickListener { dialog, which ->
                val alertDialog2 : AlertDialog = builder.create()
                alertDialog2.show()
            })
        }
    }
}