package com.example.lorentza.suround.adapterr

import SehatQ.ChatReadActivity
import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Recommend

class RecommendAdapter(val data : ArrayList<Recommend>):RecyclerView.Adapter<RecommendAdapter.RecommendViewHolder>() {
    class RecommendViewHolder(view: View):RecyclerView.ViewHolder(view){

        //yg kiri
        val ivProdukL : ImageView = view.findViewById(R.id.ivProdukL)
        val tvNamaProdukL : TextView = view.findViewById(R.id.tvNamaProdukL)
        val tvJenisProdukL : TextView = view.findViewById(R.id.tvJenisProdukL)
        val tvHargaProdukL : TextView = view.findViewById(R.id.tvHargaProdukL)
        //yg kiri

        //yg kanan
        val ivProdukR : ImageView = view.findViewById(R.id.ivProdukR)
        val tvNamaProdukR : TextView = view.findViewById(R.id.tvNamaProdukR)
        val tvJenisProdukR : TextView = view.findViewById(R.id.tvJenisProdukR)
        val tvHargaProdukR : TextView = view.findViewById(R.id.tvHargaProdukR)
        //yg kanan
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): RecommendViewHolder {
       val view = LayoutInflater.from(parent.context).inflate(R.layout.item_rekomendasi_produk, parent, false)
        return RecommendAdapter.RecommendViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: RecommendViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivProdukL.setImageResource(item.imageL)
        holder.tvNamaProdukL.text = item.namaProdukL
        holder.tvJenisProdukL.text = item.jenisProdukL
        holder.tvHargaProdukL.text = item.hargaProdukL

        holder.ivProdukR.setImageResource(item.imageR)
        holder.tvNamaProdukR.text = item.namaProdukR
        holder.tvJenisProdukR.text = item.jenisProdukR
        holder.tvHargaProdukR.text = item.hargaProdukR

        holder.itemView.setOnClickListener {
            val intent = Intent(holder.itemView.context, ChatReadActivity::class.java)
            holder.itemView.context.startActivity(intent)
        }
    }
}