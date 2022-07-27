

<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 90% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                <strong>ETATS FINANCIERS PERSONNELS DU RESPONSABLE</strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="nameResp"> Nom :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->name_gerant}} </strong>
                        @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->name_gerant}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->responsables[0]["nameResp"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="nationnalite"> Nationalité :</strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->nationnalite}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->nationnalite}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->responsables[0]["nationnalite"]}}</strong>
                    @endif
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
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->prename}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->prename}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->responsables[0]["prenameResp"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for=""> </strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    {{-- @if ( $bancarisation->renseigne_id == 2)
                      @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->tel}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->tel}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->tel_com}}</strong>
                    @endif --}}
                </td>
            </tr>  
        </tbody>
     </table>  
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="addressResp"> Adresse actuelle  :</strong> <br>
                   <strong style=" text-transform: capitalize!important;" for="addressResp"> Ville  :</strong>
                </th>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="addressResp">
                        @if ( $bancarisation->renseigne_id == 2)
                              @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->lieu_habitation}} </strong><br>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->lieu_habitation}} </strong><br>
                        @else

                        @endif


                        @else
                               <strong> {{$bancarisation->responsables[0]["addressResp"]}}</strong><br>
                        @endif
                  </strong>
                  <strong style=" text-transform: capitalize!important;" for="ville">
                        @if ( $bancarisation->renseigne_id == 2)
                              @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->lieu_habitation}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->lieu_habitation}} </strong>
                        @else

                        @endif


                        @else
                               <strong> {{$bancarisation->responsables[0]["ville"]}}</strong>
                        @endif
                  </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="nbr_dependantResp">Nombre de dépendants :</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #fff!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="nbr_dependantResp">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong> {{$bancarisation->responsables[0]["nbr_dependantResp"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong> {{$bancarisation->responsables[0]["nbr_dependantResp"]}}</strong>
                            @else

                            @endif


                    @else
                            <strong> {{$bancarisation->responsables[0]["nbr_dependantResp"]}}</strong>
                    @endif
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="depuisResp"> Depuis :</strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="depuisResp">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                 <strong> {{$bancarisation->responsables[0]["depuisResp"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong> {{$bancarisation->responsables[0]["depuisResp"]}}</strong>
                            @else

                            @endif


                        @else
                                <strong> {{$bancarisation->responsables[0]["depuisResp"]}}</strong>
                        @endif
                    </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="tel_residence"> Tél résidence : </strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="tel_residence">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong>  {{$bancarisation->entreprise->tel}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong>  {{$bancarisation->society->tel}}</strong>
                            @else

                            @endif

                        @else
                           <strong> {{$bancarisation->responsables[0]["tel_residence"]}}</strong>
                        @endif
                 </strong>
                </td>
            </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="datenaiss">Date de naissance : </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="datenaiss">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                   <strong> {{\Carbon\Carbon::parse($bancarisation->entreprise->datenaiss)->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                 <strong> {{\Carbon\Carbon::parse($bancarisation->entreprise->datenaiss)->format('d/m/Y')}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{\Carbon\Carbon::parse($bancarisation->responsables[0]["datenaiss"])->format('d/m/Y')}}</strong>
                        @endif
                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="bureau"> Bureau :</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="bureau">
                       @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong> {{$bancarisation->responsables[0]["bureau"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong> {{$bancarisation->responsables[0]["bureau"]}}</strong>
                            @else

                            @endif

                        @else
                           <strong> {{$bancarisation->responsables[0]["bureau"]}}</strong>
                        @endif
                    </strong>
                </td>
               </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="prof">Profession : </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prof">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                   <strong> {{$bancarisation->responsables[0]["prof"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong> {{$bancarisation->responsables[0]["prof"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->responsables[0]["prof"]}}</strong>
                        @endif
                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="CNI"> Piece :</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="CNI">
                       @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong>  {{$bancarisation->entreprise->piece->nom}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong>  {{$bancarisation->society->piece->nom}}</strong>
                            @else

                            @endif

                        @else
                                @if ($bancarisation->responsables[0]["piece_id"] == 1)
                                    <strong> Carte de séjour</strong>
                                @elseif ($bancarisation->responsables[0]["piece_id"] == 2)
                                <strong> Carte consulaire</strong>
                                @elseif ($bancarisation->responsables[0]["piece_id"] == 3)
                                <strong> Pièce d'identité</strong>
                                @elseif ($bancarisation->responsables[0]["piece_id"] == 4)
                                <strong> Attestation d'identité</strong>
                                @elseif ($bancarisation->responsables[0]["piece_id"] == 5)
                                <strong> Passeport</strong>
                                @else
                                @endif
                        @endif
                    </strong>
                </td>
               </tr>
                <tr>
                    <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for=""></strong></td>
                    <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                        <strong style=" text-transform: capitalize!important;" for="prof">
                        </strong>
                    </td>
                    <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="dateexp"> Date d’expiration :</strong></td>
                     <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="dateexp">
                       @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong> {{\Carbon\Carbon::parse($bancarisation->entreprise->dateexp)->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                 <strong> {{\Carbon\Carbon::parse($bancarisation->society->dateexp)->format('d/m/Y')}}</strong>
                            @else

                            @endif

                        @else
                                    <strong> {{\Carbon\Carbon::parse($bancarisation->responsables[0]["dateexp"])->format('d/m/Y')}}</strong>
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

                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->particulier_id !== Null)
                                @if ($bancarisation->particulier->situation == 'Marie')
                                        Marié(e)
                                @else
                                   Célibataire
                                @endif
                            @elseif($bancarisation->client_id !== Null)
                                @if ($bancarisation->client->situation == 'Marie')
                                            Marié(e)
                                    @else
                                    Célibataire
                                    @endif
                            @elseif($bancarisation->customer_id !== Null)
                                @if ($bancarisation->customer->situation == 'Marie')
                                        Marié(e)
                                @else
                                Célibataire
                                @endif
                            @else

                            @endif


                        @else

                            <strong style=" " for="etat_id"> Marié(e) </strong>
                                @if ($bancarisation->responsables[0]["etat_id"] == 1)
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" checked value="{{$bancarisation->responsables[0]["etat_id"] }}">
                                @else
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" value="{{$bancarisation->responsables[0]["etat_id"]}}">
                                @endif
                            <strong style="" for="etat_id"> Union libre</strong>
                                @if ($bancarisation->responsables[0]["etat_id"]   == 2)
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id"  checked value="{{$bancarisation->responsables[0]["etat_id"]}}">
                                @else
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" value="{{$bancarisation->responsables[0]["etat_id"]}}">
                                @endif
                            <strong style="" for="etat_id"> Veuf(ve)</strong>
                                @if ($bancarisation->responsables[0]["etat_id"]  == 3)
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id"  checked value="{{$bancarisation->responsables[0]["etat_id"]}}">
                                @else
                                <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id" value="{{$bancarisation->responsables[0]["etat_id"]}}">
                                @endif
                                <strong style="" for="etat_id"> Séparé(e)</strong>
                                @if ($bancarisation->responsables[0]["etat_id"]  == 4)
                                <input disabled type="checkbox" id="etat_id"  name="etat_id"  checked value="{{$bancarisation->responsables[0]["etat_id"] }}">
                                @else
                                <input disabled type="checkbox" id="etat_id"  name="etat_id" value="{{$bancarisation->responsables[0]["etat_id"] }}">
                                @endif
                        @endif



                </td>
                <td style="width: 12.5% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style="font-size: 12.5px; text-transform: capitalize!important;" for="commune"> Date de mariage :</strong>
                </td>
                <td style="width: 12.5% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="prof">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  {{\Carbon\Carbon::parse($bancarisation->responsables[0]["date_mariage"])->format('d/m/Y')}}
                            @elseif($bancarisation->society_id !== Null)
                                  {{\Carbon\Carbon::parse($bancarisation->responsables[0]["date_mariage"])->format('d/m/Y')}}
                            @else

                            @endif


                        @else
                           {{\Carbon\Carbon::parse($bancarisation->responsables[0]["date_mariage"])->format('d/m/Y')}}
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

                @if ( $bancarisation->renseigne_id == 2)
                        <strong style=" " for="regime_id"> Communauté de biens </strong>
                            @if ($bancarisation->responsables[0]["regime_id"] == 1)
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" checked value="{{$bancarisation->responsables[0]["regime_id"] }}">
                            @else
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancarisation->responsables[0]["regime_id"] }}">
                            @endif
                        <strong style="" for="regime_id">Séparation</strong>
                        @if ($bancarisation->responsables[0]["regime_id"]  == 2)
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id"  checked value="{{$bancarisation->responsables[0]["regime_id"] }}">
                        @else
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancarisation->responsables[0]["regime_id"] }}">
                        @endif

                @else
                        <strong style=" " for="regime_id"> Communauté de biens </strong>
                            @if ($bancarisation->responsables[0]["regime_id"] == 1)
                             <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" checked value="{{$bancarisation->responsables[0]["regime_id"] }}">
                            @else
                             <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancarisation->responsables[0]["regime_id"] }}">
                            @endif
                        <strong style="" for="regime_id">Séparation</strong>
                        @if ($bancarisation->responsables[0]["regime_id"] == 2)
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id"  checked value="{{$bancarisation->responsables[0]["regime_id"] }}">
                        @else
                            <input disabled type="checkbox" id="regime_id" class="mr-4" name="regime_id" value="{{$bancarisation->responsables[0]["regime_id"] }}">
                        @endif
                @endif


                </td>
                <td style="width: 18.5% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style="text-transform: capitalize!important;" for="commune"> Nom du conjoint :</strong>
                </td>
                <td style="width: 12.5% ;background-color: #FFF!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="nom_conjoint">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                {{$bancarisation->entreprise->successeur_name}} {{$bancarisation->entreprise->successeur_prename}}
                            @elseif($bancarisation->society_id !== Null)
                                {{$bancarisation->society->successeur_name}} {{$bancarisation->society->successeur_prename}}       
                            @else

                            @endif


                        @else
                                {{$bancarisation->responsables[0]["nom_conjoint"]}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> Avez-vous déjà emprunté :</strong>
                </td>
                <td  style="width: 70% ;background-color: #FFF!important;border-color:black!important">

                    @if ( $bancarisation->renseigne_id == 2)
                            <strong style=" " for="emprunt"> Oui </strong>
                                @if ($bancarisation->responsables[0]["emprunt"] == "Oui")
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt" checked value="{{$bancarisation->responsables[0]["emprunt"] }}">
                                Si oui où  :  {{ $bancarisation->responsables[0]["where_emprunt"]  }}
                                @else
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt" value="{{$bancarisation->responsables[0]["emprunt"] }}">
                                @endif
                            <strong style="" for="emprunt">Non</strong>
                            @if ($bancarisation->responsables[0]["emprunt"]  == "Non")
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt"  checked value="{{$bancarisation->responsables[0]["emprunt"] }}">
                            @else
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt" value="{{$bancarisation->responsables[0]["emprunt"] }}">
                            @endif
                    @endif


                   
                     

                    @if ( $bancarisation->renseigne_id == 1)
                            <strong style=" " for="emprunt"> Oui </strong>
                                @if ($bancarisation->responsables[0]["emprunt"] == "Oui")
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt" checked value="{{$bancarisation->responsables[0]["emprunt"] }}">
                                Si oui où  :  {{ $bancarisation->responsables[0]["where_emprunt"]  }}
                                @else
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt" value="{{$bancarisation->responsables[0]["emprunt"] }}">
                                @endif
                            <strong style="" for="emprunt">Non</strong>
                            @if ($bancarisation->responsables[0]["emprunt"]  == "Non")
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt"  checked value="{{$bancarisation->responsables[0]["emprunt"] }}">
                            @else
                                <input disabled type="checkbox" id="emprunt" class="mr-4" name="emprunt" value="{{$bancarisation->responsables[0]["emprunt"] }}">
                            @endif
                    @endif


                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> Prêts antérieurs à ELITE CREDIT :</strong>
                </td>
                <td  style="width: 70% ;background-color: #FFF!important;border-color:black!important">

                    @if ( $bancarisation->renseigne_id == 2)
                            <strong style=" " for="anterieur"> Oui </strong>
                                @if ($bancarisation->responsables[0]["anterieur"] == "Oui")
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur" checked value="{{$bancarisation->responsables[0]["anterieur"] }}">
                                Si oui où  : {{ $bancarisation->responsables[0]["where_anterieur"]  }}
                                @else
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur" value="{{$bancarisation->responsables[0]["anterieur"] }}">
                                @endif
                            <strong style="" for="anterieur">Non</strong>
                            @if ($bancarisation->responsables[0]["anterieur"]  == "Non")
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur"  checked value="{{$bancarisation->responsables[0]["anterieur"] }}">
                                {{ $bancarisation->responsables[0]["where_anterieur"]  }}
                            @else
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur" value="{{$bancarisation->responsables[0]["anterieur"] }}">
                            @endif
                    @endif


                     

                    @if ( $bancarisation->renseigne_id == 1)
                            <strong style=" " for="anterieur"> Oui </strong>
                                @if ($bancarisation->responsables[0]["anterieur"] == "Oui")
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur" checked value="{{$bancarisation->responsables[0]["anterieur"] }}">
                                Si oui où  : {{ $bancarisation->responsables[0]["where_anterieur"]  }}
                                @else
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur" value="{{$bancarisation->responsables[0]["anterieur"] }}">
                                @endif
                            <strong style="" for="anterieur">Non</strong>
                            @if ($bancarisation->responsables[0]["anterieur"]  == "Non")
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur"  checked value="{{$bancarisation->responsables[0]["anterieur"] }}">
                            @else
                                <input disabled type="checkbox" id="anterieur" class="mr-4" name="anterieur" value="{{$bancarisation->responsables[0]["anterieur"] }}">
                            @endif
                    @endif


                </td>
            </tr>
        </tbody>
    </table>
    
</div>


    <table style="border-color:#262626" class="mt-3 mb-4 table">
        <tbody>
            <tr>
                <td style="width: 90% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                <strong>PROFIL FINANCIER</strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>

<div  style="border-color:#262626" class=" table" class="col-12">
    <table style="border-color:#262626" class="mt-3 mb-4 table">
        <tbody>
            <tr>
                <td class="text-center" style="width: 50% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                 <strong  style=" text-transform: uppercase!important;" for="title">ACTIF</strong><br>
                    <i>(ENUMERER ET DECRIRE TOUS LES ELEMENTS D’ACTIFS)</i>
                </td>
                <td class="text-center" style="width: 50% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                 <strong  style=" text-transform: uppercase!important;" for="title">PASSIF</strong><br>
                    <i>(CARTES DE CREDIT ET AUTRES ELEMENTS DE PASSIF Y COMPRIS PENSIONS ALIMENTAIRES)</i>
                </td>
            
            </tr>
        </tbody>
    </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="sgbk"> ENCAISSE SGBK :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->actifs[0]["sgbk"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->actifs[0]["sgbk"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["sgbk"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="pretB"> PRETS BANCAIRES :</strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->passifs[0]["pretB"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                          <strong> {{$bancarisation->passifs[0]["pretB"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->passifs[0]["pretB"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prename"> ENCAISSE – AUTRES INSTITUTIONS FINANCIERES  :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->prename}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->prename}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->actifs[0]["institutions"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="biens">HYPOTHEQUES SUR BIENS IMMOBILIERS </strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                      @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->tel}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->tel}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->passifs[0]["biens"]}}</strong>
                    @endif
                </td>
            </tr>  
        </tbody>
     </table>  
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="assurance"> ASSURANCE-VIE – VALEUR DE RACHAT  :</strong>
                </th>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="assurance">
                        @if ( $bancarisation->renseigne_id == 2)
                              @if ($bancarisation->entreprise_id !== Null)
                            <strong> {{$bancarisation->actifs[0]["assurance"]}}</strong><br>
                         @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->actifs[0]["assurance"]}}</strong><br>
                        @else

                        @endif


                        @else
                               <strong> {{$bancarisation->actifs[0]["assurance"]}}</strong><br>
                        @endif
                  </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="carteCredit">CARTES DE CREDIT <br> 1)</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #fff!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="carteCredit">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong> {{$bancarisation->passifs[0]["carteCredit"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                 <strong> {{$bancarisation->passifs[0]["carteCredit"]}}</strong>
                            @else

                            @endif


                    @else
                            <strong> {{$bancarisation->passifs[0]["carteCredit"]}}</strong>
                    @endif
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="compte"> COMPTES DE RETRAITES :</strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="compte">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                <strong> {{$bancarisation->actifs[0]["compte"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong> {{$bancarisation->actifs[0]["compte"]}}</strong>
                            @else

                            @endif


                        @else
                                <strong> {{$bancarisation->actifs[0]["compte"]}}</strong>
                        @endif
                    </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="carteCredit1"> 2) </strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="carteCredit1">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                       <strong> {{$bancarisation->passifs[0]["carteCredit1"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                      <strong> {{$bancarisation->passifs[0]["carteCredit1"]}}</strong>
                            @else

                            @endif

                        @else
                           <strong> {{$bancarisation->passifs[0]["carteCredit1"]}}</strong>
                        @endif
                 </strong>
                </td>
            </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="negociable">TITRES NEGOCIABLES : </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="negociable">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                              <strong> {{$bancarisation->actifs[0]["negociable"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong> {{$bancarisation->actifs[0]["negociable"]}}</strong>
                            @else

                            @endif


                        @else
                                <strong> {{$bancarisation->actifs[0]["negociable"]}}</strong>
                        @endif

                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="carteCredit2">3)</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="carteCredit2">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong> {{$bancarisation->passifs[0]["carteCredit2"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong> {{$bancarisation->passifs[0]["carteCredit2"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->passifs[0]["carteCredit2"]}}</strong>
                        @endif
                    </strong>
                </td>
               </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="sommes">COMPTES CLIENTS ET SOMMES PRETEES <br>1) </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="sommes">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong> {{$bancarisation->actifs[0]["sommes"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong> {{$bancarisation->actifs[0]["sommes"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->actifs[0]["sommes"]}}</strong>
                        @endif
                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="autres"> AUTRES OBLIGATIONS <br> 1) :</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="autres">
                         @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                   <strong> {{$bancarisation->passifs[0]["autres"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong> {{$bancarisation->passifs[0]["autres"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->passifs[0]["autres"]}}</strong>
                        @endif
                    </strong>
                </td>
               </tr>
                <tr>
                    <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="sommes1">2)</strong></td>
                    <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                        <strong style=" text-transform: capitalize!important;" for="sommes1">
                                @if ( $bancarisation->renseigne_id == 2)
                                    @if ($bancarisation->entreprise_id !== Null)
                                            <strong> {{$bancarisation->actifs[0]["sommes1"]}}</strong>
                                    @elseif($bancarisation->society_id !== Null)
                                           <strong> {{$bancarisation->actifs[0]["sommes1"]}}</strong>
                                    @else

                                    @endif

                                @else
                                    <strong> {{$bancarisation->actifs[0]["sommes1"]}}</strong>
                                @endif
                        </strong>
                    </td>
                    <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="autres1"> 2)</strong></td>
                     <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="autres1">
                            @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                     <strong> {{$bancarisation->passifs[0]["autres1"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                     <strong> {{$bancarisation->passifs[0]["autres1"]}}</strong>
                                @else

                                @endif

                            @else
                                <strong> {{$bancarisation->passifs[0]["autres1"]}}</strong>
                            @endif
                    </strong>
                </td>
               </tr>
        </tbody>
    </table>
     <table style="border-color:#262626" class="mt-0  mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="auto"> AUTOMOBILES :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["auto"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                              <strong> {{$bancarisation->actifs[0]["auto"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["auto"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="passife"> (B) PASSIF TOTAL :</strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->passifs[0]["passife"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->passifs[0]["passife"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->passifs[0]["passife"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0  mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="auto"> AUTOMOBILES :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["auto"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                           <strong> {{$bancarisation->actifs[0]["auto"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["auto"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="passife"> (B) PASSIF TOTAL :</strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                          <strong> {{$bancarisation->passifs[0]["passife"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->passifs[0]["passife"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->passifs[0]["passife"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0  mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="immo"> BIENS IMMOBILIERS :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                        <strong> {{$bancarisation->actifs[0]["immo"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                      <strong> {{$bancarisation->actifs[0]["immo"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["immo"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for=""> </strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                   
                </td>
            </tr>
        </tbody>
     </table>
      <table style="border-color:#262626" class=" mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="int"> INTERETS COMMERCIAUX :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong> {{$bancarisation->actifs[0]["int"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                      <strong> {{$bancarisation->actifs[0]["int"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["int"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for=""> </strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                   
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class=" mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="element"> AUTRES ELEMENTS D’ACTIFS <br> 1)</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
            <strong> {{$bancarisation->actifs[0]["element"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["element"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["element"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="valeur"> VALEUR NETTE (A-B) :</strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                          <strong> {{$bancarisation->passifs[0]["valeur"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                         <strong> {{$bancarisation->passifs[0]["valeur"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->passifs[0]["valeur"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class=" mt-0 mb-0 table">
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                     <strong style=" text-transform: capitalize!important;" for="element1"> 2)</strong>
                </td>
                 <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                       @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["element1"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["element1"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["element1"]}}</strong>
                    @endif
                </td>
                <th class="text-center" style="width: 40% ;border-color:black!important;background-color: #F1F1F1!important; color: black" rowspan="5">


                    @if ( $bancarisation->renseigne_id == 2)
                            <strong style=" " for="diverses"> Oui </strong>
                                @if ($bancarisation->passifs[0]["diverses"] == "Oui")
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" checked value="{{$bancarisation->passifs[0]["diverses"] }}">
                                @else
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" value="{{$bancarisation->passifs[0]["diverses"] }}">
                                @endif
                            <strong style="" for="diverses">Non</strong>
                            @if ($bancarisation->passifs[0]["diverses"]  == "Non")
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses"  checked value="{{$bancarisation->passifs[0]["diverses"] }}">
                            @else
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" value="{{$bancarisation->passifs[0]["diverses"] }}">
                            @endif
                    @endif


                   
                     

                    @if ( $bancarisation->renseigne_id == 1)
                            <strong style=" " for="diverses"> Oui </strong>
                                @if ($bancarisation->passifs[0]["diverses"] == "Oui")
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" checked value="{{$bancarisation->passifs[0]["diverses"] }}">
                                @else
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" value="{{$bancarisation->passifs[0]["diverses"] }}">
                                @endif
                            <strong style="" for="diverses">Non</strong>
                            @if ($bancarisation->passifs[0]["diverses"]  == "Non")
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses"  checked value="{{$bancarisation->passifs[0]["diverses"] }}">
                            @else
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" value="{{$bancarisation->passifs[0]["diverses"] }}">
                            @endif <br>
                            <i style=" " for="diverses"> OBLIGATIONS DIVERSES </i>
                    @endif  <br>


                         @if ( $bancarisation->renseigne_id == 2)
                            <strong style=" " for="diverses"> Oui </strong>
                                @if ($bancarisation->passifs[0]["diverses"] == "Oui")
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" checked value="{{$bancarisation->passifs[0]["diverses"] }}">
                                @else
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" value="{{$bancarisation->passifs[0]["diverses"] }}">
                                @endif
                            <strong style="" for="diverses">Non</strong>
                            @if ($bancarisation->passifs[0]["diverses"]  == "Non")
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses"  checked value="{{$bancarisation->passifs[0]["diverses"] }}">
                            @else
                                <input disabled type="checkbox" id="diverses" class="mr-4" name="diverses" value="{{$bancarisation->passifs[0]["diverses"] }}">
                            @endif
                    @endif


                   
                     

                    @if ( $bancarisation->renseigne_id == 1)
                        <i style=" " for="cosigne"> AVEZ-VOUS D’AUTRES OBLIGATIONS (COSIGNATAIRE, ENDOSSEUR, CAUTION)? </i> <br>
                            <strong style=" " for="cosigne"> Oui </strong> 
                                @if ($bancarisation->passifs[0]["cosigne"] == "Oui")
                                <input disabled type="checkbox" id="cosigne" class="mr-4" name="cosigne" checked value="{{$bancarisation->passifs[0]["cosigne"] }}">
                                @else
                                <input disabled type="checkbox" id="cosigne" class="mr-4" name="cosigne" value="{{$bancarisation->passifs[0]["cosigne"] }}">
                                @endif
                            <strong style="" for="cosigne">Non</strong>
                            @if ($bancarisation->passifs[0]["cosigne"]  == "Non")
                                <input disabled type="checkbox" id="cosigne" class="mr-4" name="cosigne"  checked value="{{$bancarisation->passifs[0]["cosigne"] }}">
                            @else
                                <input disabled type="checkbox" id="cosigne" class="mr-4" name="cosigne" value="{{$bancarisation->passifs[0]["cosigne"] }}">
                            @endif  <br>

                            @if ($bancarisation->passifs[0]["cosigne"] == "Oui")
                                <i style=" " for="cosigne"> SI OUI PRECISER LE MONTANT ET LA NATURE DE CES OBLIGATIONS </i> <br>
                                    @if ( $bancarisation->renseigne_id == 2)
                                        @if ($bancarisation->entreprise_id !== Null)
                                          <strong> {{$bancarisation->passifs[0]["nature"]}}</strong> <br>
                                        <strong> {{$bancarisation->passifs[0]["mt"]}}</strong>
                                        @elseif($bancarisation->society_id !== Null)
                                           <strong> {{$bancarisation->passifs[0]["nature"]}}</strong> <br>
                                        <strong> {{$bancarisation->passifs[0]["mt"]}}</strong>
                                        @else

                                        @endif

                
                                    @else
                                        <strong> {{$bancarisation->passifs[0]["nature"]}}</strong> <br>
                                        <strong> {{$bancarisation->passifs[0]["mt"]}}</strong>
                                    @endif 
                            @else
                                
                            @endif
                    @endif
                
                </th>
            </tr>
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                     <strong style=" text-transform: capitalize!important;" for="element2"> 3)</strong>
                </td>
                 <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                      @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["element2"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
            <strong> {{$bancarisation->actifs[0]["element2"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["element2"]}}</strong>
                    @endif  
                </td>
            </tr>
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    
                </td>
                 <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    
                </td>
            </tr>
             <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    (A) ACTIF TOTAL
                </td>
                 <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                      @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["actif_tot"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                             <strong> {{$bancarisation->actifs[0]["actif_tot"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->actifs[0]["actif_tot"]}}</strong>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    
                </td>
                 <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
 
                </td>
            </tr>
        </table>
</div>