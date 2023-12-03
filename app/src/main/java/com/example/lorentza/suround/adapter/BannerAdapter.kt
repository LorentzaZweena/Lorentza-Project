package com.example.lorentza.suround.adapter

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Banner

class BannerAdapter(val data : ArrayList<Banner>):RecyclerView.Adapter<BannerAdapter.BannerViewHolder>(){
    class BannerViewHolder(view: View):RecyclerView.ViewHolder(view){
        val ivBanner : ImageView = view.findViewById(R.id.ivBanner)
        val tvBanner1 : TextView = view.findViewById(R.id.tvBanner1)
        val tvBanner2 : TextView = view.findViewById(R.id.tvBanner2)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): BannerViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_banner, parent, false)
        return BannerViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: BannerViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivBanner.setImageResource(item.gambar)
        holder.tvBanner1.text = item.name
        holder.tvBanner2.text = item.nameLagi
    }

}