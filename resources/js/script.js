

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
  
  $.ajax({
    type : 'GET',
    url: '/payment/getbookcost',
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data:  {_token: CSRF_TOKEN,'id':$id},
    success:function (result) {
      $id=$("#amount").val(result);
    },
    error: function (response, status, error) {
      
    },
  });                 
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
  $.ajax({
    type : 'GET',
    url: '/payment/total',
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data:  {_token: CSRF_TOKEN,},
    success:function (response) {
      var amount=response["amount"];
      var payment_cost=response["payment_cost"];  
      
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Payment Details'],
        ['Amount Recived',     amount],
        ['Earn Cost',      payment_cost],
       
      ]);

      var options = {
        title: 'Payment Details',
        colors: ['#68b7dc', '#6894dc','#6871dc','#8068dc',],
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart'));

      chart.draw(data, options);
    }
        
    },
    error: function (response, status, error) {
      
    },
  });  
  var x=[[]];
  $.ajax({
    type : 'GET',
    url: '/payment/bookvice',
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data:  {_token: CSRF_TOKEN,},
    success:function (response) {
      // var amount=response;
     
      // $.each( response, function( key, value ) {
      //   x[key][0]=value["id"];
       
      //   x[key][1]=value["cost"];
       
      //   x[key][2]=value["payment"];
       

      // });
      // alert(x[0][0]);
    
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Books', 'Payment', 'Cost'],
          ['Load of the ring', 1000, 400],
          ['Picsels', 1170, 460],
          ['Harry Potter', 660, 1120],
          ['Hobbit', 1030, 540]
        ]);

        var options = {
          chart: {
            title: 'Compare with book',
            subtitle: 'Payment vs Cost',
            color:["red","yellow"]
          }
        };

        var chart = new google.charts.Bar(document.getElementById('chart1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
      
    
    },
    error: function (response, status, error) {
      
    },
  });  
  $.ajax({
    type : 'GET',
    url: '/payment/paymenthistory',
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data:  {_token: CSRF_TOKEN,},
    success:function (response) {
      // var amount=response["amount"];
      // var payment_cost=response["payment_cost"];
      // var date=response["payment_date"];
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Result');
      data.addColumn('number', 'Payment');
      data.addColumn('number', 'Cost');

      data.addRows([
        [1,  37.8, 80.8],
        [2,  30.9, 69.5],
        [3,  25.4,   57],
        [4,  11.7, 18.8],
        [5,  11.9, 17.6],
        [6,   8.8, 13.6],
        [7,   7.6, 12.3],
        [8,  12.3, 29.2],
        [9,  16.9, 42.9],
        [10, 12.8, 30.9],
        [11,  5.3,  7.9],
        [12,  6.6,  8.4],
        [13,  4.8,  6.3],
        [14,  4.2,  6.2]
      ]);

      var options = {
        chart: {
          title: 'Date vice results',
          subtitle: 'Recived payment and cost of earning'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('chart2'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
        
    },
    error: function (response, status, error) {
      
    },
  }); 