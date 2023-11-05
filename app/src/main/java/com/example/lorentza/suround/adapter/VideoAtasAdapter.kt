package com.example.lorentza.suround.adapter

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.VideoAtas

class VideoAtasAdapter (val data : ArrayList<VideoAtas>) : RecyclerView.Adapter<VideoAtasAdapter.VideoAtasViewHolder>(){
    class VideoAtasViewHolder (view: View) : RecyclerView.ViewHolder (view){
        val ibVideoAtas : ImageButton = view.findViewById(R.id.ibVideoAtas)
        val tvVideoAtas : TextView = view.findViewById(R.id.tvVideoAtas)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): VideoAtasViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_video_atas, parent, false)
        return VideoAtasViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: VideoAtasViewHolder, position: Int) {
        val item =  data.get(position)
        holder.ibVideoAtas.setImageResource(item.image)
        holder.tvVideoAtas.text = item.name
    }

}