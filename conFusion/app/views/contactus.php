
    <div class="container" ng-controller = "ContactController">
        <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="#">Home</a></li>
                   <li class="active">Contact Us</li>
               </ul>
            </div>
            <div class="col-xs-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>
        
        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Location Information</h3> 
           </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>: 
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                <h5>Map of our Location</h5>
            </div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1">
                <div class="btn-group" role="group" aria-label="...">
                    <a type="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                    <a type="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a type="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-xs-12">
              <h3>Send us your Feedback</h3> 
           </div>
            <div class="col-xs-12 col-sm-9" ng-controller = "FeedbackController">
                <form class="form-horizontal" name="feedbackForm" ng-submit="sendFeedback()" novalidate>
					<div class="form-group" ng-class="{ 'has-error' : feedbackForm.firstname.$error.required && !feedbackForm.firstname.$pristine }">
                        <label for="firstname" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name"
                        ng-model="feedback.firstName" required>
						<span ng-show="feedbackForm.firstname.$error.required && !feedbackForm.firstname.$pristine" class="help-block">Your First name is required.</span>
                        </div>
                    </div>
					
                    <div class="form-group" ng-class="{ 'has-error' : feedbackForm.lastname.$error.required && !feedbackForm.lastname.$pristine }">
                        <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" name="lastname"  placeholder="Enter Last Name"
                        ng-model="feedback.lastName" required>
					    <span ng-show="feedbackForm.lastname.$error.required && !feedbackForm.lastname.$pristine" class="help-block">Your Last name is required.</span>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="telnum" class="col-sm-2 control-label">Contact Tel.</label>
                        <div class="col-xs-5 col-sm-4 col-md-3">
                            <div class="input-group">
                                <div class="input-group-addon">(</div>
                                    <input type="tel" class="form-control" placeholder="Area code" ng-model="feedback.tel.areaCode">
                                <div class="input-group-addon">)</div>
                            </div>
                        </div>
                        <div class="col-xs-7 col-sm-6 col-md-7">
                                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number"
                                    ng-model="feedback.tel.number">
                        </div>
                    </div>
					
					
                    <div class="form-group"  ng-class="{ 'has-error has-feedback' : feedbackForm.emailid.$invalid && !feedbackForm.emailid.$pristine }">
                        <label for="emailid" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email"
                            ng-model="feedback.email" required>
							<span ng-show="feedbackForm.emailid.$invalid && !feedbackForm.emailid.$pristine" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                            <span ng-show="(feedbackForm.emailid.$invalid ||
                                        feedbackForm.emailid.$error.required) &&
                                        !feedbackForm.emailid.$pristine"
                             class="help-block">Enter a valid email address.</span>
                        </div>
                    </div>
					
                    <div class="form-group"  ng-class="{ 'has-error' : invalidChannelSelection }">                       
					<div class="checkbox col-sm-5 col-sm-offset-2">
                            <label class="checkbox-inline">
                                <input type="checkbox"
                                ng-model="feedback.agree">
                                <strong>May we contact you?</strong>
                            </label>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1" ng-show="feedback.agree">
                            <select class="form-control"
                               ng-model="feedback.mychannel"
                               ng-options="channel.value as channel.label for channel in channels">
                                <option value="">Tel. or Email?</option>
                            </select>
                        <span ng-show="invalidChannelSelection" class="help-block">Select an option.</span>
                        </div>
                    </div>            
					
                    <div class="form-group">
                        <label for="feedback" class="col-sm-2 control-label">Your Feedback</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="12"
                                ng-model="feedback.comments">
                            </textarea>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" ng-disabled="feedbackForm.$invalid">Send Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-3">
              <h3>Your Current Feedback:</h3>
              <p>{{feedback.firstName}} {{feedback.lastName | uppercase }}</p>
              <p>Contact Tel.: ({{feedback.tel.areaCode}}) {{feedback.tel.number}}</p>
              <p>Contact Email: {{feedback.email}}</p>
              <p ng-show="feedback.agree">Contact by: {{feedback.mychannel}}</p>
              <p>Comments: {{feedback.comments}}</p>
            </div>
       </div>

    </div>
