# Stack Kata

## Description

Una pila típica es un área de la memoria de los computadores con un origen fijo, 
un espacio para almacenar datos y un puntero. Al principio, su número de elementos 
es cero y la dirección del puntero coincide con la dirección de origen. 
Conforme van incorporándose datos, los elementos contenidos en la pila van incrementándose 
y el puntero va actualizando su dirección para hacerla coincidir con el último en incorporase.

Las dos operaciones aplicables a todas las pilas son:

* **Push:** colocar un nuevo dato en la pila. Se lee el puntero para localizar el último elemento, se incorpora a continuación de este y se redirecciona el puntero para que apunte al nuevo dato incorporado.
* **Pop:** extraer un dato de la pila. Se localiza el último dato mediante el puntero, se lee el dato y se redirecciona el puntero al elemento inmediato anterior para que vuelva a apuntar al último dato de la pila.

Una pila queda definida por su origen (una dirección de memoria), y su capacidad para 
almacenar datos. Cuando se intenta leer más allá de su origen (esto es, se intenta leer un 
elemento cuando está vacía) o cuando se intenta sobrepasar su capacidad de almacenar 
elementos, se produce un error: error por desbordamiento.

