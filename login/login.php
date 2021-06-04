<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/all.css">
         <link rel="stylesheet" href="css/index_estilo.css">
        
    </head>
  
    <body class="login" name="login" id="login">
           
            <div class="container">
                <div class="row">
                   
                    <div class="col">
                        
                        <div class="card mt-4 bg-light" >
                        
                            <div class="card-header bg-primary text-white">
                                <!--ENCABEZADO-->
                                LOGIN
                                </div>
                            
                                <div class="card-body card-img-top">
                                
                                        <form action="conexionLogin.php" method="POST">
                                        
                                        
                                        <div class="form-group">
                                        
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <li class="fa fa-at"></li> <!-- ETIQUETA-->
                                                    </span>
                                                </div> <!-- input group-prepend-->
                                                   <input type="text" id="correo" name="correo" class="form-control" placeholder="E-mail" required>
                                           
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                            
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <li class="fa fa-key"></li> <!-- ETIQUETA-->
                                                    </span>
                                                </div> <!-- input group-prepend-->
                                                     <input type="password"  id="contraseña" name="contraseña" class="form-control" placeholder="Contraseña" required>
                                           
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <button type="submit" class="btn btn-success">Ingresar</button>
                                        
                                    </form>
                                    
                                </div>
                                <a href="index.php" class="btn btn-primary">Volver al menu</a>
                        </div>
                    
                    </div>
                    <!-- CERRAR EL COL-->
                    
                    <div class="col-sm-4"></div>
                        
                              
                            
                </div> <!-- ROW-->
        
            </div>
        <div>
        </div>
        <div></div>
        <div class="trans">
            
            
            
        </div>
        
     
 </body>

</html>