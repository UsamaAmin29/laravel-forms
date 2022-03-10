@extends('home')
@section('content')
<div class="ms-5 me-5 ">
    <div class="d-flex flex-row-reverse bd-highlight">
        <div class="p-2 bd-highlight"><a class="btn btn-md btn-primary " href={{ url('/') }}>Add Product</a></div>
    </div>
    <form method="post" action="{{ route('update.product') }}">
      @csrf  
      <div class="mb-3">

        <input type="hidden" name="id" value="{{ $product->id }}">

            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control"  name="name" value="{{$product->name}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Father Name</label>
            <input type="text" class="form-control"  name="fname" value="{{$product->fname}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control"  name="address" value="{{$product->address}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone no</label>
            <input type="number" class="form-control" name="phone" value="{{$product->phone}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control"  name="email" value="{{$product->email}}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" value="{{$product->password}}"  name="password">
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Male
            </label>
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
             Female
            </label>
          </div>
   <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    
</div>
@endsection
