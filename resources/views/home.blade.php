@extends('layouts.app')

@section('content')
<section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="card"">
                    <div class="col-md-12">
                        <div class="card-body" style="height: 900px;">
                            <div class="our">
                                <form action="/custom">
                                    <img src="/svg/project.svg" alt="" class="img">
                                    <input type="number" name="number1" id="number1" class="number1" max="999" value="{{ $data['number1'] ?? '22'}}">
                                    <input type="number" name="number2" id="number2" class="number2" max="999" value="{{ $data['number2'] ?? '4'}}">
                                    <input type="number" name="number3" id="number3" class="number3" max="999" value="{{ $data['number3'] ?? '11'}}">
                                    <input type="number" name="number4" id="number4" class="number4" max="999" value="{{ $data['number4'] ?? '9'}}">
                                    <input type="number" name="number5" id="number5" class="number5" max="999" value="{{ $data['number5'] ?? '3'}}">
                                    <input type="number" name="number6" id="number6" class="number6" max="999" value="{{ $data['number6'] ?? '21'}}">
                                    <input type="number" name="number7" id="number7" class="number7" max="999" value="{{ $data['number7'] ?? '13'}}">
                                    <input type="number" name="number8" id="number8" class="number8" max="999" value="{{ $data['number8'] ?? '5'}}">
                                    <input type="number" name="number9" id="number9" class="number9" max="999" value="{{ $data['number9'] ?? '10'}}">
                                    <input type="number" name="number10" id="number10" class="number10" max="999" value="{{ $data['number10'] ?? '5'}}">
                                    <input type="number" name="number11" id="number11" class="number11" max="999" value="{{ $data['number11'] ?? '7'}}">
                                    <input type="number" name="number12" id="number12" class="number12" max="999" value="{{ $data['number12'] ?? '3'}}">
                                    <input type="number" name="number13" id="number13" class="number13" max="999" value="{{ $data['number13'] ?? '9'}}">
                                    <p>You are here</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary my-2 m-3">Check the fastest way</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
