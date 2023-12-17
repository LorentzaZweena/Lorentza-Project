package com.example.lorentza.suround.adapterr

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Specialist

class SpecialistAdapter(val data : ArrayList<Specialist>):RecyclerView.Adapter<SpecialistAdapter.SpecialistViewHolder>() {
    class SpecialistViewHolder(view: View):RecyclerView.ViewHolder(view) {
        val ivSpecialist : ImageView = view.findViewById(R.id.ivSpecialist)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): SpecialistViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_specialist, parent, false)
        return SpecialistViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: SpecialistViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivSpecialist.setImageResource(item.gambar)
    }
}