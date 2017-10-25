<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" class="form-horizontal" data-toggle="validator">
				{{ csrf_field() }} {{ method_field('POST') }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times; </span> </button>
					<h3 class="modal-title"><center>Form</center></h3>
				</div>

				<div class="modal-body">

					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="namaanak" class="col-md-3 control-label">Nama Anak</label>
						<div class="col-md-6">
							<input type="text" id="namaanak" name="namaanak" class="form-control"  required autofocus>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="ttl" class="col-md-3 control-label">Tempat/Tanggal Lahir</label>
						<div class="col-md-6">
							<input type="ttl" id="ttl" name="ttl" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="umur" class="col-md-3 control-label">Umur</label>
						<div class="col-md-6">
							<input type="text" id="umur" name="umur" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div> -->
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-save">Simpan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
