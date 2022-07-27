
    <div  style="border-color:#262626" class="dim table" class="col-12">
      <table style="border-color:#262626"  class="mb-0 table">
              <thead>
                  <tr>
                      <th style="border-right:#F1F1F1!important;background-color: #E5E5E5!important; color: black" class="text-left" >SITUATION PROFESSIONNELLE</th>
                      <th  style="background-color: #F1F1F1!important;border-left: #F1F1F1!important; border: black">
                              <div class="text-right">
                                  {{-- <img class="" src="{{URL::asset('assets/images/users/elite.jpg')}}" width="190" height="25" alt="img"> --}}
                              </div>
                      </th>
                  </tr>
              </thead>
      </table>
      <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="title">
                         EMPRUNTEUR
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                        CONJOINT
                    <strong>
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong   style=" text-transform: uppercase!important;" for="prof_emp">
                        PROFESSION
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="prof_emp">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                <strong>  {{$bancaire->particulier->prof}} </strong>
                            @elseif($bancaire->client_id !== Null)
                                <strong>  {{$bancaire->client->prof}}</strong>
                            @elseif($bancaire->customer_id !== Null)
                                <strong> {{$bancaire->customer->prof}} </strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancaire->emprunteurs[0]["prof_emp"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="prof_empS">
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
                        <strong>{{$bancaire->spouses[0]["prof_empS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="name_emp">
                        NOM DE L’EMPLOYEUR
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="name_emp">
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
                            <strong>{{$bancaire->emprunteurs[0]["name_emp"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="name_empS">
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
                            <strong>{{$bancaire->spouses[0]["name_empS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="addresse">
                        ADRESSE
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="addresse">
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
                            <strong>{{$bancaire->emprunteurs[0]["addresse"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="addresseS">
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
                            {{$bancaire->spouses[0]["addresseS"]}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong   style=" text-transform: uppercase!important;" for="position">
                        POSITION
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="position">
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
                            <strong>{{$bancaire->emprunteurs[0]["position"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="positionS">
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
                            <strong>{{$bancaire->spouses[0]["positionS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="emp_pre">
                        EMPLOYEUR PRECEDENT
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="emp_pre">
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
                            <strong>{{$bancaire->emprunteurs[0]["emp_pre"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="emp_preS">
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
                            <strong>{{$bancaire->spouses[0]["emp_preS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="date_deb">
                        DATE DE DEBUT DE SERVICE
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_deb">
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
                         {{\Carbon\Carbon::parse($bancaire->emprunteurs[0]["date_deb"])->format('d/m/Y')}}
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="date_debS">
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
                         {{\Carbon\Carbon::parse($bancaire->spouses[0]["date_debS"])->format('d/m/Y')}}
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
                    <strong   style=" text-transform: uppercase!important;" for="date_fin">
                        DATE DE FIN DE SERVICE
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_fin">
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
                        {{\Carbon\Carbon::parse($bancaire->emprunteurs[0]["date_fin"])->format('d/m/Y')}}
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="date_finS">
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
                        {{\Carbon\Carbon::parse($bancaire->spouses[0]["date_finS"])->format('d/m/Y')}}
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
                    <strong   style=" text-transform: uppercase!important;" for="autre_act">
                        AUTRES ACTIVITES
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="autre_act">
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
                            <strong>{{$bancaire->emprunteurs[0]["autre_act"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="autre_actS">
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
                            <strong>{{$bancaire->spouses[0]["autre_actS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="date_inst">
                        DATE D’INSTALLATION
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_inst">
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
                            {{\Carbon\Carbon::parse($bancaire->emprunteurs[0]["date_inst"])->format('d/m/Y')}}
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="date_instS">
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
                            {{\Carbon\Carbon::parse($bancaire->spouses[0]["date_instS"])->format('d/m/Y')}}
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
                    <strong   style=" text-transform: uppercase!important;" for="proprio">
                        PROPRIETAIRE DU FONDS
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="proprio">
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
                            <strong>{{$bancaire->emprunteurs[0]["proprio"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="proprioS">
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
                            <strong>{{$bancaire->spouses[0]["proprioS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="patente">
                        PATENTE DGI
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="patente">
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
                            <strong>{{$bancaire->emprunteurs[0]["patente"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="patenteS">
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
                            <strong>{{$bancaire->spouses[0]["patenteS"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="nbr_pers">
                        NOMBRE DE PERSONNES EMPLOYEES
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="nbr_pers">
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
                            <strong>{{$bancaire->emprunteurs[0]["nbr_pers"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="nbr_persS">
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
                            <strong>{{$bancaire->spouses[0]["nbr_persS"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
     </table>

    </div>

    <div  style="border-color:#262626" class="dim table" class="col-12">
        <table style="border-color:#262626"  class="mb-0 table">
                <thead>
                    <tr>
                        <th style="border-right:#F1F1F1!important;background-color: #E5E5E5!important; color: black" class="text-left" >Revenus</th>
                        <th  style="background-color: #F1F1F1!important;border-left: #F1F1F1!important; border: black">
                                <div class="text-right">
                                    {{-- <img class="" src="{{URL::asset('assets/images/users/elite.jpg')}}" width="190" height="25" alt="img"> --}}
                                </div>
                        </th>
                    </tr>
                </thead>
        </table>
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
                      <strong   style=" text-transform: uppercase!important;" for="rev_mens">
                        REVENU MENSUEL
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="rev_mens">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="rev_mens">
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
                            <strong>{{$bancaire->revenus[0]["rev_mens"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="comm">
                        COMMISSIONS
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="comm">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="comm">
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
                            <strong>{{$bancaire->revenus[0]["comm"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="div_int">
                        DIVIDENDES ET INTERETS
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="div_int">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="div_int">
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
                            <strong>{{$bancaire->revenus[0]["div_int"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="rev_loc">
                        REVENUS DE LOCATION
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="rev_loc">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="rev_loc">
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
                            <strong>{{$bancaire->revenus[0]["rev_loc"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="autre_rev1">
                        AUTRES REVENUS 1
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="autre_rev1">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="autre_rev1">
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
                            <strong>{{$bancaire->revenus[0]["autre_rev1"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="autre_rev2">
                        AUTRES REVENUS 2
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="autre_rev2">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="autre_rev2">
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
                            <strong>{{$bancaire->revenus[0]["autre_rev2"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="rev_mens_conj">
                        REVENU MENSUEL DU CONJOINT
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="rev_mens_conj">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="rev_mens_conj">
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
                            <strong>{{$bancaire->revenus[0]["rev_mens_conj"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="autre_rev_conj">
                        AUTRES REVENUS DU CONJOINT
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="autre_rev_conj">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="autre_rev_conj">
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
                            <strong>{{$bancaire->revenus[0]["autre_rev_conj"]}}</strong>
                        @endif
                      <strong>
                  </td>
              </tr>
          </tbody>
       </table>
       <table style="border-color:#262626" class="mt-0 mb-0 table">
          <tbody>
              <tr>
                  <td class="text-right" style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                      <strong   style=" text-transform: uppercase!important;" for="tot_rev">
                        TOTAL REVENUS (A)
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="tot_rev">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="tot_rev">
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
                            <strong>{{$bancaire->revenus[0]["tot_rev"]}}</strong>
                    @endif
                      <strong>
                  </td>
               </tr>
           </tbody>
       </table>
    </div>

    <div  style="border-color:#262626" class="dim table" class="col-12">
        <table style="border-color:#262626"  class="mb-0 table">
                <thead>
                    <tr>
                        <th style="border-right:#F1F1F1!important;background-color: #E5E5E5!important; color: black" class="text-left" >DEPENSES</th>
                        <th  style="background-color: #F1F1F1!important;border-left: #F1F1F1!important; border: black">
                                <div class="text-right">
                                    {{-- <img class="" src="{{URL::asset('assets/images/users/elite.jpg')}}" width="190" height="25" alt="img"> --}}
                                </div>
                        </th>
                    </tr>
                </thead>
        </table>
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
                      <strong   style=" text-transform: uppercase!important;" for="vers_hyp">
                        VERSEMENTS HYPOTHECAIRES
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="vers_hyp">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="vers_hyp">
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
                            <strong>{{$bancaire->depenses[0]["vers_hyp"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="loyers">
                        LOYERS
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="loyers">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="loyers">
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
                            <strong>{{$bancaire->depenses[0]["loyers"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="impt_loc">
                        IMPOTS LOCATIFS
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="impt_loc">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="impt_loc">
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
                            <strong>{{$bancaire->depenses[0]["impt_loc"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="prime">
                        PRIMES D’ASSURANCES
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="prime">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="prime">
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
                            <strong>{{$bancaire->depenses[0]["prime"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="carte_credit">
                        CARTES DE CREDIT
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="carte_credit">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="carte_credit">
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
                            <strong>{{$bancaire->depenses[0]["carte_credit"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="rembourse">
                        REMBOURSEMENT DE PRETS VEHICULES
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="rembourse">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="rembourse">
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
                                <strong>{{$bancaire->depenses[0]["rembourse"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="pret_conso">
                        REMBOURSEMENT DE PRETS A LA CONSOMMATION
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="pret_conso">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="pret_conso">
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
                            <strong>{{$bancaire->depenses[0]["pret_conso"]}}</strong>
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
                      <strong   style=" text-transform: uppercase!important;" for="pension">
                        PENSIONS ALIMENTAIRES
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="pension">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong   style=" text-transform: uppercase!important;" for="pension">
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
                            <strong>{{$bancaire->depenses[0]["pension"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="elect">
                        ELECTRICITE, EAU
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="elect">

                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="elect">
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
                            <strong>{{$bancaire->depenses[0]["elect"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="transport">
                        TRANSPORT (ESSENCE, VOITURE, ENTRETIEN)
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="transport">

                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="transport">
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
                            <strong>{{$bancaire->depenses[0]["transport"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="frais">
                        FRAIS SCOLAIRES
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="frais">

                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="frais">
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
                            <strong>{{$bancaire->depenses[0]["frais"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="nourritur">
                        NOURRITURE/EMPLOYES DE MAISON
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="nourritur">

                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="nourritur">
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
                            <strong>{{$bancaire->depenses[0]["nourritur"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="epargne_mens">
                        EPARGNE MENSUELLE
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="epargne_mens">

                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="epargne_mens">
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
                            <strong>{{$bancaire->depenses[0]["epargne_mens"]}}</strong>
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
                    <strong   style=" text-transform: uppercase!important;" for="autre_dep">
                        AUTRES DEPENSES
                    <strong>
                </td>
                <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="autre_dep">

                    <strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="autre_dep">
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
                            <strong>{{$bancaire->depenses[0]["autre_dep"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
     </table>
      <table style="border-color:#262626" class="mt-0 mb-0 table">
          <tbody>
              <tr>
                  <td class="text-right" style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                      <strong   style=" text-transform: uppercase!important;" for="tot_dep">
                        TOTAL DEPENSES (B)
                      <strong>
                  </td>
                  <td class="text-center"  style="width: 33%;background-color: #FFF!important;border-color:black!important">
                      <strong   style=" text-transform: uppercase!important;" for="tot_dep">

                      <strong>
                  </td>
                  <td class="text-center" style="width: 33%;background-color: #FFF!important;border-color: black">
                      <strong  style=" text-transform: uppercase!important;" for="tot_dep">
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
                            <strong>{{$bancaire->depenses[0]["tot_dep"]}}</strong>
                        @endif
                      <strong>
                  </td>
              </tr>
          </tbody>
      </table>


    </div>
