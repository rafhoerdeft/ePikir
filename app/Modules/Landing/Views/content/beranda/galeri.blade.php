<!-- Galeri -->
<section id="portfolio" class="portfolio section"
    style="background-image: url('{{ assets_front . 'images/background/bg-1.png' }}')">
    <div class="container">
        <div class="row" style="margin: 52px">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg" style="color: #e2e2e2b3">Galeri</span>
                    <h1>Dokumentasi Kegiatan Terkini</h1>
                    {{-- <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula
                        bibendum
                        aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                    <p> --}}
                </div>
            </div>
        </div>

        @if ($galeri != null && $galeri != '')
            <div class="portfolio-inner">
                <div class="row">
                    <div class="col-12">
                        <div id="portfolio-item">
                            @foreach ($galeri as $item)
                                <!-- Single portfolio -->
                                <div class="cbp-item">
                                    <div class="portfolio-single">
                                        <div class="portfolio-head">
                                            <img style="height: 250px;"
                                                src="{{ $item->file_foto != null ? (!file_exists(realpath('upload/galeri/' . $item->file_foto)) ? base_url('assets/img/noimage/no_img3.jpg') : base_url('upload/galeri/' . $item->file_foto)) : ($item->link_video != null ? 'https://i.ytimg.com/vi_webp/' . get_segment($item->link_video) . '/sddefault.webp' : base_url('assets/img/noimage/no_img3.jpg')) }}"
                                                alt="#" />
                                        </div>
                                        <div class="portfolio-hover" style="padding: 15px">
                                            <h4 style="font-size: 12pt">
                                                @if ($item->jenis_galeri == 1)
                                                    <a data-fancybox="gallery1"
                                                        href="{{ base_url('upload/galeri/' . $item->file_foto) }}">{{ $item->judul_galeri }}</a>
                                                @else
                                                    <a href="{{ $item->link_video }}"
                                                        class="cbp-lightbox">{{ $item->judul_galeri }}</a>
                                                @endif
                                            </h4>
                                            <p style="font-size: 0.7rem;">
                                                {{ character_limiter($item->ket_galeri != null && $item->ket_galeri != '' ? $item->ket_galeri : $item->judul_galeri, 400, '...') }}
                                            </p>
                                            <div class="button" style="position: absolute; bottom: 15px;">
                                                @if ($item->jenis_galeri == 1)
                                                    <a class="primary" data-fancybox="gallery2"
                                                        href="{{ base_url('upload/galeri/' . $item->file_foto) }}"><i
                                                            class="fa fa-search"></i></a>
                                                @else
                                                    <a href="{{ 'https://www.youtube.com/embed/' . get_segment($item->link_video) }}"
                                                        class="primary" data-fancybox="videos1">
                                                        <i class="fa fa-play"></i></a>
                                                @endif

                                                {{-- <a href="portfolio-single.html"><i class="fa fa-link"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End portfolio -->
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="button">
                            <a class="btn primary" href="{{ base_url('landing/galeri') }}">Lihat Semua Galeri</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12 text-center font-italic">
                    <div class="shadow p-3 mt-5 bg-white rounded"
                        style="color: #2e2751; box-shadow: 0px 2px 8px #a7a7a77a;">
                        <h5><i class="fa fa-picture-o"></i> Belum ada dokumentasi kegiatan terkini.</h5>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!--/ End Galeri -->
