@extends('users.layout.layout')

@section('content')
    <main class="page">
        <section class="clean-block">
            <div class="container">
                <div class="block-content">
                    <div class="add-object">
                        <h2>Sources</h2>
                        <a class="btn btn-primary" href="/sources/add/">Add New Source</a>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>Source Name</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">URL </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $db)
                                        <tr>
                                            <td><a href="/manage/sources/edit/8982/">{{$db->name}}</a></td>
                                            <td class="text-center">
                                                {{$db->description}}
                                            </td>
                                            <td class="text-center">
                                                <a href="http://127.0.0.1:8000/storage/url/{{$db->file}}" >http://127.0.0.1:8000/storage/url/{{$db->file}}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </section>
    </main>
@endsection
