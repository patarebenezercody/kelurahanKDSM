<div class="modal" id="ruasjalan-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
						<label for="namajalan" class="col-md-3 control-label">Nama Jalan</label>
						<div class="col-md-6">
							<input type="text" id="namajalan" name="namajalan" class="form-control"  required autofocus>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="pangkaljalan" class="col-md-3 control-label">Pangkal Jalan</label>
						<div class="col-md-6">
							<input type="pangkaljalan" id="pangkaljalan" name="pangkaljalan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="ujungjalan" class="col-md-3 control-label">Ujung Jalan</label>
						<div class="col-md-6">
							<input type="ujungjalan" id="ujungjalan" name="ujungjalan" class="form-control" required>
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
