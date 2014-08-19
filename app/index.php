<!doctype html>
<html ng-app="portfolioApp">
<head>
  <meta charset="utf-8">
  <title>My HTML File</title>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">

  <link rel="stylesheet" href="css/app.css">
  <script src="js/lib/angular.min.js"></script>
  <script src="js/controllers.js"></script>
  <script src="bower_components/angular-route/angular-route.js"></script>

</head>
<body ng-controller="VenueCtrlList">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <input ng-model="query" class="form-control" placeholder="Search" />
      <select ng-model="orderProp">
        <option value="name">Venue Name</option>
        <option value="hereNow.count">Least Popular</option>
        <option value="-hereNow.count">Most Popular</option>
      </select>
    </div>
  <div class="col-md-5">
    <ul class="list-group">
      <li class="list-group-item" ng-repeat="venue in venues | filter:query | orderBy:orderProp">
        <a href="#/venues/{{venue.id}}"><img ng-src="{{venue.categories[0].icon.prefix + '32' + venue.categories[0].icon.suffix}}" /></a>
        <a href="#/venues/{{venue.id}}">{{venue.name}}</a> - {{venue.hereNow.summary}}
      </li>
    </ul>
  </div>
</div>
</body>
</html>