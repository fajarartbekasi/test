@extends('layouts.app')

@section('content')

<div class="card border-0 pt-3" >
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="alert bg-violet-900" role="alert" style="margin-top: -50px">
                    <div class="d-flex">
                        <h2 class="text-white">Hello,</h2>
                        <h2 class="text-cyan-400">Username</h2>
                    </div>
                    <h6 class="text-white">
                        What will you do today, if there is a schedule you want to change you can set your in app preferences here.
                    </h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-body shadow-sm">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>Important tasks</h4>
                            <h6 class="text-secondary">Today 24, Jan 2019</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h1 class="text-violet-900">45</h1>
                        <div>
                            <h6>Urgent</h6>
                            <h6>Last Urgent</h6>
                            <h6>Required</h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body shadow-sm">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>Important tasks</h4>
                            <h6 class="text-secondary">Today 24, Jan 2019</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h1 class="text-violet-900">45</h1>
                        <div>
                            <h6>Urgent</h6>
                            <h6>Last Urgent</h6>
                            <h6>Required</h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body shadow-sm">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>Important tasks</h4>
                            <h6 class="text-secondary">Today 24, Jan 2019</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h1 class="text-violet-900">45</h1>
                        <div>
                            <h6>Urgent</h6>
                            <h6>Last Urgent</h6>
                            <h6>Required</h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pt-3 row mx-auto">
                <div class="col-md-3">
                    <div class="card-body shadow-sm">
                        <div class="text-center">
                            <h4 class="text-cyan-400">Laboratory</h4>
                            <h6 class="text-secondary">Result</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body shadow-sm">
                        <div class="text-center">
                            <h4 class="text-cyan-400">New Event</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body shadow-sm">
                        <div class="text-center">
                            <h4 class="text-cyan-400">Reprt</h4>
                            <h6 class="">Archives</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body shadow-sm">
                        <div class="text-center">
                            <h4 class="text-cyan-400">Payments</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
