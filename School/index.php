<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50">
        <div class="card mx-auto w-75 mt-5 border border-0">
            <div class="card-header bg-white border-0">
                <h2 class="text-center">REGISTRATION</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="mb-4">
            <label for="year-level" class="form-label">Year Level</label>
            <select name="year-level" id="year-level" class="form-control "required>
                    <option value="" hidden>Choose your year level</option>
                        <option value="1">year 1</option>
                        <option value="2">year 2</option>
                        <option value="3">year 3</option>
                        <option value="4">year 4</option>
            </select>
            </div>
            <div class="mb-4">
            <label for="total-units" class="form-label">Total Units</label>
            <input type="number" name="total-units" id="total-units" class="form-control mb-2" max="23" placeholder="Maximum of 23" required>
            </div>
            <div class="text-center mb-3">
            <div class="form-check form-check-inline">
            <input type="radio" name="laboratory" value="with_lab" id="with-lab"><label for="with-lab"class="form-check"> With lab</label>
            </div>
            <div class="form-check form-check-inline">
            <input type="radio" name="laboratory" value="no_lab" id="without-lab" class="form-check"><label for="without-lab"> Without lab</label>
            </div>
            </div>
            </div>
        </div>
        </div>
            <div>
            <input type="submit" name="btn_add_register" value="Submit" class="btn btn-dark w-100">
            </div>

                <?php
            include_once "school.php"; 
            if (isset($_POST['btn_add_register'])) {
                $name = $_POST['name'];
                $year_level = $_POST['year-level'];
                $units = $_POST['total-units'];
                $laboratory = $_POST['laboratory'];

                $school = new school;
                $school->setValues($year_level, $units, $laboratory);
                $total_price = $school->computeTotalPrice();
           
                echo "Name:   <span class='fw-bold'>$name</span> <br>";
                echo "Year level:  <span class='fw-bold'>$year_level</span> <br>";
                echo "NO. of units:  <span class='fw-bold'>$units</span> <br>";
                echo "Total Price: <span class='fw-bold'>$total_price</span>";
           
            }
        ?>
        
        
        
        </form>
      </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>    

