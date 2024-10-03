<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders</title>
    @include('home.css')
    <style type="text/css">
        .div_center{
            display: flex;
            justify-content: center;
            align-content: center;
            margin: 60px;
        }
        table{
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }
        th{
            border:2px solid black;
            background: black;
            color: skyblue;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
        }
        td{
            border: 2px solid ;
            padding:10px;
            }
    </style>

</head>
<body>

    <div class="hero_area">
        <!-- header section strats -->
    @include('home.header')

        <div class="div_center">
            <table>
                <tr>
                    <th>Product Name:</th>
                    <th>Product Price:</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>

                @foreach ($order as $order)
                    
            
                <tr>
                    <td>{{$order->Product->title}}</td>
                    <td>${{$order->Product->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <img height="100" width="150" src="products/{{$order->Product->image}}" alt="">
                    </td>
                </tr>

                @endforeach
            </table>
        </div>

    </div>




    
  <!-- info section -->

  @include('home.footer')
    
</body>
</html>