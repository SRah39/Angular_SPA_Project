
    <div class="container">
        <div class="row row-content" ng-controller="DishDetailController">
            <div class="col-xs-12">
                <button class="btn btn-xs btn-primary pull-right"
                    type="button" ui-sref="app.menu">
                    Back to Menu
                </button>
                  <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">{{dish.name}}
                         <span class="label label-danger">{{dish.label}}</span>
                         <span class="badge">{{dish.price | currency}}</span></h2>
                        <p>{{dish.description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-xs-offset-1">
                <p><b>Customer Comments</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>Sort by: </small><input type = "text" ng-model = "orderBy"></p>
                
                    <blockquote ng-repeat = "list in dish.comments | orderBy: orderBy">
                        <p>{{list.rating}} Stars</p>
                        <p>{{list.comment}}</p>
                        <footer>{{list.author}}, {{list.date | date:'mediumDate'}}</footer>
                    </blockquote>
            </div>
            
			<!--<div class="col-xs-9 col-xs-offset-1" ng-controller="DishCommentController">
                    <ul class="list-unstyled"  ng-show="!commentForm.comment.$error.required && !commentForm.Yourname.$error.required && !commentForm.comment.$pristine">
						<li>
							<blockquote>
								<p>{{comment.rating}} Stars</p>
								<p>{{comment.comment}}</p>
								<footer>{{comment.author}}, {{comment.date | date:'mediumDate'}}</footer>
							</blockquote>
						</li>
                    </ul>-->
            
               <div class="col-xs-9 col-xs-offset-1" ng-controller="DishCommentController">
                
                   <ul class="list-unstyled">
                        <blockquote ng-show="!commentForm.$pristine">
                        <p>{{mycomment.rating}} Stars</p>
                        <p>{{mycomment.comment}}</p>
                        <footer>{{mycomment.author}},</footer>
                        </blockquote>
                    </ul>
					
                <form class="form-horizontal" name="commentForm" ng-submit="submitComment()" novalidate>
				
					<div class="form-group" ng-class="{ 'has-error' : commentForm.author.$error.required && !commentForm.author.$pristine }">
						<label for = "author" class = "col-xs-12 col-sm-2 control-label">Your Name</label>
						<div class="col-xs-12 col-sm-10">
							<input type = "text" class = "form-control" id = "author" name = "author" placeholder = "Enter Your Name" ng-model="mycomment.author" required/>
							<span ng-show="commentForm.author.$error.required && !commentForm.author.$pristine" class="help-block">Your Name is required.</span>
						</div>
					</div>
					
					<div class="form-group">
                        <label for="stars" class="col-xs-12 col-sm-2 control-label">Number of Stars</label>
                        <div class="col-xs-12 col-sm-10" id = "stars">
							<label class="radio-inline"><input type="radio" name="rating" id = "rating1" ng-model = "mycomment.rating" ng-value = "1"> 1</label>
							<label class="radio-inline"><input type="radio" name="rating" id = "rating2" ng-model = "mycomment.rating" ng-value = "2"> 2</label>
							<label class="radio-inline"><input type="radio" name="rating" id = "rating3" ng-model = "mycomment.rating" ng-value = "3"> 3</label>
							<label class="radio-inline"><input type="radio" name="rating" id = "rating4" ng-model = "mycomment.rating" ng-value = "4"> 4</label>
							<label class="radio-inline"><input type="radio" name="rating" id = "rating5" ng-model = "mycomment.rating" ng-value = "5"> 5</label>
                        </div>
                    </div>
					
					<div class="form-group" ng-class="{ 'has-error' : commentForm.userComment.$error.required && !commentForm.userComment.$pristine }">
                        <label for="userComment" class="col-xs-12 col-sm-2 control-label">Your Comments</label>
                        <div class="col-xs-12 col-sm-10">
                            <textarea class="form-control" id="userComment" name="comment" rows="12" ng-model="mycomment.comment" required></textarea>
							<span ng-show="commentForm.userComment.$error.required && !commentForm.userComment.$pristine" class="help-block">Your comment is required.</span>
						</div>
                    </div>
					
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" ng-disabled = "commentForm.$invalid">Submit Comment</button>
					  </div>
					</div>
					<!--<p>Task 2: You need to validate that the user name and comments are entered</p>-->
                
				</form>
            </div>
			
        </div>
    </div>