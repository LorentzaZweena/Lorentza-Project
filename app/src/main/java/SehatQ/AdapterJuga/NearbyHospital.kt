package SehatQ.AdapterJuga

import SehatQ.HospitalDetailActivity
import SehatQ.NearbyActivity
import SehatQ.modelJuga.Nearby
import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R

class NearbyHospital(val data : ArrayList<Nearby>) : RecyclerView.Adapter<NearbyHospital.NearbyViewHolder>() {
    class NearbyViewHolder(view: View):RecyclerView.ViewHolder(view) {
        val ivNearby : ImageView = view.findViewById(R.id.ivNearby)
        val tvNearby : TextView = view.findViewById(R.id.tvNearby)
        val tvJalanNearby : TextView = view.findViewById(R.id.tvJalanNearby)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): NearbyViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.item_nearby, parent, false)
        return NearbyViewHolder(view)
    }

    override fun getItemCount(): Int = data.size
    override fun onBindViewHolder(holder: NearbyViewHolder, position: Int) {
        val item = data.get(position)
        holder.ivNearby.setImageResource(item.gambar)
        holder.tvNearby.text = item.namaNearby
        holder.tvJalanNearby.text = item.jalanNearby

        holder.itemView.setOnClickListener {
            val intent = Intent(holder.itemView.context, NearbyActivity::class.java)
            holder.itemView.context.startActivity(intent)
        }
    }
}