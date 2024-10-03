<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-content: center;
            margin: 60px;  
        }
        input[type='text']
        {
            width: 400px;
            height: 50px;
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


            <div class="div_deg">

                <h1 style="color: white">Update Category</h1>

                <form action="{{url('update_category',$data->id)}}" method="POST">
                    @csrf
                    <input type="text" name="category" value="{{$data->category_name}}">
                    <input class="btn btn-info" type="submit" value="Update Category">
                </form>

            </div>
  

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>