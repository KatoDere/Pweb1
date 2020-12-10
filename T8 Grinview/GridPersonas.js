$('document').ready(function () {

    $.post('GetPersonas.php', function (ret) {
    
            if ( ret['resultado'] !=0 ) {
                 alert('Error de carga');
            } else {
                 $("#jsGrid").jsGrid({
                 width: "100%",
                 height: "400px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: ret['detalle'],
                 onItemDeleted: function(args) {   console.log(args.item);  },
                 fields: [{ name: "idUsuario",type: "text",title: "ID",
                           width: 100,validate: "required"},
                         { name: "login",type: "text",title: "login",
                           width: 200},
                         { name: "Nombre",type: "text",title: "Nombre",
                           width: 200},
                         { name: "ApellidoPaterno",type: "text",title: "Ap.Paterno",
                           width: 200},
                         { name: "ApellidoMaterno",type: "text",title: "Ap.Materno",
                           width: 200},
                         { type: "control"}],
                });
            }
    
    },'json');
    
    
    });