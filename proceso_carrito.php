<?php   
    
    $mensaje="";

    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){
            case 'Agregar':
                if(is_string(openssl_decrypt($_POST['id'], COD, KEY))){
                    $cod_prendas=openssl_decrypt($_POST['id'], COD, KEY);
                    //$prenda=$_POST['id'];
                    $mensaje.="OK id correcto: ".$cod_prendas."<br>";
                }else{
                    $mensaje.="UPS...Id incorrecto ".$cod_prendas."<br>";
                }
                if(is_string(openssl_decrypt($_POST['imagen_prenda'], COD, KEY))){
                    $imagen_prenda=openssl_decrypt($_POST['imagen_prenda'], COD, KEY);
                    $mensaje.="OK precio: ".$imagen_prenda."<br>";
                }else{
                    $mensaje.="UPS...IMG incorrecta"."<br>";
                    break;
                }
                if(is_string(openssl_decrypt($_POST['nombre'], COD, KEY))){
                    $nombre=openssl_decrypt($_POST['nombre'], COD, KEY);
                    $mensaje.="OK nombre: ".$nombre."<br>";
                }else{
                    $mensaje.="UPS...Algo pasa con el nombre"."<br>";
                    break;
                }
                                
                if(is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))){
                    $precio=openssl_decrypt($_POST['precio'], COD, KEY);
                    $mensaje.="OK precio: ".$precio."<br>";
                }else{
                    $mensaje.="UPS...Precio incorrecto"."<br>";
                    break;
                }

                
                
//-------------------------------------------------------------------------------
                if(!isset($_SESSION['CARRITO'])){
                    $prenda=array(
                        'id'=>$cod_prendas,
                        'imagen_prenda'=>$imagen_prenda,
                        'nombre'=>$nombre,  
                        'precio'=>$precio
                    );
                    $_SESSION['CARRITO'][0]=$prenda;
                    $mensaje="Prenda agregada";
                }else{
                    $idPrenda=array_column($_SESSION['CARRITO'],"id");
                    if(in_array($cod_prendas, $idPrenda)){
                        echo "<script>alert('La prenda ya ha sido seleccionada');</script>";
                       $mensaje="";
                    }else{
                        $numeroPrendas=count($_SESSION['CARRITO']);
                        $prenda=array(
                            'id'=>$cod_prendas,
                            'imagen_prenda'=>$imagen_prenda,
                            'nombre'=>$nombre,  
                            'precio'=>$precio
                        );
                        $_SESSION['CARRITO'][$numeroPrendas]=$prenda;
                        $mensaje="Prenda agregada";
                    }
                 }
               // $mensaje=print_r($_SESSION, true);
                    
                    
           
                break;
//-------------------------------------------------------------------------------
            case 'Eliminar':
                if(is_string(openssl_decrypt($_POST['id'], COD, KEY))){
                    $cod_prendas=openssl_decrypt($_POST['id'], COD, KEY);

                    foreach($_SESSION['CARRITO'] as $indice=>$prenda){  
                        if($prenda['id']==$cod_prendas){
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script>alert('Borrado...');</script>";
                        }
                            
                    }
                }else{
                    $mensaje.="UPS...Id incorrecto "."<br>";
                }
                

            break;
        }
    }
