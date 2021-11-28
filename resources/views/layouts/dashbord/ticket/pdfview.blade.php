<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            font-size: 12px;
            font-family: 'Times New Roman';
        }

        td.inter,
        th.inter,
        tr.inter,
        table.inter {
            border-top: 1px solid black;
            border-collapse: collapse;
        }

        td.description,
        th.description {
            width: 75px;
            max-width: 75px;
        }

        td.quantity,
        th.quantity {
            width: 40px;
            max-width: 40px;
            word-break: break-all;
        }

        td.price,
        th.price {
            width: 40px;
            max-width: 40px;
            word-break: break-all;
        }

        .centered {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: 155px;
            max-width: 155px;
        }

        .bold {
            font-weight: bold;
        }

        img {
            max-width: inherit;
            width: inherit;
        }

        @media print {

            .hidden-print,
            .hidden-print * {
                display: none !important;
            }
        }
    </style>
    <title>Bon d'intervention</title>
</head>

<body>
    <div class="ticket">
        <p class="centered bold">
            Bon d'intervention
            <!-- <br>Address line 1
            <br>Address line 2 -->
        </p>
        <img src="{{asset('/img/INFOTEC_logoPNG.png')}}" alt="Logo">
        <table>
            <caption>
                <h3>Client</h3>
            </caption>
            <tr>
                <th>Nom:</th>
                <td>{{$ticket->client->nom_client}}</td>
            </tr>
            <tr>
                <th>Téléphone:</th>
                <td>{{$ticket->client->numero_tel}}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{$ticket->client->email_client}}</td>
            </tr>
            <tr>
                <th>Adresse:</th>
                <td>{{$ticket->client->adress_client}}</td>
            </tr>
            <tr>
                <th>Date:</th>
                <td colspan="2">{{$ticket->client->created_at}}</td>
            </tr>
        </table>

        <table class="inter">
            <caption>
                <h3>Machine</h3>
            </caption>
            <tbody>
                <tr class="inter">
                    <th class="description">Produit:</th>
                    <td class="description centered ">{{$ticket->produit}}</td>
                    <!-- <td class="price">$25.00</td> -->
                </tr>
                <tr class="inter">
                    <th class="description">Marque:</th>
                    <td class="description centered ">{{$ticket->marque}}</td>
                    <!-- <td class="price">$10.00</td> -->
                </tr>
                <tr class="inter ">
                    <th class="description">N° Série:</th>
                    <td colspan="2" class="centered description">{{$ticket->n°série}}</td>
                    <!-- <td class="price">$25.00</td> -->
                </tr>
                <tr class="inter ">
                    <th class="description">Mode:</th>
                    <td class="description centered ">{{$ticket->mode}}</td>
                    <!-- <td class="price">$10.00</td> -->
                </tr>
                <tr class="inter">
                    <th class="description">Accesoires_machine:</td>
                    <td class="description centered ">{{$ticket->accesoires_machine}}</td>
                </tr>
                <tr class="inter"></tr>
            </tbody>
        </table>

        <h4 style="margin: 8px 0px;">Panne:</h4>
        {{$ticket->description_panne}}<br>
        <h4 style="margin: 8px 0px;">Accesoires machine:</h4>
        {{$ticket->accesoires_machine}}<br>

        <p class="centered">
            Merci pour votre confiance
            <br>www.infotec.tn
        </p>
    </div>
    <button id="btnPrint" class="hidden-print">Imprimer</button>
    <a href="{{url('/ticket/pdf-save',$ticket->id)}}">
        <button id="btnSave" class="hidden-print">Enregistrer</button>
    </a>
    <script>
        const $btnPrint = document.querySelector("#btnPrint");
        $btnPrint.addEventListener("click", () => {
            window.print();
        });
    </script>
</body>

</html>