@extends('layouts.app')

@section('content')
<section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="card"">
                    <div class="col-md-12">
                        <div class="card-body">
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
                                    <input type="number" name="number9" id="number9" class="number9" max="999" value="{{ $data['number9'] ?? '7'}}">
                                    <input type="number" name="number10" id="number10" class="number10" max="999" value="{{ $data['number10'] ?? '5'}}">
                                    <input type="number" name="number11" id="number11" class="number11" max="999" value="{{ $data['number11'] ?? '10'}}">
                                    <input type="number" name="number12" id="number12" class="number12" max="999" value="{{ $data['number12'] ?? '3'}}">
                                    <input type="number" name="number13" id="number13" class="number13" max="999" value="{{ $data['number13'] ?? '9'}}">
                                    <p class="mx-4" style="font-size: 20px;">You are here</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-success my-2 m-4">Check the fastest way</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <table class="table">
                                    <tr><th>The house</th><th>min kilometers to get</th></tr>

                                    <tr><td>home</td><td>{{ $result[0] }}km</td></tr>
                                    <tr><td>Mountains</td><td>{{ $result[1] }}km</td></tr>
                                    <tr><td>Farm</td><td>{{ $result[2] }}km</td></tr>
                                    <tr><td>Town</td><td>{{ $result[3] }}km</td></tr>
                                    <tr><td>Camping</td><td>{{ $result[4] }}km</td></tr>
                                    <tr><td>Forest</td><td>{{ $result[5] }}km</td></tr>
                                    <tr><td>Church</td><td>{{ $result[6] }}km</td></tr>
                                    <tr><td>Vilage</td><td>{{ $result[7] }}km</td></tr>
                                    <tr><td>Megapolis</td><td>{{ $result[8] }}km</td></tr>
                                </table>
                            </div>
                            <div class="text">
                                    <p style="font-size: 20px;">above you can see the table. The table shows the minimum distance to get to a certain place</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection