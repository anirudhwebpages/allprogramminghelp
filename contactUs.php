<?php include ('header.php'); ?>
    <section class="contactUsSection">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-5 col-sm-12">
                    <div id="submitWorkForm" 
                        style="background-color: white; padding: 25px; border-radius: 5px; box-shadow: 0 0 20px">
                        <form action="#">
                            <h2 class="text-center"> Submit <span class="themeColor">{</span> Work <span
                                    class="themeColor">}</span></h2>
                            <div class="form-group">
                                <input type="name" class="form-control" id="name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <select name="subject" class="custom-select" id="subject" style="border-width: 2px">
                                    <option selected>Select Subject</option>
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
                                <input type="date" class="form-control" id="pwd" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <p style="color: black; font-weight: 300; font-size: 15px">Choose multiple files at once</p>
                            <button type="submit" class="btn themeColorBtn btn-block"
                                style="color: white; border-radius: 20px;">Get Free Quote</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 pt-lg-0 pt-sm-5 text-center" >
                    <div class="container">
                        <h1 class="sectionHeading">
                            Contact Us
                        </h1>
                        <p>Please contact us with any comments or questions. We make great effort to respond quickly to every email we receive. You can use the form below, or email us at info@codeavail.com.</p>
                        <div class="contactUsForm">
                            <div class="row">
                                <div class="col-6 contactOption" id="callOption" onclick="showCallForm();">
                                    CALL ME NOW
                                </div>
                                <div class="col-6 contactOption" id="messageOption" onclick="showMessageForm();">
                                    MESSAGE US
                                </div>
                            </div>
                            <div class="contactFormInner">
                                <div id="callContainer">
                                    <form action="#">
                                        <div class="form-group">
                                            <h3>Would you like to recieve a instant callback now?</h3>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-block">CALL ME LATER</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-block">CALL ME NOW</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="messageContainer">
                                    <form action="#">
                                        <div class="form-group">
                                            <h3>Send us a message and we will get back to you </h3>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" type="text" placeholder="Message" rows="4"></textarea>
                                        </div>
                                        <button class="btn btn-block">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ('footer.php'); ?>