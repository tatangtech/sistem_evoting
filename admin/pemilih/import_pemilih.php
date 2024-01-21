<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Import Data</h3>
	</div>
	<form action="admin/pemilih/proses_import.php" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
						<a href="admin/pemilih/template_import.xlsx" title="Kembali" class="btn btn-warning">Download Template</a>
				
			</div>
			<div class="form-group row">
				<label class="col-sm-6 col-form-label">Silakan Unduh Template terlebih dahulu, kemudian import data</label>
			</div>

			<div class="form-group row">
				<div class="col-sm-6">
					<input type="file" class="form-control" id="file" name="file" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="import" value="import" class="btn btn-info">
			<a href="?page=data-pemilih" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


