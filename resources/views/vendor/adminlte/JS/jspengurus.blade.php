<script type="text/javascript">
			
			var pengurus = $('#pengurus-table').DataTable({
		                        processing: true,
		                        serverSide: true,
		                        ajax: "{{ route('api/rumahibadah') }}",
		                        columns: [
		                            {data: 'id', name:'id'},
		                            {data: 'nama', name:'nama'},
		                            {data: 'nik', name:'nik'},
		                            // {data: 'alamat', name:'alamat'},
		                            {data: 'action', name:'action', orderable: false, searchable:false},
		                        ]
		                    });
		function addPengurus(){
		            save_method = "add3";
		            $('input[name=_method]').val('POST');
		            $('#pengurus-form').modal('show');
		            $('#pengurus-form form')[0].reset();
		            $('#modal-title').text('Add Pengurus Rumah Ibadah');
		        }
		function deletePengurus(id){
		          var popup = confirm('Anda yakin ?');
		          var csrf_token = $('meta[name="csrf-token"]').attr('content');
		          if(popup == true){
		            $.ajax({
		              url: "{{ url('rumahibadah') }}" + '/' + id,
		              type: "POST",
		              data: {'_method' : 'DELETE', '_token':csrf_token},
		              success: function(data){
		                pengurus.ajax.reload();
		                console.log(data);
		              },

		              error: function(){
		                alert("Ops! Something wrong!");
		              }
		            });
		          }
		        }

		function editPengurus(id){
				            save_method = 'edit';
				            $('input[name=_method]').val('PATCH');
				            $('#pengurus-form form')[0].reset();
				            $.ajax({
				                url: "{{ url('rumahibadah') }}" + '/' + id + "/edit",
				                type: "GET",
				                dataType: "JSON",
				                success: function(data){
				                    $('#pengurus-form').modal('show');
				                    $('.modal-title').text('Edit Pengurus Rumah Ibadah');

				                    $('#id').val(data.id);
				                    $('#nama').val(data.nama);
				                    $('#nik').val(data.nik);
				                    // $('#umur').val(data.umur);
				                },

				                error : function(){
				                    alert("Tidak ada Data");
				                }
				            });
				        }

		$(function(){
		            $('#pengurus-form form').validator().on('submit', function (e) {
		                if (!e.isDefaultPrevented()){
		                    var id = $('#id').val();
		                    if (save_method == 'add3') url ="{{ url('rumahibadah') }}";
		                    else
		                        url = "{{ url('rumahibadah') . '/' }}" + id;
		                    
		                    $.ajax({
		                        url : url,
		                        type : "POST",
		                        data : $('#pengurus-form form').serialize(),
		                        success : function($data){
		                            $('#pengurus-form').modal('hide');
		                        },
		                        error : function(){
		                            alert('Opps! Error!');
		                        }
		                    });
		                    return false;
		                }
		            });

		        });
</script>