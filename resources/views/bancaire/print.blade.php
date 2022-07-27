@extends('layouts.master')
@section('css')
        <!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
        <style>
            body {
  -webkit-print-color-adjust: exact !important;
}
            @media print{

                #hidden{
                    display : none;
                }

            .dim table tbody tr td {
        padding: 4px!important;
      }

      .rim table tbody tr td {
        padding: 3px!important;
      }

                /* tr #renseigne {
    background:rgba(31, 3, 3, 0.5)!important;
} */

                .total .espace{height: 48%;}
    .container-fluid .content {
                    text-align: center;
                    position:absolute;
                    /* background:rgba(0,0,0,0.5); */
                    top:0;
                    left:0;
                    right:0;
                    bottom:0;

                }
           /* .impression_visible{display:block} */

            }




        .table, td, th {
  border: 1px solid #262626 !important;
}

hr{
        height: 1px;
        border-top: 1px dotted #ccc;
      }

      .ligne_horizontal {
display: flex;
flex-direction: row;
}

.ligne_horizontal:before,
.ligne_horizontal:after {
content: "";
flex: 1 1;
border-bottom: 2px dotted #ccc;
margin: auto;
}


        </style>
@endsection
@section('page-header')
                        <!--Page header-->
                        <div id="hidden" class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">Formulaire </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Décaissement</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Décaissement</a></li>
                                </ol>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a>
                                </div>
                            </div>
                        </div>
                        <!--End Page header-->
@endsection
@section('content')

@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

<div class=" container-fluid">
    <div class="div  position-ref">
            <div class=" content p-5 row">
                <div class="col-12 total mb-6" style="border-color:#262626;background:#fff;">
                    <h1 class="text-black text-center">FORMULAIRE DE DEMANDE DE CREDIT PARTICULIER</h1>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 m-2">
                            <img src="{{asset('assets/images/brand/ogo.png')}}" alt="logo">
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row espace">
                          @include('printing.printpart')
                    </div>
                </div>
                <div class="col-12 total mt-5 mb-6" style="border-color:#262626;background:#fff;">
                    <h1 class="text-black text-center">FORMULAIRE DE DEMANDE DE CREDIT PARTICULIER</h1>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 m-2">
                            {{-- <img src="{{asset('assets/images/brand/ogo.png')}}" alt="logo"> --}}
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row espace">
                        @include('printing.printpart1')
                    </div>
                </div>
                <div class="col-12 total mt-5 mb-5" style="border-color:#262626;background:#fff;">
                    <h1 class="text-black mt-5 text-center">FORMULAIRE DE DEMANDE DE CREDIT PARTICULIER</h1>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 m-2">
                            {{-- <img src="{{asset('assets/images/brand/ogo.png')}}" alt="logo"> --}}
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row espace">
                        @include('printing.printpart2')
                        <p class=" text-left mt-2">
                                        LES CHIFFRES ET RENSEIGNEMENTS DANS CETTE DECLARATION SONT LE REFLET SINCERE ET FIDELE DE MA (NOTRE) SITUATION FINANCIERE ET SOCIALE A LA
                            DATE CI-DESSOUS. JE (NOUS) RECONNAIS (SONS) EXPRESSEMENT QUE SUR LA BASE DE LA VERACITE DE CES INFORMATIONS, <i style="font-size: 15px">ELITE CREDIT </i> A RECU UNE
                            DEMANDE DE FINANCEMENT QU’ELLE POURRAIT ETRE PORTEE A CONSENTIR POUR MON (NOTRE) COMPTE OU SOUS MA (NOTRE) GARANTIE, ET QUE TOUTE
                            ERREUR OU OMISSION, VOLONTAIRE OU NON, AUTORISE ELITE CREDIT A RECLAMER A N’IMPORTE QUEL MOMENT LE REMBOURSEMENT IMMEDIAT DE TOUT
                            MONTANT QUI AURAIT PU ETRE ACCORDE SOUS LA FOI DES CHIFFRES ET RENSEIGNEMENTS CI-DESSUS.
                        </p>
                    </div>
                </div>
                <div  style="" class="rim col-12" >
                    <table style="border-top-color:#262626!important" class="mt-5 mb-0 table">
                        <tbody>
                            <tr>
                                <td class="text-center"  style="border-left-color:#fff!important; border-bottom-color:#fff!important;width: 35%;background-color: #FFF!important;border-right-color:#fff!important">
                                    SIGNATURE DE L’(DES) APPLIQUANT(S)
                                </td>
                                <td class="text-center"  style="border-color:#fff!important;width: 5%;background-color: #FFF!important;">

                                </td>
                                <td class="text-center" style="border-bottom-color:#fff!important;width: 20%;background-color: #FFF!important;border-right-color:#fff!important">
                                    DATE
                                </td>
                                <td class="text-center"  style="border-color:#fff!important;width: 20%;background-color: #FFF!important;">

                                </td>
                                <td class="text-center" style="border-bottom-color:#fff!important;width: 20%;background-color: #FFF!important;border-right-color:#fff!important">
                                    CO-SIGNATAIRE(S)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>












                </div><!-- end app-content-->
            </div>
@endsection
@section('js')

<script language="javascript" type="text/javascript">

    function PrintMeSubmitMe()
    {
 let print =   window.print();

//  console.log(print);
//  if(!print){
    SubmitMe();
//  }



    }


    function SubmitMe()
    {
        document.MyForm.submit();


    }
    </script>
<!--INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection

