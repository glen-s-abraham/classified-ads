@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center mt-2"><h4>Verify your Account</h4></div>
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                <div class="card-body">
                <form action="{{route('verification.send')}}" method="post">@csrf
                        
                        
                        <div class="form-group row mb-0">
                         
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">Send Verification Link</button>
                                
                            </div>
                        </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

