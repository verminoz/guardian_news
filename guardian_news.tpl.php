<?php
/**
 * @file
 * AngularJS template to render a weather block.
 */
?>
<div ng-app="drupalGuardianApp">
  <div ng-controller="DrupalGuardianLatestNews">

    <li ng-repeat="article in articles">
      <a href="{{article.webUrl}}"><h3>{{article.webTitle}}</h3></a>
      <p>{{article.webPublicationDate| date:"MM/dd/yyyy 'at' h:mma"}}</p>
      <p>Temperature: {{article.sectionName}}</p>
    </li>
    <button ng-click="change()">More</button>
  </div>
</div>
