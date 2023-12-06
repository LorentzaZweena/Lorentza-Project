package com.example.lorentza.suround.adapter

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Chat

class ChatAdapter(val data : ArrayList<Chat>):RecyclerView.Adapter<ChatAdapter.ChatViewHolder>() {
    class ChatViewHolder(view: View):RecyclerView.ViewHolder(view) {
        val ibDokter : ImageButton = view.findViewById(R.id.ibDokter)
        val tvNamaDokter : TextView = view.findViewById(R.id.tvNamaDokter)
        val tvMessage : TextView = view.findViewById(R.id.tvMessage)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ChatViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_chat, parent, false)
        return ChatViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: ChatViewHolder, position: Int) {
       val item = data.get(position)
        holder.ibDokter.setImageResource(item.image)
        holder.tvNamaDokter.text = item.NamaDokter
        holder.tvMessage.text = item.Message
    }
}