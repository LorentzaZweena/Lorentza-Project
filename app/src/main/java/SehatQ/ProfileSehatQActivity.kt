package SehatQ

import android.annotation.SuppressLint
import android.content.Intent
import android.graphics.BlurMaskFilter.Blur
import android.os.Bundle
import android.widget.ImageButton
import android.widget.ImageView
import androidx.appcompat.app.AppCompatActivity
import com.example.lorentza.R

class ProfileSehatQActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_profile_sehat_qactivity)

        val ibBackSehatQ: ImageButton = findViewById(R.id.ibBackSehatQ)

        ibBackSehatQ.setOnClickListener {
            val intent = Intent(this, DashActivity::class.java)
            startActivity(intent)
        }
    }
}