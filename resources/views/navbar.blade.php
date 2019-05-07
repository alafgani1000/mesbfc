<div class="container">
        <nav class="navbar navbar-default">


            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logon</a>
            </div>


            <!--ppc -->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a id="ppc" href="#" class="dropdown-toggle" data-toggle="dropdown">PPC </a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Blast Furnace</li>
                                    <li><a href="{{url('bf_compile_prod')}}">Compile Production</a></li>
                                    <li><a href="#">Distribute Production</a></li>
                                    <br>
                                    <li><a href="{{url('bf_compile_blend')}}">Compile Blending</a></li>
                                    <li><a href="#">Compile Material</a></li>
                                    <li><a href="#">Distribute Material</a></li>
                                    <br>
                                    <li><a href="#">Compile Iron</a></li>
                                    <li><a href="#">Distribute Iron</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Sintering</li>
                                    <li><a href="#">Compile Production</a></li>
                                    <li><a href="#">Distribute Production</a></li>
                                    <br>
                                    <li><a href="#">Compile Blending</a></li>
                                    <li><a href="#">Compile Material</a></li>
                                    <li><a href="#">Distribute Material</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Coking</li>
                                    <li><a href="#">Compile Production</a></li>
                                    <li><a href="#">Distribute Production</a></li>
                                    <br>
                                    <li><a href="#">Compile Blending</a></li>
                                    <li><a href="#">Compile Material</a></li>
                                    <li><a href="#">Distribute Material</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Stock Yard</li>
                                    <li><a href="#">Compile Blending</a></li>
                                    <li><a href="#">Distribute Blending</a></li>
                                    <br>
                                    <li><a href="#">Purchace Order</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!--stock yard-->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock Yard</a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Location Inventory</li>
                                    <li><a href="#">View Location</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Feed for COP, SP, BFP</li>
                                    <li><a href="#">View Feeding</a></li>
                                    <li><a href="#">Feeding Performance</a></li>
                                </ul>
                            </li>

                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Warehoushing</li>
                                    <li><a href="#">View Purchace Order</a></li>
                                    <li><a href="#">View Unloading Plan</a></li>
                                    <li><a href="#">Raw Material Feeding</a></li>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Blending & Crush</li>
                                    <li><a href="#">View Blending</a></li>
                                    <li><a href="#">Blend Feeding</a> </li>
                                    <li><a href="#">Blending Performance & Proportion</a></li>
                                    <li><a href="#">Crushing Performance</a> </li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Upload to SAP</li>
                                    <li><a href="#">Goods Issue</a></li>
                                    <li><a href="#">Goods Receipt</a></li>
                                    <li><a href="#">Feeding Raw Material</a></li>
                                    <li><a href="#">Result Recording</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>

            <!--sintering -->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sintering</span></a>

                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Bunker Management</li>
                                    <li><a href="#">Bunker</a></li>
                                    <li><a href="#">Charging</a></li>
                                    <li><a href="#">Blending Granulation</a></li>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Production Performance</li>
                                    <li><a href="#">Machine Operation</a></li>
                                    <li><a href="#">Test Finished Product</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Consumption Management</li>
                                    <li><a href="#">Query Material Supply</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Yield Management</li>
                                    <li><a href="#">Query Production</a></li>
                                    <li><a href="#">Yield Performance</a></li>
                                    <li><a href="#">Movement Performance</a></li>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Upload to SAP</li>
                                    <li><a href="#">Goods Issue</a></li>
                                    <li><a href="#">Goods Receipt</a></li>
                                    <li><a href="#">Confirmation</a></li>
                                    <li><a href="#">Transfer Posting</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>

            </div>

            <!--coking-->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coking </span></a>

                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <div class="item">
                                        <a href="#"><img src="img\cop.png" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Coking Plant</small></h4>
                                        <button class="btn btn-primary" type="button">2019 TO</button>
                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span>
                                            26-01-2019</button>
                                    </div>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Storage</li>
                                    <li><a href="#">Coal Binding Bin</a></li>
                                    <li><a href="#">Raw Material Storehouse</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Consumption</li>
                                    <li><a href="#">Material Supply</a></li>
                                    <li><a href="#">Raw Material</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Production Performance</li>
                                    <li><a href="#">Coal Blending Performance</a></li>
                                    <li><a href="#">Query of COke Oven Perfomance</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Yield Management</li>
                                    <li><a href="#">Query Production</a></li>
                                    <li><a href="#">Yield Performance</a></li>
                                    <li><a href="#">Mavement Performance</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Upload to SAP</li>
                                    <li><a href="#">Goods Issue</a></li>
                                    <li><a href="#">Goods Receipt</a></li>
                                    <li><a href="#">Confirmation</a></li>
                                    <li><a href="#">Transfer Posting</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>

            </div>

            <!--bf-->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blast Frc</span></a>

                        <ul class="dropdown-menu mega-dropdown-menu row">

                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Operation Management</li>
                                    <li><a href="#">Operation Performance</a></li>
                                    <li><a href="#">Tapping Performance</a></li>
                                    <li><a href="#">Consumption Performance</a></li>
                                    <br>
                                    <li><a href="#">Abnormal Condition</a></li>
                                    <li><a href="#">Hot Blast Stove Performance</a></li>
                                    <li><a href="#">Deslagging Performance</a></li>
                                    <li><a href="#">Return Material Performance</a></li>
                                    <br>
                                    <li><a href="#">Operating Parameter</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Ladle Management</li>
                                    <li><a href="#">Hot Metal Ladle</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Cast Iron Job</li>
                                    <li><a href="#">Maintenance Destination</a></li>
                                    <li><a href="#">Cast Iron Product</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Hot metal Pretreatment</li>
                                    <li><a href="#">Pretreatment</a></li>
                                    <li><a href="#">Reladle</a></li>
                                </ul>
                            </li>



                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Upload to SAP</li>
                                    <li><a href="#">Goods Issue Blst Furnace</a></li>
                                    <li><a href="#">Goods Issue to Pig Iron</a></li>
                                    <li><a href="#">Goods Issue to HMTP</a></li>
                                    <br>
                                    <li><a href="#">Goods Receipt Crude Hot Metal</a></li>
                                    <li><a href="#">Goods Receipt Hot Metal</a></li>
                                    <li><a href="#">Goods Receipt Pig Iron</a></li>
                                    <li><a href="#">Goods Receipt Slag</a></li>
                                    <li><a href="#">Goods Receipt Return Material</a></li>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">...</li>
                                    <li><a href="#">Confirmation Blst Furnace</a></li>
                                    <li><a href="#">Confirmation Hot Metal</a></li>
                                    <br>
                                    <li><a href="#">Transfer Posting Pig Iron</a></li>
                                    <li><a href="#">Transfer Posting Slag</a></li>
                                    <li><a href="#">Transfer Posting Return Material</a></li>
                                    <li><a href="#">Transfer Posting Hot Metal to SSP</a></li>

                                </ul>
                            </li>



                        </ul>

                    </li>
                </ul>

            </div>

            <!--qc-->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quality</a>

                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Standard</li>
                                    <li><a href="#">General Information</a></li>
                                    <li><a href="#">Sampling</a></li>
                                    <li><a href="#">Analysis Inspection</a></li>
                                    <li><a href="#">Jugmen Standar</a></li>
                                    <li><a href="#">Material Code</a></li>
                                    <li><a href="#">Item code</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Track Judgment</li>
                                    <li><a href="#">Sample Result</a></li>
                                    <li><a href="#">Query Sample</a></li>
                                    <li><a href="#">Generate & send to Lab</a></li>
                                    <li><a href="#">Query Result From SAP</a></li>
                                    <li><a href="#">Query Result from Lab</a></li>
                                    <li><a href="#">Result Judge</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Upload to SAP</li>
                                    <li><a href="#">Result Recording</a></li>
                                    <li><a href="#">Usage Desicion Interface</a></li>
                                    <li><a href="#">Quality Result</a></li>
                                    <li><a href="#">Usage Desicion</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <div class="item">
                                        <a href="#"><img src="img\spectro.png" class="img-responsive" alt="product 3"></a>
                                        <h4><small></small>Laboratorium</h4>
                                        <button class="btn btn-primary" type="button">Quality Control</button>

                                    </div>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>

            </div>

        </nav>
</div>