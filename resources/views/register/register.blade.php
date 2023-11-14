@extends('navbar.navbar')
@section('Form content')

  <form method="post" @yield('action')>
      @csrf
      <div class="form-row">
        <div class="text">¡Unete!</div>
        
          <div class="input-data">
            <input type="text" required  @yield('name1')>
            <div class="underline"></div>
            <label for="input1">@yield('fieldName1')</label>
          </div>

          <div class="input-data">
            <input type="text" required @yield('name2')>
            <label for="input2">@yield('fieldName2')</label>
            <div class="underline"></div>
          </div>

          <div class="input-data" class="form-row">
            <input type="text" required @yield('name3')>
            <label for="input3">@yield('fieldName3')</label>
            <div class="underline"></div>
          </div>
      </div>
      <div class="form-row submit-btn">
            <div class="input-data">
                <div class="inner"></div>
                <input type="submit" value="¡Me uno!">
            </div>
      </div>
  </form>
@endsection

