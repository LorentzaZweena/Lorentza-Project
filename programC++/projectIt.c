#include <stdio.h>
#include <string.h>
#include <strings.h>

#define MAX 100
#define MAX_TYPES 20

typedef struct {
    char name[50];
    char roomType[20];
    int roomCount;
    int nights;
    float pricePerNight;
    float totalCost;
} Reservation;

typedef struct {
    char name[20];
    float pricePerNight;
    char description[150];
} RoomType;

Reservation data[MAX];
int totalReservations = 0;

RoomType roomTypes[MAX_TYPES] = {
    {"single", 300000, "Single room with 1 bed, suitable for 1 person."},
    {"double", 500000, "Double room with 2 beds, suitable for a small family."},
    {"vip", 1000000, "VIP room with full service, view, and exclusive facilities."}
};
int totalRoomTypes = 3;

float getPriceFromType(const char *type) {
    for (int i = 0; i < totalRoomTypes; i++) {
        if (strcasecmp(roomTypes[i].name, type) == 0)
            return roomTypes[i].pricePerNight;
    }
    return 0;
}

void addReservation() {
    Reservation r;
    printf("\n=== Add Reservation ===\n");
    printf("Customer name: ");
    scanf(" %[^\n]", r.name);

    printf("Room type : ");
    scanf(" %19s", r.roomType);

    float price = getPriceFromType(r.roomType);
    if (price == 0) {
        printf("Room type '%s' is not available. Please check the list of room types.\n", r.roomType);
        return;
    }

    printf("Number of rooms: ");
    scanf("%d", &r.roomCount);

    printf("Number of nights: ");
    scanf("%d", &r.nights);

    r.pricePerNight = price;
    r.totalCost = r.pricePerNight * r.roomCount * r.nights;

    if (totalReservations < MAX) {
        data[totalReservations++] = r;
        printf("\nReservation added successfully!\n");
    } else {
        printf("Data capacity full. Cannot add more reservations.\n");
    }
}

void showAllReservations() {
    printf("\n=== Reservation Data ===\n");
    if (totalReservations == 0) {
        printf("No reservation data yet.\n");
        return;
    }
    for (int i = 0; i < totalReservations; i++) {
        printf("\nReservation #%d\n", i + 1);
        printf("Name: %s\n", data[i].name);
        printf("Room type: %s\n", data[i].roomType);
        printf("Number of rooms: %d\n", data[i].roomCount);
        printf("Nights: %d\n", data[i].nights);
        printf("Price per night: Rp %.0f\n", data[i].pricePerNight);
        printf("Total cost: Rp %.0f\n", data[i].totalCost);
    }
}

void searchReservationByName() {
    char search[50];
    printf("\nEnter customer name: ");
    scanf(" %[^\n]", search);
    int found = 0;
    for (int i = 0; i < totalReservations; i++) {
        if (strcasecmp(data[i].name, search) == 0) {
            printf("\nFound!\n");
            printf("Name: %s\nType: %s\nRooms: %d\nNights: %d\nTotal: Rp %.0f\n",
                   data[i].name, data[i].roomType, data[i].roomCount, data[i].nights, data[i].totalCost);
            found = 1;
        }
    }
    if (!found) printf("No data found.\n");
}

void searchRoomType() {
    char search[20];
    printf("\nEnter room type to search (e.g. vip): ");
    scanf(" %19s", search);
    int found = 0;
    for (int i = 0; i < totalRoomTypes; i++) {
        if (strcasecmp(roomTypes[i].name, search) == 0) {
            printf("\nRoom type found:\n");
            printf("Type name  : %s\n", roomTypes[i].name);
            printf("Price/night: Rp %.0f\n", roomTypes[i].pricePerNight);
            printf("Description: %s\n", roomTypes[i].description);
            found = 1;
            break;
        }
    }
    if (!found) {
        printf("Room type '%s' not found.\n", search);
    }
}

void showAllRoomTypes() {
    printf("\n=== List of Room Types ===\n");
    for (int i = 0; i < totalRoomTypes; i++) {
        printf("%d. %s - Rp %.0f / night\n", i + 1, roomTypes[i].name, roomTypes[i].pricePerNight);
        printf("   %s\n", roomTypes[i].description);
    }
}

void sortRoomTypes() {
    for (int i = 0; i < totalRoomTypes - 1; i++) {
        for (int j = i + 1; j < totalRoomTypes; j++) {
            if (strcasecmp(roomTypes[i].name, roomTypes[j].name) > 0) {
                RoomType tmp = roomTypes[i];
                roomTypes[i] = roomTypes[j];
                roomTypes[j] = tmp;
            }
        }
    }
    printf("\nRoom types sorted (A–Z):\n");
    showAllRoomTypes();
}

void addRoomType() {
    if (totalRoomTypes >= MAX_TYPES) {
        printf("Room type capacity full.\n");
        return;
    }
    RoomType r;
    printf("\n=== Add Room Type ===\n");
    printf("Type name (no spaces, e.g. suite): ");
    scanf(" %19s", r.name);
    printf("Price per night: ");
    scanf("%f", &r.pricePerNight);
    printf("Short description (max 140 characters): ");
    getchar();
    fgets(r.description, sizeof(r.description), stdin);
    size_t len = strlen(r.description);
    if (len > 0 && r.description[len - 1] == '\n') r.description[len - 1] = '\0';

    for (int i = 0; i < totalRoomTypes; i++) {
        if (strcasecmp(roomTypes[i].name, r.name) == 0) {
            printf("Room type '%s' already exists.\n", r.name);
            return;
        }
    }

    roomTypes[totalRoomTypes++] = r;
    printf("Room type '%s' added successfully.\n", r.name);
}

