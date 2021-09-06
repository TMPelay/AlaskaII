var info = JSON.parse(_info);
console.log(info);
var cycles = _cycles;
var assoc = ["codigo","descripcion","rubro","equipo","proveedor","pub","costo","reemplazo","stock","ctd"];
var i;

var body = document.getElementsByTagName("body")[0];
var tabla   = document.createElement("table");
var tblBody = document.createElement("tbody");

for (var i = 0; i < cycles; i++) {
  var hilera = document.createElement("tr");
  var titulo = document.createElement("th");
  titulo.appendChild(document.createTextNode("Codigo"));

  for (var j = 0; j < assoc.length; j++) {
    var celda = document.createElement("td");
    var a = document.createElement('a');
    var textoCelda = document.createTextNode(info[i][assoc[j]]);
    a.appendChild(textoCelda)
    a.href = `files/${info[i]["pdf"]}`;
    celda.appendChild(a);
    hilera.appendChild(celda);
  }

  tblBody.appendChild(hilera);
}

tabla.appendChild(tblBody);
body.appendChild(tabla);
tabla.setAttribute("border", "2");

let form = document.getElementById("busquedaForm");
    
form.addEventListener("submit", ()=>{
  search = document.getElementById("value").value;
  let filCodigo = info.filter(x => x.codigo.toLowerCase().indexOf(search) > -1);
  let filDescripcion = info.filter(x => x.descripcion.toLowerCase().indexOf(search) > -1);
  let filRubro = info.filter(x => x.rubro.toLowerCase().indexOf(search) > -1);
  let filEquipo = info.filter(x => x.equipo.toLowerCase().indexOf(search) > -1);
  let filProveedor = info.filter(x => x.proveedor.toLowerCase().indexOf(search) > -1);
  let filPub = info.filter(x => x.pub.toLowerCase().indexOf(search) > -1);
  let filCosto = info.filter(x => x.costo.toLowerCase().indexOf(search) > -1);
  let filReemplazo = info.filter(x => x.reemplazo.toLowerCase().indexOf(search) > -1);
  let filStock = info.filter(x => x.stock.toLowerCase().indexOf(search) > -1);
  let filCTD = info.filter(x => x.ctd.toLowerCase().indexOf(search) > -1);

  let fil1 = filCodigo.concat(filDescripcion);
  let fil2 = filRubro.concat(filEquipo);
  let fil3 = fil1.concat(fil2);

  let fil4 = filProveedor.concat(filPub);
  let fil5 = filCosto.concat(filReemplazo);
  let fil6 = fil4.concat(fil5);

  let fil7 = filStock.concat(filCTD);
  let fil8 = fil7.concat(fil6); 

  let filtrado = fil3.concat(fil8);

  while(tblBody.rows.length > 0){
      tblBody.deleteRow(0);
  }

  for (var i = 0; i < cycles; i++) {
    var hilera = document.createElement("tr");

    for (var j = 0; j < assoc.length; j++) {
      var celda = document.createElement("td");
      var cel = document.createTextNode(filtrado[i][assoc[j]]);
      celda.appendChild(cel);
      hilera.appendChild(celda);
    }

    tblBody.appendChild(hilera);
  }
}); 

