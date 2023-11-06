package Pelicia.Lel

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.model.Premium

class PremiumAdapter (val data : ArrayList<Premium>) : RecyclerView.Adapter<PremiumAdapter.PremiumViewHolder>(){
    class PremiumViewHolder (view: View) : RecyclerView.ViewHolder(view){
        val ibPremium : ImageButton = view.findViewById(R.id.ibPremium)
        val tvPremium : TextView = view.findViewById(R.id.tvPremium)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): PremiumViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_premium, parent, false)
        return PremiumViewHolder(view)
    }

    override fun getItemCount(): Int = data.size
    override fun onBindViewHolder(holder: PremiumViewHolder, position: Int) {
        val item = data.get(position)
        holder.ibPremium.setImageResource(item.image)
        holder.tvPremium.text = item.name
    }

}