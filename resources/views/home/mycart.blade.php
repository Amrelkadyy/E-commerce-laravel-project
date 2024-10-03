<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <style type="text/css">
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }
    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }
    th{
        border: 2px solid black;
        text-align: center;
        color: skyblue;
        font: 20px;
        font-weight: bold;
        background-color: black;
    }
    td{
        border: 2px solid skyblue;
    }
    .cart_value{
        text-align: center;
        padding: 18px;
        margin-bottom: 70px;
        color: rgb(75, 142, 235);
    }
    .cart_value span{
        color: red;
    }
    .order_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right:115px;
        margin-top: -20px;
    }
    label{
        display: inline-block;
        width: 150px;
        }
    .div_gap{
        padding: 15px;
    }
</style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
@include('home.header')
    <!-- end header section -->
 

    <div class="div_deg">

        <table>
            <tr>
                <th>Product Title</th>

                <th>Price</th>

                <th>Image</th>
                <th>Remove</th>
            </tr>

        </tr>
        <?php
        $value = 0;
        ?>

            @foreach ($cart as $cart)
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>${{$cart->product->price}}</td>
                <td>
                    <img width="100" height="110" src="/products/{{$cart->product->image}}" alt="">
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">Remove</a>
                </td>
            </tr>
            <?php
            $value = $value + $cart->product->price;
            ?>
            @endforeach
        </table>

    </div>

    <div class="cart_value">
        <h3>Total Value of Cart is : <span>${{$value}}</span></h3>
    </div>

    
    <div class="order_deg">
        <form action="{{url('confirm_order')}}" method="POST">
            @csrf
            <div class="div_gap">
                <label>Receiver Name:</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="div_gap">
                <label>Receiver Address:</label>
                <textarea name="address">{{Auth::user()->address}}</textarea>
            </div>
            <div class="div_gap">
                <label>Receiver Phone:</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <div class="div_gap">
                <input class="btn btn-primary" type="Submit" value="Cash On Delivery">
                <a class="btn btn-success" href="{{url('stripe',$value)}}">Pay Using Card</a>
            </div>
        </form>
    </div>





{{--

{{$cart->user_id}}

<h1></h1>
<h1>{{$cart->user->name}}</h1>
    
 --}}


   

  <!-- info section -->

    @include('home.footer')
  
</body>

</html>