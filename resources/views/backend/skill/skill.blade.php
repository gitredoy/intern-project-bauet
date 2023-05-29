@extends('backend.master')

@push('title')
    Skill
@endpush

@section('content')
    <div class="pagetitle">
        <h1>Skill</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.view')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Skill</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
           <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>Skill Details</h3>
                      <a href="{{route('admin.skill.add')}}" class="btn btn-primary">Add Skill</a>
                  </div>
                  <div class="card-body">
                      @if(Session::has('success'))


                          <div class="alert alert-primary alert-dismissible fade show" role="alert">
                              {{Session::get('success')}}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                      @endif
                      <table class="table table-striped table-bordered">
                          <thead>
                           <tr>
                               <td>Sl</td>
                               <td>Name</td>
                               <td>Percentage</td>
                               <td>Action</td>
                           </tr>
                          </thead>
                          <tbody>
                           @foreach($skills as $skill)
                               <tr>
                                   <td>{{$skill->id}}</td>
                                   <td>{{$skill->name}}</td>
                                   <td>{{$skill->percentage}}</td>
                                   <td>
                                       <a href="" class="btn btn-sm btn-primary">Edit</a>
                                       <a href="" class="btn btn-sm btn-warning">Delete</a>
                                   </td>
                               </tr>
                           @endforeach



                          </tbody>
                      </table>
                  </div>
              </div>
           </div>



        </div>
    </section>
@endsection
