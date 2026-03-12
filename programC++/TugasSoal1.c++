#include <iostream>
#include <iomanip>
using namespace std;

struct Mahasiswa {
    string nama[100];
    float tugas[100];
    float kuis[100];
    float mid[100];
    float uas[100];
    float na[100];
    char grade[100];
};

int main() {

    Mahasiswa mhs;
    int n;

    cout << "Jumlah mahasiswa: ";
    cin >> n;

    for(int i=0;i<n;i++){
        cout << "\nMahasiswa ke-" << i+1 << endl;
        cout << "Nama  : ";
        cin >> mhs.nama[i];
        cout << "Nilai Tugas : ";
        cin >> mhs.tugas[i];
        cout << "Nilai Kuis  : ";
        cin >> mhs.kuis[i];
        cout << "Nilai UTS   : ";
        cin >> mhs.mid[i];
        cout << "Nilai UAS   : ";
        cin >> mhs.uas[i];

        mhs.na[i] = (0.3*mhs.tugas[i]) + (0.1*mhs.kuis[i]) +
                    (0.3*mhs.mid[i]) + (0.3*mhs.uas[i]);

        if(mhs.na[i] > 85)
            mhs.grade[i] = 'A';
        else if(mhs.na[i] > 70)
            mhs.grade[i] = 'B';
        else if(mhs.na[i] > 55)
            mhs.grade[i] = 'C';
        else if(mhs.na[i] > 40)
            mhs.grade[i] = 'D';
        else
            mhs.grade[i] = 'E';
    }

    cout << "\n\nTABEL NILAI MAHASISWA\n";
    cout << setw(10)<<"Nama"
         << setw(8)<<"Tugas"
         << setw(8)<<"Kuis"
         << setw(8)<<"UTS"
         << setw(8)<<"UAS"
         << setw(10)<<"N. akhir"
         << setw(8)<<"Grade"<<endl;

    for(int i=0;i<n;i++){
        cout << setw(10)<<mhs.nama[i]
             << setw(8)<<mhs.tugas[i]
             << setw(8)<<mhs.kuis[i]
             << setw(8)<<mhs.mid[i]
             << setw(8)<<mhs.uas[i]
             << setw(10)<<mhs.na[i]
             << setw(8)<<mhs.grade[i]<<endl;
             
    }

    return 0;
}
