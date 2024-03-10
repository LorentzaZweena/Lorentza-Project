package com.example.lorentza.suround.adapter

import SehatQ.ArticleRekomendationReadActivity
import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.TrendingActivity
import com.example.lorentza.suround.model.Trending

class TrendingAdapter (val data:ArrayList<Trending>):RecyclerView.Adapter<TrendingAdapter.TrendingViewHolder>(){
    class TrendingViewHolder(view: View):RecyclerView.ViewHolder(view){
        val ibTrending:ImageButton = view.findViewById(R.id.ibTrending)
        val tvTrending:TextView = view.findViewById(R.id.tvTrending)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): TrendingViewHolder {
       val view = LayoutInflater.from(parent.context).inflate(R.layout.item_trending, parent, false)
        return TrendingViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: TrendingViewHolder, position: Int) {
        val item = data.get(position)
        holder.ibTrending.setImageResource(item.image)
        holder.tvTrending.text = item.name

        holder.itemView.setOnClickListener {
            val intent = Intent(holder.itemView.context, TrendingActivity::class.java)
            holder.itemView.context.startActivity(intent)
        }
    }
}