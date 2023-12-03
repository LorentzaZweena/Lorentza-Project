package SehatQ

import android.annotation.SuppressLint
import android.content.DialogInterface
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.ImageButton
import android.widget.Toast
import androidx.appcompat.app.AlertDialog
import com.example.lorentza.R
import com.google.android.material.textfield.TextInputEditText

class LogActivity : AppCompatActivity() {
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_log)

        //deklarasi
        var etLogin : EditText? = findViewById(R.id.etLogin)
        var inputPasswordSehatQ : EditText? = findViewById(R.id.inputPasswordSehatQ)
        var btnLoginSehatQ : Button = findViewById(R.id.btnLoginSehatQ)
        var ibGoogle : ImageButton = findViewById(R.id.ibGoogle)
        var ibApple : ImageButton = findViewById(R.id.ibApple)
        val builder : AlertDialog.Builder = AlertDialog.Builder(this@LogActivity)

        btnLoginSehatQ.setOnClickListener {
            if (etLogin?.getText().toString().equals("zweena@gmail.com") && inputPasswordSehatQ?.getText().toString().equals("123")){

                //Kalo email dan password keisi trus bener

                val intent9 = Intent(this, DashActivity::class.java)
                startActivity(intent9)
            } else if (etLogin?.getText().toString().equals("zweena@gmail.com") && inputPasswordSehatQ?.getText().toString().equals("")){
                builder.setTitle("Perhatian")
                builder.setMessage("Kata sandi tidak boleh kosong!")
                builder.setCancelable(true)

                //Kalo Passwordnya kosong
                val alertDialog : AlertDialog = builder.create()
                alertDialog.show()

            } else if (etLogin?.getText().toString().equals("") && inputPasswordSehatQ?.getText().toString().equals("123")){
                builder.setTitle("Perhatian")
                builder.setMessage("Email tidak boleh kosong!")
                builder.setCancelable(true)

                //Kalo Email nya kosong

                val alertDialog : AlertDialog = builder.create()
                alertDialog.show()
            } else if (etLogin?.getText().toString().equals("") && inputPasswordSehatQ?.getText().toString().equals("")){
                builder.setTitle("Perhatian")
                builder.setMessage("Isi bagian yang kosong terlebih dahulu")
                builder.setCancelable(true)

                //Kalo both kosong

                val alertDialog : AlertDialog = builder.create()
                alertDialog.show()
            }
        }

        ibGoogle.setOnClickListener {
            val intent45 = Intent(this, DashActivity::class.java)
            startActivity(intent45)
        }
        ibApple.setOnClickListener {
            val intent46 = Intent(this, DashActivity::class.java)
            startActivity(intent46)
        }
    }
}