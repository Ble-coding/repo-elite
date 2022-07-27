

<table style="border-color:black; background-color:#FFF;" class="mt-5 table">
        <thead>
            <th style="border:none!important;background-color: #f1f1f1!important; color: black" colspan=""> <strong>Garanties proposées</strong> </th>
            <th style="border:none!important; background-color: #f1f1f1!important; color: black" class="text-center"><strong>Montant</strong> </th>
            <th style="border-right-color:black!important; background-color: #f1f1f1!important; color: black" class="text-center">En place </th>
             <th style="border:none!important; background-color: #E5E5E5!important; color: black" class="text-center">Expiration </th>
        </thead>
        <tbody> 
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong>{{ $bancarisation->propos[0]["garanties"]  }}</strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                        <strong>{{ $bancarisation->propos[0]["amount"]  }}</strong>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="place"> Oui</strong>
                                    @if ( $bancarisation->propos[0]["place"] == "Oui")
                                    <input disabled type="checkbox" id="place" name="place" checked value="{{$bancarisation->propos[0]["place"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="place" name="place" value="{{$bancarisation->propos[0]["place"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="place"> Non</strong>
                                    @if ($bancarisation->propos[0]["place"] == "Non")
                                        <input disabled type="checkbox" id="place" name="place"  checked value="{{$bancarisation->propos[0]["place"] }}">
                                    @else
                                        <input disabled type="checkbox" id="place" name="place" value="{{$bancarisation->propos[0]["place"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                         <strong> {{\Carbon\Carbon::parse($bancarisation->propos[0]["dateE"] )->format('d/m/Y')}}</strong>
                </td>
   
            </tr>
            <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong>{{ $bancarisation->propos[0]["garanties1"]  }}</strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                        <strong>{{ $bancarisation->propos[0]["amount1"]  }}</strong>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="place1"> Oui</strong>
                                    @if ( $bancarisation->propos[0]["place1"] == "Oui")
                                    <input disabled type="checkbox" id="place1" name="place1" checked value="{{$bancarisation->propos[0]["place1"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="place1" name="place1" value="{{$bancarisation->propos[0]["place1"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="place1"> Non</strong>
                                    @if ($bancarisation->propos[0]["place1"] == "Non")
                                        <input disabled type="checkbox" id="place1" name="place1"  checked value="{{$bancarisation->propos[0]["place1"] }}">
                                    @else
                                        <input disabled type="checkbox" id="place1" name="place1" value="{{$bancarisation->propos[0]["place1"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                         <strong> {{\Carbon\Carbon::parse($bancarisation->propos[0]["dateE1"] )->format('d/m/Y')}}</strong>
                </td>
   
            </tr>
              <tr>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                   <strong>{{ $bancarisation->propos[0]["garanties1"]  }}</strong>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                        <strong>{{ $bancarisation->propos[0]["amount1"]  }}</strong>
                </td>
                <td style="width: 30% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <div class="row col-md-12">
                            <div class=" col-md-6">
                            <strong for="place2"> Oui</strong>
                                    @if ( $bancarisation->propos[0]["place2"] == "Oui")
                                    <input disabled type="checkbox" id="place2" name="place1" checked value="{{$bancarisation->propos[0]["place2"]}}"> <br>
                                    @else
                                    <input disabled type="checkbox" id="place2" name="place2" value="{{$bancarisation->propos[0]["place2"]}}"><br>
                                    @endif
                            </div>
                            <div class=" col-md-6">
                                <strong  for="place2"> Non</strong>
                                    @if ($bancarisation->propos[0]["place2"] == "Non")
                                        <input disabled type="checkbox" id="place2" name="place2"  checked value="{{$bancarisation->propos[0]["place2"] }}">
                                    @else
                                        <input disabled type="checkbox" id="place2" name="place2" value="{{$bancarisation->propos[0]["place2"] }}">
                                    @endif
                            </div>
                        </div>
                </td>
                <td style="width: 20% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                         <strong> {{\Carbon\Carbon::parse($bancarisation->propos[0]["dateE2"] )->format('d/m/Y')}}</strong>
                </td>
   
            </tr>
        </tbody>
</table>  


 <div  style="border-color:#262626" class="rim table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 70% ;border-right-color:white!important;background-color: #F1F1F1!important; color: black">
                <strong>ASSURANCE </strong>(veuillez préciser le type et le montant de vos protections actuelles)
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
              <td class="text-center" style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                    TYPE
              </td>
              <td class="text-left"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                       MONTANT
              </td>
              <td class="text-left" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="title">
                  COMPAGNIE D’ASSURANCES
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="assu">
                                <strong>{{$bancarisation->protections[0]["assu"]}}</strong>
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="montant_pro">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->protections[0]["montant_pro"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->protections[0]["montant_pro"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["montant_pro"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="typing">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                             <strong>{{$bancarisation->protections[0]["typing"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->protections[0]["typing"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["typing"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="assu1">
                      @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                                @if ($bancarisation->entreprise_id !== Null)
                                        <strong>{{$bancarisation->protections[0]["assu1"]}}</strong>
                                    @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->protections[0]["assu1"]}}</strong>
                                    @else

                                    @endif
                            @endif
                        @else
                             @if ($bancarisation->protections[0]["assu1"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->protections[0]["assu1"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="montant_pro1">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->protections[0]["montant_pro1"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->protections[0]["montant_pro1"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["montant_pro1"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="typing1">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong>{{$bancarisation->protections[0]["typing1"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->protections[0]["typing1"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["typing1"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="assu2">
                      @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                                  @if ($bancarisation->entreprise_id !== Null)
                                        <strong>{{$bancarisation->protections[0]["assu2"]}}</strong>
                                    @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->protections[0]["assu2"]}}</strong>
                                    @else

                                    @endif
                            @endif
                        @else
                             @if ($bancarisation->protections[0]["assu2"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->protections[0]["assu2"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="montant_pro2">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->protections[0]["montant_pro2"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->protections[0]["montant_pro2"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["montant_pro2"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="typing2">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                          <strong>{{$bancarisation->protections[0]["typing2"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->protections[0]["typing2"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["typing2"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="assu3">
                      @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                                  @if ($bancarisation->entreprise_id !== Null)
                                        <strong>{{$bancarisation->protections[0]["assu3"]}}</strong>
                                    @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->protections[0]["assu3"]}}</strong>
                                    @else

                                    @endif
                            @endif
                        @else
                             @if ($bancarisation->protections[0]["assu3"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->protections[0]["assu3"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="montant_pro3">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->protections[0]["montant_pro3"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->protections[0]["montant_pro3"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["montant_pro3"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="typing3">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                           <strong>{{$bancarisation->protections[0]["typing3"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->protections[0]["typing3"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["typing3"]}}</strong>
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
                  <strong   style=" text-transform: uppercase!important;" for="assu4">
                      @if ( $bancarisation->renseigne_id == 2)
                                @if ($bancarisation->entreprise_id !== Null)
                                    Neant
                                @elseif($bancarisation->society_id !== Null)
                                   Neant
                                @else
                                  @if ($bancarisation->entreprise_id !== Null)
                                        <strong>{{$bancarisation->protections[0]["assu4"]}}</strong>
                                    @elseif($bancarisation->society_id !== Null)
                                    <strong>{{$bancarisation->protections[0]["assu4"]}}</strong>
                                    @else

                                    @endif
                            @endif
                        @else
                             @if ($bancarisation->protections[0]["assu4"] == Null)
                                    Neant
                            @else
                                <strong>{{$bancarisation->protections[0]["assu4"]}}</strong>
                            @endif
                        @endif
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="montant_pro4">
                             @if ( $bancarisation->renseigne_id == 2)
                       @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->protections[0]["montant_pro4"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                        <strong>{{$bancarisation->protections[0]["montant_pro4"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["montant_pro4"]}}</strong>
                    @endif
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="typing4">
                    @if ( $bancarisation->renseigne_id == 2)
                        @if ($bancarisation->entreprise_id !== Null)
                            <strong>{{$bancarisation->protections[0]["typing4"]}}</strong>
                        @elseif($bancarisation->society_id !== Null)
                         <strong>{{$bancarisation->protections[0]["typing4"]}}</strong>
                        @else

                        @endif


                    @else
                        <strong>{{$bancarisation->protections[0]["typing4"]}}</strong>
                    @endif
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>

</div>



<div  style="border-color:#262626" class="table" class="col-12">
    <table style="border-color:#262626" class="mt-0 mb-0 table">
        <tbody>
            <tr>
                <td style="width: 33% ;border-right-color:black!important;background-color: #F1F1F1!important; color: black">
                <strong>REFERENCES PERSONNELLES</strong>
                </td>
                <td class="text-center" style="width: 33%;background-color: #CCC!important;border-color: black">
                    <strong  style=" text-transform: uppercase!important;" for="title">
                      
                    <strong>
                </td>
                 <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
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
                    
                  <strong>
              </td>
              <td class="text-left"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="title">
                    REFERENCE 1
                  <strong>
              </td>
              <td class="text-left" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
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
                  <strong   style=" text-transform: uppercase!important;" for="name_ref">
                    NOM ET PRENOM :
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;" for="name_ref">
                         {{$bancarisation->personnels[0]["name_ref"]}} {{$bancarisation->personnels[0]["prename_ref"]}}
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="name_ref1">
                   {{$bancarisation->personnels[0]["name_ref1"]}} {{$bancarisation->personnels[0]["prename_ref1"]}}
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="adressRef">
                    ADRESSE 
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;"  for="adressRef">
           {{$bancarisation->personnels[0]["adressRef"]}}   
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="adressRef1">
 {{$bancarisation->personnels[0]["adressRef1"]}}
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>
   <table style="border-color:#262626" class="mt-0 mb-0 table">
      <tbody>
          <tr>
              <td style="width: 33% ;border-color:black!important;background-color: #F1F1F1!important; color: black">
                  <strong   style=" text-transform: uppercase!important;" for="telRef">
                    TELEPHONE (S)
                  <strong>
              </td>
              <td class="text-center"  style="width: 33%;background-color: #ccc!important;border-color:black!important">
                  <strong   style=" text-transform: uppercase!important;"  for="telRef">
                     {{$bancarisation->personnels[0]["telRef"]}}
                  <strong>
              </td>
              <td class="text-center" style="width: 33%;background-color: #F1F1F1!important;border-color: black">
                  <strong  style=" text-transform: uppercase!important;" for="telRef">
                  {{$bancarisation->personnels[0]["telRef1"]}}
                  <strong>
              </td>
          </tr>
      </tbody>
   </table>

</div>