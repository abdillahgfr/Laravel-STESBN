@extends('layout.app')

@section('content')

 <!-- Start Bottom Header -->
 <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Blog</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">STIPAN Blog Page</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>post terkini</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/blog1.png" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Kenapa Kuliah itu penting ?</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/blog4.png" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Kampus Kelas Karyawan daerah Tangerang Selatan</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/blog3.png" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Jurusan Manajemen menjadi jurusan terfavorit di Indonesia</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												   <img src="img/blog/blog2.png" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> Yuk cari tahu apa itu STIPAN.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                  <li>
                    <a href="#">Portfolio</a>
                  </li>
                  <li>
                    <a href="#">Project</a>
                  </li>
                  <li>
                    <a href="#">Design</a>
                  </li>
                  <li>
                    <a href="#">wordpress</a>
                  </li>
                  <li>
                    <a href="#">Joomla</a>
                  </li>
                  <li>
                    <a href="#">Html</a>
                  </li>
                  <li>
                    <a href="#">Website</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <a href="#">07 July 2016</a>
                  </li>
                  <li>
                    <a href="#">29 June 2016</a>
                  </li>
                  <li>
                    <a href="#">13 May 2016</a>
                  </li>
                  <li>
                    <a href="#">20 March 2016</a>
                  </li>
                  <li>
                    <a href="#">09 Fabruary 2016</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <a href="#">Website</a>
                    </li>
                    <li>
                      <a href="#">Joomla</a>
                    </li>
                    <li>
                      <a href="#">Html</a>
                    </li>
                    <li>
                      <a href="#">wordpress</a>
                    </li>
                    <li>
                      <a href="#">Masonry</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="{{ route('blog-details') }}">
											<img src="img2/blog/blog1.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">6 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2022-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Kuliah Terjangkau daerah Tangerang Selatan</a>
										</h4>
                  <p>
                    Kalau Kamu nyari universitas swasta termurah, jawabannya banyak banget! Tapi kalau nyari murah dan berkualitas, Kamu bisa dapetin dengan membaca rekomendasi daftar nama universitas di bawah ini. 
                  </p>
                </div>
                <span>
										<a href="{{ route('blog-details') }}" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="{{ route('blog-details') }}">
											<img src="img2/blog/blog.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">7 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2022-04-05 / 11:20:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Kampus Terbaik di Bekasi dan Jakarta</a>
										</h4>
                  <p>
                    Kuliah itu penting loh temen temen karena untuk menemukan relasi baru dan membuka jaringan pertemanan jadi lebih mudah. Buat kalian yang ingin kuliah berikut daftar kampus yang paling banyak diminati.
                  </p>
                </div>
                <span>
										<a href="{{ route('blog-details') }}" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="{{ route('blog-details') }}">
											<img src="img2/blog/b1.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">13 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2022-04-05 / 12:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Bagaimana sih agar lulus tepat waktu</a>
										</h4>
                  <p>
                    Berikut  cara agar lulus kuliah tepat waktu<br>
                    1. Komitmen. Komitmen yang kuat akan membantu kita dalam mencapai tujuan.
                    <br> 2. Prioritas. <br>
                    3. Proaktif. Jadilah proaktif dan manfaaatkan fasilitas yang tersedia di kampus dengan baik.
                  </p>
                </div>
                <span>
										<a href="{{ route('blog-details') }}" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="{{ route('blog-details') }}">
											<img src="img2/blog/gambar1.png" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">1 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2022-06-10 / 10:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Cari kuliah terjangkau dan waktu fleksibel di Jakarta Selatan</a>
										</h4>
                  <p>
                   Buat kalian yang masih bingung cari kuliah dengan harga terjangkau tetapi waktu kuliah fleksibel ? berikut beberapa rekomendasi kampus yang paling banyak diminati dibawah ini.
                  </p>
                </div>
                <span>
										<a href="{{ route('blog-details') }}" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="{{ route('blog-details') }}">
											<img src="img2/blog/6.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">20 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2022-02-07 / 07:16:26
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Beberapa Tips Memilih jurusan yang tepat</a>
										</h4>
                  <p>
                    Apakah kamu masih bingung bagaimana cara memilih jurusan kuliah yang tepat? Tak perlu khawatir karena ada tips mengenali minat dan bakat, berikut caranya. <br>
                    1. Ikut Tes Minat Bakat <br>Tes minat bakat merupakan cara termudah mengetahui jurusan yang tepat untuk kamu. Tes ini biasanya terbagi menjadi tiga bagian pertanyaan, yaitu aktivitas kesukaan, aktivitas dengan kemampuan, dan profesi yang kamu sukai. 
                  </p>
                </div>
                <span>
										<a href="{{ route('blog-details') }}" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog -->
            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>

@endsection