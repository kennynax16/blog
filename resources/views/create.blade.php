@extends('app.welcome')
@section('content')
    <section>
<div class="container">
    <div class="forma" >
        <form  class="form-reg" action="{{route('store')}}"  method="post">
            @csrf
        <label>title</label>
        <input type="text" placeholder="Введите названия поста" name="title">
            <label>image</label>
            <input type="text" placeholder="" name="image">
        <label>content</label>
        <input type="text" placeholder="Контент" name="content">
        <label>category</label>
        <select  aria-label="Пример выбора по умолчанию" name="category_id">
            <option selected>Откройте это меню выбора</option>
            @foreach($categories as $category)
                <option value="1">{{$category->title}}</option>
            @endforeach


        </select>
            <button type="submit">create</button>
        </form>
    </div>
</div>
    </section>
@endsection
