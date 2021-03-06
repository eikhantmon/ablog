    @if (\Route::current()->getName()== 'home.blog')
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Laravel Blog</h1>
              <span class="subheading">A Laravel Blog by Ei Khant Mon</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    @endif

    @if(\Route::current()->getName() == 'home.blog_detail')

    <header class="masthead" style="background-image: url('{{url($blog->cover)}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
            <h1>{{$blog->title}}</h1>
              <span class="meta">Posted by
                <a href="#">{{$blog->user->name}}</a>
                on {{ $blog->created_at->format('F d Y') }}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    @endif

    @if(\Route::current()->getName() == 'home.about')

    <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
      <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                  <h1>About Me</h1>
                  <span class="subheading">This is what I do.</span>
                </div>
              </div>
           </div>
     </div>
    </header>
    @endif

    @if(\Route::current()->getName() == 'contact')
    <header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
      <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
              </div>
            </div>
          </div>
        </div>
    </header>
    @endif