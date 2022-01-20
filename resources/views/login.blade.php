@extends('master')
@section('content')
<div class="container-fluid" style="margin-top: 100px; padding: 100px;">
    <div class="row justify-content-center">
        <div class="col-4 col-lg-4">
            <div class="card" style="width: 700px; height: 700px; border-radius: 20px">
                <div class="container-fluid" style="margin-top: 50px">
                    <h1 style="justify-content: center; text-align: center; margin-bottom: 80px">Login</h1>
                    <form>
                        <div class="md-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="md-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Login</button>
                        <br>
                    </form>
                </div>
        
            </div>
            
        </div>
    </div>
</div>

@endsection