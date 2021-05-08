@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-sm-8">
  <div class="card">
      <p>यह डॉ ए पी जे अब्दुल कलाम तकनीकी विश्वविद्यालय लखनऊ की आधिकारिक ईo आरo पीo ...
          यह डॉ ए पी जे अब्दुल कलाम तकनीकी विश्वविद्यालय लखनऊ की आधिकारिक ईo आरo पीo ..
          .यह डॉ ए पी जे अब्दुल कलाम तकनीकी विश्वविद्यालय लखनऊ की आधिकारिक ईo आरo पीo ...
          यह डॉ ए पी जे अब्दुल कलाम तकनीकी विश्वविद्यालय लखनऊ की आधिकारिक ईo आरo पीo ...</p>
      </div>
  </div>
  <div class="col-sm-4">
      <div class="card">
      <form role="form">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Name">
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" id="inputUsername" placeholder="Username">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>


    <div class="form-group">
        <label>Password</label>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <div class="form-group">
            <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm">
        </div>
    </div>


    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" id="inputMessage" placeholder="Message" required=""></textarea>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Send</button>
    </div>
</form>
      </div>
  </div>
</div>
</div>
@endsection
