console.log('correcto');

$(document).ready(function() {
	PintarTarjetas();
	//document.querySelector('#Tarjeta1').addEventListener('click', traerDatos);
	//document.querySelector('.Tarjetas').addEventListener('click', traerDatos);
	//poner_atributo();
});



$('#res').on('change', function() {
  // lo que queramos hacer
  PintarTarjetas();
});


function numerotarjeta(){
	x=2;
	alert(x);
return x;
}

function PintarTarjetas(){

	console.log("Funciono2");
	
	let res=document.querySelector('#TarjetasUsuario');
	n=numerotarjeta();
	i=0;
	//res.innerHTML='';
	while (i < n) {
		idtarjeta=i+1
		res.innerHTML += `
		  <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Tarjeta</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" onclick="llenardatos(`+idtarjeta+`)" class="Tarjetas" id="Tarjeta`+idtarjeta+`" value="`+idtarjeta+`"href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
		`
	  	i++;

	}

	//alert("El texto del botón es --> " + $("#boton").attr("value"));

	

	//document.querySelector('.Tarjetas').addEventListener('click', traerDatos);
}

function traerDatos(n){
	alert(n);
	console.log("Funciono");
	const xhttp = new XMLHttpRequest();
	archivo='tabla'+n+'.json';
	xhttp.open('Get',archivo,true);
	xhttp.send();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			let datos = JSON.parse(this.responseText);
			//console.log(datos);
			let res =document.querySelector('#res')
			res.innerHTML='';
			for(let item of datos){
				//console.log(item.Name)
				res.innerHTML += `
				 <tr>
	                <td>${item.Name}</td>
	                <td>${item.Position}</td>
	                <td>${item.Office}</td>
	                <td>${item.Age}</td>
	                <td>${item.Start}</td>
	                <td>${item.Salary}</td>
		         </tr>

				`
			}

		}
	}

	$('#dataTable').DataTable();
}