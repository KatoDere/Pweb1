$('document').ready(function () {

    presidentes = [{
            "Nombre": "Luis",
            "Edad": 25,
            "Direccion": "Jalisco 24",
            "Pais": 1,
        },
    
     ];

    var paises = [{
            Pais: "",
            Id: 0
        },
        {
            Pais: "México",
            Id: 1
        },
        {
            Pais: "Estados Unidos",
            Id: 2
        },
        {
            Pais: "Canada",
            Id: 3
        }
    ];


    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        data: presidentes,
        fields: [{
                name: "Nombre",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "Edad",
                type: "number",
                width: 50
            },
            {
                name: "Direccion",
                type: "text",
                width: 200
            },
            {
                name: "Pais",
                type: "select",
                items: paises,
                valueField: "Id",
                textField: "Pais"
            },
            {
                type: "control"
            }
        ]
    });

});