<div id="clients" class="clients section">
    <div class="container py-6">
        <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
            <h4>Major Clients</h4>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12 our_client">
                @if ($ourClient)
                    @foreach ($ourClient as $k => $v)
                        <div class="col-lg-4 col-md-6 col-6 mb-4">
                            <div class="p-4">
                                <img src="{{ $v->image }}" alt="{{ $v->alt }}" title="{{ $v->title }}" class="img-fluid img-logo-cus">
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>