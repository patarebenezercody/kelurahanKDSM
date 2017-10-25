@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('balita-content')
		<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">

							Daftar Balita 0-59 Bulan Yang Ada Di Wilayah Kerja PUSKESMAS Padang Bulan -<br> Kelurahan Darat Kecamatan Medan Baru Tahun 2017<br>	
							
						</h3>
						<a onclick="addBalita()" class="btn btn-primary pull-right" style="margin-right: 50px">Add Balita</a>
						<div class="box-tools pull-right">

							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>

					<div class="box-body">
					<table id="balita-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama Anak</th>
		                    <th>Umur</th>
		                    <th>Tempat/Tgl Lahir</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
					</div>
				</div>
			</div>
		</div>

		@include('formAdmin.formbalita')
	
	</div>
	

@endsection


@section('ibu-content')
	
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Daftar Ibu Hamil Kelurahan Darat Kecamatan Medan Baru Tahun 2017
						</h3>
						<a onclick="addIbuHamil()" class="btn btn-primary pull-right" style="margin-right: 50px">Add Ibu</a>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div class="box-body">
					<table id="ibuhamil-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>No</th>
		                    <th>No KK</th>
		                    <th>Nama Ibu Hamil</th>
		                    <th>Umur</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
					</div>
				</div>
			</div>
		</div>

		@include('formAdmin.formibuhamil');

	</div>
@endsection

@section('pengurus-content')
	
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Dafar Pengurus Rumah Ibadah dan Imam Mesjid Penerima Bantuan Pemerintah Kota Medan Tahun 2017
						</h3>
						<a onclick="addPengurus()" class="btn btn-primary pull-right" style="margin-right: 50px">Add Pengurus</a>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div class="box-body">
					<table id="pengurus-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama</th>
		                    <th>NIK</th>
		                    <th>Alamat</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
					</div>
				</div>
			</div>
		</div>

		@include('formAdmin.formpengurus')

	</div>

@endsection

@section('ruasjalan-content')
	
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Daftar Ruas Jalan Kelurahan Darat
						</h3>
						<a onclick="addRuasJalan()" class="btn btn-primary pull-right" style="margin-right: 50px">Add Ruas Jalan</a>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div class="box-body">
					<table id="ruasjalan-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Nama Jalan</th>
		                    <th>Pangkal Jalan</th>
		                    <th>Ujung Jalan</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
					</div>
				</div>
			</div>
		</div>

		@include('formAdmin.formruasjalan')

	</div>

@endsection
