package Pelicia

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.example.lorentza.R
import com.example.lorentza.suround.LoginActivity

class OrientationActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_orientation)

        val btnLogin : Button = findViewById(R.id.btnLogin)
        val btnSignIn : Button = findViewById(R.id.btnSignIn)

        btnLogin.setOnClickListener {
            val intent = Intent(this, LigonActivity::class.java)
            startActivity(intent)
        }
        btnSignIn.setOnClickListener {
            val intent = Intent(this, NewAccountActivity::class.java)
            startActivity(intent)
        }
    }
}