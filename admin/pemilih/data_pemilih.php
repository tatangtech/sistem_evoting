<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pemilih</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pemilih" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
				<a href="?page=import-pemilih" class="btn btn-warning">
					<i class="fa Export"></i> Import Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama User</th>
						<th>Kelas</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from tb_pengguna where jenis='PST'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_pengguna']; ?>
						</td>
						<td>
							<?php echo $data['password']; ?>
						</td>
						<td>
							<?php $stt = $data['status']  ?>
							<?php if($stt == '1'){ ?>
							<span class="badge badge-warning">Belum memilih</span>
							<?php }elseif($stt == '0'){ ?>
							<span class="badge badge-primary">Sudah memilih</span>
						</td>
						<?php } ?>
						</td>
						<td>
							<a href="?page=edit-pemilih&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pemilih&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Hapus Data Ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->