// Online C++ compiler to run C++ program online
#include <iostream>
#include <string>
using namespace std;

struct buah {
    string warna;
    int harga;
    float berat;
    string jenis;
};

int main() {
    buah fruit[2];
    fruit[0].warna = "hijau";
    fruit[0].harga = 5000;
    fruit[0].berat = 5.2;
    fruit[0].jenis = "berat";
    
    cout << "warna fruit: " << fruit[0].warna << endl;
    cout << "harga fruit: " << fruit[0].harga << endl;
    cout << "berat fruit: " << fruit[0].berat << endl;
    cout << "jenis fruit: " << fruit[0].jenis << endl;
    
    cout << endl;
    
    fruit[1].warna = "orange";
    fruit[1].harga = 2000;
    fruit[1].berat = 1.3;
    fruit[1].jenis = "ringan";
    
    cout << "warna fruit: " << fruit[1].warna << endl;
    cout << "harga fruit: " << fruit[1].harga << endl;
    cout << "berat fruit: " << fruit[1].berat << endl;
    cout << "jenis fruit: " << fruit[1].jenis << endl;
    
    
    return 0;
}
