function cambiouniversidad(){
    //Creo las variables que se va a llevar
        var data = {
            reg_Departamento: $('select[name="ciudad_id"]').val()
        };
        //hacer las solicitudes al servidor
        var URLactual = window.location+""; 
        if (URLactual.indexOf("niversidad")!=-1) {
            URLactual = URLactual.substring(0, URLactual.indexOf("niversidad")+10);
        }else{
            URLactual = URLactual+'universidad';
        };

        $.ajax({
            url: URLactual+ "/CargarUniversidad",
            type: 'post',
            data: data,
            success: function(info){
                $("#universidad_id").empty();
                if (info === 'false') {
                    console.log('no found');
                   $("#universidad_id").append('<option value="" selected="">Seleccione una Universidad</option>');
                }else{
                    modResponse = $.parseJSON(info);
                    $.each(modResponse, function (i, dataCon) {
                        $("#universidad_id").append('<option value="' + i + '">' + dataCon + '</option>');
                        console.log(i);
                    });
                }
            }       
        });
};

function cambioCarrera(){
    //Creo las variables que se va a llevar
        var data = {
            reg_universidad: $('select[name="universidad_id"]').val(),
            reg_tipoEstudio: $('select[name="tipo_estudio_id"]').val()
        };
        //hacer las solicitudes al servidor
        var URLactual = window.location+""; 
        if (URLactual.indexOf("niversidad")!=-1) {
            URLactual = URLactual.substring(0, URLactual.indexOf("niversidad")+10);
        }else{
            URLactual = URLactual+'universidad';
        };

        $.ajax({
            url: URLactual+ "/CargarCarrera",
            type: 'post',
            data: data,
            success: function(info){
                $("#carrera_id").empty();
                if (info === 'false') {
                    console.log('no found');
                   $("#carrera_id").append('<option value="" selected="">Seleccione una Carrera</option>');
                }else{
                    modResponse = $.parseJSON(info);
                    $.each(modResponse, function (i, dataCon) {
                        $("#carrera_id").append('<option value="' + i + '">' + dataCon + '</option>');
                        console.log(i);
                    });
                }
            }       
        });
};

function mostrarCarrera(){
    //Creo las variables que se va a llevar
        var data = {
            reg_universidad: $('select[name="universidad_id"]').val(),
            reg_tipoEstudio: $('select[name="tipo_estudio_id"]').val(),
            reg_ciudad: $('select[name="ciudad_id"]').val()
        };
        //hacer las solicitudes al servidor
        var URLactual = window.location+""; 
        if (URLactual.indexOf("niversidad")!=-1) {
            URLactual = URLactual.substring(0, URLactual.indexOf("niversidad")+10);
        }else{
            URLactual = URLactual+'universidad';
        };

        $.ajax({
            url: URLactual+ "/infoCarrera",
            type: 'post',
            data: data,
            success: function(info){
                $("#infoCarrera").empty();
                if (info === 'false') {
                   $("#infoCarrera").append('<p>No existen datos de esa carrera</p>');
                }else{
                    modResponse = $.parseJSON(info);
                    $.each(modResponse, function (i) {
                        $("#infoCarrera").append('<div style="background:#fff;padding:5%;border:2px solid;font-size:18px;margin-bottom:2%"><center><h3><strong>'+ modResponse[i].carrera_nombre.toUpperCase() +'</strong></h3></center><p><strong>Ciudad:</strong> '+ modResponse[i].ciudad_nombre +'</p><p><strong>Universidad:</strong> '+ modResponse[i].universidad_nombre +'</p><p><strong>Facultad:</strong> '+ modResponse[i].carrera_facultad +'</p><p><strong>Énfasis:</strong> '+ modResponse[i].enfasis +'</p><p><strong>Nivel de estudio:</strong> '+ modResponse[i].tipo_estudio_nombre +'</p><p><strong>Duración (Años):</strong> '+ modResponse[i].carrera_duracion +'</p><p><strong>Idioma:</strong> '+ modResponse[i].carrera_idioma +'</p><p><strong>Costo anual:</strong> '+ modResponse[i].carrera_costo +'</p><p><strong>Moneda:</strong> Rublos</p></div>');
                    });
                }
            }       
        });
};

function buscarCarreraPorTexto(){
    //Creo las variables que se va a llevar
        var data = {
            reg_carrera: $('input[name="buscar"]').val(),
            reg_tipoEstudio: $('select[name="tipo_estudio_id1"]').val()
        };
        //hacer las solicitudes al servidor
        var URLactual = window.location+""; 
        if (URLactual.indexOf("niversidad")!=-1) {
            URLactual = URLactual.substring(0, URLactual.indexOf("niversidad")+10);
        }else{
            URLactual = URLactual+'universidad';
        };

        $.ajax({
            url: URLactual+ "/buscarTexto",
            type: 'post',
            data: data,
            success: function(info){
                $("#infoCarrera").empty();
                if (info === 'false') {
                   $("#infoCarrera").append('<p>No existen datos de esa carrera</p>');
                }else{
                    modResponse = $.parseJSON(info);
                    $.each(modResponse, function (i) {
                        $("#infoCarrera").append('<div style="background:#fff;padding:5%;border:2px solid;font-size:18px;margin-bottom:2%"><center><h3><strong>'+ modResponse[i].carrera_nombre.toUpperCase() +'</strong></h3></center><p><strong>Ciudad:</strong> '+ modResponse[i].ciudad_nombre +'</p><p><strong>Universidad:</strong> '+ modResponse[i].universidad_nombre +'</p><p><strong>Facultad:</strong> '+ modResponse[i].carrera_facultad +'</p><p><strong>Énfasis:</strong> '+ modResponse[i].enfasis +'</p><p><strong>Nivel de estudio:</strong> '+ modResponse[i].tipo_estudio_nombre +'</p><p><strong>Duración (Años):</strong> '+ modResponse[i].carrera_duracion +'</p><p><strong>Idioma:</strong> '+ modResponse[i].carrera_idioma +'</p><p><strong>Costo anual:</strong> '+ modResponse[i].carrera_costo +'</p><p><strong>Moneda:</strong> Rublo</p></div>');
                    });
                }
            }       
        });
};
