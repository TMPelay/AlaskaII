<?php
			include('info-conection.php');

			$query = "SELECT * FROM PARTES";
			$result = mysqli_query($conection,$query);

			$i = 0;
			$info[$i];

			while(($rows = mysqli_fetch_array($result)) == true){
				$info[$i]["codigo"] = $rows[0];
				$info[$i]["descripcion"] = $rows[1];
				$info[$i]["rubro"] = $rows[2];
				$info[$i]["equipo"] = $rows[3];
				$info[$i]["proveedor"] = $rows[4];
				$info[$i]["pub"] = $rows[5];
				$info[$i]["costo"] = $rows[6];
				$info[$i]["reemplazo"] = $rows[7];
				$info[$i]["stock"] = $rows[8];
				$info[$i]["ctd"] = $rows[9];
				$info[$i]["pdf"] = $rows[10];
				$i++;
			}

			$cycles = $i;
			mysqli_close($conection);
		?>