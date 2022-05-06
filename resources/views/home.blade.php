@extends('layouts.app')

@section('content')
<section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div style="margin-left: 10%">
                                <img src="/svg/project.svg" alt="" style="height: 800px;">
                            <p >Add new Invoice</p>
                            </div>
                            <div style="">

                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form action="{{ url('/search') }}" class="form-inline my-2 my-lg-0 d-flex p-3" type="get">
                                    <input class="form-control mr-sm-2" type="search" name='query' placeholder="Find Invoice">
                                    <button class="btn btn-outline-light my-2 m-3">search</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
