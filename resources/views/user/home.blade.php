@extends('user.layouts.navbar')


@section('content')

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('homesearch') }}" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="search" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">


            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control" id="options" onchange="optionCheck()">
                                <option>Sort by</option>
                                <option value="murah">Paling Murah</option>
                                <option value="mahal">Paling Mahal</option>
                            </select>
                        </div>
                    </div>
                </div>
                @foreach($produk->chunk(4) as $chunk)

                <div class="row">

                        <!-- Produk -->
                        @foreach ($chunk as $produk)

                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival" >
                            <div class="single-new-arrival-bg" >
                                <img src="{{asset('storage/img/'.$produk->image1)}}"  alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-1">
                                    <p>sale</p>
                                </div>
                                <div class="new-arrival-cart">

                                    <p style="margin-left: 10px;">

                                        <span class="lnr lnr-frame-expand"></span>
                                        <a href="{{ route('detailproduk', $produk->id) }}">Show</a>
                                    </p>

                                </div>
                            </div>
                            <h4><a href="{{ route('detailproduk', $produk->id) }}">{{ $produk->name }}</a></h4>
                            <p class="arrival-product-price money">{{ $produk->price }}</p>
                        </div>
                    </div>

                    @endforeach


                         <!-- Produk -->

                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- End Content -->



    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zahida Painting</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Jl. Kh. Mansyur No.58, Ledok Kulon Tiga, Ledok Wetan, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62112
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:0821-1112-8648">0821-1112-8648</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:zahidapainting01@gmail.com">zahidapainting01@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Kategori</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Tas dan Dompet</a></li>
                        <li><a class="text-decoration-none" href="#">Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Kebaya</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>

                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/zahida.hidayah.31/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/zahida_painting/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.tiktok.com/@zahidapainting_01"><i class="fab fa-tiktok fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://wa.me/+6282111128648"><i class="fab fa-whatsapp fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>


    </footer>


    <script type="text/javascript">
        function optionCheck(){
            var option = document.getElementById("options").value;
            if(option == "murah"){
                window.location = "{{ route('murah') }}";
            }
            if(option == "mahal"){
                window.location = "{{ route('mahal') }}";
            }
        }
    </script>

<script>
    let x = document.querySelectorAll(".money");
    for (let i = 0, len = x.length; i < len; i++) {
        let num = Number(x[i].innerHTML)
                  .toLocaleString('en');
        x[i].innerHTML = num;
        x[i].classList.add("currSign");
    }
</script>
    @endsection
