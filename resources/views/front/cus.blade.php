@extends('layouts.master')
@section('content')
<!-- <div class="customization-section">
    <div class="progressbar-reports">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <div class="progress-reports-bar">
                        <ul id="progressbar">
                            <li class="progressType1 active" data="0">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="PICK STITCHING">
                                    <span class="bar-check active" id="bar1"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Jacket Type</span>
                                </a>
                            </li>
                            <li class="progressType2  checkC" data="1">
                                <a href="#"><span class="bar2 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Lapels</span></a>
                            </li>
                            <li class="progressType2  checkC " data="3">
                                <a href="#"><span class="bar3 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Fittings</span></a>
                            </li>
                            <li class="progressType3  checkC" data="4">
                                <a href="#"><span class="bar4 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Breast Pockets</span></a>
                            </li>
                            <li class="progressType4  checkC" data="5">
                                <a href="#"><span class="bar5 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Pockets</span></a>
                            </li>
                            <li class="progressType5 checkC" data="6">
                                <a href="#"><span class="bar6 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Sleeve Buttons</span></a>
                            </li>                           
                            <li class="progressType6 checkC" data="7">
                                <a href="#"><span class="bar7 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Vents</span></a>
                            </li>                            
                            <li class="progressType7 checkC" data="8">
                                <a href="#"><span class="bar8 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Pant Fit</span></a>
                            </li>                            
                            <li class="progressType8 checkC" data="9">
                                <a href="#"><span class="bar9 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Pleats</span></a>
                            </li>                            
                            <li class="progressType9 checkC" data="10">
                                <a href="#"><span class="bar10 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Pant Fastening</span></a>
                            </li>                            
                            <li class="progressType10 checkC" data="11">
                                <a href="#"><span class="bar11 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Side Pockets</span></a>
                            </li>                            
                            <li class="progressType11 checkC" data="12">
                                <a href="#"><span class="bar12 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Back Pockets</span></a>
                            </li>                            
                            <li class="progressType12 checkC" data="13">
                                <a href="#"><span class="bar13 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Cuffs</span></a>
                            </li>                            
                            <li class="progressType13 checkC" data="14">
                                <a href="#"><span class="bar14 bar-check"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>Final Selection</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

<div id="app">
    <customization></customization>
</div>

<script src="{{ asset('js/app.js') }} "></script>
@endsection