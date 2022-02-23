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
            <tr>
                <td style="width:50%;padding:20px;vertical-align:top">
                    <p><span>Naam</span> {{ $data['name'] }}</p>
                    <p><span>Email</span> {{ $data['email'] }}</p>
                    <p><span>Telefoon</span> {{ $data['phone'] }}</p>
                    <p><span>Mobiel</span> {{ $data['mobile'] }}</p>
                    <p><span>Postcode</span> {{ $data['postcode'] }}</p>
                    <p><span>Huisnummer</span> {{ $data['phone_house'] }}</p>
                    <p><span>Toevoeging</span> {{ $data['addition'] }}</p>
                    <p><span>Straat</span> {{ $data['street'] }}</p>
                </td>
                <td style="width:50%;padding:20px;vertical-align:top">
                    <p><span>Plaats</span> {{ $data['place'] }}</p>
                    <p><span>Gebouw</span> {{ $data['building'] }}</p>
                    <p><span>Verdieping</span> {{ $data['floor'] }}</p>
                    <p><span>Ruimte/Lokaal</span> {{ $data['room_local'] }}</p>
                    <p><span>Kostenplaats/Ordernummer</span> {{ $data['cost_center'] }}</p>
                    <p><span>Toelichting en/of Opmerking</span> {{ $data['multiline'] }}</p>
                    <p><span>Bestand 1</span> <a href="
          @isset($data['file1'])
          {{ url(Storage::url($data['file1'])) }}
          @endisset
          ">Click</a></p>
                    <p><span>Bestand 2</span> <a href="
          @isset($data['file2'])
          {{ url(Storage::url($data['file2'])) }}
          @endisset">Click</a></p>
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
