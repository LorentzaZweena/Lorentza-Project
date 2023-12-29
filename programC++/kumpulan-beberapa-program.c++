#include <iostream>
using namespace std;

void zakat(){
	int penghasilan, pendapatan, y, utang;
	float l;
	system("cls");
	cout << "---------------------------------------------------------";
	cout << "\n--------------------------- ZAKAT ---------------------";
	cout << "\n-------------------------------------------------------";
	cout << "\ninputkan penghasilan per bulan: ";
	cin >> penghasilan;
	cout << "\ninputkan pendapatan lain per bulan: ";
	cin >> pendapatan;
	cout << "\ninputkan utang / cicilan (jika ada): ";
	cin >> utang;
	cout << "\n=========================================================";
	
	y = penghasilan + pendapatan - utang;
	l = penghasilan * 0.025;
	cout << "\npenghasilan: " << penghasilan;
	cout << "\npendapatan: " << pendapatan;
	cout << "\nutang / cicilan: " << utang;
	cout << "\njumlah yang dizakati adalah: " << l;
}

void berat_badan(){
	float berat, hasil, tinggi, tambahan, hasil2;
	system("cls");
	cout << "=======================================================";
	cout << "\n********************** BERAT BADAN ******************";
	cout << "\nTinggi badan mu: ";
	cin >> tinggi;
	cout << "\ntinggi yang kamu input: "<< tinggi;
	hasil = 10 / 100 * tinggi;
	hasil2 = tinggi - 100 - hasil;
	
	cout << "\n"; 
	
	cout << "berat badan idealmu adalah: " << hasil2 << " KG";
	
	if (berat >= 61){
		cout << "Ideal";
	} else if (berat >= 62 ){
		cout << "Ideal";
	} else if (berat >= 67){
	cout << "lumayan ideal";
    } else if (berat >= 70){
	cout << "sedikit ideal";
    } else if (berat > 95){
	cout << "obesitas";
    } 
}

void fidyah(){
	int makan, puasa, k;
	system("cls");
	cout <<"==================================================";
	cout <<"\n************************* FIDYAH ***************";
	cout << "\ninputkan pengeluaran makan 1 hari: ";
	cin >> makan;
	cout << "\njumlah puasa yg harus dibayar: ";
	cin >> puasa;
	
	k = makan * puasa;
	cout << "\njumlahnya adalah: " << k;
}

void pajak(){
	int gaji, netto, PTKP, PKP, PPH;
	system("cls");
	cout << "=============================================";
	cout << "\n********************* PAJAK ***************";
	cout << "\ninputkan gaji per bulan: ";
	cin >> gaji;
	
	netto = gaji * 12;
	if (netto >= 54000000){
	
	PTKP = 54000000;
	PKP = netto - PTKP;
	if (PKP <= 50000000){
		cout << "pajak 5%";
		PPH = 0.05 * PKP;
	}else if (PKP >= 50000000){
		cout << "pajak 15%";
		PPH = 0.15 * PKP;
	}else if (PKP >= 250000000){
		cout << "pajak 25%";
		PPH = 0.25 * PKP;
	}else if (PKP >= 500000000){
		cout << "pajak 30%";
		PPH = 0.30 * PKP;
	} cout << "\ntotal yg dibayar adalah: " << PPH;
} cout << "\n=================================================";
  cout << "\ngaji per bulan:Rp " << gaji;
  cout << "\nnetto: Rp " << netto;
  cout << "\nPTKP: Rp " << PTKP;
  cout << "\nPKP: Rp " << PKP;
  cout << "\ntotal PPH: Rp " << PPH; 
} 

void gaji_karyawan(){
	int data, i;
	char w;
	int a=1;
	system("cls");
	
	
		
	cout << "## Program mengitung gaji karyawan ##";
	cout << "\n=====================================";
	
	cout << "\nbanyak data yg akan diinput: ";
	cin >> data;
	
	cout << endl;
												
	string name[1000];
	char golongan[1000];
	int jam_kerja[1000],upah[1000], total_upah[1000];
	
	
	for (i=0; i< data; i++) {
		cout << "data ke " << i+1 << endl;
		cout << "insert name:  ";
		cin >> name[i];
		cout << "insert golongan:  ";
		cin >> golongan[i];
		cout << "insert jam kerja: ";
		cin >> jam_kerja[i];		
	
		switch (golongan[i]) {
			case 'A' :
				upah[i] = 5000;
				break;
				
				case 'B' :
					upah[i] = 7000;
					break; 
		}
		
		total_upah[i] = jam_kerja[i] * upah[i];
	} 
		cout << endl;
		cout << "Daftar karyawan" << endl;
		cout << "===================================" << endl;
		cout << "NO" << "                     " << "nama" << "                     " << "golongan" << "                     " << "jam kerja" << "                     " << "upah per jam" << "\n";
		
		for (i=0; i< data; i++) {
			cout << i+1 << "                      " << name[i] <<"                      " << golongan[i] << "                      " << jam_kerja[i] << "                      " << upah[i] << "                  " << total_upah[i] << endl;  
		}
}

