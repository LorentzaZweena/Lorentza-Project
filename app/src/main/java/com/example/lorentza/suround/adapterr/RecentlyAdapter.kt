package com.example.lorentza.suround.adapterr

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Recently

class RecentlyAdapter(val data:ArrayList<Recently>):RecyclerView.Adapter<RecentlyAdapter.RecentlyViewHolder>(){
    class RecentlyViewHolder(view: View):RecyclerView.ViewHolder(view){
        val ibRecently:ImageButton = view.findViewById(R.id.ibRecently)
        val tvRecently:TextView = view.findViewById(R.id.tvRecently)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): RecentlyViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_recently, parent, false)
        return RecentlyViewHolder(view)
    }

    override fun getItemCount(): Int = data.size
    override fun onBindViewHolder(holder: RecentlyViewHolder, position: Int) {
        val item = data.get(position)
        holder.ibRecently.setImageResource(item.album)
        holder.tvRecently.text = item.song
    }
}