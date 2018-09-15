<!--navigation bar-->
<nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0;padding:10px">
    <div class="container-fluid">
        <ul class="nav navbar-nav">

            <button style='display: none'class="btn btn-success" type="button" onclick="openNav()"><span class="glyphicon glyphicon-list"></span></button>
            
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <div class="dropdown" style="display:inline-block">
                <button class="btn btn-danger dropdown-toggle" type="button" data-target="#notification_modal" data-toggle="modal"><span class="glyphicon glyphicon-bell"></span><!--unread number of notifications--></button>
                <ul class="dropdown-menu">
                    
                </ul>
                
            </div>
            
            <div class="dropdown" style="display:inline-block">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></button>
                <ul class="dropdown-menu">
                    <li><a data-target="#user_profile_modal" data-toggle="modal" href="#">Profile</a></li>
                    
                    <li><a href="#">Logout</a></li>
                </ul>
                
            </div>
            

        </ul>            
    </div>
</nav>
<!--end navigation bar-->



