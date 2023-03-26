<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Week Name:</label>
					</div>
					<div class="col-sm-9">
						<select  class="form-control" name="week_name">
							<option value="week1">Week 1</option>
							<option value="week2">Week 2</option>
							<option value="week3">Week 3</option>
							<option value="week4">Week 4</option>
							<option value="week5">Week 5</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Date:</label>
					</div>
					

					<div class="col-sm-9">
						<input type="date" value="12/10/20023" name="date">
						
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Hours:</label>
					</div>
					

					<div class="col-sm-9">
						<input  class="form-control" type="number" name="hours" value="3">
						
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Employee Name:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="emp_name" value="viki">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>