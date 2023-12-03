package SehatQ

import android.annotation.SuppressLint
import android.content.DialogInterface
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
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
        var kosong : String
        val builder : AlertDialog.Builder = AlertDialog.Builder(this@LogActivity)

        btnLoginSehatQ.setOnClickListener {
            if (etLogin?.getText().toString().equals("zweena@gmail.com") && inputPasswordSehatQ?.getText().toString().equals("123")){
                builder.setTitle("Selamat datang!")
                builder.setMessage("Anda berhasil masuk")
                builder.setCancelable(true)

                                                                                    //Kalo email dan password keisi trus bener
                val alertDialog : AlertDialog = builder.create()
                alertDialog.show()
//              //Toast.LENGTH_LONG

                val intent9 = Intent(this, OreoLagiActivity::class.java)
                startActivity(intent9)
            } else {
                builder.setTitle("Perhatian")
                builder.setMessage("Mohon cek kembali!")
                builder.setCancelable(false)
                builder.setPositiveButton(
                    "Oke", DialogInterface.OnClickListener { dialog, which ->
                        kosong = ""
                        etLogin?.setText("")
                        inputPasswordSehatQ?.setText("")
                    }
                )
                builder.setNegativeButton(
                    "Batal", DialogInterface.OnClickListener { dialog, which ->
                    }
                )
            }
        }
    }
}