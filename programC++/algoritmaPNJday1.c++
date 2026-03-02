#include <iostream> 
using namespace std; 

int main() { 
    int nilai = 80; //deklarasi nilai 
    int *p = &nilai; //pointer 
    *p= 100; 
    
    int **p_pointepointernilai = &p;
    **p_pointepointernilai = 120;
    
    cout<< "data nilai: " << nilai << endl;
    cout<< "data yg disimpan: " << *p <<endl; 
    cout << "alamat data: " << p <<endl; 
    cout << "alamat pointer: " << p_pointepointernilai <<endl;
    
    return 0; 
    
}
