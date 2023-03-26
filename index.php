<?php include('getDetails.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weekly Pre Scheduling</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Weekly Pre Scheduling</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New</a>
                <form method="POST" action="">
                    
                    <input name="fdate" type="date" value="<?php echo $_POST['fdate'] ? date('Y-m-d', strtotime($_POST['fdate'])) : '' ?>" >

                    <input  name="tdate" type="date" value="<?php echo $_POST['tdate'] ? date('Y-m-d', strtotime($_POST['tdate'])) : '' ?>">
                    <input type="submit" name="add" value="Submit"> 
                </form>
                <?php if(count($_POST) > 0){ ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    
                    <th>Week Name</th>
                    <th>Emp Name</th>
                      <?php
                          foreach ($MDL as $key => $masterDate) {
                              echo '<th>'.$masterDate.'</th>';
                          }
                      ?>
                    <th>Total</th>
                </thead>
                <tbody>
                    
                        
                        <?php
                            foreach ($plans->plan as $pkey => $pvalue) {
                                $tot = 0;
                                echo "<tr>";
                                echo "<td>".$pvalue->week_name."</td>";
                                echo "<td>".$pvalue->emp_name."</td>";

                                 $date2 = json_decode(json_encode(($pvalue->date_lists->date), true), JSON_PRETTY_PRINT);

                                foreach ($MDL as $key => $masterDate) {
                                    if(in_array($masterDate, $date2)){
                                        
                                        foreach ($pvalue->date_lists->date as $pv) {
                                            if($pv[0] == $masterDate){
                                                echo '<td>'.$pv[0]['hours'].'</td>';

                                                $tot = $pv[0]['hours'] + $tot;
                                            }
                                        }
                                    }
                                    else
                                        echo '<td>0</td>';                                    
                                }
                                echo "<td>".$tot."</td>";
                                echo "</tr>";
                            }
                        ?>

                    </tr>
                </tbody>
            </table>

            <?php } ?>
        </div>
    </div>
</div>
<?php include('add_modal.php'); ?>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
