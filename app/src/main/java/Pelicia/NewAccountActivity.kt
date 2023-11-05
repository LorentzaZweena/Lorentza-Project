package Pelicia

import android.content.Context
import android.content.Intent
import android.content.SharedPreferences
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast
import com.example.lorentza.R
import com.example.lorentza.suround.LoginActivity
import java.util.prefs.Preferences

class NewAccountActivity : AppCompatActivity() {
   companion object{
       const val SHARED_PREFS = "shared_prefs"
       const val EMAIL_KEY = "email"
       const val PASSWORD_KEY = "password"
   }
    private lateinit var sharedPreferences: SharedPreferences
    private var email : String? = null
    private var password : String? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_new_account)
        var inputUsername : EditText = findViewById(R.id.etUsernameSignUp)
        var inputPassword : EditText = findViewById(R.id.etPasswordSignUp)
        var confirmPassword : EditText = findViewById(R.id.etConfirmPasswordSignUp)

        var btnSignUp : Button = findViewById(R.id.btnSignUpPelicia)

        sharedPreferences = getSharedPreferences(SHARED_PREFS, Context.MODE_PRIVATE)
        email = sharedPreferences.getString("email", null)
        password = sharedPreferences.getString("password", null)

        btnSignUp.setOnClickListener {
            if (inputUsername.text.isEmpty() && inputPassword.text!!.toString().isEmpty()){
                Toast.makeText(this, "Username and password still empty", Toast.LENGTH_LONG)
            } else if (inputPassword.text!!.toString() != confirmPassword.text.toString()){
                Toast.makeText(this, "Password didn't match", Toast.LENGTH_LONG)
            } else {
                val editor = sharedPreferences.edit()
                editor.putString(EMAIL_KEY, inputUsername.text.toString())
                editor.putString(PASSWORD_KEY, inputPassword.text.toString())
                editor.apply()

                val i = Intent(this, DashboardActivity::class.java)
                startActivity(i)
                finish()
            }
        }
    } override fun onStart() {
        super.onStart()
        if (email != null && password != null) {
            val i = Intent(this, NewAccountActivity::class.java)
            startActivity(i)
        }
    }
}