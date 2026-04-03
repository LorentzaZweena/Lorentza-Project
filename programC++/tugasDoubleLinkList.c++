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
    Node* prev;
    Node* next;
};

Node* head = NULL;
Node* tail = NULL;

char hitungGrade(float nilaiAkhir) {
    if (nilaiAkhir >= 85) 
    return 'A';
    
    else if (nilaiAkhir >= 70) 
    return 'B';
    
    else if (nilaiAkhir >= 60) 
    return 'C';
    
    else if (nilaiAkhir >= 50) 
    return 'D';
    
    else return 'E';
}

void isiData(Node* baru) {
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
}

void tambahDepan() {
    Node* baru = new Node;
    isiData(baru);

    baru->prev = NULL;
    baru->next = head;

    if (head != NULL)
        head->prev = baru;
    else
        tail = baru;

    head = baru;
}

void tambahBelakang() {
    Node* baru = new Node;
    isiData(baru);

    baru->next = NULL;
    baru->prev = tail;

    if (tail != NULL)
        tail->next = baru;
    else
        head = baru;

    tail = baru;
}

void tambahTengah(int posisi) {
    if (posisi <= 1 || head == NULL) {
        tambahDepan();
        return;
    }

    Node* baru = new Node;
    isiData(baru);

    Node* temp = head;
    int i = 1;

    while (temp->next != NULL && i < posisi - 1) {
        temp = temp->next;
        i++;
    }

    baru->next = temp->next;
    baru->prev = temp;

    if (temp->next != NULL)
        temp->next->prev = baru;
    else
        tail = baru;

    temp->next = baru;
}

void hapusDepan() {
    if (head == NULL) return;

    Node* hapus = head;
    head = head->next;

    if (head != NULL)
        head->prev = NULL;
    else
        tail = NULL;

    delete hapus;
}

void hapusBelakang() {
    if (tail == NULL) return;

    Node* hapus = tail;
    tail = tail->prev;

    if (tail != NULL)
        tail->next = NULL;
    else
        head = NULL;

    delete hapus;
}

void hapusTengah(int posisi) {
    if (head == NULL) return;

    if (posisi == 1) {
        hapusDepan();
        return;
    }

    Node* temp = head;
    int i = 1;

    while (temp != NULL && i < posisi) {
        temp = temp->next;
        i++;
    }

    if (temp == NULL) return;

    if (temp->prev != NULL)
        temp->prev->next = temp->next;

    if (temp->next != NULL)
        temp->next->prev = temp->prev;
    else
        tail = temp->prev;

    delete temp;
}

void tampil() {
    Node* temp = head;

    if (temp == NULL) {
        cout << "Data kosong\n";
        return;
    }

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
    int pilih, posisi;

    do {
        cout << "\n Menu (Double link list)\n";
        cout << "1. Tambah Depan\n";
        cout << "2. Tambah Belakang\n";
        cout << "3. Tambah Tengah\n";
        cout << "4. Hapus Depan\n";
        cout << "5. Hapus Belakang\n";
        cout << "6. Hapus Tengah\n";
        cout << "7. Tampilkan\n";
        cout << "0. Keluar\n";
        cout << "Pilih: ";
        cin >> pilih;

        switch (pilih) {
            case 1: tambahDepan(); 
            break;
            
            case 2: tambahBelakang(); 
            break;
            
            case 3:
                cout << "Posisi: "; cin >> posisi;
                tambahTengah(posisi);
                break;
                
            case 4: hapusDepan(); 
            break;
            
            case 5: hapusBelakang(); 
            break;
            
            case 6:
                cout << "Posisi: "; cin >> posisi;
                hapusTengah(posisi);
                break;
            case 7: tampil(); break;
        }
    } while (pilih != 0);

    return 0;
}
