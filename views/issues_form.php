<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Down The Ballot</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="./public/css/about.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


    <!-- About Section -->
    <section class="success" id="about" style="text-align:center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?= $title ?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row" style="text-align:center">
                <form action="issues.php" method="POST" id="issues-form">

                    <div class="issue-listing">Increased School Funding</div>
                    <fieldset id="school-funding" style="text-align:center">
                        <input type="radio" name="school-funding" value="y_school-funding" /><label class="col-lg-2 control-label" style="text-align:center">Yes</label><br clear="all"/>
                        <input type="radio" name="school-funding" value="n_school-funding" /><label class="col-lg-2 control-label" style="text-align:center">&nbsp;No</label><br clear="all" />
                    </fieldset>

                    <div class="issue-listing">Nuclear Power</div>
                    <fieldset id="nuclear-power">
                        <input type="radio" name="nuclear-power" value="y_nuclear-power" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="nuclear-power" value="n_nuclear-power" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Police Accountability Reform</div>
                    <fieldset id="police-reform">
                        <input type="radio" name="police-reform" value="y_police-reform" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="police-reform" value="n_police-reform" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Toll Reduction</div>
                    <fieldset id="toll-reduction">
                        <input type="radio" name="toll-reduction" value="y_toll-reduction" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="toll-reduction" value="n_toll-reduction" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Anti Campaign Corruption Reform</div>
                    <fieldset id="anti-camp-corrupt">
                        <input type="radio" name="anti-camp-corrupt" value="y_anti-camp-corrupt" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="anti-camp-corrupt" value="n_anti-camp-corrupt" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Mass Transit Funding</div>
                    <fieldset id="transit-funding">
                        <input type="radio" name="transit-funding" value="y_transit-funding" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="transit-funding" value="n_transit-funding" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Climate Change Policies</div>
                    <fieldset id="climate-change">
                        <input type="radio" name="climate-change" value="y_climate-change" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="climate-change" value="n_climate-change" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Gun Control</div>
                    <fieldset id="gun-control">
                        <input type="radio" name="gun-control" value="y_gun-control" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="gun-control" value="n_gun-control" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Minimum Wage Increase</div>
                    <fieldset id="raise-minwage">
                        <input type="radio" name="raise-minwage" value="y_raise-minwage" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="raise-minwage" value="n_raise-minwage" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Charter Schools Support</div>
                    <fieldset id="charter-schools">
                        <input type="radio" name="charter-schools" value="y_charter-schools" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="charter-schools" value="n_charter-schools" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Tax Reduction</div>
                     <fieldset id="tax-reduction">
                        <input type="radio" name="tax-reduction" value="y_tax-reduction" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="tax-reduction" value="n_tax-reduction" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Drug Decriminalization</div>
                    <fieldset id="drug-decrim">
                        <input type="radio" name="drug-decrim" value="y_drug-decrim" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="drug-decrim" value="n_drug-decrim" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">LGBTQ Protections</div>
                    <fieldset id="lgbtq-protection">
                        <input type="radio" name="lgbtq-protection" value="y_lgbtq-protection" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="lgbtq-protection" value="n_lgbtq-protection" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Medical Cost Transparency</div>
                    <fieldset id="medcost-transparancy">
                        <input type="radio" name="medcost-transparancy" value="y_medcost-transparancy" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="medcost-transparancy" value="n_medcost-transparancyNo" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>

                    <div class="issue-listing">Sustainable Energy</div>
                    <fieldset id="sustainable-energy">
                        <input type="radio" name="sustainable-energy" value="y_sustainable-energy" /><label class="col-lg-2 control-label">Yes</label><br />
                        <input type="radio" name="sustainable-energy" value="n_sustainable-energy" /><label class="col-lg-2 control-label">No</label><br />
                    </fieldset>
                    <br />
                    <button type="submit" class="btn btn-primary" style="margin-top:2%">Submit</button>

                </form>
            </div>
        </div>
    </section>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
