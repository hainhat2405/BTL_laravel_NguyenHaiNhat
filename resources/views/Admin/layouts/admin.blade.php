<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    @yield('title')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">


    <!-- <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/admin123.css')}}" rel="stylesheet">

</head>
<body>
    <div id="title1">
        <div class="feature">
            <h3>
                <?php
                    $name = Auth::user()->name;
                    if($name){
                        echo $name;
                    }
                ?>
            </h3>
            
            <a href="{{route('logout_auth')}}">
                <i class="fa fa-power-off" style="font-size:20px;color:rgb(48, 130, 198)"></i>Đăng xuất
            </a>
        </div>
        <div class="tieude">
          
            <h1>Hệ quản trị nội dung</h1>
        </div>
    </div>
    <hr style="border: 2px solid blue;">
    <hr style="border: 2px solid red;margin-top: 5px;">
    
    <div class="content_admin">
        @include('admin.partials.navbar')
        <div id="page2">
        @yield('content')
        </div>
    </div>

</body>
<script src="js/admin.js"></script>
<script src="js/SanPham.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function(){

        chart30daysorder();
        var chart = new Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
            pointFillColors: ['#fffff'],
            pointStrokeColors: ['black'],
            fillOpacity: 0.6,
            hideHover: 'auto',
            parseTime: false,
            // The name of the data record attribute that contains x-values.
            xkey: 'period',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['order', 'sales', 'profit', 'quantity'],
            // Labels for the ykeys -- will be displayed when you hover over the chart.
            labels: ['đơn hàng', 'doanh số','lợi nhuận', 'số lượng']
        });

        function chart30daysorder(){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ url('/days_order') }}", // Kiểm tra URL này
                method: "POST",
                dataType: "JSON",
                data: {
                    _token: _token
                },
                success: function(data){
                    chart.setData(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log("Error: " + textStatus + " " + errorThrown); // Thêm đoạn này để debug lỗi
                }
            });
        }

    
        $('.dashboard-filter').change(function(){
            var dashboard_value = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ url('/dashboard-filter') }}", // Kiểm tra URL này
                method: "POST",
                dataType: "JSON",
                data: {
                    dashboard_value: dashboard_value,
                    _token: _token
                },
                success: function(data){
                    chart.setData(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log("Error: " + textStatus + " " + errorThrown); // Thêm đoạn này để debug lỗi
                }
            });
        });


        $('#btn-dashboard-filter').click(function(){
            var _token = $('input[name="_token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();
            $.ajax({
                url: "{{ url('/filter-by-date') }}", // Kiểm tra URL này
                method: "POST",
                dataType: "JSON",
                data: {
                    from_date: from_date,
                    to_date: to_date,
                    _token: _token
                },
                success: function(data){
                    chart.setData(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log("Error: " + textStatus + " " + errorThrown); // Thêm đoạn này để debug lỗi
                }
            });
        });
    });
</script>

<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            prevText:"Tháng trước",
            nextText:"Tháng sau",
            dateFormat:"yy-mm-dd",
            dayNamesMin:["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
            duration:"slow"
        });
        $( "#datepicker2" ).datepicker({
            prevText:"Tháng trước",
            nextText:"Tháng sau",
            dateFormat:"yy-mm-dd",
            dayNamesMin:["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
            duration:"slow"
        });
        
    } );
</script>



</html>