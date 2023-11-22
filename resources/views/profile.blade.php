@extends('layouts.app')
  
@section('title', 'Admin')
  
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Info</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">

                    <div class="col-md-6">
                        <label class="labels">Nama</label>
                        <label type="text" name="name" class="form-control" placeholder="Nama Admin">{{ auth()->user()->name }}</label>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <label type="text" name="email" disabled class="form-control" placeholder="Email">{{ auth()->user()->email }}</label>
                    </div>
                </div>
        </div>
        
    </div>   
            
        </form>
@endsection