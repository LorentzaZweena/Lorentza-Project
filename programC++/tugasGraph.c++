#include <iostream>
using namespace std;

struct Simpul {
    int info;
    Simpul *left, *right;
};

Simpul *P, *first, *last, *Q, *R;
Simpul *points[5];

int main() {
    int A[5][5] = {
        {0, 5, 0, 2, 0},
        {6, 0, 3, 0, 0},
        {0, 0, 0, 0, 9},
        {0, 0, 12, 0, 7},
        {0, 14, 0, 0, 0}
    };

    int NoSimpul[5] = {1, 2, 3, 4, 5};

    int i, j;
    P = new Simpul;
    P->info = NoSimpul[0];
    first = P;
    last = P;

    P->left = NULL;
    P->right = NULL;

    points[0] = P;

    for(i = 1; i < 5; i++) {

        P = new Simpul;
        P->info = NoSimpul[i];

        last->left = P;
        last = P;

        P->left = NULL;
        P->right = NULL;

        points[i] = P;
    }

    Q = first;

    cout << "Graph" << endl;

    for(i = 0; i < 5; i++) {

        R = Q;

        cout << "Vertex " << Q->info << " terhubung ke : " << endl;

        for(j = 0; j < 5; j++) {

            if(A[i][j] != 0) {

                P = new Simpul;

                P->info = A[i][j];

                R->right = P;
                P->left = points[j];

                cout << "Vertex "
                     << P->left->info
                     << " dengan bobot "
                     << P->info << endl;

                P->right = NULL;
                R = P;
            }
        }

        cout << endl;

        Q = Q->left;
    }

    int indegree[5] = {0};
    int outdegree[5] = {0};

    for(i = 0; i < 5; i++) {

        for(j = 0; j < 5; j++) {

            if(A[i][j] != 0) {

                outdegree[i]++;
                indegree[j]++;
            }
        }
    }

    cout << "Degree in and out" << endl;

    for(i = 0; i < 5; i++) {

        cout << "Vertex " << NoSimpul[i]
             << ", In Degree = " << indegree[i]
             << ", Out Degree = " << outdegree[i]
             << endl;
    }

    return 0;
}
