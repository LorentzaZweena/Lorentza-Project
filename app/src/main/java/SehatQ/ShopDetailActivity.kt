package SehatQ

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import com.example.lorentza.R

class ShopDetailActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_shop_detail)

        val ibBackSehatQ: ImageButton = findViewById(R.id.ibBackSehatQ)

        ibBackSehatQ.setOnClickListener {
           val intent = Intent(this, ShopActivity::class.java)
            startActivity(intent)
        }
    }
}