void kasir_diskon(){
	int input, i, e;
	char a;
	system("cls");
	
		cout << "---------------------------------------------------------------------";
		cout << "\n------------------------------- CASHIER ---------------------------";
		cout << "\nbanyak barang yg akan dibeli: ";
		cin >> input;
		cout << endl;
		
		string barang[1000];
		int jumlah_barang[1000], harga[1000], hasil[1000], hasil2[1000], discount, q;
		float jumlah;
		
		for (i = 0; i < input; i++){
			cout << "inputkan barang: " << i + 1 << " : ";
			cin >> barang[i];
			cout << "inputkan jumlah: " << i + 1 << " : ";
			cin >> jumlah_barang[i];
			cout << "inputkan harga: " << i + 1 << " : ";
			cin >> harga[i];
		} cout << "\n\n" << "---------------------------------------------\n";
		cout << "NO" << "                " << "barang" << "                " << "jumlah" << "                " << "harga" << "                " << "subtotal" << "\n";
	for (i = 0; i < input; i++){
		e = jumlah_barang[i];
		hasil2[i] = jumlah_barang[i] * harga[i];
		cout << i + 1 << barang[i] << "                " << jumlah_barang[i] << "                " << harga[i] << "                " << hasil2[i] << "\n";
		cout << "\n";
		jumlah += hasil2[i];
	} if (jumlah >= 100000){
		discount = jumlah * 0.5;
		q = 50;
	} else if (jumlah >= 50000){
		discount = jumlah * 0.2;
		q = 20;
	} else if (jumlah >= 50000){
		discount = jumlah * 0;
		q = 0;
	}
	cout << "--------------------------------------------------\n";
	cout << "total bayar: " << jumlah << endl;
	cout << "discount: " << q << "%\n";
	cout << "total bayar: " << discount << endl;
}

void parkir(){
	int i, l, tarif, tarif2, jam_berikutnya, jam_berikutnya2, denda;
	system("cls");
	cout << "=======================TARIF PARKIR=================";
	cout << "\n1. mobil";
	cout << "\n2. motor";
	
	cout << "\nmasukkan jenis kendaraan: ";
	cin >> i;
	
	cout << "\nmasukkan lama parkir: ";
	cin >> l;
	
	if (i == 1 ) {
		tarif = 3000;
		jam_berikutnya = 1000;
		cout << "2 jam pertama: " << tarif;
		cout << "\njam berikutnya: " << jam_berikutnya;
		if (l >= 2 ) {
			denda = (l * 1000) - 3000;
			tarif = 3000 + denda;
			cout << "\ntarif anda: " << tarif;
		} else {
			tarif = 3000 + 0;
			cout << "\ntarif anda: " << tarif;
		}
		
		if (i == 2) {
			tarif2 = 2000;
			jam_berikutnya = 1000;
			cout << "2 jam pertama: " << tarif2;
			cout << "\njam berikutnya: " << jam_berikutnya2;
		}
	} else if (l >= 2 ) {
			tarif = 2000 + 1000;
			cout << "\ntarif anda: " << tarif2;
			if (l >= 2 ) {
				denda = (l * 1000) - 2000;
			tarif = 2000 + denda;
			cout << "\ntarif anda: " << tarif;
		} else {
			tarif = 2000 + 0;
			cout << "\ntarif anda: " << tarif;
		}
} else {
	tarif = 2000 + 0;
	cout << "\ntarif anda: " << tarif2;
}
}

