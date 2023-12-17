package SehatQ

import Pelicia.LigonActivity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.example.lorentza.R

class OreoActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_oreo)

        val btnNext : Button = findViewById(R.id.btnNext)

        btnNext.setOnClickListener {
            val intent = Intent(this, OreoLagiActivity::class.java)
            startActivity(intent)
        }
    }
}