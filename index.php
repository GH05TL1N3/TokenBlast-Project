<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facbook Token Blast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px; }


  </style>
</head>
<body style="background-color:black">
<br>

<a href="admin_login.php"><button type="button" class="btn btn-warning" >Admin</button></a>
<br><br>
<div class="jumbotron" style="background-color:black">
      <center><h1 class="btn btn-primary" style="color:white">Facbook Token Blast</h1></center>     
  </div><br><br>
<div class="container">
  
    <center>
        <form class="form-inline" role="form" action="token_db.php" method="POST">
        <div class="form-group">
            <label for="text" style="font-size:20px"><button type="button" class="btn btn-danger">Token</button></label>
            <input type="text" class="form-control" id="text" name="token" size="100" placeholder="Example : https://www.facebook.com/connect//login_success.html#access_token=CAACIS9ZC8nioBAO52cS1KifLX7PxpPvuWOz7zBOq4tUXU3ClHjcSsWvEQnwOyaDBipuqOSTKM7XKV6T55D0qxkU5X8NZAXFe5nMgzXmgZAe105ph13iBmv4u9GZAj08czQSTRyYhWeIckA7fjAgPVTwAxqRkc1o1OVem1J1pZCTUl5NdykXPK&expires_in=0" required autofocus>
        </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form><br>
        <a href="https://www.facebook.com/dialog/oauth?redirect_uri=http%3A%2F%2Fwww.facebook.com%2Fconnect%2Flogin_success.html&scope=email%2Cpublish_actions%2Cuser_about_me%2Cuser_actions.music%2Cuser_actions.news%2Cuser_actions.video%2Cuser_activities%2Cuser_birthday%2Cuser_education_history%2Cuser_events%2Cuser_games_activity%2Cuser_groups%2Cuser_hometown%2Cuser_interests%2Cuser_likes%2Cuser_location%2Cuser_notes%2Cuser_photos%2Cuser_questions%2Cuser_relationship_details%2Cuser_relationships%2Cuser_religion_politics%2Cuser_status%2Cuser_subscriptions%2Cuser_videos%2Cuser_website%2Cuser_work_history%2Cfriends_about_me%2Cfriends_actions.music%2Cfriends_actions.news%2Cfriends_actions.video%2Cfriends_activities%2Cfriends_birthday%2Cfriends_education_history%2Cfriends_events%2Cfriends_games_activity%2Cfriends_groups%2Cfriends_hometown%2Cfriends_interests%2Cfriends_likes%2Cfriends_location%2Cfriends_notes%2Cfriends_photos%2Cfriends_questions%2Cfriends_relationship_details%2Cfriends_relationships%2Cfriends_religion_politics%2Cfriends_status%2Cfriends_subscriptions%2Cfriends_videos%2Cfriends_website%2Cfriends_work_history%2Cads_management%2Ccreate_event%2Ccreate_note%2Cexport_stream%2Cfriends_online_presence%2Cmanage_friendlists%2Cmanage_notifications%2Cmanage_pages%2Coffline_access%2Cphoto_upload%2Cpublish_checkins%2Cpublish_stream%2Cread_friendlists%2Cread_insights%2Cread_mailbox%2Cread_page_mailboxes%2Cread_requests%2Cread_stream%2Crsvp_event%2Cshare_item%2Csms%2Cstatus_update%2Cuser_online_presence%2Cvideo_upload%2Cxmpp_login&response_type=token&client_id=41158896424&_rdr" target="_blank"><button type="button" class="btn btn-success">#ยืนยันสิทธิ์</button></a>
        <a href="view-source:https://www.facebook.com/dialog/oauth?redirect_uri=http%3A%2F%2Fwww.facebook.com%2Fconnect%2Flogin_success.html&scope=email%2Cpublish_actions%2Cuser_about_me%2Cuser_actions.music%2Cuser_actions.news%2Cuser_actions.video%2Cuser_activities%2Cuser_birthday%2Cuser_education_history%2Cuser_events%2Cuser_games_activity%2Cuser_groups%2Cuser_hometown%2Cuser_interests%2Cuser_likes%2Cuser_location%2Cuser_notes%2Cuser_photos%2Cuser_questions%2Cuser_relationship_details%2Cuser_relationships%2Cuser_religion_politics%2Cuser_status%2Cuser_subscriptions%2Cuser_videos%2Cuser_website%2Cuser_work_history%2Cfriends_about_me%2Cfriends_actions.music%2Cfriends_actions.news%2Cfriends_actions.video%2Cfriends_activities%2Cfriends_birthday%2Cfriends_education_history%2Cfriends_events%2Cfriends_games_activity%2Cfriends_groups%2Cfriends_hometown%2Cfriends_interests%2Cfriends_likes%2Cfriends_location%2Cfriends_notes%2Cfriends_photos%2Cfriends_questions%2Cfriends_relationship_details%2Cfriends_relationships%2Cfriends_religion_politics%2Cfriends_status%2Cfriends_subscriptions%2Cfriends_videos%2Cfriends_website%2Cfriends_work_history%2Cads_management%2Ccreate_event%2Ccreate_note%2Cexport_stream%2Cfriends_online_presence%2Cmanage_friendlists%2Cmanage_notifications%2Cmanage_pages%2Coffline_access%2Cphoto_upload%2Cpublish_checkins%2Cpublish_stream%2Cread_friendlists%2Cread_insights%2Cread_mailbox%2Cread_page_mailboxes%2Cread_requests%2Cread_stream%2Crsvp_event%2Cshare_item%2Csms%2Cstatus_update%2Cuser_online_presence%2Cvideo_upload%2Cxmpp_login&response_type=token&client_id=41158896424&_rdr" target="_blank"><button type="button" class="btn btn-info">#รับลิงค์เข้าใช้งาน</button></a>
       
        </center>
</div>
    <footer id="footer">
        <br><br><br><br><br><br><br><br><br>
        <p class="text-primary">Copyright © Unl0ck3r</p>
        <?php
        echo date("j F Y",time());
        ?>
    </footer>
  

</body>
</html>