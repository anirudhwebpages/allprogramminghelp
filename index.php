<?php include('header.php') ?> 

    <section id="headerSection">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 text-lg-left text-center" style=" padding: 0 10px; color: white; margin-top: 10vw">
                    <h1 style="font-weight: 100; font-size: 3.5rem; font-family: 'Roboto Slab'">Make Beautiful Landing
                        <span style="font-weight: 400"> Page easily than ever</span></h1><br>
                    <p>Sed ut perspiciatis unde omnis iste natus error. Sit voluptatem accusantium doloremque
                        laudantium. Totam rem aperiam eaque ipsa.</p><br>
                    <button class="btn btn-lg btn-outline-light mr-lg-3">WATCH VIDEO</button>
                    <button class="btn btn-lg btn-light">DOWNLOAD APP</button>
                </div>
                <div class="col-lg-5 col-md-12" style="padding: 40px 50px 0 ">
                    <div class="container formContainer"
                        style="background-color: white; padding: 25px; border-radius: 5px; box-shadow: 0 0 20px">
                        <form action="post-work.php" id="home_submit_work" method="post" enctype="multipart/form-data">
                            <h2 class="text-center"> Submit <span class="themeColor">{</span> Work <span
                                    class="themeColor">}</span></h2>
                            <div class="form-group">
                                <input type="name" name="fname" class="form-control" id="name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="mobileno" class="form-control" id="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <select name="subject" class="custom-select" id="subject" style="border-width: 2px" required>
                                    <option value="">Select Subject</option>
                                    <option value="C Programming">C Programming</option>
                                    <option value="C++ Programming">C++ Programming</option>
                                    <option value="Java Programming">Java Programming</option>
                                    <option value="Python Programming">Python Programming</option>
                                    <option value="Rapter Programming">Rapter Programming</option>
                                    <option value="Assembly Programming">Assembly Programming</option>
                                    <option value="Visual Studio Programming">Visual Studio Programming</option>
                                    <option value="C Sharp Programming">C Sharp Programming</option>
                                    <option value="Android Programming">Android Programming</option>
                                    <option value="Data Structures & Algorithms">Data Structures & Algorithms</option>
                                    <option value="Database">Database</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                    <option value="Operating System">Operating System</option>
                                    <option value="Computer Network">Computer Network</option>
                                    <option value="UML Diagrams">UML Diagrams</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Mathematics & Discrete">Mathematics & Discrete</option>
                                    <option value="Electronics & Electrical Help">Electronics & Electrical Help</option>
                                    <option value="Matlab & Mathematica">Matlab & Mathematica</option>
                                    <option value="Statistics & Analysis">Statistics & Analysis</option>
                                    <option value="Data Mining">Data Mining</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="MS Office">MS Office</option>
                                    <option value="R Programming">R Programming</option>
                                    <option value="Weka, Rapid Miner & XLMiner">Weka, Rapid Miner & XLMiner</option>
                                    <option value="Technical Paper Writing">Technical Paper Writing</option>
                                    <option value="IT Write Up Assignments">IT Write Up Assignments</option>
                                    <option value="Assignment Writing">Assignment Writing</option>
                                    <option value="Online Quiz">Online Quiz</option>
                                    <option value="Research Paper Writing">Research Paper Writing</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="assignment_files[]" class="custom-file-input" id="customFile" multiple>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <div class="attach_lable_string"></div>
                            </div>
                            <p style="color: black; font-weight: 300; font-size: 15px">Choose multiple files at once</p>
                            <input type="submit" name="submit" value="Get Free Quote" class="btn themeColorBtn btn-block" style="color: white; border-radius: 20px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container"
        style="position: relative; background-color: white; margin-top: -60px; box-shadow: 0 0 20px; padding: 40px">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="row mt-3">
                    <div class="col-3 ">
                        <span class="fas fa-atom fa-4x" style="margin-top: 10px; -webkit-text-stroke: 6px white"></span>
                    </div>
                    <div class="col-9">
                        <h5>Unique Design</h5>
                        <p style="color: #555555">Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris
                            nisi ut aliquip ex ea. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row mt-3">
                    <div class="col-3">
                        <span class="fas fa-desktop fa-4x"
                            style="margin-top: 10px; -webkit-text-stroke: 5px white"></span>
                    </div>
                    <div class="col-9">
                        <h5>Fully Responsive</h5>
                        <p style="color: #555555">Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris
                            nisi ut aliquip ex ea. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row mt-3">
                    <div class="col-3">
                        <span class="fas fa-compass fa-4x"
                            style="margin-top: 10px; -webkit-text-stroke: 5px white"></span>
                    </div>
                    <div class="col-9">
                        <h5>Fast Loading Optimzed</h5>
                        <p style="color: #555555">Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris
                            nisi ut aliquip ex ea. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row mt-3">
                    <div class="col-3">
                        <span class="fas fa-sticky-note fa-5x"
                            style="margin-top: 10px; -webkit-text-stroke: 5px white"></span>
                    </div>
                    <div class="col-9">
                        <h5>Cross browser compatible</h5>
                        <p style="color: #555555">Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris
                            nisi ut aliquip ex ea. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row mt-3">
                    <div class="col-3">
                        <span class="fas fa-clock fa-5x"
                            style="margin-top: 10px; -webkit-text-stroke: 5px white"></span>
                    </div>
                    <div class="col-9">
                        <h5>Save Time</h5>
                        <p style="color: #555555">Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris
                            nisi ut aliquip ex ea. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row mt-3">
                    <div class="col-3">
                        <span class="fas fa-calendar fa-5x"
                            style="margin-top: 10px; -webkit-text-stroke: 5px white"></span>
                    </div>
                    <div class="col-9">
                        <h5>Unlimited Color</h5>
                        <p style="color: #555555"></p>Ut enim ad minim veniam, quis nost rud exercitation ullamco
                        laboris nisi ut aliquip ex ea. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutSection">
        <div class="container">
            <h1 class="sectionHeading">About The App</h1>
            <p class="postHeadingPara">Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius
                natoque penatibus et magnis dis parturient montes nascetur.</p>
        </div>
        <div class="container mt-lg-5 ">
            <div class="row ">
                <div class="col-lg-6 ">
                    <h2 style="font-size: 32px; font-family: 'Roboto Slab' ">Take a Look Around our App</h2>
                    <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip. Ex ea commodo consequat duis aute irure dolor.</p>
                    <ul style="font-size: 18px;">
                        <li>Provident ipsam commodi sed architecto ratione omnis!</li>
                        <li>Ab facilis ratione sequi sed consequatur, quia nemo nulla.</li>
                        <li>Iure aliquam reiciendis, omnis nulla fuga similique ipsum.</li>
                    </ul>
                    <button class="btn btn-lg "
                        style="background-image: linear-gradient(to top left, #C845AA, #770DDB); color: white; margin: 20px ">Download</button>
                </div>
                <div class="col-lg-6 ">
                    <embed width="100%" height="300rem" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </div>
            </div>
        </div>
    </section>
    <section id="amazingFeaturesSection" class=" greySection">
        <div class="container ">
            <h1 class="sectionHeading">Amazing Features</h1>
            <p class="postHeadingPara">Nam et sagittis diam sed tempor augue. Sit amet egestas scelerisque orci varius
                natoque penatibus. Et magnis dis parturient montes nascetur.</p>
            <div class="row ">
                <div class="col-lg-4 " style="text-align: right ">
                    <div class="row ">
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <img height="100% " width="100% " src="images/iphone.png ">
                </div>

                <div class="col-lg-4 " style="text-align: left ">
                    <div class="row ">
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 " style="margin: 0 0 20px ">
                            <div class="row ">
                                <div class="col-3 ">
                                    <span class="fas fa-umbrella fa-4x "></span>
                                </div>
                                <div class="col-9 ">
                                    <h5 style="font-weight: 600 ">User Friendly</h5>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa. Qui officia
                                        deserunt mollit anim id.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="screenshotsSection">
        <div class="container">
            <h1 class="sectionHeading">
                Our App Screenshots
            </h1>
            <p class="postHeadingPara">
                Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
                magnis dis parturient montes nascetur.
            </p>






        </div>
    </section>
    <section id="planSection">
        <div
            style="background-image: linear-gradient(to top left, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8) ), url('images/bg.jpeg'); background-size: cover; background-attachment: fixed; padding-top: 30px; padding-bottom: 30px">
            <div class="container">
                <h1 class="sectionHeading">
                    Choose Your Plan
                </h1>
                <p class="postHeadingPara">
                    Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus
                    et magnis dis parturient montes nascetur.
                </p>
                <div class="row text-center justify-content-between ">
                    <div class="col-lg-4 ">
                        <div class="mr-lg-2 plans" style="padding: 20px; background-color: white; border-radius: 5px ">
                            <h2 class="themeColor">Basic Plan</h2>
                            <h1 class="planPrice">$19.99</h1>
                            <p><span class="fas fa-check themeColor"></span> 2 GB Space</p>
                            <p><span class="fas fa-check themeColor"></span> 1 Member</p>
                            <p><span class="fas fa-times"></span> <del>24/7 Live Support</del></p>
                            <p><span class="fas fa-times"></span> <del>Personal Assistant</del></p>
                            <p><span class="fas fa-times"></span> <del>Lifetime Access</del></p>
                            <button class="btn btn-block themeColorBtn">SIGN UP</button>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="mr-lg-2 ml-lg-2 plans"
                            style="padding: 20px; background-color: white; border-radius: 5px ">
                            <h2 class="themeColor">Premium Plan</h2>
                            <h1 class="planPrice">$49.99</h1>
                            <p><span class="fas fa-check themeColor"></span> 5 Member</p>
                            <p><span class="fas fa-check themeColor"></span> 10 GB Space</p>
                            <p><span class="fas fa-check themeColor"></span> 24/7 Live Suffort</p>
                            <p><span class="fas fa-times"></span> <del>Personal Assistant</del></p>
                            <p><span class="fas fa-times"></span> <del>Lifetime Access</del></p>
                            <button class="btn btn-block themeColorBtn">SIGN UP</button>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="ml-lg-2 plans" style="padding: 20px; background-color: white; border-radius: 5px ">
                            <h2 class="themeColor">Business Plan</h2>
                            <h1 class="planPrice">$99.99</h1>
                            <p><span class="fas fa-check themeColor"></span> Unlimited Member</p>
                            <p><span class="fas fa-check themeColor"></span> Unlimited Space</p>
                            <p><span class="fas fa-check themeColor"></span> 24/7 Live Suffort</p>
                            <p><span class="fas fa-check themeColor"></span> 5 Member</p>
                            <p><span class="fas fa-check themeColor"></span> 5 Member</p>
                            <button class="btn btn-block themeColorBtn">SIGN UP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="propSection">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-3 " style="padding: 20px">
                    <div class="shadowBox">
                        <h1 class="text-center ">
                            <span class="fas fa-trophy themeColor"></span>
                        </h1>
                        <h1>120K</h1>
                        <h4>HAPPY USERS</h4>
                    </div>
                </div>
                <div class="col-lg-3 " style="padding: 20px">
                    <div class="shadowBox">
                        <h1 class="text-center ">
                            <span class="fas fa-desktop themeColor"></span>
                        </h1>
                        <h1>9570</h1>
                        <h4>LINE OF CODE</h4>
                    </div>
                </div>
                <div class="col-lg-3" style="padding: 20px">
                    <div class="shadowBox">
                        <h1 class="text-center ">
                            <span class="fas fa-download themeColor"></span>
                        </h1>
                        <h1>756k</h1>
                        <h4>DOWNLOADS</h4>
                    </div>
                </div>
                <div class="col-lg-3 " style="padding: 20px">
                    <div class="shadowBox">
                        <h1 class="text-center ">
                            <span class="fas fa-star themeColor"></span>
                        </h1>
                        <h1>4.97/5</h1>
                        <h4>APP RATING</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="teamSection" style="background-color: #dddddd; padding: 50px 10px">
        <div class="container text-center">
            <h1 class="sectionHeading">Our Team</h1>
            <p class="postHeadingPara">
                Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
                magnis dis parturient montes nascetur.
            </p>
            <div class="row justify-content-between">
                <div class="col-lg-3 ">
                    <img src="images/team-1.jpg " width="100% ">
                </div>
                <div class="col-lg-3 ">
                    <img src="images/team-2.jpg " width="100% ">
                </div>
                <div class="col-lg-3 ">
                    <img src="images/team-3.jpg " width="100% ">
                </div>
                <div class="col-lg-3 ">
                    <img src="images/team-4.jpg " width="100% ">
                </div>

            </div>
        </div>
    </section>
    <section id="clientsSection " class="text-center">
        <div class="container">
            <h1 class="sectionHeading">Clients Testimonial</h1>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <img class="rounded-circle" src="images/client-1.jpg" height="100px" width="100px"
                                alt="First slide">
                            <p>Consequuntur inventore fugit? Laboriosam sapiente pariatur laborum ducimus. Voluptates
                                ducimus suscipit minima vero ullam veritatis fuga. Porro iusto quo quis. </p>
                            <h5 class=clientName>John Doe</h5>
                            <i class="clientPost">CEO at ABC Software</i>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <img class="rounded-circle" src="images/client-2.jpg" height="100px" width="100px"
                                alt="First slide">
                            <p>Consequuntur inventore fugit? Laboriosam sapiente pariatur laborum ducimus. Voluptates
                                ducimus suscipit minima vero ullam veritatis fuga. Porro iusto quo quis. </p>
                            <h5 class=clientName>John Doe</h5>
                            <i class="clientPost">CEO at ABC Software</i>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <img class="rounded-circle" src="images/client-3.jpg" height="100px" width="100px"
                                alt="First slide">
                            <p>Consequuntur inventore fugit? Laboriosam sapiente pariatur laborum ducimus. Voluptates
                                ducimus suscipit minima vero ullam veritatis fuga. Porro iusto quo quis. </p>
                            <h5 class=clientName>John Doe</h5>
                            <i class="clientPost">CEO at ABC Software</i>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="themeColor" style="font-weight: 800; font-size: 30px">
                        < </span> <span class="sr-only">Previous
                    </span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="themeColor" style="font-weight: 800; font-size: 30px"> > </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



        </div>
    </section>

    <section id="downloadSection"
        style="padding: 100px 10px; background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('images/bg.jpeg'); background-attachment: fixed; background-size: cover">
        <div class="container text-center">
            <h1 class="sectionHeading">
                Download The App
            </h1>
            <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci<br> varius natoque penatibus et
                magnis dis parturient montes nascetur.</p>
            <br>
            <a href="#"><img src="images/googlePlay.png" width="155"></a>
            <a href="#"><img src="images/appStore.png" width="155"></a>
        </div>
    </section>
    <section id="getInTouchSection">
        <div class="container">
            <h1 class="sectionHeading greySection">Get In Touch</h1>
            <div class="row">
                <div class="col-lg-6 col-12 p-2">
                    <div class="getInTouchFormContainer">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <span class="fas fa-envelope fa-4x themeColor"></span>
                                        </div>
                                        <div class="col-8">
                                            <a>example@gmail.com</a><br>
                                            <a>example2@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <span class="fa fa-phone fa-4x themeColor "></span>
                                        </div>
                                        <div class="col-8">
                                            <a>(+123) 456 - 7890 </a><br>
                                            <a>(+123) 456 - 7890 </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <input class="form-control" type="text" placeholder="Full Name *">
                                </div>
                                <div class="col-lg-6 p-3">
                                    <input class="form-control" type="email" placeholder="Email *">
                                </div>
                                <div class="col-lg-6 p-3">
                                    <input class="form-control" type="tel" placeholder="Phone Number *">
                                </div>
                                <div class="col-lg-6 p-3">
                                    <input class="form-control" type="text" placeholder="Subject *">
                                </div>
                                <div class="col-lg-12 p-3">
                                    <textarea class="form-control" type="messages" placeholder="Messages *"
                                        rows="4"></textarea>
                                </div>
                                <div class="col-lg-12 p-3">
                                    <button class="form-control btn btn-block themeColorBtn" type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12 p-2">
                    <div class="mapContainer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.466479650533!2d89.55074141414967!3d22.822224885054837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff90089bf9c5b3%3A0xd132753d2788581b!2z4Ka24Ka_4KasIOCmrOCmvuCnnOCmv-CmsCDgpq7gp4vgp5w!5e0!3m2!1sbn!2sbd!4v1523537037528"
                            allowfullscreen="" class="location_map" width="100%" height="433" frameborder="0">

                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <a href="visualBasicAssignmentHelp.php">
        <button class="btn themeColorBtn">
            Visual Basic Assignment Help
        </button>
    </a>
    <a href="submitWork.php">
        <button class="btn themeColorBtn">
            Submit Work
        </button>
    </a>
   <?php include('footer.php'); ?>