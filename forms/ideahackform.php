<div class="form">
    <p class="alert alert-info text-center" style="font-size: 18px;">
        <b>Idea hackthon</b> is only for CIS <b>3<sup>rd</sup> year</b> undergraduates.
    </p>
    <br>
    <div class="text-right" style="color: #e51616; font-size: 14px; font-weight: bold;">&bull; All fields are required</div>
    <form method="post" role="form" class="contactForm" id="ideaHackRegForm">
        <h5>Team Name</h5>
        <div class="form-group">
            <input type="text" name="TeamName" class="form-control" id="TeamName" placeholder="Team Name" data-validation="length custom" data-validation-regexp="^([a-zA-Z\s]{3,})$" data-validation-length="5-15" data-validation-error-msg="Team name allows only (A-Z, a-z, - , _ ) values (5-15 chars)" />
        </div>
        <h5 class="mt-4">Team Leader's Details</h5>
        <div class="form-group">
            <input type="text" name="TeamLeaderName" class="form-control" id="TeamLeaderName" placeholder="Full Name"  data-validation="custom" data-validation-regexp="^([a-zA-Z\s]{3,})$" data-validation-error-msg="Team leader name can contain alpabetical values only (A-Z, a-z)" />
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <input type="email" class="form-control" name="TeamLeaderEmail" id="TeamLeaderEmail" placeholder="Email" data-validation="email" />
            </div>
            <div class="form-group col-md-6">
            <input type="text" name="TeamLeaderContactNo" class="form-control" id="TeamLeaderContactNo" placeholder="07X XXX XXXX" data-validation="number length" data-validation-length="10" data-validation-error-msg="Contact number has to be an numeric value (must have 10 numbers)" />
            </div>
        </div>
        <h5 class="mt-4">Team Members' Details</h5>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember1" id="TeamMember1" placeholder="1st member name" data-validation="custom" data-validation-regexp="^([a-zA-Z\s]{3,})$" data-validation-error-msg="This can contain alpabetical values only (A-Z, a-z)" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember2" id="TeamMember2" placeholder="2st member name" data-validation="custom" data-validation-regexp="^([a-zA-Z\s]{3,})$" data-validation-error-msg="This can contain alpabetical values only (A-Z, a-z)" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember3" id="TeamMember3" placeholder="3st member name" data-validation="custom" data-validation-regexp="^([a-zA-Z\s]{3,})$" data-validation-error-msg="This can contain alpabetical values only (A-Z, a-z)" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember4" id="TeamMember4" placeholder="4st member name" data-validation="custom" data-validation-regexp="^([a-zA-Z\s]{3,})$" data-validation-error-msg="This can contain alpabetical values only (A-Z, a-z)" />
        </div>
        <h5 class="mt-4">Project Details</h5>
        <div class="form-group">
            <select class="form-control" name="TeamIdea" id="TeamIdea" data-validation="required">
            <option value="" selected>Select a project</option>
            <option value="Better transportation infrastructure within university premises">Better transportation infrastructure within university premises</option>
            <option value="Reduce tragic deaths caused around belihuloya due to changing weather condition">Reduce tragic deaths caused around belihuloya due to changing weather condition</option>
            <option value="Smart way to eat healthy food at university">Smart way to eat healthy food at university</option>
            <option value="Effective strategic for enhance waste management at university">Effective strategic for enhance waste management at university</option>
            <option value="Real-time AR navigation system for belihuloya">Real-time AR navigation system for belihuloya</option>
            <option value="Automating the manual workflow processes of non-academic staff within the university">Automating the manual workflow processes of non-academic staff within the university</option>
            </select>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="TeamProjectDescription" id="TeamProjectDescription" rows="5" placeholder="Project description" data-validation="required"></textarea>
            (<span id="pres-max-length">100</span> characters left)
        </div>
        <div id="errormsg">The email you entered, already exist in the system. Please use a different email.</div>
        <div class="text-center"><button type="submit" name="idea-reg-btn">Register</button></div>
    </form>
</div>
