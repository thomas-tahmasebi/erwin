<style>
    body {
        background-color: #e2e1e0;
        font-family: Open Sans, sans-serif;
        font-size: 100%;
        font-weight: 400;
        line-height: 1.4;
        color: #000;
    }

    p {
        margin: 0 0 10px 0;
        padding: 0;
        font-size: 14px;
    }

    span {
        display: block;
        font-weight: bold;
        font-size: 13px;
    }

    table {
        max-width: 670px;
        margin: 50px auto 10px;
        background-color: #fff;
        padding: 50px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(0, 0, 0, .24);
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(0, 0, 0, .24);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(0, 0, 0, .24);
        border-top: solid 10px green;
    }

    .download-btn {
        color: white;
        text-decoration: none;
        background-color: #409fff;
        padding: 7px;
        font-size: 11px;
        border-radius: 23px;
    }

</style>
<html>

<body>
    <table>
        <thead>
            <tr>
                <th style="text-align:left;"></th>
                <th style="text-align:right;font-weight:400;">{{ date('F j, Y') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="height:35px;"></td>
            </tr>
            <tr style="display: grid;">
                <td style="padding:20px;vertical-align:top">
                    <p><span>postcode</span> {{ $data['postcode'] }}</p>
                    <p><span>huisnummer</span> {{ $data['phone_house'] }}</p>
                    <p><span>toevoeging</span> {{ $data['addition'] }}</p>
                    <p><span>straat</span> {{ $data['street'] }}</p>
                    <p><span>plaats</span> {{ $data['place'] }}</p>
                    <p><span>gebouw</span> {{ $data['building'] }}</p>
                    <p><span>verdieping</span> {{ $data['floor'] }}</p>
                    <p><span>ruimte/lokaal</span> {{ $data['room_local'] }}</p>
                    <p><span>kostenplaats - ordernummer</span> {{ $data['cost_center'] }}</p>
                    <p><span>toelichting/opmerking</span> {{ $data['multiline'] }}</p>
                </td>
                <td style="padding:20px;vertical-align:top">
                    <p><span>Naam</span> {{ $data['name'] }}</p>
                    <p><span>Tel</span> {{ $data['phone'] }}</p>
                    <p><span>mobiel</span> {{ $data['mobile'] }}</p>
                    <p><span>email</span> {{ $data['email'] }}</p>
                    <p>
                        <a class="download-btn"
                            href="@isset($data['file1']) {{ url('storage/public/public/' . $data['file1']) }} @endisset">
                            Download je bestanden 1
                        </a>
                    </p>
                    <p style="margin-top: 22px;">
                        <a class="download-btn"
                            href="@isset($data['file2']) {{ url('storage/public/public/' . $data['file2']) }} @endisset">
                            Download je bestanden 2
                        </a>
                    </p>
                </td>
            </tr>
        </tbody>
        <tfooter>
            <tr>
                <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                    <strong style="display:block;margin:0 0 10px 0;">Groeten</strong>
                </td>
            </tr>
        </tfooter>
    </table>
</body>

</html>
