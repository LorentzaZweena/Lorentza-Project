// Online C++ compiler to run C++ program online
#include <iostream>
using namespace std;

struct Nilai {
    float uts, uas, tugas;
};

struct MataKuliah {
    string namaMK;
    Nilai nilai;
};

struct Node {
    string namaMahasiswa;
    MataKuliah mk[10];
    int jumlahMK;
    Node* next;
};

Node* head = NULL;
char hitungGrade(float nilaiAkhir) {
    if (nilaiAkhir >= 85) return 'A';
    else if (nilaiAkhir >= 70) 
    return 'B';
    
    else if (nilaiAkhir >= 60) 
    return 'C';
    
    else if (nilaiAkhir >= 50) 
    return 'D';
    
    else return 'E';
}

void tambahDepan() {
    Node* baru = new Node;

    cout << "Nama Mahasiswa: ";
    cin >> baru->namaMahasiswa;

    cout << "Jumlah Mata Kuliah: ";
    cin >> baru->jumlahMK;

    for (int i = 0; i < baru->jumlahMK; i++) {
        cout << "Nama MK ke-" << i+1 << ": ";
        cin >> baru->mk[i].namaMK;
        cout << "UTS: "; cin >> baru->mk[i].nilai.uts;
        cout << "UAS: "; cin >> baru->mk[i].nilai.uas;
        cout << "Tugas: "; cin >> baru->mk[i].nilai.tugas;
    }

    baru->next = head;
    head = baru;
}

void tambahBelakang() {
    Node* baru = new Node;

    cout << "Nama Mahasiswa: ";
    cin >> baru->namaMahasiswa;

    cout << "Jumlah Mata Kuliah: ";
    cin >> baru->jumlahMK;

    for (int i = 0; i < baru->jumlahMK; i++) {
        cout << "Nama MK ke-" << i+1 << ": ";
        cin >> baru->mk[i].namaMK;
        cout << "UTS: "; cin >> baru->mk[i].nilai.uts;
        cout << "UAS: "; cin >> baru->mk[i].nilai.uas;
        cout << "Tugas: "; cin >> baru->mk[i].nilai.tugas;
    }

    baru->next = NULL;

    if (head == NULL) {
        head = baru;
    } else {
        Node* temp = head;
        while (temp->next != NULL) {
            temp = temp->next;
        }
        temp->next = baru;
    }
}

void hapusDepan() {
    if (head == NULL) {
        cout << "List kosong\n";
        return;
    }
    Node* hapus = head;
    head = head->next;
    delete hapus;
}

void hapusBelakang() {
    if (head == NULL) return;

    if (head->next == NULL) {
        delete head;
        head = NULL;
        return;
    }

    Node* temp = head;
    while (temp->next->next != NULL) {
        temp = temp->next;
    }

    delete temp->next;
    temp->next = NULL;
}

void tampil() {
    if (head == NULL) {
        cout << "Data kosong\n";
        return;
    }

    Node* temp = head;
    while (temp != NULL) {
        cout << "\nMahasiswa: " << temp->namaMahasiswa << endl;

        for (int i = 0; i < temp->jumlahMK; i++) {
            float akhir = (temp->mk[i].nilai.uts * 0.3) +
                          (temp->mk[i].nilai.uas * 0.4) +
                          (temp->mk[i].nilai.tugas * 0.3);

            cout << "  MK: " << temp->mk[i].namaMK << endl;
            cout << "  Nilai Akhir: " << akhir << endl;
            cout << "  Grade: " << hitungGrade(akhir) << endl;
        }

        temp = temp->next;
    }
}

int main() {
    int pilih;

    do {
        cout << "\nMenu\n";
        cout << "1. Tambah Depan\n";
        cout << "2. Tambah Belakang\n";
        cout << "3. Hapus Depan\n";
        cout << "4. Hapus Belakang\n";
        cout << "5. Tampilkan Data\n";
        cout << "0. Keluar\n";
        cout << "Pilih: ";
        cin >> pilih;

        switch (pilih) {
            case 1: tambahDepan(); 
            break;
            
            case 2: tambahBelakang(); 
            break;
            
            case 3: hapusDepan(); 
            break;
            
            case 4: hapusBelakang(); 
            break;
            
            case 5: tampil(); 
            break;
        }
    } while (pilih != 0);

    return 0;
}
