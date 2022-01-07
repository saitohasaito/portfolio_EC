<header>
  <!-- ヘッダー部分 -->
    <div id="headerBox">
        <div id="top-logo">
          <a href="/">
            <img src="{{ asset('images/logo02.jpg') }}" alt="" width="100px" height="50px">
          </a>
        </div>

        <div id="h-category">
          <div class="h-category-margin">
            <a href="">
              MEN'S
            </a>
          </div>

          <div class="h-category-margin">
            <a href="">
              WOMEN'S
            </a>
          </div>

          <div class="h-category-margin">
            <a href="">
              KID'S
            </a>
          </div>

          <div class="h-category-margin">
            <a href="">
              ALL
            </a>
          </div>

        </div>

        <div id="searchBox">
            <form action="search" id="searchform">
              <input type="text" name="words" id="words" placeholder="キーワード検索" required>
            </form>
            <div class="form-example">
              <input class="logo-img" type="image" src="{{ asset('images/search.png') }}">
            </div>
        </div>

        <div id="h-r-box">
          <div id="header-right">
            <div class="h-img-right">
              <a href="">
                <img class="logo-img" src="{{ asset('images/home.png') }}" alt="" >
              </a>
            </div>

          <div class="h-img-right">
              <a href="">
                <img class="logo-img" src="{{ asset('images/hart.png') }}" alt="" >
              </a>
          </div>

          @auth
          <div class="h-img-right">
            <a href="">
              <img class="logo-img" src="{{ asset('images/account02.png') }}" alt="" >
            </a>
          </div>

          @else
          <div class="h-img-right">
            <a href="">ログイン</a>
          </div>

          <div class="h-img-right">
            <a href="">新規登録</a>
          </div>

          @endauth
        </div>
      </div>
    </div>

</header>
