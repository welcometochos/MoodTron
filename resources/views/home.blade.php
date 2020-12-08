@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="text-center home-heading">
        <h1>Welcome to MoodTron</h1>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        
        <div class="col-sm-5">
          <div class="card home-card text-center">
            <div class="card-body">
              <h5 class="card-title">Chat to MoodTron</h5>
              <p class="card-text">Chat to your bot best friend! They are always happy to listen to you. With this, we can start building your support network.</p>
              <a href="/chat" class="btn btn-primary">Chat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
            <div class="card home-card text-center">
              <div class="card-body">
                <h5 class="card-title">My Chats</h5>
                <p class="card-text">Talk to your peers from your university! This is anonymous so feel comfortable to talk and make new friends! No pressure. Start your support network today!</p>
                <a href="/MyChats" class="btn btn-primary">Chat</a>
              </div>
            </div>
          </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <div class="card home-card text-center">
              <div class="card-body">
                <h5 class="card-title">View Mood Diary</h5>
                <p class="card-text">Read your mood diary that MoodTron has made from your chats together.</p>
                <a href="/Journal" class="btn btn-primary">Journal</a>
              </div>
            </div>
          </div>
        <div class="col-sm-5">
          <div class="card home-card text-center">
            <div class="card-body">
              <h5 class="card-title">Further Support</h5>
              <p class="card-text">Need further support? Here you can see the different services that there are, made for you. This includes contact details for your university wellbeing services.</p>
              <a href="/support" class="btn btn-primary">Support</a>
            </div>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>
</div>



@endsection
