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

struct Aktivitas {
    string kegiatan;
    Aktivitas* next;
};

Aktivitas* top = NULL;

void simpanAktivitas(string kegiatan) {
    Aktivitas* baru = new Aktivitas;
    baru->kegiatan = kegiatan;
    baru->next = top;
    top = baru;
}

void tampilRiwayat() {
    if (top == NULL) {
        cout << "\nBelum ada history\n";
        return;
    }

    Aktivitas* temp = top;

    cout << "\nhistory\n";
    while (temp != NULL) {
        cout << "- " << temp->kegiatan << endl;
        temp = temp->next;
    }
}

void undoAktivitas() {
    if (top == NULL) {
        cout << "\nTidak ada aktivitas yang bisa diundo!\n";
        return;
    }

    Aktivitas* hapus = top;

    cout << "\nUndo aktivitas: "
         << hapus->kegiatan << endl;

    top = top->next;
    delete hapus;
}

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
    cout << "\nregister\n";
    cout << "Username : ";
    cin >> username;
    if (akun.find(username) != akun.end()) {
        cout << "Username sudah digunakan!\n";
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
    simpanAktivitas("Registrasi akun: " + username);
    cout << "register berhasil!\n";
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
        simpanAktivitas("Login akun: " + username);
        cout << "Login berhasil!\n";
        return username;
    }

    cout << "Username atau password salah!\n";
    return "";
}

void editProfil(string username) {
    Profil* user = cariProfil(username);
    if (user == NULL) {
        cout << "Profil tidak ditemukan!\n";
        return;
    }
    cin.ignore();
    cout << "\nedit profile\n";
    cout << "Nama baru  : ";
    getline(cin, user->nama);
    cout << "Email baru : ";
    getline(cin, user->email);
    simpanAktivitas("Edit profil: " + username);
    cout << "Profil berhasil diubah!\n";
}

void tampilProfil(string username) {
    Profil* user = cariProfil(username);
    if (user == NULL) {
        cout << "Profil tidak ditemukan!\n";
        return;
    }
    cout << "\ndata\n";
    cout << "Username : " << user->username << endl;
    cout << "Nama     : " << user->nama << endl;
    cout << "Email    : " << user->email << endl;
}

void cariAkun() {
    string username;
    cout << "\nMasukkan username yang dicari : ";
    cin >> username;
    if (akun.find(username) != akun.end()) {
        cout << "\nAkun ditemukan!\n";
        cout << "Username : " << username << endl;
    }
    else {
        cout << "\nAkun tidak ditemukan!\n";
    }
}

int main() {
    int pilihan;
    string userLogin = "";
    do {
        cout << "\nmenu\n";
        cout << "1. Registrasi Akun\n";
        cout << "2. Login Akun\n";
        cout << "3. Edit Profil\n";
        cout << "4. Tampil Profil\n";
        cout << "5. Tampilkan Riwayat Aktivitas\n";
        cout << "6. Undo Aktivitas Terakhir\n";
        cout << "7. Cari Akun Berdasarkan Username\n";
        cout << "8. Keluar\n";
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
        case 5:
            tampilRiwayat();
            break;

        case 6:
            undoAktivitas();
            break;
        case 7:
            cariAkun();
            break;
        case 8:
            cout << "Program selesai.\n";
            break;

        default:
            cout << "Pilihan tidak valid!\n";
        }

    } while (pilihan != 8);
    return 0;
}
