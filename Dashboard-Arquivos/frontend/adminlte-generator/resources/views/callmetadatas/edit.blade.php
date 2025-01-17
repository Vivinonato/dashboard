@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Call Meta Data
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($callmetadata, ['route' => ['callmetadatas.update', $callmetadata->Codigo], 'method' => 'patch']) !!}

                        @include('callmetadatas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
