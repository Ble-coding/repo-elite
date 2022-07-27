
    <div  style="border-color:#262626" class="table" class="col-12">
      <table style="border-color:#262626"  class="mb-0 table">
              <thead>
                  <tr>
                      <th style="border-right:#F1F1F1!important;background-color: #E5E5E5!important; color: black" class="text-left" >RENSEIGNEMENTS GENERAUX</th>
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
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="renseigne_id"> Nouveau Client</strong>
                      @if ($bancaire->renseigne_id == 1)
                       <input disabled type="checkbox" id="renseigne_id" name="renseigne_id" checked value="{{$bancaire->renseigne_id}}"> <br>
                      @else
                       <input disabled type="checkbox" id="renseigne_id" name="renseigne_id" value="{{$bancaire->renseigne_id}}"><br>
                      @endif
                    <strong style=" text-transform: capitalize!important;" for="renseigne_id"> Client Existant</strong>
                    @if ($bancaire->renseigne_id == 2)
                       <input disabled type="checkbox" id="renseigne_id" name="renseigne_id"  checked value="{{$bancaire->renseigne_id}}">
                    @else
                       <input disabled type="checkbox" id="renseigne_id" name="renseigne_id" value="{{$bancaire->renseigne_id}}">
                    @endif
                </td>
                <td  style="width: 25%;background-color: #F1F1F1!important;border-color:black!important">

                </td>
                <td style="width: 50%;background-color: #F1F1F1!important;border-color: black">

                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="name"> Nom :</strong>
                </td>
                <td  style="width: 25% ;background-color: #F1F1F1!important;border-color:black!important">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                             <strong>  {{$bancaire->particulier->name}} </strong>
                        @elseif($bancaire->client_id !== Null)
                             <strong>  {{$bancaire->client->name}}</strong>
                        @elseif($bancaire->customer_id !== Null)
                            <strong> {{$bancaire->customer->name}} </strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancaire->name}}</strong>
                    @endif
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="sexe"> Sexe :</strong>
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <div class="row col-md-12">
                        <div class=" col-md-6">
                            <strong style=" text-transform: capitalize!important;" for="sexe"> M</strong> <br>
                            @if ($bancaire->sexe == "M")
                             <input disabled type="checkbox" id="sexe" name="sexe" checked value="{{$bancaire->sexe}}">
                            @else
                             <input disabled type="checkbox" id="sexe" name="sexe" value="{{$bancaire->sexe}}">
                            @endif
                        </div>
                        <div class=" col-md-6">
                            <strong style=" text-transform: capitalize!important;" for="sexe"> F</strong><br>
                            @if ($bancaire->sexe == "F")
                               <input disabled type="checkbox" id="sexe" name="sexe"  checked value="{{$bancaire->sexe}}">
                            @else
                               <input disabled type="checkbox" id="sexe" name="sexe" value="{{$bancaire->sexe}}">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> Prénom :</strong>
                </td>
                <td  style="width: 25% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            <strong>  {{$bancaire->particulier->prename}} </strong>
                        @elseif($bancaire->client_id !== Null)
                            <strong>  {{$bancaire->client->prename}}</strong>
                        @elseif($bancaire->customer_id !== Null)
                            <strong> {{$bancaire->customer->prename}} </strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancaire->prename}}</strong>
                    @endif
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="commune"> Commune de naissance :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            <strong>  {{$bancaire->particulier->lieu_habitation}} </strong>
                        @elseif($bancaire->client_id !== Null)
                            <strong>  {{$bancaire->client->lieu_habitation}}</strong>
                        @elseif($bancaire->customer_id !== Null)
                            <strong> {{$bancaire->customer->lieu_habitation}} </strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancaire->commune}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> Nom de naissance  :</strong>
                </td>
                <td  style="width: 25% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- <strong>  {{$bancaire->particulier->name_naissance}} </strong> --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- <strong>  {{$bancaire->client->name_naissance}}</strong> --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- <strong> {{$bancaire->customer->name_naissance}} </strong> --}}
                        @else

                        @endif


                    @else
                        <strong> {{$bancaire->name_naissance}}</strong>
                    @endif
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="commune"> Nationalité :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            <strong>  {{$bancaire->particulier->nationnalite}} </strong>
                        @elseif($bancaire->client_id !== Null)
                            <strong>  {{$bancaire->client->nationnalite}}</strong>
                        @elseif($bancaire->customer_id !== Null)
                            <strong> {{$bancaire->customer->nationnalite}} </strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancaire->nationnalite}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black"
                 rowspan="2">
                  <strong style=" text-transform: capitalize!important;" for="address"> Adresse actuelle  :</strong>
                </th>
                <td style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black"
                 rowspan="2">
                  <strong style=" text-transform: capitalize!important;" for="address">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{$bancaire->particulier->lieu}}
                            @elseif($bancaire->client_id !== Null)
                                {{$bancaire->client->lieu}}
                            @elseif($bancaire->customer_id !== Null)
                                {{$bancaire->customer->lieu}}
                            @else

                            @endif


                        @else
                                {{$bancaire->address}}
                        @endif
                  </strong>
                </td>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="commune">Commune de résidence :</strong></td>
                <td style="width: 25% ;border-color:black!important;background-color: #fff!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="commune">
                        @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- {{$bancaire->particulier->lieu}} --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- {{$bancaire->client->lieu}} --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- {{$bancaire->customer->lieu}} --}}
                        @else

                        @endif


                    @else
                            {{$bancaire->communeR}}
                    @endif
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="nbr_dependant"> Nombre de dépendants  :</strong></td>
                <td style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="address">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- {{$bancaire->particulier->lieu}} --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- {{$bancaire->client->lieu}} --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- {{$bancaire->customer->lieu}} --}}
                            @else

                            @endif

                        @else
                                {{$bancaire->nbr_dependant}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tr>
              <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black" rowspan="2"><strong style=" text-transform: capitalize!important;" for="tel_residence"> Depuis :</strong> </th>
              <th rowspan="2" style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong style=" text-transform: capitalize!important;" for="address">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- {{$bancaire->particulier->lieu}} --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- {{$bancaire->client->lieu}} --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- {{$bancaire->customer->lieu}} --}}
                        @else

                        @endif

                    @else
                            {{$bancaire->depuis}}
                    @endif
                </strong>
              </th>
              <td rowspan="2"  style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="tel_residence"> N°. Téléphone résidence :</strong></td>
              {{-- <td rowspan="2" style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black"></td> --}}
         </tr>
        <tr>
              <td style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong style=" text-transform: capitalize!important;" for="address">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- {{$bancaire->particulier->lieu}} --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- {{$bancaire->client->lieu}} --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- {{$bancaire->customer->lieu}} --}}
                        @else

                        @endif

                    @else
                            {{$bancaire->tel_residence}}
                    @endif
                </strong>
              </td>
         </tr>
         <tr>
              <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black" rowspan="2"> <strong style=" text-transform: capitalize!important;" for="datenaiss"> Date de naissance :</strong></th>
              <th rowspan="2" style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong style=" text-transform: capitalize!important;" for="address">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{\Carbon\Carbon::parse($bancaire->particulier->datenaiss)->format('d/m/Y')}}
                        @elseif($bancaire->client_id !== Null)
                            {{\Carbon\Carbon::parse($bancaire->client->datenaiss)->format('d/m/Y')}}
                        @elseif($bancaire->customer_id !== Null)
                         {{\Carbon\Carbon::parse($bancaire->customer->datenaiss)->format('d/m/Y')}}
                        @else

                        @endif


                    @else
                         {{\Carbon\Carbon::parse($bancaire->datenaiss)->format('d/m/Y')}}
                    @endif
                  </strong>
              </th>
              <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="cellulaire">Cellulaire :</strong></td>
              <td style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong style=" text-transform: capitalize!important;" for="cel">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- {{$bancaire->particulier->datenaiss}} --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- {{$bancaire->client->datenaiss}} --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- {{$bancaire->customer->datenaiss}} --}}
                        @else

                        @endif


                    @else
                            {{$bancaire->cel}}
                    @endif
                </strong>
              </td>
         </tr>
         <tr>
            <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="bureau">Bureau :</strong></td>
            <td style="width: 25% ;border-color:black!important;background-color: #FFF!important; color: black">
                <strong style=" text-transform: capitalize!important;" for="bureau">
                    @if ( $bancaire->renseigne_id == 2)
                        @if ($bancaire->particulier_id !== Null)
                            {{-- {{$bancaire->particulier->datenaiss}} --}}
                        @elseif($bancaire->client_id !== Null)
                            {{-- {{$bancaire->client->datenaiss}} --}}
                        @elseif($bancaire->customer_id !== Null)
                            {{-- {{$bancaire->customer->datenaiss}} --}}
                        @else

                        @endif


                    @else
                            {{$bancaire->bureau}}
                    @endif
                </strong>
            </td>
         </tr>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prof"> Profession :</strong>
                </td>
                <td  style="width: 25% ;background-color: #FFF!important;border-color:black!important">
                    <strong style=" text-transform: capitalize!important;" for="prof">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{$bancaire->particulier->prof}}
                            @elseif($bancaire->client_id !== Null)
                                {{$bancaire->client->prof}}
                            @elseif($bancaire->customer_id !== Null)
                                {{$bancaire->customer->prof}}
                            @else

                            @endif


                        @else
                                {{$bancaire->prof}}
                        @endif
                    </strong>
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="commune"> NIF ou CIN ou # passeport :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="prof">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{$bancaire->particulier->piece->nom}}
                            @elseif($bancaire->client_id !== Null)
                                {{$bancaire->client->piece->nom}}
                            @elseif($bancaire->customer_id !== Null)
                                {{$bancaire->customer->piece->nom}}
                            @else

                            @endif


                        @else
                                {{$bancaire->piece->nom}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td colspan="2" style="width: 50% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="name_fille"> Prénom et nom de jeune fille de la mère :
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- {{$bancaire->particulier->piece->nom}} --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- {{$bancaire->client->piece->nom}} --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- {{$bancaire->customer->piece->nom}} --}}
                            @else

                            @endif


                        @else
                                {{$bancaire->name_fille}}  {{$bancaire->prename_fille}}
                        @endif
                    </strong>
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="address"> Adresse e-mail :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="prof">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{$bancaire->particulier->email}}
                            @elseif($bancaire->client_id !== Null)
                                {{$bancaire->client->email}}
                            @elseif($bancaire->customer_id !== Null)
                                {{$bancaire->customer->email}}
                            @else

                            @endif


                        @else
                                {{$bancaire->email}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 12% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> Etat civil :</strong>
                </td>
                <td  style="width: 63% ;background-color: #FFF!important;border-color:black!important">

                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                @if ($bancaire->particulier->situation == 'Marie')
                                        Marié(e)
                                @else
                                   Célibataire
                                @endif
                            @elseif($bancaire->client_id !== Null)
                                @if ($bancaire->client->situation == 'Marie')
                                            Marié(e)
                                    @else
                                    Célibataire
                                    @endif
                            @elseif($bancaire->customer_id !== Null)
                                @if ($bancaire->customer->situation == 'Marie')
                                        Marié(e)
                                @else
                                Célibataire
                                @endif
                            @else

                            @endif


                        @else

                            <strong style=" " for="etat_id"> Marié(e) </strong>
                                @if ($bancaire->etat_id == 1)
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" checked value="{{$bancaire->etat_id }}">
                                @else
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" value="{{$bancaire->etat_id }}">
                                @endif
                            <strong style="" for="etat_id"> Union libre</strong>
                                @if ($bancaire->etat_id  == 2)
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id"  checked value="{{$bancaire->etat_id }}">
                                @else
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" value="{{$bancaire->etat_id }}">
                                @endif
                            <strong style="" for="etat_id"> Veuf(ve)</strong>
                                @if ($bancaire->etat_id  == 3)
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id"  checked value="{{$bancaire->etat_id}}">
                                @else
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" value="{{$bancaire->etat_id }}">
                                @endif
                                <strong style="" for="etat_id"> Séparé(e)</strong>
                                @if ($bancaire->etat_id == 4)
                                <input disabled type="checkbox" id="etat_id"  name="etat_id"  checked value="{{$bancaire->etat_id }}">
                                @else
                                <input disabled type="checkbox" id="etat_id"  name="etat_id" value="{{$bancaire->etat_id }}">
                                @endif
                        @endif



                </td>
                <td style="width: 12.5% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style="font-size: 12.5px; text-transform: capitalize!important;" for="commune"> Date de mariage :</strong>
                </td>
                <td style="width: 12.5% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="prof">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- {{$bancaire->particulier->email}} --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- {{$bancaire->client->email}} --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- {{$bancaire->customer->email}} --}}
                            @else

                            @endif


                        @else
                           {{\Carbon\Carbon::parse($bancaire->date_mariage)->format('d/m/Y')}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> Régime matrimonial :</strong>
                </td>
                <td  style="width: 40% ;background-color: #FFF!important;border-color:black!important">

                @if ( $bancaire->renseigne_id == 2)
                        <strong style=" " for="regime_id"> Communauté de biens </strong>
                            @if ($bancaire->regime_id == 1)
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" checked value="{{$bancaire->regime_id}}">
                            @else
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancaire->regime_id}}">
                            @endif
                        <strong style="" for="regime_id">Séparation</strong>
                        @if ($bancaire->regime_id == 2)
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id"  checked value="{{$bancaire->regime_id}}">
                        @else
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancaire->regime_id}}">
                        @endif

                @else
                        <strong style=" " for="regime_id"> Communauté de biens </strong>
                            @if ($bancaire->regime_id == 1)
                             <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" checked value="{{$bancaire->regime_id}}">
                            @else
                             <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancaire->regime_id}}">
                            @endif
                        <strong style="" for="regime_id">Séparation</strong>
                        @if ($bancaire->regime_id == 2)
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id"  checked value="{{$bancaire->regime_id}}">
                        @else
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancaire->regime_id}}">
                        @endif
                @endif


                </td>
                <td style="width: 18.5% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style="text-transform: capitalize!important;" for="commune"> Nom du conjoint :</strong>
                </td>
                <td style="width: 12.5% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="nom_conjoint">
                        @if ( $bancaire->renseigne_id == 2)
                            @if ($bancaire->particulier_id !== Null)
                                {{-- {{$bancaire->particulier->email}} --}}
                            @elseif($bancaire->client_id !== Null)
                                {{-- {{$bancaire->client->email}} --}}
                            @elseif($bancaire->customer_id !== Null)
                                {{-- {{$bancaire->customer->email}} --}}
                            @else

                            @endif


                        @else
                                {{$bancaire->nom_conjoint}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #CCC!important; color: black">

                </td>
                <td  style="width: 40% ;background-color: #CCC!important;border-color:black!important">

                </td>
                <td style="width: 18.5% ;background-color: #CCC!important;border-color: black">

                </td>
                <td style="width: 12.5% ;background-color: #CCC!important;border-color: black">

                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="conjoint"> Conjoint</strong>
                </td>
                <td style="width: 78% ;background-color: #FFF!important;border-color: black">
                </td>
            </tr>
        </tbody>
    </table>


    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="nameC"> Nom :</strong>
                </td>
                <td  style="width: 38% ;background-color: #FFF!important;border-color:black!important">
                    <strong style=" text-transform: capitalize!important;" for="nom_conjoint">
                        {{$bancaire->conjoints[0]["nameC"]}}
                    </strong>
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="sexe"> Sexe :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    <div class="row col-md-12">
                        <div class=" col-md-6">
                            <strong style=" text-transform: capitalize!important;" for="sexeC"> M</strong> <br>
                            @if ($bancaire->conjoints[0]["sexeC"] == "M")
                              <input disabled type="checkbox" id="sexeC" name="sexeC" checked value="{{$bancaire->conjoints[0]["sexeC"]}}">
                            @else
                             <input disabled type="checkbox" id="sexeC" name="sexeC" value="{{$bancaire->conjoints[0]["sexeC"]}}">
                            @endif
                        </div>
                        <div class=" col-md-6">
                            <strong style=" text-transform: capitalize!important;" for="sexeC"> F</strong><br>
                            @if ($bancaire->conjoints[0]["sexeC"]== "F")
                               <input disabled type="checkbox" id="sexeC" name="sexeC"  checked value="{{$bancaire->conjoints[0]["sexeC"]}}">
                            @else
                               <input disabled type="checkbox" id="sexeC" name="sexeC" value="{{$bancaire->conjoints[0]["sexeC"]}}">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prenameC"> Prénom :</strong>
                </td>
                <td  style="width: 38% ;background-color: #FFF!important;border-color:black!important">
                    <strong style=" text-transform: capitalize!important;" for="nom_conjoint">
                         {{$bancaire->conjoints[0]["prenameC"]}}
                    </strong>
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="name_naissanceC"> Nom de naissance :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="nom_conjoint">
                        {{$bancaire->conjoints[0]["name_naissanceC"]}}
                   </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="datenaissC"> Date de naissance :</strong>
                </td>
                <td  style="width: 38% ;background-color: #FFF!important;border-color:black!important">
                    {{\Carbon\Carbon::parse($bancaire->datenaissC)->format('d/m/Y')}}
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="piece_idC"> CIN ou # passeport</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    @if ($bancaire->conjoints[0]["piece_idC"] == 1)
                         Carte de séjour
                    @else
                    @endif

                    @if ($bancaire->conjoints[0]["piece_idC"] == 2)
                    Carte consulaire
                    @else
                    @endif

                    @if ($bancaire->conjoints[0]["piece_idC"] == 3)
                    Pièce d'identité
                    @else
                    @endif

                    @if ($bancaire->conjoints[0]["piece_idC"] == 4)
                    Attestation d'identité
                    @else
                    @endif

                    @if ($bancaire->conjoints[0]["piece_idC"] == 5)
                    Passeport
                    @else
                    @endif

                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="datenaissC"> Commune de <br> naissance:</strong>
                </td>
                <td  style="width: 38% ;background-color: #FFF!important;border-color:black!important">
                    {{$bancaire->conjoints[0]["communeC"]}}
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="piece_idC"> Nombre de dépendants :</strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">
                    {{$bancaire->conjoints[0]["nbr_dependantC"]}}
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="datenaissC"> Commune de<br> résidence:</strong>
                </td>
                <td  style="width: 38% ;background-color: #FFF!important;border-color:black!important">
                    {{$bancaire->conjoints[0]["commune_residenceC"]}}
                </td>
                <td style="width: 25% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="piece_idC"> </strong>
                </td>
                <td style="width: 25% ;background-color: #FFF!important;border-color: black">

                </td>
            </tr>
        </tbody>
    </table>
    </div>
    <table style="border-color:black; background-color:#FFF;" class="mt-4 table">
        <thead>
            <th style="border:none!important;background-color: #fff!important; color: black" colspan="2"> <strong>BESOIN DE CREDIT</strong> </th>
            <th style="border:none!important; background-color: #fff!important; color: black" class="text-center"><strong>FCFA</strong> </th>
            <th style="border:none!important;; background-color: #fff!important; color: black" class="text-center"><strong>TYPE DE PRET</strong> </th>
        </thead>
        <tbody>
            <tr>
                <td style="border-color:black!important;background-color: #fff!important; color: black"  class="text-center"> <strong>MONTANT</strong> </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" class="text-center" ><strong>OBJET DU PRET</strong> </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" >
                  <strong style=" " for="etat_id"> AUTOFINANCEMENT : {{$bancaire->besoins[0]["auto"]}}</strong>
                </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" >
                    <strong for="pret_id"> BFR</strong>
                        @if ( $bancaire->besoins[0]["pret_id"] == 1)
                        <input disabled type="checkbox" id="pret_id" name="pret_id" checked value="{{$bancaire->besoins[0]["pret_id"]}}"> <br>
                        @else
                        <input disabled type="checkbox" id="pret_id" name="pret_id" value="{{$bancaire->besoins[0]["pret_id"]}}"><br>
                        @endif
                </td>
            </tr>
            <tr>
                <td style="border:none!important; background-color: #fff!important; color: black"  class="text-center" > <strong>{{$bancaire->besoins[0]["montant"]}}</strong> </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" class="text-center" ><strong>{{$bancaire->besoins[0]["objet"]}}</strong> </td>
                <td style="border-bottom-color:white!important;;background-color: #fff!important; color: black" ><strong></strong> </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" > </td>
            </tr>
            <tr>
                <td style="border:none!important; background-color: #fff!important; color: black"  class="text-center" > <strong></strong> </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" class="text-center" ><strong></strong> </td>
                <td style="border-bottom-color:white!important;background-color: #fff!important; color: black" >
                    <strong style=" " for="etat_id"> ELITE CREDIT :   {{$bancaire->besoins[0]["elite"]}}</strong>

                </td>
                <td style="border-bottom-color:white!important;-color: #fff!important; color: black" >
                    <strong  for="pret_id"> AUTO</strong>
                        @if ($bancaire->besoins[0]["pret_id"] == 3)
                            <input disabled type="checkbox" id="pret_id" name="pret_id"  checked value="{{$bancaire->besoins[0]["pret_id"] }}">
                        @else
                            <input disabled type="checkbox" id="pret_id" name="pret_id" value="{{$bancaire->besoins[0]["pret_id"] }}">
                        @endif
                 </td>
            </tr>
            <tr>
                <td style="border:none!important; background-color: #fff!important; color: black"  class="text-center" > <strong></strong> </td>
                <td style="border-color:black!important;background-color: #fff!important; color: black" class="text-center" ><strong></strong> </td>
                <td style="border-color:black!important;background-color: #fff!important; color: black" >
                    <strong style=" " for="etat_id"> COUT TOTAL :  {{$bancaire->besoins[0]["cout"]}}</strong>

                </td>
                <td style="border-color:black!important;background-color: #fff!important; color: black" >
                    <strong for="pret_id"> DISCOUNT</strong>
                        @if ($bancaire->besoins[0]["pret_id"]  == 2)
                            <input disabled type="checkbox" id="pret_id" name="pret_id"  checked value="{{$bancaire->besoins[0]["pret_id"]}}">
                        @else
                            <input disabled type="checkbox" id="pret_id" name="pret_id" value="{{$bancaire->besoins[0]["pret_id"]}}">
                        @endif
                </td>
            </tr>
        </tbody>
    </table>

