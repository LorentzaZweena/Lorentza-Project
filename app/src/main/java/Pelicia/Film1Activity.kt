package Pelicia

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import com.example.lorentza.R
import com.example.lorentza.suround.HomeActivity

class Film1Activity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_film1)

        val ibBackPelicia : ImageButton = findViewById(R.id.ibBackPelicia)

        ibBackPelicia.setOnClickListener {
            val intent = Intent(this, DashboardActivity::class.java)
            startActivity(intent)
        }
    }
}