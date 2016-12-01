@extends('layout')


@section('content')
    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>S&P Beerlog</h1>
            </header>
            <div class="content">
                <p>A beer brewing log built on Laravel</p>
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
                    <h3><a href="#" class="link">GOT APA</a></h3>
                    <p>An IPA Inspired by the salty city by the ocean</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="/images/pic02.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">P&S ShipWreck black Ale</a></h3>
                    <p>Black, darkish Ale</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="/images/pic03.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">APA</a></h3>
                    <p>Standard APA</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="/images/pic04.jpg" alt=""/>
									</span>
                <header class="major">
                    <h3><a href="#" class="link">IPA</a></h3>
                    <p>Standard IPA</p>
                </header>
            </article>

        </section>
    </div>

@stop
