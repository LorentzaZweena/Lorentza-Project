package com.example.lorentza.suround.model

import android.view.View
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R

data class RekomendasiDokter(
    val image: Int,
    val nama: String,
    val specialist: String,
    val profile: String
) {
    class RekomendasiDokterViewHolder(view: View):RecyclerView.ViewHolder(view){
        val ivRekomendasiDokter : ImageView = view.findViewById(R.id.ivRekomendasiDokter)
        val tvNamaRekomendasiDokter : TextView = view.findViewById(R.id.tvNamaRekomendasiDokter)
        val tvProfileRekomendasiDokter : TextView = view.findViewById(R.id.tvProfileRekomendasiDokter)
        val tvSpesialisRekomendasiDokter : TextView = view.findViewById(R.id.tvSpesialisRekomendasiDokter)
    }

}
