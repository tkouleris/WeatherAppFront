<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body style="background: #280000;">
        @csrf
        <div class="container" style="background: #DE7C5A;padding-top:20px;padding-bottom: 20px;">
            <h1>Weather API - Documentation</h1>
            <div class="card" style="padding-top:10px;padding-bottom: 10px;background: #B10F2E;">
                <h5 class="card-header" style="color: #FDFFFF;background: #280000">How to use</h5>
                <div class="card-body">
                    <p style="color: white;">
                        The weatherapp api is a wrapper that uses the openweathermaps api to give the 5-day forecast of a
                        specified city. In order to use the weatherapp api first you need to register a new account. To
                        achieve that you have to use the following endpoint:<br/>
                        <code style="color: white;">https://weatherapi.tkouleris.eu/weather/register</code><br/>
                        with the following payload:<br/>
                        <code style="color: white;">
                            {
                            "username":"myaccount",
                            "email": "myaccount@myemail.com",
                            "password":"RedGreenBlue"
                            }
                        </code>
                    </p>
                    <p style="color: white;"><b>Authentication:</b> The next step is to ask from the weatherapp api a token that you must send with each and every
                    call you will make. </p>
                    <p style="color: white;"><b>Find Citty ID:</b> Then you need to make a call to find out the available cities that you can request a forecast </p>
                    <p style="color: white;"><b>Find City Weather Forecast (i.e. Athens):</b> When you have found the ID of the city you are interested in you add it at the end of the endpoint
                    i.e. <code style="color: white;">https://weatherapi.tkouleris.eu/weather/forecast/2656</code>
                    </p>
                    <p style="color: white">The next three cards is an example of authetication, find city id, find city weather forecast section. Just hit run to each one of them</p>
                </div>
            </div>
            <div style="margin-bottom: 10px;"></div>
            <div class="card" style="padding-top:10px;padding-bottom: 10px;background: #B10F2E;">
                <h5 class="card-header" style="color: #FDFFFF;background: #280000">Authentication</h5>
                <div class="card-body">
                    <h5 class="card-title" style="color: #FDFFFF;">Endpoint</h5>
                    <p class="card-text" style="background: #FDFFFF;">https://weatherapi.tkouleris.eu/weather/authenticate</p>
                    <h5 class="card-title" style="color: #FDFFFF;">Payload</h5>
                    <p class="card-text" style="background: #FDFFFF;">
                        <code>
                        {
                        "username":"demo",
                        "password":"RedGreenBlue"
                        }
                        </code>
                    </p>
                    <h5 class="card-title" style="color: #FDFFFF;">Response</h5>
                    <p class="card-text" style="background: #FDFFFF;">
                    <code id="authenticate_response">

                    </code>
                    </p>
                    <a class="btn btn-primary" id="btn_authenticate">RUN</a>
                </div>
            </div>
            <div style="margin-bottom: 10px;"></div>
            <div class="card" style="padding-top:10px;padding-bottom: 10px;background: #B10F2E;">
                <h5 class="card-header" style="color: #FDFFFF;background: #280000">Find City ID</h5>
                <div class="card-body">
                    <h5 class="card-title" style="color: #FDFFFF;">Endpoint</h5>
                    <p class="card-text" style="background: #FDFFFF;">https://weatherapi.tkouleris.eu/weather/city/GR</p>
                    <h5 class="card-title" style="color: #FDFFFF;">TOKEN</h5>
                    <textarea name="app_token" style="width: 100%;" ></textarea>


                    <h5 class="card-title" style="color: #FDFFFF;">Response</h5>
                    <p class="card-text" style="background: #FDFFFF;">
                        <code id="cities_response">

                        </code>
                    </p>
                    <a class="btn btn-primary" id="btn_cities">RUN</a>
                </div>
            </div>
            <div style="margin-bottom: 10px;"></div>
            <div class="card" style="padding-top:10px;padding-bottom: 10px;background: #B10F2E;">

                <h5 class="card-header" style="color: #FDFFFF;background: #280000">Find City Weather Forecast (i.e. Athens)</h5>
                <div class="card-body">
                    <h5 class="card-title" style="color: #FDFFFF;">Endpoint</h5>
                    <p class="card-text" style="background: #FDFFFF;">https://weatherapi.tkouleris.eu/weather/forecast/2656</p>
                    <h5 class="card-title" style="color: #FDFFFF;">TOKEN</h5>
                    <textarea name="app_token" style="width: 100%;" ></textarea>


                    <h5 class="card-title" style="color: #FDFFFF;">Response</h5>
                    <p class="card-text" style="background: #FDFFFF;">
                        <code id="forecast_response">

                        </code>
                    </p>
                    <a class="btn btn-primary" id="btn_forecast">RUN</a>
                </div>
            </div>
        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
    <script>

        var token = $('[name=_token]').val();
        var app_token = '';
        $('#btn_authenticate').click(function (){
            $.ajax('{{ route('weatherapp.authenticate') }}', {
                type: 'POST',  // http method
                data: { '_token': token},  // data to submit
                success: function (data, status, xhr) {
                    $('#authenticate_response').html(data)
                    app_token = JSON.parse(data).data.jwt;
                    $('[name=app_token]').val(app_token);
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    alert(errorMessage);
                }
            });
        });

        $('#btn_cities').click(function (){
            $.ajax('{{ route('weatherapp.cities') }}', {
                type: 'POST',  // http method
                data: { '_token': token,'app_token': app_token},  // data to submit
                success: function (data, status, xhr) {
                    console.log(data);
                    $('#cities_response').html(data)
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    alert(errorMessage);
                }
            });
        })

        $('#btn_forecast').click(function (){
            $.ajax('{{ route('weatherapp.forecast', ['city_id' => 2656]) }}', {
                type: 'POST',  // http method
                data: { '_token': token,'app_token': app_token},  // data to submit
                success: function (data, status, xhr) {
                    console.log(data);
                    $('#forecast_response').html(data)
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    alert(errorMessage);
                }
            });
        })
    </script>
</html>
