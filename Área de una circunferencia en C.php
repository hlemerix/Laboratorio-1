#include <stdio.h>

int main() {
    float radio, area;
    const float PI = 3.14159;

    printf("Introduce el radio de la circunferencia: ");
    scanf("%f", &radio);

    area = PI * radio * radio;

    printf("El area de la circunferencia es: %.2f\n", area);

    return 0;
}