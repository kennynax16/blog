@extends('app.welcome')
@section('content')
<main>

    <section>
        <div class="container">
            <div class="block-hero">
                @foreach($categories as $category )
                    <div class="block">
                        <div class="spanish">
                            <span><a href="{{route('show',$category->id)}}">{{$category->title}}</a></span>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="main-text">
                <span>Популярные посты</span>
            </div>
        </div>
    </section>
    <section>

            <div class="container">
                <div class="grid">

        @foreach($posts as $post)
            @if($category->id===$post->category_id)
                        <div class="populars_post">
                            <div class="popular_block_1">
                                <img src="{{$post->image}}">
                            </div>
                            <div class="popular_block_2">
                                <p>{{$post->content}}</p>
                            </div>
                        </div>
            @endif
        @endforeach

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="grid">
            <div class="populars_post">
                <div class="popular_block_1">
                    <img src="https://images.unsplash.com/photo-1721355623035-f2584b8efd79?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw3OXx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="popular_block_2">
                    <p>Хабиб Нурмагомедов родился в селе Сильди Цумадинского района Дагестана.
                        Отец Абдулманап Магомедович Нурмагомедов был заслуженным тренером России, мастером спорта СССР по вольной борьбе. Умер в 2020 году. Мать занималась семьей и хозяйством.
                        «Мой отец Абдулманап Нурмагомедов выиграл чемпионат Украины по вольной борьбе и по самбо. <…> Его брат — Нурмагомед Нурмагомедов — чемпион мира по спортивному самбо 1992 года. С маминой стороны дядя — мастер спорта по вольной борьбе. Так что у меня особенно не было выбора, чем заниматься», — говорил боец в интервью «Спорт-Экспресс» [1].</p>
                </div>

            </div>
        </div>
        </div>
        <div class="container">
            <div class="grid">
            <div class="populars_post">
                <div class="popular_block_1">
                    <img src="https://images.unsplash.com/photo-1721355623035-f2584b8efd79?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw3OXx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="popular_block_2">
                    <p>Хабиб Нурмагомедов родился в селе Сильди Цумадинского района Дагестана.
                        Отец Абдулманап Магомедович Нурмагомедов был заслуженным тренером России, мастером спорта СССР по вольной борьбе. Умер в 2020 году. Мать занималась семьей и хозяйством.
                        «Мой отец Абдулманап Нурмагомедов выиграл чемпионат Украины по вольной борьбе и по самбо. <…> Его брат — Нурмагомед Нурмагомедов — чемпион мира по спортивному самбо 1992 года. С маминой стороны дядя — мастер спорта по вольной борьбе. Так что у меня особенно не было выбора, чем заниматься», — говорил боец в интервью «Спорт-Экспресс» [1].</p>
                </div>

            </div>
            </div>
        </div>

    </section>
</main>
@endsection
