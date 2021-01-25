@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <h4>Store Procedure</h4>
                    <p>
                        Hallo untuk materi kali ini kita akan melakukan pembuatan store procedure.
                        store procedure ini digunakan untuk menyimpan data kedalam table.
                        saya harap semua design dari index,create,edit,hapus sudah semua kalian buat.
                        agar kalian dapat mengikuti materi ini.
                    </p>
                    <p>
                        Ok. Kita mulai saja kodingnya.
                    </p>
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0">1.Buka controller yang akan dibuat store prosedur nya</li>
                        <li class="list-group-item border-0">2.Tambahkan function store dan buat codenya</li>
                        <li class="list-group-item border-0">3.Buat modelnya</li>
                        <li class="list-group-item border-0">4.daftarkan model di controller</li>
                        <li class="list-group-item border-0">5.buka model dan daftarkan tablenya</li>
                        <li class="list-group-item border-0">6.Buat Route untuk store</li>
                    </ul>
                    <p>
                        example : XampleController.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                            <p>
                                <h3 class="text-white">store procedure code</h3>
                                <span class="text-white">
                                        public function store(Request $request){
                                            <p>
                                                $namaVariable = Model::create([
                                            </p>
                                            <p>
                                                'filed1' => $request->field1,
                                            </p>
                                            <p>
                                                ]);
                                            </p>
                                            <p>
                                                    return redirect()->back();
                                            </p>
                                        }
                                </span>
                            </p>
                        </div>
                    </div>
                    <p>
                        Membuat Model
                    </p>
                    <div class="card">
                        <div class="card-body bg-purple-600">
                            <p class="text-white">
                                jalankan perintah ini di cmd
                            </p>
                            <p class="text-white">
                               php artisan make:model Example
                            </p>
                        </div>
                    </div>
                    <p>
                       example : XampleController.php
                    </p>
                    <div class="card">
                        <div class="card-body bg-purple-600">
                            <p class="text-white">
                                namespace App\Http\Controllers;
                            </p>
                            <p class="text-white">
                                use App\Example;
                            </p>
                        </div>
                    </div>
                    <p>
                       example : Example.php
                    </p>
                    <div class="card">
                        <div class="card-body bg-purple-600">
                            <p class="text-white">
                                protected $table = 'exampletablename';
                            </p>
                            <p class="text-white">
                                protected $guarded = [];
                            </p>
                        </div>
                    </div>
                    <p>
                       example : web.php
                    </p>
                    <div class="card">
                        <div class="card-body bg-purple-600">
                            <p class="text-white">
                                route::post('store','StoreController@store');
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <h4>Menampilkan Data dari DB</h4>
                    <p>
                        Hallo untuk materi kali ini kita akan melakukan proces untuk menampilkan data dari
                        db ke dalam view html kita
                    </p>
                    <p>
                        Ok. Kita mulai saja kodingnya.
                    </p>
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0">1.Buka controller yang akan dipanggil datanya</li>
                        <li class="list-group-item border-0">2.modifikasi sedikit di function index</li>
                        <li class="list-group-item border-0">3.buka index yang ingin di panggil datanya</li>
                        <li class="list-group-item border-0">4.tambahkan code nya</li>
                    </ul>
                    <p>
                        example : XampleController.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                            <p>
                                <h3 class="text-white">Modifikasi index</h3>
                                <span class="text-white">
                                    <p class="text-white">
                                       $namavariables = Model::all();
                                    </p>
                                    <p class="text-white">
                                       return view('index' compact('namavariables'));
                                    </p>
                                </span>
                            </p>
                        </div>
                    </div>
                    <p>
                        example : index.blade.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                             <img src="{{asset('img/foreach.png')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 pt-2">
            <div class="card border-0">
                <div class="card-body">
                    <h4>Edit</h4>
                    <p>
                        Hallo untuk materi kali ini kita akan melakukan proces untuk mengedit data yang telah kita buat
                    </p>
                    <p>
                        Ok. Kita mulai saja kodingnya.
                    </p>
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0">1.Buka controller yang akan dipanggil edit datanya</li>
                        <li class="list-group-item border-0">2.modifikasi sedikit di function edit</li>
                        <li class="list-group-item border-0">3.buka edit.blade yang ingin di edit</li>
                        <li class="list-group-item border-0">4.modifikasi</li>
                        <li class="list-group-item border-0">4.tambahkan route di web</li>
                    </ul>
                    <p>
                        example : XampleController.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                            <p>
                                <h3 class="text-white">Modifikasi edit</h3>
                                <span class="text-white">
                                    <p class="text-white">
                                       public function edit($id)
                                    </p>
                                    <p class="text-white">
                                       $namavariable = Example::findOrFaill($id);
                                    </p>
                                    <p class="text-white">
                                       return view('edit', compact('namavariable'));
                                    </p>
                                </span>
                            </p>
                        </div>
                    </div>
                    <p>
                        example : edit.blade.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                             <img src="{{asset('img/edit.png')}}" width="100%" alt="">
                             <p class="text-white">
                                dan tambahkan @method('PATCH') tepat dibawah @csrf
                             </p>
                        </div>
                    </div>
                    <p>
                        example : web.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                             <p class="text-white">
                                route::get('edit\{example}','StoreController@edit');
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 pt-2">
            <div class="card border-0">
                <div class="card-body">
                    <h4>Update</h4>
                    <p>
                        Hallo untuk materi kali ini kita akan melakukan proces untuk Update data yang telah di edit
                    </p>
                    <p>
                        Ok. Kita mulai saja kodingnya.
                    </p>
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0">1.Buka controller yang akan dipanggil update datanya</li>
                        <li class="list-group-item border-0">2.tambahkan function update</li>
                        <li class="list-group-item border-0">3.buka edit.blade.php</li>
                        <li class="list-group-item border-0">4.tambahkan route di edit.blade</li>
                        <li class="list-group-item border-0">4.tambahkan route di web</li>
                    </ul>
                    <p>
                        example : XampleController.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                            <p>
                                <h3 class="text-white">Buat function update</h3>
                                <span class="text-white">
                                    <p class="text-white">
                                       public function update(Request $request, $id)
                                    </p>
                                    <p class="text-white">
                                        $namavarialbe = Model::where('id', $id)->first();
                                    </p>
                                    <p class="text-white">
                                       $namavarialbe->field1 = $request->input('field1');
                                    </p>
                                    <p class="text-white">
                                       $namavarialbe->save();
                                    </p>
                                </span>
                            </p>
                        </div>
                    </div>
                    <p>
                        example : edit.blade.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                             <p class="text-white">
                               route('update',$get->id)
                             </p>
                        </div>
                    </div>
                    <p>
                        example : web.php
                    </p>
                    <div class="card ">
                        <div class="card-body bg-purple-600">
                             <p class="text-white">
                                route::pacth('update\{example}','StoreController@update');
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection