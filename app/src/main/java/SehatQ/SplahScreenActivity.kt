package SehatQ

import Pelicia.OrientationActivity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.os.Handler
import com.example.lorentza.R

class SplahScreenActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_splah_screen)

        Handler().postDelayed({
            val intent = Intent(this, OreoActivity::class.java)
            startActivity(intent)

            finish()
        },2000)
    }
}