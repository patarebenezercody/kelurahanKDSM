<script type="text/javascript">
	var balita = $('#balita-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('api/balita') }}",
                        columns: [
                            {data: 'id', name:'id'},
                            {data: 'namaanak', name:'namaanak'},
                            {data: 'ttl', name:'ttl'},
                            // {data: 'umur', name:'umur'},
                            {data: 'action', name:'action', orderable: false, searchable:false}
                        ]
                    });


		function addBalita(){
	            save_method = "add1";
	            $('input[name=_method]').val('POST');
	            $('#modal-form').modal('show');
	            $('#modal-form form')[0].reset();
	            $('#modal-title').text('Add Balita');
	        }

       function deleteBalita(id){
          var popup = confirm('Anda yakin ?');
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          if(popup == true){
            $.ajax({
              url: "{{ url('balita') }}" + '/' + id,
              type: "POST",
              data: {'_method' : 'DELETE', '_token':csrf_token},
              success: function(data){
                balita.ajax.reload();
                console.log(data);
              },

              error: function(){
                alert("Ops! Something wrong!");
              }
            });
          }
        }

        function editBalita(id){
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('balita') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Balita');

                    $('#id').val(data.id);
                    $('#namaanak').val(data.namaanak);
                    $('#ttl').val(data.ttl);
                    // $('#umur').val(data.umur);
                },

                error : function(){
                    alert("Tidak ada Data");
                }
            });
        }

        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add1') url ="{{ url('balita') }}";
                    else
                        url = "{{ url('balita') . '/' }}" + id;
                    
                    $.ajax({
                        url : url,
                        type : "POST",
                        data : $('#modal-form form').serialize(),
                        success : function($data){
                            $('#modal-form').modal('hide');
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