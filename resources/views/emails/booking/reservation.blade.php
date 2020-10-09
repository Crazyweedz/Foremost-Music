<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            font-size: 25px;
            text-align: center;
            text-transform: uppercase;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title" style="text-align: center">
                            <img src="{{ asset('img/mini-logo-noir-trans.png') }}" style="width:100%; max-width:300px; margin: auto;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Information de contact
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Nom: </strong> {{ $data['nom'] ?? 'n.d.' }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Prénom: </strong> {{ $data['prenom'] ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Téléphone: </strong> {{ $data['telephone'] ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Adresse email: </strong> {{ $data['email'] ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Société/Association: </strong> {{ $data['compagnie'] ?? 'n.d.'  }}
            </td>
        </tr>

        <tr class="heading">
            <td>
                Information sur l'évènement
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Artiste: </strong> {{ $data['artiste'] ?? 'n.d.'  }}
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Budget: </strong> {{ $data['budget'] ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Date de l'évènement: </strong> {{ date('j F Y', strtotime($data['date'])) ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Type d'évènement: </strong> {{ $data['type'] ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Nombre de personnes attendues: </strong> {{ $data['nombre'] ?? 'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Lieu de l'évènement: </strong> {{ $data['lieu'] ??'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Ville: </strong> {{ $data['ville'] ??'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Pays: </strong> {{ $data['pays'] ??'n.d.'  }}
            </td>
        </tr>
        <tr class="item">
            <td>
                <strong>Commentaire: </strong> {{ $data['commentaire'] ?? 'n.d.'  }}
            </td>
        </tr>
    </table>
</div>
</body>
</html>