void searchReservationByCost() {
    float search;
    printf("\nEnter total cost to search (Rp): ");
    scanf("%f", &search);
    int found = 0;
    for (int i = 0; i < totalReservations; i++) {
        if (data[i].totalCost == search) {
            printf("\nName: %s\nRoom type: %s\nRooms: %d\nNights: %d\nTotal: Rp %.0f\n",
                   data[i].name, data[i].roomType, data[i].roomCount, data[i].nights, data[i].totalCost);
            found = 1;
        }
    }
    if (!found) printf("No reservation with that total cost.\n");
}

void sortReservationsByCost() {
    for (int i = 0; i < totalReservations - 1; i++) {
        for (int j = i + 1; j < totalReservations; j++) {
            if (data[i].totalCost > data[j].totalCost) {
                Reservation tmp = data[i];
                data[i] = data[j];
                data[j] = tmp;
            }
        }
    }
    printf("\nReservations sorted by total cost (cheapest -> most expensive).\n");
    showAllReservations();
}

void sortReservationsByName() {
    for (int i = 0; i < totalReservations - 1; i++) {
        for (int j = i + 1; j < totalReservations; j++) {
            if (strcasecmp(data[i].name, data[j].name) > 0) {
                Reservation tmp = data[i];
                data[i] = data[j];
                data[j] = tmp;
            }
        }
    }
    printf("\nData sorted by customer name (A–Z).\n");
    for (int i = 0; i < totalReservations; i++) {
        printf("%d. %s\n", i + 1, data[i].name);
    }
}

void showReceipt() {
    char name[50];
    printf("\nEnter customer name for receipt: ");
    scanf(" %[^\n]", name);
    int found = 0;
    for (int i = 0; i < totalReservations; i++) {
        if (strcasecmp(data[i].name, name) == 0) {
            printf("\n======= RESERVATION RECEIPT =======\n");
            printf("Name           : %s\n", data[i].name);
            printf("Room type      : %s\n", data[i].roomType);
            printf("Number of rooms: %d\n", data[i].roomCount);
            printf("Nights         : %d\n", data[i].nights);
            printf("Price/night    : Rp %.0f\n", data[i].pricePerNight);
            printf("Total cost     : Rp %.0f\n", data[i].totalCost);
            printf("===================================\n");
            found = 1;
        }
    }
    if (!found) printf("Name not found!\n");
}

int main() {
    int menu, sub;

    do {
        printf("\n===== HOTEL MANAGEMENT SYSTEM =====\n");
        printf("1. Room reservation\n");
        printf("2. Room types\n");
        printf("3. Show receipt\n");
        printf("4. Cost management\n");
        printf("5. Exit\n");
        printf("Choose menu: ");
        if (scanf("%d", &menu) != 1) {
            printf("Invalid input.\n");
            return 0;
        }

        switch (menu) {
            case 1:
                do {
                    printf("\n=== ROOM RESERVATION MENU ===\n");
                    printf("1. Add reservation\n");
                    printf("2. Search by name\n");
                    printf("3. Sort by name (A-Z)\n");
                    printf("4. Show all reservations\n");
                    printf("5. Back to main menu\n");
                    printf("Choose: ");
                    scanf("%d", &sub);
                    if (sub == 1) addReservation();
                    else if (sub == 2) searchReservationByName();
                    else if (sub == 3) sortReservationsByName();
                    else if (sub == 4) showAllReservations();
                } while (sub != 5);
                break;

            case 2:
                do {
                    printf("\n=== ROOM TYPE MENU ===\n");
                    printf("1. Search by type (show details)\n");
                    printf("2. Sort by type (A-Z)\n");
                    printf("3. Show all room types\n");
                    printf("4. Back to main menu\n");
                    printf("Choose: ");
                    scanf("%d", &sub);
                    if (sub == 1) searchRoomType();
                    else if (sub == 2) sortRoomTypes();
                    else if (sub == 3) showAllRoomTypes();
                } while (sub != 4);
                break;

            case 3:
                showReceipt();
                break;

            case 4:
                do {
                    printf("\n=== COST MANAGEMENT MENU ===\n");
                    printf("1. Search by total cost\n");
                    printf("2. Sort by total cost (cheapest -> most expensive)\n");
                    printf("3. Show all reservations (to view cost)\n");
                    printf("4. Back to main menu\n");
                    printf("Choose: ");
                    scanf("%d", &sub);
                    if (sub == 1) searchReservationByCost();
                    else if (sub == 2) sortReservationsByCost();
                    else if (sub == 3) showAllReservations();
                } while (sub != 4);
                break;

            case 5:
                printf("\nThank you for using this system!\n");
                break;

            default:
                printf("Invalid choice!\n");
        }
    } while (menu != 5);

    return 0;
}

