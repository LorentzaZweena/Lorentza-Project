#include <iostream>
#include <iomanip>
using namespace std;

struct Pegawai {
    string nama[100];
    int jamKerja[100];
    int gaji[100];
};

int main(){

    Pegawai pgw;
    int n;
    int gajiPerJam = 6000;

    cout << "Jumlah pegawai: ";
    cin >> n;

    for(int i=0;i<n;i++){
        cout << "\nPegawai ke-" << i+1 << endl;
        cout << "Nama: ";
        cin >> pgw.nama[i];
        cout << "Jam kerja per minggu: ";
        cin >> pgw.jamKerja[i];

        if(pgw.jamKerja[i] <= 40){
            pgw.gaji[i] = pgw.jamKerja[i] * gajiPerJam;
        }
        else{
            int lembur = pgw.jamKerja[i] - 40;
            pgw.gaji[i] = (40 * gajiPerJam) +
                          (lembur * gajiPerJam * 3);
        }
    }

    cout <<"\nTabel\n";
    cout << setw(10)<<"Nama"
         << setw(15)<<"Jam Kerja"
         << setw(15)<<"Gaji"<<endl;

    for(int i=0;i<n;i++){
        cout << setw(10)<<pgw.nama[i]
             << setw(15)<<pgw.jamKerja[i]
             << setw(15)<<pgw.gaji[i]<<endl;
    }

    return 0;
}
