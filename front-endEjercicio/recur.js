$(document).ready(function(){
	    $("#Mpsot").click(function(e){
        e.preventDefault();
        
        var datos = {
            id: $("#id").val(),
            name: $("#name").val(),
            apellido: $("#apellido").val(),
            edad: $("#edad").val(),
            cursos: $("#cursos").val(),
            cuchilla: $("#cuchilla").val(),
        };
        
                $.ajax({
                  url: 'http://localhost/servicios/public/conexion.php/profesor',
                  type: 'POST',
                  data: datos,
                  dataType: 'json'
                })
                .done(function(data){
                 console.log("Exitoso");  
                })
                .fail(function(data){
                    alert("error");
                })
                .always(function(data){
                    alert("Complete");
                });
    });

    $("#obtener").click(function(e){
        e.preventDefault();
            
            
                $.ajax({
                  url: 'http://localhost/servicios/public/conexion.php/profesor/2', 
                  type: 'GET',
                 // data: datos,
                  dataType: 'json'
                }) 
              
             .done(function(data) {
               // $("#td1").text(data._id),
                $("#td2").text(data.nombre),
                $("#td3").text(data.apellido),
                $("#td4").text(data.edad);
                 //$("#td5").text(data.cursos);
                  //$("#td4").text(data.cuchilla);

               
              })
              .fail(function(data) {
                alert( "error" );
              })
              .always(function(data) {
                alert( "complete" );
                });
     
    });
});