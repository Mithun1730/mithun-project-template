     <!--UpdateScript-->
     <script>
                $(document).on('click','.edit_data',function(){
                  var edit_id=$(this).attr('id');
                  $.ajax({
                    url:'update.php',
                    type:'post',
                    data:{edit_id:edit_id},
                    success:function(data){
                      $('#info_update').html(data);
                      $('#edit_data').modal('show');
                    }
                  });
                });
              </script>
                  <!--End of Update Script-->