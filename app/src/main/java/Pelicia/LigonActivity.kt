package Pelicia

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.ImageButton
import com.example.lorentza.R
import com.example.lorentza.suround.HomeActivity

class LigonActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_ligon)

        val ibBackPutih : ImageButton = findViewById(R.id.ibBackPutih)

        ibBackPutih.setOnClickListener {
            val intent7 = Intent(this, OrientationActivity::class.java)
            startActivity(intent7)
        }
    }
}