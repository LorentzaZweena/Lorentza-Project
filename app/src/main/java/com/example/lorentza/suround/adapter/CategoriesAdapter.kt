package com.example.lorentza.suround.adapter

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Categories
import java.util.ArrayList

class CategoriesAdapter (val data:ArrayList<Categories>) : RecyclerView.Adapter<CategoriesAdapter.CategoriesViewHolder>(){
    class CategoriesViewHolder(view: View) : RecyclerView.ViewHolder(view){
        val tvCategory : TextView = view.findViewById(R.id.tvCategory)
        val ivCategory : ImageView = view.findViewById(R.id.ivCategory)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): CategoriesViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_categories, parent, false)
        return CategoriesViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: CategoriesViewHolder, position: Int) {
        val item = data.get(position)
        holder.tvCategory.text = item.name
        holder.ivCategory.setImageResource(item.image)
    }
}