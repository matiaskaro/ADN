# ADN
Ingresar los ADN separado por espacios.
Hcaer click en el botón.
Al ingresar los ADN en el formulario tener en cuenta que la cantidad de filas y columnas (NXN) = a la cantidad de caracteres del adn:siguiendo el ejemplo del enunciado.
Ej: si ingreso un ADN de 5 caracteres (ATCGA) => ingresar 5 ADN total. ADN: ATCGA ATCGA ATCGA ATCGA ATCGA (con espacios entre ellos).
Luego se imprime TRUE O FALSE según resultado.
Los ADN verificados van registrandose de a uno en una base de datos.

BASE DE DATOS (conexión)

ip:31.170.166.166
base de datos:u888399958_adn
usuario: u888399958_adn
contraseña: 123456Adn

**** API****
Para consumir la api correr el archivo consumoapi.php. 
El servicio corre en un hosting mio (intenté usar los cloud sugeridos pero me pedían tarjeta de crédito y por seguridad prefrí no ingresarla).
El link a donde hace la petición es: http://multiservicepc.com.ar/Force-User/proceso.php (recomiendo que lo consuman desde consumoapi.php porque sivan directo no traerá resultado esperado). El código de la api está escrito tmb en el archivo proceso.php, igualmente si en algún momento necesitan los datos del hosting lo paso.

Si hay mas de 1 ADN compatible devuelve code 200 caso contrario 403. Se observa por en pantalla y (inspeccionar/red)
