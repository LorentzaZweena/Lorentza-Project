#include <stdio.h>
#include <string.h>
#include <ctype.h>

#define SIZE 26

struct Akun {
    char username[50];
    char password[50];
    int used;
};

struct Akun hashTable[SIZE];

int hashFunction(char key[]) {
    return tolower(key[0]) - 'a';
}

void insert() {
    char username[50], password[50];

    printf("Masukkan Username: ");
    scanf("%s", username);

    printf("Masukkan Password: ");
    scanf("%s", password);

    int index = hashFunction(username);

    // Linear Probing jika collision
    while (hashTable[index].used == 1) {
        index = (index + 1) % SIZE;
    }

    strcpy(hashTable[index].username, username);
    strcpy(hashTable[index].password, password);
    hashTable[index].used = 1;

    printf("Akun berhasil ditambahkan!\n");
}

void display() {
    int i;

    printf("\nData akun\n");

    for (i = 0; i < SIZE; i++) {
        if (hashTable[i].used == 1) {
            printf("[%d] Username: %s | Password: %s\n",
                   i,
                   hashTable[i].username,
                   hashTable[i].password);
        }
    }
}

int search(char username[]) {
    int index = hashFunction(username);
    int start = index;

    while (hashTable[index].used != 0) {

        if (strcmp(hashTable[index].username, username) == 0) {
            return index;
        }

        index = (index + 1) % SIZE;

        if (index == start) {
            break;
        }
    }

    return -1;
}

void update() {
    char username[50];
    char newPassword[50];

    printf("Masukkan username yang ingin diupdate: ");
    scanf("%s", username);

    int index = search(username);

    if (index != -1) {

        printf("Masukkan password baru: ");
        scanf("%s", newPassword);

        strcpy(hashTable[index].password, newPassword);

        printf("Password berhasil diupdate!\n");

    } else {
        printf("Username tidak ditemukan!\n");
    }
}

void deleteData() {
    char username[50];

    printf("Masukkan username yang ingin dihapus: ");
    scanf("%s", username);

    int index = search(username);

    if (index != -1) {

        hashTable[index].used = 0;

        strcpy(hashTable[index].username, "");
        strcpy(hashTable[index].password, "");

        printf("Data berhasil dihapus!\n");

    } else {
        printf("Username tidak ditemukan!\n");
    }
}

int main() {

    int pilih;

    do {
        printf("\nMenu\n");
        printf("1. Insert\n");
        printf("2. Display\n");
        printf("3. Update\n");
        printf("4. Delete\n");
        printf("5. Exit\n");
        printf("Pilih: ");
        scanf("%d", &pilih);

        switch (pilih) {

        case 1:
            insert();
            break;

        case 2:
            display();
            break;

        case 3:
            update();
            break;

        case 4:
            deleteData();
            break;

        case 5:
            printf("Program selesai.\n");
            break;

        default:
            printf("Pilihan tidak valid!\n");
        }

    } while (pilih != 5);

    return 0;
}
