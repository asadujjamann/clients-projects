<?php

session_start();

  if(!isset($_SESSION['asad2'])){
    header('location: ../deloitte');
  }else{
    $_SESSION = array();
    $_SESSION['asad3'] = 'My Name3';
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Vedika Bhasin">
    <meta property="og:title" content="Vedika Bhasin">
    <meta property="og:type" content="portfolio">
    <meta property="og:url" content="https://vedikabhasin.com">
    <meta property="og:image" content="https://vedikabhasin.com/assets2/img/social_share/Banner.png">
    <meta property="og:description" content="Hi, I’m VediKa. Simply put, I like creating experiences, talking about technology and the idea of an interplanetary life :)">
    <meta property="og:site_name" content="Vedika Bhasin">    
    <meta name="twitter:title" content="Vedika Bhasin">
    <meta name="twitter:description" content="Hi, I’m VediKa. Simply put, I like creating experiences, talking about technology and the idea of an interplanetary life :)">
    <meta name="twitter:image" content="https://vedikabhasin.com/assets2/img/social_share/Banner.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="Vedika Bhasin">
    <link rel="shortcut icon" href="https://vedikabhasin.com/assets2/img/favicon/favicon.png" type="image/x-icon">

    <title>Deloitte Full Pprocess | _projects | Vedika Bhasin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../assets/css/deloitte.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body class="deloitte-full-page-body">

    <!-- Header Section == Start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-md navbar-black">
              <a class="navbar-brand" href="../">
                <img class="vedika-logo" src="../assets/img/header/logo.png" alt="Vedika Bhasin Logo">
              </a>
              <button class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto text-center">
                  <li class="nav-item">
                      <a class="nav-link" href="../">_homebase</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../projects">_projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../resourcehub">_resourcehub</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section == End -->



   <!-- Portfolio Intro === Start -->
   <section class="portfolio-intro-full-area">
    <div class="container custom_container">
      <div class="row">
        <div class="col">
          <div class="portfolio-intro-header bg-white p-4 my-md-5 my-4">
            <div class="p-intro-header-txt-container mx-auto text-center">
              <p class="deloitte-head-txt-color port-head-txt mb-3">A 10-week long SCADpro sponsored collaboration with Deloitte’s Government and Public Services (GPS), working in a team of 21 students from diverse backgrounds to reimagine and improvise the talent acquisition process. With the job market becoming increasingly competitive, designing an accessible platform and creating a transparent candidate knowledge is essential for attracting quality talent.</p>
              <p class="port-subhead-txt-color port-subhead-txt mb-3">/SCADpro x Deloitte Collaboration, Copywriting, Illustration, Interactive Design, Physical Deliverables, Project Management, UX Research & Design, Visual Design</p>
            </div>
          </div>          
        </div>

        <div class="col-12">
          <div class="resourcehub_contacts about_contact_box">
            <a target="_blank" href="https://linkedin.com/in/vedikabhasin">
              <img src="../assets2/img/_homebase/linkedin.png" alt="linkedin">
            </a>
            <a href="mailto:vedikabhasin@gmail.com">
              <img src="../assets2/img/_homebase/email.png" alt="email">
            </a>
            <a target="_blank"
              href="https://www.oculus.com/deeplink/?action=view&path=%2Fprofile%2F107248991735520&utm_medium=share&utm_source=oculus">
              <img src="../assets2/img/_homebase/Oculus_VR.png" alt="Oculus_VR">
            </a>
          </div>
        </div> <!-- /.col-12 -->
      </div>
    </div>
  </section>
  <!-- Portfolio Intro === End -->


  <!-- Deloitte Video Area === Start -->
  <section class="deloitte-video-area">
    <div class="container custom_container">
      <div class="row">
        <div class="col">
          <div class="deloitte-video-item">
            <video autoplay muted controls loop>
              <source src="../assets/video/LOOP_DeloitteSCADpro_BrandingVideo.mov" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Deloitte Video Area === End -->


  <!-- Deloitte_Candidate_HR Area === Start -->
  <section class="deloitte_candidate_hr_area py-3 py-md-5">
    <div class="container custom_container">
      <div class="row">
        <div class="col-12">
          <div class="deloitte_candidate_hr_area_items d-flex flex-md-row flex-column">
            <div>
              <img src="../assets/img/deloitte/Candidate_portal.png" alt="Candidate_portal">
            </div>
            <div class="mt-3 mt-md-0">
              <img src="../assets/img/deloitte/HR_Portal.png" alt="HR_Portal">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Candidate_HR Area === End -->


  <!-- Deloitte_NDA_txt Area === Start -->
  <section class="deloitte_nda_txt_area py-3">
    <div class="container custom_container">
      <div class="row">
        <div class="col-12">
          <p class="fontSize16px deloitte_nda_txt text-center pb-3">Under an NDA, please reach out for the password.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Deloitte_NDA_txt Area === End -->



  <!-- Deloitte_Loop Area === Start -->
  <section id="deloiite_loop_area" class="deloiite_loop_area pb-5">
    <div class="container custom_container">
      <div class="row">
        <div class="col-12 col-md-7">
          <div class="deloiite_loop_img_box">
            <a href="#!"><img src="../assets/img/deloitte/LOOP.png" alt="LOOP"></a>
          </div>
        </div>
        <div class="col-12 col-md-5">
          <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
            <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block mt-4 mt-md-0 text-md-left text-right">VIEW FULL PROCESS</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Deloitte_Loop Area === End -->




  <!-- Dltt_Table_of_Contents_Area (Story) === Start -->
  <section id="dltt_toc_story" class="dltt_table_of_contents_area pb-5">
    <div class="container custom_container">
        <div class="row">
            <div class="col-12">
                <div class="dltt_table_of_contents_list d-flex justify-content-center">
                    <ul>
                        <li>Table of Contents</li>
                        <li><a class="toc_active dltt_toc_story" href="#dltt_toc_story">The Story</a></li>
                        <li><a class="dltt_toc_journery" href="#dltt_toc_journery">The Journey</a></li>
                        <li><a class="dltt_toc_vision" href="#dltt_toc_vision">The Vision</a></li>
                        <li><a class="dltt_toc_phy_deliver" href="#dltt_toc_phy_deliver">Physical Deliverables</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-12">
                <div class="dltt_table_of_contents_items py-5">

                    <table>
                        <tbody>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">ASK</h4></td>
                                <td class="col-12 col-sm-6"><p>Research and develop concepts for <strong>highly interactive and immersive digital experiences for federal job applicants</strong> as they maneuver through the talent acquisition process</p></td>
                            </tr>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">PROBLEM <br> STATEMENT</h4></td>
                                <td class="col-12 col-sm-6"><p>How might we <strong>elevate the candidate experience for the federal agency to retain quality candidates efficiently?</strong></p></td>
                            </tr>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">OPPORTUNITY <br> STATEMENT</h4></td>
                                <td class="col-12 col-sm-6"><p>To build a <strong>holistic strategy</strong> on top of USAJobs to <strong>elevate the candidate experience</strong> and support federal agencies such as TSA and the Foreign Service. This will help in <strong>retaining quality candidates, streamlining recruiting workflow, and improving transparency.</strong></p></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec text-center">
                    <img src="../assets/img/deloitte/Design_Metric.png" alt="Design_Metric">
                </div>
            </div>

        </div>
    </div>
  </section>
  <!-- Dltt_Table_of_Contents_Area (Story) === End -->







  <!-- Dltt_Table_of_Contents_Area (Journey) === Start -->
  <section id="dltt_toc_journery" class="dltt_table_of_contents_area">
    <div class="container custom_container">
        <div class="row">

            <div class="col-12">
                <div class="dltt_table_of_contents_list d-flex justify-content-center">
                    <ul>
                        <li>Table of Contents</li>
                        <li><a class="dltt_toc_story" href="#dltt_toc_story">The Story</a></li>
                        <li><a class="toc_active dltt_toc_journery" href="#dltt_toc_journery">The Journey</a></li>
                        <li><a class="dltt_toc_vision" href="#dltt_toc_vision">The Vision</a></li>
                        <li><a class="dltt_toc_phy_deliver" href="#dltt_toc_phy_deliver">Physical Deliverables</a></li>
                    </ul>
                </div>
            </div>



            <div class="col-12 col-md-8 pt-4 pt-md-5">
                <div class="deloiite_loop_img_box">
                    <img src="../assets/img/deloitte/aff1.webp" alt="aff1">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
                    <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block text-md-left text-right mr-4 mr-md-0">RESEARCH</span>
                </div>
            </div>



            <div class="col-12">
                <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">

                    <table>
                        <tbody>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">FOR CANDIDATE</h4></td>
                                <td class="col-12 col-sm-7">
                                    <p>/What are the <strong>deciding factors</strong> during a candidate’s job-seeking process?</p>
                                    <p>/Which part of the job-seeking process is the <strong>most stressful</strong> for candidates?</p>
                                    <p>/How are the <strong>existing job-seeking solutions</strong> benefiting the candidate?</p>
                                </td>
                            </tr>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">FOR TA PROFESSIONALS</h4></td>
                                <td class="col-12 col-sm-7">
                                    <p>/What are the <strong>pain points</strong> in the current recruiting process for TA professionals?</p>
                                    <p>/What are the <strong>existing touch-point</strong>s in order for TA professionals to reach out to candidates?</p>
                                </td>
                            </tr>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">DATA COLLECTION</h4></td>
                                <td class="col-12 col-sm-7">
                                    <div class="data-collection-icon-text d-flex justify-content-between text-center">
                                        <div>
                                            <img src="../assets/img/deloitte/data-collection-icons-1.jpg" alt="data-collection-icons">
                                            <p class="ambit_semibold my-2">27</p>
                                            <p>Interview</p>
                                        </div>
                                        <div>
                                            <img src="../assets/img/deloitte/data-collection-icons-2.jpg" alt="data-collection-icons">
                                            <p class="ambit_semibold my-2">93</p>
                                            <p>Survey Responses</p>
                                        </div>
                                        <div>
                                            <img src="../assets/img/deloitte/data-collection-icons-3.jpg" alt="data-collection-icons">
                                            <p class="ambit_semibold my-2">1500+</p>
                                            <p>Data Points</p>
                                        </div>
                                        <div>
                                            <img src="../assets/img/deloitte/data-collection-icons-4.jpg" alt="data-collection-icons">
                                            <p class="ambit_semibold my-2">1</p>
                                            <p>Research Magazine</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">RESEARCH & INSIGHT <br> MAGAZINE</h4></td>
                                <td class="col-12 col-sm-7">
                                    <p>This magazine, gathering <strong>3-weeks of research</strong>, is divided into chapters, each centered on three different perspectives: the <strong>candidates</strong>, the <strong>talent acquisition professional</strong>, and the <strong>federal agency</strong>, including Stakeholder Map, Research Framework, User Interviews, and Design Insights.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>




            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec box_shadow opacity_60 text-center pb-4">
                    <a href="../assets/pdf/The-Candidate-Experience-User-and-Customer-Insights-Magazine.pdf" target="_blank">
                        <img src="../assets/img/deloitte/d.scadpro.webp" alt="d.scadpro">
                    </a>
                </div>
            </div>





            <div class="col-12 col-md-8 pt-5 mt-5">
                <div class="deloiite_loop_img_box Journeymap_UX">
                    <img src="../assets/img/deloitte/Journeymap_UX.webp" alt="Journeymap_UX">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
                    <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block text-md-left text-right mt-4 mt-md-0">INSIGHT</span>
                </div>
            </div>


            <div class="col-12">
                <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">

                    <table>
                        <tbody>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">CANDIDATE PERSONA</h4></td>
                                <td class="col-12 col-sm-7">
                                    <p>The candidate persona was developed based on the experience of the user. There are two kinds of candidates: those who <strong>lack work experience</strong> and those who <strong>have more extensive work experience</strong>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec text-center pb-4">
                    <img src="../assets/img/deloitte/Candidate-User-Persona-Rebecca-Johnson.webp" alt="Candidate-User-Persona-Rebecca-Johnson">
                </div>
            </div>

            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec text-center pb-4">
                    <img src="../assets/img/deloitte/Candidate-User-Persona-Kevin-Mitchel.webp" alt="Candidate-User-Persona-Kevin-Mitchel">
                </div>
            </div>



            <div class="col-12">
                <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">

                    <table>
                        <tbody>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">HR PERSONA</h4></td>
                                <td class="col-12 col-sm-7">
                                    <p>The HR personas were developed based on their activities during the recruitment process. There are three kinds of TA professionals: <strong>HR Managers, TA Advisors,</strong> and <strong>Recruiters</strong>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec text-center pb-4">
                    <img src="../assets/img/deloitte/HR-User-Persona-Anja-Dennis.webp" alt="HR-User-Persona-Anja-Dennis">
                </div>
            </div>

            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec text-center pb-4">
                    <img src="../assets/img/deloitte/HR-User-Persona-Flynn-Keenan.webp" alt="HR-User-Persona-Flynn-Keenan">
                </div>
            </div>

            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec text-center pb-4">
                    <img src="../assets/img/deloitte/HR-User-Persona-Nicola-Hass.webp" alt="HR-User-Persona-Nicola-Hass">
                </div>
            </div>


            <div class="col-12">
                <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">

                    <table>
                        <tbody>
                            <tr class="row align-items-center text-center text-sm-left">
                                <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">JOURNEY MAPS</h4></td>
                                <td class="col-12 col-sm-7">
                                    <p>To get a better understanding of the behavior and psychology of our users, we recorded our <strong>observations of their actions, thoughts, and emotions</strong>. To further optimize the process, we utilized abstract concepts to articulate each step of a job application.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="col-12">
              <div style="overflow-x: hidden;">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="numbertext">1 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/1.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="numbertext">2 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/2.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>                            
                      </div>
                      <div class="carousel-item">
                        <div class="numbertext">3 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/3.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>                            
                      </div>
                      <div class="carousel-item">
                        <div class="numbertext">4 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/4.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>                            
                      </div>
                      <div class="carousel-item">
                        <div class="numbertext">5 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/5.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>                            
                      </div>
                      <div class="carousel-item">
                        <div class="numbertext">6 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/6.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>                            
                      </div>
                      <div class="carousel-item">
                        <div class="numbertext">7 / 7</div>
                        <div>
                          <img src="../assets/img/deloitte/slider/7.webp" alt="Current Candidate Journey Map" class="w-100">
                        </div>                            
                      </div>

                    </div>
                    
                    
                    <div>
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>

                    
                </div>
              </div>
            </div>


            <div class="col-12">
              <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">
                  <table>
                      <tbody>
                          <tr class="row text-center text-sm-left">
                              <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">DESIGN INSIGHT</h4></td>
                              <td class="col-12 col-sm-7">
                                  <p>During the research phase of the project, it became apparent that applicants felt confused by the current job-seeking process. To resolve this problem, we developed a clear and concise experience for the user.</p>
                                  <p class="mt-3">In the initial stages of the job search, applicants get tired of scrolling through wordy job postings and are unable to find jobs with a clear and concise description. In addition, they have trouble finding information about the company culture for the jobs they apply to. Our goal is to <strong>improve the way HR representatives display both the job listing and employer brand, so that more candidates are attracted to the USAJobs portal.</strong></p>
                                  <p class="mt-3">Once the candidate begins working on their application, they often find the process frustrating and currently prepare relevant documents without reference links. <strong>By providing an automatic checklist for all required documents and data, candidates can avoid uploading duplicate documents.</strong></p>
                                  <p class="mt-3">There are two main issues in the post-application phase: <strong>lack of transparency and lack of motivation in candidates</strong>. Once the candidate applies to a job, they are left waiting for a response with little to no feedback from their potential employer. We plan to <strong>show them the progress of their application during the screening process and provide interview tips to boost their confidence and help release stress.</strong></p>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            </div>



          <div class="col-12 col-md-8 pt-4 pt-md-5">
              <div class="deloiite_loop_img_box Journeymap_UX">
                  <img src="../assets/img/deloitte/Journeymap_UX.webp" alt="Journeymap_UX">
              </div>
          </div>
          <div class="col-12 col-md-4">
              <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
                  <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block text-md-left text-right mt-4 mt-md-0">IDEATION</span>
              </div>
          </div>


          <div class="col-12">
              <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">
                  <table>
                      <tbody>
                          <tr class="row align-items-center text-center text-sm-left">
                              <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">KEY SCENARIO</h4></td>
                              <td class="col-12 col-sm-7">
                                  <p>To demonstrate the structure of the system, we illustrated a storyboard, explaining the flow of activities on the portal and visualizing the key scenarios for our users.</p>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>



          <div class="col-12">
              <div class="dltt_table_of_contents_img_sec text-center pb-4">
                  <img src="../assets/img/deloitte/StoryBoard.png" alt="StoryBoard">
              </div>
          </div>

          <div class="col-12">
              <div class="dltt_table_of_contents_img_sec text-center pb-4">
                  <img src="../assets/img/deloitte/StoryBoard2.png" alt="StoryBoard">
              </div>
          </div>


          <div class="col-12">
            <div class="dltt_table_of_contents_items py-md-5 mt-5 mt-md-0 d-flex justify-content-center">
                <table>
                    <tbody>
                        <tr class="row align-items-center text-center text-sm-left">
                            <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">WIREFRAMES & LOW-FI</h4></td>
                            <td class="col-12 col-sm-7">
                                <p>To continue developing and brainstorming our solution, we created Wireframe prototypes and Low-fidelity mockups.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>


          <div class="col-12 col-md-6">
            <div class="dltt_table_of_contents_left_part text-md-left text-center">
              <h5 class="mt-4">Landing Page</h5>
              <div><img src="../assets/img/deloitte/Sign-in-Landing-Page.webp" alt="Sign in Landing Page"></div>

              <h5 class="mt-4">Profile</h5>
              <div><img src="../assets/img/deloitte/Profile-1.webp" alt="Profile"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/Profile-2.webp" alt="Profile"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/Profile-3.webp" alt="Profile"></div>

              <h5 class="mt-4">Messenger</h5>
              <div><img src="../assets/img/deloitte/Messenger_Chatbot-1.webp" alt="Messenger_Chatbot"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/Messenger_Chatbot-2.webp" alt="Messenger_Chatbot"></div>

            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="dltt_table_of_contents_right_part text-md-left text-center">
              <h5 class="mt-4">Dashboard</h5>
              <div><img src="../assets/img/deloitte/DashBoard-1.webp" alt="DashBoard"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/DashBoard-2.webp" alt="DashBoard"></div>

              <h5 class="mt-4">Application Status</h5>
              <div><img src="../assets/img/deloitte/Application-Status-1.webp" alt="Application Status"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/Application-Status-2.webp" alt="Application Status"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/Application-Status-3.webp" alt="Application Status"></div>
              <div class="mt-3"><img src="../assets/img/deloitte/Application-Status-4.webp" alt="Application Status"></div>
            </div>
          </div>


          <div class="col-12 col-md-8 pt-5 mt-5">
            <div class="deloiite_loop_img_box Journeymap_UX">
              <img src="../assets/img/deloitte/User-Testing.webp" alt="User-Testing">
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
              <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block text-md-left text-right mt-4 mt-md-0">USER TESTING</span>
            </div>
          </div>


          <div class="col-12">
            <div class="dltt_table_of_contents_items pt-5 d-flex justify-content-center">
                <table>
                    <tbody>
                        <tr class="row align-items-center text-center text-sm-left">
                            <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">USER TESTING</h4></td>
                            <td class="col-12 col-sm-7">
                                <p><strong>To evaluate the usability of the candidate portal and gauge its flow, four user tests were conducted.</strong> The segments included landing pages, profile creations, uploading resumes, and scheduling interviews.</p>
                            </td>
                        </tr>
                        <tr class="row align-items-center text-center text-sm-left">
                            <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">TESTING GOALS</h4></td>
                            <td class="col-12 col-sm-7">
                                <p>The goal of the user testing was to validate our assumption of <strong>system efficiency and transparency</strong> for our users.</p>
                            </td>
                        </tr>
                        <tr class="row align-items-center text-center text-sm-left">
                            <td class="col-12 col-sm-5"><h4 class="mb-3 mb-sm-0">PROCESS GOALS & <br> ASSUMPTIONS</h4></td>
                            <td class="col-12 col-sm-7">
                                <p>/<strong>Job Searching</strong>: Candidates can seamlessly sign up and complete their job search process.</p>
                                <p>/<strong>Dashboard</strong>: Qualified candidates can upload their resume and edit their profile.</p>
                                <p>/<strong>Interview Scheduling</strong>: Qualified candidates can schedule their interviews and contact HR.</p>
                                <p>/<strong>Final Interview</strong>: Qualified candidates can access virtual interviews.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>



        </div>
    </div>
  </section>
  <!-- Dltt_Table_of_Contents_Area (Journey) === End -->







  <!-- Dltt_Table_of_Contents_Area (Vision) === Start -->
  <section style="overflow-x: hidden;" id="dltt_toc_vision" class="dltt_table_of_contents_area py-5 mt-5">
    <div class="container custom_container pt-1 pt-md-5">

        <div class="row">          
          <div class="col-12">
              <div class="dltt_table_of_contents_list d-flex justify-content-center">
                  <ul>
                      <li>Table of Contents</li>
                      <li><a class="dltt_toc_story" href="#dltt_toc_story">The Story</a></li>
                      <li><a class="dltt_toc_journery" href="#dltt_toc_journery">The Journey</a></li>
                      <li><a class="toc_active dltt_toc_vision" href="#dltt_toc_vision">The Vision</a></li>
                      <li><a class="dltt_toc_phy_deliver" href="#dltt_toc_phy_deliver">Physical Deliverables</a></li>
                  </ul>
              </div>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <section class="deloiite_loop_area py-3 py-md-5">
              <div class="container custom_container">
                <div class="row">
                  <div class="col-12 col-md-7">
                    <div class="deloiite_loop_img_box">
                      <a href="#!"><img src="../assets/img/deloitte/LOOP.png" alt="LOOP"></a>
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
                      <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block mt-4 mt-md-0 text-md-left text-right">FINAL SOLUTION</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        
        <div class="dltt_table_of_contents_items pt-5 px-3">
          <table>
              <tbody>
                  <tr class="row align-items-center text-center text-sm-left">
                      <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">DIGITAL SERVICES</h4></td>
                      <td class="col-12 col-sm-6"><p>Our final concept, LOOP, is a comprehensive TA solution that <strong>connects the front-end (candidates) and back-end (HR) systems</strong>, directly serving federal agencies like TSA and the Foreign Service. Our solution <strong>bridges the gap between candidates and TA professionals through an engaging online platform.</strong></p></td>
                  </tr>
              </tbody>
          </table>
        </div>



        <div class="row pt-4 pt-md-5">
            <div class="col-12">
                <div class="dltt_table_of_contents_img_sec opacity_60 text-center">
                    <img src="../assets/img/deloitte/Design-Metric.webp" alt="Design_Metric">
                </div>
            </div>
        </div>

        <section class="deloitte-video-area pt-5">
          <div class="container custom_container">
            <div class="row">
              <div class="col">
                <div class="deloitte-video-item">
                  <video autoplay muted controls loop>
                    <source src="../assets/video/UX-Video.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
          </div>
        </section>


        <div class="row pt-5">          
          <div class="col-12">
              <div class="dltt_table_of_contents_list d-flex justify-content-center">
                  <ul>
                      <li><a class="dltt_toc_list_candidate_portals portals_active" href="#">CANDIDATE PORTALS</a></li>
                      <li><a class="dltt_toc_list_hr_portals portals_not_active" href="#">HR PORTALS</a></li>
                  </ul>
              </div>
          </div>
        </div>

        
        <div class="row pt-5 px-3 px-md-0">
          <div class="col-12 col-md-9">
            <div class="deloiite_loop_img_box">
                <img src="../assets/img/deloitte/Candidate-portal.webp" alt="Candidate-portal">
            </div>
          </div>
          <div class="col-12 col-md-3">
              <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
                  <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block text-md-left text-right mr-4 mr-md-0">CANDIDATE PORTALS</span>
              </div>
          </div>
        </div>


        <div class="dltt_table_of_contents_items pt-5 px-3">
          <table>
              <tbody>
                  <tr class="row align-items-center text-center text-sm-left">
                      <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">CANDIDATE JOB PORTAL</h4></td>
                      <td class="col-12 col-sm-6"><p>The portal is designed for candidates to elevate their job-seeking experience by providing <strong>accurate job recommendations</strong>. In addition, it extends interaction through <strong>virtual career fairs</strong> and enhances awareness through the candidate dashboard. Candidates <strong>receive updates through an application tracker and are able to schedule interviews through calendar invites</strong> on the platform.</p></td>
                  </tr>
              </tbody>
          </table>
        </div>



        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row align-items-center text-center text-md-left">
                      <td class="col-12 col-md-6 order-2 order-md-1">
                        <img src="../assets/img/deloitte/Candidate-Dashboard.webp" alt="Candidate-Dashboard">
                      </td>
                      <td class="col-12 col-md-6 order-1 order-md-2">
                        <h4 class="mb-3 mt-md-0 mt-5">Onboarding</h4>
                        <p>From the onboarding phase, candidates start their journey with a welcome page that is followed up by the sign-up keywords page. Simultaneously, recruiters will receive an auto-generated talent pool in their portal.</p>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>

        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-4">
                        <h4 class="mb-3">Welcome Page</h4>
                        <p>The welcome page provides a narrative on how LOOP serves applicants and why it is a better job-search platform for federal government agencies. When the candidate scrolls down, they will be prompted to sign up with a word of encouragement.</p>
                      </td>
                      <td class="col-12 col-md-8">
                        <div class="laptop_mockup_video_area pt-3 pt-md-0">
                          <video class="w-100" autoplay muted loop>
                            <source src="../assets/video/WelcomePage_with_frame.mp4" type="video/mp4">
                          </video>
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>


        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-6">
                        <h4 class="mb-3">Keywords</h4>
                        <p>The keywords page assists candidates to build their profile. They will be asked to put keywords for three prompts: expertise, location, and skillsets. The natural language processing (NLP) of LOOP’s artificial intelligence (AI) system will provide an accurate suggestion of keywords for candidates to ease the burden of inputting each section manually.</p>
                      </td>
                      <td class="col-12 col-md-6">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Keyword_Sign_up.webp" alt="Keyword_Sign_up">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Keyword_Sign_up_2.webp" alt="Keyword_Sign_up">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Keyword_Sign_up_3.webp" alt="Keyword_Sign_up">
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>


        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row align-items-center text-center text-md-left">
                      <td class="col-12 col-md-6 order-2 order-md-1">
                        <img src="../assets/img/deloitte/Job_Search.webp" alt="Job_Search">
                      </td>
                      <td class="col-12 col-md-6 order-1 order-md-2">
                        <h4 class="mb-3 mt-md-0 mt-5">Job Searching</h4>
                        <p>With LOOP, candidates can ease their burden of tiresome job searching and have the additional benefit of taking a look at <strong>agency insights and attending upcoming virtual career fairs with easy access.</strong></p>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
        
        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-6">
                        <h4 class="mb-3">Virtual Career Fair</h4>
                        <p>With a single click, LOOP connects the candidate with a recruiter through a virtual career fair and enhances agency value awareness. Candidates can easily reserve a meeting with recruiters.</p>
                      </td>
                      <td class="col-12 col-md-6">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Virtual_Career_Fair_Detail.webp" alt="Virtual_Career_Fair_Detail">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Virtual_Career_Fair_Interview.webp" alt="Virtual_Career_Fair_Interview">
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>


        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row align-items-center text-center text-md-left">
                      <td class="col-12 col-md-6 order-2 order-md-1">
                        <img src="../assets/img/deloitte/Tracker.webp" alt="Tracker">
                      </td>
                      <td class="col-12 col-md-6 order-1 order-md-2">
                        <h4 class="mb-3 mt-md-0 mt-5">Application Tracking</h4>
                        <p>Candidates can reduce uncertainty around the post-application process with the <strong>candidate tracker and communication tools</strong> within LOOP.</p>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>

        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-6">
                        <h4 class="mb-3">Application Tracker</h4>
                        <p>The application tracker provides transparency throughout the application process.</p>
                        <p class="mt-3">On the left side, it shows the duration of the entire application process, the duration of each step, and the dates when the candidates get their results.</p>
                        <p class="mt-3">On the right side, the results and actions candidates need to complete are shown. Candidates can schedule their interviews and contact HR once they pass the initial screening. They provide serial numbers to contact HR for further information about the interview.</p>
                      </td>
                      <td class="col-12 col-md-6">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Application_Status.webp" alt="Application_Status">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Application_Status2.webp" alt="Application_Status">
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>


        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-6">
                        <h4 class="mb-3">Candidate Dashboard</h4>
                        <p>The candidate’s dashboard is a channel that brings candidates to every function of Loop. It contains a calendar which allows candidates to check their interviews and saved Career Fairs. Under Application, candidates can review their application status, schedule their interviews and view each application’s progress.</p>
                      </td>
                      <td class="col-12 col-md-6">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Candidate_Dashboard.webp" alt="Candidate_Dashboard">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Candidate_Dashboard2.webp" alt="Candidate_Dashboard">
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>

        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row align-items-center text-center text-md-left">
                      <td class="col-12 col-md-6 order-2 order-md-1">
                        <img src="../assets/img/deloitte/Interview_Schedule.webp" alt="Interview_Schedule">
                      </td>
                      <td class="col-12 col-md-6 order-1 order-md-2">
                        <h4 class="mb-3 mt-md-0 mt-5">Interview Scheduling</h4>
                        <p>LOOP helps candidates keep track of their upcoming interviews, provide a <strong>visualized calendar, and an interview platform to streamline the interview experience</strong> for the candidates.</p>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>


        <div class="dltt_table_of_contents_items pt-4 pt-md-5 px-3">
          <table>
              <tbody>
                  <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-6">
                        <h4 class="mb-3">Interview Scheduler</h4>
                        <p>Candidates can schedule their interviews and contact HR once they pass the initial screening. LOOP provides serial numbers to contact HR for further information about the interview.</p>
                      </td>
                      <td class="col-12 col-md-6">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Interview_Scheduler.webp" alt="Interview_Scheduler">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Interview_Scheduler2.webp" alt="Interview_Scheduler">
                        </div>
                        <div class="pt-3">
                          <img src="../assets/img/deloitte/Interview_Scheduler3.webp" alt="Interview_Scheduler">
                        </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>



        <div class="row pt-5 mt-5">          
          <div class="col-12">
              <div class="dltt_table_of_contents_list d-flex justify-content-center">
                  <ul>
                      <li><a class="dltt_toc_list_candidate_portals portals_not_active" href="#">CANDIDATE PORTALS</a></li>
                      <li><a class="dltt_toc_list_hr_portals portals_active" href="#">HR PORTALS</a></li>
                  </ul>
              </div>
          </div>
        </div>
        

        <div class="row pt-4 pt-md-5 px-3 px-md-0">
          <div class="col-12 col-md-9">
            <div class="deloiite_loop_img_box">
                <img src="../assets/img/deloitte/HR_Portal.webp" alt="HR_Portal">
            </div>
          </div>
          <div class="col-12 col-md-3">
              <div class="deloiite_loop_full_process d-flex justify-content-md-center justify-content-end align-items-center h-100">
                  <span class="deloiite_loop_full_process_link text-decoration-none d-inline-block text-md-left text-right mr-4 mr-md-0">HR PORTALS</span>
              </div>
          </div>
        </div>


        <div class="dltt_table_of_contents_items py-5 d-flex justify-content-center">
          <table>
              <tbody>
                  <tr class="row text-center text-sm-left">
                      <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">HR PLATFORM</h4></td>
                      <td class="col-12 col-sm-6">
                          <p>The HR Platform consists of three portals: <strong>Recruiters, Talent Acquisition, and Human Resource Manager</strong> based on the nature of their role in an organization. The goal is to <strong>boost efficiency in workflow and to design an engagement strategy to attract high-quality candidates</strong>. This can be achieved by minimizing the screening workload through <strong>automation, enhancing transparency, and reducing communication barriers when scheduling an interview</strong>.</p>
                      </td>
                  </tr>
                  <tr class="row text-center text-sm-left">
                      <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">Recruiter Portal</h4></td>
                      <td class="col-12 col-sm-6">
                          <p>The recruiters' portal works to enhance the efficiency and transparency of the recruitment workflow by providing features like the <strong>dashboard, talent pool, screening, and career fair.</strong></p>
                      </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Recruiter Dashboard</h4>
                      <p>The dashboard provides an overview of their tasks, including key performance indicators, ongoing screening, and career fair schedules.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/Recruiter_Dashboard.webp" alt="Recruiter_Dashboard">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Talent Pool</h4>
                      <p>The talent pool allows recruiters to see all the candidates who sign up in Loop. It provides resumes, referrals, and qualifications for recruiters. Recruiters can see the potential candidates under each job title and invite them to apply for the job.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/Recruiter_TalentPool.webp" alt="Recruiter_TalentPool">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Screening</h4>
                      <p>The recruiter can screen qualified candidates in the portal. The system will provide an overview of the ongoing JOA (Job Opportunity Announcement).</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/Recruiter_On_goingScreening_1.webp" alt="Recruiter_On_goingScreening_1">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Virtual Career Fair Interview</h4>
                      <p>When the recruiter holds 1-on-1 meetings with candidates, they can leave a note and mark the candidate with referral tags. The information will be saved in the system to facilitate the application process furthermore and manage the talent pool of the agency.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/CareerFair_Interview.webp" alt="CareerFair_Interview">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-sm-left">
                      <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">TA Advisor Portal</h4></td>
                      <td class="col-12 col-sm-6">
                          <p>The TA Advisor portal focuses on enhancing the efficiency and transparency of the recruitment workflow with features like <strong>JOA monitoring, attraction strategy, automation screening, interview scheduling, and candidate tracking.</strong></p>
                      </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Screening</h4>
                      <p>The TA Advisor can screen qualified candidates and see their detailed information. The system will provide an overview of the ongoing JOA. After they click on a specific position in the portal, they can also approve or deny multiple candidates at once.</p>
                    </td>
                    <td class="col-12 col-md-7 text-center text-md-right">
                      <div class="pt-3 pt-md-0">
                        <img src="../assets/img/deloitte/Screening.webp" alt="Screening">
                      </div>
                      <div class="pt-3">
                        <img src="../assets/img/deloitte/Screening2.webp" alt="Screening">
                      </div>
                      <div class="pt-3">
                        <img src="../assets/img/deloitte/Screening3.webp" alt="Screening">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Candidate Tracking</h4>
                      <p>The TA Advisor can see the detailed information of the candidate after they click on a specific position, and they can approve or deny multiple candidates at once.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/TA_Advisor_Tracker.webp" alt="TA_Advisor_Tracker">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Interview</h4>
                      <p>Scheduling interviews can now be automatically done within the system. The TA Advisor can send a calendar invite provided by the HR manager to the candidate with one click.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/Interview.webp" alt="Interview">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-sm-left">
                      <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">HR Manager Portal</h4></td>
                      <td class="col-12 col-sm-6">
                          <p>The HR manager portal helps the manager <strong>be aware of the performance of the department and conduct interviews with ease.</strong></p>
                      </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Dashboard</h4>
                      <p>The dashboard provides an overview of their tasks including JOA Analytics, interview Schedule, and online interview platform.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/HR_manager_dashboard.webp" alt="HR_manager_dashboard">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Interview Time Slot</h4>
                      <p>The HR manager can intuitively set up their time slot for interviews based on the information from the portal and effectively pass the time slot to the TA Advisor.</p>
                    </td>
                    <td class="col-12 col-md-7">
                      <div class="pt-3 pt-md-0 text-center text-md-right">
                        <img src="../assets/img/deloitte/HR_manager_interview_time_slot.webp" alt="HR_manager_interview_time_slot">
                      </div>
                    </td>
                  </tr>
                  <tr class="row text-center text-md-left">
                    <td class="col-12 col-md-5">
                      <h4 class="mb-3">Interview Platform</h4>
                      <p>The HR manager can conduct and join interviews within the portal. The system will also provide information regarding previous interviews. The manager will be able to rate and take notes about interviewees.</p>
                    </td>
                    <td class="col-12 col-md-7 text-center text-md-right">
                      <div class="pt-3 pt-md-0">
                        <img src="../assets/img/deloitte/HR_manager_interview_platform.webp" alt="HR_manager_interview_platform">
                      </div>
                      <div class="pt-3">
                        <img src="../assets/img/deloitte/HR_manager_interview_platform2.webp" alt="HR_manager_interview_platform">
                      </div>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>


    </div>
  </section>
  <!-- Dltt_Table_of_Contents_Area (Vision) === End -->




  <!-- Dltt_Table_of_Contents_Area (Physical Deliverables) === Start -->
  <section id="dltt_toc_phy_deliver" class="dltt_table_of_contents_area">
    <div class="container custom_container">
        <div class="row">
            <div class="col-12">
                <div class="dltt_table_of_contents_list d-flex justify-content-center">
                    <ul>
                        <li>Table of Contents</li>
                        <li><a class="dltt_toc_story" href="#dltt_toc_story">The Story</a></li>
                        <li><a class="dltt_toc_journery" href="#dltt_toc_journery">The Journey</a></li>
                        <li><a class="dltt_toc_vision" href="#dltt_toc_vision">The Vision</a></li>
                        <li><a class="dltt_toc_phy_deliver toc_active" href="#dltt_toc_phy_deliver">Physical Deliverables</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="dltt_table_of_contents_items py-5">
            <table>
                <tbody>
                    <tr class="row align-items-center text-center text-sm-left">
                        <td class="col-12 col-sm-6"><h4 class="mb-3 mb-sm-0">Deliverables</h4></td>
                        <td class="col-12 col-sm-6">
                          <p>For a wholesome experience with LOOP, Deloitte received a package with deliverable correlated to the service and their needs.</p>
                          <p>The deliverables included a physical <strong>Process Book</strong>, <em>Reimagining the Candidate Experience</em>, consisting of 8 weeks of process and research, a <strong>Tote Bag, Poster, Box of goodies and a Scented Candle</strong> with the smell of success.</p>
                          <p>Followed by that a <strong>Digital Processes Book</strong> The <em>LOOP Rationale</em>, was delivered with the final solution and working prototypes.</p>
                        </td>
                    </tr>
                    <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-5">
                        <h4 class="mb-4 mb-md-0">Process Book</h4>
                      </td>
                      <td class="col-12 col-md-7">
                        <div class="dltt_table_of_contents_img_sec box_shadow text-center pb-4">
                          <a href="../assets/pdf/Layout_Process_Book.pdf" target="_blank">
                              <img src="../assets/img/deloitte/Process_Book_Deloitte.webp" alt="Process_Book_Deloitte">
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-5">
                        <h4>Tote Bag</h4>
                      </td>
                      <td class="col-12 col-md-7">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Bag.png" alt="Bag">
                        </div>
                      </td>
                    </tr>
                    <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-5">
                        <h4 class="mb-4 mb-md-0">Poster</h4>
                      </td>
                      <td class="col-12 col-md-7">
                        <div class="dltt_table_of_contents_img_sec box_shadow text-center pb-4">
                          <img src="../assets/img/deloitte/Poster.webp" alt="Poster">
                        </div>
                      </td>
                    </tr>
                    <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-5">
                        <h4>Box of goodies</h4>
                      </td>
                      <td class="col-12 col-md-7">
                        <div class="pt-3 pt-md-0">
                          <img src="../assets/img/deloitte/Box.webp" alt="Box">
                        </div>
                      </td>
                    </tr>
                    <tr class="row text-center text-md-left">
                      <td class="col-12 col-md-5">
                        <h4 class="mb-4 mb-md-0">Digital Process Book</h4>
                      </td>
                      <td class="col-12 col-md-7">
                        <div class="dltt_table_of_contents_img_sec box_shadow text-center pb-4">
                          <a href="../assets/pdf/SCADproDeloitte_HumanCapital_LOOP_Rational.pdf" target="_blank">
                              <img src="../assets/img/deloitte/Digital_Process_Book.webp" alt="Digital_Process_Book">
                          </a>
                        </div>
                      </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
  </section>
  <!-- Dltt_Table_of_Contents_Area (Physical Deliverables) === End -->



    <section class="deloitte_end_area py-5">
      <div class="container custom_container">
        <div class="row">
            <div class="col-12">
              <div class="deloitte_end_txt_box text-center">
                <p class="tt_normslight">You've made it all the way to the end!</p>
                <p class="tt_normsregular">Thank you for your time.</p>
                <p class="tt_normslight">Feel free to reach out to me for anything.</p>
              </div>
            </div>
        </div>
      </div>
    </section>



    <!-- Footer Section == Start -->
    <footer class="py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="footer-copyright">
              <p class="m-0">Reach out to me at <a href="mailto:vedikabhasin@gmail.com">vedikabhasin@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section == End -->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>


    <!-- <script>
      if (document.referrer.indexOf('localhost:81/deloitte.html') == -1) window.location = 'deloitte.html'
    </script> -->

    <script>
      $(document).ready(function() {
        $('.dltt_toc_story, .dltt_toc_journery, .dltt_toc_vision, .dltt_toc_phy_deliver').click(function() {
            var sectionTo = $(this).attr('href');
            $('html, body').animate({
              scrollTop: $(sectionTo).offset().top-70
            }, 1000);
        });

        $('html, body').animate({
          scrollTop: $('.deloiite_loop_area').offset().top - 80
        }, 1000);
        return false;
      });
    </script>


</body>
</html>



