package SehatQ

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.ImageButton
import android.widget.ImageView
import android.widget.Toast
import com.example.lorentza.R

class ProfileActivity : AppCompatActivity() {

//    var ibShareSehatQ: ImageButton? = null
    var ibBackSehatQ: ImageButton? = null

    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_profile)

        val ibShareSehatQ: ImageButton= findViewById(R.id.ibShareShehatQ)
        ibBackSehatQ = findViewById(R.id.ibBackSehatQ)

        ibShareSehatQ.setOnClickListener {
            val intent2 = Intent(Intent.ACTION_SEND)
            intent2.putExtra(Intent.EXTRA_TEXT, "Dokter Isanamikô ")
            intent2.setType("text/plain")
            startActivity(Intent.createChooser(intent2, "Bagikan ke : "))
        }

        ibBackSehatQ!!.setOnClickListener {
            val intent = Intent(this, DashActivity::class.java)
            startActivity(intent)
        }

        val ibLike: ImageButton = findViewById(R.id.ibLike)
        val ivLike: ImageView = findViewById(R.id.ivLike)

        ibLike.setOnClickListener {
            if (ivLike.visibility == View.VISIBLE) {
                ivLike.visibility = View.INVISIBLE

                Toast.makeText(
                    this, "Dihapus dari favorit", Toast.LENGTH_SHORT
                ).show()
            } else {
                ivLike.visibility = View.VISIBLE
                Toast.makeText(
                    this, "Ditambahkan ke favorit", Toast.LENGTH_SHORT
                ).show()
            }
        }
    }
}
