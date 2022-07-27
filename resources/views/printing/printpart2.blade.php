<div class="row">
            <div style="color:#0000ff" class=" m-3 col-md-12 text-left">SECTION RÉSERVÉE À ELITE CREDIT</div>
            <div class="col-md-3"></div>
</div>
<div  style="border-color:#262626" class="  table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="title">

                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                    FCFA
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="dispo">
                    DISPONIBILITES (A-B)
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="dispo">

                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="dispo">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->reserves[0]["dispo"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="amor">
                    AMORTISSEMENT NOUVEAU PRET ELITE CREDIT
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="amor">

                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="amor">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->reserves[0]["amor"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="new_dispo">
                     NOUVELLE DISPONIBILITE
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="new_dispo">

                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="new_dispo">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->reserves[0]["new_dispo"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="taux">
                    TAUX D’ENDETTEMENT
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="taux">

                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="taux">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->reserves[0]["taux"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
</div>

<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong> SITUATION BANCAIRE</strong>
                </td>
                <td class="text-center" style="width: 80%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                        BANQUE
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                        MONTANT
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                        TYPE
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                        # DE COMPTE
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                        BALANCE ACTUELLE
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque">
                        @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->bancaires[0]["banque"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->bancaires[0]["banque"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["montantBank"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["type"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="num_compte">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["num_compte"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["balance"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque1">
                        @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->bancaires[0]["banque1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->bancaires[0]["banque1"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["montantBank1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type1">
                        @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["type1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="num_compte1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["num_compte1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["balance1"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque2">
                        @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->bancaires[0]["banque2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->bancaires[0]["banque2"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank2">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["montantBank2"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type2">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["type2"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="num_compte2">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["num_compte2"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance2">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["balance2"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque3">
                        @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->bancaires[0]["banque3"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->bancaires[0]["banque3"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank3">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["montantBank3"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type3">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["type3"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="num_compte3">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["num_compte3"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance3">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["balance3"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque4">
                        @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->bancaires[0]["banque4"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->bancaires[0]["banque4"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank4">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["montantBank4"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type4">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["type4"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="num_compte4">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["num_compte4"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance4">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->bancaires[0]["balance4"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33.4% ;border-right-color:#fff!important;background-color: #FFF!important; color: black">
                 <strong  style=" text-transform: uppercase!important;" for="title">
                    PATRIMOINE
                 <strong>
              </td>
              <td class="text-center" style="width: 67.6%;background-color: #F1F1F1!important;border-color: black">
                <strong  style=" text-transform: uppercase!important;" for="title">
                <strong>
            </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                TYPE
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                DESCRIPTION
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                VALEUR
            </td>
        </tr>
    </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong   style=" text-transform: uppercase!important;" for="type_pat">
                    @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->patrimoines[0]["type_pat"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->patrimoines[0]["type_pat"]}}</strong>
                            @endif
                        @endif
                <strong>
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                <strong   style=" text-transform: uppercase!important;" for="description">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->patrimoines[0]["description"]}}</strong>
                    @endif
                <strong>
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                <strong   style=" text-transform: uppercase!important;" for="valeur">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->patrimoines[0]["valeur"]}}</strong>
                    @endif
                <strong>
            </td>
        </tr>
    </tbody>
 </table>
 <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong   style=" text-transform: uppercase!important;" for="type_pat1">
                    @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->patrimoines[0]["type_pat1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->patrimoines[0]["type_pat1"]}}</strong>
                            @endif
                        @endif
                <strong>
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                <strong   style=" text-transform: uppercase!important;" for="description1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->patrimoines[0]["description1"]}}</strong>
                    @endif
                <strong>
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                <strong   style=" text-transform: uppercase!important;" for="valeur1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->patrimoines[0]["valeur1"]}}</strong>
                    @endif
                <strong>
            </td>
        </tr>
    </tbody>
 </table>
 <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong   style=" text-transform: uppercase!important;" for="type_pat2">
                    @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->patrimoines[0]["type_pat2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->patrimoines[0]["type_pat2"]}}</strong>
                            @endif
                        @endif
                <strong>
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                <strong   style=" text-transform: uppercase!important;" for="description2">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->patrimoines[0]["description2"]}}</strong>
                    @endif
                <strong>
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                <strong   style=" text-transform: uppercase!important;" for="valeur2">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->patrimoines[0]["valeur2"]}}</strong>
                    @endif
                <strong>
            </td>
        </tr>
    </tbody>
 </table>

</div>


<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33.4% ;border-right-color:#fff!important;background-color: #FFF!important; color: black">
                 <strong  style=" text-transform: uppercase!important;" for="title">
                    VALEURS MOBILIERES
                 <strong>
              </td>
              <td class="text-center" style="width: 67.6%;background-color: #F1F1F1!important;border-color: black">
                <strong  style=" text-transform: uppercase!important;" for="title">
                <strong>
            </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                TYPE
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                DESCRIPTION
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                VALEUR
            </td>
        </tr>
    </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong   style=" text-transform: uppercase!important;" for="typeM">
                    @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id == Null)
                                Neant
                            @elseif($bancaire->client_id == Null)
                            Neant
                            @elseif($bancaire->customer_id == Null)
                            Neant
                        @else
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif
                        @endif
                    @else
                        @if ($bancaire->mobilieres[0]["typeM"] == Null)
                                Neant
                        @else
                            <strong>{{$bancaire->mobilieres[0]["typeM"]}}</strong>
                        @endif
                    @endif
                <strong>
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                <strong   style=" text-transform: uppercase!important;" for="descriptionM">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->mobilieres[0]["descriptionM"]}}</strong>
                    @endif
                <strong>
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                <strong   style=" text-transform: uppercase!important;" for="valeurM">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->mobilieres[0]["valeurM"]}}</strong>
                    @endif
                <strong>
            </td>
        </tr>
    </tbody>
 </table>
 <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong   style=" text-transform: uppercase!important;" for="typeM1">
                    @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id == Null)
                                Neant
                            @elseif($bancaire->client_id == Null)
                            Neant
                            @elseif($bancaire->customer_id == Null)
                            Neant
                        @else
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif
                        @endif
                    @else
                        @if ($bancaire->mobilieres[0]["typeM1"] == Null)
                                Neant
                        @else
                            <strong>{{$bancaire->mobilieres[0]["typeM1"]}}</strong>
                        @endif
                    @endif
                <strong>
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                <strong   style=" text-transform: uppercase!important;" for="descriptionM1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->mobilieres[0]["descriptionM1"]}}</strong>
                    @endif
                <strong>
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                <strong   style=" text-transform: uppercase!important;" for="valeurM1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->mobilieres[0]["valeurM1"]}}</strong>
                    @endif
                <strong>
            </td>
        </tr>
    </tbody>
 </table>
 <table style="border-color:#262626" class="mt-0 mb-0 table">
    <tbody>
        <tr>
            <td class="text-center" style="width: 42% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong   style=" text-transform: uppercase!important;" for="typeM2">
                    @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id == Null)
                                Neant
                            @elseif($bancaire->client_id == Null)
                            Neant
                            @elseif($bancaire->customer_id == Null)
                            Neant
                        @else
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif
                        @endif
                    @else
                        @if ($bancaire->mobilieres[0]["typeM2"] == Null)
                                Neant
                        @else
                            <strong>{{$bancaire->mobilieres[0]["typeM2"]}}</strong>
                        @endif
                    @endif
                <strong>
            </td>
            <td class="text-center"  style="width: 42%;background-color: #FFF!important;border-color:black!important">
                <strong   style=" text-transform: uppercase!important;" for="descriptionM2">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->mobilieres[0]["descriptionM2"]}}</strong>
                    @endif
                <strong>
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                <strong   style=" text-transform: uppercase!important;" for="valeurM2">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->mobilieres[0]["valeurM2"]}}</strong>
                    @endif
                <strong>
            </td>
        </tr>
    </tbody>
 </table>

</div>


<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 20% ;border-right-color:white!important;background-color: #FFF!important; color: black">
                <strong> AUTRE RELATION DE <br>
                    CREDIT</strong>
                </td>
                <td class="text-center" style="width: 80%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 18%;background-color: #FFF!important;border-color:black!important">
                    NOM DU PRETEUR
                </td>
                <td class="text-center"  style="width: 10%;background-color: #FFF!important;border-color:black!important">
                    MONNAIE
                </td>
                <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                    OBJET DU PRET
                </td>
                <td class="text-center"  style="width: 14%;background-color: #FFF!important;border-color:black!important">
                    MONTANT A L’ORIGINE
                </td>
                <td class="text-center" style="width: 10%;background-color: #FFF!important;border-color: black">
                    SOLDE DU
                </td>
                <td class="text-center"  style="width: 10%;background-color: #FFF!important;border-color:black!important">
                    TAUX
            </td>
            <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                ECHEANCE
            </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 18%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="nom_preteur">

                            @if ( $bancaire->renseigne_id == 2)
                                    @if ($bancaire->particulier_id == Null)
                                        Neant
                                    @elseif($bancaire->client_id == Null)
                                    Neant
                                    @elseif($bancaire->customer_id == Null)
                                    Neant
                                @else
                                    @if ($bancaire->particulier_id !== Null)
                                        {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                    @elseif($bancaire->client_id !== Null)
                                        {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                    @elseif($bancaire->customer_id !== Null)
                                        {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                    @else

                                    @endif
                                @endif
                            @else
                                @if ($bancaire->relations[0]["nom_preteur"] == Null)
                                        Neant
                                @else
                                    <strong>{{$bancaire->relations[0]["nom_preteur"]}}</strong>
                                @endif
                            @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 10%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="monnaie">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["monnaie"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="objet_pret">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["objet_pret"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 14%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montant_origine">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["montant_origine"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="solde">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["solde"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 10%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="tauxR">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["tauxR"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="echeance">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["echeance"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 18%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="nom_preteur1">
                        @if ( $bancaire->renseigne_id == 2)
                                @if ($bancaire->particulier_id == Null)
                                    Neant
                                @elseif($bancaire->client_id == Null)
                                Neant
                                @elseif($bancaire->customer_id == Null)
                                Neant
                            @else
                                @if ($bancaire->particulier_id !== Null)
                                    {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                                @elseif($bancaire->client_id !== Null)
                                    {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                                @elseif($bancaire->customer_id !== Null)
                                    {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancaire->relations[0]["nom_preteur1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancaire->relations[0]["nom_preteur1"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 10%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="monnaie1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["monnaie1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="objet_pret1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["objet_pret1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 14%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montant_origine1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["montant_origine1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="solde1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["solde1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 10%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="tauxR1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["tauxR1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 16%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="echeance1">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->relations[0]["echeance1"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 30% ;border-right-color:white!important;background-color: #FFF!important; color: black">
                <strong>REFERENCES PERSONNELLES</strong>
                </td>
                <td class="text-center" style="width: 70%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    REFERENCE 1
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                    REFERENCE 2
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="nameref">
                    NOM ET PRENOM
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="nameref">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->references[0]["nameref"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="name1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->references[0]["name1"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="adress_ref">
                    ADRESSE
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="adress_ref">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->references[0]["adress_ref"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="adress_ref1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->references[0]["adress_ref1"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="tel_ref">
                    TELEPHONE (S
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="tel_ref">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->references[0]["tel_ref"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="tel_ref1">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->prof}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->prof}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->prof}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong>{{$bancaire->references[0]["tel_ref1"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
</div>
