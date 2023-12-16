package SehatQ.AdapterJuga

import SehatQ.modelJuga.ArtikelJuga
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R

class ArtikelJugaAdapter(val data: ArrayList<ArtikelJuga>) : RecyclerView.Adapter<ArtikelJugaAdapter.ArtikelJugaViewHolder>() {
    class ArtikelJugaViewHolder(view: View) : RecyclerView.ViewHolder(view) {
        val tvTopicJuga : TextView = view.findViewById(R.id.tvTopicJuga)
        val tvJudul : TextView = view.findViewById(R.id.tvJudul)
        val ivArticle : ImageView = view.findViewById(R.id.ivArticle)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ArtikelJugaViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_artikel_juga, parent, false)
        return ArtikelJugaViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: ArtikelJugaViewHolder, position: Int) {
        val item = data.get(position)
        holder.tvTopicJuga.text = item.topic
        holder.tvJudul.text = item.judul
        holder.ivArticle.setImageResource(item.gambar)
    }
}