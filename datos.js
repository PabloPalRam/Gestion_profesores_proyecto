//Formato de salida de la petición de asignarlecciones.Metodo GET
let salida = {
    "profesores": [
        {
            "nombre": "nombreprofesor1",
            "userseneca": "profesor12",
            "id": 1
        },
        {
            "nombre": "prueba12",
            "userseneca": "usersenecaPrueba1",
            "id": 2
        },
        {
            "nombre": "pepe",
            "userseneca": "Pepe2531",
            "id": 9
        }
    ],
    "lecciones": [
        {
            "modulo": "modulo34",
            "horas": 8,
            "grupo": "Grupo1",
            "turno": "Tardes",
            "especialidad": "informatico",
            "idleccion": 13

        },
        {
            "modulo": "Desarrollo web entorno cliente",
            "horas": 123,
            "grupo": "Grupo1",
            "turno": "Tardes",
            "especialidad": "sistemas",
            "idleccion": 14
        },
        {
            "modulo": "modulo34",
            "horas": 8,
            "grupo": "Desarrollo web entorno cliente",
            "turno": "ma\u00f1ana",
            "especialidad": "informatico",
            "idleccion": 15
        },
        {
            "modulo": "Desarrollo web entorno cliente",
            "horas": 123,
            "grupo": "Desarrollo web entorno cliente",
            "turno": "ma\u00f1ana",
            "especialidad": "sistemas",
            "idleccion": 16
        }
    ]
}

//Formato de entrada de la petición de asignarlecciones.Metodo Post
let entrada = {

    "lecciones": [
        {
            "horas": 8,
            "idleccion": 13,
            "idprofesor": 1

        },
        {

            "horas": 123,
            "idleccion": 14,
            "idprofesor": 2

        },
        {
            "horas": 8,
            "idleccion": 15,
            "idprofesor": 3
        },
        {
            "horas": 123,
            "idleccion": 16,
            "idprofesor": 2
        }
    ]
}
