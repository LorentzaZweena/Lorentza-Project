package Pelicia.Adapterrr

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.PeliciaPopular

class PeliciaPopularAdapter(val data : ArrayList<PeliciaPopular>) : RecyclerView.Adapter<PeliciaPopularAdapter.PeliciaPopularViewHolder>(){
    class PeliciaPopularViewHolder(view: View) : RecyclerView.ViewHolder(view){
        val ibPopular : ImageButton = view.findViewById(R.id.ibPopular)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): PeliciaPopularViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_popular, parent, false)
        return PeliciaPopularViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: PeliciaPopularViewHolder, position: Int) {
        val item = data.get(position)
        holder.ibPopular.setImageResource(item.image)
    }

}