<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <title>FeedBack | VTC-eshop</title>
</head>

<body style="background-color: #e7eff8; font-family: trebuchet,sans-serif; margin-top: 0; box-sizing: border-box; line-height: 1.5;">
    <div class="container-fluid">
        <div class="container" style="background-color: #e7eff8; width: 600px; margin: auto;">
            <div class="col-12 mx-auto" style="width: 580px;  margin: 0 auto;">
                <div class="row">
                    <div class="container-fluid">
                        <div class="row" style="background-color: #e7eff8; height: 10px;">

                        </div>
                    </div>
                </div>

                <div class="row" style="height: 100px; padding: 10px 20px; line-height: 90px; background-color: white; box-sizing: border-box;">
                    {{--<h1 class="pl-3"
                        style="color: orange; line-height: 00px; float: left; padding-left: 20px; padding-top: 5px;">
                        <img src="{{$message->embed(asset('front/img/logo.png'))}}"
                    height="40" alt="logo">
                    </h1>--}}
                    <h1 class="pl-2" style="color: orange; line-height: 30px; float: left; padding-left: 20px; font-size: 40px; font-weight: 500;">
                        VTC-eShop
                    </h1>
                </div>

                <div class="row" style="background-color: #00509d; height: 200px; padding: 35px; color: white;">
                    <div class="container-fluid">
                        <h3 class="m-0 p-0 mt-4" style="margin-top: 0; font-size: 28px; font-weight: 500;">
                            <strong style="font-size: 32px;">FeedBack Notification</strong>
                            <br>
                            Thank you for your feedback, we will respond as soon as possible.
                        </h3>
                        <div class="row mt-5" style="margin-top: 35px; display: flex;">
                            <div class="col-6" style="margin-bottom: 25px; flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                                <b>From {{$data['name']}}</b>
                                <br>
                                <span>
                                    <a style="color: white !important;" href="mailto:{{$data['email']}}" target="_blank">email: {{ $data['email'] }}</a>
                                </span>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 " style="margin-top: 15px;">
                    <div class="container-fluid">
                        <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                            <b>Feedback details</b>
                        </div>
                        <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px 10px 20px;">
                            <table class="table table-sm table-hover" style="text-align: left;  width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th style="padding: 2px 0;">MESSAGE: </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <p>{{ $data['message'] }}</p>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="row" style="background-color: #e7eff8; height: 10px;">

                        </div>
                    </div>
                </div>
                <!-- <h1>Feedback from {{ $data['name'] }}</h1>
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
                <p><strong>Subject:</strong> Feedback to Shop</p> -->
            </div>
        </div>
    </div>
</body>

</html>