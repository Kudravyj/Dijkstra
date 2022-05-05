@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="svg/project.svg" alt="">
                </div>

                <table>
                    <tr>
                        <th>Count</th>
                        <th>kilometre</th>

                    </tr>
                
                    <tr>
                        <td>hello</td>
                        <td>{{ $result[1] }}</td>
                    </tr>
                
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
