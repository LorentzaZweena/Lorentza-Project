#include <iostream>
using namespace std;

#define MAX 5

int antrian[MAX];
int front = 0;
int back = 0;

bool isFull() {
    return back == MAX;
}

bool isEmpty() {
    return back == 0;
}

void enqueue(int data) {
    if (isFull()) {
        cout << "Antrian penuh!" << endl;
    } else {
        antrian[back] = data;
        back++;
    }
}

void dequeue() {
    if (isEmpty()) {
        cout << "Antrian kosong!" << endl;
    } else {
        for (int i = 0; i < back - 1; i++) {
            antrian[i] = antrian[i + 1];
        }
        back--;
    }
}

int count() {
    return back;
}

void display() {
    if (isEmpty()) {
        cout << "Antrian kosong" << endl;
    } else {
        for (int i = 0; i < back; i++) {
            cout << antrian[i] << " ";
        }
        cout << endl;
    }
}

void destroy() {
    front = 0;
    back = 0;
}

int main() {
    enqueue(72);
    enqueue(65);
    enqueue(87);
    enqueue(77);

    display();

    dequeue();
    display();

    cout << "Jumlah data: " << count() << endl;

    destroy();
    display();

    return 0;
}
