<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        label{
            display: inline-block;
            width:250px;
            font-size: 18px;
            color: white!important;   
        }

        input[type='text']{
            width: 350px;
            height: 50;
        }
        textarea{
            width: 450px;
            height: 80px;
        }

        .input_deg{
            padding: 15px;
        }
    </style>

  </head>
  <body>
    {{-- header start --}}
   @include('admin.header')
   {{-- header end --}}

   {{-- sidebar start --}}
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <h2 style="color: whitesmoke">Add Product</h2>

            <div class="div_deg">
                

                <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input_deg">
                        <label>Product Title:</label>
                        <input type="text" id="title" name="title" required>
                    </div>

                    <div class="input_deg">
                        <label>Product Description:</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>

                    <div class="input_deg">
                        <label>Product Price:</label>
                        <input type="text" id="price" name="price" required>
                    </div>
                    
                    <div class="input_deg">
                        <label>Product Quantity:</label>
                        <input type="number" id="qty" name="qty" required>
                    </div>
                    
                    <div class="input_deg">
                        <label>Product Category:</label>

                        <select id="category" name="category" required>
                            <option value="">Select Category</option>

                            @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach

                        </select>
                    </div>
                    
                    <div class="input_deg">
                        <label>Product Image:</label>
                        <input type="file" id="image" name="image" >
                    </div>
                    
                    <div class="input_deg">
                        <input class="btn btn-success" type="submit" value="Add Product" >
                    </div>
                </form>

            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>