@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div>
                 <table class="table">
            <thead>
                
                <th colspan="3">All the package for Giphy is not stable</th>
                
                
            </thead>
            <tbody>
                
                <tr >
                    <td>
                        <iframe src="https://giphy.com/embed/yoJC2El7xJkYCadlWE" width="200" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/kiss-brad-pitt-thank-you-yoJC2El7xJkYCadlWE">via GIPHY</a></p>
                    </td>
                    <td>
                        <iframe src="https://giphy.com/embed/hrBSJ2So6iTo4" width="200" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/thank-you-thanks-hrBSJ2So6iTo4">via GIPHY</a></p>
                    </td>
                    <td>
                        <iframe src="https://giphy.com/embed/VObHs6oqEWFNe" width="200" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/reaction-doctor-who-nope-VObHs6oqEWFNe">via GIPHY</a></p>
                    </td>
                </tr>
                 <tr >
                    <td>
                       <iframe src="https://giphy.com/embed/HJ8NsNtn9VswE" width="200" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/day-reddit-year-HJ8NsNtn9VswE">via GIPHY</a></p>
                    </td>
                    <td>
                        <iframe src="https://giphy.com/embed/3o6Zt6KHxJTbXCnSvu" width="200" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/ufc-mma-ufc-205-3o6Zt6KHxJTbXCnSvu">via GIPHY</a></p>
                    </td>
                    <td>
                        <iframe src="https://giphy.com/embed/OtbZhLpNLxDoc" width="200" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/reactiongifs-weird-thank-you-OtbZhLpNLxDoc">via GIPHY</a></p>
                    </td>
                </tr>
               
            </tbody>
        </table>
                
               </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials._footer')
@endsection
