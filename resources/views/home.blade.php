@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="card">
                <div class="card-header">System Message</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Type</th>
                            <th class="text-center">Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="message in messages">
                            <td class="text-center">@{{ message.type }}</td>
                            <td class="text-center">@{{ message.content }}</td>
                        </tr>
                        <tr v-if="messages.length <= 0">
                            <td colspan="2" class="text-center">No Messages</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
