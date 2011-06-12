<html>
   <head>
   <title>My Great Website
   </head>
   <body>
   <div id="fb-root"></div>
   <script src="http://connect.facebook.net/en_US/all.js">
   </script>
   <script>
     FB.init({
       appId:'219028548119143', cookie:true,
       status:true, xfbml:true
     });

     FB.ui({ method: 'apprequests',
       message: 'Here is a new Requests dialog...'});
   </script>
   </body>
</html>