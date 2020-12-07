@extends('layout')

@section('content')
<div class="container-fluid h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 col-xl-6 chat">
            <div class="card chatcard">
                <div class="card-header msg_head">
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://cdn.pixabay.com/photo/2016/02/22/00/25/robot-1214536_1280.png" class="rounded-circle user_img">
                        </div>
                        <div class="user_info">
                            <span>Welcome To MoodTron, your friendly robot</span>
                        </div>
                    </div>
                </div>
                <div class="card-body msg_card_body">
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="https://cdn.pixabay.com/photo/2016/02/22/00/25/robot-1214536_1280.png" class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you Chelsea?
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Bad
                        </div>
                        <div class="img_cont_msg">
                    <img src="https://cdn.pixabay.com/photo/2015/03/04/18/02/panda-659186_1280.png" class="rounded-circle user_img_msg">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="https://cdn.pixabay.com/photo/2016/02/22/00/25/robot-1214536_1280.png" class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            Why are you feeling like this?
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Because I am sad and I fell down the stairs.
                        </div>
                        <div class="img_cont_msg">
                    <img src="https://cdn.pixabay.com/photo/2015/03/04/18/02/panda-659186_1280.png" class="rounded-circle user_img_msg">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <textarea name="" class="form-control type_msg" id="message" placeholder="Type your message..."></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text send_btn" onclick="displayMessage()"><i class="fas fa-location-arrow"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection