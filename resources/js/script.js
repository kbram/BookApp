

$('#checkpay').prop('checked',false);
$('#checkpay').change(function() { 
    if($(this).prop('checked')){
        $('#payment_percentage').prop('readonly',false)
    }
    else{
        $('#payment_percentage').prop('readonly',true);
    }                    
});
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$('#book_id').on('change', function() {
  
 $id=$(this).val();

  // $.ajax({
  //   type : 'GET',
  //   url: 'payment/getbookcost',
  //   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
  //   data:  {_token: CSRF_TOKEN,'id':$id},
  //   success:function (result) {
     
  //     alert(result[0]);
  //   },
  //   error: function (response, status, error) {
  //     alert("tgh");
  //   },
  // });                 
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
                    swal("Poof! Your imaginary   data has been deleted!", {
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
          swal("Your imaginary payment data is safe!");
        }
      });
        
        
	});

    $(document).on('click', '.btn-book', function() {
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
                    url: 'book/delete',
                    data:  {_token: CSRF_TOKEN,'id':$id},
                    success:function (result) {
                        swal("Poof! Your imaginary book data has been deleted!", {
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
              swal("Your imaginary book data is safe!");
            }
          });
            
            
        });

        
  $(document).on('click', '.navVarify', function() {
    $('.navVarify').removeClass('navclick');
    
    $(this).find(".navclick").css("visibility","visible");


  });
  $(document).ready(function() {

    // Pause just a moment
    setTimeout(function() {
  
      var $book = $('.book');
  
      // Apply the intro classes that will 
      // appear to turn the book,
      // revealing its spine
      $book.addClass('bookIntro');
  
      // pause another moment, then turn back
      setTimeout(function() {
        $book.removeClass('bookIntro');
      }, 2000);
  
  
    }, 1000);
  
  
  });