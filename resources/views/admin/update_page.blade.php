<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        label{
            display: inline-block;
            width: 200px;
            padding: 18px
        }

        input[tupe='text']{
            width: 300px;
            height: 60px;
        }
        textarea{
            width: 450px;
            height: 100px;
        }
        img{
            width: 400px;
            height: 350px;
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
            
            
            <h2>Update Product</h2>

            <div class="div_deg">

                <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$data->title}}" >
                    </div> 

                    <div>
                        <label for="">Description</label>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>

                    <div>
                        <label for="">Price</label>
                        <input type="text" name="price" value="{{$data->price}}" >
                    </div>

                    <div>
                        <label for="">Quantity</label>
                        <input type="text" name="quantity" value="{{$data->quantity}}" >
                    </div>

                    <div class="input_deg">
                        <label>Product Category:</label>

                        <select id="category" name="category" required>
                            <option value="{{$data->category}}">{{$data->category}}</option>

                            @foreach ($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                           
                        </select>
                    </div>

                    <div>
                        <label for="">Current Image:</label>
                        <img src="/products/{{$data->image}}" alt="">
                    </div>
                    <div>
                        <label for="">New Image:</label>
                        <input type="file" name="image" >
                    </div>

                    <div>
                        <input class="btn btn-success" type="submit" value="Update Product">
                    </div>

                </form>
            </div> 

            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>