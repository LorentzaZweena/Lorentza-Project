#include <iostream>
using namespace std;

struct Node {
    int data;
    Node *left, *right, *parent;
};

Node *root = NULL;
void create(int data) {
    if (root != NULL) {
        cout << "Tree sudah dibuat!\n";
    } else {
        root = new Node();
        root->data = data;
        root->left = root->right = root->parent = NULL;
        cout << "Root dibuat\n";
    }
}

Node* insertLeft(int data, Node *parent) {
    if (root == NULL) {
        cout << "Tree belum ada!\n";
        return NULL;
    }
    if (parent->left != NULL) {
        cout << "Node kiri sudah ada!\n";
        return NULL;
    }

    Node *newNode = new Node();
    newNode->data = data;
    newNode->left = newNode->right = NULL;
    newNode->parent = parent;
    parent->left = newNode;

    return newNode;
}

Node* insertRight(int data, Node *parent) {
    if (root == NULL) {
        cout << "Tree belum ada!\n";
        return NULL;
    }
    if (parent->right != NULL) {
        cout << "Node kanan sudah ada!\n";
        return NULL;
    }

    Node *newNode = new Node();
    newNode->data = data;
    newNode->left = newNode->right = NULL;
    newNode->parent = parent;
    parent->right = newNode;

    return newNode;
}

void preOrder(Node *node) {
    if (node != NULL) {
        cout << node->data << " ";
        preOrder(node->left);
        preOrder(node->right);
    }
}

void inOrder(Node *node) {
    if (node != NULL) {
        inOrder(node->left);
        cout << node->data << " ";
        inOrder(node->right);
    }
}

void postOrder(Node *node) {
    if (node != NULL) {
        postOrder(node->left);
        postOrder(node->right);
        cout << node->data << " ";
    }
}

int size(Node *node) {
    if (node == NULL) return 0;
    return 1 + size(node->left) + size(node->right);
}

int height(Node *node) {
    if (node == NULL) return 0;

    int leftHeight = height(node->left);
    int rightHeight = height(node->right);

    return 1 + max(leftHeight, rightHeight);
}

void clear(Node *node) {
    if (node != NULL) {
        clear(node->left);
        clear(node->right);
        delete node;
    }
}

int main() {
    create(10);
    Node *n1 = insertLeft(5, root);
    Node *n2 = insertRight(15, root);

    insertLeft(3, n1);
    insertRight(7, n1);

    insertLeft(12, n2);
    insertRight(18, n2);

    cout << "PreOrder  : ";
    preOrder(root);

    cout << "\nInOrder   : ";
    inOrder(root);

    cout << "\nPostOrder : ";
    postOrder(root);

    cout << "\nSize      : " << size(root);
    cout << "\nHeight    : " << height(root);

    clear(root);
}
