<?php include ('header.php'); ?>
    <section class="submitWorkSection">
        <div class="container">
            <div class="row justify-content-around" style="border-radius: 5px; box-shadow: 0 0 20px">
                <div class="col-md-9 col-12 rightBorderedDiv">
                    <div class="formContainer"
                        style="background-color: white; padding: 25px; ">
                        <form action="post-work.php" id="home_submit_work" method="post" enctype="multipart/form-data">
                            <h2 class="text-center"> Submit <span class="themeColor">{</span> Work <span class="themeColor">}</span></h2>
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
                                <select name="subject" class="custom-select" id="subject" style="border-width: 2px">
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
                            <input type="submit" name="submit" value="Get Free Quote" class="btn themeColorBtn btn-block"
                                style="color: white; border-radius: 20px;">
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-8 text-center">
                    <h3 id="makeItSmallHeading" class="themeColor mt-4 mb-4">allprogramminghelp {Features}</h3>
                    <div class="row justify-content-center">
                        <div class="col-8 mt-4 mb-4" style="background-color: white; border-radius: 5px; box-shadow: 0 0 5px">
                            <img src="images/24_7_icon.png" alt="24 * 7" width="70%"><br>
                            24/7 Support
                        </div>
                        <div class="col-8 mt-4 mb-4" style="background-color: white; border-radius: 5px; box-shadow: 0 0 5px">
                            <img src="images/24_7_icon.png" alt="24 * 7" width="70%"><br>
                            24/7 Support
                        </div>
                        <div class="col-8 mt-4 mb-4" style="background-color: white; border-radius: 5px; box-shadow: 0 0 5px">
                            <img src="images/24_7_icon.png" alt="24 * 7" width="70%"><br>
                            24/7 Support
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ('footer.php'); ?>