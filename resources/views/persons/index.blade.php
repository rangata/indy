@extends('layouts.app')

@section('content')
  <person-index-component :persons="{{ $allpersons }}"></person-index-component>
@endsection