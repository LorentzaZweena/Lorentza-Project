package Pelicia.Adapterrr

import SehatQ.ProfileActivity
import android.content.Intent
import android.view.LayoutInflater
import android.view.ViewGroup
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.RekomendasiDokter

class RekomendasiDokterAdapter(val data:ArrayList<RekomendasiDokter>):RecyclerView.Adapter<RekomendasiDokter.RekomendasiDokterViewHolder>(){
    override fun onCreateViewHolder(
        parent: ViewGroup,
        viewType: Int
    ): RekomendasiDokter.RekomendasiDokterViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_rekomendasi_dokter, parent, false)
        return RekomendasiDokter.RekomendasiDokterViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(
        holder: RekomendasiDokter.RekomendasiDokterViewHolder,
        position: Int
    ) {
        val item = data.get(position)
        holder.ivRekomendasiDokter.setImageResource(item.image)
        holder.tvNamaRekomendasiDokter.text = item.nama
        holder.tvSpesialisRekomendasiDokter.text = item.specialist
        holder.tvProfileRekomendasiDokter.text = item.profile
        holder.itemView.setOnClickListener {
            val intent = Intent(holder.itemView.context, ProfileActivity::class.java)
            holder.itemView.context.startActivity(intent)
        }
    }
}