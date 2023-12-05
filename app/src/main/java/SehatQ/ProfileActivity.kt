package SehatQ

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.ImageButton
import android.widget.Toast
import com.example.lorentza.R

class ProfileActivity : AppCompatActivity() {

    var ibShareSehatQ : ImageButton? = null
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_profile)

        val ibBackSehatQ : ImageButton = findViewById(R.id.ibBackSehatQ)
        val ibLike : ImageButton = findViewById(R.id.ibLike)
        val ibLike2 : ImageButton = findViewById(R.id.ibLike2)

        ibShareSehatQ = findViewById(R.id.ibShareShehatQ)

        ibBackSehatQ.setOnClickListener {
            val intent = Intent(this, DashActivity::class.java)
            startActivity(intent)
        }

        ibLike.setOnClickListener {
            if (ibLike2.visibility == View.VISIBLE) {
                ibLike2.visibility = View.INVISIBLE
                Toast.makeText(
                    this, "Ditambahkan ke favorit", Toast.LENGTH_SHORT
                ).show()
            }
            else {
                ibLike2.visibility = View.VISIBLE
            }
        }

        ibShareSehatQ!!.setOnClickListener {
            val intent2 = Intent(Intent.ACTION_SEND)
            intent2.putExtra(Intent.EXTRA_TEXT, "Dokter Isanamikô ")
            intent2.setType("text/plain")
            startActivity(Intent.createChooser(intent, "Bagikan ke : "))
        }

//        ibLike2.setOnClickListener {
//            if (ibLike.visibility == View.VISIBLE) {
//                ibLike.visibility = View.INVISIBLE
//                Toast.makeText(
//                    this, "Hapus dari favorit", Toast.LENGTH_SHORT
//                ).show()
//            }
//            else {
//                ibLike.visibility = View.VISIBLE
//            }
//        }
    }
}