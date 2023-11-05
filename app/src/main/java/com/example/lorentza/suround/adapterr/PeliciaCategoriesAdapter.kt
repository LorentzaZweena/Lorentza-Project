package com.example.lorentza.suround.adapterr

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.PeliciaCategories

class PeliciaCategoriesAdapter(val data : ArrayList<PeliciaCategories>) : RecyclerView.Adapter<PeliciaCategoriesAdapter.PeliciaCategoriesViewHolder>(){
    class PeliciaCategoriesViewHolder (view: View) : RecyclerView.ViewHolder(view){
        val ibPelicaCategory : ImageButton = view.findViewById(R.id.ibPeliciaCategory)
        val tvPeliciaText : TextView = view.findViewById(R.id.tvPeliciaText)
    }
    override fun onCreateViewHolder(
        parent: ViewGroup,
        viewType: Int
    ): PeliciaCategoriesAdapter.PeliciaCategoriesViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_pelicia_categories, parent, false)
        return PeliciaCategoriesViewHolder(view)
    }

    override fun onBindViewHolder(
        holder: PeliciaCategoriesAdapter.PeliciaCategoriesViewHolder,
        position: Int
    ) {
        val item = data.get(position)
        holder.ibPelicaCategory.setImageResource(item.image)
        holder.tvPeliciaText.text = item.name
    }

    override fun getItemCount(): Int = data.size

}