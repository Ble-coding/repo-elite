

<div  style="border-color:#262626" class="table" class="col-12">
    <table style="border-color:black; background-color:#FFF;" class=" mb-0  table">
        <thead>
            <th style="width: 28% ;border:none!important;background-color: #f1f1f1!important; color: black"> 
                    <strong style=" text-transform: capitalize!important;" for="renseigne_id"> Nouveau Client</strong>
                        @if ($bancarisation->renseigne_id == 1)
                        <input disabled type="checkbox" id="renseigne_id" name="renseigne_id" checked value="{{$bancarisation->renseigne_id}}"> <br>
                        @else
                        <input disabled type="checkbox" id="renseigne_id" name="renseigne_id" value="{{$bancarisation->renseigne_id}}"><br>
                        @endif
             </th>
            <th style="width: 40% ;border:none!important; background-color: #f1f1f1!important; color: black">
                     <strong style=" text-transform: capitalize!important;" for="renseigne_id"> Client Existant</strong>
                        @if ($bancarisation->renseigne_id == 2)
                        <input disabled type="checkbox" id="renseigne_id" name="renseigne_id"  checked value="{{$bancarisation->renseigne_id}}">
                        @else
                        <input disabled type="checkbox" id="renseigne_id" name="renseigne_id" value="{{$bancarisation->renseigne_id}}">
                        @endif
            </th>
            <th style="width: 12% ;border:none!important; background-color: #f1f1f1!important; color: black">
             </th>
            <th style="width: 20% ;border:none!important; background-color: #f1f1f1!important; color: black">
                       <strong style="" for=""> FCFA</strong>
                                   <input disabled type="checkbox" id="etat_id" class="mr-4" name="etat_id"  value="">
            </th>
        </thead>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="name"> Nom Commercial :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->name}} </strong>
                        @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->name}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->name}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="datefond"> Date de fondation :</strong>
                </td>
                <td style="width: 22% ;background-color: #FFF!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            {{-- <strong>  {{$bancarisation->entreprise->lieu_habitation}} </strong> --}}
                         @elseif($bancarisation->society_id !== Null)
                            {{-- <strong>  {{$bancarisation->society->name}}</strong> --}}
                        @else

                        @endif


                    @else
                        <strong> {{\Carbon\Carbon::parse($bancarisation->datefond)->format('d/m/Y')}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="siege"> Adresse :</strong>
                </td>
                <td  style="width: 35% ;background-color: #FFF!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->siege}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->siege}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->address}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="tel"> Tél. :</strong>
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
                        <strong> {{$bancarisation->tel_com}}</strong>
                    @endif
                </td>
            </tr>  
        </tbody>
     </table>  
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="name_gerant"> Responsable :</strong>
                </th>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="name_gerant">
                        @if ( $bancarisation->renseigne_id == 2)
                              @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->name_gerant}} {{$bancarisation->entreprise->prename_gerant}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->name_gerant}}  {{$bancarisation->society->prename_gerant}}</strong>
                        @else

                        @endif


                        @else
                                {{$bancarisation->resp}}
                        @endif
                  </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="secteur">Secteur d’activité :</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #fff!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="secteur">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>  {{$bancarisation->entreprise->secteur}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong>  {{$bancarisation->society->secteur}}</strong>
                            @else

                            @endif


                    @else
                            {{$bancarisation->sect}}
                    @endif
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="depuis"> Direction actuelle depuis :</strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="depuis">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                {{-- <strong>  {{$bancarisation->entreprise->secteur}}</strong> --}}
                            @elseif($bancarisation->society_id !== Null)
                                {{-- <strong>  {{$bancarisation->society->secteur}}</strong> --}}
                            @else

                            @endif


                        @else
                                {{$bancarisation->depuis}}
                        @endif
                    </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="datebil"> Date bilan </strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="datebil">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                {{-- {{$bancarisation->particulier->lieu}} --}}
                            @elseif($bancarisation->society_id!== Null)
                                {{-- {{$bancarisation->client->lieu}} --}}
                            @else

                            @endif

                        @else
                            {{\Carbon\Carbon::parse($bancarisation->datebil)->format('d/m/Y')}}
                        @endif
                 </strong>
                </td>
            </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="nbr_emp">Nombre d’employés </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="nbr_emp">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                {{-- {{$bancarisation->particulier->lieu}} --}}
                            @elseif($bancarisation->society_id!== Null)
                                {{-- {{$bancarisation->client->lieu}} --}}
                            @else

                            @endif

                        @else
                            {{$bancarisation->nbr_emp}}
                        @endif
                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="daterev"> Date révision :</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #FFF!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="daterev">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                {{-- <strong>  {{$bancarisation->entreprise->secteur}}</strong> --}}
                            @elseif($bancarisation->society_id !== Null)
                                {{-- <strong>  {{$bancarisation->society->secteur}}</strong> --}}
                            @else

                            @endif


                        @else
                                 {{\Carbon\Carbon::parse($bancarisation->daterev)->format('d/m/Y')}}
                        @endif
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:black; background-color:#FFF;" class=" mb-0  table">
        <thead>
            <th class="text-left" style="width: 91% ;border-right:black!important;background-color: #f1f1f1!important; color: black"> 
                    <strong style=" text-transform: capitalize!important;" for="journal"> Journal :</strong>
                         @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                {{-- <strong>  {{$bancarisation->entreprise->name}} </strong> --}}
                            @elseif($bancarisation->society_id !== Null)
                                {{-- <strong>  {{$bancarisation->society->name}}</strong> --}}
                            @else

                            @endif

    
                        @else
                            <strong> {{$bancarisation->journal}}</strong>
                        @endif
             </th>
            <th style="width: 3% ;border-right:black!important; background-color: #fff!important; color: black">
            </th>
            <th style="width: 3% ;border-right:black!important; background-color: #f1f1f1!important; color: black">
             </th>
            <th style="width: 3% ;border-right:black!important; background-color: #fff!important; color: black">
            </th>
        </thead>
    </table>
    <table style="border-color:black; background-color:#FFF;" class=" mb-0  table">
        <thead>  
            <th class="text-left" style="width: 91% ;border-right:black!important;background-color: #f1f1f1!important; color: black"> 
                    <strong style=" text-transform: capitalize!important;" for="journal"> Forme juridique :</strong>
                         @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                {{-- <strong>  {{$bancarisation->entreprise->name}} </strong> --}}
                            @elseif($bancarisation->society_id !== Null)
                                {{-- <strong>  {{$bancarisation->society->name}}</strong> --}}
                            @else

                            @endif

    
                        @else
                            <strong> {{$bancarisation->juridique->name}}</strong>
                        @endif
             </th>
            <th style="width: 3% ;border-right:black!important; background-color: #fff!important; color: black">
            </th>
            <th style="width: 3% ;border-right:black!important; background-color: #f1f1f1!important; color: black">
             </th>
            <th style="width: 3% ;border-right:black!important; background-color: #fff!important; color: black">
            </th>
        </thead>
    </table>
