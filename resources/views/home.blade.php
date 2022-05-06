@extends('layouts.app')

@section('content')
<section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="card"">
                    <div class="col-md-12">
                        <div class="card-body" style="height: 900px;">
                            <div class="our">
                                <img src="/svg/project.svg" alt="" class="img">
                                <input type="number" name="number1" id="number1" class="number1" max="999" value="16">
                                <input type="number" name="number2" id="number2" class="number2" max="999" value="4">
                                <input type="number" name="number3" id="number3" class="number3" max="999" value="11">
                                <input type="number" name="number4" id="number4" class="number4" max="999" value="9">
                                <input type="number" name="number5" id="number5" class="number5" max="999" value="3">
                                <input type="number" name="number6" id="number6" class="number6" max="999" value="21">
                                <input type="number" name="number7" id="number7" class="number7" max="999" value="13">
                                <input type="number" name="number8" id="number8" class="number8" max="999" value="5">
                                <input type="number" name="number9" id="number9" class="number9" max="999" value="10">
                                <input type="number" name="number10" id="number10" class="number10" max="999" value="14">
                                <input type="number" name="number11" id="number11" class="number11" max="999" value="8">
                                <input type="number" name="number12" id="number12" class="number12" max="999" value="19">
                                <input type="number" name="number13" id="number13" class="number13" max="999" value="6">
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
