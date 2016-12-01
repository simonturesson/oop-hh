@extends('layout')


@section('content')
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Contact</h1>
            </header>
        @yield('contact')

            <!-- Form -->
            <h2>Form</h2>

            <form method="post" action="">
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                        <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="special" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @stop
