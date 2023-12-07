package SehatQ

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.lorentza.R
import com.example.lorentza.suround.adapter.BannerAdapter
import com.example.lorentza.suround.adapter.ChatAdapter
import com.example.lorentza.suround.model.Chat

class ChatActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_chat)

        val rvChat : RecyclerView = findViewById(R.id.rvChat)
        val Chat = arrayListOf<Chat>(
            Chat(R.drawable.image90, "Dr. Galla Acropolite", "Selamat siang!"),
            Chat(R.drawable.image91, "Dr. Myriam Féret", "Sama sama :)"),
            Chat(R.drawable.image92, "Dr. Blaise Halphen", "Ok, kak"),
            Chat(R.drawable.image93, "Dr. Galla Acropolite", "Selamat siang!"),
            Chat(R.drawable.image94, "Dr. Abel Roatta", "Ooohh, baik. Kalau..."),
            Chat(R.drawable.image95, "Dr. Ogesor Holm", "Kakak juga bisa...."),
            Chat(R.drawable.image90, "Dr. Graesen Sylas", "Saya boleh memberi..."),
            Chat(R.drawable.image91, "Dr. Mullere Kibarra", "Selain itu, saya juga....")
        )

        val adapter = ChatAdapter(Chat)
        val linearVertical = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)

        rvChat.adapter = adapter
        rvChat.layoutManager = linearVertical
    }
}