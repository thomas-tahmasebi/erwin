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
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        label {
            direction: ltr;
            text-align: left;
        }

    </style>
</head>

<body>
    <form enctype='multipart/form-data' method='post' action='' class="m-3">
        <div class="container">
            <div class="row">
                <div align="center" class="mb-3">
                    <label>ISM Hoek BV Service aanvraag</label>
                </div>
                <div class="col-lg-6">
                    <div>
                        <label>Contact gegevens</label>
                    </div><br>
                    <div>
                        <div>
                            <label>Naam:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='name'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='email' class="form-control" name='email'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Telefoon:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='tel' class="form-control" name='Phone' id='phone'>
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
                </div>
                <div class="col-lg-6">
                    <div>
                        <label>Locatie/Afleveradres</label>
                    </div><br>
                    <div>
                        <div>
                            <label>Postcode:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='postcode'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Huisnummer:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='phone_house'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Toevoeging:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='Toevoeging'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Straat:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='street'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label id='label10' for='Plaats'>Plaats:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='place'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Gebouw:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='building'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Verdieping:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='floor'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Ruimte/Lokaal:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='room_local'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Kostenplaats/Ordernummer:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type='text' class="form-control" name='cost_center'>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label>Toelichting en/of Opmerking</label>
                        </div>
                        <div class="col-sm-8">
                            <textarea name='multiline' class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-8 mt-3">
                        <input type='file' name='file1' class="form-control">
                    </div>
                    <div class="col-sm-8 mt-2">
                        <input type='file' name='file2' class="form-control">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-sm-3">
                        <input type='submit' name='submit' class="form-control btn-success" value="Verzenden">
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>

</html>
