@extends('layouts.app')

@section('content')
    <form action="{{ route('set.theme') }}" method="POST">
        @csrf
        <label for="theme-select">Выберите тему:</label>
        <select name="theme" id="theme-select">
            <option value="classic" {{ $theme == 'classic' ? 'selected' : '' }}>Classic</option>
            <option value="cuba" {{ $theme == 'cuba' ? 'selected' : '' }}>Cuba</option>
        </select>
        <button type="submit" class="btn btn-theme">Сохранить</button>
    </form>
@endsection