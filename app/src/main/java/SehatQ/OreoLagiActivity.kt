package SehatQ

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import com.example.lorentza.R

class OreoLagiActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_oreo_lagi)

        val btnNext : Button = findViewById(R.id.btnNext)

        btnNext.setOnClickListener {
            val intent = Intent(this, OreoTerakhirActivity::class.java)
            startActivity(intent)
        }
    }
}