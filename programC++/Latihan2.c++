#include <iostream>
#include <string>
using namespace std;

int main() {
    
    string MK[5];
    int nilai[5];
    
    string *p_MK = MK;
    int *p_nilai = nilai;
    
    for(int i = 0; i < 5; i++) {
        cout << "Masukkan nama matkul ke-" << i+1 << ": ";
        cin >> *(p_MK + i);
        
        cout << "Masukkan nilai ke-" << i+1 << ": ";
        cin >> *(p_nilai + i);
    }
    
    cout << "\nData yang dimasukkan:\n";
    for(int i = 0; i < 5; i++) {
        cout << "Matkul: " << *(p_MK + i) 
             << " | Nilai: " << *(p_nilai + i) << endl;
    }

    return 0;
}
