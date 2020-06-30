--FACTURA DE LA VENTA--
CREATE OR REPLACE VIEW FACTURA AS
SELECT  U.id_usuario,
		U.nombre AS Nombre, 
		U.apellido AS Apellido, 
		P.nombre AS Prenda,
		T.nombre AS Tela,
		TLL.talla AS Talla,
		((T.precio_metros*P.metros_elaboracion)+P.precio) AS Total, 
		V.fecha AS Fecha
FROM VENTA V
INNER JOIN PRENDA P ON P.cod_prendas = V.cod_prendas
INNER JOIN TELA T ON T.cod_telas = V.cod_telas
INNER JOIN USUARIO U ON U.id_usuario = V.id_usuario
INNER JOIN TALLA TLL ON TLL.cod_tallas=V.cod_tallas

--TOTAL VENDIDO--
SELECT SUM(TOTAL) AS "VENTAS TOTALES" FROM FACTURA


--CARRITO--
CREATE OR REPLACE VIEW CARRITO AS
SELECT V.id_venta AS Id,
		U.nombre AS Nombre, 
		U.apellido AS Apellido, 
		P.imagen_prenda AS Prenda,
		T.imagen_tela AS Tela,
		TLL.talla AS Talla,
		((T.precio_metros*P.metros_elaboracion)+P.precio) AS Total		
FROM VENTA V
INNER JOIN PRENDA P ON P.cod_prendas = V.cod_prendas
INNER JOIN TELA T ON T.cod_telas = V.cod_telas
INNER JOIN USUARIO U ON U.id_usuario = V.id_usuario
INNER JOIN TALLA TLL ON TLL.cod_tallas=V.cod_tallas

--TOTAL A PAGAR POR USUARIO--
SELECT SUM(TOTAL) AS TOTAL FROM FACTURA
WHERE id_usuario = 2

--STOCK DE TELA- -
SELECT  V.cod_prendas,
		T.nombre, 
		T.metros_disp, 
		P.metros_elaboracion,
		T.metros_disp-P.metros_elaboracion "Nuevo Stock"
FROM VENTA V
INNER JOIN PRENDA P ON P.cod_prendas = V.cod_prendas
INNER JOIN TELA T ON T.cod_telas = v.cod_telas

--STOCK DE TELAS EN TABLA TELA-------------------------
UPDATE TELA T
INNER JOIN VENTA V ON V.cod_telas = T.cod_telas
INNER JOIN PRENDA P ON P.cod_prendas = V.cod_prendas
SET T.metros_disp = T.metros_disp-P.metros_elaboracion

--ROPA MUJERES------------------
CREATE OR REPLACE VIEW PRENDA_DAMA AS
SELECT * FROM PRENDA 
WHERE cod_prendas LIKE 'BLU-%'
OR cod_prendas LIKE 'VES-%'
OR cod_prendas LIKE 'PAN-%'


--ROPA HOMBRES
CREATE OR REPLACE VIEW PRENDA_CABALLERO AS
SELECT * FROM PRENDA 
WHERE cod_prendas LIKE 'CAM-%'
OR cod_prendas LIKE 'CHA-%'
OR cod_prendas LIKE 'PANH-%'
