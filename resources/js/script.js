$('#newBook').click(function(){
   
   $('#createBook').addClass('d-block');
   $('#showBook').addClass('d-none');
});

$('#checkpay').prop('checked',false);
$('#checkpay').change(function() { 
    if($(this).prop('checked')){
        $('#payment_percentage').prop('readonly',false)
    }
    else{
        $('#payment_percentage').prop('readonly',true);
    }                    
});

$(document).on('click', '.btn-payment', function() {
    $id=this.id;
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type : 'POST',
                url: 'payment/delete',
                data:  {_token: CSRF_TOKEN,'id':$id},
                success:function (result) {
                    swal("Poof! Your imaginary data has been deleted!", {
                        icon: "success",
                      });
                    
                    
                        location.reload();
                },
                error: function (response, status, error) {
                    if (response.status === 422) {
                       
                    };
                },
            });
          
        } else {
          swal("Your imaginary data is safe!");
        }
      });
        
        
	});
