#include <iostream> 
#include <string.h>
using namespace std; 

int main() { 
    string nama = "Nama aku";
    string nim = "nim aku";
    string *na = &nama;
    string *ni = &nim;
    
    *na = "Ariva";
    *ni = "nim";
    
    string **namaoutput = &na;
    string **nimoutput = &ni;
    **namaoutput = "Ariva Zweena";
    **nimoutput = "2507412002";
    
    cout << "data nama lengkap: " << nama << endl;
    cout << "data nim: " << nim << endl;
    
    return 0; 
    
}
