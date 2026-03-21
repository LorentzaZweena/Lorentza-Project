// Online C++ compiler to run C++ program online
#include <iostream>
using namespace std;

struct Anggota {
    int id;
    string nama;
    Anggota *next;
};

Anggota *head, *tail, *cur, *nodeBaru, *del;

//pembuatan sll
void BuatSingleLL(int id, string nama){
    head = new Anggota();
    head->id = id;
    head->nama = nama;
    head->next = NULL;
    tail = head;
}

void TambahDepan(int id, string nama){
    nodeBaru = new Anggota();
    nodeBaru->id = id;
    nodeBaru->nama = nama;
    nodeBaru->next = head;
    head = nodeBaru;
}

void TambahBelakang(int id, string nama){
    nodeBaru = new Anggota();
    nodeBaru->id = id;
    nodeBaru->nama = nama;
    tail->next = nodeBaru;
    tail = nodeBaru;
}

void HapusBelakang(){
    del = tail;
    cur = head;
    while (cur->next != tail){
        cur = cur->next;
    }
    
    tail = cur;
    tail->next = NULL;
    delete del;
}

void TampilkanSingleLL(){
    cur = head;
    while (cur != NULL){
        cout << "Nomor Id: " << cur->id << endl;
        cout<< "Nama: " << cur->nama << endl;
        cout << endl;
        cur = cur->next;
    }
}

int main() {
   BuatSingleLL(1234, "Ariva");
   TampilkanSingleLL();
   
   TambahDepan(1233, "Zweena");
   TampilkanSingleLL();
   
   TambahBelakang(1236, "CCIT");
   TampilkanSingleLL();
   
   HapusBelakang();
   TampilkanSingleLL();
   return 0;
}
