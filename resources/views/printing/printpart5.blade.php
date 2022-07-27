


    <table style="border-color:#262626" class="mt-3 mb-4 table">
        <tbody>
            <tr>
                <td style="width: 90% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                <strong>REVENUS ET DEPENSES ANNUELS ACTUELS</strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                       
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>

<div  style="border-color:#262626" class="rim table" class="col-12">

     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="rev-mens"> REVENU MENSUEL :</strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                          <strong> {{$bancarisation->recettes[0]["rev-mens"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                           <strong> {{$bancarisation->recettes[0]["rev-mens"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->recettes[0]["rev-mens"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="vers_hyp"> VERSEMENTS HYPOTHECAIRES / LOYER </strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong> {{$bancarisation->spents[0]["vers_hyp"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->spents[0]["vers_hyp"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["vers_hyp"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="com"> COMMISSIONS</strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->prename}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->prename}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->recettes[0]["com"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="impt_fon">IMPOTS FONCIERS </strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                      @if ($bancarisation->entreprise_id !== Null)
                            <strong>  {{$bancarisation->entreprise->tel}} </strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong>  {{$bancarisation->society->tel}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["impt_fon"]}}</strong>
                    @endif
                </td>
            </tr>  
        </tbody>
     </table>  
     <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <th style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="div_int"> DIVIDENDES ET INTERETS</strong>
                </th>
                <td style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong style=" text-transform: capitalize!important;" for="div_int">
                        @if ( $bancarisation->renseigne_id == 2)
                              @if ($bancarisation->entreprise_id !== Null)
                              <strong> {{$bancarisation->recettes[0]["div_int"]}}</strong><br>
                         @elseif($bancarisation->society_id !== Null)
                             <strong> {{$bancarisation->recettes[0]["div_int"]}}</strong><br>
                        @else

                        @endif


                        @else
                               <strong> {{$bancarisation->recettes[0]["div_int"]}}</strong><br>
                        @endif
                  </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="impt_rev">IMPOT SUR LE REVENU</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="impt_rev">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                               <strong> {{$bancarisation->spents[0]["impt_rev"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong> {{$bancarisation->spents[0]["impt_rev"]}}</strong>
                            @else

                            @endif


                    @else
                            <strong> {{$bancarisation->spents[0]["impt_rev"]}}</strong>
                    @endif
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="rev_loc"> REVENUS DE LOCATION</strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="rev_loc">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                               <strong> {{$bancarisation->recettes[0]["rev_loc"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong> {{$bancarisation->recettes[0]["rev_loc"]}}</strong>
                            @else

                            @endif


                        @else
                                <strong> {{$bancarisation->recettes[0]["rev_loc"]}}</strong>
                        @endif
                    </strong>
                </td>
                <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="prime">PRIMES D’ASSURANCES </strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="prime">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                    <strong> {{$bancarisation->spents[0]["prime"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                  <strong> {{$bancarisation->spents[0]["prime"]}}</strong>
                            @else

                            @endif

                        @else
                           <strong> {{$bancarisation->spents[0]["prime"]}}</strong>
                        @endif
                 </strong>
                </td>
            </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="autre_rev1">AUTRES REVENUS 1) </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_rev1">
                        @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                 <strong> {{$bancarisation->recettes[0]["autre_rev1"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong> {{$bancarisation->recettes[0]["autre_rev1"]}}</strong>
                            @else

                            @endif


                        @else
                                <strong> {{$bancarisation->recettes[0]["autre_rev1"]}}</strong>
                        @endif

                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="carte_credit">CARTES DE CREDIT</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="carte_credit">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                   <strong> {{$bancarisation->spents[0]["carte_credit"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                 <strong> {{$bancarisation->spents[0]["carte_credit"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->spents[0]["carte_credit"]}}</strong>
                        @endif
                    </strong>
                </td>
               </tr>
               <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="autre_rev2">2) </strong></td>
                <td style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_rev2">
                        @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong> {{$bancarisation->recettes[0]["autre_rev2"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                 <strong> {{$bancarisation->recettes[0]["autre_rev2"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->recettes[0]["autre_rev2"]}}</strong>
                        @endif
                    </strong>
                </td>
                 <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="rembourse"> REMBOURSEMENTS PRETS</strong></td>
                <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="rembourse">
                         @if ( $bancarisation->renseigne_id == 2)
                            @if ($bancarisation->entreprise_id !== Null)
                                  <strong> {{$bancarisation->spents[0]["rembourse"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                  <strong> {{$bancarisation->spents[0]["rembourse"]}}</strong>
                            @else

                            @endif

                        @else
                            <strong> {{$bancarisation->spents[0]["rembourse"]}}</strong>
                        @endif
                    </strong>
                </td>
               </tr>
                <tr>
                    <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="tot_part">TOTAL PARTIEL</strong></td>
                    <td style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                        <strong style=" text-transform: capitalize!important;" for="tot_part">
                                @if ( $bancarisation->renseigne_id == 2)
                                    @if ($bancarisation->entreprise_id !== Null)
                                       <strong> {{$bancarisation->recettes[0]["tot_part"]}}</strong>
                                    @elseif($bancarisation->society_id !== Null)
                                        <strong> {{$bancarisation->recettes[0]["tot_part"]}}</strong>
                                    @else

                                    @endif

                                @else
                                    <strong> {{$bancarisation->recettes[0]["tot_part"]}}</strong>
                                @endif
                        </strong>
                    </td>
                    <td style="width: 18% ;border-color:black!important;background-color: #F1F1F1!important; color: black">  <strong style=" text-transform: capitalize!important;" for="pension"> PENSIONS ALIMENTAIRES</strong></td>
                     <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="pension">
                            @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                                                  <strong> {{$bancarisation->spents[0]["pension"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                                                  <strong> {{$bancarisation->spents[0]["pension"]}}</strong>
                                @else

                                @endif

                            @else
                                <strong> {{$bancarisation->spents[0]["pension"]}}</strong>
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
                    <strong style=" text-transform: capitalize!important;" for=""></strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                    
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_dep"> AUTRES DEPENSES 1)</strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                          <strong> {{$bancarisation->spents[0]["autre_dep"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                          <strong> {{$bancarisation->spents[0]["autre_dep"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["autre_dep"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0  mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="rev_mens_conj">REVENU MENSUEL DU CONJOINT</strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                              <strong> {{$bancarisation->recettes[0]["rev_mens_conj"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                             <strong> {{$bancarisation->recettes[0]["rev_mens_conj"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->recettes[0]["rev_mens_conj"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_dep1"> 2)</strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                              <strong> {{$bancarisation->spents[0]["autre_dep1"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                             <strong> {{$bancarisation->spents[0]["autre_dep1"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["autre_dep1"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class="mt-0  mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_rev3"> AUTRES REVENUS 1)</strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->recettes[0]["autre_rev3"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->recettes[0]["autre_rev3"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->recettes[0]["autre_rev3"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_dep2">3) </strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                     @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong> {{$bancarisation->spents[0]["autre_dep2"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->spents[0]["autre_dep2"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["autre_dep2"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
      <table style="border-color:#262626" class=" mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_rev4"> 2)</strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                              <strong> {{$bancarisation->recettes[0]["autre_rev4"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                              <strong> {{$bancarisation->recettes[0]["autre_rev4"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->recettes[0]["autre_rev4"]}}</strong>
                    @endif
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="autre_dep3">4) </strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                     @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->spents[0]["autre_dep3"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                            <strong> {{$bancarisation->spents[0]["autre_dep3"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["autre_dep3"]}}</strong>
                    @endif
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class=" mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: #F1F1F1">
                    <strong style=" text-transform: capitalize!important;" for="element"> AUTRES </strong>
                </td>
                <td  style="width: 35% ;background-color: #F1F1F1!important;border-color:black!important">
                   
                </td>
                <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for=""></strong>
                </td>
                <td style="width: 22% ;background-color: #F1F1F1!important;border-color: black">
                   
                </td>
            </tr>
        </tbody>
     </table>
     <table style="border-color:#262626" class=" mt-0 mb-0 table">
            <tr>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                     <strong style=" text-transform: capitalize!important;" for="element1">REVENUS MENSUELS TOTAUX</strong>
                </td>
                 <td style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                       @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->recettes[0]["tot_rev"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                              <strong> {{$bancarisation->recettes[0]["tot_rev"]}}</strong>
                        @else

                        @endif

  
                    @else
                        <strong> {{$bancarisation->recettes[0]["tot_rev"]}}</strong>
                    @endif
                </td>
                  <td style="width: 18% ;background-color: #F1F1F1!important;border-color: black">
                    <strong style=" text-transform: capitalize!important;" for="tot_dep">DEPENSES ANNUELLES TOTALES </strong>
                </td>
                  <td style="width: 22% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                       @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong> {{$bancarisation->spents[0]["tot_dep"]}}</strong>
                         @elseif($bancarisation->society_id !== Null)
                          <strong> {{$bancarisation->spents[0]["tot_dep"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong> {{$bancarisation->spents[0]["tot_dep"]}}</strong>
                    @endif
                </td>
            </tr>
        
        </table>
</div>

<table style="border-color:black; background-color:#FFF;" class="mt-5 table">
        <thead>
            <th style="border:none!important;background-color: #E5E5E5!important; color: black" colspan=""> <strong>RENSEIGNEMENTS GENERAUX</strong> </th>
            <th style="border:none!important; background-color: #E5E5E5!important; color: black" class="text-center"><strong></strong> </th>
            <th style="border:none!important;; background-color: #f1f1f1!important; color: black" class="text-center">DETAIL </th>
        </thead>
        <tbody> 
            <tr>
                <td style="width: 45% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong>AVEZ VOUS FAIT L’OBJET D’UNE REPRISE DE POSSESSION ?</strong>
                </td>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="reprise"> Oui</strong>
                                    @if ( $bancarisation->details[0]["reprise"] == "Ok")
                                    <input disabled type="checkbox" id="reprise" name="reprise" checked value="{{$bancarisation->details[0]["reprise"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="reprise" name="reprise" value="{{$bancarisation->details[0]["reprise"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="reprise"> Non</strong>
                                    @if ($bancarisation->details[0]["reprise"] == "Disok")
                                        <input disabled type="checkbox" id="reprise" name="reprise"  checked value="{{$bancarisation->details[0]["reprise"] }}">
                                    @else
                                        <input disabled type="checkbox" id="reprise" name="reprise" value="{{$bancarisation->details[0]["reprise"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                        <strong>{{ $bancarisation->details[0]["repriseD"]  }}</strong>
                </td>
   
            </tr>
            <tr>
                <td style="width: 45% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong>ETES VOUS PARTIE D’UNE RECLAMATION OU POURSUITE ? </strong>
                </td>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="reclamation"> Oui</strong>
                                    @if ( $bancarisation->details[0]["reclamation"] == "Ok")
                                    <input disabled type="checkbox" id="reclamation" name="reclamation" checked value="{{$bancarisation->details[0]["reclamation"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="reclamation" name="reclamation" value="{{$bancarisation->details[0]["reclamation"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="reclamation"> Non</strong>
                                    @if ($bancarisation->details[0]["reclamation"] == "Disok")
                                        <input disabled type="checkbox" id="reclamation" name="reclamation"  checked value="{{$bancarisation->details[0]["reclamation"] }}">
                                    @else
                                        <input disabled type="checkbox" id="reclamation" name="reclamation" value="{{$bancarisation->details[0]["reclamation"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                            <strong>{{ $bancarisation->details[0]["reclamationD"]  }}</strong>
                </td>
            </tr>
            <tr>
               <td style="width: 45% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong>AVEZ VOUS FAIT FAILLITE ?</strong>
                </td>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="faillite"> Oui</strong>
                                    @if ( $bancarisation->details[0]["faillite"] == "Ok")
                                    <input disabled type="checkbox" id="faillite" name="faillite" checked value="{{$bancarisation->details[0]["faillite"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="faillite" name="faillite" value="{{$bancarisation->details[0]["faillite"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="faillite"> Non</strong>
                                    @if ($bancarisation->details[0]["faillite"] == "Disok")
                                        <input disabled type="checkbox" id="faillite" name="faillite"  checked value="{{$bancarisation->details[0]["faillite"] }}">
                                    @else
                                        <input disabled type="checkbox" id="faillite" name="faillite" value="{{$bancarisation->details[0]["faillite"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                            <strong>{{ $bancarisation->details[0]["failliteD"]  }}</strong>
                </td>
            </tr>
            <tr>
                     <td style="width: 45% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong>DEVEZ-VOUS DES IMPOTS ECHUS ? </strong>
                </td>
                <td style="width: 25% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="echus"> Oui</strong>
                                    @if ( $bancarisation->details[0]["echus"] == "Ok")
                                    <input disabled type="checkbox" id="echus" name="echus" checked value="{{$bancarisation->details[0]["echus"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="echus" name="echus" value="{{$bancarisation->details[0]["echus"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="echus"> Non</strong>
                                    @if ($bancarisation->details[0]["echus"] == "Disok")
                                        <input disabled type="checkbox" id="echus" name="echus"  checked value="{{$bancarisation->details[0]["echus"] }}">
                                    @else
                                        <input disabled type="checkbox" id="echus" name="echus" value="{{$bancarisation->details[0]["echus"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                              <strong>{{ $bancarisation->details[0]["echusD"]  }}</strong>
                </td>
            </tr>
        </tbody>
</table>


<div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 70% ;border-right-color:white!important;background-color: #F1F1F1!important; color: black">
                <strong>ANNEXE A : TITRES NEGOCIABLES, ACTIONS ET OBLIGATIONS</strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td class="text-center" style="width: 30% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    NOMBRE DE PARTS/ACTIONS 
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    DESCRIPTION
                  <strong>
              </td>
               <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                   
                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                   VALEUR MARCHANDE
                  <strong>
              </td>
          </tr>
            <tr>
              <td class="text-center" style="width: 30% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="nbr_part">

                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                   <strong>{{$bancarisation->titres[0]["nbr_part"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->titres[0]["nbr_part"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->titres[0]["nbr_part"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->titres[0]["nbr_part"]}}</strong>
                            @endif
                        @endif


                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="description">
                    @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->titres[0]["description"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                             <strong>{{$bancarisation->titres[0]["description"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->titres[0]["description"]}}</strong>
                        @endif
                  <strong>
              </td>
               <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">

                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="valeurM">
                   @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->titres[0]["valeurM"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                            <strong>{{$bancarisation->titres[0]["valeurM"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->titres[0]["valeurM"]}}</strong>
                        @endif
                  <strong>
              </td>
          </tr>
          <tr>
              <td class="text-center" style="width: 30% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="nbr_part1">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                   <strong>{{$bancarisation->titres[0]["nbr_part1"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->titres[0]["nbr_part1"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->titres[0]["nbr_part1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->titres[0]["nbr_part1"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="description1">
                    @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                 <strong>{{$bancarisation->titres[0]["description1"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                              <strong>{{$bancarisation->titres[0]["description1"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->titres[0]["description1"]}}</strong>
                        @endif
                  <strong>
              </td>
               <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="">

                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="valeurM1">
                   @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                              <strong>{{$bancarisation->titres[0]["valeurM1"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                            <strong>{{$bancarisation->titres[0]["valeurM1"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->titres[0]["valeurM1"]}}</strong>
                        @endif
                  <strong>
              </td>
          </tr>
          <tr>
              <td class="text-center" style="width: 30% ;border-right-color:#F1F1F1!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="nbr_part2">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                   <strong>{{$bancarisation->titres[0]["nbr_part2"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->titres[0]["nbr_part2"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->titres[0]["nbr_part2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->titres[0]["nbr_part2"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="description2">
                    @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->titres[0]["description2"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                             <strong>{{$bancarisation->titres[0]["description2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->titres[0]["description2"]}}</strong>
                        @endif
                  <strong>
              </td>
               <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="">

                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="valeurM2">
                   @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                   <strong>{{$bancarisation->titres[0]["valeurM2"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->titres[0]["valeurM2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->titres[0]["valeurM2"]}}</strong>
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
                <td style="width: 70% ;border-right-color:white!important;background-color: #F1F1F1!important; color: black">
                <strong>ANNEXE B: ASSURANCE-VIE PERSONNELLE ET COLLECTIVE</strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td class="text-center" style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    COMPAGNIE
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    BENEFICIAIRE
                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                   VALEUR NOMINALE
                  <strong>
              </td>
              {{-- <td class="text-center" style="width: 5%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                   
                  <strong>
              </td> --}}
          </tr>
          <tr>
               <td class="text-center" style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="compagnie">
                         @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->cannexes[0]["compagnie"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->cannexes[0]["compagnie"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->assurances[0]["compagnie"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["compagnie"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="benef">
                      @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->assurances[0]["benef"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                             <strong>{{$bancarisation->assurances[0]["benef"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->assurances[0]["benef"]}}</strong>
                        @endif
                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="nominal">
                     @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                     <strong>{{$bancarisation->assurances[0]["nominal"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                 <strong>{{$bancarisation->assurances[0]["nominal"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->assurances[0]["nominal"]}}</strong>
                        @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">

                  <strong>
              </td>
          </tr>
          <tr>
  <td class="text-center" style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="compagnie1">
                            @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                              @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->cannexes[0]["compagnie1"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->cannexes[0]["compagnie1"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->assurances[0]["compagnie1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["compagnie1"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="benef1">
                      @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                               <strong>{{$bancarisation->assurances[0]["benef1"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                             <strong>{{$bancarisation->assurances[0]["benef1"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->assurances[0]["benef1"]}}</strong>
                        @endif
                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="nominal1">
                     @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                     <strong>{{$bancarisation->assurances[0]["nominal1"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                  <strong>{{$bancarisation->assurances[0]["nominal1"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->assurances[0]["nominal1"]}}</strong>
                        @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">

                  <strong>
              </td>
          </tr>
          <tr>
  <td class="text-center" style="width: 35% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="compagnie2">
                           @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                              @if ($bancarisation->entreprise_id !== Null)
                                <strong>{{$bancarisation->cannexes[0]["compagnie2"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->cannexes[0]["compagnie2"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->assurances[0]["compagnie2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["compagnie2"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 30%;background-color: #F1F1F1!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="benef2">
                      @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                  <strong>{{$bancarisation->assurances[0]["benef2"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                                <strong>{{$bancarisation->assurances[0]["benef2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->assurances[0]["benef2"]}}</strong>
                        @endif
                  <strong>
              </td>
              <td class="text-left" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="nominal2">
                     @if ( $bancarisation->renseigne_id == 2)
                             @if ($bancarisation->entreprise_id !== Null)
                                  <strong>{{$bancarisation->assurances[0]["nominal2"]}}</strong>
                            @elseif($bancarisation->society_id !== Null)
                               <strong>{{$bancarisation->assurances[0]["nominal2"]}}</strong>
                            @else

                            @endif


                        @else
                            <strong>{{$bancarisation->assurances[0]["nominal2"]}}</strong>
                        @endif
                  <strong>
              </td>
             <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">

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
                <td style="width: 70% ;border-right-color:white!important;background-color: #F1F1F1!important; color: black">
                <strong>ANNEXE C : AUTRE RELATION DE CREDIT</strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong>NOM DU PRETEUR</strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      MONNAIE
                    <strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #ccc!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                    OBJET DU PRET
                  </strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      MONTANT A L’ORIGINE
                    <strong>
                </td>
                <td style="width: 10% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                    SOLDE DU
                  </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                        TAUX
                    <strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                        ECHEANCE
                    <strong>
                </td>
            </tr>
            <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong  style=" text-transform: uppercase!important;" for="nom_preteur">
                        @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->cannexes[0]["nom_preteur"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["nom_preteur"]}}</strong>
                            @endif
                        @endif
                   </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="monnaie">
                      {{$bancarisation->cannexes[0]["monnaie"]}}
                    <strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #ccc!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="objet_pret">
                    {{$bancarisation->cannexes[0]["objet_pret"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="montant_origine">
                      {{$bancarisation->cannexes[0]["montant_origine"]}}
                    <strong>
                </td>
                <td style="width: 10% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="solde">
                    {{$bancarisation->cannexes[0]["solde"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="tauxR">
                        {{$bancarisation->cannexes[0]["tauxR"]}}
                    <strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="echeance">
                        {{$bancarisation->cannexes[0]["echeance"]}}
                    <strong>
                </td>
            </tr>
             <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong  style=" text-transform: uppercase!important;" for="nom_preteur1">
                          @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur1"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur1"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->cannexes[0]["nom_preteur1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["nom_preteur1"]}}</strong>
                            @endif
                        @endif
                   </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="monnaie1">
                      {{$bancarisation->cannexes[0]["monnaie1"]}}
                    <strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #ccc!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="objet_pret1">
                    {{$bancarisation->cannexes[0]["objet_pret1"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="montant_origine1">
                      {{$bancarisation->cannexes[0]["montant_origine1"]}}
                    <strong>
                </td>
                <td style="width: 10% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="solde1">
                    {{$bancarisation->cannexes[0]["solde1"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="tauxR1">
                        {{$bancarisation->cannexes[0]["tauxR1"]}}
                    <strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="echeance1">
                        {{$bancarisation->cannexes[0]["echeance1"]}}
                    <strong>
                </td>
            </tr>
              <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong  style=" text-transform: uppercase!important;" for="nom_preteur2">
                          @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                                @if ($bancarisation->entreprise_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur2"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur2"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->cannexes[0]["nom_preteur2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["nom_preteur2"]}}</strong>
                            @endif
                        @endif
                   </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="monnaie2">
                      {{$bancarisation->cannexes[0]["monnaie2"]}}
                    <strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #ccc!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="objet_pret2">
                    {{$bancarisation->cannexes[0]["objet_pret2"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="montant_origine2">
                      {{$bancarisation->cannexes[0]["montant_origine2"]}}
                    <strong>
                </td>
                <td style="width: 10% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="solde2">
                    {{$bancarisation->cannexes[0]["solde2"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="tauxR2">
                        {{$bancarisation->cannexes[0]["tauxR2"]}}
                    <strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="echeance2">
                        {{$bancarisation->cannexes[0]["echeance2"]}}
                    <strong>
                </td>
            </tr>
             <tr>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong  style=" text-transform: uppercase!important;" for="nom_preteur3">
                         @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                               @if ($bancarisation->entreprise_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur3"]}}</strong>
                                @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->cannexes[0]["nom_preteur3"]}}</strong>
                                @else

                                @endif
                            @endif
                        @else
                             @if ($bancarisation->cannexes[0]["nom_preteur3"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->cannexes[0]["nom_preteur3"]}}</strong>
                            @endif
                        @endif
                   </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="monnaie3">
                      {{$bancarisation->cannexes[0]["monnaie3"]}}
                    <strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #ccc!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="objet_pret3">
                    {{$bancarisation->cannexes[0]["objet_pret3"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 20%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="montant_origine3">
                      {{$bancarisation->cannexes[0]["montant_origine3"]}}
                    <strong>
                </td>
                <td style="width: 10% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong  style=" text-transform: uppercase!important;" for="solde3">
                    {{$bancarisation->cannexes[0]["solde3"]}}
                  </strong>
                </td>
                <td class="text-center" style="width: 10%;background-color: #F1F1F1!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="tauxR3">
                        {{$bancarisation->cannexes[0]["tauxR3"]}}
                    <strong>
                </td>
                <td class="text-center" style="width: 30%;background-color: #FFF!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="echeance3">
                        {{$bancarisation->cannexes[0]["echeance3"]}}
                    <strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>