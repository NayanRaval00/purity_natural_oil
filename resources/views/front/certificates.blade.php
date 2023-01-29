@include('front.includes.header')
<section class="section section-md section-first bg-default">
    <h2>Our Certificates</h2>
    <div class="container">

        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 ">
                <article class="box-contacts">
                    <iframe src="{{ asset('assets/pdf/first.pdf')}}" width="100%" height="500px"></iframe>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 ">
                <article class="box-contacts">
                    <iframe src="{{ asset('assets/pdf/second.pdf')}}" width="100%" height="500px"></iframe>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 ">
                <article class="box-contacts">
                    <iframe src="{{ asset('assets/pdf/third.pdf')}}" width="100%" height="500px"></iframe>
                </article>
            </div>
        </div>
    </div>
</section>
@include('front.includes.footer')