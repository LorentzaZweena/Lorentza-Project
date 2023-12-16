package SehatQ

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageButton
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.PopularProductAdapter
import com.example.lorentza.suround.adapterr.RecommendAdapter
import com.example.lorentza.suround.model.PopularProduct
import com.example.lorentza.suround.model.Recommend

class ShopActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_shop)

        val rvProduct1 : RecyclerView = findViewById(R.id.rvProduct1)
        val PopularProduct = arrayListOf<PopularProduct>(
            PopularProduct(R.drawable.image98, "Tolak Angin", "Tolak angin cair \nmadu 15 ml"),
            PopularProduct(R.drawable.image99, "Paracetamol", "Obat kapsul \n" + "500 mg"),
            PopularProduct(R.drawable.image100, "Voltadex", "Tablet 500 mg "),
            PopularProduct(R.drawable.image101, "Prenatal", "Vitamin untuk \nkesehatan"),
            PopularProduct(R.drawable.image102, "Kids first", "Vitamin anak \nrasa buah"),
            PopularProduct(R.drawable.image103, "Spasday-M", "Tablet pereda \nnyeri otot")
        )

        val adapter3 = PopularProductAdapter(PopularProduct)
        val linearHorizontal3 = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)

        rvProduct1.adapter = adapter3
        rvProduct1.layoutManager = linearHorizontal3

        val rvProduct2 : RecyclerView = findViewById(R.id.rvProduct2)
        val Recommend = arrayListOf<Recommend>(
            Recommend(R.drawable.image104, "Nature made", "Vitamin", "Rp35.000", R.drawable.image105, "Jamieson E", "Vitamin", "Rp23.000"),
            Recommend(R.drawable.image106, "Actified plus", "Obat", "Rp44.000", R.drawable.image107, "Kandistatin", "Obat", "Rp73.000"),
            Recommend(R.drawable.image108, "Enfamil", "Vitamin", "Rp75.000", R.drawable.image109, "Mefnic - D", "Obat", "Rp29.000")
        )

        val adapter4 = RecommendAdapter(Recommend)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        rvProduct2.adapter = adapter4
        rvProduct2.layoutManager = linearVertical

        val ibChatSehatQ : ImageButton = findViewById(R.id.ibChatSehatQ)
        ibChatSehatQ.setOnClickListener {
            val intent = Intent(this, ChatActivity::class.java)
            startActivity(intent)
        }

//        val ibShopSehatQ : ImageButton = findViewById(R.id.ibShopSehatQ)
//        ibShopSehatQ.setOnClickListener {
//            val intent = Intent(this, ShopActivity::class.java)
//            startActivity(intent)
//        }

        val ibHospitalSehatQ : ImageButton = findViewById(R.id.ibHospitalSehatQ)
        ibHospitalSehatQ.setOnClickListener {
            val intent = Intent(this, HospitalActivity::class.java)
            startActivity(intent)
        }

        val ibHomeSehatQ : ImageButton = findViewById(R.id.ibHomeSehatQ)
        ibHomeSehatQ.setOnClickListener {
            val intent = Intent(this, DashActivity::class.java)
            startActivity(intent)
        }
    }
}