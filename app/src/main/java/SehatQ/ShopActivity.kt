package SehatQ

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.PopularProductAdapter
import com.example.lorentza.suround.model.PopularProduct

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
    }
}