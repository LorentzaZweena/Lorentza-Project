package SehatQ.AdapterJuga

import SehatQ.modelJuga.Artikel
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageButton
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R

class ArtikelAdapter(val data : ArrayList<Artikel>) : RecyclerView.Adapter<ArtikelAdapter.ArtikelViewHolder>() {
    class ArtikelViewHolder(view: View):RecyclerView.ViewHolder(view) {
        val ibArtikel : ImageButton = view.findViewById(R.id.ibArtikel)
        val tvJudulArtikel : TextView = view.findViewById(R.id.tvJudulArtikel)
        val tvTopic : TextView = view.findViewById(R.id.tvTopic)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ArtikelViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_artikel, parent, false)
        return ArtikelViewHolder(view)
    }

    override fun getItemCount(): Int = data.size

    override fun onBindViewHolder(holder: ArtikelViewHolder, position: Int) {
        val item = data.get(position)
        holder.ibArtikel.setImageResource(item.image)
        holder.tvJudulArtikel.text = item.judulArtikel
        holder.tvTopic.text = item.topic
    }
}