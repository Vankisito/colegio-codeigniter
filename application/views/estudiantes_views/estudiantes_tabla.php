<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Lista estudiantes</title>
    <style>
        .Div_table{
            width: 1200px;
            background-color: azure;
            border-radius: 4px;
            box-shadow: 10px 10px 7px rgba(0, 0, 0, 0.07);
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
        }
        .div_btn{
            display:flex;
            justify-content:space-evenly;
            
        }
    </style>
</head>
<body>
    <div class="Div_table">
        <table class="table  table-hover table-bordered ">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>   
                    <th>Sexo</th>   
                    <th colspan=2>Opciones</th> 
                </tr> 
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($estudiantes as $key => $value):?>
                    <tr class="table-secondary">
                        <td><?php echo $value->id_estudiante?></td>
                        <td><?php echo $value->nombre_estudiante?></td>
                        <td><?php echo $value->apellido_estudiante?></td>
                        <td><?php echo $value->edad_estudiante?></td>
                        <td><?php echo $value->descripcion_sexo?></td>  
                        <td><a href="<?php echo base_url('welcome/actualizar_estudiante/'.$value->id_estudiante);?>"><ion-icon name="create-outline"></ion-icon></a></td>     
                        <td><a href="<?php echo base_url('welcome/delete_estudiante/'.$value->id_estudiante);?>"><ion-icon name="trash-bin-outline"></ion-icon></a></td>                         
                    </tr>
                <?php endforeach;?>    
            </tbody>
        </table>
    </div>
    <div class="div_btn">
    <a class="btn btn-primary" type="button" href="<?php echo base_url("welcome/index");?>">Tabla Programacion</a>
    <a class="btn btn-primary" type="button" href="<?php echo base_url("welcome/form_new_profesor");?>">Agregar</a>
    <a class="btn btn-primary" type="button" href="<?php echo base_url("welcome/tabla_profesores");?>">Tabla Profesores</a>
    </div>





<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>