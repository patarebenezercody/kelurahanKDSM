<script type="text/javascript">
			
			var ruasjalan = $('#ruasjalan-table').DataTable({
		                        processing: true,
		                        serverSide: true,
		                        ajax: "{{ route('api/ruasjalan') }}",
		                        columns: [
		                            {data: 'id', name:'id'},
		                            {data: 'namajalan', name:'namajalan'},
		                            {data: 'pangkaljalan', name:'pangkaljalan'},
		                            // {data: 'ujungjalan', name:'ujungjalan'},
		                            {data: 'action', name:'action', orderable: false, searchable:false},
		                        ]
		                    });
		function addRuasJalan(){
		            save_method = "add4";
		            $('input[name=_method]').val('POST');
		            $('#ruasjalan-form').modal('show');
		            $('#ruasjalan-form form')[0].reset();
		            $('#modal-title').text('Add Ruas Jalan');
		        }
		function deleteRuasJalan(id){
		          var popup = confirm('Anda yakin ?');
		          var csrf_token = $('meta[name="csrf-token"]').attr('content');
		          if(popup == true){
		            $.ajax({
		              url: "{{ url('ruasjalan') }}" + '/' + id,
		              type: "POST",
		              data: {'_method' : 'DELETE', '_token':csrf_token},
		              success: function(data){
		                ruasjalan.ajax.reload();
		                console.log(data);
		              },

		              error: function(){
		                alert("Ops! Something wrong!");
		              }
		            });
		          }
		        }


		function editRuasJalan(id){
				            save_method = 'edit';
				            $('input[name=_method]').val('PATCH');
				            $('#ruasjalan-form form')[0].reset();
				            $.ajax({
				                url: "{{ url('ruasjalan') }}" + '/' + id + "/edit",
				                type: "GET",
				                dataType: "JSON",
				                success: function(data){
				                    $('#ruasjalan-form').modal('show');
				                    $('.modal-title').text('Edit Ruas Jalan');

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
		            $('#ruasjalan-form form').validator().on('submit', function (e) {
		                if (!e.isDefaultPrevented()){
		                    var id = $('#id').val();
		                    if (save_method == 'add4') url ="{{ url('ruasjalan') }}";
		                    else
		                        url = "{{ url('ruasjalan') . '/' }}" + id;
		                    
		                    $.ajax({
		                        url : url,
		                        type : "POST",
		                        data : $('#ruasjalan-form form').serialize(),
		                        success : function($data){
		                            $('#ruasjalan-form').modal('hide');
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