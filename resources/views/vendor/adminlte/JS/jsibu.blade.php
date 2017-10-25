<script type="text/javascript">
			var ibuhamil = $('#ibuhamil-table').DataTable({
		                        processing: true,
		                        serverSide: true,
		                        ajax: "{{ route('api/ibuhamil') }}",
		                        columns: [
		                            {data: 'id', name:'id'},
		                            {data: 'namaibuhamil', name:'namaibuhamil'},
		                            {data: 'namasuami', name:'namasuami'},
		                            // {data: 'umur', name:'umur'},
		                            {data: 'action', name:'action', orderable: false, searchable:false},
		                        ]
		                    });

		function addIbuHamil(){
		            save_method = "add2";
		            $('input[name=_method]').val('POST');
		            $('#ibu-form').modal('show');
		            $('#ibu-form form')[0].reset();
		            $('#modal-title').text('Add Ibu Hamil');
		        }


		function deleteIbuHamil(id){
		          var popup = confirm('Anda yakin ?');
		          var csrf_token = $('meta[name="csrf-token"]').attr('content');
		          if(popup == true){
		            $.ajax({
		              url: "{{ url('ibuhamil') }}" + '/' + id,
		              type: "POST",
		              data: {'_method' : 'DELETE', '_token':csrf_token},
		              success: function(data){
		                ibuhamil.ajax.reload();
		                console.log(data);
		              },

		              error: function(){
		                alert("Ops! Something wrong!");
		              }
		            });
		          }
		        }

		function editIbuHamil(id){
		            save_method = 'edit';
		            $('input[name=_method]').val('PATCH');
		            $('#ibu-form form')[0].reset();
		            $.ajax({
		                url: "{{ url('ibuhamil') }}" + '/' + id + "/edit",
		                type: "GET",
		                dataType: "JSON",
		                success: function(data){
		                    $('#ibu-form').modal('show');
		                    $('.modal-title').text('Edit Ibu Hamil');

		                    $('#id').val(data.id);
		                    $('#nokk').val(data.nokk);
		                    $('#namaibuhamil').val(data.namaibuhamil);
		                    // $('#umur').val(data.umur);
		                },

		                error : function(){
		                    alert("Tidak ada Data");
		                }
		            });
		        }

		$(function(){
		            $('#ibu-form form').validator().on('submit', function (e) {
		                if (!e.isDefaultPrevented()){
		                    var id = $('#id').val();
		                    if (save_method == 'add2') url ="{{ url('ibuhamil') }}";
		                    else
		                        url = "{{ url('ibuhamil') . '/' }}" + id;
		                    
		                    $.ajax({
		                        url : url,
		                        type : "POST",
		                        data : $('#ibu-form form').serialize(),
		                        success : function($data){
		                            $('#ibu-form').modal('hide');
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