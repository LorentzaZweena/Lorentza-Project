// Online C++ compiler to run C++ program online
#include <iostream>
#include <string.h>
using namespace std;

int main() {
    string NIM[] = {"10", "20", "30", "40", "50"};
    string *p_NIM = NIM;
    
    for(int i=0; i< sizeof(NIM); i++) {
        cout<< "data NIM index ke- " << i << ": "<<*(p_NIM+i) <<  endl << "dengan alamat: " <<&NIM[i] << endl;
    }
    
    cout<<"Alamat NIM: " << NIM<< endl;
    cout<< "alamat NIM [0]: " << &NIM[0] << endl;
    cout << "alamat NIM [1]: " << &NIM[1] << endl;
    cout << "data NIM [0]: " << *p_NIM << endl;
    cout << "data NIM [3]: " << *(p_NIM + 3) << endl;

    return 0;
}
