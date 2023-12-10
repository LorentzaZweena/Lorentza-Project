package com.example.lorentza.suround.adapter

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.PopularProduct

class PopularProductAdapter (val data:ArrayList<PopularProduct>) : RecyclerView.Adapter<PopularProductAdapter.PopularProductViewHolder>() {
    class PopularProductViewHolder(view: View):RecyclerView.ViewHolder(view) {
        val ivProduct : ImageView = view.findViewById(R.id.ivProduct)
        val tvNamaProduct : TextView = view.findViewById(R.id.tvNamaProduct)
        val tvDescProduct :TextView = view.findViewById(R.id.tvDescProduct)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): PopularProductViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_popular_product, parent, false)
        return PopularProductAdapter.PopularProductViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: PopularProductViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivProduct.setImageResource(item.image)
        holder.tvNamaProduct.text = item.namaProduk
        holder.tvDescProduct.text = item.descProduk
    }
}