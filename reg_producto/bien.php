<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/all.css">
         <link rel="stylesheet" href="css/estilo.css">
        
    </head>
  
    <body class="body" onLoad="alert('Producto ingresado correctamente');" onUnLoad="confirm('OK!);">
         
    <div class="container">
                 <h2>REGISTRO DE PRODUCTOS</h2>
                <div class="row">
                   
                    <div class="col">
                        
                        <div class="card mt-4 bg-light" >
                        
                            
                            
                                <div class="card-body card-img-top">
                                
                                        <form action="conexion.php" method="POST" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                        
                                            
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <li class="fa fa-apple-alt"></li> <!-- ETIQUETA-->
                                                    </span>
                                                </div> <!-- input group-prepend-->
                                                   <input type="text" id="nom" name="nom" class="form-control" placeholder="Nombre del producto" required>
                                           
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <li class="fa fa-at"></li> <!-- ETIQUETA-->
                                                    </span>
                                                </div> <!-- input group-prepend-->
                                           <select name="tip" id="tip">
                                               <option value="Tablet">Tablet</option>
                                               <option value="Celular">Celular</option>
                                               <option value="SmartWatch">SmartWatch</option>
                                           </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                            
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <li class="fa fa-align-justify"></li> <!-- ETIQUETA-->
                                                    </span>
                                                </div> <!-- input group-prepend-->
                                                     <input type="text"  id="des" name="des" class="form-control" placeholder="Descripcion" required>
                                           
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        
                                            
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <li class="fa fa-dollar-sign"></li> <!-- ETIQUETA-->
                                                        </span>
                                                    </div> <!-- input group-prepend-->
                                                         <input type="text" id="pre" name="pre" class="form-control" placeholder="precio" required>
                                               
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                        
                                            
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <li class="fa fa-image"></li> 
                                                            </span>
                                                        </div> <!-- input group-prepend-->
                                                             <input type="file" id="img" name="img" accept=".jpg, .png" >
                                                   
                                                    </div>
                                                </div> 
                                                                                  
                                        <button type="submit" class="btn btn-success">Registrar producto</button>
                                        
                                    </form>
                                    
                                </div>
                                <a href="../index.php" class="btn btn-primary">Volver al menu</a>
                            
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