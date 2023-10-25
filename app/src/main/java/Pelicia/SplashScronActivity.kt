package Pelicia

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.os.Handler
import com.example.lorentza.R
import com.example.lorentza.suround.MehActivity

class SplashScronActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_splash_scron)

        Handler().postDelayed({
            val intent = Intent(this, OrientationActivity::class.java)
            startActivity(intent)

            finish()
        },2000)
    }
}