<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ISM Hoek BV Service aanvraag</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ url('js/app.js') }}" defer></script>


</head>

<body>
    @if ($errors->any())
        {!! implode('', $errors->all("<div class='alert alert-danger' role='alert'>:message</div>")) !!}
    @endif
    <form enctype='multipart/form-data' method='post' action='{{ route('create') }}' class="m-3">
        @csrf
        <div class="container col-lg-12">
            <div class="row">
                {{-- <div class="col-lg-5 mt-3">
                    <label>ISM Hoek BV Service aanvraag</label>
                </div> --}}
                <div class="col-lg-6 col-md-3">
                    <img src="{{ asset('images/logo.jpg') }}" align='left' class="img-fluid" alt="logo"
                        width="400" style="max-width:68%;">
                </div>
                <div class="col-lg-6 mt-3" align='left'>
                    <img src="{{ asset('images/header-image.jpg') }}" style="max-width:64%;" class="img-fluid" width="250" height="100">
                </div>
                <div class="col-lg-8 phone-email-text" style="margin-left: 4%;" align='right'>
                    <span style="font-size: 12px; text-align: right;">TEL: 0115-613362</span>
                    <span style="font-size: 12px; text-align: right;">E-mail:
                        service@ismhoekbv.nl</span>
                </div>
                <hr style="border: 1px solid black;">
                <div class="col-lg-12 mb-3" align='left'>
                    <img src="{{ asset('images/1.jpg') }}" class="img-fluid" style="max-width:46%;" width="220" height="100">
                    <img src="{{ asset('images/2.jpg') }}" class="img-fluid" style="max-width:46%;" width="220" height="100">
                    <img src="{{ asset('images/3.jpg') }}" class="img-fluid" style="max-width:46%;" width="220" height="100">
                    <img src="{{ asset('images/4.jpg') }}" class="img-fluid" style="max-width:46%;" width="220" height="100">
                </div>
                <div class="mb-3">
                    <label>Bedrijf/organisatie:</label>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='company_organisation'>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Locatie/afleveradres</label>
                </div><br>
                <div>
                    <div>
                        <label>postcode:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='postcode'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>huisnummer:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='phone_house'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>toevoeging:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='addition'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>straat:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='street'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label for='Plaats'>plaats:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='place'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>gebouw:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='building'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>verdieping:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='floor'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>ruimte/lokaal:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='room_local'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>kostenplaats - ordernummer:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='cost_center'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>telichting/opmerking:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea name='multiline' class="form-control" required></textarea>
                    </div>
                </div>
                <div class="mt-3 mb-3">
                    <label>Contactpersoon</label>
                </div><br>
                <div>
                    <div>
                        <label>Naam:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='text' class="form-control" name='name' required>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>Tel:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='tel' class="form-control" name='phone' required>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>Mobiel:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='tel' class="form-control" name='mobile'>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        <label>email:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type='email' class="form-control" name='email'>
                    </div>
                </div>
                <div class="col-sm-8 mt-3">
                    <input type='file' name='file1' value="Bestand 1" class="form-control">
                </div>
                <div class="col-sm-8 mt-2">
                    <input type='file' name='file2' value="Bestand 2" class="form-control">
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="col-sm-8">
                        <input type='submit' class="form-control btn-success" value="Verzenden">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
