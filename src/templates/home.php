<!-- Introduction -->
<div class="row">
  <article class="col-xs-12">
    <p>
      <h2>Scrum Online</h2>
      Welcome to my little planning poker web app. Use of this app is free of charge for everyone. As a scrum master just start 
      a named session and invite your team to join you. It is recommended to display the scrum master view on the big screen 
      (TV or projector) and let everyone else join via smartphone. To join a session just enter the id displayed in the 
      heading of the scrum master view. For more information please visit my <a href="https://github.com/Toxantron/scrumonline">github repo</a>.
      There you can also find a changelog and open issues about bugs or feature requests.
    </p>
  </article>
</div>
            
<div class="row">
  <h2 class="col-xs-12">Create or join a session</h2>
      
  <!-- Create session panel -->
  <div class="col-sm-6 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">Create session</div>
      <div class="panel-body">  
        <form role="form">
          <div class="form-group" data-ng-class="{'has-error': create.nameError}">
            <label for="sessionName">Session name:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" data-ng-model="create.name" placeholder="My session">
              <span data-ng-if="create.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group">
            <label><input type="checkbox" data-ng-model="create.isPrivate"> is private</label> 
          </div>
          <div class="form-group" data-ng-if="create.isPrivate" data-ng-class="{'has-error': create.pwdError}">
            <label for="password">Password:</label>
            <div class="has-feedback">
              <input type="password" class="form-control" data-ng-model="create.password">
              <span data-ng-if="create.pwdError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Create" data-ng-click="createSession()">
        </form>
      </div>
    </div>        
  </div>
            
  <!-- Join session panel -->
  <div class="col-sm-6 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">Join session</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group" data-ng-class="{'has-error': join.idError}">
            <label>Session id:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" data-ng-model="join.id" placeholder="4711">
              <span data-ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" data-ng-class="{'has-error': join.nameError}">
            <label>Your name:</label>
            <div class="has-feedback" data-ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
              <input type="text" class="form-control"  data-ng-model="join.name" placeholder="John">
              <span data-ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Join" data-ng-click="joinSession()">
       </form>
      </div>
    </div>        
  </div>
  
</div>
