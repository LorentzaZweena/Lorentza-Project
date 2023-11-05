package Pelicia

import android.content.Context
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast
import com.example.lorentza.R
import java.util.prefs.Preferences

class NewAccountActivity : AppCompatActivity() {
   companion object{
       const val SHARED_PREFS = "shared_prefs"
       const val EMAIL_KEY = "email"
       const val PASSWORD_KEY = "password"
   }
    private lateinit var sharedPreferences: Preferences
    private var email : String? = null
    private var password : String? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_new_account)
        var inputUsername : EditText = findViewById(R.id.etUsernameSignUp)
        var inputPassword : EditText = findViewById(R.id.etPasswordSignUp)

        var btnSignUp : Button = findViewById(R.id.btnSignUpPelicia)

        sharedPreferences = getSharedPreferences(SHARED_PREFS, Context.MODE_PRIVATE)
        email = sharedPreferences.getString("email", null)
        password = sharedPreferences.getString("password", null)

        btnSignUp.setOnClickListener {
            if (inputUsername.text.isEmpty() && inputPassword.text!!.toString().isEmpty()){
                Toast.makeText(this, "Username and password still empty", Toast.LENGTH_LONG)
            } else {
                val editor = sharedPreferences.edit()
                editor.putString(EMAIL_KEY, inputUsername.text.toString())
                editor.putString(PASSWORD_KEY, inputPassword.text.toString())
                editor.apply()

                val i = Intent(this)
                startActivity(i)
                finish()
            }
        }
    }
}