<?php include "inc/header.php"?>
<!-- Modal -->
<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Booking Alat</h4>
      </div>
      <div class="modal-body">
		<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
		  <select class="form-control" name="camera">
			  <option>:: Pilih Kamera ::</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
		</div>
		<br>
		<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-tree-conifer"></i></span>
		  <select class="form-control" name="tripod">
			  <option>:: Pilih Tripod ::</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
		</div>
		<br>
		<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-flash"></i></span>
		  <select class="form-control" name="tripod">
			  <option>:: Pilih Lampu ::</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
		</div>
		<br>
		<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
		  <textarea class="form-control" rows="3" name="tambahan" Placeholder="Tambahan"></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="content">
	<div class="container" id="pdt2">
	
		<div class="user" style="text-align:center">
			<h2>Lihat Peminjam Alat</h2>
			<p style="text-align:left"><a href="" class="btn btn-success" data-toggle="modal" data-target="#booking"><i class="fa fa-plus"></i> Booking Alat</a></p>
			<table class="table cog">
			  
				<tr>
				  <th>ID</th>
				  <th>Camera</th>
				  <th>Tripod</th>
				  <th>Booming</th>
				  <th>lampu</th>
				  <th>lainya</th>
				</tr>
				<tr class="active">
				  <td>1</td>
				  <td>Column content</td>
				  <td>Column content</td>
				  <td>Column content</td>
				  <td>Column content</td>
				  <td>Column content</td>
				</tr>
			</table>
			</div>
	</div>
</div>