void ticket(){
	int no_ticket, i, ticket, dewasa, anak, harga;
	system("cls");
	
	cout << "------------------------------------------------------";
	cout << "\n----------------------- TICKET ---------------------";
	cout << "\n1. Dewasa";
	cout << "\n2. Anak";
	cout << "\npilih nomor ticket: ";
	cin >> no_ticket;
	
	cout << "jumlah ticket yg dibeli: ";
	cin >> ticket;
	
	if (no_ticket ==1){
		cout << "dewasa / anak ";
		cin >> i;
		
		if (i == dewasa){
			harga = 250000 * ticket;
			cout << "harga tiket adalah: " << harga;
		
		} else if (i == anak) {
			harga = 150000 * ticket;
			cout << "\nharga tiket adalah: " << harga;
		} else {
			"\nerror";
		} 
	} if (no_ticket == 2){
		cout << "dewasa / anak ";
		cin >> i;
	} 
		if (i == dewasa) {
			harga = 400000 * ticket;
			cout << "harga tiket adalah: " << harga;
		} else if (i == anak) {
			harga = 180000 * ticket;
			cout << "\nharga tiket adalah: " << harga;
		} else {
			"\nerror";
		}
}

void nilai(){
	int i, nilai;
	char q;
	int a=1;
	system("cls");
	
		cout << "======================================= NILAI DATA ========================================================";
		cout << "\n=========================================================================================================";
		
		cout << "\nbanyaknya nilai yg akan diinput: ";
		cin >> nilai;
		
		cout << endl;
		
		string nama[1000];
		int mid_tes[1000];
		int final[1000];
		float average[1000];
		
		for (i=0; i< nilai; i++) {
		cout << "data ke " << i+1 << endl;
		cout << "insert name:  ";
		cin >> nama[i];
		cout << "insert nilai mid tes:  ";
		cin >> mid_tes[i];
		cout << "insert nilai final: ";
		cin >> final[i];
		
		average[i] = (mid_tes[i] + final[i]) / 2;		
	}
		cout << endl;
		cout << "======================================================== DAFTAR NILAI =================================";
		cout << "==================================================================================" << endl;
		cout << "NO" << "                     " << "nama" << "                     " << "nilai mid tes" << "                     " << "nilai final" << "                     " << "rata rata" << "\n";
		
		for (i=0; i< nilai; i++) {
			cout << i+1 << "                      " << nama[i] <<"                      " << mid_tes[i] << "                      " << final[i] << "                      " << average[i] << "                  " << endl;  
		}
		
}

void suhu(){
	float celcius, kelvin, fahrenheit, reamur;
	system("cls");
	cout << "------------------------------------------------------------";
	cout << "\n----------------------------- C, K, F, R -----------------";
	cout << "\nsilakan input celcius: ";
	cin >> celcius;
	
	kelvin = celcius + 273;
	fahrenheit = 9/5 * celcius + 32;
	reamur = 0.8 * celcius;
	cout << "\n";
	
	cout << "hasil konversi kelvin adalah: " << kelvin;
	cout << "\nhasil konversi fahrenheit adalah: " << fahrenheit;
	cout << "\nhasil konversi reamur adalah: " << reamur;
}

int main(){
	int pilihan;
	char w;
	do{
		system("cls");
	cout << "--------------------------------------------------------------------------------------------------";
	cout << "\n------------------------------------- PROGRAM ARIVA ZWEENA -------------------------------------";
	cout << "\n--------------------------------------------------------------------------------------------------";
	cout << "\n1. Program Zakat                                                                                 |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n2. Program berat badan                                                                           |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n3. Program fidyah                                                                                |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n4. Program Pajak                                                                                 |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n5. Program gaji karyawan                                                                         |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n6. Program Kasir + discount                                                                      |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n7. Program parkir                                                                                |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n8. program ticket safari                                                                         |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n9. program nilai mid tes                                                                         |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\n10. program suhu                                                                                 |";
	cout << "\n-------------------------------------------------------------------------------------------------|";
	cout << "\nsilakan pilih program: ";
	cin >> pilihan;
	
	switch (pilihan){
		case 1:
			zakat();
			break;
			case 2:
				berat_badan();
				break;
				
				case 3:
					fidyah();
					break;
					case 4 :
						pajak();
						break;
						case 5:
							gaji_karyawan();
							break;
							case 6:
								kasir_diskon();
								break;
								case 7:
									parkir();
									break;
									case 8:
										ticket();
										break;
										case 9:
											nilai();
											break;
											case 10:
												suhu();
												break;
						default:
							cout << "\nunknown command";
	} cout << "\nretry? (y/n): ";
	cin >> w; 
} while (w == 'y'  || w == 'Y');
}