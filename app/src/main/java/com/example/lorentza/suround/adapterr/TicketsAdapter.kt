package com.example.lorentza.suround.adapterr

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Tickets

class TicketsAdapter(val data:ArrayList<Tickets>):RecyclerView.Adapter<TicketsAdapter.TicketsViewHolder>(){
    class TicketsViewHolder(view : View):RecyclerView.ViewHolder(view) {
        val ivTickets : ImageView = view.findViewById(R.id.gambar45)
        val dateTickets : TextView = view.findViewById(R.id.teks118)
        val nameConcert : TextView = view.findViewById(R.id.teks119)
        val favorite : ImageView = view.findViewById(R.id.gambar46)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): TicketsViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_tickets, parent, false)
        return TicketsViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: TicketsViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivTickets.setImageResource(item.gambar)
        holder.dateTickets.text = item.date
        holder.nameConcert.text = item.nama
        holder.favorite.setImageResource(item.favorite)
    }

}