</div>


    <table style="border-color:black; background-color:#FFF;" class="mt-5 table">
        <thead>
            <th style="border:none!important;background-color: #E5E5E5!important; color: black" colspan="2"> <strong>BESOIN DE CREDIT </strong> </th>
            <th style="border:none!important; background-color: #E5E5E5!important; color: black" class="text-center"><strong></strong> </th>
            <th style="border:none!important;; background-color: #f1f1f1!important; color: black" class="text-center"><strong>TYPE DE PRET</strong> </th>
        </thead>
        <tbody>
            <tr>
                <td style="border-bottom-color:#F1F1F1!important;background-color: #f1f1f1!important; color: black"  class="text-center"> <strong>MONTANT</strong> </td>
                <td style="border-bottom-color:#f5f5f5!important;background-color: #f5f5f5!important; color: black" class="text-center" ><strong>OBJET DU PRET</strong> </td>
                <td style="border-bottom-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black" >
                  <strong style=" " for="etat_id"> AUTOFINANCEMENT : {{$bancarisation->needs[0]["auto"]}}</strong>
                </td>
                <td style="border-bottom-color:#f5f5f5!important;background-color: #f5f5f5!important; color: black" >
                        <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="pret_id"> BFR</strong>
                                    @if ( $bancarisation->needs[0]["pret_id"] == 1)
                                    <input disabled type="checkbox" id="pret_id" name="pret_id" checked value="{{$bancarisation->needs[0]["pret_id"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="pret_id" name="pret_id" value="{{$bancarisation->needs[0]["pret_id"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="pret_id"> AUTO</strong>
                                    @if ($bancarisation->needs[0]["pret_id"] == 3)
                                        <input disabled type="checkbox" id="pret_id" name="pret_id"  checked value="{{$bancarisation->needs[0]["pret_id"] }}">
                                    @else
                                        <input disabled type="checkbox" id="pret_id" name="pret_id" value="{{$bancarisation->needs[0]["pret_id"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
            </tr>
            <tr>
                <td style="border:none!important; background-color: #f1f1f1!important; color: black"  class="text-center" > <strong>{{$bancarisation->needs[0]["montant"]}}</strong> </td>
                <td style="border-bottom-color:#f5f5f5!important;background-color: #f5f5f5!important; color: black" class="text-center" ><strong>{{$bancarisation->needs[0]["objet"]}}</strong> </td>
                <td style="border-bottom-color:#F1F1F1!important;;background-color: #F1F1F1!important; color: black" ><strong></strong> </td>
                <td style="border-bottom-color:#f5f5f5!important;background-color: #f5f5f5!important; color: black" > </td>
            </tr>
            <tr>
                <td style="border:none!important; background-color: #f1f1f1!important; color: black"  class="text-center" > <strong></strong> </td>
                <td style="border-bottom-color:#f2f2f2!important;background-color: #f3f3f3!important; color: black" class="text-center" ><strong></strong> </td>
                <td style="border-bottom-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black" >
                    <strong style=" " for="etat_id"> ELITE CREDIT :   {{$bancarisation->needs[0]["elite"]}}</strong>

                </td>
                <td style="border-bottom-color:#f5f5f5!important;background-color: #f5f5f5!important; color: black" >
                     <div class="row col-md-12">
                            <div class=" col-md-6">
                           
                            </div>
                            <div class=" col-md-6">
                                <strong for="pret_id"> DISCOUNT</strong>
                                    @if ($bancarisation->needs[0]["pret_id"]  == 2)
                                        <input disabled type="checkbox" id="pret_id" name="pret_id"  checked value="{{$bancarisation->needs[0]["pret_id"]}}">
                                    @else
                                        <input disabled type="checkbox" id="pret_id" name="pret_id" value="{{$bancarisation->needs[0]["pret_id"]}}">
                                    @endif
                            </div>
                        </div>
                 </td>
            </tr>
            <tr>
                <td style="border:none!important; background-color: #f1f1f1!important; color: black"  class="text-center" > <strong></strong> </td>
                <td style="border-color:black!important;background-color: #f5f5f5!important; color: black" class="text-center" ><strong></strong> </td>
                <td style="border-color:black!important;background-color: #F1F1F1!important; color: black" >
                    <strong style=" " for="etat_id"> COUT TOTAL :  {{$bancarisation->needs[0]["cout"]}}</strong>

                </td>
                <td style="border-color:black!important;background-color: #f5f5f5!important; color: black" >
                   
                </td>
            </tr>
        </tbody>
    </table>


<div  style="border-color:#262626" class=" table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 20% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                <strong> BANCARISATION</strong>
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
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                        BANQUE
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                        MONNAIE
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                        TYPE DE COMPTE
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                        DATE OUVERTURE
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                        BALANCE MOYENNE
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                    <strong>{{$bancarisation->bancarisations[0]["banque"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                                   <strong>{{$bancarisation->bancarisations[0]["banque"]}}</strong>
                           
                                   
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank"]}}</strong>
                       
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["type"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["type"]}}</strong>
                       
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte"])->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                               <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte"])->format('d/m/Y')}}</strong>
                       
                               
                            @else

                            @endif


                        @else   
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte"])->format('d/m/Y')}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                 <strong>{{$bancarisation->bancarisations[0]["balance"]}}</strong>
                       
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque1">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                    <strong>{{$bancarisation->bancarisations[0]["banque1"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                                   <strong>{{$bancarisation->bancarisations[0]["banque1"]}}</strong>
                           
                                   
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque1"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank1">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->bancarisations[0]["montantBank1"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                               <strong>{{$bancarisation->bancarisations[0]["montantBank1"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type1">
                        @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->bancarisations[0]["type1"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["type1"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type1"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte1">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte1"])->format('d/m/Y')}}<strong>
                            @elseif($bancarisation->society_id!== Null)
                              <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte1"])->format('d/m/Y')}}<strong>
                            @else

                            @endif


                        @else
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte1"])->format('d/m/Y')}}<strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance1">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{$bancarisation->bancarisations[0]["balance1"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                 <strong>{{$bancarisation->bancarisations[0]["balance1"]}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance1"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque2">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                   <strong>{{$bancarisation->bancarisations[0]["banque2"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                                   <strong>{{$bancarisation->bancarisations[0]["banque2"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque2"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank2">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank2"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                               <strong>{{$bancarisation->bancarisations[0]["montantBank2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank2"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type2">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong>{{$bancarisation->bancarisations[0]["type2"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                               <strong>{{$bancarisation->bancarisations[0]["type2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type2"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte2">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte2"])->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                 <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte2"])->format('d/m/Y')}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte2"])->format('d/m/Y')}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance2">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance2"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance2"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque3">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                     <strong>{{$bancarisation->bancarisations[0]["banque3"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                                     <strong>{{$bancarisation->bancarisations[0]["banque3"]}}</strong>
                                   
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque3"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque3"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank3">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank3"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank3"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank3"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type3">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{$bancarisation->bancarisations[0]["type3"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                            <strong>{{$bancarisation->bancarisations[0]["type3"]}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type3"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte3">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte3"])->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                               <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte3"])->format('d/m/Y')}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte3"])->format('d/m/Y')}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance3">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance3"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance3"]}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance3"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque4">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                     <strong>{{$bancarisation->bancarisations[0]["banque4"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                                     <strong>{{$bancarisation->bancarisations[0]["banque4"]}}</strong>
                           
                                   
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque4"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque4"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank4">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank4"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["montantBank4"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank4"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type4">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{$bancarisation->bancarisations[0]["type4"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                             <strong>{{$bancarisation->bancarisations[0]["type4"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type4"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte4">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                              <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte4"])->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte4"])->format('d/m/Y')}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte4"])->format('d/m/Y')}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance4">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->bancarisations[0]["balance4"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance4"]}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance4"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque5">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                   <strong>{{$bancarisation->bancarisations[0]["banque5"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                               <strong>{{$bancarisation->bancarisations[0]["banque5"]}}</strong>
                           
                                   
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque5"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque5"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank5">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                                    <strong>{{$bancarisation->bancarisations[0]["montantBank5"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                                  <strong>{{$bancarisation->bancarisations[0]["montantBank5"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank5"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type5">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["type5"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["type5"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type5"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte5">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte5"])->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                 <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte5"])->format('d/m/Y')}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte5"])->format('d/m/Y')}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance5">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->bancarisations[0]["balance5"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                              <strong>{{$bancarisation->bancarisations[0]["balance5"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance5"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
       <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="banque6">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id == Null)
                                    Neant
                                @elseif($bancarisation->society_id== Null)
                                Neant
                            @else
                                @if ($bancarisation->entreprise_id !== Null)
                                     <strong>{{$bancarisation->bancarisations[0]["banque6"]}}</strong>
                                @elseif($bancarisation->society_id!== Null)
                                      <strong>{{$bancarisation->bancarisations[0]["banque6"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                            @if ($bancarisation->bancarisations[0]["banque6"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->bancarisations[0]["banque6"]}}</strong>
                            @endif
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="montantBank6">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->bancarisations[0]["montantBank6"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                               <strong>{{$bancarisation->bancarisations[0]["montantBank6"]}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["montantBank6"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #ccc!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="type6">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                             <strong>{{$bancarisation->bancarisations[0]["type6"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                           <strong>{{$bancarisation->bancarisations[0]["type6"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["type6"]}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center"  style="width: 20%;background-color: #F1F1F1!important;border-color:black!important">
                    <strong   style=" text-transform: uppercase!important;" for="date_compte6">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte6"])->format('d/m/Y')}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                 <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte6"])->format('d/m/Y')}}</strong>
                               
                            @else

                            @endif


                        @else
                            <strong>{{\Carbon\Carbon::parse($bancarisation->bancarisations[0]["date_compte6"])->format('d/m/Y')}}</strong>
                        @endif
                    <strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #FFF!important;border-color: black">
                    <strong   style=" text-transform: uppercase!important;" for="balance6">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance6"]}}</strong>
                            @elseif($bancarisation->society_id!== Null)
                                <strong>{{$bancarisation->bancarisations[0]["balance6"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->bancarisations[0]["balance6"]}}</strong>
                        @endif
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>



<div  style="border-color:#262626" class=" table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 30% ;border-right-color:white!important;background-color: #F1F1F1!important; color: black">
                <strong>REFERENCES COMMERCIALES</strong>
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
              <td class="text-center" style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
              <strong   style=" text-transform: uppercase!important;" for="title">
                    NOM
                  <strong>
              </td>
              <td class="text-left"  style="width: 33%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    ADRESSE
                  <strong>
              </td>
              <td class="text-left" style="width: 33%;background-color: #ccc!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                   TELEPHONE
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: #f1f1f1!important">
                  <strong   style=" text-transform: uppercase!important;" for="nameref">
                   Neant
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #F1F1F1!important;border-color:black;color:#f1F1F1!important">
                  <strong   style=" text-transform: uppercase!important;" for="adress_ref">
                       Neant
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #ccc!important;border-color: black; color:#ccc!important">
                  <strong  style=" text-transform: uppercase!important;" for="tel_ref">
                   Neant
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
                    AVOCAT :  @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->referendums[0]["nameref"]}} {{$bancarisation->referendums[0]["prenameref"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->referendums[0]["nameref"]}} {{$bancarisation->referendums[0]["prenameref"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["nameref"]}} {{$bancarisation->referendums[0]["prenameref"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="adress_ref">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                             <strong>{{$bancarisation->referendums[0]["adress_ref"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->referendums[0]["adress_ref"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["adress_ref"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #ccc!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="tel_ref">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                          <strong>{{$bancarisation->referendums[0]["tel_ref"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->referendums[0]["tel_ref"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["tel_ref"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="name1">
                    COMPTABLE :    @if ( $bancarisation->renseigne_id == 2)
                         @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->referendums[0]["name1"]}} {{$bancarisation->referendums[0]["prename1"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->referendums[0]["name1"]}} {{$bancarisation->referendums[0]["prename1"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["name1"]}} {{$bancarisation->referendums[0]["prename1"]}}</strong>
                    @endif 
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;"  for="adress_ref1">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                             <strong>{{$bancarisation->referendums[0]["adress_ref1"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                          <strong>{{$bancarisation->referendums[0]["adress_ref1"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["adress_ref1"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #ccc!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="tel_ref1">
                         @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                             <strong>{{$bancarisation->referendums[0]["tel_ref1"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->referendums[0]["tel_ref1"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["tel_ref1"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="nameref2">
                    AGENT D’ASSURANCE :
                     @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{$bancarisation->referendums[0]["nameref2"]}} {{$bancarisation->referendums[0]["prenameref2"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                                  <strong>{{$bancarisation->referendums[0]["nameref2"]}} {{$bancarisation->referendums[0]["prenameref2"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["nameref2"]}} {{$bancarisation->referendums[0]["prenameref2"]}}</strong>
                    @endif 
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;"  for="adress_ref2">
                    @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->referendums[0]["adress_ref2"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->referendums[0]["adress_ref2"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["adress_ref2"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #ccc!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="tel_ref2">
                    @if ( $bancarisation->renseigne_id == 2)
                         @if ($bancarisation->entreprise_id !== Null)
                           <strong>{{$bancarisation->referendums[0]["tel_ref2"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->referendums[0]["tel_ref2"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["tel_ref2"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="name3">
                    AUTRE :
                    @if ( $bancarisation->renseigne_id == 2)
                         @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->referendums[0]["name3"]}} {{$bancarisation->referendums[0]["prename3"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->referendums[0]["name3"]}} {{$bancarisation->referendums[0]["prename3"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["name3"]}} {{$bancarisation->referendums[0]["prename3"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;"  for="adress_ref3">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                           <strong>{{$bancarisation->referendums[0]["adress_re3f"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->referendums[0]["adress_re3f"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["adress_re3f"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #ccc!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="tel_ref3">
                    @if ( $bancarisation->renseigne_id == 2)
                         @if ($bancarisation->entreprise_id !== Null)
                           <strong>{{$bancarisation->referendums[0]["tel_ref3"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->referendums[0]["tel_ref3"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->referendums[0]["tel_ref3"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
</div>
