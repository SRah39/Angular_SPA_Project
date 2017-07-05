
    <div class="container" ng-controller="IndexController">
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
				
              <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt={{dish.name}}>
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
        </div>


        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>This Month's Promotions</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
				
            <div class="media">
                    <div class="media-body">
                        <h2 class="media-heading">{{promotion.name}}
                         <span class="label label-danger">{{promotion.label}}</span>
                         <span class="badge">{{promotion.price | currency}}</span></h2>
                        <p>{{promotion.description}}</p>
                    </div>
                    <div class="media-right media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{promotion.image}} alt={{promotion.name}}>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Meet our Culinary Specialists</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
				
                  <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{leadership.image}} alt={{leadership.name}} width="120">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{leadership.name}}
                         <small>{{leadership.designation}}</small>
                         </h3>
                        <p>{{leadership.description}}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
