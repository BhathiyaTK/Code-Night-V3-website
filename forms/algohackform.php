<div class="form">
    <p class="alert alert-info text-center" style="font-size: 18px;">
        <b>Algorithm hackthon</b> is only for CIS <b>2<sup>nd</sup> year</b> undergraduates.
    </p>
    <br>
    <div class="text-right" style="color: #e51616; font-size: 14px; font-weight: bold;">&bull; All fields are required</div>
    <form method="post" role="form" class="contactForm" id="algoHackRegForm">
        <h5>Team Name</h5>
        <div class="form-group">
            <input type="text" name="TeamName" class="form-control" id="TeamName" placeholder="Team Name" data-validation="length required" data-validation-allowing="-_" data-validation-length="5-15" data-validation-error-msg="User name has to be an alphanumeric value (5-15 chars)" />
        </div>
        <h5 class="mt-4">Team Leader's Details</h5>
        <div class="form-group">
            <input type="text" name="TeamLeaderName" class="form-control" id="TeamLeaderName" placeholder="Full Name" data-validation="required" />
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <input type="email" class="form-control" name="TeamLeaderEmail" id="TeamLeaderEmail" placeholder="Email" data-validation="email" />
            </div>
            <div class="form-group col-md-6">
            <input type="text" name="TeamLeaderContactNo" class="form-control" id="TeamLeaderContactNo" placeholder="07X XXX XXXX" data-validation="number length" data-validation-length="min10" data-validation-error-msg="Contact number has to be an numeric value (0-9 decimal numbers)" />
            </div>
        </div>
        <h5 class="mt-4">Team Members' Details</h5>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember1" id="TeamMember1" placeholder="1st member name" data-validation="required" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember2" id="TeamMember2" placeholder="2st member name" data-validation="required" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember3" id="TeamMember3" placeholder="3st member name" data-validation="required" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="TeamMember4" id="TeamMember4" placeholder="4st member name" data-validation="required" />
        </div>
        <div id="errormsg">The email you entered, already exist in the system. Please use a different email.</div>
        <div class="text-center"><button type="submit" name="algo-reg-btn">Register</button></div>
    </form>
</div>
