package com.example.lorentza.suround.adapterr

import android.media.Image
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Hospital

class HospitalAdapter(val data : ArrayList<Hospital>) : RecyclerView.Adapter<HospitalAdapter.HospitalViewHolder>() {
    class HospitalViewHolder(view: View):RecyclerView.ViewHolder(view) {
        val ivHospital : ImageView = view.findViewById(R.id.ivHospital)
        val tvNamaHospital : TextView = view.findViewById(R.id.tvNamaHospital)
        val tvJalanHospital : TextView = view.findViewById(R.id.tvJalanHospital)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): HospitalViewHolder {
       val view = LayoutInflater.from(parent.context).inflate(R.layout.item_hospital, parent, false)
        return HospitalViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: HospitalViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivHospital.setImageResource(item.image)
        holder.tvNamaHospital.text = item.namaHospital
        holder.tvJalanHospital.text = item.jalanHospital
    }
}