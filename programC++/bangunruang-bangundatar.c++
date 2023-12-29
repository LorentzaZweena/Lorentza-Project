#include <iostream>
using namespace std;

void luas_persegi(){
	int sisi, sisi2, hasil, hasil2;
	cout << "inputkan sisi: ";
	cin >> sisi;
	cout << "\ninputkan sisi: ";
	cin >> sisi2;
	
	hasil = sisi * sisi2;
	hasil2 = 4 * sisi;
	cout << "hasilnya adalah: " << hasil;
	cout << "kelilingnya adalah: " << hasil2;
} 

	void luas_segitiga() {
		int alas, tinggi, hasil_segitiga, hasil2;
		cout << "inputkan alas: ";
		cin >> alas;
		cout << "\ninputkan tinggi: ";
		cin >> tinggi;
		
		hasil_segitiga = alas * tinggi / 2;
		hasil2 = alas + tinggi;
		cout << "hasilnya adalah: " << hasil_segitiga;
		cout << "\nkeliingnya adalah: " << hasil2;
	} 
	
	void persegi_panjang(){
		int panjang, lebar, hasil, hasil2;
		cout << "inputkan panjang: ";
		cin >> panjang;
		cout << "\ninputkan lebar: ";
		cin >> lebar;
		hasil = 2 * (panjang + lebar);
		hasil2 = panjang * lebar;
		cout << "kelilingnya adalah: " << hasil;
		cout << "\nluas nya adalah: " << hasil2;
	}
	
	void lingkaran (){
		int jari_jari, luas, keliling;
		float p;
		cout << "inputkan jari jari: ";
		cin >> jari_jari;
		p = 3.14;
		luas = p * jari_jari * jari_jari;
		keliling = 2 * p * jari_jari;
		cout << "luasnya adalah: " << luas;
		cout << "\nkelilingnya adalah: " << keliling;
	}
	
	void jajar_genjang(){
		int a, b, luas, keliling, tinggi;
		cout << "masukkan a: ";
		cin >> a;
		cout << "masukkan b: ";
		cin >> b;
		cout << "masukkan tinggi: ";
		cin >> tinggi;
		keliling = 2 * (a + b);
		luas = a * tinggi;
		cout << "luas nya adalah: " << luas;
		cout << "\nkelilingnya adalah: " << keliling;
	}
	
	void kubus(){
		int sisi, keliling, volume, luas;
		cout << "masukkan sisi: ";
		cin >> sisi;
		keliling = 12 * sisi;
		luas = 6 * sisi * sisi;
		volume = sisi * sisi * sisi;
		cout << "kelilingnya adalah: " << keliling;
		cout << "\nluasnya adalah: " << luas;
		cout << "\nvolumenya adalah: " << volume;
	}
	
	void balok(){
		int panjang, lebar, tinggi, volume, keliling, luas;
		cout << "masukkan panjang: ";
		cin >> panjang;
		cout << "masukkan lebar: ";
		cin >> lebar;
		cout << "masukkan tinggi: ";
		cin >> tinggi;
		volume = panjang * tinggi * lebar;
		keliling = 4 * (panjang + lebar + tinggi);
		luas = 2 * panjang * lebar + 2 * panjang * lebar + 2 * tinggi * lebar;
		cout << "volumenya adalah: " << volume;
		cout << "\nkelilingnya adalah: " << keliling;
		cout << "\nluasnya adalah: " << luas;
	}
	
	void limas (){
		int volume, alas, tinggi, luas;
		cout << "masukkan alas: ";
		cin >> alas;
		cout << "masukkan tinggi: ";
		cin >> tinggi;
		volume = 0.1 * luas * tinggi;
		luas = alas * tinggi / 2;
		cout << "luas: " << luas;
		cout << "\nvolume: " << volume;
}
	void prisma() {
		int alas, tinggi, luas, luas_alas, keliling, keliling_alas;
		float volume;
		cout << "masukkan alas: ";
		cin >> alas;
		cout << "masukkan tinggi: ";
		cin >> tinggi;
		volume =  (1/2 * alas * tinggi) * tinggi;
		luas = 2 *alas + alas *tinggi;
		cout << "luas: " << luas;
		cout << "\nvolume: " << volume;
	}
	
	void bola (){
		int volume, rusuk, luas;
		float p;
		cout << "masukkan rusuk: ";
		cin >> rusuk;
		p = 3.14;
		volume = 4/3 * p * rusuk * rusuk * rusuk;
		luas =  4 * p * rusuk * rusuk;
		cout << "volume: " << volume;
		cout << "luas: " << luas;
	}
	
	int main() {
		start:
		int pilihan;
		cout << "1. luas persegi";
		cout << "\n2. luas segitiga";
		cout << "\n3. persegi panjang";
		cout << "\n4. lingkaran";
		cout << "\n5. jajar genjang";
		cout << "\n6. kubus";
		cout << "\n7. balok";
		cout << "\n8. limas";
		cout << "\n9. prisma";
		cout << "\n10. bola";
		cout << "\nsilakan pilih program: ";
		cin >> pilihan;
		
		switch (pilihan) {
			case 1:
				cout << "you chose luas persegi\n";
				luas_persegi();
				break;
				
			case 2:
				cout << "you chose luas segitiga\n";
				luas_segitiga();
				break;
				
				case 3:
					persegi_panjang();
					break;
					
					case 4:
						lingkaran ();
						break;
						
						case 5:
							jajar_genjang();
							break;
							
							case 6:
							 kubus();
							 break;
							 
							 case 7:
							 	balok();
							 	break;
							 	
							 	case 8:
							 		limas ();
							 		break;
							 		
							 		case 9:
							 			prisma();
							 			break;
							 			
							 			case 10:
							 				bola ();
							 				break;
				
				default:
					cout <<"\n         error";
		} cout << endl; 
		goto start;
	}