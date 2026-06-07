#include <iostream>
#include <unordered_map>
using namespace std;

struct Profil {
    string username;
    string nama;
    string email;
    Profil* next;
};

Profil* head = NULL;
unordered_map<string, string> akun;

void tambahProfil(string username, string nama, string email) {
    Profil* baru = new Profil;
    baru->username = username;
    baru->nama = nama;
    baru->email = email;
    baru->next = head;
    head = baru;
}

Profil* cariProfil(string username) {
    Profil* temp = head;

    while (temp != NULL) {
        if (temp->username == username)
            return temp;
        temp = temp->next;
    }

    return NULL;
}

void registrasi() {
    string username, password, nama, email;

    cout << "\nRegistrasi\n";
    cout << "Username : ";
    cin >> username;

    if (akun.find(username) != akun.end()) {
        cout << "Username sudah ada!\n";
        return;
    }

    cout << "Password : ";
    cin >> password;

    cin.ignore();
    cout << "Nama     : ";
    getline(cin, nama);

    cout << "Email    : ";
    getline(cin, email);

    akun[username] = password;
    tambahProfil(username, nama, email);

    cout << "Registrasi berhasil!\n";
}

string login() {
    string username, password;

    cout << "\nlogin\n";
    cout << "Username : ";
    cin >> username;
    cout << "Password : ";
    cin >> password;

    if (akun.find(username) != akun.end() &&
        akun[username] == password) {
        cout << "Login berhasil!\n";
        return username;
    }

    cout << "Username atau password salah!\n";
    return "";
}

void editProfil(string username) {
    Profil* user = cariProfil(username);

    if (user == NULL) {
        cout << "Profil tidak ada\n";
        return;
    }

    cin.ignore();

    cout << "\nedit Profil\n";
    cout << "Nama baru  : ";
    getline(cin, user->nama);

    cout << "Email baru : ";
    getline(cin, user->email);

    cout << "Profil berhasil diubah!\n";
}

void tampilProfil(string username) {
    Profil* user = cariProfil(username);

    if (user != NULL) {
        cout << "\nData Profil\n";
        cout << "Username : " << user->username << endl;
        cout << "Nama     : " << user->nama << endl;
        cout << "Email    : " << user->email << endl;
    }
}

int main() {
    int pilihan;
    string userLogin = "";

    do {
        cout << "\nmenu\n";
        cout << "1. Registrasi\n";
        cout << "2. Login\n";
        cout << "3. Edit Profil\n";
        cout << "4. Tampil Profil\n";
        cout << "5. Keluar\n";
        cout << "Pilihan : ";
        cin >> pilihan;

        switch (pilihan) {
        case 1:
            registrasi();
            break;

        case 2:
            userLogin = login();
            break;

        case 3:
            if (userLogin != "")
                editProfil(userLogin);
            else
                cout << "Silakan login terlebih dahulu!\n";
            break;

        case 4:
            if (userLogin != "")
                tampilProfil(userLogin);
            else
                cout << "Silakan login terlebih dahulu!\n";
            break;
        }

    } while (pilihan != 5);

    return 0;
}
