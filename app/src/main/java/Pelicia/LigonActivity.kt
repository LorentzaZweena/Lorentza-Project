package Pelicia

import android.app.AlertDialog
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.ImageButton
import com.example.lorentza.R
import com.example.lorentza.suround.HomeActivity
import com.google.android.material.textfield.TextInputEditText

class LigonActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_ligon)

        val ibBackPutih : ImageButton = findViewById(R.id.ibBackPutih)
        var etUsername : EditText? = findViewById(R.id.etUsername)
        var etPassword : TextInputEditText? = findViewById(R.id.inputPassword)
        var btnLigon : Button = findViewById(R.id.btnLigon)
        val builder3: AlertDialog.Builder = AlertDialog.Builder(this@LigonActivity)
        val ibGoogle : ImageButton = findViewById(R.id.ibGooglePelicia)
        val ibInstagram : ImageButton = findViewById(R.id.ibInstagram)

        ibBackPutih.setOnClickListener {
            val intent7 = Intent(this, OrientationActivity::class.java)
            startActivity(intent7)
        }

        btnLigon.setOnClickListener {
            if (etUsername?.getText().toString().equals("Lorentza") && etPassword?.getText().toString().equals("123")){
                val intent8 = Intent(this, DashboardActivity::class.java)
                startActivity(intent8)
            } else {
                builder3.setTitle("Uh oh!")
                builder3.setMessage("Please fill the blank first!")
                builder3.setCancelable(true)

                val alertDialog: AlertDialog = builder3.create()
                alertDialog.show()
            }
        }
        ibGoogle.setOnClickListener {
            val intent9 = Intent(this, DashboardActivity::class.java)
            startActivity(intent9)
        }
        ibInstagram.setOnClickListener {
            val intent10 = Intent(this, DashboardActivity::class.java)
            startActivity(intent10)
        }
    }
}