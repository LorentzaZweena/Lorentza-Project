// Online C++ compiler to run C++ program online
#include <iostream>
using namespace std;

struct Anggota {
    int id;
    string nama;
    Anggota *next;
};

int main() {
    // inisialisasi single linked list 
    Anggota *node1, *node2, *node3;
    //node 1 = (Anggota*) malloc(sizeof(Anggota));
    node1 = new Anggota();
    node2 = new Anggota();
    node3 = new Anggota();
    
    //assign nilai ke atribut 2 linked list
    node1->id = 1234;
    node1->nama = "Aku";
    node1->next = node2;
    
    node2->id = 1235;
    node2->nama = "Ariva";
    node2->next = node3;
    
    node3->id = 1236;
    node2->nama = "Zweena";
    node3->next = NULL;
    return 0;
}
