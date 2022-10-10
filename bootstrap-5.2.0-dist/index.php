<!doctype html>
<html lang="en">

  <head>
    <!-- Instrux. for Bootstrap 5.2 on this page https://getbootstrap.com/docs/5.2/getting-started/introduction/  -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

     <!-- Custom styles for this template -->
    <link href="custom-css/tford-custom.css" rel="stylesheet">

    <!-- Google fonts now imported into stylesheet -->

    <title>TFord - Home</title>
  </head>


  <body>
    <!-- center nav bar at top -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-lg">
          <a class="navbar-brand" href="#">
            <img src="images/images-logos/tford_logo-white-198x52.png" alt="tford logo white" height="46">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08" aria-label="breadcrumb">
            <ul class="navbar-nav breadcrumb">
              <li class="breadcrumb-item active">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a class="nav-link" href="about.html">Our Company</a>
              </li>
              <li class="breadcrumb-item">
                <a class="nav-link" href="capabilities.html">Our Capabilities</a>
              </li>
               <li class="breadcrumb-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Project Profiles</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="project-profiles/dams-forgepond.html">Dams</a></li>
                  <li><a class="dropdown-item" href="project-profiles/dredging-charbert.html">Dredging</a></li>
                  <li><a class="dropdown-item" href="project-profiles/environbrownfields-medforddpw.html">Environmental/Brownfields</a></li>
                  <li><a class="dropdown-item" href="project-profiles/formermgpsites-allens.html">Former MGP Sites</a></li>
                  <li><a class="dropdown-item" href="project-profiles/industrial-bldgs-bostik.html">Industrial Buildings</a></li>
                  <li><a class="dropdown-item" href="project-profiles/landfills-aoc38closure.html">Landfills</a></li>
                  <li><a class="dropdown-item" href="project-profiles/seawalls-borderstreet.html">Seawalls</a></li>
                  <li><a class="dropdown-item" href="project-profiles/solar-massdot.html">Solar</a></li>
                  <li><a class="dropdown-item" href="project-profiles/specialty-lawrencemills.html">Specialty</a></li>
                  <li><a class="dropdown-item dropdown-item-last-child" href="project-profiles/waterwetlands-bradleypalmer.html">Waterwise/Wetlands</a></li>
                </ul>
              </li>
              <li class="breadcrumb-item">
                <a class="nav-link" href="health-safety.html">Health and Safety</a>
              </li>
              <li class="breadcrumb-item">
                <a class="nav-link" href="careers.html">Careers</a>
              </li>
              <li class="breadcrumb-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    

    <!--  w3schools - example very similar to Youtube video method -->
    <header class="parallax-header1">
        <!-- Container -->
        <div class="container">
            <!-- header content -->
            <div class="home-header-content">
                <div class="logo-white">
                </div>
                <p class="lead">T Ford Company, Inc. (TFCI) is a Massachusetts based general contractor with specific expertise in civil construction; specifically environmental remediation, solar and battery installations, dam replacement/removal, site work, utilities, concrete foundations, and industrial buildings.</p>
              </div>
              <div class="home-cta1">
                <a class="btn btn-success btn-lg" href="capabilities.html" role="button">LEARN MORE!</a>
              </div>
        </div>
        <!-- End of Container -->
    </header>

    <section class="container-fluid">
        <div class="content row">
          <div class="full-width-band bg-brown d-flex align-items-center">
            <div class="container-lg">
              <h2 class="txt-yellow full-width-band-hd">Recent Projects</h2>
            <!-- Left Side -->
            <div class="col-md-4 left">
              <h6 class="text-white home">Dams</h6>            
              <h3 class="text-white">Forge Pond </h3>
                  <div class="overlay-1"><a href="project-profiles/dams-forgepond.html"></a>
                  </div>
            </div>
          <!-- End of Left Side -->
          <div class="col-md-4 left">
            <h6 class="text-white home">Solar</h6>            
            <h3 class="text-white">Sudbury Landfill Solar Installation </h3>
            <div class="overlay-2"><a href="project-profiles/solar-sudbury.html"></a>
            </div>
          </div>
        <!-- End of Middle -->
      <!-- Right Side -->
            <div class="col-md-4 right">
              <h6 class="text-white home">Waterside / Wetlands</h6>            
              <h3 class="text-white">Bradley Palmer</h3>
              <div class="overlay-3"><a href="project-profiles/waterwetlands-bradleypalmer.html"></a>
              </div>
            </div>
            <!-- End of Right Side -->

          </div><!-- container -->
          </div><!-- brown bkg -->
        </div><!-- content row -->
    </section>

    <!-- Additional sections -->
    <!-- https://www.webnots.com/how-to-create-full-width-parallax-page-with-bootstrap/ -->

    <!-- First Parallax Section Done Differently - Webnots.com -->
    <section class="container-fluid">
        <div class="row">
            <div class="jumbotron paral paralsec">
              <nav class="container-lg">
                <div class="row">
                  <div class="col-md-2 left">
                    <h5 class="text-white mt-2">PROJECT PROFILES</h1>          
                  </div><!-- end of column-->
                  
                  <!-- nav pills-->
                  <!-- TO DO: create a class for these nav links -->
                  <div class="col-md-10 left"><!-- navigation area follows -->
                    <ul class="nav nav-pills-home nav-justified">
                    <li class="nav-item-home">
                      <a class="nav-link" aria-current="page" href="project-profiles/dams-forgepond.html">Dams</a>
                    </li>
                    <li class="nav-item-home">
                      <a class="nav-link" href="project-profiles/dredging-charbert.html">Dredging</a>
                    </li>
                    <li class="nav-item-home">
                      <a class="nav-link" href="project-profiles/environbrownfields-medforddpw.html">Environmental / Brownfields</a>
                    </li>
                    <li class="nav-item-home">
                      <a class="nav-link" href="project-profiles/formermgpsites-allens.html">Former MPG Sites</a>
                    </li>
                    <li class="nav-item-home">
                      <a class="nav-link" href="project-profiles/industrial-bldgs-bostik.html">Industrial Buildings</a>
                    </li>
                  </ul>
                </div><!-- end of wide col-->
              </div><!-- end of row-->

              <div class="row mt-1">
                <div class="col-md-10 offset-md-2 left"><!-- navigation area follows -->
                  <ul class="nav nav-pills-home nav-justified">
                  <li class="nav-item-home">
                    <a class="nav-link" href="project-profiles/landfills-aoc38closure.html">Landfills</a>
                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link" href="project-profiles/seawalls-borderstreet.html">Seawalls</a>
                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link" href="project-profiles/solar-massdot.html">Solar</a>
                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link" href="project-profiles/specialty-lawrencemills.html">Specialty</a>
                  </li>
                  <li class="nav-item-home">
                    <a class="nav-link" href="project-profiles/waterwetlands-bradleypalmer.html">Waterside / Wetlands</a>
                  </li>
                </ul>
                </div><!-- end of wide col-->

                </div><!-- end of row-->
              </nav><!-- end of pp nav -->

            </div><!-- end of jumbotron-->
        </div><!-- end of row-->
    </section><!-- end of parallax section 1-->
 
    <section class="container-fluid">
      <div class="row">
        <div class="full-width-band-short bg-brown d-flex align-items-center">
          <div class="container-lg">

          <!-- Left Side -->
          <div class="row">
          <h5 class="text-white">OUR CAPABILITIES</h1>          
            <div class="col-md-9 left">
            <h2 class="txt-yellow home">What We Do</h2>
            </div><!-- end of left col -->
          </div><!-- end of row -->

          <div class="row">
            <div class="col-md-9 left">
                <p class="txt-yellow">T Ford Company, Inc. offers a full range of general contracting services in the field of traditional, heavy, civil site work construction. Most of our work is "ground down," including underground utilities, concrete structures, waste disposal systems, and waterside construction, with extensive capabilities in industrial building construction and specialty machine foundations. A major component of our work is in environmental construction and remediation of contaminated sites. We have recently added solar array installation to our extensive project portfolio.  </p>
            </div><!-- end of left col -->

        <!-- End of Left Side -->
            <div class="col-md-3 left">
              <div class="home-cta2">
                <a class="btn btn-primary" href="capabilities.html" role="button">HOW WE WORK</a>
              </div><!-- end of cta -->
            </div><!-- end of right col -->
          </div><!-- end of row -->

        </div><!-- end of container -->     
        </div><!-- end of full width band -->
      </div><!-- end of content row -->
    </section>

    <!-- Before Footer -->
    <footer class="container-fluid">
      <div class="row">
        <div class="full-width-band-before-footer bg-grey d-flex align-items-center">
          <div class="container-lg">

          <!-- Left Side -->
          <div class="row">
            <div class="col-md-9 left before-footer">
              <h3 class="text-white">We're hiring!</h3>          
               <p class="">T Ford Company, Inc. (TFCI) periodically has employment opportunities for experienced construction professionals. 
              TFCI offers comprehensive benefits and competitive pay.
            </p>
            </div><!-- end of left col -->

            <div class="col-md-3 right align-items-center">
              <!-- Contact Us -->
              <div class="home-cta2">
                <a class="btn btn-primary" href="careers.html" role="button">CONTACT US</a>
              </div><!-- end of cta -->
            </div><!-- end of right col -->

          </div><!-- end of row -->

        </div><!-- end of container -->     
        </div><!-- end of full width band -->
      </div><!-- end of row -->
    </footer>

    <footer class="site-footer bg-dark">
        <p>
          © 2022 T Ford Company, Inc. 978 352 5606 124 Tenney Street, Georgetown, MA 01833 
        </p>

    </footer>


    

    <!-- JavaScript goes before the closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  </body>
</html>