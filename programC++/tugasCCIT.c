#include <stdio.h>

int main() {
    int pilihan;
    int kembali;

    do {
        printf("MENU\n");
        printf("1. Penjumlahan\n");
        printf("2. Pengurangan\n");
        printf("3. Perkalian\n");
        printf("4. Pembagian\n");
        printf("5. Exit\n");
        printf("Silakan input pilihan anda : ");
        
        if (scanf("%d", &pilihan) != 1) {
            while (getchar() != '\n');
            printf("Input tidak valid. Silakan masukkan angka yang valid.\n");
            continue;
        }

        switch(pilihan) {
            case 1:
                printf("Anda memilih menu Penjumlahan\n");
                printf("Tekan 1 untuk kembali ke menu: ");
                scanf("%d", &kembali);
                break;
            case 2:
                printf("Anda memilih menu Pengurangan\n");
                printf("Tekan 1 untuk kembali ke menu: ");
                scanf("%d", &kembali);
                break;
            case 3:
                printf("Anda memilih menu Perkalian\n");
                printf("Tekan 1 untuk kembali ke menu: ");
                scanf("%d", &kembali);
                break;
            case 4:
                printf("Anda memilih menu Pembagian\n");
                printf("Tekan 1 untuk kembali ke menu: ");
                scanf("%d", &kembali);
                break;
            case 5:
                printf("Program selesai!\n");
                return 0;
            default:
                printf("Pilihan tidak valid. Silakan coba lagi.\n");
                break;
        }

    } while (pilihan != 5);

    return 0;
}
