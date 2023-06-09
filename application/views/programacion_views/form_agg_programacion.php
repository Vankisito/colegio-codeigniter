<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Programacion</title>
    <style>
         .div_btn{
            display:flex;
            justify-content:center;
            
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo base_url('welcome/save_prog');?>">
        <div class="mb-3">
        <label for="floatingInput1" class="form-label">Id</label>
        <input type="text" name="id" id="floatingInput1" readonly class="form-control" placeholder="Id..." >
        </div>
        <div class="mb-3">
        <label for="floatingInput2"  class="form-label">Fecha</label>
        <input type="date" name="fecha" id="floatingInput2" class="form-control" placeholder="Fecha..." required >
        </div >
        <div class="mb-3">
        <label for="floatingInput3"  class="form-label">Curso</label>
        <select class="form-select" aria-label="Default select example" name="curso" id="floatingInput3"> 
            <?php foreach ($cursos as $key => $value):?>
                <option value="<?php echo $value->id_curso ?>"><?php echo $value->descripcion_curso ?></option>
            <?php endforeach;?>
        </select>
        </div>
        <div class="mb-3"> 
        <label for="floatingInput3"  class="form-label">Aula</label>
        <select class="form-select" aria-label="Default select example" name="aula" id="floatingInput3"> 
        <?php foreach ($aulas as $key => $value):?>
                <option value="<?php echo $value->id_aula ?>"><?php echo $value->descripcion_aula ?></option>
            <?php endforeach;?>   
        </select>
        </div>
        <div class="mb-3"> 
        <label for="floatingInput3"  class="form-label">Profesor</label>
        <select class="form-select" aria-label="Default select example" name="profesor" id="floatingInput3"> 
        <?php foreach ($profesores as $key => $value):?>
                <option value="<?php echo $value->id_profesor ?>"><?php echo $value->nombre_profesor ?></option>
            <?php endforeach;?>  
        </select>
        </div>
        <div class="mb-3"> 
        <label for="floatingInput3"  class="form-label">Estudiante</label>
        <select class="form-select" aria-label="Default select example" name="estudiante" id="floatingInput3"> 
        <?php foreach ($estudiantes as $key => $value):?>
                <option value="<?php echo $value->id_estudiante ?>"><?php echo $value->nombre_estudiante ?></option>
            <?php endforeach;?> 
        </select>
        </div>
        <div class="div_btn">
        <button class="btn btn-primary" type="submit" >Guardar</button>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>