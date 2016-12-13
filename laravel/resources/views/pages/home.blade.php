@extends('layout')


@section('content')
    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Simon's Coffee Log</h1>
            </header>
            <div class="content">
                <p>A coffee log built on Laravel</p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Whats brewing right now?</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Main -->
    <div id="main">


        <!-- One -->
        <section id="one" class="tiles">
            <article>
									<span class="image">
										<img src="/images/pic01.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">Latest Brew</a></h3>
                    <p>Lorem Ipsum</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="/images/pic02.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">Lorem Ipsum</a></h3>
                    <p>Lorem Ipsum</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="/images/pic03.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">Lorem Ipsum</a></h3>
                    <p>Lorem Ipsum</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="/images/pic04.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">Lorem Ipsum</a></h3>
                    <p>Lorem Ipsum</p>
                </header>
            </article>

        </section>
    </div>

@stop
